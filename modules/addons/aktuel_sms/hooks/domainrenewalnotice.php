<?php
$hook = array(
    'hook' => 'DailyCronJob',
    'function' => 'DomainRenewalNotice',
    'description' => array(
        'chinese' => '提前{x}天域名续费通知',
        'english' => 'Donmain renewal notice before {x} days ago'
    ),
    'type' => 'client',
    'extra' => '15',
    'defaultmessage' => '您的产品:{domain}即将于{expirydate}({x}天以后)到期，请及时续费.',
    'variables' => '{firstname}, {lastname}, {domain},{expirydate},{x}'
);
if(!function_exists('DomainRenewalNotice')){
    function DomainRenewalNotice($args){

        $class = new AktuelSms();
        $template = $class->getTemplateDetails(__FUNCTION__);
        if($template['active'] == 0){
            return null;
        }
        $settings = $class->getSettings();
        if(!$settings['api'] || !$settings['apiparams']){
            return null;
        }

        $extra = $template['extra'];
        $sqlDomain = "SELECT  `userid` ,  `domain` ,  `expirydate`
           FROM  `tbldomains`
           WHERE  `status` =  'Active'";
        $resultDomain = mysql_query($sqlDomain);
        while ($data = mysql_fetch_array($resultDomain)) {
            $tarih = explode("-",$data['expirydate']);
            $yesterday = mktime (0, 0, 0, $tarih[1], $tarih[2] - $extra, $tarih[0]);
            $today = date("Y-m-d");
            if (date('Y-m-d', $yesterday) == $today){
                $userSql = "SELECT `a`.`id` as userid,`a`.`firstname`, `a`.`lastname`, `a`.`phonenumber` as `gsmnumber`
            FROM `tblclients` as `a`
            
            
            WHERE `a`.`id` = '".$data['userid']."'
                        
            
            LIMIT 1";

                $result = mysql_query($userSql);
                $num_rows = mysql_num_rows($result);
                if($num_rows == 1){
                    $UserInformation = mysql_fetch_assoc($result);
                    $template['variables'] = str_replace(" ","",$template['variables']);
                    $replacefrom = explode(",",$template['variables']);
                    $replaceto = array($UserInformation['firstname'],$UserInformation['lastname'],$data['domain'],$data['expirydate'],$extra);
                    $message = str_replace($replacefrom,$replaceto,$template['template']);

                    $class->setGsmnumber($UserInformation['gsmnumber']);
                    $class->setMessage($message);
                    $class->setUserid($UserInformation['userid']);
                    $class->send();
                }
            }
        }
    }
}
return $hook;