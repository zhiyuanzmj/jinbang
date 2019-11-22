<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:52:19
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareaaddfunds.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e1e535202a7_67043922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0e01639b8ea9826947e09eb3e2b7b0ffb5727d' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareaaddfunds.tpl',
      1 => 1522994052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e1e535202a7_67043922 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addfundsdisabled']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['clientareaaddfundsdisabled'],'textcenter'=>true), 0, true);
} elseif ($_smarty_tpl->tpl_vars['notallowed']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['clientareaaddfundsnotallowed'],'textcenter'=>true), 0, true);
} elseif ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value,'textcenter'=>true), 0, true);
}?>

<?php if (!$_smarty_tpl->tpl_vars['addfundsdisabled']->value) {?>
				
				<div class="row">
							<div class="col-md-6" style="margin-top: 15px;">
								<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=addfunds" class="flexlayoutform flexlayout100p money">
								<h3 style="width:100%; margin-bottom: 15px;font-size: 15px; font-weight: 500;">
										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsamount'];?>

									</h3>
									<div class="row">
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="50" id="creditcard5" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard5" class="flexwidth1sixth responsivefullwidth1" data-money="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je1'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je1'];?>

									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="10" id="creditcard10" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard10" class="flexwidth1sixth responsivefullwidth1" data-money="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je2'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je2'];?>

									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="25" id="creditcard25" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard25" class="flexwidth1sixth responsivefullwidth1" data-money="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je3'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je3'];?>

									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="50" id="creditcard50" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard50" class="flexwidth1sixth responsivefullwidth1" data-money="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je4'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je4'];?>

									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="100" id="creditcard100" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).hide();">
									<label for="creditcard100" class="flexwidth1sixth responsivefullwidth1" data-money="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je5'];?>
">
										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['je5'];?>

									</label>
									</div>
									<div class="col-sm-2 col-xs-4">
									<input type="radio" name="amount" value="other" id="creditcard250" class="radiolabelbutton" onClick="$(&#39;#amount&#39;).show();">
									<label for="creditcard250" class="flexwidth1sixth responsivefullwidth1">
										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['othertol'];?>

									</label>
									</div>
									</div>
									<input type="text" name="amount" id="amount" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
" class="form-control" required placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['othertol1'];?>
" style="display: none; margin-top: 10px; height: 40px;"/>
									<h3 style="width:100%; margin-bottom: 15px;font-size: 15px; font-weight: 500; margin-top: 30px;">
										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>

									</h3>
									<div class="row">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gateways']->value, 'gateway', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['gateway']->value) {
?>
									<div class="col-sm-3 col-xs-6">
									<input type="radio" name="paymentmethod" value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
" class="radiolabelbutton1<?php if ($_smarty_tpl->tpl_vars['gateway']->value['type'] == "CC") {?> is-credit-card<?php }?>"<?php if ($_smarty_tpl->tpl_vars['selectedgateway']->value == $_smarty_tpl->tpl_vars['gateway']->value['sysname']) {?> checked<?php }?>>
									<label for="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
" class="flexlayout100p responsivefullwidth">
										<?php if ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['huabei'])) {?>
                                 		<img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/antchecklater.svg" height="24">
                                 		<?php } elseif ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['alipay'])) {?>
                                 		<img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/alipay.svg" height="24">
                                 		<?php } elseif ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['wepay'])) {?>
                                 		<img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/wepay.svg" height="24">
                                 		<?php } elseif ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['qqpay'])) {?>
                                 		<img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/qqpay.png" height="26">
                                 		<?php } elseif ($_smarty_tpl->tpl_vars['gateway']->value['sysname'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['paypal'])) {?>
                                 		<img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/paypal.png" height="24">
                                 		<?php } else { ?>
                                 		<?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>

                                 		<?php }?>
									</label>
									</div>
                        			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        			</div>
									<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>
" class="flexwidth100 btn-hh" style="margin-top: 30px;">
								</form>
								
						</div>
						<div class="col-sm-4 col-sm-offset-2" style="margin-top: 15px;">
            <p style="margin-top: 20px; margin-bottom: 15px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsnonrefundable'];?>
</p>
            <div class="panel">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td class="textright"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsminimum'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['minimumamount']->value;?>
</td>
                    </tr>
                    <tr>
                        <td class="textright"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsmaximum'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['maximumamount']->value;?>
</td>
                    </tr>
                    <tr>
                        <td class="textright"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfundsmaximumbalance'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['maximumbalance']->value;?>
</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
				</div>


<?php }
echo '<script'; ?>
 type="text/javascript">
	  $(function(){
		  $('.flexwidth1sixth').click(function(){
			  var val = $(this).data('money');
			  $('#amount').val(val);
	     });
	  });
	<?php echo '</script'; ?>
><?php }
}
