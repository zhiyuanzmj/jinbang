<?php
use Illuminate\Database\Capsule\Manager as Capsule;
add_hook('ClientAreaHeadOutput', 1, function($var)
{
	if ($var["filename"] == "force_emailverify"){ return; }
	$email_ca = new WHMCS_ClientArea();
	if ($email_ca->isLoggedIn()) {
		$adminuser = "这里是你的管理员名字";
		$result = Capsule::table('tblclients')->where('id', '=', $email_ca->getUserID())->get()[0]->email_verified;
		if ($result == "1") { return; }
		exit(header('location:'.$GLOBALS["CONFIG"]["SystemURL"].'/force_emailverify.php'));
	}
});
?>