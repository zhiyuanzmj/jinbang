<?php
/* Smarty version 3.1.32, created on 2019-10-09 23:55:55
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e030bc84e08_52051792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f71228cf3bc6e8bc1463826a157e08759626bf0' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/products.tpl',
      1 => 1528604394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories2.tpl' => 1,
  ),
),false)) {
function content_5d9e030bc84e08_52051792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/js/buy.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
<div id="order-standard_cart">
	<div class="cartbk">
		<div class="text-center carttb">
			<div class="flac <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>col-sm-4 col-xs-4<?php } else { ?>col-sm-6 col-xs-6<?php }
} else { ?>col-sm-6 col-xs-6<?php }?>">
				<?php echo $_smarty_tpl->tpl_vars['LANG']->value['gwczjcp'];?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value && $_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>
							<a href="cart.php?a=add&domain=register" class="fl <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>col-sm-4 col-xs-4<?php } else { ?>col-sm-6 col-xs-6<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>
</a>
			<?php } elseif ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
							<a href="cart.php?a=add&domain=register" class="fl <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>col-sm-4 col-xs-4<?php } else { ?>col-sm-6 col-xs-6<?php }?>"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>
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
			<div class="cart-l col-sm-2"><i class="fa fa-clone"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartlx'];?>
</div>
			<div class="cart-r cpfl col-sm-10">
				<ul class="nav nav-tabs" data-toggle="tabs">
					<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl1kg'] == "1") {?>
					<li<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl1'] == ((string)$_smarty_tpl->tpl_vars['value']->value[1])) {?> class="active"<?php }?>>
						<a href="#<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl1'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl1name'];?>
</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl2kg'] == "1") {?>
					<li<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl2'] == ((string)$_smarty_tpl->tpl_vars['value']->value[1])) {?> class="active"<?php }?>>
						<a href="#<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl2'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl2name'];?>
</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl3kg'] == "1") {?>
					<li<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl3'] == ((string)$_smarty_tpl->tpl_vars['value']->value[1])) {?> class="active"<?php }?>>
						<a href="#<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl3'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl3name'];?>
</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl4kg'] == "1") {?>
					<li<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl4'] == ((string)$_smarty_tpl->tpl_vars['value']->value[1])) {?> class="active"<?php }?>>
						<a href="#<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl4'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl4name'];?>
</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl5kg'] == "1") {?>
					<li<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl5'] == ((string)$_smarty_tpl->tpl_vars['value']->value[1])) {?> class="active"<?php }?>>
						<a href="#<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl5'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl5name'];?>
</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl6kg'] == "1") {?>
					<li<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl6'] == ((string)$_smarty_tpl->tpl_vars['value']->value[1])) {?> class="active"<?php }?>>
						<a href="#<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl6'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl6name'];?>
</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl7kg'] == "1") {?>
					<li<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl7'] == ((string)$_smarty_tpl->tpl_vars['value']->value[1])) {?> class="active"<?php }?>>
						<a href="#<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl7'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl7name'];?>
</a>
					</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl8kg'] == "1") {?>
					<li<?php if ($_smarty_tpl->tpl_vars['LANG']->value['fl8'] == ((string)$_smarty_tpl->tpl_vars['value']->value[1])) {?> class="active"<?php }?>>
						<a href="#<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl8'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl8name'];?>
</a>
					</li>
					<?php }?>
				</ul>
			</div>
			</div>
			<div class="hidden-sm hidden-xs h15"></div>
		</div>
		<div class="cart-k">
			<div class="hidden-sm hidden-xs h15"></div>
			<div class="row">
			<div class="cart-l col-sm-2"><i class="fa fa-map-marker"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartjd'];?>
</div>
			<div class="cart-r kyq col-sm-10">
				<?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				<div style="margin-left: 8px;margin-top: 10px;border-bottom: 1px dashed #EEE;padding: 8px 0;"><i class="si si-info" style="color: #00a2ca;margin-right: 10px;vertical-align: middle;"></i><span style="color: #333;vertical-align: middle;"><?php echo $_smarty_tpl->tpl_vars['productGroup']->value['headline'];?>
</span></div>
				<p class="text-muted" style="margin-left: 8px; margin-top: 6px;"><?php if ($_smarty_tpl->tpl_vars['productGroup']->value['tagline']) {
echo $_smarty_tpl->tpl_vars['productGroup']->value['tagline'];
} else { ?>&nbsp;<?php }?></p>
			</div>
			</div>
			<div class="hidden-sm hidden-xs h10"></div>
		</div>
		<div class="cart-k" style="border-bottom: none;">
			<div class="hidden-sm hidden-xs h15"></div>
			<div class="row">
			<div class="cart-l col-sm-2"><i class="fa fa-object-group"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttc'];?>
</div>
			<div class="cplb col-sm-10">
				<ul class="nav nav-tabs" data-toggle="tabs">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookAboveProductsOutput']->value, 'output');
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
				<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <div class="alert alert-danger" style="margin-right: 15px;margin-top: 5px;">
                    <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                </div>
            	<?php }?>	
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <li class="col-md-3 col-sm-6 col-xs-12">
						<a <?php if ($_smarty_tpl->tpl_vars['product']->value['qty'] == "0" || $_smarty_tpl->tpl_vars['product']->value['qty'] < 0) {?>href="#qh" data-toggle="tab"<?php } else { ?>href="#cart<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>b<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else {
echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>" data-toggle="tab"<?php }?>>
							<div class="lbt">
				<?php if ($_smarty_tpl->tpl_vars['product']->value['isFeatured']) {?>
    				<span class="discount_tag">
						<span>
							<?php echo $_smarty_tpl->tpl_vars['LANG']->value['gwctjcp'];?>

						</span>
					</span>
				<?php }?>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<br>
							<span>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['product']->value['displayprice']) {?>
                                               <?php echo $_smarty_tpl->tpl_vars['product']->value['displayprice'];?>

                                            <?php }?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundledeal'];?>

                                        <?php } else { ?>
                                        	<?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']) {?>
                                        	<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price']));?>
                                            <?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                                             <font style="font-weight: 300;font-size: 12px;"><?php if ($_smarty_tpl->tpl_vars['product']->value['paytype'] == "free") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['paytype'] == "onetime") {?>
      										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];?>

	  										<?php }?>
	  										<?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "monthly") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "quarterly") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "semiannually") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "annually") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "biennially") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "triennially") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>

                                            <?php }?></font>
                                             + <?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['setupFee']->toPrefixed();?>
 <font style="font-weight: 300;font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];?>
</font>
                                            
                                            <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price']));?>
                                            <?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
 
                                            <font style="font-weight: 300;font-size: 12px;"><?php if ($_smarty_tpl->tpl_vars['product']->value['paytype'] == "free") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['paytype'] == "onetime") {?>
      										<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];?>

	  										<?php }?>
	  										<?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "monthly") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "quarterly") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "semiannually") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "annually") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "biennially") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle'] == "triennially") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>

                                            <?php }?></font>
                                            <?php }?>
                                        <?php }?>
							</span>
							</div>
							<div class="lbb">
							<?php if ($_smarty_tpl->tpl_vars['product']->value['featuresdesc']) {?>
            					<?php echo $_smarty_tpl->tpl_vars['product']->value['featuresdesc'];?>

        					<?php }?>
							</div>
						</a>
						</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hookBelowProductsOutput']->value, 'output');
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
                </ul>
			</div>
			</div>
			<div class="hidden-sm hidden-xs h10"></div>
		</div>
	</div>

<div id="cartFooterScrollY" style="margin-top: 15px;"></div>
<div class="cart-footer cart-footer-fixed" id="cartFooter" style="height: 100px;">
	<div class="tab-content" style="padding: 25px 0 0 20px;">
		<p class="text-muted" style="font-size: 13px;font-weight: 400;margin-bottom: 8px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['xzcpfz'];?>
：</p>
		<span style="font-size: 16px;color: rgb(255, 102, 0);font-weight: 600;">
			<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
			<?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

		</span>
		<div class="tab-pane active">
		<a class="pull-right jzgm"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['xzcptc'];?>
</a>
		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
?>
		<div class="tab-pane" id="<?php if ($_smarty_tpl->tpl_vars['product']->value['qty'] == "0" || $_smarty_tpl->tpl_vars['product']->value['qty'] < 0) {?>qh<?php } else { ?>cart<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>b<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else {
echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}
}?>">
		<a <?php if ($_smarty_tpl->tpl_vars['product']->value['qty'] == "0" || $_smarty_tpl->tpl_vars['product']->value['qty'] < 0) {
} else { ?>href="cart.php?a=add&<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>bid=<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else { ?>pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>"<?php }?> class="pull-right <?php if ($_smarty_tpl->tpl_vars['product']->value['qty'] == "0" || $_smarty_tpl->tpl_vars['product']->value['qty'] < 0) {?>jzgm<?php } else { ?>gman<?php }?>" style="color: #fff;"><?php if ($_smarty_tpl->tpl_vars['product']->value['qty'] == "0" || $_smarty_tpl->tpl_vars['product']->value['qty'] < 0) {
echo $_smarty_tpl->tpl_vars['LANG']->value['cartqh'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];
}?></a>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<div class="cartfb" style="margin-top: 0px;"></div>
</div>
<?php }
}
