<h1 class="h3 text-center" style="color: #656565;">Create Account</h1>
{if in_array('state', $optionalFields)}
    <script>
        var statesTab = 10;
        var stateNotRequired = true;
    </script>
{/if}

<script type="text/javascript" src="{$BASE_PATH_JS}/StatesDropdown.js"></script>
<script type="text/javascript" src="{$BASE_PATH_JS}/PasswordStrength.js"></script>
<script>
    window.langPasswordStrength = "{$LANG.pwstrength}";
    window.langPasswordWeak = "{$LANG.pwstrengthweak}";
    window.langPasswordModerate = "{$LANG.pwstrengthmoderate}";
    window.langPasswordStrong = "{$LANG.pwstrengthstrong}";
    jQuery(document).ready(function()
    {
        jQuery("#inputNewPassword1").keyup(registerFormPasswordStrengthFeedback);
    });
</script>
{if $registrationDisabled}
    {include file="$template/includes/alert.tpl" type="error" msg=$LANG.registerCreateAccount|cat:' <strong><a href="cart.php" class="alert-link">'|cat:$LANG.registerCreateAccountOrder|cat:'</a></strong>'}
{/if}

{if $errormessage}
    {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage}
{/if}

{if !$registrationDisabled}
    <form method="post" class="js-validation-register form-horizontal push-30-t push-50 using-password-strength" action="{$smarty.server.PHP_SELF}" role="form" name="orderfrm" id="frmCheckout">
        <input type="hidden" name="register" value="true"/>

        <div id="containerNewUserSignup">

            {include file="$template/includes/linkedaccounts.tpl" linkContext="registration"}
            					<div class="form-group">
                                    <div class="col-xs-6">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="lastname" id="inputLastName" class="form-control" value="{$clientlastname}" {if !in_array('lastname', $optionalFields)}required{/if}>
                                            <label for="inputLastName" style="color: #767676;">{$LANG.orderForm.lastName}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="firstname" id="inputFirstName" class="field form-control" value="{$clientfirstname}" {if !in_array('firstname', $optionalFields)}required{/if}>
                                            <label for="inputFirstName" style="color: #767676;">{$LANG.orderForm.firstName}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="email" name="email" id="inputEmail" class="form-control" value="{$clientemail}">
                                            <label for="inputEmail" style="color: #767676;">{$LANG.orderForm.emailAddress}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="tel" name="phonenumber" id="inputPhone" class="form-control" value="{$clientphonenumber}">
                                            <label for="inputPhone" style="color: #767676;"></label>
                                        </div>
                                    </div>
                                </div>
							
							<div{if $LANG.hid eq "1"} style="display: none;"{/if}>
								<div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="companyname" id="inputCompanyName" class="form-control" value="{$clientcompanyname}">
                                            <label for="inputCompanyName" style="color: #767676;">{$LANG.orderForm.companyName} ({$LANG.orderForm.optional})</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="address1" id="inputAddress1" class="form-control" value="{if $LANG.hid eq "1"}{$LANG.dz1}{else}{$clientaddress1}{/if}"  {if !in_array('address1', $optionalFields)}required{/if}>
                                            <label for="inputAddress1" style="color: #767676;">{$LANG.orderForm.streetAddress}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="address2" id="inputAddress2" class="form-control" value="{$clientaddress2}">
                                            <label for="inputAddress2" style="color: #767676;">{$LANG.orderForm.streetAddress2}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="city" id="inputCity" class="form-control" value="{if $LANG.hid eq "1"}{$LANG.cs}{else}{$clientcity}{/if}"  {if !in_array('city', $optionalFields)}required{/if}>
                                            <label for="inputCity" style="color: #767676;">{$LANG.orderForm.city}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="state" id="state" class="form-control" value="{if $LANG.hid eq "1"}{$LANG.sf}{else}{$clientstate}{/if}"  {if !in_array('state', $optionalFields)}required{/if}>
                                            <label for="state" style="color: #767676;">{$LANG.orderForm.state}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="postcode" id="inputPostcode" class="form-control" value="{if $LANG.hid eq "1"}{$LANG.yb}{else}{$clientpostcode}{/if}" {if !in_array('postcode', $optionalFields)}required{/if}>
                                            <label for="inputPostcode" style="color: #767676;">{$LANG.orderForm.postcode}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                	<div class="col-xs-12">
				                        <select name="country" id="inputCountry" class="form-control">
				                            {foreach $clientcountries as $countryCode => $countryName}
				                                <option value="{$countryCode}"{if (!$clientcountry && $countryCode eq $defaultCountry) || ($countryCode eq $clientcountry)} selected="selected"{/if}>
				                                    {$countryName}
				                                </option>
				                            {/foreach}
				                        </select>
                        			</div>
                    			</div>
							</div>
		{if $customfields || $currencies}
     			{if $customfields}
                {foreach $customfields as $customfield}
                        <div class="form-group">
                        	<div class="col-xs-12">
                            <div class="control">
                                {$customfield.input}
                                <label for="customfield{$customfield.id}">{$customfield.name}</label>
                            {if $customfield.description}
                                <span class="field-help-text">{$customfield.description}</span>
                            {/if}
                            </div>
                           </div>
                        </div>
                {/foreach}
                {/if}
                {if $currencies}
                <div class="form-group">
                    <div class="col-xs-12">
                        <select id="inputCurrency" name="currency" class="form-control">
                            {foreach from=$currencies item=curr}
                                <option value="{$curr.id}"{if !$smarty.post.currency && $curr.default || $smarty.post.currency eq $curr.id } selected{/if}>{$curr.code}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                {/if}
        		{/if}
        <div id="containerNewUserSecurity" {if $remote_auth_prelinked && !$securityquestions } class="hidden"{/if}>
            <div id="containerPassword" class="{if $remote_auth_prelinked && $securityquestions} hidden{/if}">
                <div id="passwdFeedback" style="display: none;" class="alert alert-info text-center col-sm-12"></div>
        
                <div class="form-group">
                    <div class="col-xs-12">
                    	<div class="form-material form-material-primary floating">
                        <input type="password" name="password" id="inputNewPassword1" data-error-threshold="{$pwStrengthErrorThreshold}" data-warning-threshold="{$pwStrengthWarningThreshold}" class="form-control" autocomplete="off"{if $remote_auth_prelinked} value="{$password}"{/if}>
                        <label for="inputNewPassword1" style="color: #767676;">{$LANG.clientareapassword}</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                                    <div class="col-xs-12" style="margin-bottom: -15px;">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="password" name="password2" id="inputNewPassword2" class="form-control" autocomplete="off"{if $remote_auth_prelinked} value="{$password}"{/if} />
                                        	<label for="inputNewPassword2" style="color: #767676;">{$LANG.clientareaconfirmpassword}</label>
                                        </div>
                                    </div>
                </div>
                    <div class="progress" style="margin-bottom: 35px;">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                        </div>
                    </div>
            </div>
            	
            {if $securityquestions}
                <div class="form-group">
                	<div class="col-xs-12">
                    <select name="securityqid" id="inputSecurityQId" class="form-control">
                        <option value="">{$LANG.clientareasecurityquestion}</option>
                        {foreach $securityquestions as $question}
                            <option value="{$question.id}"{if $question.id eq $securityqid} selected{/if}>
                                {$question.question}
                            </option>
                        {/foreach}
                    </select>
                	</div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="password" name="securityqans" id="inputSecurityQAns" class="form-control" autocomplete="off">
                        <label for="inputSecurityQAns" style="color: #767676;">{$LANG.clientareasecurityanswer}</label>
                    </div>
                </div>
            {/if}
        </div>

        {include file="$template/includes/captcha2.tpl"}

        {if $accepttos}
        						<div class="form-group">
                                    <div class="col-xs-7 col-sm-8">
                                        <label class="css-input switch switch-sm switch-success">
                                            <input type="checkbox" name="accepttos"><span></span> {$LANG.ordertosagreement}
                                        </label>
                                    </div>
                                    <div class="col-xs-5 col-sm-4">
                                        <div class="font-s13 text-right push-5-t">
                                            <a href="{$tosurl}" target="_blank" style="color: #00AAFF;">{$LANG.ordertos}</a>
                                        </div>
                                    </div>
                                </div>
        {/if}
        						<div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-sm btn-block btn-primary" type="submit">{$LANG.clientregistertitle}</button>
                                    </div>
                               </div>
    </form>
{/if}
