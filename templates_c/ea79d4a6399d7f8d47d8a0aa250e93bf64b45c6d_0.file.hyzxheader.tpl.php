<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:33:14
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/whmcstop/hyzxheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e19da911168_08178400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea79d4a6399d7f8d47d8a0aa250e93bf64b45c6d' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/whmcstop/hyzxheader.tpl',
      1 => 1549817102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e19da911168_08178400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/www.zfyun.top/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/oneui.css">
<link rel="stylesheet" id="css-main" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/custom.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/magnific-popup/magnific-popup.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/slick/slick-theme.min.css">

<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproducts' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomains' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainregisterns' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaingetepp' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainemailforwarding' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaindns' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaindetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaincontactinfo' || $_smarty_tpl->tpl_vars['templatefile']->value == 'upgrade' || $_smarty_tpl->tpl_vars['templatefile']->value == 'upgradesummary' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainaddons' || $_smarty_tpl->tpl_vars['filename']->value == 'submitticket' || $_smarty_tpl->tpl_vars['filename']->value == 'supporttickets' || $_smarty_tpl->tpl_vars['filename']->value == 'viewticket' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareainvoices' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaquotes' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproductdetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacancelrequest' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacontacts' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareachangepw' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaemails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'masspay' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaaddfunds' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareasecurity') {?> sidebar-mini<?php }?>">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/whmcstop/hyzxhd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op" style="background: #00aaff;">
                            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                            <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times"></i>
                            </button>
                            <a class="h5 text-white" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php">
                                <i class="fa fa-skyatlas text-white"></i> <span class="h5 font-w600 sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</span>
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">
                        	

                <ul class="nav-main">
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>
                    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                     <li class="nav-main-heading"><span class="sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account'];?>
</span></li>
			        <li class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacontacts' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareachangepw' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaemails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareasecurity') {?>open<?php }?>">
			            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account'];?>
</span></a>
			            <ul>
			                <li><a class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadetails') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=details"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavdetails'];?>
</a></li>
			                <li><a class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacontacts') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=contacts"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavcontacts'];?>
</a></li>
							<li><a class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareachangepw') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=changepw"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavchangepw'];?>
</a></li>
							<li><a class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareasecurity') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=security"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavsecurity'];?>
</a></li>
							<li><a class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaemails') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=emails"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navemailssent'];?>
</a></li>
			            </ul>
			        </li>
			        <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php"><i class="si si-logout"></i><span class="sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavlogout'];?>
</span></a>
                                </li>
                    <?php } else { ?>
                    <li class="nav-main-heading"><span class="sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account'];?>
</span></li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php"><i class="si si-login"></i><span class="sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php"><i class="si si-user-follow"></i><span class="sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/pwreset.php"><i class="si si-key"></i><span class="sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</span></a>
                                </li>
                    <?php }?>
                </ul>
	
                           </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->
            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full hyzxdbss" style="background: #00aaff;position: fixed;border-left: 1px solid #039ce9;border-bottom:1px solid #00aaff;">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li style="margin-top: 7px;">
                        <a class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" style="color: #fff;background-color: transparent;border-color: transparent;">
                            <i class="fa fa-bell-o" style="font-size:20px;"></i>
                        </a>
                        <?php if (count($_smarty_tpl->tpl_vars['clientAlerts']->value) > 0) {?>
                        <span class="fa fa-circle" style="position: absolute;color: #f40;margin-top: -4px;margin-left: -13px;font-size: 6px;"></span>
                        <?php }?>
                    </li>
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button" style="color: #fff;background-color: transparent;border-color: transparent;">
                                <img src="<?php if (strpos($_smarty_tpl->tpl_vars['clientsdetails']->value['email'],'@qq.com')) {?>//q1.qlogo.cn/g?b=qq&nk=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['clientsdetails']->value['email'],'@qq.com');?>
&s=100<?php } else { ?>//cn.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['clientsdetails']->value['email']);?>
?s=64&d=<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/default_family1.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                            	<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <li class="dropdown-header">欢迎，<font color="#333333"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
</font></li>
								<li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=details">
                                        <i class="si si-user pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavdetails'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=contacts">
                                        <i class="si si-users pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavcontacts'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=changepw">
                                        <i class="si si-key pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavchangepw'];?>

                                    </a>
                                </li>
                            <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['addfunds']) {?>
			                	<li>
			                		<a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=addfunds">
			                			<i class="si si-wallet pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>

			                		</a>
			                	</li>
			                <?php }?>
			                	<li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=emails">
                                        <i class="si si-envelope-letter pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navemailssent'];?>

                                    </a>
                                </li>
                            
			                <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['updatecc']) {?>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=creditcard">
                                        <i class="fa fa-credit-card pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navmanagecc'];?>

                                    </a>
                                </li>
			                <?php }?>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php">
                                        <i class="si si-logout pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavlogout'];?>

                                    </a>
                                </li>
                                <?php } else { ?>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php">
                                        <i class="si si-login pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php">
                                        <i class="si si-user-follow pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>

                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/pwreset.php">
                                        <i class="si si-key pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>

                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button" style="color: #fff;background-color: transparent;border-color: #f5f5f5;">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1) {?>
                <li>
                    <a class="btn btn-default" data-toggle="popover" id="languageChooser" style="color: #fff;background-color: transparent;border-color: transparent;position: absolute;"><i class="fa fa-language" style="font-size:20px;"></i></a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locales']->value, 'locale');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value) {
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</a></li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
				</li>
				<?php }?>
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

<main<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproducts' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomains' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainregisterns' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaingetepp' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainemailforwarding' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaindns' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaindetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaincontactinfo' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainaddons' || $_smarty_tpl->tpl_vars['templatefile']->value == 'upgrade' || $_smarty_tpl->tpl_vars['templatefile']->value == 'upgradesummary' || $_smarty_tpl->tpl_vars['filename']->value == 'submitticket' || $_smarty_tpl->tpl_vars['filename']->value == 'supporttickets' || $_smarty_tpl->tpl_vars['filename']->value == 'viewticket' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaquotes' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacreditcard' || $_smarty_tpl->tpl_vars['templatefile']->value == 'masspay' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareainvoices' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaaddfunds' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproductdetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacancelrequest' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacontacts' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareachangepw' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaemails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareasecurity') {?> id="main-container1"<?php } else { ?> id="main-container"<?php }
if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareahome') {?> style="background-color:#f3f4f5;"<?php }?>>
	
	<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareahome') {?>
	<?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproducts' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomains' || $_smarty_tpl->tpl_vars['filename']->value == 'submitticket' || $_smarty_tpl->tpl_vars['filename']->value == 'supporttickets' || $_smarty_tpl->tpl_vars['filename']->value == 'viewticket' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaquotes' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacreditcard' || $_smarty_tpl->tpl_vars['templatefile']->value == 'masspay' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareainvoices' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaaddfunds' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacancelrequest' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'upgrade' || $_smarty_tpl->tpl_vars['templatefile']->value == 'upgradesummary' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacancelrequest' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacontacts' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareachangepw' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaemails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareasecurity') {?>
		<div class="content-l hidden-sm hidden-xs">
			<div class="content-l-header">
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproducts' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomains' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainregisterns' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaingetepp' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainemailforwarding' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaindns' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaindetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaincontactinfo' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainaddons') {?>
			<ul class="nav">
				<li class="active"><a href="#"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['gl'];?>
</a></li>
				<li><a style="color: #333;"><i class="fa fa-caret-down"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['view'];?>
</a></li>
				<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
				<?php }?>
			</ul>
			<?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'upgrade' || $_smarty_tpl->tpl_vars['templatefile']->value == 'upgradesummary' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacancelrequest') {?>
			<ul class="nav">
				<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
				<?php }?>
			</ul>
			<?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaquotes' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacreditcard' || $_smarty_tpl->tpl_vars['templatefile']->value == 'masspay' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareainvoices' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaaddfunds') {?>
			<ul class="nav">
				<li class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareainvoices' || $_smarty_tpl->tpl_vars['templatefile']->value == 'viewinvoice') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=invoices"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoices'];?>
</a></li>
			    <li class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaquotes') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=quotes"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotestitle'];?>
</a></li>
			    <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['masspay']) {?>
			    <li class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'masspay') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=masspay&all=true"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['masspaytitle'];?>
</a></li>
			    <?php }?>
			    <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['updatecc']) {?>
			    <li class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacreditcard') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=creditcard"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navmanagecc'];?>
</a></li>
			    <?php }?>
			    <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['addfunds']) {?>
			    <li class="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaaddfunds') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=addfunds"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>
</a></li>
			    <?php }?>
			</ul>
			<?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareacontacts' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareachangepw' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaemails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareasecurity') {?>
			<ul class="nav">
				<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
					<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
				<?php }?>
			</ul>
			<?php } elseif ($_smarty_tpl->tpl_vars['filename']->value == 'submitticket' || $_smarty_tpl->tpl_vars['filename']->value == 'supporttickets' || $_smarty_tpl->tpl_vars['filename']->value == 'viewticket') {?>
			<ul class="nav">
				<li <?php if ($_smarty_tpl->tpl_vars['filename']->value == 'supporttickets' || $_smarty_tpl->tpl_vars['filename']->value == 'viewticket') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/supporttickets.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtickets'];?>
</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['filename']->value == 'submitticket') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/submitticket.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navopenticket'];?>
</a></li>
			</ul>
			<?php }?>
		</div>
		<div class="content-r">
		<div class="content">
			<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproducts') {?>
		    <?php if ($_smarty_tpl->tpl_vars['clientsstats']->value['productsnumtotal'] > 0) {?>
		    <div class="block">
                <div class="block-header bg-white" style="padding: 15px 0 15px 0;border-bottom: 1px solid #f0f0f0;">
                	<?php if ($_smarty_tpl->tpl_vars['filename']->value == 'submitticket' || $_smarty_tpl->tpl_vars['filename']->value == 'supporttickets' || $_smarty_tpl->tpl_vars['filename']->value == 'viewticket') {?>
                	<?php } else { ?>
                    <ul class="breadcrumb pull-right hidden-sm hidden-xs">
                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_1_saved = $_smarty_tpl->tpl_vars['item'];
?>
				        <li><a <?php if ($_smarty_tpl->tpl_vars['item']->last) {?>class="link"<?php } else { ?>class="text-muted"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></li>
				        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php }?>
                    <div class="block-title text-normal dropdown hidden-lg hidden-md">
                            <a href="#" data-toggle="dropdown" style="color: #000000;"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
								<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
								<?php }?>
                            </ul>
                    </div>
                    <div class="block-title text-normal hidden-sm hidden-xs" style="color: #333;font-size: 16px;">
                            <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproducts') {?>产品列表<?php } else {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
}?>
                    </div>
                </div>
                <div class="block-content">
                	<div class="pull-r-l">
               <?php }?>
              <?php } else { ?>
              		    <div class="block">
                <div class="block-header bg-white" style="padding: 15px 0 15px 0;border-bottom: 1px solid #f0f0f0;">
                	<?php if ($_smarty_tpl->tpl_vars['filename']->value == 'submitticket' || $_smarty_tpl->tpl_vars['filename']->value == 'supporttickets' || $_smarty_tpl->tpl_vars['filename']->value == 'viewticket') {?>
                	<?php } else { ?>
                    <ul class="breadcrumb pull-right hidden-sm hidden-xs">
                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_2_saved = $_smarty_tpl->tpl_vars['item'];
?>
				        <li><a <?php if ($_smarty_tpl->tpl_vars['item']->last) {?>class="link"<?php } else { ?>class="text-muted"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a></li>
				        <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <?php }?>
                    <div class="block-title text-normal dropdown hidden-lg hidden-md">
                            <a href="#" data-toggle="dropdown" style="color: #000000;"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
								<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
								<?php }?>
                            </ul>
                    </div>
                    <div class="block-title text-normal hidden-sm hidden-xs" style="color: #333;font-size: 16px;">
                            <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproducts') {?>产品列表<?php } else {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
}?>
                    </div>
                </div>
                <div class="block-content">
                	<div class="pull-r-l">
              <?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproductdetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainregisterns' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaingetepp' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainemailforwarding' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaindns' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaindetails' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomaincontactinfo' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientareadomainaddons') {?>
		<div class="content-l hidden-sm hidden-xs">
			<div class="content-l-header">
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>
			</div>			
			<ul class="nav">
				<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
				<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
				<?php }?>
			</ul>
		</div>
		<div class="content-r">
			<div class="content">
				<div class="block">
                <div class="block-header bg-white" style="padding: 5px 0 0 0;">
                    <ul class="breadcrumb pull-right hidden-sm hidden-xs">
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/knowledgebase.php" target="_blank" class="btn btn-primary btn-sm" style="background-color: #00aaff;border: 0;border-radius: 0;padding: 6px 12px;font-weight: 400;"><i class="fa fa-external-link"></i>&nbsp;&nbsp;帮助文档</a>
                    </ul>                    
                    <div class="block-title text-normal dropdown hidden-lg hidden-md">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=services" class="ny-back-btn"></a>
                            <a href="#" data-toggle="dropdown" style="display: inline-block;margin: 0;height: 40px;line-height: 40px;font-size: 22px;color: #272829;"><?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
								<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>
								<?php }?>
                            </ul>
                    </div>
                    <div class="block-title text-normal hidden-sm hidden-xs" style="color: #333;font-size: 16px;line-height: 30px;">
                            <a href="<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'clientareaproductdetails') {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=services<?php } else {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=domains<?php }?>" class="ny-back-btn"></a><?php if ($_smarty_tpl->tpl_vars['domain']->value) {?><span style="display: inline-block;margin: 0;height: 40px;line-height: 40px;font-size: 22px;color: #272829;"><?php if ($_smarty_tpl->tpl_vars['domain']->value == '') {
echo $_smarty_tpl->tpl_vars['product']->value;
} else {
echo $_smarty_tpl->tpl_vars['domain']->value;?>
</span><?php }
} elseif ($_smarty_tpl->tpl_vars['moduleclientarea']->value) {?><span style="display: inline-block;margin: 0;height: 40px;line-height: 40px;font-size: 22px;color: #272829;"><?php echo $_smarty_tpl->tpl_vars['product']->value;?>
</span><?php }?>
                    </div>
                </div>
                <div class="block-content">
                	<div class="pull-r-l">
	<?php } else { ?>
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
						<div class="col-sm-7">
                            <h1 class="h3 page-heading header-lined">
                            	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>
                            </h1>
                            
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
							<ol class="breadcrumb push-10-t">
							    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_3_saved = $_smarty_tpl->tpl_vars['item'];
?>
							        <li<?php if ($_smarty_tpl->tpl_vars['item']->last) {?> class="active"<?php }?>>
							            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php }?>
							            <?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>

							            <?php if (!$_smarty_tpl->tpl_vars['item']->last) {?></a><?php }?>
							        </li>
							    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ol>
					    </div>
                    </div>
                </div>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<div class="content">
	<?php }
}
}
