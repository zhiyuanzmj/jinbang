<?php
/* Smarty version 3.1.32, created on 2019-10-10 00:02:42
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientregister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e04a255abf7_66587287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd975e0e5d3e397e2855ead4901b83496299290e0' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientregister.tpl',
      1 => 1528120666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e04a255abf7_66587287 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="h3 text-center" style="color: #656565;">Create Account</h1>
<?php if (in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>
    <?php echo '<script'; ?>
>
        var statesTab = 10;
        var stateNotRequired = true;
    <?php echo '</script'; ?>
>
<?php }?>

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
    jQuery(document).ready(function()
    {
        jQuery("#inputNewPassword1").keyup(registerFormPasswordStrengthFeedback);
    });
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>((($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccount']).(' <strong><a href="cart.php" class="alert-link">')).($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccountOrder'])).('</a></strong>')), 0, true);
}?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
}?>

<?php if (!$_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>
    <form method="post" class="js-validation-register form-horizontal push-30-t push-50 using-password-strength" action="<?php echo $_SERVER['PHP_SELF'];?>
" role="form" name="orderfrm" id="frmCheckout">
        <input type="hidden" name="register" value="true"/>

        <div id="containerNewUserSignup">

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"registration"), 0, true);
?>
            					<div class="form-group">
                                    <div class="col-xs-6">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="lastname" id="inputLastName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
" <?php if (!in_array('lastname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                                            <label for="inputLastName" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['lastName'];?>
</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="firstname" id="inputFirstName" class="field form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
" <?php if (!in_array('firstname',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                                            <label for="inputFirstName" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['firstName'];?>
</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="email" name="email" id="inputEmail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
">
                                            <label for="inputEmail" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['emailAddress'];?>
</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="tel" name="phonenumber" id="inputPhone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
">
                                            <label for="inputPhone" style="color: #767676;"></label>
                                        </div>
                                    </div>
                                </div>
							
							<div<?php if ($_smarty_tpl->tpl_vars['LANG']->value['hid'] == "1") {?> style="display: none;"<?php }?>>
								<div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="companyname" id="inputCompanyName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
">
                                            <label for="inputCompanyName" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['companyName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['optional'];?>
)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="address1" id="inputAddress1" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['LANG']->value['hid'] == "1") {
echo $_smarty_tpl->tpl_vars['LANG']->value['dz1'];
} else {
echo $_smarty_tpl->tpl_vars['clientaddress1']->value;
}?>"  <?php if (!in_array('address1',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                                            <label for="inputAddress1" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress'];?>
</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="address2" id="inputAddress2" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
">
                                            <label for="inputAddress2" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['streetAddress2'];?>
</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-4">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="city" id="inputCity" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['LANG']->value['hid'] == "1") {
echo $_smarty_tpl->tpl_vars['LANG']->value['cs'];
} else {
echo $_smarty_tpl->tpl_vars['clientcity']->value;
}?>"  <?php if (!in_array('city',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                                            <label for="inputCity" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['city'];?>
</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="state" id="state" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['LANG']->value['hid'] == "1") {
echo $_smarty_tpl->tpl_vars['LANG']->value['sf'];
} else {
echo $_smarty_tpl->tpl_vars['clientstate']->value;
}?>"  <?php if (!in_array('state',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                                            <label for="state" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['state'];?>
</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="form-material form-material-success floating">
                                        	<input type="text" name="postcode" id="inputPostcode" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['LANG']->value['hid'] == "1") {
echo $_smarty_tpl->tpl_vars['LANG']->value['yb'];
} else {
echo $_smarty_tpl->tpl_vars['clientpostcode']->value;
}?>" <?php if (!in_array('postcode',$_smarty_tpl->tpl_vars['optionalFields']->value)) {?>required<?php }?>>
                                            <label for="inputPostcode" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['postcode'];?>
</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                	<div class="col-xs-12">
				                        <select name="country" id="inputCountry" class="form-control">
				                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientcountries']->value, 'countryName', false, 'countryCode');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['countryCode']->value => $_smarty_tpl->tpl_vars['countryName']->value) {
?>
				                                <option value="<?php echo $_smarty_tpl->tpl_vars['countryCode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['clientcountry']->value && $_smarty_tpl->tpl_vars['countryCode']->value == $_smarty_tpl->tpl_vars['defaultCountry']->value) || ($_smarty_tpl->tpl_vars['countryCode']->value == $_smarty_tpl->tpl_vars['clientcountry']->value)) {?> selected="selected"<?php }?>>
				                                    <?php echo $_smarty_tpl->tpl_vars['countryName']->value;?>

				                                </option>
				                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				                        </select>
                        			</div>
                    			</div>
							</div>
		<?php if ($_smarty_tpl->tpl_vars['customfields']->value || $_smarty_tpl->tpl_vars['currencies']->value) {?>
     			<?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
?>
                        <div class="form-group">
                        	<div class="col-xs-12">
                            <div class="control">
                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

                                <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                            <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
                                <span class="field-help-text"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</span>
                            <?php }?>
                            </div>
                           </div>
                        </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['currencies']->value) {?>
                <div class="form-group">
                    <div class="col-xs-12">
                        <select id="inputCurrency" name="currency" class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'curr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
"<?php if (!$_POST['currency'] && $_smarty_tpl->tpl_vars['curr']->value['default'] || $_POST['currency'] == $_smarty_tpl->tpl_vars['curr']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <?php }?>
        		<?php }?>
        <div id="containerNewUserSecurity" <?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && !$_smarty_tpl->tpl_vars['securityquestions']->value) {?> class="hidden"<?php }?>>
            <div id="containerPassword" class="<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value && $_smarty_tpl->tpl_vars['securityquestions']->value) {?> hidden<?php }?>">
                <div id="passwdFeedback" style="display: none;" class="alert alert-info text-center col-sm-12"></div>
        
                <div class="form-group">
                    <div class="col-xs-12">
                    	<div class="form-material form-material-primary floating">
                        <input type="password" name="password" id="inputNewPassword1" data-error-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthErrorThreshold']->value;?>
" data-warning-threshold="<?php echo $_smarty_tpl->tpl_vars['pwStrengthWarningThreshold']->value;?>
" class="form-control" autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?>>
                        <label for="inputNewPassword1" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                                    <div class="col-xs-12" style="margin-bottom: -15px;">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="password" name="password2" id="inputNewPassword2" class="form-control" autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['remote_auth_prelinked']->value) {?> value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"<?php }?> />
                                        	<label for="inputNewPassword2" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
</label>
                                        </div>
                                    </div>
                </div>
                    <div class="progress" style="margin-bottom: 35px;">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="passwordStrengthMeterBar">
                        </div>
                    </div>
            </div>
            	
            <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
                <div class="form-group">
                	<div class="col-xs-12">
                    <select name="securityqid" id="inputSecurityQId" class="form-control">
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
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="password" name="securityqans" id="inputSecurityQAns" class="form-control" autocomplete="off">
                        <label for="inputSecurityQAns" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
</label>
                    </div>
                </div>
            <?php }?>
        </div>

        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
        						<div class="form-group">
                                    <div class="col-xs-7 col-sm-8">
                                        <label class="css-input switch switch-sm switch-success">
                                            <input type="checkbox" name="accepttos"><span></span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>

                                        </label>
                                    </div>
                                    <div class="col-xs-5 col-sm-4">
                                        <div class="font-s13 text-right push-5-t">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank" style="color: #00AAFF;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a>
                                        </div>
                                    </div>
                                </div>
        <?php }?>
        						<div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-sm btn-block btn-primary" type="submit"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientregistertitle'];?>
</button>
                                    </div>
                               </div>
    </form>
<?php }
}
}
