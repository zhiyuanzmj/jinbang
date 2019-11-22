<?php

function Renewaudit_config()
{
	$configarray = array(
		'name'        => 'Renew audit',
		'description' => 'This addon will tell you which server has been renewed,and you should be to renew this server with your supplier.',
		'version'     => '0.1',
		'author'      => 'LeaseKvm',
		'language'    => 'english',
		
		);
	return $configarray;
}

function Renewaudit_activate()
{
	{
	try {
		\Illuminate\Database\Capsule\Manager::schema()->create('renew_audit', function($table) {
			$table->increments('id');
			$table->integer('invoiceid');
			$table->string('type');
			$table->string('checked');
			$table->string('staff');
			$table->string('data');
		});
	}
	catch (Exception $e) {
		logActivity('Unable to create renew_audit: ' . $e->getMessage());
	}

	return array('status' => 'success', 'description' => 'Renew audit Activating 1');
	}
}

function Renewaudit_deactivate()
{
	\Illuminate\Database\Capsule\Manager::schema()->dropIfExists('renew_audit');
	
	return array('status' => 'success', 'description' => 'If successful Deactivation');
}

function Renewaudit_output($vars)
{
	$adminusername = $vars['admin_username'];
	if ($_GET['type']){
		
		if ($_GET['checkd']&&$_GET['checkd']=="yes"){
		$where="type=".$_GET['type']."and checked=on";
			}
		elseif($_GET['checkd']&&$_GET['checkd']=="no"){
			$where="type=".$_GET['type']."and checked!==on";
			}
		else{
			$where="type=".$_GET['type'];
			}
	}else{
		if ($_GET['checkd']&&$_GET['checkd']=="yes"){
		$where="checked=on";
			}
		elseif($_GET['checkd']&&$_GET['checkd']=="no"){
			$where="checked!==on";
			}
		else{
			$where="1";
			}
	}
	if ($_GET['action'] == 'audited') {
	  
	  if ($_GET['id']) {
		$id=$_GET['id'];
		$checked = \Illuminate\Database\Capsule\Manager::select('SELECT checked FROM renew_audit where id='.$id);
		if($checked[0]->checked !=="yes"){
			$command = 'GetAdminDetails';
			$postData = array(
			);
			$adminUsername = 'admin'; // Optional for WHMCS 7.2 and later

			$results = localAPI($command, $postData, $adminUsername);
			$adminusername=$results['name'];

			\Illuminate\Database\Capsule\Manager::table('renew_audit')->where('id', $_GET['id'])->update(array('checked' => "yes","staff" => $adminusername,"data" => date('Y-m-d H:i:s')));
			$error = '<div style="width:100%; height:auto; float:left;"><div class="successbox" style="float:left; width:99%;"><strong><span class="title">Host Details Updated Successfully!</span></strong><br>Host Details has been updated.</div></div>';
			
		}else{
			$error = '<div style="width:100%; height:auto; float:left;"><div class="errorbox" style="float:left; width:99%;"><strong><span class="title">Do not repeat the data!</span></strong><br>Do not repeat the data.</div></div>';

		}
		
		
	  }
		
	}

	$result = \Illuminate\Database\Capsule\Manager::select('SELECT * FROM renew_audit where '.$where);

	echo'
		<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8">$(document).ready(function() {$("#example").DataTable();} );</script>
		
		
		
		
		<div class="container">';
		if($error){
			echo $error;
		}
		echo'<table id="example" class="display" style="width:100%">
		  <thead>
			<tr>
			  <th>ID</th>
			  <th>UserName</th>
			  <th>IP address</th>
			  <th>Products type</th>
			  <th>Price</th>
			  <th>Start Date</th>
			  <th>Due Date</th>
			  <th>Paid Date</th>
			  <th>Audited</th>
			  <th>Control</th>
			</tr>
		  </thead>
		  <tbody>';
	
	foreach ($result as $row) {
			$row = (array) $row;
	  		
			++$i;
			$id=$row['id'];
			$invoiceid=$row['invoiceid'];
	  		$client_detail="";
			$command = 'GetInvoice';
			$postData = array(
				'invoiceid' => $invoiceid,
			);
			$adminUsername = 'admin'; // Optional for WHMCS 7.2 and later
			$results = localAPI($command, $postData, $adminUsername);
			$userid=$results['userid'];
	  		$relid=$results[items][item][0][relid];
	  
			$client_detail = \Illuminate\Database\Capsule\Manager::select('SELECT cl.firstname,cl.lastname,cl.companyname,ht.domain,ht.nextduedate,ht.dedicatedip,ht.amount,ht.nextduedate,ht.regdate,ht.id,ht.userid FROM tblclients cl inner join tblhosting ht on ht.userid=cl.id WHERE ht.id=' . $relid);
			$UserName=$client_detail[0]->firstname .$client_detail[0]->lastname . ' (' . $client_detail[0]->companyname .')';
			$Domain=$client_detail[0]->domain;
			$ipaddress=$client_detail[0]->dedicatedip;
			$Productstype=$row['type'];
			$Price=$client_detail[0]->amount;
			$StartDate=$client_detail[0]->regdate;
			$DueDate=$client_detail[0]->nextduedate;
			$PaidDate=$results['datepaid'];
			$Audited=$row['checked'];
			$staff=$row['staff'];
	  		$data=$row['data'];
			echo'
			  <link rel="stylesheet" type="text/css" href="/whmcs/modules/addons/RenewAudit/css/switch-buttons.css">


				    <tr>
					  <td>'.$id.'</td>
					  <td>'.$UserName.'</td>
					  <td>'.$ipaddress.'</td>
					  <td>'.$Productstype.'</td>
					  <td>'.$Price.'</td>
					  <td>'.$StartDate.'</td>
					  <td>'.$DueDate.'</td>
					  <td>'.$PaidDate.'</td>
					  <td>
					  ';
						
						if($Audited!=="yes"){
							echo '<span class="label active"><a href="addonmodules.php?module=RenewAudit&action=audited&id='.$id.'" class=><font color="fffff">UnAudited</font></a></span>';
						}else{
							echo '<span class="label terminated">Audited</span><br>'.$staff.'<br>'.$data.'';
						}
					echo '
					  </td>
					  <td><a href="clientsinvoices.php?userid='.$client_detail[0]->userid.'&serviceid='.$client_detail[0]->id.'"  target="_blank">Invoice</a> |  <a href="clientsservices.php?userid='.$client_detail[0]->userid.'&id='.$client_detail[0]->id.'"  target="_blank">Server</a></td>
					</tr>
					
			';

}
  echo'
	</tbody></table>
		<script type="text/javascript">
	// For demo to fit into DataTables site builder...
	$("#example")
		.removeClass( "display" )
		.addClass("table table-striped table-bordered");
</script>
</div>		
		
	';
		
}