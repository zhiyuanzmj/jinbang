{include file="orderforms/{$carttpl}/common.tpl"}


    <script>
        // Define state tab index value
        var statesTab = 10;
        var stateNotRequired = true;
    </script>
<script type="text/javascript" src="{$BASE_PATH_JS}/StatesDropdown.js"></script>
<script type="text/javascript" src="{$BASE_PATH_JS}/PasswordStrength.js"></script>
<script>
    window.langPasswordStrength = "{$LANG.pwstrength}";
    window.langPasswordWeak = "{$LANG.pwstrengthweak}";
    window.langPasswordModerate = "{$LANG.pwstrengthmoderate}";
    window.langPasswordStrong = "{$LANG.pwstrengthstrong}";
    $(function () {
    	{if $cartitems != 0}
		$('.cart-next-step').click(function(){
			$('#submit-form').trigger('click');
		});{/if}
		
		$('.osagreement').click(function(){
			if ($(this).children().is('.checked')) {
				$('#accepttos').attr("checked","checked");
			} else {
				$('#accepttos').removeAttr("checked");
			}
		});
		
		$('#osagreement').on('ifChecked', function(event){
			if ( $(this).is(':checked') ) {
				$('#accepttos').attr("checked","checked");
			}
		});
		
	});
</script>
{function name=getFontAwesomeCCIcon}
    {if $ccType eq "Visa"}
        fa-cc-visa
    {elseif $ccType eq "MasterCard"}
        fa-cc-mastercard
    {elseif $ccType eq "Discover"}
        fa-cc-discover
    {elseif $ccType eq "American Express"}
        fa-cc-amex
    {elseif $ccType eq "JCB"}
        fa-cc-jcb
    {elseif $ccType eq "Diners Club" || $ccType eq "EnRoute"}
        fa-cc-diners-club
    {else}
        fa-credit-card
    {/if}
{/function}

    <div id="order-standard_cart">

        <div class="row" style="margin-top: 12px;margin-bottom: 80px;">


            <div class="col-md-12">
                        
                <div class="row">
                    <div class="col-md-8">
                    	<div>
						{if $promoerrormessage}
                            <div class="alert alert-warning text-center" role="alert">
                                {$promoerrormessage}
                            </div>
                        {elseif $errormessage}
                            <div class="alert alert-danger" role="alert">
                                <p style="font-size: 14px;font-weight: 600;">{$LANG.orderForm.correctErrors}:</p>
                                <ul>
                                    {$errormessage}
                                </ul>
                            </div>
                        {elseif $promotioncode && $rawdiscount eq "0.00"}
                            <div class="alert alert-info text-center" role="alert">
                                {$LANG.promoappliedbutnodiscount}
                            </div>
                        {elseif $promoaddedsuccess}
                            <div class="alert alert-success text-center" role="alert">
                                {$LANG.orderForm.promotionAccepted}
                            </div>
                        {/if}

                        {if $bundlewarnings}
                            <div class="alert alert-warning" role="alert">
                                <strong>{$LANG.bundlereqsnotmet}</strong><br />
                                <ul>
                                    {foreach from=$bundlewarnings item=warning}
                                        <li>{$warning}</li>
                                    {/foreach}
                                </ul>
                            </div>
                        {/if}
					</div>
            <form method="post" action="{$smarty.server.PHP_SELF}?a=checkout" name="orderfrm" id="frmCheckout">
                <input type="hidden" name="submit" value="true" />
                <input type="hidden" name="custtype" id="inputCustType" value="{$custtype}" />
                
        <div class="cartbk">
	
                        {foreach $hookOutput as $output}
                            <div>
                                {$output}
                            </div>
                        {/foreach}

                        {foreach $gatewaysoutput as $gatewayoutput}
                            <div class="view-cart-gateway-checkout">
                                {$gatewayoutput}
                            </div>
                        {/foreach}

	            <div class="already-registered clearfix" style="height: 60px;border-bottom: 1px solid #ddd;padding: 21px 25px;">
	                <div class="pull-right">
	                    <button type="button" class="btn btn-sm btn-info{if $loggedin || !$loggedin && $custtype eq "existing"} hidden{/if}" id="btnAlreadyRegistered" style="margin-top: -5px;background-color: #00c0fa;border-color: #00c0fa;">
	                        {$LANG.orderForm.alreadyRegistered}
	                    </button>
	                    <button type="button" class="btn btn-sm btn-warning{if $loggedin || $custtype neq "existing"} hidden{/if}" id="btnNewUserSignup" style="margin-top: -5px;background-color: #f60;border-color: #f60;">
	                        {$LANG.orderForm.createAccount}
	                    </button>
	                </div>
	                <h6>{$LANG.orderForm.personalInformation}</h6>
	            </div>



                <div id="containerExistingUserSignin"{if $loggedin || $custtype neq "existing"} class="hidden"{/if} style="margin: 30px 25px 10px;">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLoginEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="text" name="loginemail" id="inputLoginEmail" class="field" placeholder="{$LANG.orderForm.emailAddress}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLoginPassword" class="field-icon">
                                    <i class="fa fa-lock"></i>
                                </label>
                                <input type="password" name="loginpassword" id="inputLoginPassword" class="field" placeholder="{$LANG.clientareapassword}">
                            </div>
                        </div>
                    </div>

                    {include file="orderforms/{$carttpl}/linkedaccounts.tpl" linkContext="checkout-existing"}
                </div>
				
				
                <div id="containerNewUserSignup" style="margin: 30px 25px 10px;">

                    {include file="orderforms/{$carttpl}/linkedaccounts.tpl" linkContext="checkout-new"}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputFirstName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="firstname" id="inputFirstName" class="field" placeholder="{$LANG.orderForm.firstName}" value="{$clientsdetails.firstname}"{if $loggedin} readonly="readonly"{/if} autofocus>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLastName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="lastname" id="inputLastName" class="field" placeholder="{$LANG.orderForm.lastName}" value="{$clientsdetails.lastname}"{if $loggedin} readonly="readonly"{/if}>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="email" name="email" id="inputEmail" class="field" placeholder="{$LANG.orderForm.emailAddress}" value="{$clientsdetails.email}"{if $loggedin} readonly="readonly"{/if}>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputPhone" class="field-icon">
                                    <i class="fa fa-phone"></i>
                                </label>
                                <input type="tel" name="phonenumber" id="inputPhone" class="field" placeholder="{$LANG.orderForm.phoneNumber}" value="{$clientsdetails.phonenumber}"{if $loggedin} readonly="readonly"{/if}>
                            </div>
                        </div>
                    </div>

                    <div class="row"{if $loggedin}{else}{if $LANG.hid eq "1"} style="display: none;"{/if}{/if}>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCompanyName" class="field-icon">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" name="companyname" id="inputCompanyName" class="field" placeholder="{$LANG.orderForm.companyName} ({$LANG.orderForm.optional})" value="{$clientsdetails.companyname}"{if $loggedin} readonly="readonly"{/if}>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputAddress1" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="address1" id="inputAddress1" class="field" placeholder="{$LANG.orderForm.streetAddress}" value="{if $loggedin}{$clientsdetails.address1}{else}{$LANG.dz1}{/if}"{if $loggedin} readonly="readonly"{/if}>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputAddress2" class="field-icon">
                                    <i class="fa fa-map-marker"></i>
                                </label>
                                <input type="text" name="address2" id="inputAddress2" class="field" placeholder="{$LANG.orderForm.streetAddress2}" value="{$clientsdetails.address2}"{if $loggedin} readonly="readonly"{/if}>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group prepend-icon">
                                <label for="inputCity" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="city" id="inputCity" class="field" placeholder="{$LANG.orderForm.city}" value="{if $loggedin}{$clientsdetails.city}{else}{$LANG.cs}{/if}"{if $loggedin} readonly="readonly"{/if}>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group prepend-icon">
                                <label for="state" class="field-icon" id="inputStateIcon">
                                    <i class="fa fa-map-signs"></i>
                                </label>
                                <label for="stateinput" class="field-icon" id="inputStateIcon">
                                    <i class="fa fa-map-signs"></i>
                                </label>
                                <input type="text" name="state" id="inputState" class="field" placeholder="{$LANG.orderForm.state}" value="{if $loggedin}{$clientsdetails.state}{else}{$LANG.sf}{/if}"{if $loggedin} readonly="readonly"{/if}>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group prepend-icon">
                                <label for="inputPostcode" class="field-icon">
                                    <i class="fa fa-certificate"></i>
                                </label>
                                <input type="text" name="postcode" id="inputPostcode" class="field" placeholder="{$LANG.orderForm.postcode}" value="{if $loggedin}{$clientsdetails.postcode}{else}{$LANG.yb}{/if}"{if $loggedin} readonly="readonly"{/if}>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCountry" class="field-icon" id="inputCountryIcon">
                                    <i class="fa fa-globe"></i>
                                </label>
                                <select name="country" id="inputCountry" class="field"{if $loggedin} disabled="disabled"{/if}>
                                    {foreach $countries as $countrycode => $countrylabel}
                                        <option value="{$countrycode}"{if (!$country && $countrycode == $defaultcountry) || $countrycode eq $country} selected{/if}>
                                            {$countrylabel}
                                        </option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>

                    {if $customfields}
                        <div class="field-container">
                            <div class="row">
                                {foreach $customfields as $customfield}
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="customfield{$customfield.id}">{$customfield.name}</label>
                                            {$customfield.input}
                                            {if $customfield.description}
                                                <span class="field-help-text">
                                                    {$customfield.description}
                                                </span>
                                            {/if}
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    {/if}

				</div>

			        {if $domainsinorder}
			        <div class="col-sm-12" style="margin-bottom: 30px;">
                    	<label class="col-sm-3" style="padding-top: 10px;">{$LANG.domainregistrantinfo}</label>
                        <div class="col-sm-9">
                            <select name="contact" id="inputDomainContact" class="field">
                                <option value="">{$LANG.usedefaultcontact}</option>
                                {foreach $domaincontacts as $domcontact}
                                    <option value="{$domcontact.id}"{if $contact == $domcontact.id} selected{/if}>
                                        {$domcontact.name}
                                    </option>
                                {/foreach}
                                <option value="addingnew"{if $contact == "addingnew"} selected{/if}>
                                    {$LANG.clientareanavaddcontact}...
                                </option>
                            </select>
                        </div>
                    </div>
					
                    <div class="row{if $contact neq "addingnew"} hidden{/if}" id="domainRegistrantInputFields" style="margin: 0px 10px 15px;">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCFirstName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="domaincontactfirstname" id="inputDCFirstName" class="field" placeholder="{$LANG.orderForm.firstName}" value="{$domaincontact.firstname}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCLastName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="domaincontactlastname" id="inputDCLastName" class="field" placeholder="{$LANG.orderForm.lastName}" value="{$domaincontact.lastname}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="email" name="domaincontactemail" id="inputDCEmail" class="field" placeholder="{$LANG.orderForm.emailAddress}" value="{$domaincontact.email}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCPhone" class="field-icon">
                                    <i class="fa fa-phone"></i>
                                </label>
                                <input type="tel" name="domaincontactphonenumber" id="inputDCPhone" class="field" placeholder="{$LANG.orderForm.phoneNumber}" value="{$domaincontact.phonenumber}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputDCCompanyName" class="field-icon">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" name="domaincontactcompanyname" id="inputDCCompanyName" class="field" placeholder="{$LANG.orderForm.companyName} ({$LANG.orderForm.optional})" value="{$domaincontact.companyname}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputDCAddress1" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="domaincontactaddress1" id="inputDCAddress1" class="field" placeholder="{$LANG.orderForm.streetAddress}" value="{$domaincontact.address1}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputDCAddress2" class="field-icon">
                                    <i class="fa fa-map-marker"></i>
                                </label>
                                <input type="text" name="domaincontactaddress2" id="inputDCAddress2" class="field" placeholder="{$LANG.orderForm.streetAddress2}" value="{$domaincontact.address2}">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group prepend-icon">
                                <label for="inputDCCity" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="domaincontactcity" id="inputDCCity" class="field" placeholder="{$LANG.orderForm.city}" value="{$domaincontact.city}">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group prepend-icon">
                                <label for="inputDCState" class="field-icon">
                                    <i class="fa fa-map-signs"></i>
                                </label>
                                <input type="text" name="domaincontactstate" id="inputDCState" class="field" placeholder="{$LANG.orderForm.state}" value="{$domaincontact.state}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group prepend-icon">
                                <label for="inputDCPostcode" class="field-icon">
                                    <i class="fa fa-certificate"></i>
                                </label>
                                <input type="text" name="domaincontactpostcode" id="inputDCPostcode" class="field" placeholder="{$LANG.orderForm.postcode}" value="{$domaincontact.postcode}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <select name="domaincontactcountry" id="inputDCCountry" class="field">
                                    {foreach $countries as $countrycode => $countrylabel}
                                        <option value="{$countrycode}"{if (!$domaincontact.country && $countrycode == $defaultcountry) || $countrycode eq $domaincontact.country} selected{/if}>
                                            {$countrylabel}
                                        </option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
					{/if}

                {if !$loggedin}

                    <div id="containerNewUserSecurity"{if (!$loggedin && $custtype eq "existing") || ($remote_auth_prelinked && !$securityquestions) } class="hidden"{/if} style="margin: 10px 25px 10px;">

                        <div id="containerPassword" class="row{if $remote_auth_prelinked && $securityquestions} hidden{/if}">
                            <div id="passwdFeedback" style="display: none;" class="alert alert-info text-center col-sm-12"></div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword1" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" name="password" id="inputNewPassword1" data-error-threshold="{$pwStrengthErrorThreshold}" data-warning-threshold="{$pwStrengthWarningThreshold}" class="field" placeholder="{$LANG.clientareapassword}"{if $remote_auth_prelinked} value="{$password}"{/if}>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword2" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" name="password2" id="inputNewPassword2" class="field" placeholder="{$LANG.clientareaconfirmpassword}"{if $remote_auth_prelinked} value="{$password}"{/if}>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-center small text-muted" id="passwordStrengthTextLabel">{$LANG.pwstrength}: {$LANG.pwstrengthenter}</p>
                            </div>
                        </div>
                        {if $securityquestions}
                            <div class="row">
                                <div class="col-sm-6">
                                    <select name="securityqid" id="inputSecurityQId" class="field">
                                        <option value="">{$LANG.clientareasecurityquestion}</option>
                                        {foreach $securityquestions as $question}
                                            <option value="{$question.id}"{if $question.id eq $securityqid} selected{/if}>
                                                {$question.question}
                                            </option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group prepend-icon">
                                        <label for="inputSecurityQAns" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                        <input type="password" name="securityqans" id="inputSecurityQAns" class="field" placeholder="{$LANG.clientareasecurityanswer}">
                                    </div>
                                </div>
                            </div>
                        {/if}

                    </div>

                {/if}

                {foreach $hookOutput as $output}
                    <div>
                        {$output}
                    </div>
                {/foreach}

</div>




		<div class="cartbk" style="margin-top: 20px;">
				<div style="height: 60px;border-bottom: 1px solid #ddd;padding: 21px 25px;">
                    <h6>{$LANG.orderForm.paymentDetails}</h6>
               </div>

                {if $canUseCreditOnCheckout}
                    <div id="applyCreditContainer" class="apply-credit-container" data-apply-credit="{$applyCredit}" style="margin: 0;">
                        <p style="margin:5px 0px 18px 20px;">{lang key='cart.availableCreditBalance' amount=$creditBalance}</p>

                        {if $creditBalance->toNumeric() >= $total->toNumeric()}
                            <label class="radio" style="margin-bottom: 12px;">
                                <input id="useFullCreditOnCheckout" type="radio" name="applycredit" value="1"{if $applyCredit} checked{/if}>
                                {lang key='cart.applyCreditAmountNoFurtherPayment' amount=$total}
                            </label>
                        {else}
                            <label class="radio">
                                <input id="useCreditOnCheckout" type="radio" name="applycredit" value="1"{if $applyCredit} checked{/if}>
                                {lang key='cart.applyCreditAmount' amount=$creditBalance}
                            </label>
                        {/if}

                        <label class="radio">
                            <input id="skipCreditOnCheckout" type="radio" name="applycredit" value="0"{if !$applyCredit} checked{/if}>
                            {lang key='cart.applyCreditSkip' amount=$creditBalance}
                        </label>
                    </div>
                {/if}
                <div id="paymentGatewaysContainer" class="form-group" style="padding-top: 40px;padding-bottom: 40px;">
                        {foreach key=num item=gateway from=$gateways}
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="paymentmethod" value="{$gateway.sysname}" class="payment-methods{if $gateway.type eq "CC"} is-credit-card{/if}"{if $selectedgateway eq $gateway.sysname} checked{/if} /><span style="margin-left: 8px;vertical-align: middle;font-size: 16px;font-weight: 600;">
                                {if $gateway.sysname eq "{$LANG.huabei}"}
                                 		<img src="templates/orderforms/{$carttpl}/img/antchecklater.svg" height="24">
                                 		{elseif $gateway.sysname eq "{$LANG.alipay}"}
                                 		<img src="templates/orderforms/{$carttpl}/img/alipay.svg" height="24">
                                 		{elseif $gateway.sysname eq "{$LANG.wepay}"}
                                 		<img src="templates/orderforms/{$carttpl}/img/wepay.svg" height="24">
                                 		{elseif $gateway.sysname eq "{$LANG.qqpay}"}
                                 		<img src="templates/orderforms/{$carttpl}/img/qqpay.png" height="26">
                                 		{elseif $gateway.sysname eq "{$LANG.paypal}"}
                                 		<img src="templates/orderforms/{$carttpl}/img/paypal.png" height="24">
                                 		{else}
                                 		{$gateway.name}
                                 		{/if}</span>
                            </label>
                        </div>
                        {/foreach}
                </div>

                <div class="alert alert-danger text-center gateway-errors hidden"></div>

                <div class="clearfix"></div>

                <div id="creditCardInputFields"{if $selectedgatewaytype neq "CC"} class="hidden"{/if} style="margin: 30px 25px 10px;">
                    {if $clientsdetails.cclastfour}
                        <div class="row margin-bottom">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" name="ccinfo" value="useexisting" id="useexisting" {if $clientsdetails.cclastfour} checked{else} disabled{/if} />
                                        {$LANG.creditcarduseexisting}
                                        {if $clientsdetails.cclastfour}
                                            ({$clientsdetails.cclastfour})
                                        {/if}
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ccinfo" value="new" id="new" {if !$clientsdetails.cclastfour || $ccinfo eq "new"} checked{/if} />
                                        {$LANG.creditcardenternewcard}
                                    </label>
                                </div>
                            </div>
                        </div>
                    {else}
                        <input type="hidden" name="ccinfo" value="new" />
                    {/if}
                    <div id="newCardInfo" class="row{if $clientsdetails.cclastfour && $ccinfo neq "new"} hidden{/if}">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" id="cctype" name="cctype" value="{$acceptedcctypes.0}" />
                                <div class="dropdown" id="cardType">
                                    <button class="btn btn-default dropdown-toggle field" type="button" id="creditCardType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span id="selectedCardType">
                                            <i class="fa {getFontAwesomeCCIcon ccType=$acceptedcctypes.0} fa-fw"></i>
                                            {$acceptedcctypes.0}
                                        </span>
                                        <span class="fa fa-caret-down fa-fw"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="creditCardTypeDropDown" aria-labelledby="creditCardType">
                                        {foreach $acceptedcctypes as $cardType}
                                            <li>
                                                <a href="#">
                                                    <i class="fa {getFontAwesomeCCIcon ccType=$cardType} fa-fw"></i>
                                                    <span class="type">
                                                        {$cardType}
                                                    </span>
                                                </a>
                                            </li>
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardNumber" class="field-icon">
                                    <i class="fa fa-credit-card"></i>
                                </label>
                                <input type="tel" name="ccnumber" id="inputCardNumber" class="field" placeholder="{$LANG.orderForm.cardNumber}" autocomplete="cc-number">
                            </div>
                        </div>
                        {if $showccissuestart}
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputCardStart" class="field-icon">
                                        <i class="fa fa-calendar-check-o"></i>
                                    </label>
                                    <input type="tel" name="ccstartdate" id="inputCardStart" class="field" placeholder="MM / YY ({$LANG.creditcardcardstart})" autocomplete="cc-exp">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputCardIssue" class="field-icon">
                                        <i class="fa fa-asterisk"></i>
                                    </label>
                                    <input type="tel" name="ccissuenum" id="inputCardIssue" class="field" placeholder="{$LANG.creditcardcardissuenum}">
                                </div>
                            </div>
                        {/if}
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardExpiry" class="field-icon">
                                    <i class="fa fa-calendar"></i>
                                </label>
                                <input type="tel" name="ccexpirydate" id="inputCardExpiry" class="field" placeholder="MM / YY{if $showccissuestart} ({$LANG.creditcardcardexpires}){/if}" autocomplete="cc-exp">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardCVV" class="field-icon">
                                    <i class="fa fa-barcode"></i>
                                </label>
                                <input type="tel" name="cccvv" id="inputCardCVV" class="field" placeholder="{$LANG.orderForm.cvv}" autocomplete="cc-cvc">
                            </div>
                        </div>
                    </div>
                    <div id="existingCardInfo" class="row{if !$clientsdetails.cclastfour || $ccinfo eq "new"} hidden{/if}">
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCardCvvExisting" class="field-icon">
                                    <i class="fa fa-barcode"></i>
                                </label>
                                <input type="tel" name="cccvvexisting" id="inputCardCvvExisting" class="field" placeholder="{$LANG.orderForm.cvv}" autocomplete="cc-cvc">
                            </div>
                        </div>
                    </div>
                </div>

		</div>



                {if $shownotesfield}
				<div class="cartbk" style="margin-top: 20px;">
					<div style="height: 60px;border-bottom: 1px solid #dfe3e9;padding: 21px 25px;">
                    <h6>{$LANG.orderForm.additionalNotes}</h6>
               		</div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group" style="margin:25px;">
                                <textarea name="notes" class="field" rows="4" placeholder="{$LANG.ordernotesdescription}" style="border: 1px solid #dfe3e9;padding: 10px;">{$orderNotes}</textarea>
                            </div>
                        </div>
                    </div>
				</div>
                {/if}

                <div class="text-center">
				{if $accepttos}
                <div class="hidden">
                    <input type="checkbox" name="accepttos" id="accepttos" />
                </div>
	            {/if}
                    <button type="submit" id="submit-form" class="hidden">Checkout</button>
                </div>

                {if $servedOverSsl}
                <div class="alert alert-warning checkout-security-msg" style="padding-top: 20px;padding-bottom: 20px;">
                    <i class="fa fa-lock" style="margin-top: -8px;"></i>
                    {$LANG.ordersecure} (<strong>{$ipaddress}</strong>) {$LANG.ordersecure2}
                </div>
                {/if}
  						
 </form>                    
                    </div>


					<div class="col-md-4" id="scrollingPanelContainer">
						
                        <div id="orderSummary" class="cartyp">
                        	<div class="row">
                        		<div class="col-sm-12">
                            	<div class="gwctb">
                            		<span class="pull-left ypbtt"><i class="si si-basket-loaded ypbttb"></i>{$LANG.ordersummary}</span>
                            		<span class="pull-right">
                            		{if $cartitems > 0}
                                    <button type="button" class="qkgwc" id="btnEmptyCart" data-toggle="tooltip" data-placement="top" data-original-title="{$LANG.emptycart}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                            		{/if}
                            		<a href="cart.php" class="qkgwc btn-xs btn jxgm" id="continueShopping" data-toggle="tooltip" data-placement="top" data-original-title="{$LANG.orderForm.continueShopping}">
                                        <i class="fa fa-plus"></i>
                                    </a>
                            		</span>
                            	</div>
{if $cartitems == 0}
	    <div class="view-cart-empty">
	    	<span class="text-center" style="border: 1px solid #ddd;border-radius: 50%;padding: 30px 20px 20px 20px;"><i class="fa fa-shopping-cart" style="font-size: 32px;color: #ddd;"></i></span>
	        <p style="margin-top: 50px;margin-bottom: 0;font-size: 16px;">{$LANG.cartempty}</p>
	    </div>
{else}
                            	
                            		{foreach $products as $num => $product}
                            			<div class="col-sm-12 cartzt">
                            				<div class="row">
                                           		<div class="col-sm-12 mb6">
                                                    <span class="cartcpbt">{$product.productinfo.name}</span>
                                                    {if $showqtyoptions}
                                                    {if $product.allowqty}
                                                    <form method="post" action="cart.php?a=view" style="display: initial;">
                                                        <input type="number" name="qty[{$num}]" value="{$product.qty}" class="form-control text-center xx11" />
                                                        <button type="submit" class="btn btn-xs mt-5">
                                                            {$LANG.orderForm.update}
                                                        </button>
                                                       </form>
                                                    {/if}
                                            		{/if}
                                                    <div class="pull-right item-price">
                                                		<span class="cycle">{$product.pricingtext}</span>
                                            		</div>    
                                            	</div>
                                             	<div class="col-sm-12">   
	                                                {if $product.domain}
	                                                    <span class="text-muted f12">
	                                                        {$product.domain}
	                                                    </span>
	                                                {/if}
	                                                <span class="pull-right">
	                                                	<a href="{$smarty.server.PHP_SELF}?a=confproduct&i={$num}" class="btn btn-link btn-xs c1b"><i class="fa fa-edit"></i></a>
	                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('p','{$num}')"><i class="fa fa-times"></i></button>
	                                                </span>
                                            	</div>
			                                    {foreach key=addonnum item=addon from=$product.addons}
			                                    <div class="col-sm-12 mt5">
                                                    <span class="text-muted">+</span> <span class="addbt">{$addon.name}</span>
                                                    <div class="pull-right item-price">
                                                		<span class="cycle">{$addon.pricingtext}</span>
                                            		</div>    
                                            	</div>
			                                    {/foreach}
                            				</div>
                                    	</div>
                                	{/foreach}

	                                {foreach $addons as $num => $addon}
	                                 		<div class="col-sm-12 cartzt">
	                            				<div class="row">
	                                           		<div class="col-sm-12 mb6">
	                                                    <span class="cartcpbt">{$addon.name}</span>
	                                                    <div class="pull-right item-price">
	                                                		<span class="cycle">{$addon.pricingtext}</span>
	                                            		</div>    
	                                            	</div>
	                                             	<div class="col-sm-12">   
		                                                {if $addon.domainname}
		                                                    <span class="text-muted f12">
		                                                        {$addon.domainname}
		                                                    </span>
		                                                {/if}
		                                                <span class="pull-right">
		                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('a','{$num}')"><i class="fa fa-times"></i></button>
		                                                </span>
	                                            	</div>
	                            				</div>
	                                    	</div>
	                                {/foreach}

	                                {foreach $domains as $num => $domain}
	                                			<div class="col-sm-12 cartzt">
		                            				<div class="row">
		                                           		<div class="col-sm-12 mb6">
		                                                    <span class="cartcpbt">{if $domain.type eq "register"}{$LANG.orderdomainregistration}{else}{$LANG.orderdomaintransfer}{/if}</span>
		                                                    <div class="pull-right item-price">
		                                                		<span class="cycle">
		                                                			{if count($domain.pricing) == 1 || $domain.type == 'transfer'}
					                                                    <span name="{$domain.domain}Price">{$domain.price}</span>
					                                                    <span class="cycle">{$domain.regperiod} {$domain.yearsLanguage}</span>
					                                                    <span class="renewal cycle">
					                                                        {if isset($domain.renewprice)}{lang key='domainrenewalprice'} <span class="renewal-price cycle">{$domain.renewprice->toPrefixed()}{$domain.shortYearsLanguage}{/if}</span>
					                                                    </span>
					                                                {else}
					                                                    <span name="{$domain.domain}Price">{$domain.price}</span>
					                                                    <div class="dropdown">
					                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="{$domain.domain}Pricing" name="{$domain.domain}Pricing" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					                                                            {$domain.regperiod} {$domain.yearsLanguage}
					                                                            <span class="caret"></span>
					                                                        </button>
					                                                        <ul class="dropdown-menu" aria-labelledby="{$domain.domain}Pricing">
					                                                            {foreach $domain.pricing as $years => $price}
					                                                                <li>
					                                                                    <a href="#" onclick="selectDomainPeriodInCart('{$domain.domain}', '{$price.register}', {$years}, '{if $years == 1}{lang key='orderForm.year'}{else}{lang key='orderForm.years'}{/if}');return false;">
					                                                                        {$years} {if $years == 1}{lang key='orderForm.year'}{else}{lang key='orderForm.years'}{/if} @ {$price.register}
					                                                                    </a>
					                                                                </li>
					                                                            {/foreach}
					                                                        </ul>
					                                                    </div>
					                                                    <span class="renewal cycle">
					                                                        {lang key='domainrenewalprice'} <span class="renewal-price cycle">{if isset($domain.renewprice)}{$domain.renewprice->toPrefixed()}{$domain.shortYearsLanguage}{/if}</span>
					                                                    </span>
					                                                {/if}
		                                                		</span>
		                                            		</div>    
		                                            	</div>
		                                             	<div class="col-sm-12">   
			                                                {if $domain.domain}
			                                                    <span class="text-muted f12">
			                                                        {$domain.domain}
			                                                    </span>
			                                                {/if}
			                                                <span class="pull-right">
			                                                	<a href="{$smarty.server.PHP_SELF}?a=confdomains" class="btn btn-link btn-xs c1b"><i class="fa fa-edit"></i></a>
			                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('d','{$num}')"><i class="fa fa-times"></i></button>
			                                                </span>
		                                            	</div>
		                            				</div>
		                                    	</div>
	                                {/foreach}

	                                {foreach key=num item=domain from=$renewals}
	                                			<div class="col-sm-12 cartzt">
		                            				<div class="row">
		                                           		<div class="col-sm-12 mb6">
		                                                    <span class="cartcpbt">{$LANG.domainrenewal}</span>
		                                                    <div class="pull-right item-price">
		                                                		<span class="cycle">
		                                                			{$domain.price}<br>{$domain.regperiod} {$LANG.orderyears}
		                                                		</span>
		                                            		</div>    
		                                            	</div>
		                                             	<div class="col-sm-12">   
			                                                    <span class="text-muted f12">
			                                                        {$domain.domain}
			                                                    </span>
			                                                <span class="pull-right">
			                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('r','{$num}')"><i class="fa fa-times"></i></button>
			                                                </span>
		                                            	</div>
		                            				</div>
		                                    	</div>
	                                {/foreach}

	                                {foreach $upgrades as $num => $upgrade}
	                                				<div class="col-sm-12 cartzt">
			                            				<div class="row">
			                                           		<div class="col-sm-12 mb6">
			                                                    <span class="cartcpbt">
			                                            {if $upgrade->type == 'service'}
	                                                        {$upgrade->originalProduct->name} => {$upgrade->newProduct->name}
	                                                    {elseif $upgrade->type == 'addon'}
	                                                        {$upgrade->originalAddon->name} => {$upgrade->newAddon->name}
	                                                    {/if}
			                                                    </span>
			                                                    <div class="pull-right item-price">
			                                                		<span class="cycle">
			                                                			{$upgrade->creditAmount}
			                                                		</span>
			                                            		</div>    
			                                            	</div>
			                                             	<div class="col-sm-12">   
				                                                    <span class="text-muted f12">
				                                                        {if $upgrade->type == 'service'}
					                                                        {$upgrade->service->domain}
					                                                    {/if}
				                                                    </span>
				                                                <span class="pull-right">
				                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('u','{$num}')"><i class="fa fa-times"></i></button>
				                                                </span>
			                                            	</div>
			                            				</div>
			                                    </div>
	                                {/foreach}
	
	                                
	                                		<div class="col-sm-12 cartxj">
	                            				<div class="row">
	                                           		<div class="col-sm-12 mb6">
	                                           			<span class="cartcpbt" style="font-weight: 300;color: #999999;">{$LANG.ordersubtotal}</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="font-weight: 600;">
	                                                			<span id="recurring">
	                                                				{$subtotal}
	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	<div class="col-sm-12 mb6">
	                                           			<span class="cartcpbt" style="font-weight: 300;color: #999999;">{$LANG.cartxfjgp}</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="font-weight: 600;">
	                                                			<span id="recurring">
	                                                				<span id="recurringMonthly" {if !$totalrecurringmonthly}style="display:none;"{/if}>
							                                            <span class="cost">{$totalrecurringmonthly}</span> {$LANG.orderpaymenttermmonthly}<br />
							                                        </span>
							                                        <span id="recurringQuarterly" {if !$totalrecurringquarterly}style="display:none;"{/if}>
							                                            <span class="cost">{$totalrecurringquarterly}</span> {$LANG.orderpaymenttermquarterly}<br />
							                                        </span>
							                                        <span id="recurringSemiAnnually" {if !$totalrecurringsemiannually}style="display:none;"{/if}>
							                                            <span class="cost">{$totalrecurringsemiannually}</span> {$LANG.orderpaymenttermsemiannually}<br />
							                                        </span>
							                                        <span id="recurringAnnually" {if !$totalrecurringannually}style="display:none;"{/if}>
							                                            <span class="cost">{$totalrecurringannually}</span> {$LANG.orderpaymenttermannually}<br />
							                                        </span>
							                                        <span id="recurringBiennially" {if !$totalrecurringbiennially}style="display:none;"{/if}>
							                                            <span class="cost">{$totalrecurringbiennially}</span> {$LANG.orderpaymenttermbiennially}<br />
							                                        </span>
							                                        <span id="recurringTriennially" {if !$totalrecurringtriennially}style="display:none;"{/if}>
							                                            <span class="cost">{$totalrecurringtriennially}</span> {$LANG.orderpaymenttermtriennially}<br />
							                                        </span>
	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	{if $promotioncode || $taxrate || $taxrate2}
	                                            	{if $promotioncode}
	                                            	<div class="col-sm-12">
	                                           			<span class="cartcpbt" style="font-weight: 300;color: green;">{$promotiondescription}</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="color: green;">
	                                                			省：<span id="recurring" style="font-weight: 600;">
	                                                				{$discount}
	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	{/if}
	                                            	{if $taxrate}
	                                            	<div class="col-sm-12">
	                                           			<span class="cartcpbt" style="font-weight: 300;">{$taxname} @ {$taxrate}%</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="font-weight: 600;">
	                                                			<span id="recurring">
	                                                				{$taxtotal}
	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	{/if}
	                                            	{if $taxrate2}
	                                            	<div class="col-sm-12">
	                                           			<span class="cartcpbt" style="font-weight: 300;">{$taxname2} @ {$taxrate2}%</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="font-weight: 600;">
	                                                			<span id="recurring">
	                                                				{$taxtotal2}
	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	{/if}
	                                            	{/if}
	                            				</div>
	                                    	</div>

									<div class="col-sm-12 jgxja">
										<div class="row">
											<div class="col-sm-12">
												<span class="jgwz">{$LANG.ordertotalduetoday}</span>
												<div id="totalDueToday">{$total}</div>
													{if $promotioncode}
													<div class="input-group">
													<input class="form-control aabbcc" disabled="disabled" type="text" value="{$promotioncode} - {$promotiondescription}">
		                                                    <a href="{$smarty.server.PHP_SELF}?a=removepromo" class="input-group-addon" style="padding: 0 15px;color: #fff;">
		                                                    <i class="fa fa-trash acac"></i></a>
		                                            </div>
				                                    {else}
					                                    <form method="post" action="cart.php?a=view">
					                                    <div class="input-group">
		                                                    <input class="form-control aabbcc" type="text" name="promocode" id="inputPromotionCode" placeholder="{lang key="orderPromoCodePlaceholder"}" required="required">
		                                                    <span class="input-group-addon">
		                                                    <button type="submit" name="validatepromo" value="{$LANG.orderpromovalidatebutton}" class="aaddcc"><i class="fa fa-check" style="font-size: 20px; vertical-align: middle;font-weight: 300;"></i></button></span>
	                                                	</div>
				                                        </form>
				                                    {/if}
											</div>
										</div>
									</div>

									{if $taxenabled && !$loggedin}
									<div class="col-sm-12" style="background-color: #00c0fa;">
										<div class="row">
										<div class="col-sm-12">
									<form method="post" action="cart.php?a=setstateandcountry">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-5">
                                                    <input type="text" name="state" id="inputState" value="{$clientsdetails.state}" placeholder="{$LANG.orderForm.state}" class="form-control"{if $loggedin} disabled="disabled"{/if} style="margin-left: 3px;background-color: #c2dfe9;border-color: #c2dfe9;" />
                                                </div>
                                                <div class="col-sm-4" style="margin-left: -15px;">
                                                    <select name="country" id="inputCountry" class="form-control" style="background-color: #c2dfe9;border-color: #c2dfe9;">
                                                        {foreach $countries as $countrycode => $countrylabel}
                                                            <option value="{$countrycode}"{if (!$country && $countrycode == $defaultcountry) || $countrycode eq $country} selected{/if}>
                                                                {$countrylabel}
                                                            </option>
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            <div class="col-sm-3 text-center" style="margin-left: -10px;">
                                                <button type="submit" class="btn" style="background-image: linear-gradient(160deg,#ff8e2b,#ff6c2c);color: #fff;border-color: #ff812c;">
                                                    {$LANG.orderForm.updateTotals}
                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
									</div></div></div>
									{/if}


{/if}
									<!-- 右边栏外边框div结束标签 -->
                        		</div>		
                        	</div>
                       	</div>
                       <!-- 右边栏结束 -->
                       <p style="margin-top: 25px;">
                       	{if $accepttos}
                       	<div class="form-group">
                <label class="osagreement" for="osagreement">
                    <input type="checkbox" id="osagreement">
                    <span style="vertical-align: middle;margin-left: 6px;">{$LANG.ordertosagreement}
                    <a href="{$tosurl}" target="_blank" style="color: #00C0FA;">{$LANG.ordertos}</a></span>
                </label>
            </div>
            {/if}
             <a {if $cartitems==0}{else}href="javascript:void(0);"{/if} class="btn btn-xlg btn-success btn-submit btn-block cart-next-step"{if $cartitems==0} disabled="disabled"{/if} style="padding: 12px 0;background-image: linear-gradient(160deg,#ff8e2b,#ff6c2c);border-color: transparent;font-weight: 300;font-size: 16px;">
		        	<span>{$LANG.completeorder}</span>
					<i class="zmdi zmdi-long-arrow-right"></i>
            </a> </p> 
					</div>

                
                </div>
            </div>
        </div>

        <form method="post" action="cart.php">
            <input type="hidden" name="a" value="remove" />
            <input type="hidden" name="r" value="" id="inputRemoveItemType" />
            <input type="hidden" name="i" value="" id="inputRemoveItemRef" />
            <div class="modal fade modal-remove-item" id="modalRemoveItem" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="{$LANG.orderForm.close}">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">
                                <i class="fa fa-times fa-3x"></i>
                                <span>{$LANG.orderForm.removeItem}</span>
                            </h4>
                        </div>
                        <div class="modal-body">
                            {$LANG.cartremoveitemconfirm}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$LANG.no}</button>
                            <button type="submit" class="btn btn-primary">{$LANG.yes}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form method="post" action="cart.php">
            <input type="hidden" name="a" value="empty" />
            <div class="modal fade modal-remove-item" id="modalEmptyCart" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="{$LANG.orderForm.close}">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">
                                <i class="fa fa-trash fa-3x"></i>
                                <span>{$LANG.emptycart}</span>
                            </h4>
                        </div>
                        <div class="modal-body">
                            {$LANG.cartemptyconfirm}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$LANG.no}</button>
                            <button type="submit" class="btn btn-primary">{$LANG.yes}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>    


   
    
    
    </div>

<script type="text/javascript" src="{$BASE_PATH_JS}/jquery.payment.js"></script>
