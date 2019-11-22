<?php
$hook = array(
    'hook' => 'InvoicePaymentReminder',
    'function' => 'InvoicePaymentReminder_Firstoverdue',
    'description' => array(
        'chinese' => '对于逾期发票的第1 次付款提醒',
        'english' => 'Invoice payment reminder for first overdue'
    ),
    'type' => 'client',
    'extra' => '',
    'defaultmessage' => '您有未付账单#{invoiceid},请在有效期限{duedate}前支付(第1次通知).',
    'variables' => '{firstname}, {lastname}, {duedate},{invoiceid}'
);

if(!function_exists('InvoicePaymentReminder_Firstoverdue')){
    function InvoicePaymentReminder_Firstoverdue($args){

        if($args['type'] == "firstoverdue"){
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
            return false;
        }

        $userSql = "
        SELECT a.duedate,b.id as userid,b.firstname,b.lastname,`b`.`phonenumber` as `gsmnumber` FROM `tblinvoices` as `a`
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
            $replaceto = array($UserInformation['firstname'],$UserInformation['lastname'],$class->changeDateFormat($UserInformation['duedate']), $args['invoiceid']);

            $message = str_replace($replacefrom,$replaceto,$template['template']);

            $class->setGsmnumber($UserInformation['gsmnumber']);
            $class->setMessage($message);
            $class->setUserid($UserInformation['userid']);
            $class->send();
        }
    }
}

return $hook;