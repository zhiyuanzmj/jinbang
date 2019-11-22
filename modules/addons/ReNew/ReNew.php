<?php
if (!defined('WHMCS')) {
	exit('This file cannot be accessed directly');
}

if (!function_exists('ReNew_config')) {
	function ReNew_config()
	{
		$configarray = array(
			'name'        => 'Renewal Products',
			'description' => '可以让用户续费他们的产品',
			'version'     => '2.0',
			'author'      => '<a href="http://neworld.org" target="_blank">NeWorld</a>',
			'fields'      => array()
			);
		return $configarray;
	}
}

if (!function_exists('ReNew_activate')) {
	function ReNew_activate()
	{

			try {
				if (!\WHMCS\Database\Capsule::schema()->hasTable('mod_renewal')) {
					\WHMCS\Database\Capsule::schema()->create('mod_renewal', function($table) {
						$table->increments('id');
						$table->unsignedInteger('userid');
						$table->unsignedInteger('serviceid');
						$table->unsignedInteger('invoiceid');
						$table->text('subtotal');
						$table->text('type');
						$table->dateTime('date')->default('0000-00-00 00:00:00');
						$table->dateTime('datepaid')->default('0000-00-00 00:00:00');
						$table->text('status');
					});
				}
			}
			catch (Exception $e) {
				return array('status' => 'error', 'description' => '不能创建表 mod_renewal: ' . $e->getMessage());
			}

			return array('status' => 'success', 'description' => '模块激活成功. 点击 配置 对模块进行设置。');
	}
}

if (!function_exists('ReNew_deactivate')) {
	function ReNew_deactivate()
	{
		try {
			\WHMCS\Database\Capsule::schema()->dropIfExists('mod_renewal');
			return array('status' => 'success', 'description' => '模块卸载成功');
		}
		catch (Exception $e) {
			return array('status' => 'error', 'description' => 'Unable to drop tables: ' . $e->getMessage());
		}
	}
}

if (!function_exists('ReNew_clientarea')) {
	function ReNew_clientarea($vars)
	{
		try {
/* 			$addons = new \NeWorld\Addons('ReNew');
			$addons = $_SESSION['NeWorld'][$addons->license]; */

			if (function_exists('bcmul')) {
				$results['alert'] = '请安装 bcmul 组件';
			}

			$productID = trim($_REQUEST['id']);
			$userID = trim($_SESSION['uid']);
			$invoiceID = trim($_SESSION['ReNewInvoice']);

			if (!empty($productID)) {
				$templatefile = 'renew';
			}
			else {
				$templatefile = 'index';
				$products = \WHMCS\Database\Capsule::table('tblhosting')->where('userid', $userID)->get();
				$product = array();

				foreach ($products as $key => $values) {
					$package = \WHMCS\Database\Capsule::table('tblproducts')->where('id', $values->packageid)->first();
					if ($values->billingcycle != 'Free Account' && $values->billingcycle != 'One Time') {
						if ($values->domainstatus == 'Active' || $values->domainstatus == 'Suspended') {
							$product[$key]['id'] = $values->id;
							$product[$key]['productname'] = $package->name;
							$product[$key]['domain'] = $values->domain;
							$product[$key]['regdate'] = $values->regdate;
							$product[$key]['nextduedate'] = $values->nextduedate;
							$product[$key]['amount'] = $values->amount;
						}
					}
				}
			}


			$products = \WHMCS\Database\Capsule::table('tblhosting')->where('userid', $userID)->where('domainstatus', 'Active')->where('id', $productID)->first();
			$package = \WHMCS\Database\Capsule::table('tblproducts')->where('id', $products->packageid)->first();
			$pricing = \WHMCS\Database\Capsule::table('tblpricing')->where('relid', $products->packageid)->where('type', 'product')->where('currency', \WHMCS\Database\Capsule::table('tblclients')->where('id', $userID)->first()->currency)->first();
			$gateway = \WHMCS\Database\Capsule::table('tblpaymentgateways')->where('gateway', $products->paymentmethod)->where('setting', 'name')->first();

			switch ($products->billingcycle) {
			case 'Free Account':
				$results['billingcycle'] = LANG::trans('orderpaymenttermfreeaccount');
				break;

			case 'One Time':
				$results['billingcycle'] = LANG::trans('orderpaymenttermonetime');
				break;

			case 'Monthly':
				$results['billingcycle'] = LANG::trans('orderpaymenttermmonthly');
				$results['billingCycle'] = '<li data-time="1" data-date="1" class="active before">1</li><li data-time="2" data-date="2">2</li><li data-time="3" data-date="3">3</li><li data-time="4" data-date="4">4</li><li data-time="5" data-date="5">5</li><li data-time="6" data-date="6">6</li><li data-time="7" data-date="7">7</li><li data-time="8" data-date="8">8</li><li data-time="9" data-date="9">9</li><li data-time="12" data-date="12">1 年</li><li data-time="24" data-date="24">2 年</li><li data-time="36" data-date="36">3 年</li>';
				break;

			case 'Quarterly':
				$results['billingcycle'] = LANG::trans('orderpaymenttermquarterly');
				$results['billingCycle'] = '<li class="active before" data-time="3" data-date="1">3</li><li data-time="6" data-date="2">6</li><li data-time="9" data-date="3">9</li><li data-time="12" data-date="4">1 年</li><li data-time="24" data-date="8">2 年</li><li data-time="36" data-date="12">3 年</li>';
				break;

			case 'Semi-Annually':
				$results['billingcycle'] = LANG::trans('orderpaymenttermsemiannually');
				$results['billingCycle'] = '<li class="active before" data-time="6" data-date="1">6</li><li data-time="12" data-date="2">1 年</li><li data-time="24" data-date="4">2 年</li><li data-time="36" data-date="8">3 年</li>';
				break;

			case 'Annually':
				$results['billingcycle'] = LANG::trans('orderpaymenttermannually');
				$results['billingCycle'] = '<li class="active" data-time="12" data-date="1">1 年</li><li data-time="24" data-date="2">2 年</li><li data-time="36" data-date="3">3 年</li>';
				break;

			case 'Biennially':
				$results['billingcycle'] = LANG::trans('orderpaymenttermbiennially');
				$results['billingCycle'] = '<li class="active" data-time="24" data-date="1">2 年</li>';
				break;

			case 'Triennially':
				$results['billingcycle'] = LANG::trans('orderpaymenttermtriennially');
				$results['billingCycle'] = '<li class="active" data-time="36" data-date="1">3 年</li>';
				break;
			}

			$results['productname'] = $package->name;
			$results['productid'] = $package->id;
			$results['domain'] = $products->domain;
			$results['id'] = $products->id;
			$results['regdate'] = $products->regdate;
			$results['firstpaymentamount'] = formatCurrency($products->firstpaymentamount);
			$results['amount'] = $products->amount;
			$results['paytype'] = $package->paytype;
			$results['paymentmethod'] = $gateway->value;
			$results['payment'] = $products->paymentmethod;
			$results['nextduedate'] = $products->nextduedate;
			$FormatDate = strtotime($products->nextduedate);
			$time = trim($_GET['time']);
			$date = trim($_GET['date']);

			switch ($time) {
			case '12':
				if ($pricing->annually == '-1.00') {
					$results['amounts'] = bcmul($time, $results['amount'], 2);
				}
				else {
					$results['amounts'] = $pricing->annually;
				}

				break;

			case '24':
				if ($pricing->biennially == '-1.00') {
					$results['amounts'] = bcmul($time, $results['amount'], 2);
				}
				else {
					$results['amounts'] = $pricing->biennially;
				}

				break;

			case '36':
				if ($pricing->triennially == '-1.00') {
					$results['amounts'] = bcmul($time, $results['amount'], 2);
				}
				else {
					$results['amounts'] = $pricing->triennially;
				}

				break;

			default:
				$results['amounts'] = bcmul($time, $results['amount'], 2);
				break;
			}

			if (!empty($time)) {
				$code = array('status' => 'success', 'date' => date('Y-m-d', strtotime('+' . $time . ' months', $FormatDate)), 'price' => $results['amounts']);
				exit(json_encode($code));
			}

			if (!empty($_POST)) {
				$templatefile = 'confirm';
				$id = trim($_POST['id']);
				$time = trim($_POST['timeCycle']);
				$num = trim($_POST['priceCycle']);
				$ReNewInvoice = \WHMCS\Database\Capsule::table('mod_renewal')->where('serviceid', $id)->where('status', 'UnPaid')->first();

				if (!empty($ReNewInvoice)) {
					\WHMCS\Database\Capsule::table('mod_renewal')->where('serviceid', $id)->where('status', 'UnPaid')->update(array('status' => 'Cancelled'));
					\WHMCS\Database\Capsule::table('tblinvoices')->where('id', $ReNewInvoice->invoiceid)->update(array('status' => 'Cancelled'));
				}

				switch ($time) {
				case '12':
					if ($pricing->annually == '-1.00') {
						$results['amounts'] = bcmul($num, $results['amount'], 2);
					}
					else {
						$results['amounts'] = $pricing->annually;
					}

					break;

				case '24':
					if ($pricing->biennially == '-1.00') {
						$results['amounts'] = bcmul($num, $results['amount'], 2);
					}
					else {
						$results['amounts'] = $pricing->biennially;
					}

					break;

				case '36':
					if ($pricing->triennially == '-1.00') {
						$results['amounts'] = bcmul($num, $results['amount'], 2);
					}
					else {
						$results['amounts'] = $pricing->triennially;
					}

					break;

				default:
					$results['amounts'] = bcmul($num, $results['amount'], 2);
					break;
				}

				$billingcycle = $results['amounts'];
				$endtime = date('Y-m-d', strtotime('+' . $time . ' months', $FormatDate));
				$admins = \WHMCS\Database\Capsule::table('tbladmins')->select('username')->first();
				$command = 'CreateInvoice';
				$adminuser = $admins->username;
				$values['userid'] = $userID;
				$values['date'] = date('Y-m-d', time());
				$values['duedate'] = $products->nextduedate;
				$values['paymentmethod'] = $products->paymentmethod;
				$values['sendinvoice'] = true;
				$values['itemdescription1'] = $package->name . ' - ' . $products->domain . ' (' . $products->nextduedate . ' - ' . $endtime . ')';
				$values['itemamount1'] = $billingcycle;
				$values['itemtaxed1'] = 0;
				$results = localAPI($command, $values, $adminuser);

				if ($results['result'] == 'success') {
					$invoiceid = $results['invoiceid'];

					if ($invoiceid == '0') {
						$results['info'] = '<i class="alico icon-warning-2"></i> 您所选择的产品或服务目前无法续费。';
					}
					else {
						\WHMCS\Database\Capsule::table('mod_renewal')->insert(array('userid' => $userID, 'serviceid' => $id, 'invoiceid' => $invoiceid, 'subtotal' => $billingcycle, 'type' => $time, 'date' => date('Y-m-d H:i:s'), 'status' => 'UnPaid'));
						header('refresh:3;url=' . $WEB_ROOT . 'viewinvoice.php?id=' . $invoiceid);
					}
				}
			}

			$results['amount'] = formatCurrency($products->amount);
		}
		catch (Exception $e) {
			$templatefile = 'tips';
			$results = array('status' => 'danger', 'info' => '<i class="alico icon-warning-2"></i> ' . $e->getMessage());
		}

		unset($_POST);
		return array(
	'pagetitle'    => '续费管理',
	'breadcrumb'   => array('index.php?m=ReNew' => '续费管理'),
	'templatefile' => 'templates/' . $templatefile,
	'requirelogin' => true,
	'vars'         => array('results' => $results, 'product' => $product, 'price' => empty($price) ? false : $price, 'id' => empty($productID) ? false : $productID, 'invoiceid' => empty($invoiceID) ? false : $invoiceID)
	);
	}
}

if (!function_exists('ReNew_output')) {
	function ReNew_output($vars)
	{
		$modulelink = $vars['modulelink'];

		try {
			$ext = new \NeWorld\Extended();
			$db = new \NeWorld\Database();
			$getData = $db->runSQL(array(
	'action' => array(
		'list' => array('sql' => 'SELECT * FROM mod_renewal', 'all' => true)
		),
	'trans'  => false
	));
			$result['renew'] = $getData['list']['result'];

			foreach ($result['renew'] as $key => $value) {
				try {
					$clients = \WHMCS\Database\Capsule::table('tblclients')->where('id', $value['userid'])->first();
					$result['renew'][$key]['name'] = $clients->firstname . ' ' . $clients->lastname;
				}
				catch (Exception $e) {
					unset($result['promo'][$key]);
				}
			}

			$result['assets'] = $ext->getSystemURL() . 'modules/addons/' . $vars['module'] . '/templates/';
			$result['version'] = $vars['version'];
			$result['module'] = $vars['modulelink'];
			$result = $ext->getSmarty(array('dir' => __DIR__ . '/templates/', 'file' => 'home', 'vars' => $result));
		}
		catch (Exception $e) {
			exit($e->getMessage());
		}
		finally {
			echo $result;
		}
	}
}

?>
