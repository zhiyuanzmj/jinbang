<?php
$hook = array(
    'hook' => 'AfterRegistrarRenewal',
    'function' => 'AfterRegistrarRenewal',
    'description' => array(
        'chinese' => '域名续费以后',
        'english' => 'After domain renewal'
    ),
    'type' => 'client',
    'extra' => '',
    'defaultmessage' => '您的域名{domain}已经成功续费.',
    'variables' => '{firstname},{lastname},{domain}'
);
if(!function_exists('AfterRegistrarRenewal')){
    function AfterRegistrarRenewal($args){
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
	
	
	WHERE `a`.`id` = '".$args['params']['userid']."'
		
	
	LIMIT 1";
    $result = mysql_query($userSql);
    $num_rows = mysql_num_rows($result);
    if($num_rows == 1){
        $UserInformation = mysql_fetch_assoc($result);

        $template['variables'] = str_replace(" ","",$template['variables']);
        $replacefrom = explode(",",$template['variables']);
        $replaceto = array($UserInformation['firstname'],$UserInformation['lastname'],$args['params']['sld'].".".$args['params']['tld']);
        $message = str_replace($replacefrom,$replaceto,$template['template']);

        $class->setGsmnumber($UserInformation['gsmnumber']);
        $class->setUserid($args['params']['userid']);
        $class->setMessage($message);
        $class->send();
    }

}
}

return $hook;