<?php
/* Smarty version 3.1.32, created on 2019-10-10 14:41:03
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/ordersummary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9ed27f9ff171_97586474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4336e103cfbe2d71e8769c33351c0554cd71f396' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/ordersummary.tpl',
      1 => 1527543912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9ed27f9ff171_97586474 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm-12 hidden-xs">
	<div class="col-sm-12" style="border-bottom: 1px solid #ddd;padding-bottom: 20px;margin-bottom: 10px;padding-top: 5px;">
		<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttotals']->value['configoptions'], 'configoption');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['configoption']->value) {?>
        <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
            <span class="pull-left">
            	<span class="text-muted">
            		<?php if ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "Operating System") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostos'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "Location") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostlt'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "Cores") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "Memory") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmm'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "Disk Space") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostds'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "hdd") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carthdd'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "Bandwidth") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostbw'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "cpu") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartcpu'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "ram") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostram'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "network") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostnetwork'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "Extra IP Address") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostdlip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "ip") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartip'];?>

					<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['name'] == "控制面板") {?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['hostmb'];?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['configoption']->value['name'];?>

					<?php }?>：
            	</span><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</span>
            <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['recurring'];
if ($_smarty_tpl->tpl_vars['configoption']->value['setup']) {?> + <?php echo $_smarty_tpl->tpl_vars['configoption']->value['setup'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?></span>
        </div>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttotals']->value['addons'], 'addon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->value) {
?>
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
        <span class="pull-left"><span class="text-muted">增值服务</span>：<?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
        <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['addon']->value['recurring'];?>
</span>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'] || $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurring'] || $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['addons']) {?>
    <div class="summary-totals">
        <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup']) {?>
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
                <span class="pull-left"><span class="text-muted">其他：</span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartsetupfees'];?>
</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'];?>
</span>
            </div>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurringexcltax'], 'recurring', false, 'cycle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cycle']->value => $_smarty_tpl->tpl_vars['recurring']->value) {
?>
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
                <span class="pull-left"><span class="text-muted">周期/价格：</span><?php echo $_smarty_tpl->tpl_vars['cycle']->value;?>
</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['recurring']->value;?>
</span>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1']) {?>
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
                <span class="pull-left"><span class="text-muted">其他：</span><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate'];?>
%</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1'];?>
</span>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2']) {?>
    <div class="clearfix col-md-3 col-sm-6" style="line-height: 22px;">
                <span class="pull-left"><span class="text-muted">其他：</span><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname2'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate2'];?>
%</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2'];?>
</span>
            </div>
        <?php }?>
    </div>
<?php }?>
</div></div>
</div>

<div class="col-sm-6">
<div class="col-sm-6 col-xs-6">
<div class="total-due-today" style="margin-left: -10px;">
	<p class="text-muted" style="font-size: 13px;font-weight: 400;margin-bottom: 1px;margin-top: 6px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
：</p>
		<span style="font-size: 24px;color: rgb(255, 102, 0);font-weight: 600;">
			<?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['totaltoday'];?>

		</span> 
</div>
</div>
</div>

<?php }
}
