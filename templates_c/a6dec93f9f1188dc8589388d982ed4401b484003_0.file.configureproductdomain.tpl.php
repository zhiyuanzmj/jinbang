<?php
/* Smarty version 3.1.32, created on 2019-10-14 16:36:15
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/configureproductdomain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5da4337fd03a39_08602580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6dec93f9f1188dc8589388d982ed4401b484003' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/configureproductdomain.tpl',
      1 => 1528604500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
  ),
),false)) {
function content_5da4337fd03a39_08602580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<style>
	@media (max-width: 766px) {
		.cart-r {
			margin-right: -15px;
		}
	}
</style>
<div id="order-standard_cart" style="margin-bottom: 80px;">
	<div class="cartbk">
		<div class="text-center carttb">
			<div class="cppztb">
				<i class="fa fa-gears" style="margin-right: 8px;color: #00C0FA;"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartpzcpym'];?>

			</div>
		</div>
		<div class="cart-k">
			<div class="hidden-sm hidden-xs h15"></div>

    <div class="row">

			<div class="cart-l col-sm-2"><i class="si si-globe"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerchoosedomain'];?>
</div>

        <div class="cart-r cpfl col-sm-10">

            <form id="frmProductDomain">
                <input type="hidden" id="frmProductDomainPid" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
" />
                <div class="domain-selection-options">
                    <?php if ($_smarty_tpl->tpl_vars['incartdomains']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="incart" id="selincart" /><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductdomainuseincart'];?>

                            </label>
                            <div class="domain-input-group clearfix" id="domainincart">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-1 col-md-6 col-md-offset-2">
                                        <div class="domains-row">
                                            <select id="incartsld" name="incartdomain" class="form-control">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['incartdomains']->value, 'incartdomain', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['incartdomain']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['use'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="register" id="selregister"<?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "register") {?> checked<?php }?> /><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['cartregisterdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value ));?>

                            </label>
                            <div class="domain-input-group clearfix" id="domainregister">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-1">
                                        <div class="row domains-row">
                                            <div class="col-xs-9">
                                                <div class="input-group">
                                                    <input type="text" id="registersld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
" />
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <select id="registertld" class="form-control">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['registertlds']->value, 'listtld');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value == $_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['check'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="transfer" id="seltransfer"<?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "transfer") {?> checked<?php }?> /><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['carttransferdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value ));?>

                            </label>
                            <div class="domain-input-group clearfix" id="domaintransfer">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-1">
                                        <div class="row domains-row">
                                            <div class="col-xs-9">
                                                <div class="input-group">
                                                    <input type="text" id="transfersld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
"/>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <select id="transfertld" class="form-control">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transfertlds']->value, 'listtld');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value == $_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['transfer'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['owndomainenabled']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="owndomain" id="selowndomain"<?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "owndomain") {?> checked<?php }?> /><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['cartexistingdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value ));?>

                            </label>
                            <div class="domain-input-group clearfix" id="domainowndomain">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="row domains-row">
                                            <div class="col-xs-7">
                                                <input type="text" id="owndomainsld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['yourdomainplaceholder'];?>
" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
" />
                                            </div>
                                            <div class="col-xs-5">
                                                <input type="text" id="owndomaintld" value="<?php echo substr($_smarty_tpl->tpl_vars['tld']->value,1);?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['yourtldplaceholder'];?>
" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block" id="useOwnDomain">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['use'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['subdomains']->value) {?>
                        <div class="option">
                            <label>
                                <input type="radio" name="domainoption" value="subdomain" id="selsubdomain"<?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "subdomain") {?> checked<?php }?> /><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sprintf2' ][ 0 ], array( $_smarty_tpl->tpl_vars['LANG']->value['cartsubdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value ));?>

                            </label>
                            <div class="domain-input-group clearfix" id="domainsubdomain">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="row domains-row">
                                            <div class="col-xs-7">
                                                <input type="text" id="subdomainsld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" placeholder="yourname" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
" />
                                            </div>
                                            <div class="col-xs-5">
                                                <select id="subdomaintld" class="form-control">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subdomains']->value, 'subdomain', false, 'subid');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subid']->value => $_smarty_tpl->tpl_vars['subdomain']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['subid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subdomain']->value;?>
</option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['check'];?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['freedomaintlds']->value) {?>
                    <p>* <em><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainregistration'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainappliesto'];?>
: <?php echo $_smarty_tpl->tpl_vars['freedomaintlds']->value;?>
</em></p>
                <?php }?>

            </form>

            <div class="clearfix"></div>
            <form method="post" action="cart.php?a=add&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
&domainselect=1" id="frmProductDomainSelections">

                <div id="DomainSearchResults" class="hidden">

                    <div id="searchDomainInfo">
                        <p id="primaryLookupSearching" class="domain-lookup-loader domain-lookup-primary-loader domain-searching domain-checker-result-headline">
                            <i class="fa fa-spinner fa-spin"></i>
                            <span class="domain-lookup-register-loader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.checkingAvailability'),$_smarty_tpl ) );?>
...</span>
                            <span class="domain-lookup-transfer-loader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.verifyingTransferEligibility'),$_smarty_tpl ) );?>
...</span>
                            <span class="domain-lookup-other-loader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.verifyingDomain'),$_smarty_tpl ) );?>
...</span>
                        </p>
                        <div id="primaryLookupResult" class="domain-lookup-result domain-lookup-primary-results hidden">
                            <div class="domain-unavailable domain-checker-unavailable headline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainIsUnavailable'),$_smarty_tpl ) );?>
</div>
                            <div class="domain-available domain-checker-available headline"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable1'];?>
 <strong></strong> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable2'];?>
</div>
                            <div class="btn btn-primary domain-contact-support headline"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainContactUs'];?>
</div>
                            <div class="transfer-eligible">
                                <p class="domain-checker-available headline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferEligible'),$_smarty_tpl ) );?>
</p>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferUnlockBeforeContinuing'),$_smarty_tpl ) );?>
</p>
                            </div>
                            <div class="transfer-not-eligible">
                                <p class="domain-checker-unavailable headline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferNotEligible'),$_smarty_tpl ) );?>
</p>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferNotRegistered'),$_smarty_tpl ) );?>
</p>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.trasnferRecentlyRegistered'),$_smarty_tpl ) );?>
</p>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferAlternativelyRegister'),$_smarty_tpl ) );?>
</p>
                            </div>
                            <div class="domain-invalid">
                                <p class="domain-checker-unavailable headline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainInvalid'),$_smarty_tpl ) );?>
</p>
                                <p>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainLetterOrNumber'),$_smarty_tpl ) );?>
<span class="domain-length-restrictions"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainLengthRequirements'),$_smarty_tpl ) );?>
</span><br />
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainInvalidCheckEntry'),$_smarty_tpl ) );?>

                                </p>
                            </div>
                            <div class="domain-price">
                                <span class="register-price-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainPriceRegisterLabel'),$_smarty_tpl ) );?>
</span>
                                <span class="transfer-price-label hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainPriceTransferLabel'),$_smarty_tpl ) );?>
</span>
                                <span class="price"></span>
                            </div>
                            <input type="hidden" id="resultDomainOption" name="domainoption" />
                            <input type="hidden" id="resultDomain" name="domains[]" />
                            <input type="hidden" id="resultDomainPricingTerm" />
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['spotlightTlds']->value) {?>
                            <div id="spotlightTlds" class="spotlight-tlds clearfix hidden">
                                <div class="spotlight-tlds-container">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spotlightTlds']->value, 'data', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['data']->value) {
?>
                                        <div class="spotlight-tld-container spotlight-tld-container-<?php echo count($_smarty_tpl->tpl_vars['spotlightTlds']->value);?>
">
                                            <div id="spotlight<?php echo $_smarty_tpl->tpl_vars['data']->value['tldNoDots'];?>
" class="spotlight-tld">
                                                <?php if ($_smarty_tpl->tpl_vars['data']->value['group']) {?>
                                                    <div class="spotlight-tld-<?php echo $_smarty_tpl->tpl_vars['data']->value['group'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['groupDisplayName'];?>
</div>
                                                <?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['data']->value['tld'];?>

                                                <span class="domain-lookup-loader domain-lookup-spotlight-loader">
                                                    <i class="fa fa-spinner fa-spin"></i>
                                                </span>
                                                <div class="domain-lookup-result">
                                                    <button type="button" class="btn unavailable hidden" disabled="disabled">
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainunavailable'),$_smarty_tpl ) );?>

                                                    </button>
                                                    <button type="button" class="btn invalid hidden" disabled="disabled">
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainunavailable'),$_smarty_tpl ) );?>

                                                    </button>
                                                    <span class="available price hidden"><?php echo $_smarty_tpl->tpl_vars['data']->value['register'];?>
</span>
                                                    <button type="button" class="btn hidden btn-add-to-cart product-domain" data-whois="0" data-domain="">
                                                        <span class="to-add"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.add'),$_smarty_tpl ) );?>
</span>
                                                        <span class="added"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincheckeradded'),$_smarty_tpl ) );?>
</span>
                                                        <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary domain-contact-support hidden">Contact Support to Purchase</button>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        <?php }?>

                        <div class="suggested-domains hidden">
                            <div class="panel-heading">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.suggestedDomains'),$_smarty_tpl ) );?>

                            </div>
                            <div id="suggestionsLoader" class="panel-body domain-lookup-loader domain-lookup-suggestions-loader">
                                <i class="fa fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.generatingSuggestions'),$_smarty_tpl ) );?>

                            </div>
                            <ul id="domainSuggestions" class="domain-lookup-result list-group hidden">
                                <li class="domain-suggestion list-group-item hidden">
                                    <span class="domain"></span><span class="extension"></span>
                                    <button type="button" class="btn btn-add-to-cart product-domain" data-whois="1" data-domain="">
                                        <span class="to-add"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>
</span>
                                        <span class="added"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincheckeradded'),$_smarty_tpl ) );?>
</span>
                                        <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                                    </button>
                                    <button type="button" class="btn btn-primary domain-contact-support hidden">Contact Support to Purchase</button>
                                    <span class="price"></span>
                                    <span class="promo hidden"></span>
                                </li>
                            </ul>
                            <div class="panel-footer more-suggestions hidden text-center">
                                <a id="moreSuggestions" href="#" onclick="loadMoreSuggestions();return false;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainsmoresuggestions'),$_smarty_tpl ) );?>
</a>
                                <span id="noMoreSuggestions" class="no-more small hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domaincheckernomoresuggestions'),$_smarty_tpl ) );?>
</span>
                            </div>
                            <div class="text-center text-muted domain-suggestions-warning">
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainssuggestionswarnings'),$_smarty_tpl ) );?>
</p>
                            </div>
                        </div>
                    <?php }?>
                </div>

                <div class="text-center">
                    <button id="btnDomainContinue" type="submit" class="btn btn-primary btn-lg hidden" disabled="disabled">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>

                        &nbsp;<i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </form>

			<div style="height: 20px;"></div>
        </div>

    </div>


</div>

	</div>
</div>
<?php }
}
