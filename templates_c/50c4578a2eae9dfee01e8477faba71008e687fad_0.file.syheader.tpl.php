<?php
/* Smarty version 3.1.32, created on 2019-11-16 21:34:40
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/whmcstop/syheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dcffaf0281e92_10550938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c4578a2eae9dfee01e8477faba71008e687fad' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/whmcstop/syheader.tpl',
      1 => 1573911249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcffaf0281e92_10550938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/www.zfyun.top/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/oneui.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/magnific-popup/magnific-popup.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/slick/slick-theme.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/font.css">



<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/public/css/main.css">
<?php }?>


    <div id="page-container" class="side-scroll header-navbar-fixed header-navbar-transparent">
            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full" style="height: 80px;<?php if ($_smarty_tpl->tpl_vars['filename']->value == "cart" || $_smarty_tpl->tpl_vars['templatefile']->value == 'announcements' || $_smarty_tpl->tpl_vars['templatefile']->value == 'viewannouncement' || $_smarty_tpl->tpl_vars['filename']->value == 'contact' || $_smarty_tpl->tpl_vars['filename']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasearticle' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasecat' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloads' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloaddenied' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloadscat' || $_smarty_tpl->tpl_vars['filename']->value == 'downloads' || $_smarty_tpl->tpl_vars['filename']->value == 'tos' || $_smarty_tpl->tpl_vars['filename']->value == 'aup') {?>position:relative;background-color:#2b3033;<?php }?>">
                <div class="">
                    <ul class="nav-header pull-left" style="margin: 10px 0 0 0;">
                        <li class="header-content">
                            <a class="h5" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/header_logo.png" > 
                          </a>
                        </li>
                    </ul>
                    <!-- Header Navigation Right -->
                    <ul class="nav-header pull-right" style="margin: 10px 0 0 0;">
                        <li class="hidden-sm hidden-xs">
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                                <a class="btn menu-link2" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/promotion.php" style="border-right: 1px solid #fff;color:#f90;">
                                	<i class="si si-present" style="margin-right: 6px;font-size: 13px;"></i>优惠促销
                                </a>
                                <a class="btn menu-link2" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php" style="margin-right: 10px;">
                                	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cdkzt'];?>

                                </a>
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                            <div class="btn-group">
                            <button class="btn btn-link btn-image dropdown-toggle" data-toggle="dropdown" type="button" style="overflow: inherit;">
                                <img src="<?php if (strpos($_smarty_tpl->tpl_vars['clientsdetails']->value['email'],'@qq.com')) {?>//q1.qlogo.cn/g?b=qq&nk=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['clientsdetails']->value['email'],'@qq.com');?>
&s=100<?php } else { ?>//cn.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['clientsdetails']->value['email']);?>
?s=64&d=<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/default_family1.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
">
                                <span class="caret text-white" style="margin-right: -12px;"></span>
                            </button>                            
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header" style="font-weight: 300;font-size: 13px;margin-top: 5px;">您好，<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
</li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=details">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavdetails'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=changepw">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavchangepw'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/supporttickets.php">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtickets'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=addfunds">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=security">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavsecurity'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=emails">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navemailssent'];?>

                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li style="margin-bottom: 5px;">
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php">
                                        <i class="si si-logout pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavlogout'];?>

                                    </a>
                                </li>
                            </ul>
                        </div>
                        <?php } else { ?>
                                <a class="btn menu-link1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/login.php" style="margin-right: 10px;">
                                	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>

                                </a>
                                <a class="btn menu-link" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php">
                                	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['signup'];?>

                                </a>
                          <?php }?>
                        </li>
                        <li class="hidden-lg hidden-md">
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                                <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                        <div class="btn-group">
                            <button class="btn btn-link text-white dropdown-toggle hidden-lg hidden-md" data-toggle="dropdown" type="button" style="margin-top: -1px;overflow: inherit;">
                                <i class="si si-user"></i><?php if (count($_smarty_tpl->tpl_vars['clientAlerts']->value) > 0) {?><i class="fa fa-circle text-danger" style="position: absolute;top: 0px; color: #f76767;"></i><?php }?>
                            </button>                            
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header" style="font-weight: 300;font-size: 13px;margin-top: 5px;">您好，<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
</li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavhome'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=details">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavdetails'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=changepw">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavchangepw'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/supporttickets.php">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtickets'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=addfunds">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=security">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavsecurity'];?>

                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=emails">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['navemailssent'];?>

                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li style="margin-bottom: 5px;">
                                    <a tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php">
                                        <i class="si si-logout pull-right"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavlogout'];?>

                                    </a>
                                </li>
                            </ul>
                        </div>
                            <?php } else { ?>
                            <div class="btn-group">
                                <button class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown" type="button" style="margin-top: -1px;">
                                    <i class="si si-user"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right sidebar-mini-hide font-s13">
                                    <li style="margin-top: 5px;">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php">
                                            <span class="font-w600"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['signup'];?>
</span>
                                        </a>
                                    </li>
                                    <li style="margin-bottom: 5px;">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/login.php">
                                            <span class="font-w600"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>
</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <?php }?>
                        </li>
                        <li class="hidden-md hidden-lg">
                            <button class="btn btn-link text-white pull-right" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                                <i class="fa fa-navicon"></i>
                            </button>
                        </li>
                    </ul>
                    <!-- END Header Navigation Right -->

                    <!-- Main Header Navigation -->
                    <ul class="js-nav-main-header nav-main-header pull-left">
                        <li class="text-right hidden-md hidden-lg">
                            <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                                <i class="fa fa-times"></i>
                            </button>
                        </li>
                        <li class="dddeee">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/" class="uaccc"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['globalsystemname'];?>
</a>
                        </li>
                        <li>
                            <a class="nav-submenu uaccc" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cdcpzx'];?>
</a>
                            <ul style="padding: 0;" class="productmenu">
                            	<div class="ssseee hidden-sm hidden-xs content-boxed">
                            		<div class="row">
                            			<div class="col-sm-12" style="padding-left: 0px;padding-right: 0px;">
                            			    <div class="col-sm-3">
	<a href="/vps.php" class="mtitle">云服务</a>
	<li><a href="/vps.php" class="malink">全国地区云服务器<span class="mhot"></span><p>高速稳定高弹性的计算服务</p></a></li>
</div>
<div class="col-sm-3">
	<a href="#" class="mtitle">独立服务器</a>
	<li><a href="/cart.php" class="malink">香港大带宽服务器<span class="mhot"></span><p>高性能安全隔离物理集群服务</p></a></li>
		<li><a href="/cart.php" class="malink">韩国Moack机房直售服务器<span class="mhot"></span><p>高性能安全隔离物理集群服务</p></a></li>
				<li><a href="/cart.php" class="malink">美国站群服务器<span class="mhot"></span><p>高性能安全隔离物理集群服务</p></a></li>
</div>
<div class="col-sm-3">
	<a href="./promotion.php" class="mtitle">其他服务</a>
	<li><a href="/host.php" class="malink">云桌面<span class="mhot"></span><p>请前往模板目录下找到syheader.tpl</p></a></li>

</div>
                            			</div>
                            		</div>
                                </div>
                                <div class="hidden-lg hidden-md">
                                    <li><a href="./vps.php">云服务器</a></li>
<li><a href="./webhosting.php">虚拟主机</a></li>
<li><a href="./dediserver.php">独立服务器</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements.php" class="uaccc"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['announcementstitle'];?>
</a></li>
                        <li>
                            <a class="nav-submenu uaccc" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cdfwzc'];?>
</a>
                            <ul style="padding: 0;" class="helpmenu">
                            	<div class="ssseee hidden-sm hidden-xs content-boxed">
                            		<div class="row">
                            		<div class="col-sm-12" style="padding-left: 0px;padding-right: 0px;">
                            			    <div class="col-sm-3">
    <a class="mtitle">帮助中心</a>
	<li><a href="./knowledgebase.php" class="malink">帮助文档</a></li>
</div>
	<div class="col-sm-3">
	<a class="mtitle"> </a>
	<li><a href="./downloads.php" class="malink">下载中心</a></li>
</div>
                            			</div>
                            		</div>
                                </div>
                                <div class="hidden-lg hidden-md">
                                     <li><a href="./knowledgebase.php">帮助文档</a></li>
<li><a href="./downloads.php">下载中心</a></li>
                                </div>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu uaccc" href="javascript:void(0)">解决方案</a>
                            <ul style="padding: 0;" >
                            	<div class="ssseee hidden-sm hidden-xs content-boxed">
                            		<div class="row">
                            			<div class="col-sm-12" style="padding-left: 0px;padding-right: 0px;">
                            			    <div class="col-sm-3">
											<li><a href="./solutions.php" class="malink">网站解决方案<span class="mnew"></span></a></li>
											</div>
											<div class="col-sm-3">
											<li><a href="./solutions1.php" class="malink">金融解决方案<span class="mnew"></span></a></li>
											</div>
											<div class="col-sm-3">
											<li><a href="./solutions2.php" class="malink">电商解决方案<p></p></a></li>
											</div>
											<div class="col-sm-3">
											<li><a href="./solutions3.php" class="malink">移动解决方案<p></p></a></li>
											</div>
											<div class="col-sm-3">
											<li><a href="./solutions4.php" class="malink">游戏解决方案<p></p></a></li>
											</div>											
                            			</div>
                            		</div>
                                </div>
                                <div class="hidden-lg hidden-md">
                                    <li><a href="./solutions.php">网站解决方案</a></li>
									<li><a href="./solutions1.php">金融解决方案</a></li>
									<li><a href="./solutions2.php">电商解决方案</a></li>
									<li><a href="./solutions3.php">移动解决方案</a></li>
									<li><a href="./solutions4.php">游戏解决方案</a></li>
                                </div>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu uaccc" href="javascript:void(0)">生态合作</a>
                           <ul style="padding: 0;" class="affmenu">
                            	<div class="ssseee hidden-sm hidden-xs content-boxed">
                            		<div class="row">
                            			<div class="col-sm-12" style="padding-left: 0px;padding-right: 0px;">
                            			    <div class="col-sm-3">
	<a href="./affiliates.php" class="mtitle">推广返利</a>
	<li><a href="./affiliates.php" class="malink">推广联盟<span class="mnew"></span></a></li>
</div>
<div class="col-sm-3">
	<a href="#" class="mtitle">商业代理</a>
	<li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=540177173&amp;site=qq&amp;menu=yes" class="malink">代理合作<span class="text-muted push-10-l">立即咨询</span></a></li>
</div>
<div class="col-sm-3">
	<a href="#" class="mtitle">了解我们</a>
	<li><a href="./about.php" class="malink">关于我们</a></li>
	<li><a href="./contact.php" class="malink">联系我们<p></p></a></li>
</div>
                                          
                            			</div>
                            		</div>
                                </div>
                                <div class="hidden-lg hidden-md">
                                    <li><a href="./affiliates.php">推广联盟</a></li>
<li><a href="#">代理合作</a></li>
<li><a href="./about.php">关于我们</a></li>
<li><a href="./contact.php">联系我们</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                    <!-- END Main Header Navigation -->

                </div>
            </header>
            <!-- END Header -->
<main id="main-container2">
	<section id="main-body">
		<?php if ($_smarty_tpl->tpl_vars['filename']->value == "cart") {
if ($_smarty_tpl->tpl_vars['carttpl']->value == "oneui_cart" || $_smarty_tpl->tpl_vars['carttpl']->value == "NeWorld-New") {
} else { ?><div class="container" style="margin-top: 20px;"><?php }
}?>
 <?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'announcements' || $_smarty_tpl->tpl_vars['templatefile']->value == 'viewannouncement') {?>
 <div class="bg-white" style="height: 65px;box-shadow: 1px 1px 19px rgba(28, 61, 94, 0.17);line-height: 65px;">
 	<section class="content-full content-boxed container">
 		<i class="fa fa-bullhorn" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['announcementstitle'];?>
</span>
 	</section>
 	 </div>
 <?php } elseif ($_smarty_tpl->tpl_vars['filename']->value == 'contact') {?>
  <div class="bg-white" style="height: 65px;box-shadow: 1px 1px 19px rgba(28, 61, 94, 0.17);line-height: 65px;">
 	<section class="content-full content-boxed container">
 		<i class="fa fa-envelope" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactus'];?>
</span>
 	</section>
 	 </div>
<?php } elseif ($_smarty_tpl->tpl_vars['filename']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasearticle' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasecat') {?>
  <div class="bg-white" style="height: 65px;box-shadow: 1px 1px 19px rgba(28, 61, 94, 0.17);line-height: 65px;">
 	<section class="content-full content-boxed container">
 		<i class="fa fa-book" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasetitle'];?>
</span>
 	</section>
 	 </div>
 	 <?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'downloads' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloaddenied' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloadscat' || $_smarty_tpl->tpl_vars['filename']->value == 'downloads') {?>
  <div class="bg-white" style="height: 65px;box-shadow: 1px 1px 19px rgba(28, 61, 94, 0.17);line-height: 65px;">
 	<section class="content-full content-boxed container">
 		<i class="fa fa-download" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadstitle'];?>
</span>
 	</section>
 	 </div>
 	  	 <?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'tos' || $_smarty_tpl->tpl_vars['templatefile']->value == 'aup') {?>
 	  	 <style>
 	  	 	.h4 {
 	  	 		font-size: 16px;
 	  	 		margin-bottom: 10px;
 	  	 	}
 	  	 	p {
 	  	 		color: #555;
 	  	 	}
 	  	 </style>
  <div class="bg-white" style="height: 65px;box-shadow: 1px 1px 19px rgba(28, 61, 94, 0.17);line-height: 65px;margin-bottom: 50px;">
 	<section class="content-full content-boxed container">
 		<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'tos') {?><i class="fa fa-info" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'aup') {?><i class="fa fa-exclamation-triangle" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cdhlzc'];?>
</span><?php }?>
 	</section>
 	 </div>
<?php }
}
}
