<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:33:14
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e19da964ba4_81322064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b118ee7061397dd4829d5120d66c8054a7f60e' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/navbar.tpl',
      1 => 1535247200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e19da964ba4_81322064 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
								
								<li menuItemName="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" class="<?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>dropdown<?php }
if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-<?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == 'Services') {?>layers<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == 'Domains') {?>globe<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == 'Billing') {?>wallet<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == 'Support') {?>support<?php } else { ?>crop<?php }?>"></i><span class="sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>
</span></a>
                                    <ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value->getChildren(), 'childItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
?>
                                    	<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getName() == "Services Divider" || $_smarty_tpl->tpl_vars['childItem']->value->getName() == "Domains Divider" || $_smarty_tpl->tpl_vars['childItem']->value->getName() == "Domains Divider 2" || $_smarty_tpl->tpl_vars['childItem']->value->getName() == "Billing Divider") {
} else { ?>
                                        <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>
</a>
                                        </li>
                                        <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                              </li>
<?php } else { ?>
    <li menuItemName="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" class="<?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>dropdown<?php }
if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getId();?>
">
        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getUri();?>
">
            <i class="si si-<?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == 'Home') {?>speedometer<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == 'Open Ticket') {?>note<?php } elseif ($_smarty_tpl->tpl_vars['item']->value->getName() == 'Affiliates') {?>diamond<?php } else { ?>crop<?php }?>"></i><span class="sidebar-mini-hide"><?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>
</span>
        </a>
    </li>
  <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
