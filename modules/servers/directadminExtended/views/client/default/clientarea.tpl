<link href="{$_assets_dir}css/bootstrap.min.css" rel="stylesheet">
<link href="{$_assets_dir}css/font-awesome.min.css" rel="stylesheet">
<!--- ################ -->
<link href="{$_assets_dir}css/layout.css" rel="stylesheet">
<link href="{$_assets_dir}css/theme.css" rel="stylesheet">

<input type="hidden" id="product_id"  value="{$productid}" />
<input type="hidden" id="isActive"    value="{$isactive}" />
<input type="hidden" id="createzones" value="{$createzones}"/>
<input type="hidden" id="dnsdomain"   value="{$dnsdomain}"/>
<div id="mg-wrapper" class="module-container">
    
{if $show_ip}
    <div class="well">
        <span><strong>{$lang.dedicated_ip}:</strong> {$dedicatedip}</span>
    </div>
{/if}

{assign var=no_manage_button value=1}
{if $manageftp == "on" || $managedatabases == "on" || $managesubdomains == "on" || $manageaddondomains == "on" || $managebackups == "on"
    || $managefilemanager == "on" || $managestats == "on"}
        <div class="well buttons-content">
            <h4 class="text-center mb-20">{$lang.main_header}</h4>
            <div class="row">
            {if $manageinstallapp == "on"}{print_button page='installapp' icon='installapp' label=$lang.install_app_link}{/if}    
            {if $manageftp == "on"}{print_button page='ftp' icon='ftp' label=$lang.ftp_link}{/if}
            {if $managedatabases == "on"}{print_button page='databases' icon='databases' label=$lang.databases_link}{/if}
            {if $managefilemanager == "on"}{print_button page='filemanager' icon='files' label=$lang.filemanager_link}{/if}
            {if $managesubdomains == "on"}{print_button page='subdomains' icon='subdomains' label=$lang.subdomains_link}{/if}
            {if $manageaddondomains == "on"}{print_button page='addondomains' icon='addondomains' label=$lang.addon_domains_link}{/if}
            {if $managebackups == "on"}{print_button page='backups' icon='backups' label=$lang.backups_link}{/if}
            {if $dnsmanagement == "on"}
                <div class="col-sm-4 col-xs-6">
                    <a class="big-button" href="clientarea.php?managedns={$dnsdomain}">
                        <div class="button-wrapper">
                            <i class="icon-btn icon-managedns"></i>
                            <span>{$lang.dns_management_link}</span>
                        </div>
                    </a>
                </div>
            {/if}
            {if $managestats == "on"}{print_button page='stats' icon='graphsstats' label=$lang.stats_link}{/if}
            {if $manageperlmodules == "on"}{print_button page='perlmodules' icon='perlmodules' label=$lang.perlmodules_link}{/if}
            </div>
        </div>
    {assign var=no_manage_button value=0}
{/if}
    
{if $manageemails == "on" || $manageemailsforwarders == "on" || $manageautoresponders == "on" || $managevacation == "on" || $manageemailfilters == "on" || $managemailinglists == "on" ||$managespamassasin == "on"}
    <div class="well buttons-content">
        <h4 class="text-center mb-20">{$lang.main_header3}</h4>
        <div class="row">
    {if $manageemails == "on"}{print_button page='emails' icon='emails' label=$lang.emails_link}{/if}
    {if $manageemailsforwarders == "on"}{print_button page='emailsforwarders' icon='emailsforwarders' label=$lang.emails_forwarders_link}{/if}
    {if $manageemailfilters == "on"}{print_button page='emailfilters' icon='spam' label=$lang.emailfilters_link}{/if}
    {if $manageautoresponders == "on"}{print_button page='autoresponders' icon='auto-responder' label=$lang.autoresponders_link}{/if}
    {if $managevacation == "on"}{print_button page='vacation' icon='out-of-office' label=$lang.vacation_link}{/if}
    {if $managemailinglists == "on"}{print_button page='mailinglists' icon='mailing-list' label=$lang.mailinglists_link}{/if}
    {if $managespamassasin == "on"}{print_button page='spamassasin' icon='spamassasin-settings' label=$lang.spamassasin_link}{/if}
        </div>
    </div>
    {assign var=no_manage_button value=0}
{/if}

{if $managecron == "on" || $manageinstallapp == "on" || $managessl == "on" || $manageapachehandlers == "on" || $manageerrorpages == "on" || $manageparkeddomains == "on" || $manageforwarddomains == "on"}    
    <div class="well buttons-content">
        <h4 class="text-center mb-20">{$lang.main_header4}</h4>
        <div class="row">
    {if $manageparkeddomains == "on"}{print_button page='parkeddomains' icon='parkeddomains' label=$lang.parked_domains_link}{/if}
    {if $manageforwarddomains == "on"}{print_button page='forwarddomains' icon='forwarddomains' label=$lang.forward_domains_link}{/if}
    {if $managecron == "on"}{print_button page='cron' icon='cron' label=$lang.cron_link}{/if}
    {if $managessl == "on"}{print_button page='ssl' icon='ssl' label=$lang.ssl_link}{/if}
    {if $manageapachehandlers == "on"}{print_button page='apachehandlers' icon='apache-handlers' label=$lang.apachehandlers_link}{/if}
    {if $manageerrorpages == "on"}{print_button page='errorpages' icon='404' label=$lang.errorpages_link}{/if}
        </div>
    </div>
    {assign var=no_manage_button value=0}
{/if}

{if $directadminlogin == "on" || $webmaillogin == "on" || $phpmyadmin =="on"}
    <div class="well buttons-content">
        <h4 class="text-center mb-20">{$lang.main_header2}</h4>
        <div class="row">
            {if $directadminlogin == "on"}
                <div class="col-lg-4 col-xs-6">
                    <form action="http{if $serversecure}s{/if}://{if $serverhostname}{$serverhostname}{else}{$serverip}{/if}:{if $serverport}{$serverport}{else}2222{/if}/CMD_LOGIN" method="post" target="_blank">
                        <input type="hidden" name="username" value="{$username}" />
                        <input type="hidden" name="password" value="{$password}" />
                        <button class="big-button" onmousedown="jQuery(this).parent().submit();"> 
                            <div class="button-wrapper">
                                <i class="icon-btn icon-da-login"></i>
                                <span>{$lang.clientareadirectadmin_link}</span>
                            </div>
                        </button>
                    </form>
                </div>
            {/if}
            {if $webmaillogin == "on"}
                <div class="col-lg-4 col-xs-6">
                    <a class="big-button" target="blank" href='http{if $serversecure}s{/if}://{if $serverhostname}{$serverhostname}{else}{$serverip}{/if}/{if $webmailtype==1}horde{elseif $webmailtype==2}roundcube{else}squirrelmail{/if}'>
                        <div class="button-wrapper">
                            <i class="icon-btn icon-webmail"></i>
                            <span>{$lang.clientareawebmaillink}</span>
                        </div>
                    </a>
                </div>
            {/if}
            {if $managephpmyadmin == "on"}
                <div class="col-lg-4 col-xs-6">
                    <form action="http{if $serversecure}s{/if}://{$username}:{$password}@{if $serverhostname}{$serverhostname}{else}{$serverip}{/if}/phpmyadmin/index.php" method="post" target="_blank">
                        <input type="hidden" name="username" value="{$username}" />
                        <input type="hidden" name="password" value="{$password}" />
                        <button class="big-button" > 
                            <div class="button-wrapper">
                                <i class="icon-btn  icon-phpmyadmin"></i>
                                <span>{$lang.clientareaphpmyadminlink}</span>
                            </div>
                        </button>
                    </form>
                </div>
            {/if}
        </div>
    </div> 
{else}
    {if $no_manage_button}
        <div class="alert alert-info" style="margin-bottom: 0px;">
            {$lang.no_features}
        </div>
    {/if}
{/if}
</div>

{if $disk == 'on' || $bandwidth == 'on' || $email == 'on' || $ftp == 'on' || $database == 'on'}
<h3 style="margin-top: 25px;">{$lang.account_usage_header}</h3>
<div>
    <table class="table">
        <thead>
            <th></th>
            <th>{$lang.head_used}</th>
            <th>{$lang.head_max}</th>
        </thead>
        <tbody>
        {if $disk == 'on'}            
            <tr>
                <th>{$lang.lbl_disk}</th>
                <td>{$disk_used}</td>
                <td>{$disk_max}</td>
            </tr>
        {/if}
        {if $bandwidth == 'on'}            
            <tr>
                <th>{$lang.lbl_bandwidth}</th>
                <td>{$bandwidth_used}</td>
                <td>{$bandwidth_max}</td>
            </tr>
        {/if}
        {if $email == 'on'}            
            <tr>
                <th>{$lang.lbl_email}</th>
                <td>{$email_used}</td>
                <td>{$email_max}</td>
            </tr>
        {/if}
        {if $ftp == 'on'}            
            <tr>
                <th>{$lang.lbl_ftp}</th>
                <td>{$ftp_used}</td>
                <td>{$ftp_max}</td>
            </tr>
        {/if}
        {if $database == 'on'}            
            <tr>
                <th>{$lang.lbl_database}</th>
                <td>{$database_used}</td>
                <td>{$database_max}</td>
            </tr>
        {/if}
        </tbody>
    </table>
</div>
{/if}
