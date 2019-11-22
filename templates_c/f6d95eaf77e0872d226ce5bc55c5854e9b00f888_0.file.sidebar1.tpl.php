<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:33:44
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/sidebar1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e19f80aef30_07933590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6d95eaf77e0872d226ce5bc55c5854e9b00f888' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/sidebar1.tpl',
      1 => 1520217240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e19f80aef30_07933590 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebar']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['childItem']->value->isDisabled()) {?>
				<?php } else { ?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['item']->value->getClass();
} else { ?>panel-default<?php }
if ($_smarty_tpl->tpl_vars['item']->value->getExtra('mobileSelect') && $_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?> hidden-sm hidden-xs<?php }
if ($_smarty_tpl->tpl_vars['childItem']->value->isCurrent()) {?> active<?php }
if ($_smarty_tpl->tpl_vars['childItem']->value->isDisabled()) {?> hidden<?php }?>"<?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribute('id');?>
"<?php }?>>
                <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['childItem']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
" style="line-height:30px;">
                            <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?><span class="badge pull-right" style="margin-top:6px;"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span><?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                </a>
                </li>
			<?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
