<?php
$hook = array(
    'hook' => 'InvoiceCreated',
    'function' => 'InvoiceCreated',
    'description' => array(
        'chinese' => '账单生成以后',
        'english' => 'After invoice created'
    ),
    'type' => 'client',
    'extra' => '',
    'defaultmessage' => '您的账单#{invoiceid}已经生成,合计:{total},请在有效期限{duedate}前支付.',
    'variables' => '{firstname}, {lastname}, {duedate}, {total}, {invoiceid}'
);
if(!function_exists('InvoiceCreated')){
    function InvoiceCreated($args){

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
        SELECT a.total,a.duedate,b.id as userid,b.firstname,b.lastname,`b`.`phonenumber` as `gsmnumber` FROM `tblinvoices` as `a`
        JOIN tblclients as b ON b.id = a.userid
        
        
        WHERE a.id = '".$args['invoiceid']."'
        
        
        
        LIMIT 1
    ";

        $result = mysql_query($userSql);
        $num_rows = mysql_num_rows($result);
        if($num_rows == 1){
            $UserInformation = mysql_fetch_assoc($result);
            $template['variables'] = str_replace(" ","",$template['variables']);
            $replacefrom = explode(",",$template['variables']);
            $replaceto = array($UserInformation['firstname'], $UserInformation['lastname'], $class->changeDateFormat($UserInformation['duedate']), $UserInformation['total'], $args['invoiceid']);
            $message = str_replace($replacefrom,$replaceto,$template['template']);

            $class->setGsmnumber($UserInformation['gsmnumber']);
            $class->setMessage($message);
            $class->setUserid($UserInformation['userid']);
            $class->send();
        }
    }
}

return $hook;