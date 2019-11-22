<?php
/* Smarty version 3.1.32, created on 2019-10-10 14:23:47
  from '/www/wwwroot/www.zfyun.top/modules/addons/ClientAreaDesigner/templates/admin/pages/panels/secondaryNavbarRow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9ece73510e53_32748230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10bb6883269281faf1049ac2e74069fa335aa0a8' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/modules/addons/ClientAreaDesigner/templates/admin/pages/panels/secondaryNavbarRow.tpl',
      1 => 1538721470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9ece73510e53_32748230 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default mg-secondary-navbar-widget mg-drag-widget" data-id="<?php echo $_smarty_tpl->tpl_vars['panel']->value['id'];?>
">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-8"> <h3 class="panel-title"><?php if ($_smarty_tpl->tpl_vars['panel']->value['icon']) {?><i class="fa <?php echo $_smarty_tpl->tpl_vars['panel']->value['icon'];?>
"></i><?php }?> <?php if ($_smarty_tpl->tpl_vars['panel']->value['label']) {
echo $_smarty_tpl->tpl_vars['panel']->value['label'];
} else {
echo $_smarty_tpl->tpl_vars['panel']->value['name'];
}?></h3> </div>
            <div style="float:right; margin-right:9px"> 
                <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Edit');?>
"  class="mg-panel-edit"
                   data-id="<?php echo $_smarty_tpl->tpl_vars['panel']->value['id'];?>
" data-class="SecondaryNavbar" data-label="<?php echo $_smarty_tpl->tpl_vars['panel']->value['label'];?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['panel']->value['parent'];?>
"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Delete');?>
" class="mg-panel-delete <?php if (!$_smarty_tpl->tpl_vars['panel']->value['delete']) {?>mg-not-active<?php }?>"
                   data-id="<?php echo $_smarty_tpl->tpl_vars['panel']->value['id'];?>
" data-class="SecondaryNavbar" data-label="<?php echo $_smarty_tpl->tpl_vars['panel']->value['label'];?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['panel']->value['parent'];?>
"><i class="glyphicon glyphicon-trash"></i></a>
                
                <a href="#" class="mg-panel-body-link"><i class="glyphicon glyphicon-plus"></i></a> 
            </div>
        </div>
    </div>
    <div class="panel-body" style="display:none;">

        <?php if (!$_smarty_tpl->tpl_vars['panel']->value['bodyHtml']) {?>
            <div class="list-group sortable">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['children']->value, 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    <div class="list-group-item" data-id="<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['child']->value['icon']) {?> <i class="fa <?php echo $_smarty_tpl->tpl_vars['child']->value['icon'];?>
"></i><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['child']->value['label']) {
echo $_smarty_tpl->tpl_vars['child']->value['label'];
} else {
echo $_smarty_tpl->tpl_vars['child']->value['name'];
}?>
                        <div style="float:right;">
                            <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Edit');?>
"  class="mg-panel-edit"
                               data-id="<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
" data-class="SecondaryNavbar" data-label="<?php echo $_smarty_tpl->tpl_vars['child']->value['label'];?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['child']->value['parent'];?>
"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Delete');?>
" class="mg-panel-delete <?php if (!$_smarty_tpl->tpl_vars['child']->value['delete']) {?>mg-not-active<?php }?>"
                               data-id="<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
" data-class="SecondaryNavbar" data-label="<?php echo $_smarty_tpl->tpl_vars['child']->value['label'];?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['child']->value['parent'];?>
" <?php if (!$_smarty_tpl->tpl_vars['panel']->value['delete']) {?>disabled=""<?php }?>><i class="glyphicon glyphicon-trash"></i></a>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-md-8">
                    <?php echo $_smarty_tpl->tpl_vars['panel']->value['bodyHtml'];?>

                </div>
            </div>
        <?php }?>
        <div class="row"  style="margin-top:8px; ">
            <div class="col-md-8">
                <button <?php if ($_smarty_tpl->tpl_vars['panel']->value['bodyHtml']) {?> disabled=""<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Add');?>
" class="btn btn-sm btn-success  btn-inverse mg-run-modal-add " data-class="SecondaryNavbar" data-id="<?php echo $_smarty_tpl->tpl_vars['panel']->value['id'];?>
" data-class="SecondaryNavbar"  type="button" data-toggle="tooltip">
                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Add');?>
   
                </button>     
            </div>
        </div>
    </div>      
</div><?php }
}
