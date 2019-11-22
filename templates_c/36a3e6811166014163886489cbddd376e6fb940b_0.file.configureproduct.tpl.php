<?php
/* Smarty version 3.1.32, created on 2019-10-10 14:41:03
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/configureproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9ed27f037442_13166891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36a3e6811166014163886489cbddd376e6fb940b' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/configureproduct.tpl',
      1 => 1563245735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
  ),
),false)) {
function content_5d9ed27f037442_13166891 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/js/buy.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var _localLang = {
    'addToCart': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addToCart'], ENT_QUOTES, 'UTF-8', true);?>
',
    'addedToCartRemove': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LANG']->value['orderForm']['addedToCartRemove'], ENT_QUOTES, 'UTF-8', true);?>
'
}
jQuery(function () {

	jQuery('.ccc > div').click(function(){
		cycle = jQuery(this).data('cycle');
		jQuery(this).addClass('active');
		jQuery(this).siblings('div').removeClass('active');
		jQuery('#inputBillingcycle').val(cycle);
		jQuery('#orderSummaryLoader').removeClass('hidden');
		recalctotals();
	});

	jQuery('.product-configurable-options .cart-k .aass > div').click(function(){
		value = jQuery(this).data('value');
		jQuery(this).addClass('group4');
		jQuery(this).siblings().removeClass('group4');
		jQuery(this).parent().find('input').val(value);
		jQuery('#orderSummaryLoader').removeClass('hidden');
		recalctotals();
	});
	jQuery('.product-configurable-options .cart-k .ccc1 > div').click(function(){
		value = jQuery(this).data('value');
		jQuery(this).addClass('active');
		jQuery(this).siblings().removeClass('active');
		jQuery(this).parent().find('input').val(value);
		jQuery('#orderSummaryLoader').removeClass('hidden');
		recalctotals();
	});
});
<?php echo '</script'; ?>
>

<div id="order-standard_cart" style="margin-bottom: 50px;">
<div class="alert alert-danger hidden" role="alert" id="containerProductValidationErrors" style="padding-left: 20px;">
                            <p style="font-size: 14px;font-weight: 600;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['correctErrors'];?>
:</p>
                            <p id="containerProductValidationErrorsList"></p>
                       </div>
                       <div class="cartbk">
		<div class="text-center carttb">
			<div class="cppztb text-muted" style="font-size: 15px;">
				<i class="fa fa-gears" style="margin-right: 8px;color: #00C0FA;"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartpzcp'];?>
：<b style="color: #333;"><?php echo $_smarty_tpl->tpl_vars['productinfo']->value['name'];?>
</b>
			</div>
		</div>

            <form id="frmConfigureProduct">
                <input type="hidden" name="configure" value="true" />
                <input type="hidden" name="i" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />

<?php if ($_smarty_tpl->tpl_vars['pricing']->value['type'] == "recurring") {?>
<div class="cart-k">
	<div class="hidden-sm hidden-xs h15"></div>
	<div class="row">
		<div class="cart-l col-sm-2"><i class="fa fa-clock-o"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartzq'];?>
</div>
		<div class="cartjg col-sm-10 text-center">
			<div class="ccc">
				<input type="hidden" id="inputBillingcycle" name="billingcycle" value="<?php echo $_smarty_tpl->tpl_vars['billingcycle']->value;?>
" autofocus />
				<?php if ($_smarty_tpl->tpl_vars['pricing']->value['monthly']) {?>
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "monthly") {?>active<?php }?>" data-cycle="monthly" data-billing="<?php echo $_smarty_tpl->tpl_vars['pricing']->value['monthly'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cart1'];?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['pricing']->value['quarterly']) {?>
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "quarterly") {?>active<?php }?>" data-cycle="quarterly" data-billing="<?php echo $_smarty_tpl->tpl_vars['pricing']->value['quarterly'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cart3'];?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['pricing']->value['semiannually']) {?>
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "semiannually") {?>active<?php }?>" data-cycle="semiannually" data-billing="<?php echo $_smarty_tpl->tpl_vars['pricing']->value['semiannually'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cart6'];?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['pricing']->value['annually']) {?>
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "annually") {?>active<?php }?>" data-cycle="annually" data-billing="<?php echo $_smarty_tpl->tpl_vars['pricing']->value['annually'];?>
" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['nfyhwz'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cart12'];?>
<span class="badge badge-default hui">惠</span></div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['pricing']->value['biennially']) {?>
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "biennially") {?>active<?php }?>" data-cycle="biennially" data-billing="<?php echo $_smarty_tpl->tpl_vars['pricing']->value['biennially'];?>
" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['lnfyhwz'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cart24'];?>
<span class="badge badge-default hui">惠</span></div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['pricing']->value['triennially']) {?>
					<div class="cartjglb col-md-2 col-sm-3 col-xs-6 <?php if ($_smarty_tpl->tpl_vars['billingcycle']->value == "triennially") {?>active<?php }?>" data-cycle="triennially" data-billing="<?php echo $_smarty_tpl->tpl_vars['pricing']->value['triennially'];?>
" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['snfyhwz'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cart36'];?>
<span class="badge badge-default hui">惠</span></div>
				<?php }?>
			</div>
		</div>
	</div>
	<div class="h15"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['productinfo']->value['type'] == "server") {?>
<div class="cart-k">
	<div class="hidden-sm hidden-xs h20"></div>
	<div class="row">
		<div class="cart-l col-sm-2"><i class="fa fa-server"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartconfigserver'];?>
</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;margin-right: -15px;">
									<div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputHostname"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverhostname'];?>
</label>
                                            <input class="form-control  no-custom-style" type="text" name="hostname" id="inputHostname" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['hostname'];?>
" readonly placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverhostname'];?>
" style="-webkit-appearance: none;appearance: none;" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputRootpw"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverrootpw'];?>
</label>
                                            <input class="form-control  no-custom-style" type="text" name="rootpw" id="inputRootpw" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['rootpw'];?>
" readonly placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverrootpw'];?>
" style="-webkit-appearance: none;appearance: none;" />
                                        </div>
                                    </div>
<?php echo '<script'; ?>
>
var dt = new Date();
function gen_password(len){
  var secret="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  var selen=secret.length-1;
  var i=0;
  var pwd="";
  while(i<len){
     pwd+=secret[Math.round(Math.random()*selen)];
     i++;
   }
  return pwd;
}
function gen_random(len){
  var secret="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  var selen=secret.length-1;
  var i=0;
  var rnd="";
  while(i<len){
     rnd+=secret[Math.round(Math.random()*selen)];
     i++;
   }
  return rnd;
}
$("input[name=rootpw]").val(gen_password(16));
$("input[name=hostname]").val("<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostnameqz'];?>
"+"-"+dt.toISOString().slice(2, 10).replace(/[^0-9]/g, "")+"-"+gen_random(4));
<?php echo '</script'; ?>
>
                                    <div class="col-sm-6" style="display: none;">
                                        <div class="form-group">
                                            <label for="inputNs1prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns1prefix'];?>
</label>
                                            <input type="text" name="ns1prefix" class="form-control" id="inputNs1prefix" value="ns1">
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="display: none;">
                                        <div class="form-group">
                                            <label for="inputNs2prefix"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns2prefix'];?>
</label>
                                            <input type="text" name="ns2prefix" class="form-control" id="inputNs2prefix" value="ns2">
                                        </div>
                                    </div>
    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
<div class="product-configurable-options" id="productConfigurableOptions">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configurableoptions']->value, 'configoption', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['configoption']->value) {
if ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 1) {?>
<div class="cart-k"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space") {?> style="border-bottom: none;padding-bottom: 0px;"<?php }?>>
	<div class="hidden-sm hidden-xs h20"></div>
	<div class="row">
		<div class="cart-l col-sm-2">
			<i class="fa <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System") {?>fa-linux<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location") {?>fa-map-marker<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu") {?>fa-microchip<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram") {?>fa-floppy-o<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd") {?>fa-hdd-o<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth") {?>fa-jsfiddle<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ip") {?>fa-info<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network") {?>fa-globe<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板") {?>fa-dashboard<?php } else { ?>fa-check-circle<?php }?>"></i>
					<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostos'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostlt'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmm'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostds'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carthdd'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostbw'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostram'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostnetwork'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostdlip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ip") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmb'];?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>

					<?php }?>
		</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;margin-right: -15px;">
			<div class="form-group col-sm-8">
				<select name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" class="form-control" style="margin-top: 9px;">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?> selected="selected" <?php }?> style="color: #666;">
						<?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>

					</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
    	</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space") {
} else { ?><div class="hidden-sm hidden-xs h15"></div><?php }?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 2) {?>
<div class="cart-k"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space") {?> style="border-bottom: none;padding-bottom: 0px;"<?php }?>>
	<div class="hidden-sm hidden-xs h20"></div>
	<div class="row">
		<div class="cart-l col-sm-2">
			<i class="fa <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System") {?>fa-linux<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location") {?>fa-map-marker<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu") {?>fa-microchip<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram") {?>fa-floppy-o<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd") {?>fa-hdd-o<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth") {?>fa-jsfiddle<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ip") {?>fa-info<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network") {?>fa-globe<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板") {?>fa-dashboard<?php } else { ?>fa-check-circle<?php }?>"></i>
					<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostos'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostlt'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmm'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostds'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carthdd'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostbw'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostram'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostnetwork'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostdlip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ip") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmb'];?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>

					<?php }?>
		</div>
		<div class="col-sm-10" style="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ip") {
} else { ?>margin-left: -15px;margin-right: -15px;<?php }?>">
			<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location") {?>
			<div class="aass">
			<input type="hidden" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'];?>
" />
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
?>
					<div class="group3 <?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?>group4<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
">
						<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['options']->value['name']));?>
						<span class="deploy_checkbox_icon fonticon_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[0], 'UTF-8');?>
 hidden-sm hidden-xs"></span>
						<span class="fonticon_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[0], 'UTF-8');?>
 sese hidden-lg hidden-md"></span>
						<span class="deploy_checkbox_line1 xtwz"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</span>
						<span class="deploy_checkbox_line2 xtwz"><?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value[2];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value[3];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value[4];?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value[5];?>
</span>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network") {?>
			<div class="aass a111">
			<input type="hidden" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'];?>
" />
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
?>
					<div class="group3 <?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?>group4<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
">
						<span><?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>
</span>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores") {?>
			<div class="ccc1">
			<input type="hidden" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'];?>
" />
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['options']->value['name']));?>
					<div class="cartjglb <?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?>active<?php }?> text-center col-md-2 col-sm-3 col-xs-6" data-value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<?php } else { ?>
			<div class="form-group" style="margin-top: 16px;">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configoption']->value['options'], 'options', false, 'num2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num2']->value => $_smarty_tpl->tpl_vars['options']->value) {
?>
                                                        <label class="col-sm-4" style="margin-bottom: 15px;">
                                                            <input type="radio" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue'] == $_smarty_tpl->tpl_vars['options']->value['id']) {?> checked="checked"<?php }?> />
                                                            <span style="margin-left: 6px;vertical-align: middle;">
                                                            <?php if ($_smarty_tpl->tpl_vars['options']->value['name']) {?>
                                                                <?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>

                                                            <?php } else { ?>
                                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['enable'];?>

                                                            <?php }?></span>
                                                        </label>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
            <?php }?>
		</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 3) {
if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "I/O优化") {?>
<div class="cart-k" style="padding-top: 6px;">
	<div class="row">
		<div class="cart-l col-sm-2"></div>
		<div class="cartjg col-sm-10">
						<div class="form-group">
                                                    <label>
                                                        <input type="checkbox" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" value="1" checked />
                                                        <span style="margin-left: 6px;vertical-align: middle;">
                                                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name']) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['enable'];?>

                                                        <?php }?></span>
                                                    </label>
                                                </div>

    	</div>
	</div>
</div>
<?php } else { ?>
<div class="cart-k">
	<div class="hidden-sm hidden-xs h15"></div>
	<div class="row">
		<div class="cart-l col-sm-2">
			<i class="fa <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System") {?>fa-linux<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location") {?>fa-map-marker<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu") {?>fa-microchip<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram") {?>fa-floppy-o<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd") {?>fa-hdd-o<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth") {?>fa-jsfiddle<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ip") {?>fa-info<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network") {?>fa-globe<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板") {?>fa-dashboard<?php } else { ?>fa-check-circle<?php }?>"></i>
					<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostos'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostlt'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmm'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostds'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carthdd'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostbw'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostram'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostnetwork'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostdlip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ip") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmb'];?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>

					<?php }?>
		</div>
		<div class="cartjg col-sm-10" style="margin-top: 14px;">

			<div class="form-group">
                                                    <label>
                                                        <input type="checkbox" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" value="1"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {?> checked<?php }?> />
                                                        <span style="margin-left: 6px;vertical-align: middle;">
                                                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name']) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['enable'];?>

                                                        <?php }?></span>
                                                    </label>
                                                </div>

    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
<?php }
} elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype'] == 4) {?>
<div class="cart-k">
	<div class="hidden-sm hidden-xs h35"></div>
	<div class="row">
		<div class="cart-l col-sm-2">
			<i class="fa <?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System") {?>fa-linux<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location") {?>fa-map-marker<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu") {?>fa-microchip<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram") {?>fa-floppy-o<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd") {?>fa-hdd-o<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth") {?>fa-jsfiddle<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address" || $_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ip") {?>fa-info<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network") {?>fa-globe<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板") {?>fa-dashboard<?php } else { ?>fa-check-circle<?php }?>"></i>
					<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Operating System") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostos'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Location") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostlt'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Cores") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Memory") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmm'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Disk Space") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostds'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "hdd") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carthdd'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Bandwidth") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostbw'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "cpu") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ram") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostram'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "network") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostnetwork'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "Extra IP Address") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostdlip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "ip") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optionname'] == "控制面板") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmb'];?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>

					<?php }?>
		</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;margin-right: -15px;">

			                                                <div class="form-group col-sm-10">
                                                    <?php if ($_smarty_tpl->tpl_vars['configoption']->value['qtymaximum']) {?>
                                                        <?php if (!$_smarty_tpl->tpl_vars['rangesliderincluded']->value) {?>
                                                            <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/ion.rangeSlider.min.js"><?php echo '</script'; ?>
>
                                                            <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/ion.rangeSlider.css" rel="stylesheet">
                                                            <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/ion.rangeSlider.skinModern.css" rel="stylesheet">
                                                            <?php $_smarty_tpl->_assignInScope('rangesliderincluded', true);?>
                                                        <?php }?>
                                                        <input type="text" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" class="form-control" />
                                                        <?php echo '<script'; ?>
>
                                                            var sliderTimeoutId = null;
                                                            var sliderRangeDifference = <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtymaximum'];?>
 - <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
;
                                                            // The largest size that looks nice on most screens.
                                                            var sliderStepThreshold = 25;
                                                            // Check if there are too many to display individually.
                                                            var setLargerMarkers = sliderRangeDifference > sliderStepThreshold;

                                                            jQuery("#inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
").ionRangeSlider({
                                                                min: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
,
                                                                max: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtymaximum'];?>
,
                                                                grid: true,
                                                                grid_snap: setLargerMarkers ? false : true,
                                                                onChange: function() {
                                                                    if (sliderTimeoutId) {
                                                                        clearTimeout(sliderTimeoutId);
                                                                    }

                                                                    sliderTimeoutId = setTimeout(function() {
                                                                        sliderTimeoutId = null;
                                                                        recalctotals();
                                                                    }, 250);
                                                                }
                                                            });
                                                        <?php echo '</script'; ?>
>
                                                    <?php } else { ?>
                                                        <div>
                                                            <input type="number" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>" id="inputConfigOption<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" min="<?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
" onchange="recalctotals()" onkeyup="recalctotals()" class="form-control form-control-qty" />
                                                            <span class="form-control-static form-control-static-inline">
                                                                x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>

                                                            </span>
                                                        </div>
                                                    <?php }?>
                                                </div>

				    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
<div class="cart-k">
	<div class="hidden-sm hidden-xs h25"></div>
	<div class="row">
		<div class="cart-l col-sm-2"><i class="fa fa-clone"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;margin-right: -15px;">
			<div class="hidden-sm hidden-xs h10"></div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
?>
			<div class="form-group col-sm-6">
				<div class="col-sm-12" style="border: 1px dashed #ddd; padding: 20px;">
				<?php if ($_smarty_tpl->tpl_vars['customfield']->value['type'] == 'tickbox') {?>
				<label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
" style="margin-bottom: 8px;"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label><br>
										<?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

                                            <span style="display: initial; font-size: 12px;margin-left: 5px; color: #333;">
                                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>

                                            </span><p class="text-muted" style="margin-top: 5px;"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</p>
				<?php } else { ?>
                                        <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
" style="color: #333;"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                                        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

                                        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
                                            <span class="field-help-text" style="margin-top: 9px;">
                                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

                                            </span>
                                        <?php }?>
                <?php }?>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value || count($_smarty_tpl->tpl_vars['addonsPromoOutput']->value) > 0) {?>
<div class="cart-k">
	<div class="hidden-sm hidden-xs h35"></div>
	<div class="row">
		<div class="cart-l col-sm-2"><i class="fa fa-cart-plus"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartavailableaddons'];?>
</div>
		<div class="cartjg col-sm-10" style="margin-left: -15px;">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addonsPromoOutput']->value, 'output');
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

                            <div class="addon-products zzyw">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
?>
                                    <div class="col-sm-4">
                                        <div class="panel panel-default panel-addon<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?> panel-addon-selected<?php }?>">
                                            <div class="panel-body">
                                                <label>
                                                    <input type="checkbox" name="addons[<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
]"<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?> checked<?php }?> />
                                                    <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>

                                                </label><br />
                                                <?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>

                                            </div>
                                            <div class="panel-price">
                                                <?php echo $_smarty_tpl->tpl_vars['addon']->value['pricing'];?>

                                            </div>
                                            <div class="panel-add">
                                                <i class="fa fa-plus"></i>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['addtocart'];?>

                                            </div>
                                        </div>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
    	</div>
	</div>
	<div class="hidden-sm hidden-xs h15"></div>
</div>
<?php }?>

</div>


<div id="cartFooterScrollY" style="margin-top: 20px;"></div>
<div class="cart-footer<?php if ($_smarty_tpl->tpl_vars['productinfo']->value['type'] == "server" && $_smarty_tpl->tpl_vars['configurableoptions']->value) {?> cart-footer-fixed<?php } else {
}?>" id="cartFooter">
	<div class="row" id="scrollingPanelContainer" style="padding-bottom: 5px; padding-top: 5px;">
			<div class="summary-container" id="producttotal" style="background-color: transparent;"></div>
			<i class="fa fa-fw fa-snowflake-o fa-spin loader a0a0<?php if ($_smarty_tpl->tpl_vars['productinfo']->value['type'] == "server" && $_smarty_tpl->tpl_vars['configurableoptions']->value) {
} else { ?> sx0101<?php }?>" id="orderSummaryLoader"></i>
			<button type="submit" id="btnCompleteProductConfig" class="pull-right btn btn-primary btn-lg a101" style="background-color: rgb(255, 102, 0);border-color: rgb(255, 102, 0);">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>

                                    <i class="fa fa-arrow-circle-right"></i>
                               </button>
	</div>
</div>
<div class="cartfb" style="margin-top: 0px;"></div>



</form>
</div>


<?php echo '<script'; ?>
>recalctotals();<?php echo '</script'; ?>
>
<?php }
}
