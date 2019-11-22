<?php
use WHMCS\Database\Capsule;
require("init.php");
$ca = new WHMCS_ClientArea();
$ca->setPageTitle("邮件验证");
 
$ca->addToBreadCrumb('index.php', Lang::trans('globalsystemname'));
$ca->addToBreadCrumb('force_emailverify.php', '邮件验证');
$ca->initPage();
$ca->requireLogin();
if ($ca->isLoggedIn()) {
	$ca->assign('sender', $GLOBALS["CONFIG"]["SystemEmailsFromEmail"]);
	$ca->setTemplate('../emailverify');
	$ca->output();
}

?>