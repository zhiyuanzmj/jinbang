<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:40:09
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/addons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e1b7958cff3_68494224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d9b7c5360a92bd32d3bf8096be5bbed8e5b7927' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/addons.tpl',
      1 => 1527725214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
  ),
),false)) {
function content_5d9e1b7958cff3_68494224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div id="order-standard_cart" style="margin-bottom: 80px;">

    <div class="row">



        <div class="col-md-12">
			<h4 style="margin-bottom: 20px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>
</h4>

            <?php if (count($_smarty_tpl->tpl_vars['addons']->value) == 0) {?>
                <div class="alert alert-warning text-center" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddonsnone'];?>

                </div>
                <p class="text-center">
                    <a href="clientarea.php" class="btn btn-default">
                        <i class="fa fa-arrow-circle-left"></i>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['returnToClientArea'];?>

                    </a>
                </p>
            <?php }?>

            <div class="products">
                <div class="row row-eq-height">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'addon', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['addon']->value) {
?>
                        <div class="col-md-6">
                            <div class="product clearfix" id="product<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=add" class="form-inline">
                                    <input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
" />
                                    <header>
                                        <span><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['qty']) {?>
                                            <span class="qty">
                                                <?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];?>

                                            </span>
                                        <?php }?>
                                    </header>
                                    <div class="product-desc">
                                        <p><?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>
</p>
                                        <div class="form-group">
                                            <select name="productid" id="inputProductId<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="field">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addon']->value['productids'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['product']->value['domain']) {?> - <?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];
}?>
                                                    </option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="product-pricing">
                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['free']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                            <?php } else { ?>
                                                <span class="price"><?php echo $_smarty_tpl->tpl_vars['addon']->value['recurringamount'];?>
 <?php echo $_smarty_tpl->tpl_vars['addon']->value['billingcycle'];?>
</span>
                                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['setupfee']) {?><br />+ <?php echo $_smarty_tpl->tpl_vars['addon']->value['setupfee'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?>
                                            <?php }?>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-shopping-cart"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                        </button>
                                    </footer>
                                </form>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['num']->value%2 != 0) {?>
                            </div>
                            <div class="row row-eq-height">
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
