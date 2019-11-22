<div class="u-p-medium">
	{if !$status}

	    {include file="$template/includes/alert.tpl" type="warning" msg=$LANG.sslinvalidlink textcenter=true}
	
	    <p class="text-center"><input type="button" value="{$LANG.clientareabacklink}" onclick="history.go(-1)" class="btn btn-primary" /></p>
	
	{else}
	
	    {if $errormessage}
	        {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage}
	    {/if}
	
	    {if $status eq "Awaiting Configuration"}
	
	        <form method="post" action="{$smarty.server.PHP_SELF}?cert={$cert}&step=2">
	
	            {include file="$template/includes/subheader.tpl" title=$LANG.sslserverinfo}
	
	            <p>{$LANG.sslserverinfodetails}</p>
	
	            <div class="form-group">
	                <label for="inputServerType">{$LANG.sslservertype}</label>
	                <select name="servertype" id="inputServerType" class="form-control">
	                    <option value="" selected>{$LANG.pleasechooseone}</option>
	                    {foreach from=$webservertypes key=webservertypeid item=webservertype}
	                        <option value="{$webservertypeid}"{if $servertype eq $webservertypeid} selected{/if}>
	                            {$webservertype}
	                        </option>
	                    {/foreach}
	                </select>
	            </div>
	
	            <div class="form-group">
	                <label for="inputCsr">{$LANG.sslcsr}</label>
	                <textarea name="csr" id="inputCsr" rows="7" class="form-control">{if $csr}-----BEGIN CERTIFICATE REQUEST-----
MIICvTCCAaUCAQAweDELMAkGA1UEBhMCR0IxEDAOBgNVBAgTB0VuZ2xhbmQxDzAN
BgNVBAcTBkxvbmRvbjEZMBcGA1UEChMQTW9kdWxlc09jZWFuIEluYzEQMA4GA1UE
CxMHSVQgRGVwdDEZMBcGA1UEAxMQbW9kdWxlc29jZWFuLmNvbTCCASIwDQYJKoZI
hvcNAQEBBQADggEPADCCAQoCggEBAOEA5KnWVB/oWJHk5SdP5U7YpkPP7SSVmHyQ
NG7FIOFNlhQFQ8WCERnofcx/i+jpg23IfPILBTebt1Qv54nFTwVWeqzj2Q95G6/9
Dq3cjolk2tVyziT3ImNyxdjMzk9R8luJJ8IHtIsDLfe7388mAEuaU78Lwk8uBclD
zUeuexTCvPTiav4weJ8BmmPcu3P/tUYdjjhAyLw+3Ju5U52mwU2hP45Jc1RKDhB0
kAI8Ow6xEqdKTDthLf9jMjyQjPgj+XfrflKqztZqbuKWeIgjQ83X3Q6FZ7rEpfJz
+0yJup6dh7JhdEZaUGljOQudKFX0cEe0fSnonWvM7/O7ekcnfBcCAwEAAaAAMA0G
CSqGSIb3DQEBCwUAA4IBAQAWqREfoPDZ6spVBC4eMlQYv7aMjQCa7vDlzN6yPIcQ
3ejRxAOB+XGyTEOYW61pxjr3cfh6bX5CUZAcR8s+/7/Ic3itfaarF7VICIRZs4Bw
9G79kS1oUu7lT0X4PL4lmFpsQ9Q9ho94VT1rXK8LksqTS+Vmn6uM+VODUKkLvKwR
8aczhItVdUmof3kuamtvZJ/kKVt/L1VuVy3xSMOMcudSVccUfO+h5OnwAApxCrNg
/Mft0KIfBX1cbewl0dSartdAyHDO2VEt7US7nyW0RCbAberXtxSggSQUa2ya8l4E
c5lOiq2YcxTyVzo2u7QRHZMbquFgCbwL5rhXkY1FjbXM
-----END CERTIFICATE REQUEST-----{else}-----BEGIN CERTIFICATE REQUEST-----
	-----END CERTIFICATE REQUEST-----{/if}</textarea>
	            </div>
	
	            {foreach from=$additionalfields key=heading item=fields}
	                <p><strong>{$heading}</strong></p>
	                <fieldset class="form-horizontal">
	                    {foreach from=$fields item=vals}
	                        <div class="form-group">
	                            <label class="col-md-4 control-label" for="inputAdditionalField">{$vals.name}</label>
	                            <div class="col-md-8">
	                                {$vals.input} {$vals.description}
	                            </div>
	                        </div>
	                    {/foreach}
	                </fieldset>
	            {/foreach}
	
	            {include file="$template/includes/subheader.tpl" title=$LANG.ssladmininfo}
	
	            <p>{$LANG.ssladmininfodetails}</p>
	
	            <fieldset class="form-horizontal">
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputFirstName">{$LANG.clientareafirstname}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="firstname" id="inputFirstName" value="{$firstname}" />
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputLastName">{$LANG.clientarealastname}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="lastname" id="inputLastName" value="{$lastname}" />
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputOrgName">{$LANG.organizationname}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="orgname" id="inputOrgName" value="{$orgname}" />
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputJobTitle">{$LANG.jobtitle}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="jobtitle" id="inputJobTitle" value="{$jobtitle}" />
	                        <p class="help-block">{$LANG.jobtitlereqforcompany}</p>
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputEmail">{$LANG.clientareaemail}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="email" id="inputEmail" value="{$email}" />
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputAddress1">{$LANG.clientareaaddress1}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="address1" id="inputAddress1" value="{$address1}" />
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputAddress2">{$LANG.clientareaaddress2}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="address2" id="inputAddress2" value="{$address2}" />
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputCity">{$LANG.clientareacity}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="city" id="inputCity" value="{$city}" />
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputState">{$LANG.clientareastate}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="state" id="inputState" value="{$state}" />
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputPostcode">{$LANG.clientareapostcode}</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" name="postcode" id="inputPostcode" value="{$postcode}" />
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputCountry">{$LANG.clientareacountry}</label>
	                    <div class="col-sm-8">
	                    <select name="country" id="inputCountry" class="form-control">
	                        {foreach from=$clientcountries item=thisCountryName key=thisCountryCode}
	                            <option value="{$thisCountryCode}" {if $thisCountryCode eq $country}selected="selected"{/if}>{$thisCountryName}</option>
	                        {/foreach}
	                    </select>
	                    </div>
	                </div>
	
	                <div class="form-group">
	                    <label class="col-sm-4 control-label" for="inputPhoneNumber">{$LANG.clientareaphonenumber}</label>
	                    <div class="col-sm-8">
	                        <input type="tel" class="form-control" name="phonenumber" id="inputPhoneNumber" value="{$phonenumber}" />
	                    </div>
	                </div>
	
	            </fieldset>
	
	            <p class="text-center">
	                <input type="submit" value="{$LANG.ordercontinuebutton}" class="btn btn-primary" />
	            </p>
	
	        </form>
	
	    {else}
	
	        {include file="$template/includes/alert.tpl" type="info" msg=$LANG.sslnoconfigurationpossible textcenter=true}
	
	        <form method="post" action="clientarea.php?action=productdetails">
	            <input type="hidden" name="id" value="{$serviceid}" />
	            <p>
	            <input type="submit" value="{$LANG.invoicesbacktoclientarea}" class="btn btn-default" /></p>
	        </form>
	
	    {/if}
	
	{/if}
</div>