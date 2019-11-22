<?php
/* Smarty version 3.1.32, created on 2019-10-09 23:55:55
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/sidebar-categories1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e030bc9a9a1_29155665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4df1e0617e0520a1fb424128ce80dcac2e46a645' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/sidebar-categories1.tpl',
      1 => 1525650474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e030bc9a9a1_29155665 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondarySidebar']->value, 'panel');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['panel']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBodyHtml()) {?>
                <?php echo $_smarty_tpl->tpl_vars['panel']->value->getBodyHtml();?>

        <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
