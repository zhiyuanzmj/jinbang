<?php
function transfer_config()
{
	$configarray = array('name' => 'Transfer Manager', 'description' => '允许客户之间 Push 产品。', 'version' => '1.1', 'author' => '<a href="http://neworld.org" target="_blank">NeWorld</a>', 'fields' => array());
	$configarray['fields'] = array('transferamount' => array('FriendlyName' => '转让收费', 'Type' => 'text', 'Size' => '10', 'Description' => '每次转让收费的价格，单位：元。'));
	return $configarray;
}
function transfer_activate()
{
}
function transfer_deactivate()
{
}
function transfer_output($vars)
{
}
function transfer_clientarea($vars)
{
	$transferAmount = $vars['transferamount'];
	$id = $_GET['id'];
	$eMail = trim($_REQUEST['email']);
	$productID = $_POST['product'];
	$userID = $_SESSION['uid'];
	$transferUserInfo = \Illuminate\Database\Capsule\Manager::table('tblclients')->where('email', $eMail)->first();
	$UserInfo = \Illuminate\Database\Capsule\Manager::table('tblclients')->where('id', $userID)->first();
	if (!empty($_GET['email'])) {
		if ($_GET['email'] == $UserInfo->email) {
			$code = array('status' => 'danger', 'info' => '<i class="alico icon-warning-2"></i> 不允许 Push 给自己！');
		} else {
			if (!empty($transferUserInfo)) {
				$code = array('status' => 'success', 'info' => '<i class="alico icon-yes-2"></i> 此账户是有效账户！');
			} else {
				$code = array('status' => 'danger', 'info' => '<i class="alico icon-warning-2"></i> 此账户是无效账户！');
			}
		}
		die(json_encode($code));
	}
	if ($_POST['action'] == 'PUSH') {
		if (empty($productID)) {
			$code = array('status' => 'danger', 'info' => '<i class="alico icon-warning-2"></i> 产品 ID 不能为空！');
		} else {
			if (empty($_POST['email'])) {
				$code = array('status' => 'danger', 'info' => '<i class="alico icon-warning-2"></i> 接收方账户不能为空！');
			} else {
				if (empty($transferUserInfo)) {
					$code = array('status' => 'danger', 'info' => '<i class="alico icon-warning-2"></i> 此账户是无效账户！');
				} else {
					$credit = $UserInfo->credit;
					if ($UserInfo->credit < $transferAmount) {
						$code = array('status' => 'danger', 'info' => '<i class="alico icon-warning-2"></i> 余额不足，请充值后重试。');
					} else {
						$result = \Illuminate\Database\Capsule\Manager::table('tblhosting')->where('id', $productID)->update(array('userid' => $transferUserInfo->id));
						transferMail($userID, 'Successful transfer products');
						if ($result) {
							$code = array('status' => 'success', 'info' => '<i class="alico icon-yes-2"></i> 成功将产品 Push 给 ' . $transferUserInfo->email);
							\Illuminate\Database\Capsule\Manager::table('tblclients')->where('id', $userID)->update(array('credit' => $credit - $transferAmount));
							\Illuminate\Database\Capsule\Manager::table('tblcredit')->insert(array('clientid' => $userID, 'date' => date('Y-m-d'), 'description' => '过户费：ID:' . $UserInfo->id . ' 将 产品ID：' . $productID . ' 过户给 ID：' . $transferUserInfo->id, 'amount' => 0 - $transferAmount));
							transferMail($transferUserInfo->id, 'Receive product success');
						} else {
							$code = array('status' => 'danger', 'info' => '<i class="alico icon-warning-2"></i> 你没有这个产品。');
						}
					}
				}
			}
		}
	}
	unset($_POST);
	$products = \Illuminate\Database\Capsule\Manager::table('tblhosting')->where('userid', $userID)->where('domainstatus', 'Active')->get();
	$results = array();
	foreach ($products as $key => $data) {
		$package = \Illuminate\Database\Capsule\Manager::table('tblproducts')->where('id', $data->packageid)->first();
		$results[$key]['productname'] = $package->name;
		$results[$key]['domain'] = $data->domain;
		$results[$key]['id'] = $data->id;
	}
	return array('pagetitle' => 'Transfer', 'breadcrumb' => array('index.php?m=transfer' => 'Transfer'), 'templatefile' => 'templates/client', 'requirelogin' => true, 'vars' => array('results' => $results, 'getID' => $id, 'transferAmount' => $transferAmount, 'code' => $code));
}
function transferMail($userID, $messageName)
{
	$admins = \Illuminate\Database\Capsule\Manager::table('tbladmins')->select('username')->first();
	$command = 'sendemail';
	$adminuser = $admins->username;
	$values['messagename'] = $messageName;
	$values['id'] = $userID;
	$results = localAPI($command, $values, $adminuser);
}

if (!defined('WHMCS')) {
	die('This file cannot be accessed directly');
}
global $whmcs;