<?php
function hook_RenewAudit($vars){
  $invoiceid=$vars['invoiceid'];
 $command = 'GetInvoice';
  $postData = array(
    'invoiceid' => $invoiceid,
  );
  $adminUsername = 'admin'; // Optional for WHMCS 7.2 and later
  $results = localAPI($command, $postData, $adminUsername);
  $userid=$results['userid'];
  $relid=$results[items][item][0][relid];
  $client_detail = \Illuminate\Database\Capsule\Manager::select('SELECT tblproductgroups.name FROM tblproductgroups inner join tblproducts on tblproducts.gid=tblproductgroups.id inner join tblhosting on tblhosting.packageid=tblproducts.id WHERE tblhosting.id=' . $relid);
  $type=$client_detail[0]->name;
  \Illuminate\Database\Capsule\Manager::table('renew_audit')->insert(array('invoiceid' => $invoiceid, 'type' => $type));
  
}



add_hook("InvoicePaid",1,"hook_RenewAudit");
?>