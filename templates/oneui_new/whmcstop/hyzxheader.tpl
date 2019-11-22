<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="{$WEB_ROOT}/templates/{$template}/assets/css/oneui.css">
<link rel="stylesheet" id="css-main" href="{$WEB_ROOT}/templates/{$template}/css/custom.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/magnific-popup/magnific-popup.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/slick/slick-theme.min.css">

<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed{if $templatefile == 'clientareaproducts' || $templatefile == 'clientareadomains' || $templatefile == 'clientareadomainregisterns' || $templatefile == 'clientareadomaingetepp' || $templatefile == 'clientareadomainemailforwarding' || $templatefile == 'clientareadomaindns' || $templatefile == 'clientareadomaindetails' || $templatefile == 'clientareadomaincontactinfo' || $templatefile == 'upgrade' || $templatefile == 'upgradesummary' || $templatefile == 'clientareadomainaddons' || $filename == 'submitticket' || $filename == 'supporttickets' || $filename == 'viewticket' || $templatefile == 'clientareainvoices' || $templatefile == 'clientareaquotes' || $templatefile == 'clientareaproductdetails' || $templatefile == 'clientareacancelrequest' || $templatefile == 'clientareadetails' || $templatefile == 'clientareacontacts' || $templatefile == 'clientareachangepw' || $templatefile == 'clientareaemails' || $templatefile == 'masspay' || $templatefile == 'clientareaaddfunds' || $templatefile == 'clientareasecurity'} sidebar-mini{/if}">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                {include file="$template/whmcstop/hyzxhd.tpl"}
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
                            <a class="h5 text-white" href="{$WEB_ROOT}/index.php">
                                <i class="fa fa-skyatlas text-white"></i> <span class="h5 font-w600 sidebar-mini-hide">{$companyname}</span>
                            </a>
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">
                        	

                <ul class="nav-main">
                    {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                    {if $loggedin}
                     <li class="nav-main-heading"><span class="sidebar-mini-hide">{$LANG.account}</span></li>
			        <li class="{if $templatefile == 'clientareadetails' || $templatefile == 'clientareacontacts' || $templatefile == 'clientareachangepw' || $templatefile == 'clientareaemails' || $templatefile == 'clientareasecurity'}open{/if}">
			            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide">{$LANG.account}</span></a>
			            <ul>
			                <li><a class="{if $templatefile == 'clientareadetails'}active{/if}" href="{$WEB_ROOT}/clientarea.php?action=details">{$LANG.clientareanavdetails}</a></li>
			                <li><a class="{if $templatefile == 'clientareacontacts'}active{/if}" href="{$WEB_ROOT}/clientarea.php?action=contacts">{$LANG.clientareanavcontacts}</a></li>
							<li><a class="{if $templatefile == 'clientareachangepw'}active{/if}" href="{$WEB_ROOT}/clientarea.php?action=changepw">{$LANG.clientareanavchangepw}</a></li>
							<li><a class="{if $templatefile == 'clientareasecurity'}active{/if}" href="{$WEB_ROOT}/clientarea.php?action=security">{$LANG.clientareanavsecurity}</a></li>
							<li><a class="{if $templatefile == 'clientareaemails'}active{/if}" href="{$WEB_ROOT}/clientarea.php?action=emails">{$LANG.navemailssent}</a></li>
			            </ul>
			        </li>
			        <li>
                                    <a href="{$WEB_ROOT}/logout.php"><i class="si si-logout"></i><span class="sidebar-mini-hide">{$LANG.clientareanavlogout}</span></a>
                                </li>
                    {else}
                    <li class="nav-main-heading"><span class="sidebar-mini-hide">{$LANG.account}</span></li>
                                <li>
                                    <a href="{$WEB_ROOT}/clientarea.php"><i class="si si-login"></i><span class="sidebar-mini-hide">{$LANG.login}</span></a>
                                </li>
                                <li>
                                    <a href="{$WEB_ROOT}/register.php"><i class="si si-user-follow"></i><span class="sidebar-mini-hide">{$LANG.register}</span></a>
                                </li>
                                <li>
                                    <a href="{$WEB_ROOT}/pwreset.php"><i class="si si-key"></i><span class="sidebar-mini-hide">{$LANG.forgotpw}</span></a>
                                </li>
                    {/if}
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
                        {if count($clientAlerts) > 0}
                        <span class="fa fa-circle" style="position: absolute;color: #f40;margin-top: -4px;margin-left: -13px;font-size: 6px;"></span>
                        {/if}
                    </li>
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button" style="color: #fff;background-color: transparent;border-color: transparent;">
                                <img src="{if $clientsdetails.email|strpos:'@qq.com'}//q1.qlogo.cn/g?b=qq&nk={$clientsdetails.email|replace:'@qq.com'}&s=100{else}//cn.gravatar.com/avatar/{$clientsdetails.email|md5}?s=64&d={$systemurl}/templates/{$template}/img/default_family1.png{/if}" alt="{$clientsdetails.firstname}">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                            	{if $loggedin}
                                <li class="dropdown-header">欢迎，<font color="#333333">{$clientsdetails.lastname}{$clientsdetails.firstname}</font></li>
								<li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=details">
                                        <i class="si si-user pull-right"></i>{$LANG.clientareanavdetails}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=contacts">
                                        <i class="si si-users pull-right"></i>{$LANG.clientareanavcontacts}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=changepw">
                                        <i class="si si-key pull-right"></i>{$LANG.clientareanavchangepw}
                                    </a>
                                </li>
                            {if $condlinks.addfunds}
			                	<li>
			                		<a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=addfunds">
			                			<i class="si si-wallet pull-right"></i>{$LANG.addfunds}
			                		</a>
			                	</li>
			                {/if}
			                	<li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=emails">
                                        <i class="si si-envelope-letter pull-right"></i>{$LANG.navemailssent}
                                    </a>
                                </li>
                            
			                {if $condlinks.updatecc}
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php?action=creditcard">
                                        <i class="fa fa-credit-card pull-right"></i>{$LANG.navmanagecc}
                                    </a>
                                </li>
			                {/if}
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/logout.php">
                                        <i class="si si-logout pull-right"></i>{$LANG.clientareanavlogout}
                                    </a>
                                </li>
                                {else}
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/clientarea.php">
                                        <i class="si si-login pull-right"></i>{$LANG.login}
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/register.php">
                                        <i class="si si-user-follow pull-right"></i>{$LANG.register}
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="{$WEB_ROOT}/pwreset.php">
                                        <i class="si si-key pull-right"></i>{$LANG.forgotpw}
                                    </a>
                                </li>
                                {/if}
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
                {if $languagechangeenabled && count($locales) > 1}
                <li>
                    <a class="btn btn-default" data-toggle="popover" id="languageChooser" style="color: #fff;background-color: transparent;border-color: transparent;position: absolute;"><i class="fa fa-language" style="font-size:20px;"></i></a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            {foreach from=$locales item=locale}
                                <li><a href="{$currentpagelinkback}language={$locale.language}">{$locale.localisedName}</a></li>
                            {/foreach}
                        </ul>
                    </div>
				</li>
				{/if}
                </ul>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

<main{if $templatefile == 'clientareaproducts' || $templatefile == 'clientareadomains' || $templatefile == 'clientareadomainregisterns' || $templatefile == 'clientareadomaingetepp' || $templatefile == 'clientareadomainemailforwarding' || $templatefile == 'clientareadomaindns' || $templatefile == 'clientareadomaindetails' || $templatefile == 'clientareadomaincontactinfo' || $templatefile == 'clientareadomainaddons' || $templatefile == 'upgrade' || $templatefile == 'upgradesummary' || $filename == 'submitticket' || $filename == 'supporttickets' || $filename == 'viewticket' || $templatefile == 'clientareaquotes' || $templatefile == 'clientareacreditcard' || $templatefile == 'masspay' || $templatefile == 'clientareainvoices' || $templatefile == 'clientareaaddfunds' || $templatefile == 'clientareaproductdetails' || $templatefile == 'clientareacancelrequest' || $templatefile == 'clientareadetails' || $templatefile == 'clientareacontacts' || $templatefile == 'clientareachangepw' || $templatefile == 'clientareaemails' || $templatefile == 'clientareasecurity'} id="main-container1"{else} id="main-container"{/if}{if $templatefile == 'clientareahome'} style="background-color:#f3f4f5;"{/if}>
	
	{if $templatefile == 'clientareahome'}
	{elseif $templatefile == 'clientareaproducts' || $templatefile == 'clientareadomains' || $filename == 'submitticket' || $filename == 'supporttickets' || $filename == 'viewticket' || $templatefile == 'clientareaquotes' || $templatefile == 'clientareacreditcard' || $templatefile == 'masspay' || $templatefile == 'clientareainvoices' || $templatefile == 'clientareaaddfunds' || $templatefile == 'clientareacancelrequest' || $templatefile == 'clientareadetails' || $templatefile == 'upgrade' || $templatefile == 'upgradesummary' || $templatefile == 'clientareacancelrequest' || $templatefile == 'clientareacontacts' || $templatefile == 'clientareachangepw' || $templatefile == 'clientareaemails' || $templatefile == 'clientareasecurity'}
		<div class="content-l hidden-sm hidden-xs">
			<div class="content-l-header">
				{include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
			</div>
			{if $templatefile == 'clientareaproducts' || $templatefile == 'clientareadomains' || $templatefile == 'clientareadomainregisterns' || $templatefile == 'clientareadomaingetepp' || $templatefile == 'clientareadomainemailforwarding' || $templatefile == 'clientareadomaindns' || $templatefile == 'clientareadomaindetails' || $templatefile == 'clientareadomaincontactinfo' || $templatefile == 'clientareadomainaddons'}
			<ul class="nav">
				<li class="active"><a href="#">{$LANG.gl}</a></li>
				<li><a style="color: #333;"><i class="fa fa-caret-down"></i>{$LANG.view}</a></li>
				{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
				{include file="$template/includes/sidebar3.tpl" sidebar=$primarySidebar}
				{/if}
			</ul>
			{elseif $templatefile == 'upgrade' || $templatefile == 'upgradesummary' || $templatefile == 'clientareacancelrequest'}
			<ul class="nav">
				{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
					{include file="$template/includes/sidebar2.tpl" sidebar=$primarySidebar}
				{/if}
			</ul>
			{elseif $templatefile == 'clientareaquotes' || $templatefile == 'clientareacreditcard' || $templatefile == 'masspay' || $templatefile == 'clientareainvoices' || $templatefile == 'clientareaaddfunds'}
			<ul class="nav">
				<li class="{if $templatefile == 'clientareainvoices' || $templatefile == 'viewinvoice'}active{/if}"><a href="{$WEB_ROOT}/clientarea.php?action=invoices">{$LANG.invoices}</a></li>
			    <li class="{if $templatefile == 'clientareaquotes'}active{/if}"><a href="{$WEB_ROOT}/clientarea.php?action=quotes">{$LANG.quotestitle}</a></li>
			    {if $condlinks.masspay}
			    <li class="{if $templatefile == 'masspay'}active{/if}"><a href="{$WEB_ROOT}/clientarea.php?action=masspay&all=true">{$LANG.masspaytitle}</a></li>
			    {/if}
			    {if $condlinks.updatecc}
			    <li class="{if $templatefile == 'clientareacreditcard'}active{/if}"><a href="{$WEB_ROOT}/clientarea.php?action=creditcard">{$LANG.navmanagecc}</a></li>
			    {/if}
			    {if $condlinks.addfunds}
			    <li class="{if $templatefile == 'clientareaaddfunds'}active{/if}"><a href="{$WEB_ROOT}/clientarea.php?action=addfunds">{$LANG.addfunds}</a></li>
			    {/if}
			</ul>
			{elseif $templatefile == 'clientareadetails' || $templatefile == 'clientareacontacts' || $templatefile == 'clientareachangepw' || $templatefile == 'clientareaemails' || $templatefile == 'clientareasecurity'}
			<ul class="nav">
				{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
					{include file="$template/includes/sidebar3.tpl" sidebar=$primarySidebar}
				{/if}
			</ul>
			{elseif $filename == 'submitticket' || $filename == 'supporttickets' || $filename == 'viewticket'}
			<ul class="nav">
				<li {if $filename == 'supporttickets' || $filename == 'viewticket'}class="active"{/if}><a href="{$WEB_ROOT}/supporttickets.php">{$LANG.navtickets}</a></li>
				<li {if $filename == 'submitticket'}class="active"{/if}><a href="{$WEB_ROOT}/submitticket.php">{$LANG.navopenticket}</a></li>
			</ul>
			{/if}
		</div>
		<div class="content-r">
		<div class="content">
			{if $templatefile == 'clientareaproducts'}
		    {if $clientsstats.productsnumtotal>0}
		    <div class="block">
                <div class="block-header bg-white" style="padding: 15px 0 15px 0;border-bottom: 1px solid #f0f0f0;">
                	{if $filename == 'submitticket' || $filename == 'supporttickets' || $filename == 'viewticket'}
                	{else}
                    <ul class="breadcrumb pull-right hidden-sm hidden-xs">
                    	{foreach $breadcrumb as $item}
				        <li><a {if $item@last}class="link"{else}class="text-muted"{/if} href="{$item.link}">{$item.label}</a></li>
				        {/foreach}
                    </ul>
                    {/if}
                    <div class="block-title text-normal dropdown hidden-lg hidden-md">
                            <a href="#" data-toggle="dropdown" style="color: #000000;">{include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
								{include file="$template/includes/sidebar1.tpl" sidebar=$primarySidebar}
								{/if}
                            </ul>
                    </div>
                    <div class="block-title text-normal hidden-sm hidden-xs" style="color: #333;font-size: 16px;">
                            {if $templatefile == 'clientareaproducts'}产品列表{else}{include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}{/if}
                    </div>
                </div>
                <div class="block-content">
                	<div class="pull-r-l">
               {/if}
              {else}
              		    <div class="block">
                <div class="block-header bg-white" style="padding: 15px 0 15px 0;border-bottom: 1px solid #f0f0f0;">
                	{if $filename == 'submitticket' || $filename == 'supporttickets' || $filename == 'viewticket'}
                	{else}
                    <ul class="breadcrumb pull-right hidden-sm hidden-xs">
                    	{foreach $breadcrumb as $item}
				        <li><a {if $item@last}class="link"{else}class="text-muted"{/if} href="{$item.link}">{$item.label}</a></li>
				        {/foreach}
                    </ul>
                    {/if}
                    <div class="block-title text-normal dropdown hidden-lg hidden-md">
                            <a href="#" data-toggle="dropdown" style="color: #000000;">{include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
								{include file="$template/includes/sidebar1.tpl" sidebar=$primarySidebar}
								{/if}
                            </ul>
                    </div>
                    <div class="block-title text-normal hidden-sm hidden-xs" style="color: #333;font-size: 16px;">
                            {if $templatefile == 'clientareaproducts'}产品列表{else}{include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}{/if}
                    </div>
                </div>
                <div class="block-content">
                	<div class="pull-r-l">
              {/if}
	{elseif $templatefile == 'clientareaproductdetails' || $templatefile == 'clientareadomainregisterns' || $templatefile == 'clientareadomaingetepp' || $templatefile == 'clientareadomainemailforwarding' || $templatefile == 'clientareadomaindns' || $templatefile == 'clientareadomaindetails' || $templatefile == 'clientareadomaincontactinfo' || $templatefile == 'clientareadomainaddons'}
		<div class="content-l hidden-sm hidden-xs">
			<div class="content-l-header">
				{include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
			</div>			
			<ul class="nav">
				{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
				{include file="$template/includes/sidebar2.tpl" sidebar=$primarySidebar}
				{/if}
			</ul>
		</div>
		<div class="content-r">
			<div class="content">
				<div class="block">
                <div class="block-header bg-white" style="padding: 5px 0 0 0;">
                    <ul class="breadcrumb pull-right hidden-sm hidden-xs">
                    	<a href="{$WEB_ROOT}/knowledgebase.php" target="_blank" class="btn btn-primary btn-sm" style="background-color: #00aaff;border: 0;border-radius: 0;padding: 6px 12px;font-weight: 400;"><i class="fa fa-external-link"></i>&nbsp;&nbsp;帮助文档</a>
                    </ul>                    
                    <div class="block-title text-normal dropdown hidden-lg hidden-md">
                            <a href="{$WEB_ROOT}/clientarea.php?action=services" class="ny-back-btn"></a>
                            <a href="#" data-toggle="dropdown" style="display: inline-block;margin: 0;height: 40px;line-height: 40px;font-size: 22px;color: #272829;">{include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
								{include file="$template/includes/sidebar2.tpl" sidebar=$primarySidebar}
								{/if}
                            </ul>
                    </div>
                    <div class="block-title text-normal hidden-sm hidden-xs" style="color: #333;font-size: 16px;line-height: 30px;">
                            <a href="{if $templatefile == 'clientareaproductdetails'}{$WEB_ROOT}/clientarea.php?action=services{else}{$WEB_ROOT}/clientarea.php?action=domains{/if}" class="ny-back-btn"></a>{if $domain}<span style="display: inline-block;margin: 0;height: 40px;line-height: 40px;font-size: 22px;color: #272829;">{if $domain == ""}{$product}{else}{$domain}</span>{/if}{elseif $moduleclientarea}<span style="display: inline-block;margin: 0;height: 40px;line-height: 40px;font-size: 22px;color: #272829;">{$product}</span>{/if}
                    </div>
                </div>
                <div class="block-content">
                	<div class="pull-r-l">
	{else}
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
						<div class="col-sm-7">
                            <h1 class="h3 page-heading header-lined">
                            	{include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
                            </h1>
                            
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
							<ol class="breadcrumb push-10-t">
							    {foreach $breadcrumb as $item}
							        <li{if $item@last} class="active"{/if}>
							            {if !$item@last}<a href="{$item.link}">{/if}
							            {$item.label}
							            {if !$item@last}</a>{/if}
							        </li>
							    {/foreach}
							</ol>
					    </div>
                    </div>
                </div>
	{include file="$template/includes/verifyemail.tpl"}
	<div class="content">
	{/if}
