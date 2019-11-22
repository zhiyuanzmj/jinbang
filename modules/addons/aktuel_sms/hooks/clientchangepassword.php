<?php
$hook = array(
    'hook' => 'ClientChangePassword',
    'function' => 'ClientChangePassword',
    'description' => array(
        'chinese' => '客户更改密码以后',
        'english' => 'After client change password'
    ),
    'type' => 'client',
    'extra' => '',
    'variables' => '{firstname},{lastname}',
    'defaultmessage' => '您的密码已经更改完毕,如果非本人操作,请联系管理员.',
);

if(!function_exists('ClientChangePassword')){
    function ClientChangePassword($args){
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
            $replaceto = array($UserInformation['firstname'],$UserInformation['lastname']);
            $message = str_replace($replacefrom,$replaceto,$template['template']);

            $class->setGsmnumber($UserInformation['gsmnumber']);
            $class->setUserid($UserInformation['id']);
            $class->setMessage($message);
            $class->send();
        }
    }
}

return $hook;