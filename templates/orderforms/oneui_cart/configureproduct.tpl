{include file="orderforms/{$carttpl}/common.tpl"}
<script type="text/javascript" src="templates/orderforms/{$carttpl}/js/buy.js?v={$versionHash}"></script>
<script>
var _localLang = {
    'addToCart': '{$LANG.orderForm.addToCart|escape}',
    'addedToCartRemove': '{$LANG.orderForm.addedToCartRemove|escape}'
}
jQuery(function () {

	jQuery('.ccc > div').click(function(){
		cycle = jQuery(this).data('cycle');
		jQuery(this).addClass('active');
		jQuery(this).siblings('div').removeClass('active');
		jQuery('#inputBillingcycle').val(cycle);
		jQuery('#orderSummaryLoader').removeClass('hidden');
		recalctotals();
	});

	jQuery('.product-configurable-options .cart-k .aass > div').click(function(){
		value = jQuery(this).data('value');
		jQuery(this).addClass('group4');
		jQuery(this).siblings().removeClass('group4');
		jQuery(this).parent().find('input').val(value);
		jQuery('#orderSummaryLoader').removeClass('hidden');
		recalctotals();
	});
	jQuery('.product-configurable-options .cart-k .ccc1 > div').click(function(){
		value = jQuery(this).data('value');
		jQuery(this).addClass('active');
		jQuery(this).siblings().removeClass('active');
		jQuery(this).parent().find('input').val(value);
		jQuery('#orderSummaryLoader').removeClass('hidden');
		recalctotals();
	});
});
</script>

<div id="order-standard_cart" style="margin-bottom: 50px;">
<div class="alert alert-danger hidden" role="alert" id="containerProductValidationErrors" style="padding-left: 20px;">
                            <p style="font-size: 14px;font-weight: 600;">{$LANG.orderForm.correctErrors}:</p>
                            <p id="containerProductValidationErrorsList"></p>
                       </div>
                       <div class="cartbk">
		<div class="text-center carttb">
			<div class="cppztb text-muted" style="font-size: 15px;">
				<i class="fa fa-gears" style="margin-right: 8px;color: #00C0FA;"></i>{$LANG.cartpzcp}：<b style="color: #333;">{$productinfo.name}</b>
			</div>
		</div>

            <form id="frmConfigureProduct">
                <input type="hidden" name="configure" value="true" />
                <input type="hidden" name="i" value="{$i}" />

{if $pricing.type eq "recurring"}
<div class="cart-k">
	<div class="hidden-sm hidden-xs h15"></div>
	<div class="row">
		<div class="cart-l col-sm-2"><i class="fa fa-clock-o"></i>{$LANG.cartzq}</div>
		<div class="cartjg col-sm-10 text-center">
			<div class="ccc">
				<input type="hidden" id="inputBillingcycle" name="billingcycle" value="{$billingcycle}" autofocus />
				{if $pricing.monthly}
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 {if $billingcycle eq "monthly"}active{/if}" data-cycle="monthly" data-billing="{$pricing.monthly}">{$LANG.cart1}</div>
				{/if}
				{if $pricing.quarterly}
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 {if $billingcycle eq "quarterly"}active{/if}" data-cycle="quarterly" data-billing="{$pricing.quarterly}">{$LANG.cart3}</div>
				{/if}
				{if $pricing.semiannually}
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 {if $billingcycle eq "semiannually"}active{/if}" data-cycle="semiannually" data-billing="{$pricing.semiannually}">{$LANG.cart6}</div>
				{/if}
				{if $pricing.annually}
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 {if $billingcycle eq "annually"}active{/if}" data-cycle="annually" data-billing="{$pricing.annually}" data-toggle="tooltip" data-placement="top" data-original-title="{$LANG.nfyhwz}">{$LANG.cart12}<span class="badge badge-default hui">惠</span></div>
				{/if}
				{if $pricing.biennially}
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 {if $billingcycle eq "biennially"}active{/if}" data-cycle="biennially" data-billing="{$pricing.biennially}" data-toggle="tooltip" data-placement="top" data-original-title="{$LANG.lnfyhwz}">{$LANG.cart24}<span class="badge badge-default hui">惠</span></div>
				{/if}
				{if $pricing.triennially}
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 {if $billingcycle eq "triennially"}active{/if}" data-cycle="triennially" data-billing="{$pricing.triennially}" data-toggle="tooltip" data-placement="top" data-original-title="{$LANG.snfyhwz}">{$LANG.cart36}<span class="badge badge-default hui">惠</span></div>
				{/if}
			</div>
		</div>
	</div>
	<div class="h15"></div>
</div>
{/if}

{if $productinfo.type eq "server"}
<div class="cart-k">
	<div class="hidden-sm hidden-xs h20"></div>
	<div class="row">
		<div class="cart-l col-sm-2"><i class="fa fa-server"></i>{$LANG.cartconfigserver}</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;margin-right: -15px;">
									<div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputHostname">{$LANG.serverhostname}</label>
                                            <input class="form-control  no-custom-style" type="text" name="hostname" id="inputHostname" value="{$server.hostname}" readonly placeholder="{$LANG.serverhostname}" style="-webkit-appearance: none;appearance: none;" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputRootpw">{$LANG.serverrootpw}</label>
                                            <input class="form-control  no-custom-style" type="text" name="rootpw" id="inputRootpw" value="{$server.rootpw}" readonly placeholder="{$LANG.serverrootpw}" style="-webkit-appearance: none;appearance: none;" />
                                        </div>
                                    </div>
<script>
var dt = new Date();
function gen_password(len){
  var secret="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  var selen=secret.length-1;
  var i=0;
  var pwd="";
  while(i<len){
     pwd+=secret[Math.round(Math.random()*selen)];
     i++;
   }
  return pwd;
}
function gen_random(len){
  var secret="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  var selen=secret.length-1;
  var i=0;
  var rnd="";
  while(i<len){
     rnd+=secret[Math.round(Math.random()*selen)];
     i++;
   }
  return rnd;
}
$("input[name=rootpw]").val(gen_password(16));
$("input[name=hostname]").val("{$LANG.hostnameqz}"+"-"+dt.toISOString().slice(2, 10).replace(/[^0-9]/g, "")+"-"+gen_random(4));
</script>
                                    <div class="col-sm-6" style="display: none;">
                                        <div class="form-group">
                                            <label for="inputNs1prefix">{$LANG.serverns1prefix}</label>
                                            <input type="text" name="ns1prefix" class="form-control" id="inputNs1prefix" value="ns1">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="display: none;">
                                        <div class="form-group">
                                            <label for="inputNs2prefix">{$LANG.serverns2prefix}</label>
                                            <input type="text" name="ns2prefix" class="form-control" id="inputNs2prefix" value="ns2">
                                        </div>
                                    </div>
    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
{/if}

{if $configurableoptions}
<div class="product-configurable-options" id="productConfigurableOptions">
{foreach $configurableoptions as $num => $configoption}
{if $configoption.optiontype eq 1}
<div class="cart-k"{if $configoption.optionname == "Disk Space"} style="border-bottom: none;padding-bottom: 0px;"{/if}>
	<div class="hidden-sm hidden-xs h20"></div>
	<div class="row">
		<div class="cart-l col-sm-2">
			<i class="fa {if $configoption.optionname == "Operating System"}fa-linux{else if $configoption.optionname == "Location"}fa-map-marker{else if $configoption.optionname == "Cores" || $configoption.optionname == "cpu"}fa-microchip{else if $configoption.optionname == "Memory" || $configoption.optionname == "ram"}fa-floppy-o{else if $configoption.optionname == "Disk Space" || $configoption.optionname == "hdd"}fa-hdd-o{else if $configoption.optionname == "Bandwidth"}fa-jsfiddle{else if $configoption.optionname == "Extra IP Address" || $configoption.optionname == "ip"}fa-info{else if $configoption.optionname == "network"}fa-globe{else if $configoption.optionname == "控制面板"}fa-dashboard{else}fa-check-circle{/if}"></i>
					{if $configoption.optionname == "Operating System"}
						{$LANG.hostos}
					{else if $configoption.optionname == "Location"}
						{$LANG.hostlt}
					{else if $configoption.optionname == "Cores"}
						{$LANG.hostcpu}
					{else if $configoption.optionname == "Memory"}
						{$LANG.hostmm}
					{else if $configoption.optionname == "Disk Space"}
						{$LANG.hostds}
					{else if $configoption.optionname == "hdd"}
						{$LANG.carthdd}
					{else if $configoption.optionname == "Bandwidth"}
						{$LANG.hostbw}
					{else if $configoption.optionname == "cpu"}
						{$LANG.cartcpu}
					{else if $configoption.optionname == "ram"}
						{$LANG.hostram}
					{else if $configoption.optionname == "network"}
						{$LANG.hostnetwork}
					{else if $configoption.optionname == "Extra IP Address"}
						{$LANG.hostdlip}
					{else if $configoption.optionname == "ip"}
						{$LANG.cartip}
					{else if $configoption.optionname == "控制面板"}
						{$LANG.hostmb}
					{else}
						{$configoption.optionname}
					{/if}
		</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;margin-right: -15px;">
			<div class="form-group col-sm-8">
				<select name="configoption[{$configoption.id}]" id="inputConfigOption{$configoption.id}" class="form-control" style="margin-top: 9px;">
					{foreach key=num2 item=options from=$configoption.options}
					<option value="{$options.id}" {if $configoption.selectedvalue eq $options.id} selected="selected" {/if} style="color: #666;">
						{$options.name}
					</option>
					{/foreach}
				</select>
			</div>
    	</div>
	</div>
	{if $configoption.optionname == "Disk Space"}{else}<div class="hidden-sm hidden-xs h15"></div>{/if}
</div>
{elseif $configoption.optiontype eq 2}
<div class="cart-k"{if $configoption.optionname == "Disk Space"} style="border-bottom: none;padding-bottom: 0px;"{/if}>
	<div class="hidden-sm hidden-xs h20"></div>
	<div class="row">
		<div class="cart-l col-sm-2">
			<i class="fa {if $configoption.optionname == "Operating System"}fa-linux{else if $configoption.optionname == "Location"}fa-map-marker{else if $configoption.optionname == "Cores" || $configoption.optionname == "cpu"}fa-microchip{else if $configoption.optionname == "Memory" || $configoption.optionname == "ram"}fa-floppy-o{else if $configoption.optionname == "Disk Space" || $configoption.optionname == "hdd"}fa-hdd-o{else if $configoption.optionname == "Bandwidth"}fa-jsfiddle{else if $configoption.optionname == "Extra IP Address" || $configoption.optionname == "ip"}fa-info{else if $configoption.optionname == "network"}fa-globe{else if $configoption.optionname == "控制面板"}fa-dashboard{else}fa-check-circle{/if}"></i>
					{if $configoption.optionname == "Operating System"}
						{$LANG.hostos}
					{else if $configoption.optionname == "Location"}
						{$LANG.hostlt}
					{else if $configoption.optionname == "Cores"}
						{$LANG.hostcpu}
					{else if $configoption.optionname == "Memory"}
						{$LANG.hostmm}
					{else if $configoption.optionname == "Disk Space"}
						{$LANG.hostds}
					{else if $configoption.optionname == "hdd"}
						{$LANG.carthdd}
					{else if $configoption.optionname == "Bandwidth"}
						{$LANG.hostbw}
					{else if $configoption.optionname == "cpu"}
						{$LANG.cartcpu}
					{else if $configoption.optionname == "ram"}
						{$LANG.hostram}
					{else if $configoption.optionname == "network"}
						{$LANG.hostnetwork}
					{else if $configoption.optionname == "Extra IP Address"}
						{$LANG.hostdlip}
					{else if $configoption.optionname == "ip"}
						{$LANG.cartip}
					{else if $configoption.optionname == "控制面板"}
						{$LANG.hostmb}
					{else}
						{$configoption.optionname}
					{/if}
		</div>
		<div class="col-sm-10" style="{if $configoption.optionname == "Operating System" || $configoption.optionname == "控制面板" || $configoption.optionname == "Extra IP Address" || $configoption.optionname == "Bandwidth" || $configoption.optionname == "Disk Space" || $configoption.optionname == "Memory" || $configoption.optionname == "Bandwidth" || $configoption.optionname == "Cores" || $configoption.optionname == "Location" || $configoption.optionname == "cpu" || $configoption.optionname == "ram" || $configoption.optionname == "hdd" || $configoption.optionname == "network" || $configoption.optionname == "ip"}{else}margin-left: -15px;margin-right: -15px;{/if}">
			{if $configoption.optionname == "Operating System" || $configoption.optionname == "控制面板" || $configoption.optionname == "Location"}
			<div class="aass">
			<input type="hidden" id="inputConfigOption{$configoption.id}" name="configoption[{$configoption.id}]" value="{$configoption.selectedvalue}" />
					{foreach key=num2 item=options from=$configoption.options}
					<div class="group3 {if $configoption.selectedvalue eq $options.id}group4{/if}" data-value="{$options.id}">
						{assign var=value value=" "|explode:$options.name}
						<span class="deploy_checkbox_icon fonticon_{$value[0]|lower} hidden-sm hidden-xs"></span>
						<span class="fonticon_{$value[0]|lower} sese hidden-lg hidden-md"></span>
						<span class="deploy_checkbox_line1 xtwz">{$value[0]}</span>
						<span class="deploy_checkbox_line2 xtwz">{$value[1]} {$value[2]} {$value[3]} {$value[4]} {$value[5]}</span>
					</div>
					{/foreach}
			</div>
			{elseif $configoption.optionname == "cpu" || $configoption.optionname == "ram" || $configoption.optionname == "hdd" || $configoption.optionname == "network"}
			<div class="aass a111">
			<input type="hidden" id="inputConfigOption{$configoption.id}" name="configoption[{$configoption.id}]" value="{$configoption.selectedvalue}" />
					{foreach key=num2 item=options from=$configoption.options}
					<div class="group3 {if $configoption.selectedvalue eq $options.id}group4{/if}" data-value="{$options.id}">
						<span>{$options.name}</span>
					</div>
					{/foreach}
			</div>
			{elseif $configoption.optionname == "Extra IP Address" || $configoption.optionname == "Bandwidth" || $configoption.optionname == "Disk Space" || $configoption.optionname == "Memory" || $configoption.optionname == "Bandwidth" || $configoption.optionname == "Cores"}
			<div class="ccc1">
			<input type="hidden" id="inputConfigOption{$configoption.id}" name="configoption[{$configoption.id}]" value="{$configoption.selectedvalue}" />
					{foreach key=num2 item=options from=$configoption.options}
					{assign var=value value=" "|explode:$options.name}
					<div class="cartjglb {if $configoption.selectedvalue eq $options.id}active{/if} text-center col-md-2 col-sm-3 col-xs-6" data-value="{$options.id}">{$value[0]}</div>
					{/foreach}
			</div>
			{else}
			<div class="form-group" style="margin-top: 16px;">
                                                    {foreach key=num2 item=options from=$configoption.options}
                                                        <label class="col-sm-4" style="margin-bottom: 15px;">
                                                            <input type="radio" name="configoption[{$configoption.id}]" value="{$options.id}"{if $configoption.selectedvalue eq $options.id} checked="checked"{/if} />
                                                            <span style="margin-left: 6px;vertical-align: middle;">
                                                            {if $options.name}
                                                                {$options.name}
                                                            {else}
                                                                {$LANG.enable}
                                                            {/if}</span>
                                                        </label>
                                                    {/foreach}
                                                </div>
            {/if}
		</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
{elseif $configoption.optiontype eq 3}
{if $configoption.optionname == "I/O优化"}
<div class="cart-k" style="padding-top: 6px;">
	<div class="row">
		<div class="cart-l col-sm-2"></div>
		<div class="cartjg col-sm-10">
						<div class="form-group">
                                                    <label>
                                                        <input type="checkbox" name="configoption[{$configoption.id}]" id="inputConfigOption{$configoption.id}" value="1" checked />
                                                        <span style="margin-left: 6px;vertical-align: middle;">
                                                        {if $configoption.options.0.name}
                                                            {$configoption.options.0.name}
                                                        {else}
                                                            {$LANG.enable}
                                                        {/if}</span>
                                                    </label>
                                                </div>

    	</div>
	</div>
</div>
{else}
<div class="cart-k">
	<div class="hidden-sm hidden-xs h15"></div>
	<div class="row">
		<div class="cart-l col-sm-2">
			<i class="fa {if $configoption.optionname == "Operating System"}fa-linux{else if $configoption.optionname == "Location"}fa-map-marker{else if $configoption.optionname == "Cores" || $configoption.optionname == "cpu"}fa-microchip{else if $configoption.optionname == "Memory" || $configoption.optionname == "ram"}fa-floppy-o{else if $configoption.optionname == "Disk Space" || $configoption.optionname == "hdd"}fa-hdd-o{else if $configoption.optionname == "Bandwidth"}fa-jsfiddle{else if $configoption.optionname == "Extra IP Address" || $configoption.optionname == "ip"}fa-info{else if $configoption.optionname == "network"}fa-globe{else if $configoption.optionname == "控制面板"}fa-dashboard{else}fa-check-circle{/if}"></i>
					{if $configoption.optionname == "Operating System"}
						{$LANG.hostos}
					{else if $configoption.optionname == "Location"}
						{$LANG.hostlt}
					{else if $configoption.optionname == "Cores"}
						{$LANG.hostcpu}
					{else if $configoption.optionname == "Memory"}
						{$LANG.hostmm}
					{else if $configoption.optionname == "Disk Space"}
						{$LANG.hostds}
					{else if $configoption.optionname == "hdd"}
						{$LANG.carthdd}
					{else if $configoption.optionname == "Bandwidth"}
						{$LANG.hostbw}
					{else if $configoption.optionname == "cpu"}
						{$LANG.cartcpu}
					{else if $configoption.optionname == "ram"}
						{$LANG.hostram}
					{else if $configoption.optionname == "network"}
						{$LANG.hostnetwork}
					{else if $configoption.optionname == "Extra IP Address"}
						{$LANG.hostdlip}
					{else if $configoption.optionname == "ip"}
						{$LANG.cartip}
					{else if $configoption.optionname == "控制面板"}
						{$LANG.hostmb}
					{else}
						{$configoption.optionname}
					{/if}
		</div>
		<div class="cartjg col-sm-10" style="margin-top: 14px;">

			<div class="form-group">
                                                    <label>
                                                        <input type="checkbox" name="configoption[{$configoption.id}]" id="inputConfigOption{$configoption.id}" value="1"{if $configoption.selectedqty} checked{/if} />
                                                        <span style="margin-left: 6px;vertical-align: middle;">
                                                        {if $configoption.options.0.name}
                                                            {$configoption.options.0.name}
                                                        {else}
                                                            {$LANG.enable}
                                                        {/if}</span>
                                                    </label>
                                                </div>

    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
{/if}
{elseif $configoption.optiontype eq 4}
<div class="cart-k">
	<div class="hidden-sm hidden-xs h35"></div>
	<div class="row">
		<div class="cart-l col-sm-2">
			<i class="fa {if $configoption.optionname == "Operating System"}fa-linux{else if $configoption.optionname == "Location"}fa-map-marker{else if $configoption.optionname == "Cores" || $configoption.optionname == "cpu"}fa-microchip{else if $configoption.optionname == "Memory" || $configoption.optionname == "ram"}fa-floppy-o{else if $configoption.optionname == "Disk Space" || $configoption.optionname == "hdd"}fa-hdd-o{else if $configoption.optionname == "Bandwidth"}fa-jsfiddle{else if $configoption.optionname == "Extra IP Address" || $configoption.optionname == "ip"}fa-info{else if $configoption.optionname == "network"}fa-globe{else if $configoption.optionname == "控制面板"}fa-dashboard{else}fa-check-circle{/if}"></i>
					{if $configoption.optionname == "Operating System"}
						{$LANG.hostos}
					{else if $configoption.optionname == "Location"}
						{$LANG.hostlt}
					{else if $configoption.optionname == "Cores"}
						{$LANG.hostcpu}
					{else if $configoption.optionname == "Memory"}
						{$LANG.hostmm}
					{else if $configoption.optionname == "Disk Space"}
						{$LANG.hostds}
					{else if $configoption.optionname == "hdd"}
						{$LANG.carthdd}
					{else if $configoption.optionname == "Bandwidth"}
						{$LANG.hostbw}
					{else if $configoption.optionname == "cpu"}
						{$LANG.cartcpu}
					{else if $configoption.optionname == "ram"}
						{$LANG.hostram}
					{else if $configoption.optionname == "network"}
						{$LANG.hostnetwork}
					{else if $configoption.optionname == "Extra IP Address"}
						{$LANG.hostdlip}
					{else if $configoption.optionname == "ip"}
						{$LANG.cartip}
					{else if $configoption.optionname == "控制面板"}
						{$LANG.hostmb}
					{else}
						{$configoption.optionname}
					{/if}
		</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;margin-right: -15px;">

			                                                <div class="form-group col-sm-10">
                                                    {if $configoption.qtymaximum}
                                                        {if !$rangesliderincluded}
                                                            <script type="text/javascript" src="{$BASE_PATH_JS}/ion.rangeSlider.min.js"></script>
                                                            <link href="{$BASE_PATH_CSS}/ion.rangeSlider.css" rel="stylesheet">
                                                            <link href="{$BASE_PATH_CSS}/ion.rangeSlider.skinModern.css" rel="stylesheet">
                                                            {assign var='rangesliderincluded' value=true}
                                                        {/if}
                                                        <input type="text" name="configoption[{$configoption.id}]" value="{if $configoption.selectedqty}{$configoption.selectedqty}{else}{$configoption.qtyminimum}{/if}" id="inputConfigOption{$configoption.id}" class="form-control" />
                                                        <script>
                                                            var sliderTimeoutId = null;
                                                            var sliderRangeDifference = {$configoption.qtymaximum} - {$configoption.qtyminimum};
                                                            // The largest size that looks nice on most screens.
                                                            var sliderStepThreshold = 25;
                                                            // Check if there are too many to display individually.
                                                            var setLargerMarkers = sliderRangeDifference > sliderStepThreshold;

                                                            jQuery("#inputConfigOption{$configoption.id}").ionRangeSlider({
                                                                min: {$configoption.qtyminimum},
                                                                max: {$configoption.qtymaximum},
                                                                grid: true,
                                                                grid_snap: setLargerMarkers ? false : true,
                                                                onChange: function() {
                                                                    if (sliderTimeoutId) {
                                                                        clearTimeout(sliderTimeoutId);
                                                                    }

                                                                    sliderTimeoutId = setTimeout(function() {
                                                                        sliderTimeoutId = null;
                                                                        recalctotals();
                                                                    }, 250);
                                                                }
                                                            });
                                                        </script>
                                                    {else}
                                                        <div>
                                                            <input type="number" name="configoption[{$configoption.id}]" value="{if $configoption.selectedqty}{$configoption.selectedqty}{else}{$configoption.qtyminimum}{/if}" id="inputConfigOption{$configoption.id}" min="{$configoption.qtyminimum}" onchange="recalctotals()" onkeyup="recalctotals()" class="form-control form-control-qty" />
                                                            <span class="form-control-static form-control-static-inline">
                                                                x {$configoption.options.0.name}
                                                            </span>
                                                        </div>
                                                    {/if}
                                                </div>

				    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
{/if}
{/foreach}
</div>
{/if}

{if $customfields}
<div class="cart-k">
	<div class="hidden-sm hidden-xs h25"></div>
	<div class="row">
		<div class="cart-l col-sm-2"><i class="fa fa-clone"></i>{$LANG.orderadditionalrequiredinfo}</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;margin-right: -15px;">
			<div class="hidden-sm hidden-xs h10"></div>
			{foreach $customfields as $customfield}
			<div class="form-group col-sm-6">
				<div class="col-sm-12" style="border: 1px dashed #ddd; padding: 20px;">
				{if $customfield.type eq 'tickbox'}
				<label for="customfield{$customfield.id}" style="margin-bottom: 8px;">{$customfield.name}</label><br>
										{$customfield.input}
                                            <span style="display: initial; font-size: 12px;margin-left: 5px; color: #333;">
                                                {$customfield.name}
                                            </span><p class="text-muted" style="margin-top: 5px;">{$customfield.description}</p>
				{else}
                                        <label for="customfield{$customfield.id}" style="color: #333;">{$customfield.name}</label>
                                        {$customfield.input}
                                        {if $customfield.description}
                                            <span class="field-help-text" style="margin-top: 9px;">
                                                {$customfield.description}
                                            </span>
                                        {/if}
                {/if}
				</div>
			</div>
			{/foreach}
    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
{/if}

{if $addons || count($addonsPromoOutput) > 0}
<div class="cart-k">
	<div class="hidden-sm hidden-xs h35"></div>
	<div class="row">
		<div class="cart-l col-sm-2"><i class="fa fa-cart-plus"></i>{$LANG.cartavailableaddons}</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;">
							{foreach $addonsPromoOutput as $output}
                                <div>
                                    {$output}
                                </div>
                            {/foreach}

                            <div class="addon-products zzyw">
                                {foreach $addons as $addon}
                                    <div class="col-sm-4">
                                        <div class="panel panel-default panel-addon{if $addon.status} panel-addon-selected{/if}">
                                            <div class="panel-body">
                                                <label>
                                                    <input type="checkbox" name="addons[{$addon.id}]"{if $addon.status} checked{/if} />
                                                    {$addon.name}
                                                </label><br />
                                                {$addon.description}
                                            </div>
                                            <div class="panel-price">
                                                {$addon.pricing}
                                            </div>
                                            <div class="panel-add">
                                                <i class="fa fa-plus"></i>
                                                {$LANG.addtocart}
                                            </div>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
{/if}

</div>


<div id="cartFooterScrollY" style="margin-top: 20px;"></div>
<div class="cart-footer{if $productinfo.type eq "server" && $configurableoptions} cart-footer-fixed{else}{/if}" id="cartFooter">
	<div class="row" id="scrollingPanelContainer" style="padding-bottom: 5px; padding-top: 5px;">
			<div class="summary-container" id="producttotal" style="background-color: transparent;"></div>
			<i class="fa fa-fw fa-snowflake-o fa-spin loader a0a0{if $productinfo.type eq "server" && $configurableoptions}{else} sx0101{/if}" id="orderSummaryLoader"></i>
			<button type="submit" id="btnCompleteProductConfig" class="pull-right btn btn-primary btn-lg a101" style="background-color: rgb(255, 102, 0);border-color: rgb(255, 102, 0);">
                                    {$LANG.continue}
                                    <i class="fa fa-arrow-circle-right"></i>
                               </button>
	</div>
</div>
<div class="cartfb" style="margin-top: 0px;"></div>



</form>
</div>


<script>recalctotals();</script>
