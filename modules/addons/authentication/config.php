<?php
# Required File Includes
include("../../../init.php");
include("../../../includes/functions.php");

use \Illuminate\Database\Capsule\Manager as Capsule;

$appid 		= Capsule::table('tbladdonmodules')->where('module','authentication')->where('setting', 'app_id')->first()->value;
$merchant_private_key 	= Capsule::table('tbladdonmodules')->where('module','authentication')->where('setting', 'merchant_private_key')->first()->value;
$sign_type 	= Capsule::table('tbladdonmodules')->where('module','authentication')->where('setting', 'sign_type')->first()->value;
$alipay_public_key 	= Capsule::table('tbladdonmodules')->where('module','authentication')->where('setting', 'alipay_public_key')->first()->value;

$SystemURL 	= \WHMCS\Config\Setting::getValue('SystemURL');

if ( $sign_type == 'RSA2' ) {
	$alipay_public_key = $alipay_public_key;
} else {
	$alipay_public_key = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDI6d306Q8fIfCOaTXyiUeJHkrIvYISRcc73s3vF1ZT7XN8RNPwJxo8pWaJMmvyTn9N4HQ632qJBVHf8sxHi/fEsraprwCtzvzQETrNRwVxLO5jVmRGi60j8Ue1efIlzPXV9je9mkjzOmdssymZkh2QhUrCmZYI/FCEa3/cNMW0QIDAQAB';
}

$config = [	
	//应用ID,您的APPID。
	'app_id' => $appid,

	//商户私钥
	'merchant_private_key' => $merchant_private_key,
	
	//异步通知地址
	'notify_url' => $SystemURL . "/modules/addons/authentication/notify_url.php",
	
	//同步跳转
	'return_url' => $SystemURL . "/modules/addons/authentication/return_url.php",

	//编码格式
	'charset' => "UTF-8",

	//签名方式
	'sign_type'=> $sign_type,

	//支付宝网关
	'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

	//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
	
	'alipay_public_key' => $alipay_public_key,
];