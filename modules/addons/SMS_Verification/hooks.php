<?php
//dezend by http://www.yunlu99.com/
namespace SMS_Verification;

require_once __DIR__ . '/library/init.php';
add_hook('ClientAreaPage', 1, function() {
	$userid = (int) $_SESSION['uid'];
	$baseScriptName = basename($_SERVER['SCRIPT_NAME']);

	if ($userid) {
		switch ($baseScriptName) {
		case 'clientarea.php':
			$userDetail = \WHMCS\Database\Capsule::table('tblclients')->where('id', $userid)->first();
			if (empty($_GET) && (empty($userDetail->firstname) || $userDetail->firstname == $userDetail->email)) {
				return array('ProfileNeedToChange' => true);
			}

			break;


		default:
			break;
		}
	}
	else {
		switch ($baseScriptName) {
		case 'register.php':
			exit(Tools::getJumpURL(Tools::getSystemURL() . 'index.php?m=SMS_Verification&action=register'));
			break;

		default:
			break;
		}
	}
});
add_hook('ClientLogin', 1, function() {
	if (!empty($_SESSION['SMS_Verification']['link'])) {
		$jump = $_SESSION['SMS_Verification']['link'];
		$_SESSION['SMS_Verification']['link'] = '';
		exit(Tools::getJumpURL($jump));
	}
});

?>
