<?php
$hook = array(
    'hook' => 'TicketClose',
    'function' => 'TicketClose',
    'description' => array(
        'Chinese' => 'Ticket 关闭以后发送信息.',
        'english' => 'When the ticket is closed it sends a message.'
    ),
    'type' => 'client',
    'extra' => '',
	'defaultmessage' => '支持单:{ticketno}已关闭.',
    'variables' => '{firstname}, {lastname}, {ticketno}',
);

if(!function_exists('TicketClose')){
    function TicketClose($args){
        $class = new AktuelSms();
        $template = $class->getTemplateDetails(__FUNCTION__);

        if($template['active'] == 0){
            return null;
        }
        $settings = $class->getSettings();
        if(!$settings['api'] || !$settings['apiparams']){
            return null;
        }

        $userSql = "
        SELECT a.tid,b.id as userid,b.firstname,b.lastname,`b`.`phonenumber` as `gsmnumber` FROM `tbltickets` as `a`
        JOIN tblclients as b ON b.id = a.userid

        WHERE a.id = '".$args['ticketid']."'

        LIMIT 1
    ";
		
        $result = mysql_query($userSql);
        $num_rows = mysql_num_rows($result);
        if($num_rows == 1){
            $UserInformation = mysql_fetch_assoc($result);
            $template['variables'] = str_replace(" ","",$template['variables']);
            $replacefrom = explode(",",$template['variables']);
            $replaceto = array($UserInformation['firstname'],$UserInformation['lastname'],$UserInformation['tid']);
            $message = str_replace($replacefrom,$replaceto,$template['template']);
            $class->setGsmnumber($UserInformation['gsmnumber']);
            $class->setMessage($message);
            $class->setUserid($UserInformation['userid']);
            $class->send();
        }
    }
}

return $hook;
