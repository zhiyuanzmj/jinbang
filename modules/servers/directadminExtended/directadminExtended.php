<?php

class directadmin_extended_license_1928PDOWrapper
{
	static private $pdoConnection;

	static private function getDbConnection()
	{
		if (class_exists('Illuminate\\Database\\Capsule\\Manager')) {
			return \Illuminate\Database\Capsule\Manager::connection()->getPdo();
		}

		if (self::$pdoConnection === NULL) {
			self::$pdoConnection = self::setNewConnection();
		}

		return self::$pdoConnection;
	}

	static private function setNewConnection()
	{
		try {
			$includePath = ROOTDIR . DIRECTORY_SEPARATOR . 'configuration.php';

			if (file_exists($includePath)) {
				require $includePath;
			}
			else {
				throw new Exception('No configuration file found');
			}

			$connection = new PDO(sprintf('mysql:host=%s;dbname=%s;port=%s;charset=utf8', $db_host, $db_name, $db_port ? $db_port : 3360), $db_username, $db_password);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connection;
		}
		catch (PDOException $exc) {
		}
	}

	static public function query($query, $params = array())
	{
		$statement = self::getDbConnection()->prepare($query);
		$statement->execute($params);
		return $statement;
	}

	static public function real_escape_string($string)
	{
		return substr(self::getDbConnection()->quote($string), 1, -1);
	}

	static public function fetch_assoc($query)
	{
		return $query->fetch(PDO::FETCH_ASSOC);
	}

	static public function fetch_array($query)
	{
		return $query->fetch(PDO::FETCH_BOTH);
	}

	static public function fetch_object($query)
	{
		return $query->fetch(PDO::FETCH_OBJ);
	}

	static public function num_rows($query)
	{
		$query->fetch(PDO::FETCH_BOTH);
		return $query->rowCount();
	}

	static public function insert_id()
	{
		return self::getDbConnection()->lastInsertId();
	}

	static public function errorInfo()
	{
		$tmpErr = self::getDbConnection()->errorInfo();
		if ($tmpErr[0] && $tmpErr[0] !== '00000') {
			return $tmpErr;
		}

		return false;
	}

	static public function mysql_get_array($query, $params = array())
	{
		$qRes = self::query($query, $params);
		$arr = array();

		while ($row = self::fetch_assoc($qRes)) {
			$arr[] = $row;
		}

		return $arr;
	}

	static public function mysql_get_row($query, $params = array())
	{
		$qRes = self::query($query, $params);
		return self::fetch_assoc($qRes);
	}
}

function directadminExtended_loadAutoloader()
{
	if (!class_exists('\\ModulesGarden\\DirectAdminExtended\\Autoloader')) {
		include __DIR__ . DS . 'Autoloader.php';
	}

	return new \ModulesGarden\DirectAdminExtended\Autoloader();
}

function directadminExtended_MetaData()
{
	return array('DisplayName' => 'DirectAdmin Extended', 'DefaultNonSSLPort' => '2222', 'DefaultSSLPort' => '2222');
}

function directadminExtended_ClientArea($params)
{
	$autoloader = directadminextended_loadautoloader();
	directadminExtended_loadDAdmin();
	$init = new \ModulesGarden\DirectAdminExtended\Classes\Init();
	\ModulesGarden\DirectAdminExtended\Classes\Container::init('client', $params);
	$skin = \ModulesGarden\DirectAdminExtended\Classes\Basic\Helpers\SkinHelper::getProductSkin($params['pid']);
	$app_dir = dirname(__FILE__);
	$app_whmcs_path = substr($app_dir, stripos($app_dir, 'modules'));
	$_assets_dir = $app_whmcs_path . '/views/client/' . $skin . '/_assets/';
	$GLOBALS['smarty']->register_function('print_button', 'smarty_function_print_button');
	require_once MAIN_APP_DIR . 'clientarea_controller.php';
	$autoloader->unregister();
	return array(
	'templatefile' => '/views/client/' . $skin . '/clientarea',
	'vars'         => array('_assets_dir' => $_assets_dir)
	);
}

function directadminExtended_CreateAccount($params)
{
	$license_check = directadmin_extended_license_1928();

	if ($license_check['status'] != 'Active') {
		$error_message = isset($license_custom_error_message) ? $license_custom_error_message : 'License ' . $license_check['status'] . ($license_check['description'] ? ': ' . $license_check['description'] : '');
		return $error_message;
	}

	$autoloader = directadminextended_loadautoloader();
	directadminExtended_loadDAdmin();
	$idna = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Utils\IDNAConvert();
	$params['domain'] = $idna->encode($params['domain']);

	try {
		$configuration = new \ModulesGarden\DirectAdminExtended\Classes\Basic\Containers\AutoContainer('directadmin_extended_functions_settings', $params['pid'], 'product_id');
		$settings = $configuration->getData();

		if ($settings['apps'] == 'on') {
			$app_name = $settings['apps_order_assign'] == 1 ? $params['configoptions']['Installation App'] : $settings['apps_app_name'];
			if (!empty($app_name) && $settings['apps_installer_type'] == 2) {
				$verifyFields = array('Directory', 'Database Name', 'Database Password', 'Database Username');

				foreach ($verifyFields as $verifyField) {
					if (empty($params['customfields'][$verifyField])) {
						return sprintf('Install Application Error: %s field is required.', $verifyField);
					}
				}
			}
		}

		$Product = new \ModulesGarden\DirectAdminExtended\Classes\Configuration\Product($params['pid']);
		$params['customconfigoption'] = $Product->loadConfig();

		if ($params['customconfigoption']['cgi'] == 1) {
			$params['customconfigoption']['cgi'] = 'ON';
		}

		$Account = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Api\Account($params);
		$Account->create();
		$createResult = $Account->getCreateResult();

		if ($createResult !== 'success') {
			return $createResult;
		}

		$dedicatedip = $Account->getDedicatedIP();

		if (!empty($dedicatedip)) {
			\ModulesGarden\DirectAdminExtended\Classes\Basic\DB\PdoWrapper::query('UPDATE tblhosting SET dedicatedip = ? WHERE id=?', array($dedicatedip, $params['serviceid']));
		}

		if ($settings['apps'] != 'on' || empty($app_name)) {
			return 'success';
		}

		if ($settings['apps_installer_type'] == 1) {
			$apps = unserialize(file_get_contents('http://api.softaculous.com/scripts.php?in=serialize'));

			foreach ($apps as $key => $value) {
				if ($value['name'] . ' ' . $value['version'] == $app_name) {
					$app_id = $value['sid'];
					$app_version = $value['version'];
					break;
				}
			}

			$install = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Installers\Softaculous();
		}

		if ($settings['apps_installer_type'] == 2) {
			$apps = json_decode(file_get_contents('http://installatron.com/apps?api=json'), true);

			foreach ($apps['data'] as $key => $value) {
				if ($value['name'] . ' ' . $value['version'] == $app_name) {
					$r = $value['id'];
					$app = explode('_', $r);
					$app_id = count($app) == 1 ? current($app) : implode('_', array_slice($app, 0, -1));
					$app_version = $value['version'];
					break;
				}
			}

			$install = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Installers\Instalatron();
		}

		$install->connect($params);
		$data['application'] = $app_id;
		$data['language'] = empty($params['customfields']['Language']) ? $settings['apps_lang'] : $params['customfields']['Language'];

		if ($settings['apps_installer_type'] == 1) {
			$data['softdomain'] = $params['domain'];

			if (!empty($params['customfields']['Directory'])) {
				$data['softdirectory'] = $params['customfields']['Directory'];
			}

			$data['admin_username'] = $params['username'];
			$data['admin_realname'] = $params['username'];
			$data['admin_pass'] = $params['password'];
			$data['admin_email'] = $params['clientsdetails']['email'];
			$data['admin_fname'] = $params['clientsdetails']['firstname'];
			$data['admin_lname'] = $params['clientsdetails']['lastname'];
			$additional = array('softdb' => 'Database Name', 'dbprefix' => 'Table Prefix', 'site_name' => 'Site Name', 'site_desc' => 'Site Description');

			foreach ($additional as $name => $fieldname) {
				if (!empty($params['customfields'][$fieldname])) {
					$data[$name] = $params['customfields'][$fieldname];
				}
			}

			$app_details = $install->get_app_options($app_id);

			if (!empty($app_details['fields'])) {
				foreach ($app_details['fields'] as $k => $v) {
					if (!array_key_exists($v['name'], $data)) {
						if (isset($v['value'])) {
							$data[$v['name']] = $v['value'];
						}
						else {
							if (isset($v['options']) && is_array($v['options'])) {
								$data[$v['name']] = key($v['options']);
							}
						}
					}
				}
			}
		}
		else {
			$data['version'] = $app_version;
			$data['url'] = $params['customfields']['Directory'];
			$data['login'] = $params['username'];
			$data['passwd'] = $params['password'];
			$data['email'] = $params['clientsdetails']['email'];
			$data['sitetitle'] = $params['customfields']['Site Title'];
			$data['autoup'] = strtolower($params['customfields']['Auto Update']) == 'yes' ? 1 : 0;
			$data['db'] = 'auto';
			if (!empty($params['customfields']['Database Name']) && !empty($params['customfields']['Database Password']) && !empty($params['customfields']['Database Username'])) {
				$data['db'] = 'manual';
				$data['db-name'] = strpos($params['customfields']['Database Name'], $params['username']) === false ? $params['username'] . '_' . $params['customfields']['Database Name'] : $params['customfields']['Database Name'];
				$data['db-user'] = strpos($params['customfields']['Database Username'], $params['username']) === false ? $params['username'] . '_' . $params['customfields']['Database Username'] : $params['customfields']['Database Username'];
				$data['db-pass'] = $params['customfields']['Database Password'];
				$data['db-prefix'] = $params['customfields']['Table Prefix'];
				$user_api = directadminExtended_loadUserApiForInstallApp($params);
				if ($user_api !== false && is_object($user_api)) {
					$args = array('action' => 'create', 'name' => substr($data['db-name'], strlen($params['username']) + 1), 'user' => substr($data['db-user'], strlen($params['username']) + 1), 'passwd' => $data['db-pass'], 'passwd2' => $data['db-pass']);
					$user_api->get('CMD_API_DATABASES', $args);
				}
			}
		}

		$res = $install->install($app_id, $data);
		$res = json_decode($res, true);
		if ($res['result'] != 1 && !empty($res['message'])) {
			return $res['message'];
		}
	}
	catch (Exception $ex) {
		return $ex->getMessage();
	}

	return $createResult;
}

function directadminExtended_TerminateAccount($params)
{
	$autoloader = directadminextended_loadautoloader();
	$idna = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Utils\IDNAConvert();
	$params['domain'] = $idna->encode($params['domain']);
	directadminExtended_loadDAdmin();
	$autoloader->unregister();
	return directadmin_terminateaccount($params);
}

function directadminExtended_SuspendAccount($params)
{
	$autoloader = directadminextended_loadautoloader();
	$idna = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Utils\IDNAConvert();
	$params['domain'] = $idna->encode($params['domain']);
	directadminExtended_loadDAdmin();
	$autoloader->unregister();
	return directadmin_suspendaccount($params);
}

function directadminExtended_UnsuspendAccount($params)
{
	$autoloader = directadminextended_loadautoloader();
	$idna = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Utils\IDNAConvert();
	$params['domain'] = $idna->encode($params['domain']);
	directadminExtended_loadDAdmin();
	$autoloader->unregister();
	return directadmin_unsuspendaccount($params);
}

function directadminExtended_ChangePackage($params)
{
	$autoloader = directadminextended_loadautoloader();
	$idna = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Utils\IDNAConvert();
	$params['domain'] = $idna->encode($params['domain']);
	directadminExtended_loadDAdmin();
	$autoloader->unregister();
	return directadmin_ChangePackage($params);
}

function directadminExtended_AdminLink($params)
{
	directadminExtended_loadDAdmin();
	return directadmin_AdminLink($params);
}

function directadminExtended_LoginLink($params)
{
	$port = !empty($params['serverport']) ? $params['serverport'] : '2222';
	$http = $params['serversecure'] ? 'https' : 'http';

	if ($params['serverhostname']) {
		$domain = htmlspecialchars(strip_tags($params['serverhostname']), ENT_QUOTES);
	}
	else {
		$domain = htmlspecialchars(strip_tags($params['serverip']), ENT_QUOTES);
	}

	$link = $http . '://' . $domain . ':' . $port . '/CMD_LOGIN';
	$form = '<form id="mg_daex_loginform" action="' . $link . "\" method=\"post\" target=\"_blank\">\\n\\\n                    <input type=\"hidden\" name=\"username\" value=\"" . htmlspecialchars(strip_tags($params['username']), ENT_QUOTES) . "\" />\\n\\\n                    <input type=\"hidden\" name=\"password\" value=\"" . htmlspecialchars(strip_tags($params['password']), ENT_QUOTES) . "\" />\\n\\\n                </form>";
	$script = "<script>\n        jQuery(document).ready( function() {\n            \$(\"body\").append(\"" . str_replace('"', '\\"', $form) . "\");\n        });\n    </script>";
	return '<a href="#" onclick="$(\'#mg_daex_loginform\').submit(); return false;" style="color:#cc0000">Log In To Control Panel</a>' . $script;
}

function directadminExtended_ClientAreaCustomButtonArray($params)
{
	$autoloader = directadminextended_loadautoloader();
	new \ModulesGarden\DirectAdminExtended\Classes\Init();
	\ModulesGarden\DirectAdminExtended\Classes\Container::init('client', $params);
	$lang = \ModulesGarden\DirectAdminExtended\Classes\Container::$lang;
	$lab = strpos($lang->{'mainsite.managmentTitle'}, 'Unsuported lang') ? 'Manage Account' : $lang->{'mainsite.managmentTitle'};
	$buttonarray = array($lab => 'management');
	return $buttonarray;
}

function directadminExtended_UsageUpdate($params)
{
	directadminExtended_loadDAdmin();
	return directadmin_UsageUpdate($params);
}

function directadminExtended_ConfigOptions($params)
{
	directadminextended_loadautoloader();
	directadminExtended_loadDAdmin();
	$id = $_REQUEST['id'];
	$oldwhmcsVersion = version_compare($params['whmcsVersion'], '7', '<') ? 1 : 0;
	$Product = new \ModulesGarden\DirectAdminExtended\Classes\Configuration\Product($id);
	$Product->generateDefaultConfigurableOptions($_REQUEST);
	$Product->generateDefaultCustomField($_REQUEST);
	$params = $Product->getParams();
	$Api = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Api\Account($params);
	$packages = $Api->getUserPackages();
	$option = 'Custom';
	$Product->defaultConfig['package']['options'] = array_merge(array($option => $option), $packages);
	$scripts = da_get_script('changepackage.js', array('option' => $option), true);
	$scripts .= da_get_script('generateoptions.js', array('productid' => $id, 'old' => $oldwhmcsVersion), true);
	$scripts .= da_get_script('generatecustomfields.js', array('productid' => $id, 'old' => $oldwhmcsVersion), true);
	if (isset($_POST['action']) && $_POST['action'] == 'module-settings') {
		exit(json_encode(array('content' => $Product->renderConfigOptions($scripts))));
	}

	if ($_GET['action'] != 'save' && $oldwhmcsVersion == 1) {
		echo $Product->renderConfigOptions($scripts);
	}

	return array();
}

function directadminExtended_management($params)
{
	if (isset($_POST['sidebar_cloased'])) {
		$_SESSION['MGDirectAdminExtended_sidebar_closed_' . $params['serviceid']] = $_POST['sidebar_cloased'] == 1 ? true : false;
		exit('DONE');
	}

	$autoloader = directadminextended_loadautoloader();
	$init = new \ModulesGarden\DirectAdminExtended\Classes\Init();
	$content = $init->initCA($params);
	if (isset($_REQUEST['a']) && $_REQUEST['a'] == 'management' && $_REQUEST['act'] != 'ajaxAct') {
		add_hook('ClientAreaPrimarySidebar', 1, function(\WHMCS\View\Menu\Item $primarySidebar) use($params) {
			$panel = $primarySidebar->getChild('Service Details Actions');

			if (is_a($panel, 'WHMCS\\View\\Menu\\Item')) {
				$panel = $panel->getChild('Change Password');

				if (is_a($panel, 'WHMCS\\View\\Menu\\Item')) {
					$panel->setUri('clientarea.php?action=productdetails&id=' . $params['serviceid'] . '#tabChangepw');
					$panel->setAttributes(array());
				}
			}

			$panel = $primarySidebar->getChild('Service Details Overview');

			if (is_a($panel, 'WHMCS\\View\\Menu\\Item')) {
				$panel = $panel->getChild('Information');

				if (is_a($panel, 'WHMCS\\View\\Menu\\Item')) {
					$panel->setUri('clientarea.php?action=productdetails&id=' . $params['serviceid']);
					$panel->setAttributes(array());
				}
			}
		});
	}

	if (WHMCS6 && \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\AddonHelper::getTemplateVersion() == '6') {
		$manage_account_sidebar = \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\WHMCS6Sidebar::getManageAccountSidebar();
		$manage_email = \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\WHMCS6Sidebar::getEmailManagementSidebar();
		$manage_advenced = \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\WHMCS6Sidebar::getAdvencedFeaturesSidebar();
		$log_in_to_sidebar = \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\WHMCS6Sidebar::getLoginToSidebar();
		$lang = \ModulesGarden\DirectAdminExtended\Classes\Container::$lang;
		add_hook('ClientAreaPrimarySidebar', 1, function(\WHMCS\View\Menu\Item $primarySidebar) use($manage_account_sidebar, $log_in_to_sidebar, $lang, $manage_email, $manage_advenced) {
			if ($manage_account_sidebar !== false) {
				$primarySidebar->addChild('ZZ1', array('label' => $lang->{'mainsite.main_header'}, 'uri' => '#', 'icon' => 'fa-cog'));
				$sidebar = $primarySidebar->getChild('ZZ1');
				$sidebar->setOrder(100);
				$sidebar->setBodyHtml($manage_account_sidebar);
			}

			if ($manage_email !== false) {
				$primarySidebar->addChild('ZZ2', array('label' => $lang->{'mainsite.main_header3'}, 'uri' => '#', 'icon' => 'fa-cog'));
				$sidebar = $primarySidebar->getChild('ZZ2');
				$sidebar->setOrder(101);
				$sidebar->setBodyHtml($manage_email);
			}

			if ($manage_advenced !== false) {
				$primarySidebar->addChild('ZZ3', array('label' => $lang->{'mainsite.main_header4'}, 'uri' => '#', 'icon' => 'fa-cog'));
				$sidebar = $primarySidebar->getChild('ZZ3');
				$sidebar->setOrder(102);
				$sidebar->setBodyHtml($manage_advenced);
			}

			if ($log_in_to_sidebar !== false) {
				$primarySidebar->addChild('ZZ4', array('label' => $lang->{'mainsite.main_header2'}, 'uri' => '#', 'icon' => 'fa-reply'));
				$sidebar = $primarySidebar->getChild('ZZ4');
				$sidebar->setOrder(103);
				$sidebar->setBodyHtml($log_in_to_sidebar);
			}
		});
	}

	try {
		$license_check = directadmin_extended_license_1928();

		if ($license_check['status'] != 'Active') {
			$error_message = isset($license_custom_error_message) ? $license_custom_error_message : 'License ' . $license_check['status'] . ($license_check['description'] ? ': ' . $license_check['description'] : '');
			throw new Exception($error_message);
		}
	}
	catch (Exception $e) {
		$html = "<div class=\"alert alert-danger\" role=\"alert\">\n                    <p style=\"text-align: center;\"><b>Module license has expired.</b></p>\n                </div>";
		$content = $html . $content;
	}

	$skin = \ModulesGarden\DirectAdminExtended\Classes\Basic\Helpers\SkinHelper::getProductSkin($params['pid']);
	$autoloader->unregister();
	return array(
	'templatefile' => 'views' . \ModulesGarden\DirectAdminExtended\Classes\Init::$DS . 'client' . \ModulesGarden\DirectAdminExtended\Classes\Init::$DS . $skin . DS . 'prov',
	'breadcrumb'   => ' > <a href="#">Management</a>',
	'vars'         => array('content' => $content)
	);
}

function directadminExtended__getWHMCSconfig($k)
{
	$q = \ModulesGarden\DirectAdminExtended\Classes\Basic\DB\PdoWrapper::query('SELECT value FROM tblconfiguration WHERE setting = ?', array($k));
	$ret = mysqli_fetch_array($q);
	unset($q);

	if ($ret['value']) {
		return $ret['value'];
	}
}

function directadminExtended_loadUserApiForInstallApp($params)
{
	$hostnameip = !empty($params['serverhostname']) ? $params['serverhostname'] : $params['serverip'];
	$port = !empty($params['serverport']) ? $params['serverport'] : '2222';
	$user_api = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Api\DAConnect($hostnameip, $port, $params['username'], $params['password'], $params['serversecure'] == 'on');
	return $user_api;
}

function directadminExtended_loadDAdmin()
{
	global $licensing;

	if (!function_exists('directadmin_configoptions')) {
		$maindir = substr(dirname(__FILE__), 0, strpos(dirname(__FILE__), 'modules' . DS . 'servers'));
		$filename = $maindir . 'modules' . DS . 'servers' . DS . 'directadmin' . DS . 'directadmin.php';

		if (file_exists($filename)) {
			require_once $filename;
		}
		else {
			exit('Unable to find DirectAdmin main module!');
		}
	}
}

function directadminExtended_showMainSiteErrrors($error)
{
	throw new Exception($error);
}

function directadmin_extened_generateCode()
{
	$out = 'abcdefghijklmnopqrstuvwxyz';
	$out .= 'ABCDEFGHJKLMNPQRSTUVWXYZ';
	$out .= '1234567890';
	$out .= '!@#$%^&*()';
	$xc = '';
	$i = 0;

	while ($i < 10) {
		$xc .= $out[rand(0, strlen($out) - 1)];
		++$i;
	}

	return $xc;
}

function dae_logActivity($msg)
{
	$command = 'logactivity';
	$adminuser = 'Developer';
	$values['description'] = $msg;
	$results = localAPI($command, $values, $adminuser);
}

function print_arr_dae($arr, $tier = 0, $name = '', $nlChar = 0)
{
	$str = '';

	if ($nlChar == 0) {
		$nlChar = '<br>';
	}
	else {
		$nlChar = "\n";
	}

	$space = '';
	$i = 0;

	while ($i < $tier) {
		$space .= '...';
		++$i;
	}

	if ($tier == 0) {
		$str .= $nlChar . '----------------' . $name . '-------------------------';
	}

	if (is_object($arr)) {
		$temp = get_object_vars($arr);
		$str .= $space . 'Object ( ' . $nlChar;
	}
	else if (is_array($arr)) {
		$temp = $arr;
		$str .= $space . 'Array ( ' . $nlChar;
	}
	else {
		return $arr;
	}

	if (is_array($temp)) {
		foreach ($temp as $key => $value) {
			if (is_array($value) || is_object($value)) {
				$str .= $space . '...' . '[' . $key . '] => ';
				$str .= print_arr_dae($value, $tier + 1);
				continue;
			}

			$str .= $space . '...' . '[' . $key . '] => ' . $value . ' ' . $nlChar;
		}

		$str .= $space . ') ' . $nlChar;
	}

	return $str;
}

function directadmin_extened_createJob($DAJobString, $cronId)
{
	if ($DAJobString == '') {
		return 'empty';
	}

	$jobParams = preg_split('/\\s+/', $DAJobString);

	if (!is_array($jobParams)) {
		return array('error' => 'Cannot read job parameters. There\'s no parameters');
	}

	$cleanJobParams = array();
	$commandParam = '';

	foreach ($jobParams as $value) {
		if (5 <= count($cleanJobParams)) {
			$commandParam .= $value . ' ';
		}

		if ($value != '' && count($cleanJobParams) < 5) {
			$cleanJobParams[] = $value;
		}
	}

	$cleanJobParams[] = $commandParam;

	if (count($cleanJobParams) != 6) {
		$str = '';

		foreach ($cleanJobParams as $value) {
			$str .= $value . ' ';
		}

		return array('error' => 'Cannot read job parameters. Wrong number of parameters  = ' . count($cleanJobParams) . ' ' . $str);
	}

	return array('min' => $cleanJobParams[0], 'hour' => $cleanJobParams[1], 'dayOfMonth' => $cleanJobParams[2], 'month' => $cleanJobParams[3], 'dayOfWeek' => $cleanJobParams[4], 'command' => $cleanJobParams[5], 'cronId' => $cronId);
}

function directadmin_extened_listJobs($user_api, $params, &$vars)
{
	$jobList = $user_api->get('CMD_API_CRON_JOBS', array('domain' => $params['domain']));

	if ($jobList['error'] == 1) {
		return array('error' => 1, 'text' => $jobList['text'] . '.' . (!empty($jobList['details']) ? ' ' . $jobList['details'] . '.' : ''));
	}

	$arr = array();

	if (is_array($jobList)) {
		if (empty($jobList)) {
			return array(
	'error'  => 0,
	'result' => array()
	);
		}

		foreach ($jobList as $key => $value) {
			if (!empty($value)) {
				if (($temp = directadmin_extened_createjob($value, $key)) == 'empty') {
					continue;
				}

				$arr[] = directadmin_extened_createjob($value, $key);
			}
		}

		return array('error' => 0, 'result' => $arr);
	}

	return array('error' => 1, 'text' => $_LANG['cron']['cron_list_illegal_data_returned']);
}

function directadmin_extened_listForwardeers(&$vars, &$params, &$api, &$idna, &$user_api)
{
	foreach ($vars['domainlist'] as $key => $domain) {
		$forwardersListForDomain = $user_api->get('CMD_API_EMAIL_FORWARDERS', array('domain' => $idna->encode($domain)));
		if (isset($forwardersListForDomain['error']) && $forwardersListForDomain['error'] == 1) {
			$vars['forwardersList'] = '';
			$vars['forwardersListError'] = $forwardersListForDomain['text'] . ' ' . $forwardersListForDomain['details'];
		}
		else {
			foreach ($forwardersListForDomain as $from => $to) {
				$vars['forwardersList'][] = array('user' => $from, 'domain' => $domain, 'from' => $from . '@' . $domain, 'to' => $to);
			}
		}
	}

	return $vars['forwardersList'];
}

function directadmin_extened_listParkedDomains($api, $user_api, $idna, $params, &$vars)
{
	$parkedDomainsList = array();

	foreach ($vars['domainlist'] as $key => $domain) {
		$domainPoiters = $user_api->get('CMD_API_DOMAIN_POINTER', array('domain' => $domain));

		foreach ($domainPoiters as $sourceDomain => $type) {
			$parkedDomainsList[] = array('targetDomain' => $domain, 'sourceDomain' => str_replace('_', '.', $sourceDomain), 'type' => $type);
		}
	}

	return $parkedDomainsList;
}

function directadmin_extened_getSSLCert($domain, $user_api)
{
	global $ca;
	$data = array('get' => 1, 'domain' => $domain);
	$addResult = $user_api->getSSL('CMD_API_SSL', $data);
	$vars = array();

	if ($addResult['error'] != 1) {
		$vars['certificate'] = $addResult['certificate'];
		$vars['certificate'] = str_replace(' ', '+', $vars['certificate']);
		$vars['certificate'] = str_replace('-----BEGIN+CERTIFICATE-----', '-----BEGIN CERTIFICATE-----', $vars['certificate']);
		$vars['certificate'] = str_replace('-----END+CERTIFICATE-----', '-----END CERTIFICATE-----', $vars['certificate']);
		$vars['key'] = $addResult['key'];
		$vars['key'] = str_replace(' ', '+', $vars['key']);
		$vars['key'] = str_replace('-----BEGIN+RSA+PRIVATE+KEY-----', '-----BEGIN RSA PRIVATE KEY-----', $vars['key']);
		$vars['key'] = str_replace('-----END+RSA+PRIVATE+KEY-----', '-----END RSA PRIVATE KEY-----', $vars['key']);
		$vars['server'] = $addResult['server'];
	}

	$ca->assign('myvars', $vars);
	return $vars;
}

function directadmin_extened_setCert($domain, $type, $create, $user_api)
{
	$idna = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Utils\IDNAConvert();
	$vars = array();
	$data = array('action' => 'save', 'domain' => $domain, 'type' => $type);

	if ($type == 'create') {
		$data['request'] = $idna->encode($create);
		$data['country'] = $idna->encode($_POST['country']);
		$data['province'] = $idna->encode($_POST['province']);
		$data['city'] = $idna->encode($_POST['city']);
		$data['company'] = $idna->encode($_POST['company']);
		$data['division'] = $idna->encode($_POST['division']);
		$data['name'] = $idna->encode($_POST['name']);
		$data['email'] = $idna->encode($_POST['email']);
		$data['keysize'] = $idna->encode($_POST['keysize']);
	}

	if ($type == 'paste') {
		$data['certificate'] = $idna->encode($_POST['newKey']) . $idna->encode($_POST['newCert']);
	}

	$addResult = $user_api->getSSL('CMD_API_SSL', $data);

	if (isset($addResult)) {
		$out = $addResult['error'] == 0 ? 'success' : $addResult['details'];
	}
	else {
		$out = $_LANG['json']['error1'];
	}
}

function directadmin_extened_getCaCert($domain, $user_api)
{
	global $ca;
	$data = array('domain' => $domain, 'view' => 'cacert');
	$addResult = $user_api->getSSL('CMD_API_SSL', $data);
	$vars = array();

	if (isset($addResult['enabled'])) {
		$vars['cacert'] = $addResult['cacert'];
		$vars['status'] = $addResult['enabled'];
	}

	$ca->assign('myvars2', $vars);
	return $vars;
}

function directadmin_extened_setCaCert($domain, $use, $cert, $user_api)
{
	$idna = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Utils\IDNAConvert();
	$data = array('domain' => $idna->encode($domain), 'action' => 'save', 'type' => 'cacert', 'cacert' => $idna->encode($cert));

	if ($use) {
		$data['active'] = 'yes';
	}

	$addResult = $user_api->getSSL('CMD_API_SSL', $data);

	if (isset($addResult)) {
		$out = $addResult['error'] == 0 ? 'success' : $addResult['details'];
	}
	else {
		$out = $_LANG['json']['error1'];
	}

	exit($out);
}

function da_get_script($filename, $vars = array(), $useScript = false)
{
	$filepath = strpos($filename, '/') === 0 ? $filename : __DIR__ . '/views/scripts/' . $filename;
	$script = file_get_contents($filepath);

	if ($useScript) {
		$mainscript = file_get_contents(__DIR__ . '/views/scripts/mainjavascript.js');
		$script = str_replace('{$javascript}', $script, $mainscript);
	}

	foreach ($vars as $key => $value) {
		$script = str_replace('{$' . $key . '}', $value, $script);
	}

	return $script;
}

function directadmin_extended_license_1928()
{

		return array('status' => 'Active', 'description' => 'Your module license is active.');
	 
}

if (!defined('WHMCS')) {
	exit('This file cannot be accessed directly');
}

defined('DS') || define('DS', DIRECTORY_SEPARATOR);
defined('MAIN_WHMCS_DIR') || define('MAIN_WHMCS_DIR', dirname(dirname(dirname(dirname(__FILE__)))) . DS);
defined('MAIN_APP_DIR') || define('MAIN_APP_DIR', dirname(__FILE__) . DS);
defined('WHMCS6') || define('WHMCS6', isset($GLOBALS['CONFIG']['Version']) && '6.0.0' <= $GLOBALS['CONFIG']['Version']);

if (!class_exists('ModulesGarden\\DirectAdminExtended\\Classes\\Basic\\DB\\PdoWrapper')) {
	require __DIR__ . DS . 'Classes' . DS . 'Basic' . DS . 'DB' . DS . 'PdoWrapper.php';
}

if (!function_exists('obj2array')) {
	function obj2array($obj)
	{
		return json_decode(json_encode($obj), true);
	}
}

if (!function_exists('smarty_function_print_button')) {
	function smarty_function_print_button($params, &$smarty)
	{
		$management_link = $smarty->get_template_vars('management_link');
		return "<div class=\"col-lg-4 col-xs-6\">\n                    <a class=\"big-button\" href=\"" . $management_link . '&page=' . $params['page'] . "\">\n                        <div class=\"button-wrapper\">\n                            <i class=\"icon-btn icon-" . $params['icon'] . "\"></i>\n                            <span>" . $params['label'] . "</span>\n                        </div>\n                    </a>\n                </div>";
	}
}

if (isset($_REQUEST['_debug']) && $_REQUEST['_debug'] == 'turnon') {
	$_SESSION['mg_directadmin_debug'] = 1;
}
else {
	if (isset($_REQUEST['_debug']) && $_REQUEST['_debug'] == 'turnoff') {
		$_SESSION['mg_directadmin_debug'] = NULL;
	}
}

if (isset($_SESSION['mg_directadmin_debug']) && $_SESSION['mg_directadmin_debug']) {
	error_reporting(32767);
	ini_set('display_errors', 1);
}
else {
	error_reporting(0);
	ini_set('display_errors', 0);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'log_file.log');
}

if (defined('CLIENTAREA') || 'clientarea.php' != substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1)) {
	try {
		$q = \ModulesGarden\DirectAdminExtended\Classes\Basic\DB\PdoWrapper::query('SELECT packageid FROM tblhosting WHERE id=?', array($_REQUEST['id']));
		$r = \ModulesGarden\DirectAdminExtended\Classes\Basic\DB\PdoWrapper::fetchAssoc($q);
		$q2 = \ModulesGarden\DirectAdminExtended\Classes\Basic\DB\PdoWrapper::query('SELECT change_password FROM `directadmin_extended_functions_settings` WHERE product_id=?', array($r['packageid']));
		$c = \ModulesGarden\DirectAdminExtended\Classes\Basic\DB\PdoWrapper::fetchAssoc($q2);
	}
	catch (Exception $ex) {
	}
}

if (isset($c['change_password']) && $c['change_password'] == 'on' || defined('ADMINAREA')) {
	function directadminExtended_ChangePassword($params)
	{
		$autoloader = directadminextended_loadautoloader();
		$idna = new \ModulesGarden\DirectAdminExtended\Classes\DirectAdmin\Utils\IDNAConvert();
		$params['domain'] = $idna->encode($params['domain']);
		directadminExtended_loadDAdmin();
		$autoloader->unregister();
		return directadmin_ChangePassword($params);
	}
}

if (!function_exists('dump')) {
	function dump($var)
	{
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}
}

if (!function_exists('da_request_undecode')) {
	function da_request_undecode($mb_entities = true)
	{
		array_walk_recursive($_GET, function(&$v) {
			$v = html_entity_decode(htmlspecialchars_decode($v, ENT_QUOTES), ENT_COMPAT | ENT_HTML401, 'UTF-8');
		});
		array_walk_recursive($_POST, function(&$v) {
			$v = html_entity_decode(htmlspecialchars_decode($v, ENT_QUOTES), ENT_COMPAT | ENT_HTML401, 'UTF-8');
		});
		array_walk_recursive($_REQUEST, function(&$v) {
			$v = html_entity_decode(htmlspecialchars_decode($v, ENT_QUOTES), ENT_COMPAT | ENT_HTML401, 'UTF-8');
		});

		if ($mb_entities) {
			da_request_mb_entities();
		}
	}
}

if (!function_exists('da_request_encode')) {
	function da_request_encode()
	{
		array_walk_recursive($_GET, function(&$v) {
			$v = htmlentities(htmlspecialchars($v));
		});
		array_walk_recursive($_POST, function(&$v) {
			$v = htmlentities(htmlspecialchars($v));
		});
		array_walk_recursive($_REQUEST, function(&$v) {
			$v = htmlentities(htmlspecialchars($v));
		});
		da_request_mb_entities_decode();
	}
}

if (!function_exists('da_request_mb_entities')) {
	function da_request_mb_entities()
	{
		array_walk_recursive($_GET, function(&$v) {
			$v = mb_htmlentities($v, false);
		});
		array_walk_recursive($_POST, function(&$v) {
			$v = mb_htmlentities($v, false);
		});
		array_walk_recursive($_REQUEST, function(&$v) {
			$v = mb_htmlentities($v, false);
		});
	}
}

if (!function_exists('da_request_mb_entities_decode')) {
	function da_request_mb_entities_decode()
	{
		array_walk_recursive($_GET, function(&$v) {
			$v = mb_html_entity_decode($v);
		});
		array_walk_recursive($_POST, function(&$v) {
			$v = mb_html_entity_decode($v);
		});
		array_walk_recursive($_REQUEST, function(&$v) {
			$v = mb_html_entity_decode($v);
		});
	}
}

if (!function_exists('codepoint_encode')) {
	function codepoint_encode($str)
	{
		return substr(json_encode($str), 1, -1);
	}
}

if (!function_exists('codepoint_decode')) {
	function codepoint_decode($str)
	{
		return json_decode(sprintf('"%s"', $str));
	}
}

if (!function_exists('mb_internal_encoding')) {
	function mb_internal_encoding($encoding = NULL)
	{
		return $from_encoding === NULL ? iconv_get_encoding() : iconv_set_encoding($encoding);
	}
}

if (!function_exists('mb_convert_encoding')) {
	function mb_convert_encoding($str, $to_encoding, $from_encoding = NULL)
	{
		return iconv($from_encoding === NULL ? mb_internal_encoding() : $from_encoding, $to_encoding, $str);
	}
}

if (!function_exists('mb_chr')) {
	function mb_chr($ord, $encoding = 'UTF-8')
	{
		if ($encoding === 'UCS-4BE') {
			return pack('N', $ord);
		}

		return mb_convert_encoding(mb_chr($ord, 'UCS-4BE'), $encoding, 'UCS-4BE');
	}
}

if (!function_exists('mb_ord')) {
	function mb_ord($char, $encoding = 'UTF-8')
	{
		if ($encoding === 'UCS-4BE') {
			$ord = strlen($char) === 4 ? @unpack('N', $char) : @unpack('n', $char)[1];
			return $ord;
		}

		return mb_ord(mb_convert_encoding($char, 'UCS-4BE', $encoding), 'UCS-4BE');
	}
}

if (!function_exists('mb_htmlentities')) {
	function mb_htmlentities($string, $hex = true, $encoding = 'UTF-8')
	{
		return preg_replace_callback('/[\\x{80}-\\x{10FFFF}]/u', function($match) use($hex, $encoding) {
			return sprintf($hex ? '&#x%X;' : '&#%d;', mb_ord($match[0], $encoding));
		}, $string);
	}
}

if (!function_exists('mb_html_entity_decode')) {
	function mb_html_entity_decode($string, $flags = NULL, $encoding = 'UTF-8')
	{
		return html_entity_decode($string, $flags === NULL ? ENT_COMPAT | ENT_HTML401 : $flags, $encoding);
	}
}

?>
