<?php
/* Smarty version 3.1.32, created on 2019-10-10 09:26:12
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/viewcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e88b4b27455_89495776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc5fcfb544c97abb25dc0afbe79893cbf950f534' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/viewcart.tpl',
      1 => 1528056718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/linkedaccounts.tpl' => 2,
  ),
),false)) {
function content_5d9e88b4b27455_89495776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'getFontAwesomeCCIcon' => 
  array (
    'compiled_filepath' => '/www/wwwroot/www.zfyun.top/templates_c/fc5fcfb544c97abb25dc0afbe79893cbf950f534_0.file.viewcart.tpl.php',
    'uid' => 'fc5fcfb544c97abb25dc0afbe79893cbf950f534',
    'call_name' => 'smarty_template_function_getFontAwesomeCCIcon_5205616935d9e88b49cf053_74460683',
  ),
));
$_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <?php echo '<script'; ?>
>
        // Define state tab index value
        var statesTab = 10;
        var stateNotRequired = true;
    <?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/PasswordStrength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    window.langPasswordStrength = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
";
    window.langPasswordWeak = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthweak'];?>
";
    window.langPasswordModerate = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthmoderate'];?>
";
    window.langPasswordStrong = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthstrong'];?>
";
    $(function () {
    	<?php if ($_smarty_tpl->tpl_vars['cartitems']->value != 0) {?>
		$('.cart-next-step').click(function(){
			$('#submit-form').trigger('click');
		});<?php }?>
		
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
<?php echo '</script'; ?>
>


    <div id="order-standard_cart">

        <div class="row" style="margin-top: 12px;margin-bottom: 80px;">


            <div class="col-md-12">
                        
                <div class="row">
                    <div class="col-md-8">
                    	<div>
						<?php if ($_smarty_tpl->tpl_vars['promoerrormessage']->value) {?>
                            <div class="alert alert-warning text-center" role="alert">
                                <?php echo $_smarty_tpl->tpl_vars['promoerrormessage']->value;?>

                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                            <div class="alert alert-danger" role="alert">
                                <p style="font-size: 14px;font-weight: 600;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['correctErrors'];?>
:</p>
                                <ul>
                                    <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                                </ul>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['promotioncode']->value && $_smarty_tpl->tpl_vars['rawdiscount']->value == "0.00") {?>
                            <div class="alert alert-info text-center" role="alert">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['promoappliedbutnodiscount'];?>

                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['promoaddedsuccess']->value) {?>
                            <div class="alert alert-success text-center" role="alert">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['promotionAccepted'];?>

                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['bundlewarnings']->value) {?>
                            <div class="alert alert-warning" role="alert">
                                <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundlereqsnotmet'];?>
</strong><br />
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundlewarnings']->value, 'warning');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
?>
                                        <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </div>
                        <?php }?>
					</div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=checkout" name="orderfrm" id="frmCheckout">
                <input type="hidden" name="submit" value="true" />
                <input type="hidden" name="custtype" id="inputCustType" value="<?php echo $_smarty_tpl->tpl_vars['custtype']->value;?>
" />
                
        <div class="cartbk">
	
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookOutput']->value, 'output');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
?>
                            <div>
                                <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gatewaysoutput']->value, 'gatewayoutput');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gatewayoutput']->value) {
?>
                            <div class="view-cart-gateway-checkout">
                                <?php echo $_smarty_tpl->tpl_vars['gatewayoutput']->value;?>

                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	            <div class="already-registered clearfix" style="height: 60px;border-bottom: 1px solid #ddd;padding: 21px 25px;">
	                <div class="pull-right">
	                    <button type="button" class="btn btn-sm btn-info<?php if ($_smarty_tpl->tpl_vars['loggedin']->value || !$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['custtype']->value == "existing") {?> hidden<?php }?>" id="btnAlreadyRegistered" style="margin-top: -5px;background-color: #00c0fa;border-color: #00c0fa;">
	                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['alreadyRegistered'];?>

	                    </button>
	                    <button type="button" class="btn btn-sm btn-warning<?php if ($_smarty_tpl->tpl_vars['loggedin']->value || $_smarty_tpl->tpl_vars['custtype']->value != "existing") {?> hidden<?php }?>" id="btnNewUserSignup" style="margin-top: -5px;background-color: #f60;border-color: #f60;">
	                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['createAccount'];?>

	                    </button>
	                </div>
	                <h6><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['personalInformation'];?>
</h6>
	            </div>



                <div id="containerExistingUserSignin"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value || $_smarty_tpl->tpl_vars['custtype']->value != "existing") {?> class="hidden"<?php }?> style="margin: 30px 25px 10px;">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLoginEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="text" name="loginemail" id="inputLoginEmail" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLoginPassword" class="field-icon">
                                    <i class="fa fa-lock"></i>
                                </label>
                                <input type="password" name="loginpassword" id="inputLoginPassword" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
">
                            </div>
                        </div>
                    </div>

                    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"checkout-existing"), 0, true);
?>
                </div>
				
				
                <div id="containerNewUserSignup" style="margin: 30px 25px 10px;">

                    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"checkout-new"), 0, true);
?>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputFirstName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="firstname" id="inputFirstName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['firstName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?> autofocus>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputLastName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="lastname" id="inputLastName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['lastName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="email" name="email" id="inputEmail" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['email'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputPhone" class="field-icon">
                                    <i class="fa fa-phone"></i>
                                </label>
                                <input type="tel" name="phonenumber" id="inputPhone" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['phoneNumber'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['phonenumber'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                    </div>

                    <div class="row"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
} else {
if ($_smarty_tpl->tpl_vars['LANG']->value['hid'] == "1") {?> style="display: none;"<?php }
}?>>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCompanyName" class="field-icon">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" name="companyname" id="inputCompanyName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['companyName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputAddress1" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="address1" id="inputAddress1" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress'];?>
" value="<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['dz1'];
}?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputAddress2" class="field-icon">
                                    <i class="fa fa-map-marker"></i>
                                </label>
                                <input type="text" name="address2" id="inputAddress2" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress2'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group prepend-icon">
                                <label for="inputCity" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="city" id="inputCity" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['city'];?>
" value="<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['cs'];
}?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
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
                                <input type="text" name="state" id="inputState" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
" value="<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['sf'];
}?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group prepend-icon">
                                <label for="inputPostcode" class="field-icon">
                                    <i class="fa fa-certificate"></i>
                                </label>
                                <input type="text" name="postcode" id="inputPostcode" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['postcode'];?>
" value="<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['yb'];
}?>"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> readonly="readonly"<?php }?>>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCountry" class="field-icon" id="inputCountryIcon">
                                    <i class="fa fa-globe"></i>
                                </label>
                                <select name="country" id="inputCountry" class="field"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?>>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrylabel', false, 'countrycode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['country']->value && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['country']->value) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['countrylabel']->value;?>

                                        </option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                        <div class="field-container">
                            <div class="row">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                                            <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

                                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
                                                <span class="field-help-text">
                                                    <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

                                                </span>
                                            <?php }?>
                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    <?php }?>

				</div>

			        <?php if ($_smarty_tpl->tpl_vars['domainsinorder']->value) {?>
			        <div class="col-sm-12" style="margin-bottom: 30px;">
                    	<label class="col-sm-3" style="padding-top: 10px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainregistrantinfo'];?>
</label>
                        <div class="col-sm-9">
                            <select name="contact" id="inputDomainContact" class="field">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['usedefaultcontact'];?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domaincontacts']->value, 'domcontact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['domcontact']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['domcontact']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['contact']->value == $_smarty_tpl->tpl_vars['domcontact']->value['id']) {?> selected<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['domcontact']->value['name'];?>

                                    </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <option value="addingnew"<?php if ($_smarty_tpl->tpl_vars['contact']->value == "addingnew") {?> selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavaddcontact'];?>
...
                                </option>
                            </select>
                        </div>
                    </div>
					
                    <div class="row<?php if ($_smarty_tpl->tpl_vars['contact']->value != "addingnew") {?> hidden<?php }?>" id="domainRegistrantInputFields" style="margin: 0px 10px 15px;">
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCFirstName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="domaincontactfirstname" id="inputDCFirstName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['firstName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['firstname'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCLastName" class="field-icon">
                                    <i class="fa fa-user"></i>
                                </label>
                                <input type="text" name="domaincontactlastname" id="inputDCLastName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['lastName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['lastname'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCEmail" class="field-icon">
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <input type="email" name="domaincontactemail" id="inputDCEmail" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['email'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputDCPhone" class="field-icon">
                                    <i class="fa fa-phone"></i>
                                </label>
                                <input type="tel" name="domaincontactphonenumber" id="inputDCPhone" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['phoneNumber'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['phonenumber'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputDCCompanyName" class="field-icon">
                                    <i class="fa fa-building"></i>
                                </label>
                                <input type="text" name="domaincontactcompanyname" id="inputDCCompanyName" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['companyName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['companyname'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputDCAddress1" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="domaincontactaddress1" id="inputDCAddress1" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address1'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputDCAddress2" class="field-icon">
                                    <i class="fa fa-map-marker"></i>
                                </label>
                                <input type="text" name="domaincontactaddress2" id="inputDCAddress2" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress2'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address2'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group prepend-icon">
                                <label for="inputDCCity" class="field-icon">
                                    <i class="fa fa-building-o"></i>
                                </label>
                                <input type="text" name="domaincontactcity" id="inputDCCity" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['city'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['city'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group prepend-icon">
                                <label for="inputDCState" class="field-icon">
                                    <i class="fa fa-map-signs"></i>
                                </label>
                                <input type="text" name="domaincontactstate" id="inputDCState" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['state'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group prepend-icon">
                                <label for="inputDCPostcode" class="field-icon">
                                    <i class="fa fa-certificate"></i>
                                </label>
                                <input type="text" name="domaincontactpostcode" id="inputDCPostcode" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['postcode'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['postcode'];?>
">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <select name="domaincontactcountry" id="inputDCCountry" class="field">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrylabel', false, 'countrycode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['domaincontact']->value['country'] && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['domaincontact']->value['country']) {?> selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['countrylabel']->value;?>

                                        </option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>
					<?php }?>

                <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?>

                    <div id="containerNewUserSecurity"<?php if ((!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['custtype']->value == "existing") || ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && !$_smarty_tpl->tpl_vars['securityquestions']->value)) {?> class="hidden"<?php }?> style="margin: 10px 25px 10px;">

                        <div id="containerPassword" class="row<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && $_smarty_tpl->tpl_vars['securityquestions']->value) {?> hidden<?php }?>">
                            <div id="passwdFeedback" style="display: none;" class="alert alert-info text-center col-sm-12"></div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword1" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" name="password" id="inputNewPassword1" data-error-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthErrorThreshold']->value;?>
" data-warning-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthWarningThreshold']->value;?>
" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
"<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?>>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputNewPassword2" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                    <input type="password" name="password2" id="inputNewPassword2" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
"<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?>>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-center small text-muted" id="passwordStrengthTextLabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
: <?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthenter'];?>
</p>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <select name="securityqid" id="inputSecurityQId" class="field">
                                        <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['securityquestions']->value, 'question');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['question']->value['id'] == $_smarty_tpl->tpl_vars['securityqid']->value) {?> selected<?php }?>>
                                                <?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>

                                            </option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group prepend-icon">
                                        <label for="inputSecurityQAns" class="field-icon">
                                            <i class="fa fa-lock"></i>
                                        </label>
                                        <input type="password" name="securityqans" id="inputSecurityQAns" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
">
                                    </div>
                                </div>
                            </div>
                        <?php }?>

                    </div>

                <?php }?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookOutput']->value, 'output');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['output']->value) {
?>
                    <div>
                        <?php echo $_smarty_tpl->tpl_vars['output']->value;?>

                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>




		<div class="cartbk" style="margin-top: 20px;">
				<div style="height: 60px;border-bottom: 1px solid #ddd;padding: 21px 25px;">
                    <h6><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['paymentDetails'];?>
</h6>
               </div>

                <?php if ($_smarty_tpl->tpl_vars['canUseCreditOnCheckout']->value) {?>
                    <div id="applyCreditContainer" class="apply-credit-container" data-apply-credit="<?php echo $_smarty_tpl->tpl_vars['applyCredit']->value;?>
" style="margin: 0;">
                        <p style="margin:5px 0px 18px 20px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.availableCreditBalance','amount'=>$_smarty_tpl->tpl_vars['creditBalance']->value),$_smarty_tpl ) );?>
</p>

                        <?php if ($_smarty_tpl->tpl_vars['creditBalance']->value->toNumeric() >= $_smarty_tpl->tpl_vars['total']->value->toNumeric()) {?>
                            <label class="radio" style="margin-bottom: 12px;">
                                <input id="useFullCreditOnCheckout" type="radio" name="applycredit" value="1"<?php if ($_smarty_tpl->tpl_vars['applyCredit']->value) {?> checked<?php }?>>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.applyCreditAmountNoFurtherPayment','amount'=>$_smarty_tpl->tpl_vars['total']->value),$_smarty_tpl ) );?>

                            </label>
                        <?php } else { ?>
                            <label class="radio">
                                <input id="useCreditOnCheckout" type="radio" name="applycredit" value="1"<?php if ($_smarty_tpl->tpl_vars['applyCredit']->value) {?> checked<?php }?>>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.applyCreditAmount','amount'=>$_smarty_tpl->tpl_vars['creditBalance']->value),$_smarty_tpl ) );?>

                            </label>
                        <?php }?>

                        <label class="radio">
                            <input id="skipCreditOnCheckout" type="radio" name="applycredit" value="0"<?php if (!$_smarty_tpl->tpl_vars['applyCredit']->value) {?> checked<?php }?>>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cart.applyCreditSkip','amount'=>$_smarty_tpl->tpl_vars['creditBalance']->value),$_smarty_tpl ) );?>

                        </label>
                    </div>
                <?php }?>
                <div id="paymentGatewaysContainer" class="form-group" style="padding-top: 40px;padding-bottom: 40px;">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'gateway', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['gateway']->value) {
?>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" name="paymentmethod" value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
" class="payment-methods<?php if ($_smarty_tpl->tpl_vars['gateway']->value['type'] == "CC") {?> is-credit-card<?php }?>"<?php if ($_smarty_tpl->tpl_vars['selectedgateway']->value == $_smarty_tpl->tpl_vars['gateway']->value['sysname']) {?> checked<?php }?> /><span style="margin-left: 8px;vertical-align: middle;font-size: 16px;font-weight: 600;">
                                <?php if ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['huabei'])) {?>
                                 		<img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/antchecklater.svg" height="24">
                                 		<?php } elseif ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['alipay'])) {?>
                                 		<img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/alipay.svg" height="24">
                                 		<?php } elseif ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['wepay'])) {?>
                                 		<img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/wepay.svg" height="24">
                                 		<?php } elseif ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['qqpay'])) {?>
                                 		<img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/qqpay.png" height="26">
                                 		<?php } elseif ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['paypal'])) {?>
                                 		<img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/paypal.png" height="24">
                                 		<?php } else { ?>
                                 		<?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>

                                 		<?php }?></span>
                            </label>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <div class="alert alert-danger text-center gateway-errors hidden"></div>

                <div class="clearfix"></div>

                <div id="creditCardInputFields"<?php if ($_smarty_tpl->tpl_vars['selectedgatewaytype']->value != "CC") {?> class="hidden"<?php }?> style="margin: 30px 25px 10px;">
                    <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?>
                        <div class="row margin-bottom">
                            <div class="col-sm-12">
                                <div class="text-center">
                                    <label class="radio-inline">
                                        <input type="radio" name="ccinfo" value="useexisting" id="useexisting" <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?> checked<?php } else { ?> disabled<?php }?> />
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcarduseexisting'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?>
                                            (<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'];?>
)
                                        <?php }?>
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ccinfo" value="new" id="new" <?php if (!$_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'] || $_smarty_tpl->tpl_vars['ccinfo']->value == "new") {?> checked<?php }?> />
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardenternewcard'];?>

                                    </label>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <input type="hidden" name="ccinfo" value="new" />
                    <?php }?>
                    <div id="newCardInfo" class="row<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'] && $_smarty_tpl->tpl_vars['ccinfo']->value != "new") {?> hidden<?php }?>">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" id="cctype" name="cctype" value="<?php echo $_smarty_tpl->tpl_vars['acceptedcctypes']->value[0];?>
" />
                                <div class="dropdown" id="cardType">
                                    <button class="btn btn-default dropdown-toggle field" type="button" id="creditCardType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span id="selectedCardType">
                                            <i class="fa <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'getFontAwesomeCCIcon', array('ccType'=>$_smarty_tpl->tpl_vars['acceptedcctypes']->value[0]), true);?>
 fa-fw"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['acceptedcctypes']->value[0];?>

                                        </span>
                                        <span class="fa fa-caret-down fa-fw"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="creditCardTypeDropDown" aria-labelledby="creditCardType">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['acceptedcctypes']->value, 'cardType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cardType']->value) {
?>
                                            <li>
                                                <a href="#">
                                                    <i class="fa <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'getFontAwesomeCCIcon', array('ccType'=>$_smarty_tpl->tpl_vars['cardType']->value), true);?>
 fa-fw"></i>
                                                    <span class="type">
                                                        <?php echo $_smarty_tpl->tpl_vars['cardType']->value;?>

                                                    </span>
                                                </a>
                                            </li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardNumber" class="field-icon">
                                    <i class="fa fa-credit-card"></i>
                                </label>
                                <input type="tel" name="ccnumber" id="inputCardNumber" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['cardNumber'];?>
" autocomplete="cc-number">
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['showccissuestart']->value) {?>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputCardStart" class="field-icon">
                                        <i class="fa fa-calendar-check-o"></i>
                                    </label>
                                    <input type="tel" name="ccstartdate" id="inputCardStart" class="field" placeholder="MM / YY (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardstart'];?>
)" autocomplete="cc-exp">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group prepend-icon">
                                    <label for="inputCardIssue" class="field-icon">
                                        <i class="fa fa-asterisk"></i>
                                    </label>
                                    <input type="tel" name="ccissuenum" id="inputCardIssue" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardissuenum'];?>
">
                                </div>
                            </div>
                        <?php }?>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardExpiry" class="field-icon">
                                    <i class="fa fa-calendar"></i>
                                </label>
                                <input type="tel" name="ccexpirydate" id="inputCardExpiry" class="field" placeholder="MM / YY<?php if ($_smarty_tpl->tpl_vars['showccissuestart']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardexpires'];?>
)<?php }?>" autocomplete="cc-exp">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group prepend-icon">
                                <label for="inputCardCVV" class="field-icon">
                                    <i class="fa fa-barcode"></i>
                                </label>
                                <input type="tel" name="cccvv" id="inputCardCVV" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['cvv'];?>
" autocomplete="cc-cvc">
                            </div>
                        </div>
                    </div>
                    <div id="existingCardInfo" class="row<?php if (!$_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'] || $_smarty_tpl->tpl_vars['ccinfo']->value == "new") {?> hidden<?php }?>">
                        <div class="col-sm-12">
                            <div class="form-group prepend-icon">
                                <label for="inputCardCvvExisting" class="field-icon">
                                    <i class="fa fa-barcode"></i>
                                </label>
                                <input type="tel" name="cccvvexisting" id="inputCardCvvExisting" class="field" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['cvv'];?>
" autocomplete="cc-cvc">
                            </div>
                        </div>
                    </div>
                </div>

		</div>



                <?php if ($_smarty_tpl->tpl_vars['shownotesfield']->value) {?>
				<div class="cartbk" style="margin-top: 20px;">
					<div style="height: 60px;border-bottom: 1px solid #dfe3e9;padding: 21px 25px;">
                    <h6><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['additionalNotes'];?>
</h6>
               		</div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group" style="margin:25px;">
                                <textarea name="notes" class="field" rows="4" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernotesdescription'];?>
" style="border: 1px solid #dfe3e9;padding: 10px;"><?php echo $_smarty_tpl->tpl_vars['orderNotes']->value;?>
</textarea>
                            </div>
                        </div>
                    </div>
				</div>
                <?php }?>

                <div class="text-center">
				<?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
                <div class="hidden">
                    <input type="checkbox" name="accepttos" id="accepttos" />
                </div>
	            <?php }?>
                    <button type="submit" id="submit-form" class="hidden">Checkout</button>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['servedOverSsl']->value) {?>
                <div class="alert alert-warning checkout-security-msg" style="padding-top: 20px;padding-bottom: 20px;">
                    <i class="fa fa-lock" style="margin-top: -8px;"></i>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure'];?>
 (<strong><?php echo $_smarty_tpl->tpl_vars['ipaddress']->value;?>
</strong>) <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure2'];?>

                </div>
                <?php }?>
  						
 </form>                    
                    </div>


					<div class="col-md-4" id="scrollingPanelContainer">
						
                        <div id="orderSummary" class="cartyp">
                        	<div class="row">
                        		<div class="col-sm-12">
                            	<div class="gwctb">
                            		<span class="pull-left ypbtt"><i class="si si-basket-loaded ypbttb"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersummary'];?>
</span>
                            		<span class="pull-right">
                            		<?php if ($_smarty_tpl->tpl_vars['cartitems']->value > 0) {?>
                                    <button type="button" class="qkgwc" id="btnEmptyCart" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['emptycart'];?>
">
                                        <i class="fa fa-trash"></i>
                                    </button>
                            		<?php }?>
                            		<a href="cart.php" class="qkgwc btn-xs btn jxgm" id="continueShopping" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['continueShopping'];?>
">
                                        <i class="fa fa-plus"></i>
                                    </a>
                            		</span>
                            	</div>
<?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?>
	    <div class="view-cart-empty">
	    	<span class="text-center" style="border: 1px solid #ddd;border-radius: 50%;padding: 30px 20px 20px 20px;"><i class="fa fa-shopping-cart" style="font-size: 32px;color: #ddd;"></i></span>
	        <p style="margin-top: 50px;margin-bottom: 0;font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartempty'];?>
</p>
	    </div>
<?php } else { ?>
                            	
                            		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
                            			<div class="col-sm-12 cartzt">
                            				<div class="row">
                                           		<div class="col-sm-12 mb6">
                                                    <span class="cartcpbt"><?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo']['name'];?>
</span>
                                                    <?php if ($_smarty_tpl->tpl_vars['showqtyoptions']->value) {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['allowqty']) {?>
                                                    <form method="post" action="cart.php?a=view" style="display: initial;">
                                                        <input type="number" name="qty[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
" class="form-control text-center xx11" />
                                                        <button type="submit" class="btn btn-xs mt-5">
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['update'];?>

                                                        </button>
                                                       </form>
                                                    <?php }?>
                                            		<?php }?>
                                                    <div class="pull-right item-price">
                                                		<span class="cycle"><?php echo $_smarty_tpl->tpl_vars['product']->value['pricingtext'];?>
</span>
                                            		</div>    
                                            	</div>
                                             	<div class="col-sm-12">   
	                                                <?php if ($_smarty_tpl->tpl_vars['product']->value['domain']) {?>
	                                                    <span class="text-muted f12">
	                                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];?>

	                                                    </span>
	                                                <?php }?>
	                                                <span class="pull-right">
	                                                	<a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=confproduct&i=<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="btn btn-link btn-xs c1b"><i class="fa fa-edit"></i></a>
	                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('p','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')"><i class="fa fa-times"></i></button>
	                                                </span>
                                            	</div>
			                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['addons'], 'addon', false, 'addonnum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['addonnum']->value => $_smarty_tpl->tpl_vars['addon']->value) {
?>
			                                    <div class="col-sm-12 mt5">
                                                    <span class="text-muted">+</span> <span class="addbt"><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
                                                    <div class="pull-right item-price">
                                                		<span class="cycle"><?php echo $_smarty_tpl->tpl_vars['addon']->value['pricingtext'];?>
</span>
                                            		</div>    
                                            	</div>
			                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            				</div>
                                    	</div>
                                	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['addon']->value) {
?>
	                                 		<div class="col-sm-12 cartzt">
	                            				<div class="row">
	                                           		<div class="col-sm-12 mb6">
	                                                    <span class="cartcpbt"><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
	                                                    <div class="pull-right item-price">
	                                                		<span class="cycle"><?php echo $_smarty_tpl->tpl_vars['addon']->value['pricingtext'];?>
</span>
	                                            		</div>    
	                                            	</div>
	                                             	<div class="col-sm-12">   
		                                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['domainname']) {?>
		                                                    <span class="text-muted f12">
		                                                        <?php echo $_smarty_tpl->tpl_vars['addon']->value['domainname'];?>

		                                                    </span>
		                                                <?php }?>
		                                                <span class="pull-right">
		                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('a','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')"><i class="fa fa-times"></i></button>
		                                                </span>
	                                            	</div>
	                            				</div>
	                                    	</div>
	                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['domain']->value) {
?>
	                                			<div class="col-sm-12 cartzt">
		                            				<div class="row">
		                                           		<div class="col-sm-12 mb6">
		                                                    <span class="cartcpbt"><?php if ($_smarty_tpl->tpl_vars['domain']->value['type'] == "register") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainregistration'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomaintransfer'];
}?></span>
		                                                    <div class="pull-right item-price">
		                                                		<span class="cycle">
		                                                			<?php if (count($_smarty_tpl->tpl_vars['domain']->value['pricing']) == 1 || $_smarty_tpl->tpl_vars['domain']->value['type'] == 'transfer') {?>
					                                                    <span name="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
Price"><?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];?>
</span>
					                                                    <span class="cycle"><?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['domain']->value['yearsLanguage'];?>
</span>
					                                                    <span class="renewal cycle">
					                                                        <?php if (isset($_smarty_tpl->tpl_vars['domain']->value['renewprice'])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewalprice'),$_smarty_tpl ) );?>
 <span class="renewal-price cycle"><?php echo $_smarty_tpl->tpl_vars['domain']->value['renewprice']->toPrefixed();
echo $_smarty_tpl->tpl_vars['domain']->value['shortYearsLanguage'];
}?></span>
					                                                    </span>
					                                                <?php } else { ?>
					                                                    <span name="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
Price"><?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];?>
</span>
					                                                    <div class="dropdown">
					                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" id="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
Pricing" name="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
Pricing" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					                                                            <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['domain']->value['yearsLanguage'];?>

					                                                            <span class="caret"></span>
					                                                        </button>
					                                                        <ul class="dropdown-menu" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
Pricing">
					                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domain']->value['pricing'], 'price', false, 'years');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['years']->value => $_smarty_tpl->tpl_vars['price']->value) {
?>
					                                                                <li>
					                                                                    <a href="#" onclick="selectDomainPeriodInCart('<?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
', '<?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>
', <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
, '<?php if ($_smarty_tpl->tpl_vars['years']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.year'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.years'),$_smarty_tpl ) );
}?>');return false;">
					                                                                        <?php echo $_smarty_tpl->tpl_vars['years']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['years']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.year'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.years'),$_smarty_tpl ) );
}?> @ <?php echo $_smarty_tpl->tpl_vars['price']->value['register'];?>

					                                                                    </a>
					                                                                </li>
					                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					                                                        </ul>
					                                                    </div>
					                                                    <span class="renewal cycle">
					                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainrenewalprice'),$_smarty_tpl ) );?>
 <span class="renewal-price cycle"><?php if (isset($_smarty_tpl->tpl_vars['domain']->value['renewprice'])) {
echo $_smarty_tpl->tpl_vars['domain']->value['renewprice']->toPrefixed();
echo $_smarty_tpl->tpl_vars['domain']->value['shortYearsLanguage'];
}?></span>
					                                                    </span>
					                                                <?php }?>
		                                                		</span>
		                                            		</div>    
		                                            	</div>
		                                             	<div class="col-sm-12">   
			                                                <?php if ($_smarty_tpl->tpl_vars['domain']->value['domain']) {?>
			                                                    <span class="text-muted f12">
			                                                        <?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>

			                                                    </span>
			                                                <?php }?>
			                                                <span class="pull-right">
			                                                	<a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=confdomains" class="btn btn-link btn-xs c1b"><i class="fa fa-edit"></i></a>
			                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('d','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')"><i class="fa fa-times"></i></button>
			                                                </span>
		                                            	</div>
		                            				</div>
		                                    	</div>
	                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['renewals']->value, 'domain', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['domain']->value) {
?>
	                                			<div class="col-sm-12 cartzt">
		                            				<div class="row">
		                                           		<div class="col-sm-12 mb6">
		                                                    <span class="cartcpbt"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewal'];?>
</span>
		                                                    <div class="pull-right item-price">
		                                                		<span class="cycle">
		                                                			<?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];?>
<br><?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>

		                                                		</span>
		                                            		</div>    
		                                            	</div>
		                                             	<div class="col-sm-12">   
			                                                    <span class="text-muted f12">
			                                                        <?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>

			                                                    </span>
			                                                <span class="pull-right">
			                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('r','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')"><i class="fa fa-times"></i></button>
			                                                </span>
		                                            	</div>
		                            				</div>
		                                    	</div>
	                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upgrades']->value, 'upgrade', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['upgrade']->value) {
?>
	                                				<div class="col-sm-12 cartzt">
			                            				<div class="row">
			                                           		<div class="col-sm-12 mb6">
			                                                    <span class="cartcpbt">
			                                            <?php if ($_smarty_tpl->tpl_vars['upgrade']->value->type == 'service') {?>
	                                                        <?php echo $_smarty_tpl->tpl_vars['upgrade']->value->originalProduct->name;?>
 => <?php echo $_smarty_tpl->tpl_vars['upgrade']->value->newProduct->name;?>

	                                                    <?php } elseif ($_smarty_tpl->tpl_vars['upgrade']->value->type == 'addon') {?>
	                                                        <?php echo $_smarty_tpl->tpl_vars['upgrade']->value->originalAddon->name;?>
 => <?php echo $_smarty_tpl->tpl_vars['upgrade']->value->newAddon->name;?>

	                                                    <?php }?>
			                                                    </span>
			                                                    <div class="pull-right item-price">
			                                                		<span class="cycle">
			                                                			<?php echo $_smarty_tpl->tpl_vars['upgrade']->value->creditAmount;?>

			                                                		</span>
			                                            		</div>    
			                                            	</div>
			                                             	<div class="col-sm-12">   
				                                                    <span class="text-muted f12">
				                                                        <?php if ($_smarty_tpl->tpl_vars['upgrade']->value->type == 'service') {?>
					                                                        <?php echo $_smarty_tpl->tpl_vars['upgrade']->value->service->domain;?>

					                                                    <?php }?>
				                                                    </span>
				                                                <span class="pull-right">
				                                                    <button type="button" class="btn btn-link btn-xs btn-remove-from-cart qcan" onclick="removeItem('u','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
')"><i class="fa fa-times"></i></button>
				                                                </span>
			                                            	</div>
			                            				</div>
			                                    </div>
	                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
	                                
	                                		<div class="col-sm-12 cartxj">
	                            				<div class="row">
	                                           		<div class="col-sm-12 mb6">
	                                           			<span class="cartcpbt" style="font-weight: 300;color: #999999;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersubtotal'];?>
</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="font-weight: 600;">
	                                                			<span id="recurring">
	                                                				<?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>

	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	<div class="col-sm-12 mb6">
	                                           			<span class="cartcpbt" style="font-weight: 300;color: #999999;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartxfjgp'];?>
</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="font-weight: 600;">
	                                                			<span id="recurring">
	                                                				<span id="recurringMonthly" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringmonthly']->value) {?>style="display:none;"<?php }?>>
							                                            <span class="cost"><?php echo $_smarty_tpl->tpl_vars['totalrecurringmonthly']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>
<br />
							                                        </span>
							                                        <span id="recurringQuarterly" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringquarterly']->value) {?>style="display:none;"<?php }?>>
							                                            <span class="cost"><?php echo $_smarty_tpl->tpl_vars['totalrecurringquarterly']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>
<br />
							                                        </span>
							                                        <span id="recurringSemiAnnually" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value) {?>style="display:none;"<?php }?>>
							                                            <span class="cost"><?php echo $_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>
<br />
							                                        </span>
							                                        <span id="recurringAnnually" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringannually']->value) {?>style="display:none;"<?php }?>>
							                                            <span class="cost"><?php echo $_smarty_tpl->tpl_vars['totalrecurringannually']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>
<br />
							                                        </span>
							                                        <span id="recurringBiennially" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringbiennially']->value) {?>style="display:none;"<?php }?>>
							                                            <span class="cost"><?php echo $_smarty_tpl->tpl_vars['totalrecurringbiennially']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>
<br />
							                                        </span>
							                                        <span id="recurringTriennially" <?php if (!$_smarty_tpl->tpl_vars['totalrecurringtriennially']->value) {?>style="display:none;"<?php }?>>
							                                            <span class="cost"><?php echo $_smarty_tpl->tpl_vars['totalrecurringtriennially']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>
<br />
							                                        </span>
	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	<?php if ($_smarty_tpl->tpl_vars['promotioncode']->value || $_smarty_tpl->tpl_vars['taxrate']->value || $_smarty_tpl->tpl_vars['taxrate2']->value) {?>
	                                            	<?php if ($_smarty_tpl->tpl_vars['promotioncode']->value) {?>
	                                            	<div class="col-sm-12">
	                                           			<span class="cartcpbt" style="font-weight: 300;color: green;"><?php echo $_smarty_tpl->tpl_vars['promotiondescription']->value;?>
</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="color: green;">
	                                                			省：<span id="recurring" style="font-weight: 600;">
	                                                				<?php echo $_smarty_tpl->tpl_vars['discount']->value;?>

	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	<?php }?>
	                                            	<?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
	                                            	<div class="col-sm-12">
	                                           			<span class="cartcpbt" style="font-weight: 300;"><?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate']->value;?>
%</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="font-weight: 600;">
	                                                			<span id="recurring">
	                                                				<?php echo $_smarty_tpl->tpl_vars['taxtotal']->value;?>

	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	<?php }?>
	                                            	<?php if ($_smarty_tpl->tpl_vars['taxrate2']->value) {?>
	                                            	<div class="col-sm-12">
	                                           			<span class="cartcpbt" style="font-weight: 300;"><?php echo $_smarty_tpl->tpl_vars['taxname2']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate2']->value;?>
%</span>
	                                                    <div class="pull-right item-price">
	                                                		<div class="cycle" style="font-weight: 600;">
	                                                			<span id="recurring">
	                                                				<?php echo $_smarty_tpl->tpl_vars['taxtotal2']->value;?>

	                                                			</span>
	                                                		</div>
	                                                    </div>    
	                                            	</div>
	                                            	<?php }?>
	                                            	<?php }?>
	                            				</div>
	                                    	</div>

									<div class="col-sm-12 jgxja">
										<div class="row">
											<div class="col-sm-12">
												<span class="jgwz"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
</span>
												<div id="totalDueToday"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</div>
													<?php if ($_smarty_tpl->tpl_vars['promotioncode']->value) {?>
													<div class="input-group">
													<input class="form-control aabbcc" disabled="disabled" type="text" value="<?php echo $_smarty_tpl->tpl_vars['promotioncode']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['promotiondescription']->value;?>
">
		                                                    <a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=removepromo" class="input-group-addon" style="padding: 0 15px;color: #fff;">
		                                                    <i class="fa fa-trash acac"></i></a>
		                                            </div>
				                                    <?php } else { ?>
					                                    <form method="post" action="cart.php?a=view">
					                                    <div class="input-group">
		                                                    <input class="form-control aabbcc" type="text" name="promocode" id="inputPromotionCode" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"orderPromoCodePlaceholder"),$_smarty_tpl ) );?>
" required="required">
		                                                    <span class="input-group-addon">
		                                                    <button type="submit" name="validatepromo" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpromovalidatebutton'];?>
" class="aaddcc"><i class="fa fa-check" style="font-size: 20px; vertical-align: middle;font-weight: 300;"></i></button></span>
	                                                	</div>
				                                        </form>
				                                    <?php }?>
											</div>
										</div>
									</div>

									<?php if ($_smarty_tpl->tpl_vars['taxenabled']->value && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
									<div class="col-sm-12" style="background-color: #00c0fa;">
										<div class="row">
										<div class="col-sm-12">
									<form method="post" action="cart.php?a=setstateandcountry">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-5">
                                                    <input type="text" name="state" id="inputState" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> style="margin-left: 3px;background-color: #c2dfe9;border-color: #c2dfe9;" />
                                                </div>
                                                <div class="col-sm-4" style="margin-left: -15px;">
                                                    <select name="country" id="inputCountry" class="form-control" style="background-color: #c2dfe9;border-color: #c2dfe9;">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'countrylabel', false, 'countrycode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['country']->value && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['country']->value) {?> selected<?php }?>>
                                                                <?php echo $_smarty_tpl->tpl_vars['countrylabel']->value;?>

                                                            </option>
                                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                            <div class="col-sm-3 text-center" style="margin-left: -10px;">
                                                <button type="submit" class="btn" style="background-image: linear-gradient(160deg,#ff8e2b,#ff6c2c);color: #fff;border-color: #ff812c;">
                                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['updateTotals'];?>

                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
									</div></div></div>
									<?php }?>


<?php }?>
									<!-- 右边栏外边框div结束标签 -->
                        		</div>		
                        	</div>
                       	</div>
                       <!-- 右边栏结束 -->
                       <p style="margin-top: 25px;">
                       	<?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
                       	<div class="form-group">
                <label class="osagreement" for="osagreement">
                    <input type="checkbox" id="osagreement">
                    <span style="vertical-align: middle;margin-left: 6px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank" style="color: #00C0FA;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a></span>
                </label>
            </div>
            <?php }?>
             <a <?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {
} else { ?>href="javascript:void(0);"<?php }?> class="btn btn-xlg btn-success btn-submit btn-block cart-next-step"<?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?> disabled="disabled"<?php }?> style="padding: 12px 0;background-image: linear-gradient(160deg,#ff8e2b,#ff6c2c);border-color: transparent;font-weight: 300;font-size: 16px;">
		        	<span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['completeorder'];?>
</span>
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['close'];?>
">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">
                                <i class="fa fa-times fa-3x"></i>
                                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['removeItem'];?>
</span>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremoveitemconfirm'];?>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['no'];?>
</button>
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['yes'];?>
</button>
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['close'];?>
">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">
                                <i class="fa fa-trash fa-3x"></i>
                                <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['emptycart'];?>
</span>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartemptyconfirm'];?>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['no'];?>
</button>
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['yes'];?>
</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>    


   
    
    
    </div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.payment.js"><?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_getFontAwesomeCCIcon_5205616935d9e88b49cf053_74460683 */
if (!function_exists('smarty_template_function_getFontAwesomeCCIcon_5205616935d9e88b49cf053_74460683')) {
function smarty_template_function_getFontAwesomeCCIcon_5205616935d9e88b49cf053_74460683(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if ($_smarty_tpl->tpl_vars['ccType']->value == "Visa") {?>
        fa-cc-visa
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "MasterCard") {?>
        fa-cc-mastercard
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "Discover") {?>
        fa-cc-discover
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "American Express") {?>
        fa-cc-amex
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "JCB") {?>
        fa-cc-jcb
    <?php } elseif ($_smarty_tpl->tpl_vars['ccType']->value == "Diners Club" || $_smarty_tpl->tpl_vars['ccType']->value == "EnRoute") {?>
        fa-cc-diners-club
    <?php } else { ?>
        fa-credit-card
    <?php }
}}
/*/ smarty_template_function_getFontAwesomeCCIcon_5205616935d9e88b49cf053_74460683 */
}
