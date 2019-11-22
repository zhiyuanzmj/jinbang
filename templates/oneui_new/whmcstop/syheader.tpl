<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="{$WEB_ROOT}/templates/{$template}/assets/css/oneui.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/magnific-popup/magnific-popup.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/slick/slick-theme.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/font.css">



{if $templatefile == 'homepage' }

<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/public/css/main.css">
{/if}


    <div id="page-container" class="side-scroll header-navbar-fixed header-navbar-transparent">
            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full" style="height: 80px;{if $filename == "cart" || $templatefile == 'announcements' || $templatefile == 'viewannouncement' || $filename == 'contact' || $filename == 'knowledgebase' || $templatefile == 'knowledgebase' || $templatefile == 'knowledgebasearticle' || $templatefile == 'knowledgebasecat' || $templatefile == 'downloads' || $templatefile == 'downloaddenied' || $templatefile == 'downloadscat' || $filename == 'downloads' || $filename == 'tos' || $filename == 'aup'}position:relative;background-color:#2b3033;{/if}">
                <div class="">
                    <ul class="nav-header pull-left" style="margin: 10px 0 0 0;">
                        <li class="header-content">
                            <a class="h5" href="{$WEB_ROOT}/">
                                <img src="{$WEB_ROOT}/templates/{$template}/img/header_logo.png" > 
                          </a>
                        </li>
                    </ul>
                    <!-- Header Navigation Right -->
                    <ul class="nav-header pull-right" style="margin: 10px 0 0 0;">
                        <li class="hidden-sm hidden-xs">
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                                <a class="btn menu-link2" href="{$WEB_ROOT}/promotion.php" style="border-right: 1px solid #fff;color:#f90;">
                                	<i class="si si-present" style="margin-right: 6px;font-size: 13px;"></i>优惠促销
                                </a>
                                <a class="btn menu-link2" href="{$WEB_ROOT}/clientarea.php" style="margin-right: 10px;">
                                	{$LANG.cdkzt}
                                </a>
                            {if $loggedin}
                            <div class="btn-group">
                            <button class="btn btn-link btn-image dropdown-toggle" data-toggle="dropdown" type="button" style="overflow: inherit;">
                                <img src="{if $clientsdetails.email|strpos:'@qq.com'}//q1.qlogo.cn/g?b=qq&nk={$clientsdetails.email|replace:'@qq.com'}&s=100{else}//cn.gravatar.com/avatar/{$clientsdetails.email|md5}?s=64&d={$systemurl}/templates/{$template}/img/default_family1.png{/if}" alt="{$clientsdetails.firstname}">
                                <span class="caret text-white" style="margin-right: -12px;"></span>
                            </button>                            
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header" style="font-weight: 300;font-size: 13px;margin-top: 5px;">您好，{$clientsdetails.lastname}{$clientsdetails.firstname}</li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=details">
                                        {$LANG.clientareanavdetails}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=changepw">
                                        {$LANG.clientareanavchangepw}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/supporttickets.php">
                                        {$LANG.navtickets}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=addfunds">
                                        {$LANG.addfunds}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=security">
                                        {$LANG.clientareanavsecurity}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=emails">
                                        {$LANG.navemailssent}
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li style="margin-bottom: 5px;">
                                    <a tabindex="-1" href="{$WEB_ROOT}/logout.php">
                                        <i class="si si-logout pull-right"></i>{$LANG.clientareanavlogout}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {else}
                                <a class="btn menu-link1" href="{$WEB_ROOT}/login.php" style="margin-right: 10px;">
                                	{$LANG.loginbutton}
                                </a>
                                <a class="btn menu-link" href="{$WEB_ROOT}/register.php">
                                	{$LANG.signup}
                                </a>
                          {/if}
                        </li>
                        <li class="hidden-lg hidden-md">
                            <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                                {if $loggedin}
                        <div class="btn-group">
                            <button class="btn btn-link text-white dropdown-toggle hidden-lg hidden-md" data-toggle="dropdown" type="button" style="margin-top: -1px;overflow: inherit;">
                                <i class="si si-user"></i>{if count($clientAlerts) > 0}<i class="fa fa-circle text-danger" style="position: absolute;top: 0px; color: #f76767;"></i>{/if}
                            </button>                            
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header" style="font-weight: 300;font-size: 13px;margin-top: 5px;">您好，{$clientsdetails.lastname}{$clientsdetails.firstname}</li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php">
                                        {$LANG.clientareanavhome}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=details">
                                        {$LANG.clientareanavdetails}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=changepw">
                                        {$LANG.clientareanavchangepw}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/supporttickets.php">
                                        {$LANG.navtickets}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=addfunds">
                                        {$LANG.addfunds}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=security">
                                        {$LANG.clientareanavsecurity}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=emails">
                                        {$LANG.navemailssent}
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li style="margin-bottom: 5px;">
                                    <a tabindex="-1" href="{$WEB_ROOT}/logout.php">
                                        <i class="si si-logout pull-right"></i>{$LANG.clientareanavlogout}
                                    </a>
                                </li>
                            </ul>
                        </div>
                            {else}
                            <div class="btn-group">
                                <button class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown" type="button" style="margin-top: -1px;">
                                    <i class="si si-user"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right sidebar-mini-hide font-s13">
                                    <li style="margin-top: 5px;">
                                        <a href="{$WEB_ROOT}/register.php">
                                            <span class="font-w600">{$LANG.signup}</span>
                                        </a>
                                    </li>
                                    <li style="margin-bottom: 5px;">
                                        <a href="{$WEB_ROOT}/login.php">
                                            <span class="font-w600">{$LANG.loginbutton}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            {/if}
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
                            <a href="{$WEB_ROOT}/" class="uaccc">{$LANG.globalsystemname}</a>
                        </li>
                        <li>
                            <a class="nav-submenu uaccc" href="javascript:void(0)">{$LANG.cdcpzx}</a>
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
                        <li><a href="{$WEB_ROOT}/announcements.php" class="uaccc">{$LANG.announcementstitle}</a></li>
                        <li>
                            <a class="nav-submenu uaccc" href="javascript:void(0)">{$LANG.cdfwzc}</a>
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
		{if $filename == "cart"}{if $carttpl eq "oneui_cart" || $carttpl eq "NeWorld-New"}{else}<div class="container" style="margin-top: 20px;">{/if}{/if}
 {if $templatefile == 'announcements' || $templatefile == 'viewannouncement'}
 <div class="bg-white" style="height: 65px;box-shadow: 1px 1px 19px rgba(28, 61, 94, 0.17);line-height: 65px;">
 	<section class="content-full content-boxed container">
 		<i class="fa fa-bullhorn" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;">{$LANG.announcementstitle}</span>
 	</section>
 	 </div>
 {elseif $filename == 'contact'}
  <div class="bg-white" style="height: 65px;box-shadow: 1px 1px 19px rgba(28, 61, 94, 0.17);line-height: 65px;">
 	<section class="content-full content-boxed container">
 		<i class="fa fa-envelope" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;">{$LANG.contactus}</span>
 	</section>
 	 </div>
{elseif $filename == 'knowledgebase' || $templatefile == 'knowledgebase' || $templatefile == 'knowledgebasearticle' || $templatefile == 'knowledgebasecat'}
  <div class="bg-white" style="height: 65px;box-shadow: 1px 1px 19px rgba(28, 61, 94, 0.17);line-height: 65px;">
 	<section class="content-full content-boxed container">
 		<i class="fa fa-book" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;">{$LANG.knowledgebasetitle}</span>
 	</section>
 	 </div>
 	 {elseif $templatefile == 'downloads' || $templatefile == 'downloaddenied' || $templatefile == 'downloadscat' || $filename == 'downloads'}
  <div class="bg-white" style="height: 65px;box-shadow: 1px 1px 19px rgba(28, 61, 94, 0.17);line-height: 65px;">
 	<section class="content-full content-boxed container">
 		<i class="fa fa-download" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;">{$LANG.downloadstitle}</span>
 	</section>
 	 </div>
 	  	 {elseif $templatefile == 'tos' || $templatefile == 'aup'}
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
 		{if $templatefile == 'tos'}<i class="fa fa-info" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;">{$LANG.ordertos}</span>{elseif $templatefile == 'aup'}<i class="fa fa-exclamation-triangle" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;">{$LANG.cdhlzc}</span>{/if}
 	</section>
 	 </div>
{/if}
