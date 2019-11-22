<?php
$hook = array(
    'hook' => 'ClientLogin',
    'function' => 'ClientLogin_admin',
    'type' => 'admin',
    'extra' => '',
    'defaultmessage' => '({firstname} {lastname}),登录到网站前台',
    'variables' => '{firstname},{lastname}'
);

if(!function_exists('ClientLogin_admin')){
    function ClientLogin_admin($args){
        $class = new AktuelSms();
        $template = $class->getTemplateDetails(__FUNCTION__);
        if($template['active'] == 0){
            return null;
        }
        $settings = $class->getSettings();
        if(!$settings['api'] || !$settings['apiparams']){
            return null;
        }
        $admingsm = explode(",",$template['admingsm']);

        $userSql = "SELECT `a`.`id`,`a`.`firstname`, `a`.`lastname`, `a`.`phonenumber` as `gsmnumber`
        FROM `tblclients` as `a`
        
        
        WHERE `a`.`id` = '".$args['userid']."'
        AND `b`.`fieldid` = '".$settings['gsmnumberfield']."'
        
        
        LIMIT 1";
        $result = mysql_query($userSql);
        $num_rows = mysql_num_rows($result);

        if($num_rows == 1){
            $UserInformation = mysql_fetch_assoc($result);

			$template['variables'] = str_replace(" ","",$template['variables']);
			$replacefrom = explode(",",$template['variables']);
			$replaceto = array($UserInformation['firstname'],$UserInformation['lastname']);
			$message = str_replace($replacefrom,$replaceto,$template['template']);

			foreach($admingsm as $gsm){
				if(!empty($gsm)){
					$class->setGsmnumber( trim($gsm));
					$class->setUserid(0);
					$class->setMessage($message);
				}	$class->send();
            }
        }
    }
}

return $hook;
