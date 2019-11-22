<?php
$hook = array(
    'hook' => 'ClientAdd',
    'function' => 'ClientAdd',
    'description' => array(
        'chinese' => '客户注册成功以后',
        'english' => 'After client register'
    ),
    'type' => 'client',
    'extra' => '',
    'defaultmessage' => '您已经注册成功-账户信息Email:{email} 密码:{password}.',
    'variables' => '{firstname},{lastname},{email},{password}'
);
if(!function_exists('ClientAdd')){
    function ClientAdd($args){
        $class = new AktuelSms();
        $template = $class->getTemplateDetails(__FUNCTION__);
        if($template['active'] == 0){
            return null;
        }
        $settings = $class->getSettings();
        if(!$settings['api'] || !$settings['apiparams']){
            return null;
        }

        $userSql = "SELECT `a`.`id`,`a`.`firstname`, `a`.`lastname`, `a`.`phonenumber` as `gsmnumber`
        FROM `tblclients` as `a`
        
        
        WHERE `a`.`id` = '".$args['userid']."'
                
        
        LIMIT 1";
        $result = mysql_query($userSql);
        $num_rows = mysql_num_rows($result);

        if($num_rows == 1){
            $UserInformation = mysql_fetch_assoc($result);

            $template['variables'] = str_replace(" ","",$template['variables']);
            $replacefrom = explode(",",$template['variables']);
            $replaceto = array($UserInformation['firstname'],$UserInformation['lastname'],$args['email'],$args['password']);
            $message = str_replace($replacefrom,$replaceto,$template['template']);

            $class->setGsmnumber($UserInformation['gsmnumber']);
            $class->setMessage($message);
            $class->setUserid($args['userid']);
            $class->send();
        }
    }
}

return $hook;