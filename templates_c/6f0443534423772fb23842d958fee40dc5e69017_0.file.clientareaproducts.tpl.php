<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:33:23
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareaproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e19e3b8acd9_45921247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f0443534423772fb23842d958fee40dc5e69017' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareaproducts.tpl',
      1 => 1522547326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e19e3b8acd9_45921247 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['clientsstats']->value['productsnumtotal'] > 0) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"ServicesList",'filterColumn'=>"4"), 0, true);
echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableServicesList').removeClass('hidden').DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'product') {?>
            table.order([0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
'], [4, 'asc']);
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'amount' || $_smarty_tpl->tpl_vars['orderby']->value == 'billingcycle') {?>
            table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'nextduedate') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'domainstatus') {?>
            table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<div class="table-container clearfix">
    <table id="tableServicesList" class="table table-list hidden">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderproduct'];?>
</th>
                <th class="hidden-sm hidden-xs"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddonpricing'];?>
</th>
                <th class="hidden-sm hidden-xs"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartchoosecycle'];?>
</th>
                <th class="hidden-sm hidden-xs"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
</th>
                <th class="hidden"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
</th>
                <th class="responsive-edit-button" style="display: none;"></th>
                <th style="text-align: center;">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['service']->value) {
?>
                <tr onclick="clickableSafeRedirect(event, 'clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
', false)">
                    <td><strong style="color: #000000;"><?php echo $_smarty_tpl->tpl_vars['service']->value['product'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['service']->value['domain']) {?><br /><a href="http://<?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
</a><?php }?></td>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['service']->value['amountnum'];?>
" class="hidden-sm hidden-xs"><?php echo $_smarty_tpl->tpl_vars['service']->value['amount'];?>
</td>
                    <td class="hidden-sm hidden-xs"><?php echo $_smarty_tpl->tpl_vars['service']->value['billingcycle'];?>
</td>
                    <td class="hidden-sm hidden-xs"><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['service']->value['normalisedNextDueDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['service']->value['nextduedate'];?>
</td>
                    <td class="hidden"><span class="label status status-<?php echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['statustext'];?>
</span></td>
                    <td><span class="status-<?php echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);?>
"><i class="fa  <?php if (strtolower($_smarty_tpl->tpl_vars['service']->value['status']) == "active") {?>fa-circle<?php } elseif (strtolower($_smarty_tpl->tpl_vars['service']->value['status']) == "completed") {?>fa-dot-circle-o<?php } elseif (strtolower($_smarty_tpl->tpl_vars['service']->value['status']) == "pending") {?>fa-spinner<?php } elseif (strtolower($_smarty_tpl->tpl_vars['service']->value['status']) == "suspended") {?>fa-pause<?php } elseif (strtolower($_smarty_tpl->tpl_vars['service']->value['status']) == "terminated") {?> fa-trash-o<?php } elseif (strtolower($_smarty_tpl->tpl_vars['service']->value['status']) == "cancelled") {?>fa-ban<?php } elseif (strtolower($_smarty_tpl->tpl_vars['service']->value['status']) == "fraud") {?>fa-exclamation-triangle<?php }?>" style="font-size:12px;"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['service']->value['statustext'];?>
</span></td>
                    <td class="responsive-edit-button" style="display: none;">
                        <a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" class="btn btn-block btn-info">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['manageproduct'];?>

                        </a>
                    </td>
                    <td class="text-center">
													<div class="btn-group">
														<a type="button" class="btn btn-default"  href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" style="background: #FFFFFF;font-weight: 400; font-size: 13px;"><i class="fa fa-cogs"></i>&nbsp; 管理</a>
													</div>
                    </td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <div class="text-center" id="tableLoading">
        <p><i class="fa fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>
</p>
    </div>
</div>
<?php } else { ?>
							<div class="portlet">
								<!-- end PROJECT HEAD -->
								<div class="portlet-body">
                                  <div class="col-sm-12 text-center">
                                    <p style="padding-top:50px;"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/empty.png" class="hidden-sm hidden-xs" width="330" height="190"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/empty.png" class="hidden-lg hidden-md" width="231" height="133"></p>
                                    <h4 style="padding-top:10px;"><b><?php echo $_smarty_tpl->tpl_vars['LANG']->value['gmsm'];?>
</b></h4>
                                    <p style="padding-top:20px; line-height:22px; color:#666;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['gmsm1'];?>
</p>
                                       <p style="padding-top:15px;"><a href="cart.php" class="btn btn-primary" style="background-color: #00aaff;border-color: #00aaff;border-radius: 0;"><i class="fa fa-plus"></i>&nbsp; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['gmsm3'];?>
</a>&nbsp; &nbsp;&nbsp;<a href="knowledgebase.php" target="_blank" class="text-primary" style="text-decoration: none; color: #06c;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['gmsm2'];?>
&nbsp;&nbsp;<i class="fa fa-external-link"></i></a></p>
                                  </div>
                              </div>
</div>
<?php }
}
}
