
{include file="$template/includes/verifyemail.tpl"}
<link href="{$WEB_ROOT}/templates/{$template}/js/other.css" rel="stylesheet"> 
<div class="row">
    <div class="col-lg-12">
        <div class="content">
            <div class="push-15-t">
                <img class="img-avatar" src="{if $clientsdetails.email|strpos:'@qq.com'}//q1.qlogo.cn/g?b=qq&nk={$clientsdetails.email|replace:'@qq.com'}&s=100{else}//cn.gravatar.com/avatar/{$clientsdetails.email|md5}?s=64&d={$systemurl}/templates/{$template}/img/default_family1.png{/if}" alt="{$clientsdetails.firstname}" style="height:56px;width:auto;margin-right:8px;">
                <span class="hidden-xs hidden-sm">
                <span class="text-muted">欢迎回来，</span><span class="h5 push-30-r">{$clientsdetails.lastname}{$clientsdetails.firstname}</span><a href="{$WEB_ROOT}/clientarea.php?action=details" title="个人资料" class="push-15-r" style="vertical-align: middle;"><i class="fa fa-address-card-o" style="color:#00aaff;font-size:18px;"></i></a><a href="{$WEB_ROOT}/clientarea.php?action=changepw" title="修改密码" class="push-15-r" style="vertical-align: middle;"><i class="si si-settings" style="color:#00aaff;font-size:16px;"></i></a><a href="{$WEB_ROOT}/clientarea.php?action=emails" title="邮件存档" class="push-15-r" style="vertical-align: middle;"><i class="si si-envelope-letter" style="color:#00aaff;font-size:16px;"></i></a><a href="{$WEB_ROOT}/clientarea.php?action=security" title="安全设置" style="vertical-align: middle;"><i class="si si-shield" style="color:#00aaff;font-size:16px;"></i></a>
                </span>
                <div class="hidden-lg hidden-md" style="position: absolute;margin-left: 76px;top: 36px;">
                <span class="text-muted">欢迎回来，</span><span class="h5 push-30-r">{$clientsdetails.lastname}{$clientsdetails.firstname}</span><p style="margin-bottom: 0;margin-top: 6px;"><a href="{$WEB_ROOT}/clientarea.php?action=details" title="个人资料" class="push-15-r" style="vertical-align: middle;"><i class="fa fa-address-card-o" style="color:#00aaff;font-size:18px;"></i></a><a href="{$WEB_ROOT}/clientarea.php?action=changepw" title="修改密码" class="push-15-r" style="vertical-align: middle;"><i class="si si-settings" style="color:#00aaff;font-size:16px;"></i></a><a href="{$WEB_ROOT}/clientarea.php?action=emails" title="邮件存档" class="push-15-r" style="vertical-align: middle;"><i class="si si-envelope-letter" style="color:#00aaff;font-size:16px;"></i></a><a href="{$WEB_ROOT}/clientarea.php?action=security" title="安全设置" style="vertical-align: middle;"><i class="si si-shield" style="color:#00aaff;font-size:16px;"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
	    <div class="col-lg-12">
				<div class="content">
					<div class="row">
                        <div class="col-md-4">
                            <div class="bg-white">
                                <div class="block-content block-content-full clearfix">
                                    <h4 class="h5 text-muted push-5-t" style="margin-bottom:39px;">财务概览</h4>
                                    <div class="row items-push text-left">
                                        <div class="col-xs-6 border-r">
                                            <div class="font-w300" style="color:#636566;">{$LANG.statscreditbalance}</div>
                                            <div class="push-5 font-w600 push-10-t" style="color:#f60;font-size:20px;">{$clientsstats.creditbalance}</div>
                                        </div>
                                        <div class="col-xs-6">
                                            <a class="ssszdzf" href="{$WEB_ROOT}/clientarea.php?action=masspay&all=true">
                                            <div class="font-w300 push-10-l" style="color:#636566;">未支付账单</div>
                                            <div class="push-5 font-w600 push-10-t push-10-l" style="font-size:20px;">{$clientsstats.numunpaidinvoices}</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div style="margin-top:17px;margin-bottom:6px;">
                                        <a href="{$WEB_ROOT}/clientarea.php?action=addfunds" class="nybtn push-20-r">充值</a><a href="{$WEB_ROOT}/clientarea.php?action=invoices" class="push-20-r" style="color:#0af;">我的账单</a><a href="{$WEB_ROOT}/clientarea.php?action=quotes" style="color:#0af;">定制账单</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white">
                                <div class="block-content block-content-full clearfix">
                                    <h4 class="h5 text-muted push-20 push-5-t">待办事项</h4>
                                    <a href="{$WEB_ROOT}/clientarea.php?action=services" class="dbsx" style="margin-bottom:7px;"><span style="margin-right:8px;font-size:15px;font-weight:600;color:#000;">{$clientsstats.productsnumactive}</span>个已激活的产品<span class="pull-right" style="color:#0af;">前往管理 ></span></a>
                                    <a href="{$WEB_ROOT}/supporttickets.php" class="dbsx" style="margin-bottom:7px;"><span style="margin-right:8px;font-size:15px;font-weight:600;color:#000;">{$clientsstats.numactivetickets}</span>个待处理工单<span class="pull-right" style="color:#0af;">前往处理 ></span></a>
                                    <a href="{$WEB_ROOT}/clientarea.php?action=invoices" class="dbsx"><span style="margin-right:8px;font-size:15px;font-weight:600;color:#000;">{$clientsstats.numunpaidinvoices}</span>个未支付账单<span class="pull-right" style="color:#0af;">前往支付 ></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white" style="min-height:240px;">
                                <div class="block-content block-content-full clearfix">
                                    <h4 class="h5 text-muted push-5-t" style="margin-bottom: 22px;">新闻公告<a href="{$WEB_ROOT}/announcements.php" class="pull-right" style="font-size:12px;color:#0af;">查看全部 ></a></h4>
                                    <ul class="hyzxggss" style="margin-bottom: 0;padding: 0;">{if $announcements}
        			            	{foreach from=$announcements key=i item=ann}
        				            	{if $ann@index < 3}
				                	<li><span class="text-muted" style="font-size:12px;margin-right:8px;margin-left:5px;">[{$ann['date']}]</span><a href="announcements.php?id={$ann.id}" class="ssszdzf">{$ann['title']}</a></li>
        						        {/if}
        					        {/foreach}
				                    {/if}</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row">
	    <div class="col-lg-12">
				<div class="content">
					<div class="row">
					    <div class="col-md-8">
					       <div class="bg-white">
					           <div class="block-content block-content-full clearfix">
					               <h4 class="h5 text-muted push-5-t" style="margin-bottom:22px;">帮助 & 支持</h4>
					               <div class="row">
					                   <div class="col-sm-4" style="margin-bottom:8px;">
					                       <a href="{$WEB_ROOT}/knowledgebase.php" class="dbsx" style="height:65px;line-height:65px;padding:0 24px;">
					                           <i class="si si-book-open" style="font-size:28px;vertical-align: middle;"></i>
					                           <h5 class="h6" style="position: absolute;margin-left: 50px;margin-top: -50px;color: #000;">帮助文档
					                           <p class="text-muted" style="font-weight:400;font-size:12px;margin: 3px 0;">云计算产品使用手册</p></h5>
					                       </a>
					                   </div>
					                   <div class="col-sm-4" style="margin-bottom:8px;">
					                       <a href="{$WEB_ROOT}/downloads.php" class="dbsx" style="height:65px;line-height:65px;padding:0 24px;">
					                           <i class="si si-cloud-download" style="font-size:28px;vertical-align: middle;"></i>
					                           <h5 class="h6" style="position: absolute;margin-left: 50px;margin-top: -50px;color: #000;">下载中心
					                           <p class="text-muted" style="font-weight:400;font-size:12px;margin: 3px 0;">常用资源/软件下载</p></h5>
					                       </a>
					                   </div>
					                   <div class="col-sm-4" style="margin-bottom:8px;">
					                       <a href="{$WEB_ROOT}/submitticket.php" class="dbsx" style="height:65px;line-height:65px;padding:0 24px;">
					                           <i class="si si-speech" style="font-size:28px;vertical-align: middle;"></i>
					                           <h5 class="h6" style="position: absolute;margin-left: 50px;margin-top: -50px;color: #000;">工单支持
					                           <p class="text-muted" style="font-weight:400;font-size:12px;margin: 3px 0;">专业技术团队为您服务</p></h5>
					                       </a>
					                   </div>
					               </div>
					           </div>
					       </div>
					   </div>
            {function name=outputHomePanels}
                    {if $item->hasBodyHtml()}
                            <div>{$item->getBodyHtml()}<p class="pull-right" style="margin-top: -10px;"><a href="{$WEB_ROOT}/affiliates.php" style="color:#0af;">查看详情 ></a></p></div>
                    {/if}
            {/function}
					   <div class="col-md-4">
					       <div class="bg-white" style="height:159px;">
					           <div class="block-content block-content-full clearfix">
					               <h4 class="h5 text-muted push-5-t" style="margin-bottom:22px;">推广联盟</h4>
                                 {if $condlinks.affiliates && $clientsstats.isAffiliate}
					               {foreach $panels as $item}
                                        	{if $item->getName() eq "Affiliate Program"}
                                            {outputHomePanels}
                                            {/if}
                                    {/foreach}
                                 {else}
                                 <div>您尚未激活推广联盟！</div><p class="pull-right push-20-t"><a href="{$WEB_ROOT}/affiliates.php" style="color:#0af;">开启推广赚钱 ></a></p>
                                 {/if}
					           </div>
					       </div>
					   </div>
					</div>
				</div>
		</div>
	</div>
    <div class="row" style="margin-bottom:50px;">
	    <div class="col-lg-12">
				<div class="content">
					<div class="row">
					    <div class="col-md-4">
					       <div class="bg-white">
					           <div class="block-content block-content-full clearfix hyzxlb">
					                <h4 class="h5 text-muted push-20 push-5-t">已激活产品</h4>
                        <div class="panel-cards {if $othProducts|@count > 4} cards-carousel{/if}">
                            <ul class="cards">
                                <li>
                                    {foreach from=$othProducts key=i item=prod}
                                        <a class="card-row" href="clientarea.php?action=productdetails&id={$prod.id}">
        			                        <span class="cell-title">{$prod.name}</span>
        			                        <span class="cell-cycle">
        			                        	<span class="text-muted"></span>
        			                        	{$prod.domain}
        			                        </span>
        			                        <span class="cell-license">
        			                        	<span class="text-muted">到期时间: </span>
        			                        	{if $prod.nextduedate != '0000-00-00'}{$prod.nextduedate}{else}永久{/if}
        			                        </span>
        			                    </a>
                                        {if $othProducts|@count != ($i+1)}
                                            {if ($i+1) % 4 == 0}</li><li>{/if}
                                        {/if}
                                    {foreachelse}
                                        <div class="panel-body text-center">
                                                    <div class="icon-holder" style="margin-top: 70px;">
                        								<i class="si si-basket border-radios"></i>
                        							</div>
                        							<p class="zt">没有已激活产品</p>
                                                </div>
                                    {/foreach}
                                </li>
                            </ul>
                            <div class="cards-nav">
                                {if $othProducts|@count > 4}
                                <button class="card-prev btn btn-default btn-icon btn-link" type="button">
                                    <i class="fa fa-angle-left"></i>
                                </button>
                                {/if}
                                <span class="card-number"><b class="number-current">{if $othProducts|@count > 4}4{else}{$othProducts|@count}{/if}</b>/<span class="number-total">{$othProducts|@count}</span></span>
                                {if $othProducts|@count > 4}
                                <button class="card-next btn btn-default btn-icon btn-link" type="button">
                                    <i class="fa fa-angle-right"></i>
                                </button>
                                {/if}
                            </div>
                        </div>
					           </div>
					       </div> 
					    </div>
					    <div class="col-md-4">
					        <div class="bg-white">
					           <div class="block-content block-content-full clearfix">
					               <h4 class="h5 text-muted push-20 push-5-t">未支付账单</h4>
					               <div class="panel-cards {if $invoices|@count > 4} cards-carousel{/if}">
                                        <ul class="cards">
                                            <li>
                                                {foreach from=$invoices item=invoice key=i}
                                                    <a class="card-row" href="viewinvoice.php?id={$invoice.id}">
                                                        <span class="cell-title">#{$invoice.invoicenum}</span>
                                                        <span class="cell-date" style="float: left"><span class="text-muted">{$LANG.nextdue}: </span>{$invoice.datedue}</span>
                                                        <span class="cell-total"><span class="price text-danger">{$invoice.total}</span></span>
                                                    </a>
                                                    {if $invoices|@count != ($i+1)}
                                                        {if ($i+1) % 4 == 0}</li><li>{/if}
                                                    {/if}
                                                {foreachelse}
                                                    <div class="panel-body text-center">
                                                    <div class="icon-holder" style="margin-top: 70px;">
                        								<i class="si si-wallet border-radios"></i>
                        							</div>
                        							<p class="zt">没有未支付账单</p>
                                                </div>
                                                {/foreach}
                                            </li>
                                        </ul>
                                        <div class="cards-nav">
                                            {if $invoices|@count > 4}
                                            <button class="card-prev btn btn-default btn-icon btn-link" type="button">
                                                <i class="fa fa-angle-left"></i>
                                            </button>
                                            {/if}
                                            <span class="card-number"><b class="number-current">{if $invoices|@count > 4}4{else}{$invoices|@count}{/if}</b>/<span class="number-total">{$invoices|@count}</span></span>
                                            {if $invoices|@count > 4}
                                            <button class="card-next btn btn-default btn-icon btn-link" type="button">
                                                <i class="fa fa-angle-right"></i>
                                            </button>
                                            {/if}
                                        </div>
                                    </div>
					           </div>
					       </div>
					    </div>
					    <div class="col-md-4">
					        <div class="bg-white">
					           <div class="block-content block-content-full clearfix">
					               <h4 class="h5 text-muted push-20 push-5-t">待处理工单</h4>
					               <div class="panel-cards {if $tickets|@count > 4} cards-carousel{/if}">
                                        <ul class="cards">
                                            <li>
                                                {foreach from=$tickets item=ticket key=i}
                                                    <a class="card-row" href="viewticket.php?tid={$ticket.tid}&c={$ticket.c}">
                                                        <span class="cell-title">{if $ticket.unread}<strong>{/if}<b>#{$ticket.tid}</b> - {$ticket.subject}{if $ticket.unread}</strong>{/if}</span>
                                                        <span class="cell-status"><span class="label label-simple label-{$ticket.statusClass}">{$ticket.status|strip_tags:false}</span></span>
                                                        <span class="cell-date"><span class="text-muted">{$LANG.supportticketsreply}: </span>{$ticket.lastreply}</td>
                                                    </a>
                                                {if $tickets|@count != ($i+1)}
                                                {if ($i+1) % 4 == 0}</li><li>{/if}
                                                {/if}
                                                {foreachelse}
                                                <div class="panel-body text-center">
                                                    <div class="icon-holder" style="margin-top: 70px;">
                        								<i class="si si-speech border-radios"></i>
                        							</div>
                        							<p class="zt">没有待处理工单</p>
                                                </div>
                                                {/foreach}
                                            </li>
                                        </ul>
                                        <div class="cards-nav">
                                            {if $tickets|@count > 4}
                                            <button class="card-prev btn btn-default btn-icon btn-link" type="button">
                                                <i class="fa fa-angle-left"></i>
                                            </button>
                                            {/if}
                                            <span class="card-number"><b class="number-current">{if $tickets|@count > 4}4{else}{$tickets|@count}{/if}</b>/<span class="number-total">{$tickets|@count}</span></span>
                                            {if $tickets|@count > 4}
                                            <button class="card-next btn btn-default btn-icon btn-link" type="button">
                                                <i class="fa fa-angle-right"></i>
                                            </button>
                                            {/if}
                                        </div>
                                    </div>
					           </div>
					       </div>
					    </div>
					</div>
			    </div>
	    </div>
	</div>
	
	<script src="{$WEB_ROOT}/templates/{$template}/js/lightslider.js"></script>
	<script src="{$WEB_ROOT}/templates/{$template}/js/dashboard.js"></script>


