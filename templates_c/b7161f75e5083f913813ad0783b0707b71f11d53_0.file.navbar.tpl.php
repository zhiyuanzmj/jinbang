<?php
/* Smarty version 3.1.32, created on 2019-10-10 14:23:47
  from '/www/wwwroot/www.zfyun.top/modules/addons/ClientAreaDesigner/templates/admin/pages/panels/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9ece734b59b7_38977476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7161f75e5083f913813ad0783b0707b71f11d53' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/modules/addons/ClientAreaDesigner/templates/admin/pages/panels/navbar.tpl',
      1 => 1538721470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:primaryNavbarRow.tpl' => 1,
    'file:secondaryNavbarRow.tpl' => 1,
    'file:modals.tpl' => 1,
  ),
),false)) {
function content_5d9ece734b59b7_38977476 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="box light">
    <div class="row">
        <div class="col-md-12" id="mg-panels-content" >
            <legend><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Navbars');?>
</legend>
            <p class="page-description"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Manage positions available on the navigation bar in your client area. Additionally, define requirements for element to be shown.');?>
</p>
            <div class="row">
                                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-11 padFix"> <h4 class="panel-title"> <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Primary Navbar - Left Side');?>
</h4> </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-success btn-inverse mg-run-modal-add pull-right" data-class="PrimaryNavbar">
                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Add');?>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 sortable mg-widgets" id="mg-PrimaryNavbar" style="padding-right:0px; padding-bottom: 0px;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryNavbars']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:primaryNavbarRow.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('panel'=>$_smarty_tpl->tpl_vars['item']->value['panel'],'children'=>$_smarty_tpl->tpl_vars['item']->value['children']), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="col-md-4">
                    <div class="panel panel-primary" style="min-height: 203px;">
                        <div class="panel-heading">
                        <div class="row">
                                <div class="col-md-10 padFix"> <h4 class="panel-title"> <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Primary Navbar - Right Side');?>
</h4> </div>
                                <div class="col-md-2">
                                   <button type="button" class="btn btn-success btn-inverse mg-run-modal-add pull-right" data-class="SecondaryNavbar">
                                        <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Add');?>

                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 sortable mg-widgets" id="mg-SecondaryNavbar" style="padding-right:0px;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondaryNavbars']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:secondaryNavbarRow.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('panel'=>$_smarty_tpl->tpl_vars['item']->value['panel'],'children'=>$_smarty_tpl->tpl_vars['item']->value['children']), 0, true);
?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="well well-sm">
                <button id="mg-button-save" type="submit" class="btn btn-primary btn-inverse" style="pointer-events: all; cursor: pointer;">
                    <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Save Order');?>

                </button>
            </div>
            <?php $_smarty_tpl->_subTemplateRender('file:modals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="../modules/addons/ClientAreaDesigner/templates/admin/pages/panels/panels.css">
<?php echo '<script'; ?>
 type="text/javascript" src="../modules/addons/ClientAreaDesigner/templates/admin/pages/panels/panels.js"><?php echo '</script'; ?>
>
<?php }
}
