{include file="orderforms/{$carttpl}/common.tpl"}
<script type="text/javascript" src="templates/orderforms/{$carttpl}/js/buy.js?v={$versionHash}"></script>
<div id="order-standard_cart">
	<div class="cartbk">
		<div class="text-center carttb">
			<div class="flac {if $loggedin}{if $registerdomainenabled || $condlinks.domaintrans}col-sm-4 col-xs-4{else}col-sm-6 col-xs-6{/if}{else}col-sm-6 col-xs-6{/if}">
				{$LANG.gwczjcp}
			</div>
			{if $registerdomainenabled && $condlinks.domaintrans}
							<a href="cart.php?a=add&domain=register" class="fl {if $loggedin}col-sm-4 col-xs-4{else}col-sm-6 col-xs-6{/if}">{$LANG.registerdomain}</a>
			{elseif $registerdomainenabled}
							<a href="cart.php?a=add&domain=register" class="fl {if $loggedin}col-sm-4 col-xs-4{else}col-sm-6 col-xs-6{/if}">{$LANG.registerdomain}</a>
			{elseif $condlinks.domaintrans}
							<a href="cart.php?a=add&domain=transfer" class="fl {if $loggedin}col-sm-4 col-xs-4{else}col-sm-6 col-xs-6{/if}">{$LANG.ordertransferdomain}</a>
			{/if}
			{if $loggedin}
			<a href="cart.php?gid=addons" class="fl {if $registerdomainenabled || $condlinks.domaintrans}col-sm-4 col-xs-4{else}col-sm-6 col-xs-6{/if}">
				{$LANG.cartaddons}
			</a>
			{/if}
		</div>
		<div class="hidden-sm hidden-xs h20"></div>
		<div class="cart-k">
			<div class="hidden-sm hidden-xs h15"></div>
			<div class="row">
			<div class="cart-l col-sm-2"><i class="fa fa-clone"></i>{$LANG.cartlx}</div>
			<div class="cart-r cpfl col-sm-10">
				<ul class="nav nav-tabs" data-toggle="tabs">
					{assign var=value value=" "|explode:$productGroup.name}
					{if $LANG.fl1kg eq "1"}
					<li{if $LANG.fl1 eq "{$value[1]}"} class="active"{/if}>
						<a href="#{$LANG.fl1}" data-toggle="tab">{$LANG.fl1name}</a>
					</li>
					{/if}
					{if $LANG.fl2kg eq "1"}
					<li{if $LANG.fl2 eq "{$value[1]}"} class="active"{/if}>
						<a href="#{$LANG.fl2}" data-toggle="tab">{$LANG.fl2name}</a>
					</li>
					{/if}
					{if $LANG.fl3kg eq "1"}
					<li{if $LANG.fl3 eq "{$value[1]}"} class="active"{/if}>
						<a href="#{$LANG.fl3}" data-toggle="tab">{$LANG.fl3name}</a>
					</li>
					{/if}
					{if $LANG.fl4kg eq "1"}
					<li{if $LANG.fl4 eq "{$value[1]}"} class="active"{/if}>
						<a href="#{$LANG.fl4}" data-toggle="tab">{$LANG.fl4name}</a>
					</li>
					{/if}
					{if $LANG.fl5kg eq "1"}
					<li{if $LANG.fl5 eq "{$value[1]}"} class="active"{/if}>
						<a href="#{$LANG.fl5}" data-toggle="tab">{$LANG.fl5name}</a>
					</li>
					{/if}
					{if $LANG.fl6kg eq "1"}
					<li{if $LANG.fl6 eq "{$value[1]}"} class="active"{/if}>
						<a href="#{$LANG.fl6}" data-toggle="tab">{$LANG.fl6name}</a>
					</li>
					{/if}
					{if $LANG.fl7kg eq "1"}
					<li{if $LANG.fl7 eq "{$value[1]}"} class="active"{/if}>
						<a href="#{$LANG.fl7}" data-toggle="tab">{$LANG.fl7name}</a>
					</li>
					{/if}
					{if $LANG.fl8kg eq "1"}
					<li{if $LANG.fl8 eq "{$value[1]}"} class="active"{/if}>
						<a href="#{$LANG.fl8}" data-toggle="tab">{$LANG.fl8name}</a>
					</li>
					{/if}
				</ul>
			</div>
			</div>
			<div class="hidden-sm hidden-xs h15"></div>
		</div>
		<div class="cart-k">
			<div class="hidden-sm hidden-xs h15"></div>
			<div class="row">
			<div class="cart-l col-sm-2"><i class="fa fa-map-marker"></i>{$LANG.cartjd}</div>
			<div class="cart-r kyq col-sm-10">
				{include file="orderforms/{$carttpl}/sidebar-categories2.tpl"}
				<div style="margin-left: 8px;margin-top: 10px;border-bottom: 1px dashed #EEE;padding: 8px 0;"><i class="si si-info" style="color: #00a2ca;margin-right: 10px;vertical-align: middle;"></i><span style="color: #333;vertical-align: middle;">{$productGroup.headline}</span></div>
				<p class="text-muted" style="margin-left: 8px; margin-top: 6px;">{if $productGroup.tagline}{$productGroup.tagline}{else}&nbsp;{/if}</p>
			</div>
			</div>
			<div class="hidden-sm hidden-xs h10"></div>
		</div>
		<div class="cart-k" style="border-bottom: none;">
			<div class="hidden-sm hidden-xs h15"></div>
			<div class="row">
			<div class="cart-l col-sm-2"><i class="fa fa-object-group"></i>{$LANG.carttc}</div>
			<div class="cplb col-sm-10">
				<ul class="nav nav-tabs" data-toggle="tabs">
				{foreach $hookAboveProductsOutput as $output}
                <div>
                    {$output}
                </div>
            	{/foreach}
				{if $errormessage}
                <div class="alert alert-danger" style="margin-right: 15px;margin-top: 5px;">
                    {$errormessage}
                </div>
            	{/if}	
				{foreach $products as $key => $product}
                        <li class="col-md-3 col-sm-6 col-xs-12">
						<a {if $product.qty eq "0" || $product.qty < 0}href="#qh" data-toggle="tab"{else}href="#cart{if $product.bid}b{$product.bid}{else}{$product.pid}{/if}" data-toggle="tab"{/if}>
							<div class="lbt">
				{if $product.isFeatured}
    				<span class="discount_tag">
						<span>
							{$LANG.gwctjcp}
						</span>
					</span>
				{/if}
							{$product.name}<br>
							<span>
								{if $product.bid}
                                            {if $product.displayprice}
                                               {$product.displayprice}
                                            {/if}
                                            {$LANG.bundledeal}
                                        {else}
                                        	{if $product.pricing.minprice.setupFee}
                                        	{assign var=value value=" "|explode:$product.pricing.minprice.price}
                                            {$value[0]}
                                             <font style="font-weight: 300;font-size: 12px;">{if $product.paytype eq "free"}
                                            {$LANG.orderfree}
                                            {elseif $product.paytype eq "onetime"}
      										{$LANG.orderpaymenttermonetime}
	  										{/if}
	  										{if $product.pricing.minprice.cycle eq "monthly"}
                                                {$LANG.orderpaymenttermmonthly}
                                            {elseif $product.pricing.minprice.cycle eq "quarterly"}
                                                {$LANG.orderpaymenttermquarterly}
                                            {elseif $product.pricing.minprice.cycle eq "semiannually"}
                                                {$LANG.orderpaymenttermsemiannually}
                                            {elseif $product.pricing.minprice.cycle eq "annually"}
                                                {$LANG.orderpaymenttermannually}
                                            {elseif $product.pricing.minprice.cycle eq "biennially"}
                                                {$LANG.orderpaymenttermbiennially}
                                            {elseif $product.pricing.minprice.cycle eq "triennially"}
                                                {$LANG.orderpaymenttermtriennially}
                                            {/if}</font>
                                             + {$product.pricing.minprice.setupFee->toPrefixed()} <font style="font-weight: 300;font-size: 12px;">{$LANG.ordersetupfee}</font>
                                            
                                            {else}
                                            {assign var=value value=" "|explode:$product.pricing.minprice.price}
                                            {$value[0]} 
                                            <font style="font-weight: 300;font-size: 12px;">{if $product.paytype eq "free"}
                                            {$LANG.orderfree}
                                            {elseif $product.paytype eq "onetime"}
      										{$LANG.orderpaymenttermonetime}
	  										{/if}
	  										{if $product.pricing.minprice.cycle eq "monthly"}
                                                {$LANG.orderpaymenttermmonthly}
                                            {elseif $product.pricing.minprice.cycle eq "quarterly"}
                                                {$LANG.orderpaymenttermquarterly}
                                            {elseif $product.pricing.minprice.cycle eq "semiannually"}
                                                {$LANG.orderpaymenttermsemiannually}
                                            {elseif $product.pricing.minprice.cycle eq "annually"}
                                                {$LANG.orderpaymenttermannually}
                                            {elseif $product.pricing.minprice.cycle eq "biennially"}
                                                {$LANG.orderpaymenttermbiennially}
                                            {elseif $product.pricing.minprice.cycle eq "triennially"}
                                                {$LANG.orderpaymenttermtriennially}
                                            {/if}</font>
                                            {/if}
                                        {/if}
							</span>
							</div>
							<div class="lbb">
							{if $product.featuresdesc}
            					{$product.featuresdesc}
        					{/if}
							</div>
						</a>
						</li>
                {/foreach}
                
                {foreach $hookBelowProductsOutput as $output}
                <div>
                    {$output}
                </div>
            	{/foreach}
                </ul>
			</div>
			</div>
			<div class="hidden-sm hidden-xs h10"></div>
		</div>
	</div>

<div id="cartFooterScrollY" style="margin-top: 15px;"></div>
<div class="cart-footer cart-footer-fixed" id="cartFooter" style="height: 100px;">
	<div class="tab-content" style="padding: 25px 0 0 20px;">
		<p class="text-muted" style="font-size: 13px;font-weight: 400;margin-bottom: 8px;">{$LANG.xzcpfz}：</p>
		<span style="font-size: 16px;color: rgb(255, 102, 0);font-weight: 600;">
			{assign var=value value=" "|explode:$productGroup.name}
			{$value[0]}
		</span>
		<div class="tab-pane active">
		<a class="pull-right jzgm">{$LANG.xzcptc}</a>
		</div>
		{foreach $products as $key => $product}
		<div class="tab-pane" id="{if $product.qty eq "0" || $product.qty < 0}qh{else}cart{if $product.bid}b{$product.bid}{else}{$product.pid}{/if}{/if}">
		<a {if $product.qty eq "0" || $product.qty < 0}{else}href="cart.php?a=add&{if $product.bid}bid={$product.bid}{else}pid={$product.pid}{/if}"{/if} class="pull-right {if $product.qty eq "0" || $product.qty < 0}jzgm{else}gman{/if}" style="color: #fff;">{if $product.qty eq "0" || $product.qty < 0}{$LANG.cartqh}{else}{$LANG.ordernowbutton}{/if}</a>
		</div>
		{/foreach}
	</div>
</div>
<div class="cartfb" style="margin-top: 0px;"></div>
</div>
