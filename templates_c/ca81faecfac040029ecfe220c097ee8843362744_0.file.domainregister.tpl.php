<?php
/* Smarty version 3.1.32, created on 2019-10-09 23:56:03
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/domainregister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e0313031438_63180320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca81faecfac040029ecfe220c097ee8843362744' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/domainregister.tpl',
      1 => 1527776402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
  ),
),false)) {
function content_5d9e0313031438_63180320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div id="order-standard_cart" style="margin-bottom: 70px;">

<div class="cartbk">
		<div class="text-center carttb">
			<a href="cart.php" class="fl <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>col-sm-4 col-xs-4<?php } else { ?>col-sm-6 col-xs-6<?php }
} else { ?>col-sm-6 col-xs-6<?php }?>">
				<?php echo $_smarty_tpl->tpl_vars['LANG']->value['gwczjcp'];?>

			</a>
			<?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value && $_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>
							<a href="cart.php?a=add&domain=register" class="flac <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>col-sm-4 col-xs-4<?php } else { ?>col-sm-6 col-xs-6<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>
</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
							<a href="cart.php?a=add&domain=register" class="flac <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>col-sm-4 col-xs-4<?php } else { ?>col-sm-6 col-xs-6<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>
</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>
							<a href="cart.php?a=add&domain=transfer" class="fl <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>col-sm-4 col-xs-4<?php } else { ?>col-sm-6 col-xs-6<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertransferdomain'];?>
</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
			<a href="cart.php?gid=addons" class="fl <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>col-sm-4 col-xs-4<?php } else { ?>col-sm-6 col-xs-6<?php }?>">
				<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartaddons'];?>

			</a>
			<?php }?>
		</div>

		<div class="hidden-sm hidden-xs h20"></div>
		<div class="cart-k">
			<div class="hidden-sm hidden-xs h15"></div>
			<div class="row">
			<div class="cart-l col-sm-2"><i class="fa fa-clone"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['gwcbt1'];?>
</div>
			<div class="cart-r cpfl col-sm-10">
				<ul class="nav nav-tabs">
					<?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
					<li<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "domainregister") {?> class="active"<?php }?>>
						<a href="cart.php?a=add&domain=register"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>
</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>
					<li<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "domaintransfer") {?> class="active"<?php }?>>
						<a href="cart.php?a=add&domain=transfer"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertransferdomain'];?>
</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
					<li<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "domainrenewals") {?> class="active"<?php }?>>
						<a href="cart.php?a=add&domain=renewals"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenew'];?>
</a>
					</li>
					<?php }?>
				</ul>
			</div>
			</div>
			<div class="hidden-sm hidden-xs h15"></div>
		</div>	
    <div class="row" style="margin: 40px 20px; ">
      <div class="col-md-12">


            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['findNewDomain'];?>
</p>

            <div class="domain-checker-container">
                <div class="domain-checker-bg clearfix">
                    <form method="post" action="cart.php" id="frmDomainChecker">
                        <input type="hidden" name="a" value="checkDomain">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                                <div class="input-group input-group-lg input-group-box">
                                    <input type="text" name="domain" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lookupTerm']->value;?>
" id="inputDomain" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainOrKeyword'),$_smarty_tpl ) );?>
" />
                                    <span class="input-group-btn">
                                        <button type="submit" id="btnCheckAvailability" class="btn btn-primary domain-check-availability"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
                            <div class="captcha-container" id="captchaContainer">
                                <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
                                    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
                                    <div id="google-recaptcha" class="g-recaptcha center-block" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['reCaptchaPublicKey']->value;?>
" data-toggle="tooltip" data-placement="left" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" ></div>
                                <?php } else { ?>
                                    <div class="default-captcha default-captcha-register-margin">
                                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cartSimpleCaptcha"),$_smarty_tpl ) );?>
</p>
                                        <div>
                                            <img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />
                                            <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control input-sm" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    </form>
                </div>
            </div>

            <div id="DomainSearchResults" class="hidden">

                <div id="searchDomainInfo" class="domain-checker-result-headline">
                    <p id="primaryLookupSearching" class="domain-lookup-loader domain-lookup-primary-loader domain-searching"><i class="fa fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.searching'),$_smarty_tpl ) );?>
...</p>
                    <div id="primaryLookupResult" class="domain-lookup-result hidden">
                        <p class="domain-invalid domain-checker-invalid"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainLetterOrNumber'),$_smarty_tpl ) );?>
<span class="domain-length-restrictions"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainLengthRequirements'),$_smarty_tpl ) );?>
</span></p>
                        <p class="domain-unavailable domain-checker-unavailable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.domainIsUnavailable'),$_smarty_tpl ) );?>
</p>
                        <p class="domain-available domain-checker-available"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable1'];?>
 <strong></strong> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable2'];?>
</p>
                        <a class="domain-contact-support btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainContactUs'];?>
</a>
                        <p class="domain-price">
                            <span class="price"></span>
                            <button class="btn btn-primary btn-add-to-cart" data-whois="0" data-domain="">
                                <span class="to-add"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>
</span>
                                <span class="added"><i class="glyphicon glyphicon-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'checkout'),$_smarty_tpl ) );?>
</span>
                                <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                            </button>
                        </p>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['spotlightTlds']->value) {?>
                    <div id="spotlightTlds" class="spotlight-tlds clearfix">
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
                                            <button type="button" class="btn hidden btn-add-to-cart" data-whois="0" data-domain="">
                                                <span class="to-add"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.add'),$_smarty_tpl ) );?>
</span>
                                                <span class="added"><i class="glyphicon glyphicon-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'checkout'),$_smarty_tpl ) );?>
</span>
                                                <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                                            </button>
                                            <button type="button" class="btn btn-primary domain-contact-support hidden">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainChecker.contactSupport'),$_smarty_tpl ) );?>

                                            </button>
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

                <div class="suggested-domains<?php if (!$_smarty_tpl->tpl_vars['showSuggestionsContainer']->value) {?> hidden<?php }?>">
                    <div class="panel-heading">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.suggestedDomains'),$_smarty_tpl ) );?>

                    </div>
                    <div id="suggestionsLoader" class="panel-body domain-lookup-loader domain-lookup-suggestions-loader">
                        <i class="fa fa-spinner fa-spin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.generatingSuggestions'),$_smarty_tpl ) );?>

                    </div>
                    <ul id="domainSuggestions" class="domain-lookup-result list-group hidden">
                        <li class="domain-suggestion list-group-item hidden">
                            <span class="domain"></span><span class="extension"></span>
                            <span class="promo hidden">
                                <span class="sales-group-hot hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCheckerSalesGroup.hot'),$_smarty_tpl ) );?>
</span>
                                <span class="sales-group-new hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCheckerSalesGroup.new'),$_smarty_tpl ) );?>
</span>
                                <span class="sales-group-sale hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainCheckerSalesGroup.sale'),$_smarty_tpl ) );?>
</span>
                            </span>
                            <div class="actions">
                                <span class="price"></span>
                                <button type="button" class="btn btn-add-to-cart" data-whois="1" data-domain="">
                                    <span class="to-add"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>
</span>
                                    <span class="added"><i class="glyphicon glyphicon-shopping-cart"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'checkout'),$_smarty_tpl ) );?>
</span>
                                    <span class="unavailable"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckertaken'];?>
</span>
                                </button>
                                <button type="button" class="btn btn-primary domain-contact-support hidden">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainChecker.contactSupport'),$_smarty_tpl ) );?>

                                </button>
                            </div>
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

            </div>

            <div class="domain-pricing">

                <?php if ($_smarty_tpl->tpl_vars['featuredTlds']->value) {?>
                    <div class="featured-tlds-container">
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['featuredTlds']->value, 'tldinfo', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['tldinfo']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['num']->value%3 == 0 && (count($_smarty_tpl->tpl_vars['featuredTlds']->value)-$_smarty_tpl->tpl_vars['num']->value < 3)) {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['featuredTlds']->value)-$_smarty_tpl->tpl_vars['num']->value == 2) {?>
                                        <div class="col-sm-2"></div>
                                    <?php } else { ?>
                                        <div class="col-sm-4"></div>
                                    <?php }?>
                                <?php }?>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="featured-tld">
                                        <div class="img-container">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/tld_logos/<?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['tldNoDots'];?>
.png">
                                        </div>
                                        <div class="price <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['tldNoDots'];?>
">
                                            <?php if (is_object($_smarty_tpl->tpl_vars['tldinfo']->value['register'])) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['tldinfo']->value['register']->toPrefixed();
if ($_smarty_tpl->tpl_vars['tldinfo']->value['period'] > 1) {
ob_start();
echo $_smarty_tpl->tpl_vars['tldinfo']->value['period'];
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYears",'years'=>$_prefixVariable1),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.shortPerYear",'years'=>''),$_smarty_tpl ) );
}?>
                                            <?php } else { ?>
                                                N/A
                                            <?php }?></div>
                                    </div>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                <?php }?>

                <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.browseExtByCategory'),$_smarty_tpl ) );?>
</h4>

                <div class="tld-filters">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoriesWithCounts']->value, 'count', false, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['count']->value) {
?>
                        <a href="#" data-category="<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" class="label label-default"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)</a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <div class="row tld-pricing-header text-center">
                    <div class="col-sm-4 no-bg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderdomain'),$_smarty_tpl ) );?>
</div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-xs-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.register'),$_smarty_tpl ) );?>
</div>
                            <div class="col-xs-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.transfer'),$_smarty_tpl ) );?>
</div>
                            <div class="col-xs-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.renewal'),$_smarty_tpl ) );?>
</div>
                        </div>
                    </div>
                </div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pricing']->value['pricing'], 'price', false, 'tld');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tld']->value => $_smarty_tpl->tpl_vars['price']->value) {
?>
                    <div class="row tld-row" data-category="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value['categories'], 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>|<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
|<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
                        <div class="col-sm-4 two-row-center">
                            <strong>.<?php echo $_smarty_tpl->tpl_vars['tld']->value;?>
</strong>
                            <?php if ($_smarty_tpl->tpl_vars['price']->value['group']) {?>
                                <span class="tld-sale-group tld-sale-group-<?php echo $_smarty_tpl->tpl_vars['price']->value['group'];?>
"><?php echo $_smarty_tpl->tpl_vars['price']->value['group'];?>
!</span>
                            <?php }?>
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <?php if (current($_smarty_tpl->tpl_vars['price']->value['register']) >= 0) {?>
                                        <?php echo current($_smarty_tpl->tpl_vars['price']->value['register']);?>
<br>
                                        <small><?php echo key($_smarty_tpl->tpl_vars['price']->value['register']);?>
 <?php if (key($_smarty_tpl->tpl_vars['price']->value['register']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                                    <?php } else { ?>
                                        <small>N/A</small>
                                    <?php }?>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <?php if (current($_smarty_tpl->tpl_vars['price']->value['transfer']) > 0) {?>
                                        <?php echo current($_smarty_tpl->tpl_vars['price']->value['transfer']);?>
<br>
                                        <small><?php echo key($_smarty_tpl->tpl_vars['price']->value['transfer']);?>
 <?php if (key($_smarty_tpl->tpl_vars['price']->value['register']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                                    <?php } else { ?>
                                        <small>N/A</small>
                                    <?php }?>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <?php if (current($_smarty_tpl->tpl_vars['price']->value['renew']) > 0) {?>
                                        <?php echo current($_smarty_tpl->tpl_vars['price']->value['renew']);?>
<br>
                                        <small><?php echo key($_smarty_tpl->tpl_vars['price']->value['renew']);?>
 <?php if (key($_smarty_tpl->tpl_vars['price']->value['register']) > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.years"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderForm.year"),$_smarty_tpl ) );
}?></small>
                                    <?php } else { ?>
                                        <small>N/A</small>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <div class="row tld-row no-tlds">
                    <div class="col-xs-12 text-center">
                        <br>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'pricing.selectExtCategory'),$_smarty_tpl ) );?>

                        <br><br>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="<?php if ($_smarty_tpl->tpl_vars['domainTransferEnabled']->value) {?>col-md-6<?php } else { ?>col-md-8 col-md-offset-2<?php }?>">
                    <div class="domain-promo-box">

                        <div class="clearfix">
                            <i class="fa fa-server fa-4x"></i>
                            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.addHosting'),$_smarty_tpl ) );?>
</h3>
                            <p class="font-bold text-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.chooseFromRange'),$_smarty_tpl ) );?>
</p>
                        </div>

                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.packagesForBudget'),$_smarty_tpl ) );?>
</p>

                        <a href="cart.php" class="btn btn-warning">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.exploreNow'),$_smarty_tpl ) );?>

                        </a>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['domainTransferEnabled']->value) {?>
                    <div class="col-md-6">
                        <div class="domain-promo-box">

                            <div class="clearfix">
                                <i class="fa fa-globe fa-4x"></i>
                                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferToUs'),$_smarty_tpl ) );?>
</h3>
                                <p class="font-bold text-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferExtend'),$_smarty_tpl ) );?>
*</p>
                            </div>

                            <a href="cart.php?a=add&domain=transfer" class="btn btn-primary">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferDomain'),$_smarty_tpl ) );?>

                            </a>

                            <p class="small">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.extendExclusions'),$_smarty_tpl ) );?>
</p>
                        </div>
                    </div>
                <?php }?>
            </div>

        </div>
    </div>



</div>

</div>

<?php echo '<script'; ?>
>
jQuery(document).ready(function() {
    jQuery('.tld-filters a:first-child').click();
<?php if ($_smarty_tpl->tpl_vars['lookupTerm']->value && !$_smarty_tpl->tpl_vars['captchaError']->value) {?>
    jQuery('#btnCheckAvailability').click();
<?php }?>
});
<?php echo '</script'; ?>
>
<?php }
}
