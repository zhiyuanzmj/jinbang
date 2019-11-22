{if $addfundsdisabled}
    {include file="$template/includes/alert.tpl" type="error" msg=$LANG.clientareaaddfundsdisabled textcenter=true}
{elseif $notallowed}
    {include file="$template/includes/alert.tpl" type="error" msg=$LANG.clientareaaddfundsnotallowed textcenter=true}
{elseif $errormessage}
    {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage textcenter=true}
{/if}

{if !$addfundsdisabled}
				
				<div class="row">
							<div class="col-md-6" style="margin-top: 15px;">
								<form method="post" action="{$smarty.server.PHP_SELF}?action=addfunds" class="flexlayoutform flexlayout100p money">
								<h3 style="width:100%; margin-bottom: 15px;font-size: 15px; font-weight: 500;">
										{$LANG.addfundsamount}
									</h3>
									<div class="row">
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="50" id="creditcard5" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard5" class="flexwidth1sixth responsivefullwidth1" data-money="{$LANG.je1}">
										{$LANG.je1}
									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="10" id="creditcard10" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard10" class="flexwidth1sixth responsivefullwidth1" data-money="{$LANG.je2}">
										{$LANG.je2}
									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="25" id="creditcard25" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard25" class="flexwidth1sixth responsivefullwidth1" data-money="{$LANG.je3}">
										{$LANG.je3}
									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="50" id="creditcard50" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard50" class="flexwidth1sixth responsivefullwidth1" data-money="{$LANG.je4}">
										{$LANG.je4}
									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="100" id="creditcard100" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard100" class="flexwidth1sixth responsivefullwidth1" data-money="{$LANG.je5}">
										{$LANG.je5}
									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="other" id="creditcard250" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).show();">
									<label for="creditcard250" class="flexwidth1sixth responsivefullwidth1">
										{$LANG.othertol}
									</label>
									</div>
									</div>
									<input type="text" name="amount" id="amount" value="{$amount}" class="form-control" required placeholder="{$LANG.othertol1}" style="display: none; margin-top: 10px; height: 40px;"/>
									<h3 style="width:100%; margin-bottom: 15px;font-size: 15px; font-weight: 500; margin-top: 30px;">
										{$LANG.orderpaymentmethod}
									</h3>
									<div class="row">
									{foreach key=num item=gateway from=$gateways}
									<div class="col-sm-3 col-xs-6">
									<input type="radio" name="paymentmethod" value="{$gateway.sysname}" id="{$gateway.sysname}" class="radiolabelbutton1{if $gateway.type eq "CC"} is-credit-card{/if}"{if $selectedgateway eq $gateway.sysname} checked{/if}>
									<label for="{$gateway.sysname}" class="flexlayout100p responsivefullwidth">
										{if $gateway.sysname eq "{$LANG.huabei}"}
                                 		<img src="{$WEB_ROOT}/templates/{$template}/img/antchecklater.svg" height="24">
                                 		{elseif $gateway.sysname eq "{$LANG.alipay}"}
                                 		<img src="{$WEB_ROOT}/templates/{$template}/img/alipay.svg" height="24">
                                 		{elseif $gateway.sysname eq "{$LANG.wepay}"}
                                 		<img src="{$WEB_ROOT}/templates/{$template}/img/wepay.svg" height="24">
                                 		{elseif $gateway.sysname eq "{$LANG.qqpay}"}
                                 		<img src="{$WEB_ROOT}/templates/{$template}/img/qqpay.png" height="26">
                                 		{elseif $gateway.sysname eq "{$LANG.paypal}"}
                                 		<img src="{$WEB_ROOT}/templates/{$template}/img/paypal.png" height="24">
                                 		{else}
                                 		{$gateway.name}
                                 		{/if}
									</label>
									</div>
                        			{/foreach}
                        			</div>
									<input type="submit" value="{$LANG.addfunds}" class="flexwidth100 btn-hh" style="margin-top: 30px;">
								</form>
								
						</div>
						<div class="col-sm-4 col-sm-offset-2" style="margin-top: 15px;">
            <p style="margin-top: 20px; margin-bottom: 15px;">{$LANG.addfundsnonrefundable}</p>
            <div class="panel">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td class="textright"><strong>{$LANG.addfundsminimum}</strong></td>
                        <td>{$minimumamount}</td>
                    </tr>
                    <tr>
                        <td class="textright"><strong>{$LANG.addfundsmaximum}</strong></td>
                        <td>{$maximumamount}</td>
                    </tr>
                    <tr>
                        <td class="textright"><strong>{$LANG.addfundsmaximumbalance}</strong></td>
                        <td>{$maximumbalance}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
				</div>


{/if}
<script type="text/javascript">
	  $(function(){
		  $('.flexwidth1sixth').click(function(){
			  var val = $(this).data('money');
			  $('#amount').val(val);
	     });
	  });
	</script>