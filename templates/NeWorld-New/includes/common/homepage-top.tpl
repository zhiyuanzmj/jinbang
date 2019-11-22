{if $uiManager['homepagemode'] == 'Horizontal'}
<div class="c-card c-overview-card u-p-medium u-mb-medium">
    <div class="row">
        <div class="col-6 col-md-3 u-border-right">
            <div class="c-overview-card__section u-text-center">
                <a style="width: 70px;margin: 0 auto;" class="c-avatar u-mb-small" href="clientarea.php?action=details">
					<img class="c-avatar__img" src="//gravatar.modulesocean.com/avatar/{$clientsdetails.email|md5}?s=100&d={$systemurl}templates/{$template}/assets/img/default_family.jpg" alt="" />
				</a>
				<div class="user-name u-mb-small">
					{if $clientsdetails.firstname != '' && $clientsdetails.lastname != '' && $clientsdetails.lastname != '姓' && $clientsdetails.firstname != '名'}
					<a class="text-primary" href="clientarea.php?action=details">{$clientsdetails.firstname} {$clientsdetails.lastname}</a>
					{else}
					<a class="text-primary" href="clientarea.php?action=details">{$clientsdetails.email}</a>
					{/if}
					{if $verifyinfo}<p class="u-mb-zero">{$verifyinfo}</p>{/if}
				</div>
				{if $qqlink or $wechatlink}
				<div class="row">
					{if $qqlink}
					<div class="col-6">
						{$qqlink}
					</div>
					{/if}
					{if $wechatlink}
					<div class="col-6">
						{$wechatlink}
					</div>
					{/if}
				</div>
				{/if}
            </div>
        </div>

        <div class="col-6 col-md-3 u-border-right">
            <div class="c-overview-card__section">
                <p class="u-text-mute u-nospace u-mb-small">{$LANG.availcreditbal}</p>
                <h3 class="u-nospace u-mb-medium">{$clientsstats.creditbalance}</h3>
				{if $condlinks.addfunds}
					<a class="c-btn c-btn--small c-btn--success" href="clientarea.php?action=addfunds">{$LANG.addfunds}</a>
				{/if}
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="c-overview-card__section">
                <p class="u-text-mute u-nospace u-mb-small">{$LANG.navinvoices}</p>
                <h3 class="u-nospace u-mb-medium">{$clientsstats.numunpaidinvoices}</h3>

                <a href="clientarea.php?action=services">{$LANG.navservices}</a>
				<span class="margin-left-1 ng-binding">{$clientsstats.productsnumactive}</span>
				{if $registerdomainenabled || $transferdomainenabled}
				<span class="user-opt-gap"></span>
				<a href="clientarea.php?action=domains">{$LANG.navdomains}</a>
				<span class="margin-left-1 ng-binding">{$clientsstats.numactivedomains}</span>
				{/if}
            </div>
        </div>

        <div class="col-6 col-md-3 u-border-left">
            <div class="c-overview-card__section">
                <p class="u-text-mute u-nospace u-mb-small">{$LANG.navtickets}</p>
                <h3 class="u-nospace u-mb-medium">{$clientsstats.numactivetickets}</h3>

                <a class="c-btn c-btn--small c-btn--info" href="submitticket.php">{$LANG.navopenticket}</a>
            </div>
        </div>
    </div>

</div>
{else}
<div class="row">
    <div class="col-12 col-md-4">
		<div class="c-card u-p-medium u-mb-medium" style="min-height: 222px;">
            <div class="row">
	        	<div class="col-4">
		        	<a class="c-avatar" href="clientarea.php?action=details">
						<img class="c-avatar__img" src="//gravatar.modulesocean.com/avatar/{$clientsdetails.email|md5}?s=100&d={$systemurl}templates/{$template}/assets/img/default_family.jpg" alt="" />
					</a>
	        	</div>
	        	<div class="col-8">
		        	<div class="user-name u-mb-xsmall">
			        	
			        	Hi, <a class="text-primary" href="clientarea.php?action=details">{$clientsdetails.firstname}</a>
					</div>
					{if $verifyinfo}
						{$verifyinfo}
					{/if}
	        	</div>
            </div>
            <span class="c-divider u-mv-medium u-opacity-medium"></span>
			{if $qqlink or $wechatlink}
			<div class="row">
				{if $qqlink}
				<div class="col-6">
					{$qqlink}
				</div>
				{/if}
				{if $wechatlink}
				<div class="col-6">
					{$wechatlink}
				</div>
				{/if}
			</div>
			{/if}
        </div>
    </div>

    <div class="col-12 col-md-4">
		<div class="c-card u-p-medium u-mb-medium" style="min-height: 222px;">
            <div style="height: 70px;">
	            <p class="u-text-mute u-nospace u-mb-small">{$LANG.availcreditbal}</p>
				<h3 class="u-nospace u-mb-medium">{$clientsstats.creditbalance}</h3>
            </div>
            <span class="c-divider u-mv-medium u-opacity-medium"></span>
            <div class="row">
			{if $condlinks.addfunds}
				<div class="col-xs-6">
					<a class="c-btn btn-block c-btn--small c-btn--danger" href="clientarea.php?action=addfunds">{$LANG.addfunds}</a>
				</div>
			{/if}
				<div class="col-xs-6">
					<a class="c-btn btn-block c-btn--small c-btn--primary" href="clientarea.php?action=invoices">我的账单</a>
				</div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
		<div class="c-card u-pt-medium u-pl-medium u-pr-medium u-mb-medium u-bg-info" style="min-height: 222px;">
            <div style="height: 70px;">
	            <p class="u-text-white u-nospace u-mb-small">客服专员</p>
	            <h3 class="u-nospace u-text-white"><i class="zmdi zmdi-hc-fw zmdi-phone"></i> 400-001-2306</h3>
            </div>
            <div class="u-bg-white u-p-medium" style="position: relative;bottom: -2px;margin: 1.875rem -1.875rem 0 !important;border-radius: 0 0 4px 4px !important;">
	            <div class="row">
		        	<div class="col-6">
			        	<a href="" target="_blank" class="c-btn c-btn--small c-btn--success c-btn--fullwidth">在线咨询</a>
		        	</div>
		        	<div class="col-6">
						<a href="" target="_blank" class="c-btn c-btn--small c-btn--secondary c-btn--fullwidth">投诉建议</a>
		        	</div>
	            </div>
            </div>
        </div>
    </div>
    
</div>
{/if}