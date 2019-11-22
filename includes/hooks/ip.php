<?php

# 本Hooks的作用是在产品管理页面输出IP
# whmcscare.com 2019-08-28
use Illuminate\Database\Capsule\Manager as Capsule;

function clients_services_add_dedicatedip_hook($vars) {

	$client = Menu::context('client');
	$services = $vars['services'];
	foreach($services as $key => $service) {
		$dedicatedip = Capsule::table('tblhosting')->where('userid',$client->id)->where('id',$service['id'])->value('dedicatedip');
		if ($dedicatedip) {
			$services[$key]['dedicatedip'] = $dedicatedip;
		}
	}
	return array("services" => $services);
}
add_hook("ClientAreaPageProductsServices", 1, "clients_services_add_dedicatedip_hook");
?>
