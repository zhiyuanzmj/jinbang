{if $modulecustombuttonresult}
    {if $modulecustombuttonresult == "success"}
        {include file="$template/includes/alert.tpl" type="success" msg=$LANG.moduleactionsuccess textcenter=true idname="alertModuleCustomButtonSuccess"}
    {else}
        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.moduleactionfailed|cat:' ':$modulecustombuttonresult textcenter=true idname="alertModuleCustomButtonFailed"}
    {/if}
{/if}

{if $pendingcancellation}
    {include file="$template/includes/alert.tpl" type="error" msg=$LANG.cancellationrequestedexplanation textcenter=true idname="alertPendingCancellation"}
{/if}

<div class="tab-content margin-bottom">
    <div class="tab-pane fade in active" id="tabOverview">
    	<div style="height: 96px; background: url({$WEB_ROOT}/templates/{$template}/img/{if $rawstatus=="active"}{if $type eq "server"}vps.png{elseif $type eq "other"}qt.png{else}hosting.png{/if}{else}{if $type eq "server"}vps-1.png{elseif $type eq "other"}qt-1.png{else}hosting-1.png{/if}{/if}) no-repeat left; margin-bottom: 30px; padding-left: 120px;">
    		<div><span class="hidden-lg hidden-md" style="padding-right: 15px;">{$product}</span><span class="status-{$rawstatus|strtolower}"><i class="fa  {if $rawstatus|strtolower == "active"}fa-circle{elseif $rawstatus|strtolower == "completed"}fa-dot-circle-o{elseif $rawstatus|strtolower == "pending"}fa-spinner{elseif $rawstatus|strtolower == "suspended"}fa-pause{elseif $rawstatus|strtolower == "terminated"} fa-trash-o{elseif $rawstatus|strtolower == "cancelled"}fa-ban{elseif $rawstatus|strtolower == "fraud"}fa-exclamation-triangle{/if}" style="font-size:15px;"></i>&nbsp;{$status}</span></div>
    		<p style="margin: 10px 0;" class="text-muted"><span class="hidden-sm hidden-xs" style="padding-right: 15px;">{$product}</span><span style="padding-right: 15px;" class="hidden-sm hidden-xs">{assign var=value value=" "|explode:$groupname}{$value[0]}</span><span>到期时间：{$nextduedate}</span></p>
    		<div class="hidden-sm hidden-xs">
    			<a{if $rawstatus=="active"}{if $packagesupgrade} class="btn-lan" href="upgrade.php?type=package&amp;id={$id}"{else} class="btn-lan-disabled"{/if}{else} class="btn-lan-disabled"{/if}>{$LANG.upgrade}</a>
    			{if $LANG.xfkg eq "1"}<a{if $rawstatus=="active"} class="btn-lan" href="index.php?m=ReNew&amp;id={$id}"{else} class="btn-lan-disabled"{/if}>续费</a>{/if}
    			{if $LANG.ghkg eq "1"}<a{if $rawstatus=="active"} class="btn-lan" href="{$WEB_ROOT}/?m=transfer"{else} class="btn-lan-disabled"{/if}>过户</a>{/if}
    			<a{if $rawstatus=="active"}{if $showcancelbutton} class="btn-huang" href="clientarea.php?action=cancel&amp;id={$id}"{else} class="btn-lan-disabled"{/if}{else} class="btn-lan-disabled"{/if}>{if $pendingcancellation}{$LANG.cancellationrequested}{else}{$LANG.clientareacancelrequestbutton}{/if}</a>
    		</div>
    		<div class="dropdown hidden-lg hidden-md">
    			<a href="#" data-toggle="dropdown" style="display: inline-block;position: relative;padding-left: 10px;padding-right: 10px;min-width: 150px;height: 32px;background-color: #fff;border: 1px solid #d9dcde;color: #4d4d4d;font-size: 12px;line-height: 32px;text-align: left;">操作  <span class="caret pull-right" style="margin-top: 13px;"></span></a>
                            <ul class="dropdown-menu">
                                <li><a{if $rawstatus=="active"}{if $packagesupgrade} href="upgrade.php?type=package&amp;id={$id}"{/if}{/if}>{$LANG.upgrade}</a></li>
                                {if $LANG.xfkg eq "1"}
                                <li><a{if $rawstatus=="active"} href="index.php?m=ReNew&amp;id={$id}"{/if}>续费</a></li>
                                {/if}
                                {if $LANG.ghkg eq "1"}
                                <li><a{if $rawstatus=="active"} href="{$WEB_ROOT}/?m=transfer"{/if}>过户</a></li>
                                {/if}
                                <li><a{if $rawstatus=="active"}{if $showcancelbutton} href="clientarea.php?action=cancel&amp;id={$id}"{/if}{/if}>{if $pendingcancellation}{$LANG.cancellationrequested}{else}{$LANG.clientareacancelrequestbutton}{/if}</a></li>
                            </ul>
    		</div>
    	</div>


        {if $tplOverviewTabOutput}
            {$tplOverviewTabOutput}
        {else}


            {foreach $hookOutput as $output}
                <div>
                    {$output}
                </div>
            {/foreach}

            {if $domain || $moduleclientarea || $configurableoptions || $customfields || $lastupdate}
                <div class="row clearfix">
                    <div class="col-xs-12">
                        <ul class="nav nav-tabs nav-tabs-overflow">
                            {if $domain}
                                <li class="active">
                                    <a href="#domain" data-toggle="tab">{if $type eq "server"}{$LANG.sslserverinfo}{elseif ($type eq "hostingaccount" || $type eq "reselleraccount") && $serverdata}{$LANG.hostingInfo}{else}{$LANG.clientareahostingdomain}{/if}</a>
                                </li>
                            {elseif $moduleclientarea}
                                <li class="active">
                                    <a href="#manage" data-toggle="tab">{$LANG.manage}</a>
                                </li>
                            {/if}
                            {if $configurableoptions}
                                <li{if !$domain && !$moduleclientarea} class="active"{/if}>
                                    <a href="#configoptions" data-toggle="tab">{$LANG.orderconfigpackage}</a>
                                </li>
                            {/if}
                            {if $customfields}
                                <li{if !$domain && !$moduleclientarea && !$configurableoptions} class="active"{/if}>
                                    <a href="#additionalinfo" data-toggle="tab">{$LANG.additionalInfo}</a>
                                </li>
                            {/if}
                            {if $lastupdate}
                                <li{if !$domain && !$moduleclientarea && !$configurableoptions && !$customfields} class="active"{/if}>
                                    <a href="#resourceusage" data-toggle="tab">{$LANG.resourceUsage}</a>
                                </li>
                            {/if}
                        </ul>
                    </div>
                </div>
                <div class="tab-content product-details-tab-container">
                    {if $domain}
                        <div class="tab-pane fade in active" id="domain">
                        	<div class="pull-r-l cpbt">基本信息</div>
                        	<div class="pull-r-l">
                        	<div class="col-md-12">
                            <div class="row" style="border-bottom: 1px solid #eee; color: #000000;">	
                            {if $type eq "server"}
                                <div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:60px;">{$LANG.serverhostname}</span>{$domain}</div>
                                {if $rawstatus=="active"}
                                {if $dedicatedip}<div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:60px;">{$LANG.primaryIP}</span>{$dedicatedip}</div>{/if}
                                {if $assignedips}<div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:60px;">{$LANG.assignedIPs}</span>{$assignedips|nl2br}</div>{/if}
                                {if $ns1 || $ns2}<div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:60px;">{$LANG.domainnameservers}</span>{$ns1}&nbsp; {$ns2}</div>{/if}
                                {/if}
                            {elseif ($type eq "hostingaccount" || $type eq "reselleraccount") && $serverdata}
                            		{if $domain}<div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:60px;">{$LANG.orderdomain}</span><span>{$domain}</span> <a href="http://{$domain}" target="_blank" style="margin-left: 8px; vertical-align:middle; font-size: 15px;color: #00aaff;"><i class="fa fa-external-link"></i></a></div>{/if}
                            		{if $rawstatus=="active"}
                            		{if $username}<div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:60px;">{$LANG.serverusername}</span>{$username}</div>{/if}
                            		{if $password}<div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:60px;">{$LANG.serverpassword}</span>{$password}</div>{/if}
                            		<div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:60px;">{$LANG.servername}</span>{$serverdata.hostname}</div>
                            		<div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:60px;">{$LANG.domainregisternsip}</span>{$serverdata.ipaddress}</div>
                            		{if $serverdata.nameserver1 || $serverdata.nameserver2 || $serverdata.nameserver3 || $serverdata.nameserver4 || $serverdata.nameserver5}
                            		<div class="col-md-4 cpxx"><span class="text-muted" style="margin-right:20px;">{$LANG.domainnameservers}</span>
                            				{if $serverdata.nameserver1}{$serverdata.nameserver1} ({$serverdata.nameserver1ip})&nbsp;{/if}
                                            {if $serverdata.nameserver2}{$serverdata.nameserver2} ({$serverdata.nameserver2ip})&nbsp;{/if}
                                            {if $serverdata.nameserver3}{$serverdata.nameserver3} ({$serverdata.nameserver3ip})&nbsp;{/if}
                                            {if $serverdata.nameserver4}{$serverdata.nameserver4} ({$serverdata.nameserver4ip})&nbsp;{/if}
                                            {if $serverdata.nameserver5}{$serverdata.nameserver5} ({$serverdata.nameserver5ip}){/if}
                            		</div>
                            		{/if}
                            		{/if}
                            {else}
                            	<div class="col-md-4">{$domain}<a href="http://{$domain}" target="_blank" style="margin-left: 8px; vertical-align:middle; font-size: 15px;color: #00aaff;"><i class="fa fa-external-link"></i></a></div>
                            	{if $domainId}<div class="col-md-4"><a href="clientarea.php?action=domaindetails&id={$domainId}" class="btn-lan" target="_blank">{$LANG.managedomain}</a></div>{/if}
                            	<div class="col-md-4"><input type="button" onclick="popupWindow('whois.php?domain={$domain}','whois',650,420);return false;" value="{$LANG.whoisinfo}" class="btn-huang" /></div>
                            {/if}
                            </div>
                            </div>
                            {if $moduleclientarea}
                            	<div class="col-md-12">
                            		<div class="row" style="margin-top: 10px;">
                                <div class="text-center module-client-area">
                                    {$moduleclientarea}
                                </div>
                            	</div>
                            </div>
                            {/if}
                            </div>
                        </div>
                    {elseif $moduleclientarea}
                        <div class="tab-pane fade{if !$domain} in active{/if} text-center" id="manage">
                            {if $moduleclientarea}
                            <div class="pull-r-l">
                            <div class="col-md-12">
                            		<div class="row" style="margin-top: 10px;">
                                <div class="text-center module-client-area">
                                    {$moduleclientarea}
                                </div>
                                </div>
                            	</div>
                            </div>
                            {/if}
                        </div>
                    {/if}
                    {if $configurableoptions}
                        <div class="tab-pane fade{if !$domain && !$moduleclientarea} in active{/if}" id="configoptions">
                        	<div class="pull-r-l cpbt">{$LANG.orderconfigpackage}</div>
                        	<div class="pull-r-l">
                        	<div class="col-md-12">
                            <div class="row">
                            {foreach from=$configurableoptions item=configoption}
                            	<div class="col-md-12 cpxx" style="display: table;">
                            		<span class="text-muted" style="margin-right:60px;">{$configoption.optionname}</span>
                            		{if $configoption.optiontype eq 3}{if $configoption.selectedqty}{$LANG.yes}{else}{$LANG.no}{/if}{elseif $configoption.optiontype eq 4}{$configoption.selectedqty} x {$configoption.selectedoption}{else}{$configoption.selectedoption}{/if}
                            	</div>
                            {/foreach}
                            </div></div></div>
                        </div>
                    {/if}
                    {if $customfields}
                        <div class="tab-pane fade{if !$domain && !$moduleclientarea && !$configurableoptions} in active{/if}" id="additionalinfo">
                        	<div class="pull-r-l cpbt">{$LANG.additionalInfo}</div>
                        	<div class="pull-r-l">
                        	<div class="col-md-12">
                        	<div class="row">
                            {foreach from=$customfields item=field}
                            	<div class="col-md-12 cpxx" style="display: table;">
                            		<span class="text-muted" style="margin-right:60px;">{$field.name}</span>
                            		<br class="hidden-lg hidden-md">{$field.value}
                            	</div>
                            {/foreach}
                            </div></div></div>
                        </div>
                    {/if}
                    {if $lastupdate}
                        <div class="tab-pane fade text-center" id="resourceusage">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="col-sm-6">
                                    <h4>{$LANG.diskSpace}</h4>
                                    <input type="text" value="{$diskpercent|substr:0:-1}" class="dial-usage" data-width="100" data-height="100" data-min="0" data-readOnly="true" />
                                    <p>{$diskusage}MB / {$disklimit}MB</p>
                                </div>
                                <div class="col-sm-6">
                                    <h4>{$LANG.bandwidth}</h4>
                                    <input type="text" value="{$bwpercent|substr:0:-1}" class="dial-usage" data-width="100" data-height="100" data-min="0" data-readOnly="true" />
                                    <p>{$bwusage}MB / {$bwlimit}MB</p>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <p class="text-muted">{$LANG.clientarealastupdated}: {$lastupdate}</p>

                            <script src="{$BASE_PATH_JS}/jquery.knob.js"></script>
                            <script type="text/javascript">
                            jQuery(function() {ldelim}
                                jQuery(".dial-usage").knob({ldelim}'format':function (v) {ldelim} alert(v); {rdelim}{rdelim});
                            {rdelim});
                            </script>
                        </div>
                    {/if}
                </div>
            {/if}
            <script src="{$BASE_PATH_JS}/bootstrap-tabdrop.js"></script>
            <script type="text/javascript">
                jQuery('.nav-tabs-overflow').tabdrop();
            </script>
        {/if}

    </div>
    <div class="tab-pane fade in" id="tabDownloads">
		{include file="$template/includes/alert.tpl" type="info" msg="{lang key="clientAreaProductDownloadsAvailable"}" textcenter=true}
		<div class="cpbt" style="margin-bottom: 50px;">{$LANG.downloadstitle}</div>
        <div class="row">
        	<div class="col-md-12">
            {foreach from=$downloads item=download}
                <div class="col-md-4 text-center">
                    <h4>{$download.title}</h4>
                    <p>
                        {$download.description}
                    </p>
                    <p>
                        <a href="{$download.link}" class="btn btn-default"><i class="fa fa-download"></i> {$LANG.downloadname}</a>
                    </p>
                </div>
            {/foreach}
        	</div>
        </div>

    </div>
    <div class="tab-pane fade in" id="tabAddons">
		{if $addonsavailable}
            {include file="$template/includes/alert.tpl" type="info" msg="{lang key="clientAreaProductAddonsAvailable"}" textcenter=true}
        {/if}
        <div class="cpbt" style="margin-bottom: 50px;">{$LANG.clientareahostingaddons}</div>
        <div class="row">
        	<div class="col-md-12">
            {foreach from=$addons item=addon}
                <div class="col-md-12">
                    <div class="panel panel-default panel-accent-blue">
                        <div class="panel-heading">
                            {$addon.name}
                            <div class="pull-right status-{$addon.rawstatus|strtolower}">{$addon.status}</div>
                        </div>
                        <div class="row panel-body">
                            <div class="col-md-6">
                                <p>
                                    {$addon.pricing}
                                </p>
                                <p>
                                    {$LANG.registered}: {$addon.regdate}
                                </p>
                                <p>
                                    {$LANG.clientareahostingnextduedate}: {$addon.nextduedate}
                                </p>
                            </div>
                        </div>
                        <div class="panel-footer">
                            {$addon.managementActions}
                        </div>
                    </div>
                </div>
            {/foreach}
           </div>
        </div>

    </div>
    <div class="tab-pane fade in" id="tabChangepw">
		{if $modulechangepwresult}
            {if $modulechangepwresult == "success"}
                {include file="$template/includes/alert.tpl" type="success" msg=$modulechangepasswordmessage textcenter=true}
            {elseif $modulechangepwresult == "error"}
                {include file="$template/includes/alert.tpl" type="error" msg=$modulechangepasswordmessage|strip_tags textcenter=true}
            {/if}
        {/if}
        <div class="cpbt" style="margin-bottom: 50px;">{$LANG.serverchangepassword}</div>
        <form class="form-horizontal using-password-strength" method="post" action="{$smarty.server.PHP_SELF}?action=productdetails#tabChangepw" role="form">
            <input type="hidden" name="id" value="{$id}" />
            <input type="hidden" name="modulechangepassword" value="true" />

            <div id="newPassword1" class="form-group has-feedback">
                <label for="inputNewPassword1" class="col-sm-3 control-label">{$LANG.newpassword}</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="inputNewPassword1" name="newpw" autocomplete="off" />
                    <span class="form-control-feedback glyphicon"></span>
                    {include file="$template/includes/pwstrength.tpl"}
                </div>
            </div>
            <div id="newPassword2" class="form-group has-feedback">
                <label for="inputNewPassword2" class="col-sm-3 control-label">{$LANG.confirmnewpassword}</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" id="inputNewPassword2" name="confirmpw" autocomplete="off" />
                    <span class="form-control-feedback glyphicon"></span>
                    <div id="inputNewPassword2Msg">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-6">
                    <input class="btn btn-primary" type="submit" value="{$LANG.clientareasavechanges}" />
                    <input class="btn" type="reset" value="{$LANG.cancel}" />
                </div>
            </div>

        </form>

    </div>
</div>
