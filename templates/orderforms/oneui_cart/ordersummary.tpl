<div class="col-sm-12 hidden-xs">
	<div class="col-sm-12" style="border-bottom: 1px solid #ddd;padding-bottom: 20px;margin-bottom: 10px;padding-top: 5px;">
		<div class="row">
{foreach $producttotals.configoptions as $configoption}
    {if $configoption}
        <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
            <span class="pull-left">
            	<span class="text-muted">
            		{if $configoption.name == "Operating System"}
						{$LANG.hostos}
					{else if $configoption.name == "Location"}
						{$LANG.hostlt}
					{else if $configoption.name == "Cores"}
						{$LANG.hostcpu}
					{else if $configoption.name == "Memory"}
						{$LANG.hostmm}
					{else if $configoption.name == "Disk Space"}
						{$LANG.hostds}
					{else if $configoption.name == "hdd"}
						{$LANG.carthdd}
					{else if $configoption.name == "Bandwidth"}
						{$LANG.hostbw}
					{else if $configoption.name == "cpu"}
						{$LANG.cartcpu}
					{else if $configoption.name == "ram"}
						{$LANG.hostram}
					{else if $configoption.name == "network"}
						{$LANG.hostnetwork}
					{else if $configoption.name == "Extra IP Address"}
						{$LANG.hostdlip}
					{else if $configoption.name == "ip"}
						{$LANG.cartip}
					{else if $configoption.name == "控制面板"}
						{$LANG.hostmb}
					{else}
						{$configoption.name}
					{/if}：
            	</span>{$configoption.optionname}</span>
            <span class="pull-right">{$configoption.recurring}{if $configoption.setup} + {$configoption.setup} {$LANG.ordersetupfee}{/if}</span>
        </div>
    {/if}
{/foreach}

{foreach $producttotals.addons as $addon}
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
        <span class="pull-left"><span class="text-muted">增值服务</span>：{$addon.name}</span>
        <span class="pull-right">{$addon.recurring}</span>
    </div>
{/foreach}

{if $producttotals.pricing.setup || $producttotals.pricing.recurring || $producttotals.pricing.addons}
    <div class="summary-totals">
        {if $producttotals.pricing.setup}
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
                <span class="pull-left"><span class="text-muted">其他：</span>{$LANG.cartsetupfees}</span>
                <span class="pull-right">{$producttotals.pricing.setup}</span>
            </div>
        {/if}
        {foreach from=$producttotals.pricing.recurringexcltax key=cycle item=recurring}
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
                <span class="pull-left"><span class="text-muted">周期/价格：</span>{$cycle}</span>
                <span class="pull-right">{$recurring}</span>
            </div>
        {/foreach}
        {if $producttotals.pricing.tax1}
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
                <span class="pull-left"><span class="text-muted">其他：</span>{$carttotals.taxname} @ {$carttotals.taxrate}%</span>
                <span class="pull-right">{$producttotals.pricing.tax1}</span>
            </div>
        {/if}
        {if $producttotals.pricing.tax2}
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
                <span class="pull-left"><span class="text-muted">其他：</span>{$carttotals.taxname2} @ {$carttotals.taxrate2}%</span>
                <span class="pull-right">{$producttotals.pricing.tax2}</span>
            </div>
        {/if}
    </div>
{/if}
</div></div>
</div>

<div class="col-sm-6">
<div class="col-sm-6 col-xs-6">
<div class="total-due-today" style="margin-left: -10px;">
	<p class="text-muted" style="font-size: 13px;font-weight: 400;margin-bottom: 1px;margin-top: 6px;">{$LANG.ordertotalduetoday}：</p>
		<span style="font-size: 24px;color: rgb(255, 102, 0);font-weight: 600;">
			{$producttotals.pricing.totaltoday}
		</span> 
</div>
</div>
</div>

