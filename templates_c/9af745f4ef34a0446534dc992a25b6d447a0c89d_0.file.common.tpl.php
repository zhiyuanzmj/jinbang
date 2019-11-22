<?php
/* Smarty version 3.1.32, created on 2019-10-09 23:55:55
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e030bc93678_15404101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9af745f4ef34a0446534dc992a25b6d447a0c89d' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/common.tpl',
      1 => 1550039660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories1.tpl' => 1,
  ),
),false)) {
function content_5d9e030bc93678_15404101 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/css/all.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" />
<?php echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/css/cart.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" />
<div class="carthf" style="box-shadow: 0px 1px 10px 2px rgba(0,0,0, 0.05);">
<div class="container">
	<a href="cart.php?a=view"><i class="fa fa-shopping-cart" style="margin-right: 10px;font-size: 20px;color: #00C0FA;"></i><span style="color: #00c0fa;font-weight: 600;font-size: 18px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttitle'];?>
</span></a><span class="hidden-sm hidden-xs" style="color:#999;ffont-size: 15px;margin-left: 20px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['gwcbtsm1'];?>
</span>
	<span class="pull-right" style="margin-top: 11px;"><?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></span>
</div>
</div>
<div class="container">
<?php }
}
