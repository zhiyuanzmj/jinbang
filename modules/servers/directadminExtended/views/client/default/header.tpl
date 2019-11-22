<input type="hidden" id="product_id" value="{$_params.serviceid}" /> 

<link href="{$_assets_dir}css/bootstrap.min.css" rel="stylesheet">
<link href="{$_assets_dir}css/font-awesome.min.css" rel="stylesheet">
<!--- ################ -->
<link href="{$_assets_dir}css/layout.css" rel="stylesheet">
<link href="{$_assets_dir}css/theme.css" rel="stylesheet">
<link href="{$_assets_dir}css/bootstrap-datetimepicker.min.css" rel="stylesheet">

{literal}
    <script type="text/javascript">
        var bootstrap_src = "{/literal}{$_assets_dir}{literal}js/bootstrap.min.js";
        if (!window.jQuery) { 
            document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"><\/script>'); 
            document.write('<script src="' + bootstrap_src +'" type="text/javascript"><\/script>'); 
        } else {
            var sp = jQuery.fn.jquery.split(" ")[0].split(".");
            if(sp[0]<2 && sp[1]<9 || 1==sp[0] && 9==sp[1] && sp[2]<1)
                document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"><\/script>'); 
            jQuery(window).load(function () {
                if(!jQuery.fn.modal)
                    jQuery('#mg-wrapper').prepend('<script src="' + bootstrap_src +'" type="text/javascript"><\/script>'); 
            });
        }
    </script>
{/literal}

{if !$template_six_style}<!-- <script src="{$_assets_dir}js/bootstrap.min.js" type="text/javascript"></script> -->{/if}
<script src="{$_assets_dir}js/bootsrap.tooltip.js" type="text/javascript"></script>

<script src="{$_assets_dir}js/validator.js" type="text/javascript"></script>
<script src="{$_assets_dir}js/app.js" type="text/javascript"></script>
<script src="{$_assets_dir}js/zxcvbn.js" type="text/javascript"></script>
<script src="{$_assets_dir}js/moment.min.js" type="text/javascript"></script>
<script src="{$_assets_dir}js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

{literal} 
<script type="text/javascript">
    var lang = new Object();
    var validator_lang = new Object();{/literal}
    {foreach from=$lang item=l key=k}
        {literal}lang['{/literal}{$k|replace:"'":""}{literal}'] = '{/literal}{$l|replace:"'":""}{literal}';{/literal}
    {/foreach}
    {foreach from=$validator_lang item=l key=k}
        {literal}validator_lang['{/literal}{$k|replace:"'":""}{literal}'] = '{/literal}{$l|replace:"'":""}{literal}';{/literal}
    {/foreach}

    {literal} 
    </script>
{/literal}    
<div class="module-main-header">
    <a href="clientarea.php?action=productdetails&id={$serviceid}" class="btn btn-back btn-icon"><i class="fa fa-arrow-left" {if $WHMCS6}style="line-height: 36px;"{/if}></i></a><h2 {if $WHMCS6}style="line-height: 36px;"{/if}>{$product_details.product_group} - {$product_details.product_name} {if !empty($userdomain)}{$userdomain}{/if}</h2>
</div>
<div id="mg-wrapper" class="module-container {if $sidebar_closed}sidebar-closed{/if}">
    {if !$template_six_style}<div class="module-sidebar">
        <div class="sidebar-header">
            <button class="btn btn-icon cp-sidebar-toggle" data-target=".module-menu" data-toggle="collapse" type="button"> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h3>
                <span class="hide-sm">{$main_lang.main_header}</span>
                <span class="show-sm">{$lang.main_header}</span>
            </h3>
            <button class="show-sm btn btn-icon show-hint" data-toggle="tooltip" title="{$lang.main_hint}" type="button"> 
                <i class="fa fa-question-circle"></i> 
            </button>
        </div>
        <ul class="module-menu collapse">
            {if $manageinstallapp == "on"}<li {if $_current_page eq 'installapp'}class="active"{/if}><a href="{$_burl}&page=installapp"><i class="icon-menu icon-installapp"></i><span>{$main_lang.install_app_link}</span></a></li>{/if}
            {if $manageftp == "on"}<li {if $_current_page eq 'ftp'}class="active"{/if}><a href="{$_burl}&page=ftp"><i class="icon-menu icon-ftp"></i><span>{$main_lang.ftp_link}</span></a></li>{/if}
            {if $managedatabases == "on"}<li {if $_current_page eq 'databases'}class="active"{/if}><a href="{$_burl}&page=databases"><i class="icon-menu icon-databases"></i><span>{$main_lang.databases_link}</span></a></li>{/if}
            {if $managefilemanager == "on"}<li {if $_current_page eq 'filemanager'}class="active"{/if}><a href="{$_burl}&page=filemanager"><i class="icon-menu icon-files"></i><span>{$main_lang.filemanager_link}</span></a></li>{/if}
            {if $managesubdomains == "on"}<li {if $_current_page eq 'subdomains'}class="active"{/if}><a href="{$_burl}&page=subdomains"><i class="icon-menu icon-subdomains"></i><span>{$main_lang.subdomains_link}</span></a></li>{/if}
            {if $manageaddondomains == "on"}<li {if $_current_page eq 'addondomains'}class="active"{/if}><a href="{$_burl}&page=addondomains"><i class="icon-menu icon-addondomains"></i><span>{$main_lang.addon_domains_link}</span></a></li>{/if}
            {if $managebackups == "on"}<li {if $_current_page eq 'backups'}class="active"{/if}><a href="{$_burl}&page=backups"><i class="icon-menu icon-backups"></i><span>{$main_lang.backups_link}</span></a></li>{/if}
            {if $managestats == "on"}<li {if $_current_page eq 'stats'}class="active"{/if}><a href="{$_burl}&page=stats"><i class="icon-menu icon-graphsstats"></i><span>{$main_lang.stats_link}</span></a></li>{/if}
            {if $manageperlmodules == "on"}<li {if $_current_page eq 'perlmodules'}class="active"{/if}><a href="{$_burl}&page=perlmodules"><i class="icon-menu icon-perlmodules"></i><span>{$main_lang.perlmodules_link}</span></a></li>{/if}
            
            <li class="sidebar-header">
                <button class="btn btn-icon cp-sidebar-toggle" data-target=".module-menu" data-toggle="collapse" type="button"> 
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h3>{$main_lang.main_header3}</h3>
            </li>
            {if $manageemails == "on"}<li {if $_current_page eq 'emails'}class="active"{/if}><a href="{$_burl}&page=emails"><i class="icon-menu icon-emails"></i><span>{$main_lang.emails_link}</span></a></li>{/if}
            {if $manageemailsforwarders == "on"}<li {if $_current_page eq 'emailsforwarders'}class="active"{/if}><a href="{$_burl}&page=emailsforwarders"><i class="icon-menu icon-emailsforwarders"></i><span>{$main_lang.emails_forwarders_link}</span></a></li>{/if}
            {if $manageemailfilters == "on"}<li {if $_current_page eq 'emailfilters'}class="active"{/if}><a href="{$_burl}&page=emailfilters"><i class="icon-menu icon-spam"></i><span>{$main_lang.emailfilters_link}</span></a></li>{/if}
            {if $manageautoresponders == "on"}<li {if $_current_page eq 'autoresponders'}class="active"{/if}><a href="{$_burl}&page=autoresponders"><i class="icon-menu icon-auto-responder"></i><span>{$main_lang.autoresponders_link}</span></a></li>{/if}
            {if $managevacation == "on"}<li {if $_current_page eq 'vacation'}class="active"{/if}><a href="{$_burl}&page=vacation"><i class="icon-menu icon-out-of-office"></i><span>{$main_lang.vacation_link}</span></a></li>{/if}
            {if $managemailinglists == "on"}<li {if $_current_page eq 'mailinglists'}class="active"{/if}><a href="{$_burl}&page=mailinglists"><i class="icon-menu icon-mailing-list"></i><span>{$main_lang.mailinglists_link}</span></a></li>{/if}
            {if $managespamassasin == "on"}<li {if $_current_page eq 'spamassasin'}class="active"{/if}><a href="{$_burl}&page=spamassasin"><i class="icon-menu icon-spamassasin-settings"></i><span>{$main_lang.spamassasin_link}</span></a></li>{/if}
            
            <li class="sidebar-header">
                <button class="btn btn-icon cp-sidebar-toggle" data-target=".module-menu" data-toggle="collapse" type="button"> 
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h3>{$main_lang.main_header4}</h3>
            </li>
            {if $manageparkeddomains == "on"}<li {if $_current_page eq 'parkeddomains'}class="active"{/if}><a href="{$_burl}&page=parkeddomains"><i class="icon-menu icon-parkeddomains"></i><span>{$main_lang.parked_domains_link}</span></a></li>{/if}
            {if $manageforwarddomains == "on"}<li {if $_current_page eq 'forwarddomains'}class="active"{/if}><a href="{$_burl}&page=forwarddomains"><i class="icon-menu icon-forwarddomains"></i><span>{$main_lang.forward_domains_link}</span></a></li>{/if}
            {if $managecron == "on"}<li {if $_current_page eq 'cron'}class="active"{/if}><a href="{$_burl}&page=cron"><i class="icon-menu icon-cron"></i><span>{$main_lang.cron_link}</span></a></li>{/if}
            {if $managessl == "on"}<li {if $_current_page eq 'ssl'}class="active"{/if}><a href="{$_burl}&page=ssl"><i class="icon-menu icon-ssl"></i><span>{$main_lang.ssl_link}</span></a></li>{/if}
            {if $manageapachehandlers == "on"}<li {if $_current_page eq 'apachehandlers'}class="active"{/if}><a href="{$_burl}&page=apachehandlers"><i class="icon-menu icon-apache-handlers"></i><span>{$main_lang.apachehandlers_link}</span></a></li>{/if}
            {if $manageerrorpages == "on"}<li {if $_current_page eq 'errorpages'}class="active"{/if}><a href="{$_burl}&page=errorpages"><i class="icon-menu icon-404"></i><span>{$main_lang.errorpages_link}</span></a></li>{/if}
            {if $managedns == "on"}<li {if $_current_page eq 'dns'}class="active"{/if}><a href="{$_burl}&page=dns"><i class="icon-menu icon-managedns"></i><span>{$main_lang.dns_link}</span></a></li>{/if}
            
            <li class="sidebar-header">
                <button class="btn btn-icon cp-sidebar-toggle" data-target=".module-menu" data-toggle="collapse" type="button"> 
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h3>{$main_lang.main_header2}</h3>
            </li>
            {if $directadminlogin == "on"}
                <li>  
                    <form name="form_panel" action="http{if $_params.serversecure}s{/if}://{if $_params.serverhostname}{$_params.serverhostname}{else}{$_params.serverip}{/if}:{if $_params.serverport}{$_params.serverport}{else}2222{/if}/CMD_LOGIN" method="post" target="_blank">
                        <input type="hidden" name="username" value="{$_params.username}" />
                        <input type="hidden" name="password" value="{$_params.password}" />
                        <a href="#" onmousedown="form_panel.submit();
                                return false;"><i class="icon-menu icon-da-login"></i><span>{$main_lang.clientareadirectadmin_link}</span></a>
                    </form>
                </li>
            {/if}
            {if $webmaillogin == "on"}<li><a href="http{if $_params.serversecure}s{/if}://{if $_params.serverhostname}{$_params.serverhostname}{else}{$_params.serverip}{/if}/{if $webmailtype==1}horde{elseif $webmailtype==2}roundcube{else}squirrelmail{/if}" target="_blank"><i class="icon-menu icon-webmail"></i><span>{$main_lang.clientareawebmaillink}</span></a></li>{/if}
            {if $managephpmyadmin == "on"}<li><a href="http{if $_params.serversecure}s{/if}://{$_params.username}:{$_params.password}@{if $_params.serverhostname}{$_params.serverhostname}{else}{$_params.serverip}{/if}/phpmyadmin/index.php" target="_blank"><i class="icon-menu icon-phpmyadmin"></i><span>{$main_lang.clientareaphpmyadminlink}</span></a></li>{/if}
           
        </ul>
    </div>{/if}
    <div class="module-content" {if $template_six_style}style="margin-left: initial;"{/if}>
        <div id="mg-error-container">
            {include file='info.tpl'}
            {include file='error.tpl'}
        </div>
        <div id="mg-container"> 
            
            
