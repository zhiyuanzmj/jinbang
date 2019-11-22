<?php
$hook = array(
    'hook' => 'AfterModuleChangePackage',
    'function' => 'AfterModuleChangePackage',
    'description' => array(
        'chinese' => '模块更改主机套餐之后',
        'english' => 'After module Change Package'
    ),
    'type' => 'client',
    'extra' => '',
    'defaultmessage' => '您的产品套餐已经更改完毕.({domain})',
    'variables' => '{firstname},{lastname},{domain}'
);
if(!function_exists('AfterModuleChangePackage')){
    function AfterModuleChangePackage($args){
        $type = $args['params']['producttype'];

        if($type == "hostingaccount"){
            $class = new AktuelSms();
            $template = $class->getTemplateDetails(__FUNCTION__);
            if($template['active'] == 0){
                return null;
            }
            $settings = $class->getSettings();
            if(!$settings['api'] || !$settings['apiparams']){
                return null;
            }
        }else{
            return null;
        }

        $userSql = "SELECT `a`.`id`,`a`.`firstname`, `a`.`lastname`, `a`.`phonenumber` as `gsmnumber`
    FROM `tblclients` as `a`
    WHERE `a`.`id`  = '".$args['params']['clientsdetails']['userid']."'
    AND `b`.`fieldid` = '".$settings['gsmnumberfield']."'
    LIMIT 1";

        $result = mysql_query($userSql);
        $num_rows = mysql_num_rows($result);
        if($num_rows == 1){
            $UserInformation = mysql_fetch_assoc($result);

            $template['variables'] = str_replace(" ","",$template['variables']);
            $replacefrom = explode(",",$template['variables']);
            $replaceto = array($UserInformation['firstname'],$UserInformation['lastname'],$args['params']['domain']);
            $message = str_replace($replacefrom,$replaceto,$template['template']);

            $class->setGsmnumber($UserInformation['gsmnumber']);
            $class->setUserid($args['params']['clientsdetails']['userid']);
            $class->setMessage($message);
            $class->send();
        }
    }
}
return $hook;
