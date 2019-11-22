<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:53:19
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareaquotes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e1e8f7f08a1_52995538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36b9b2884e6742396b97353de1db15352c78e8d9' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareaquotes.tpl',
      1 => 1515118566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e1e8f7f08a1_52995538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"QuotesList",'noSortColumns'=>"5",'filterColumn'=>"4"), 0, true);
echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableQuotesList').removeClass('hidden').DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'id') {?>
            table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'date') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'validuntil') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'stage') {?>
            table.order(4, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<div class="table-container clearfix">
    <table id="tableQuotesList" class="table table-list hidden">
        <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotenumber'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotesubject'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotedatecreated'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotevaliduntil'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotestage'];?>
</th>
                <th>&nbsp;</th>
                <th class="responsive-edit-button" style="display: none;"></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quotes']->value, 'quote');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['quote']->value) {
?>
                <tr onclick="clickableSafeRedirect(event, 'viewquote.php?id=<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
', true)">
                    <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['quote']->value['subject'];?>
</td>
                    <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['quote']->value['normalisedDateCreated'];?>
</span><?php echo $_smarty_tpl->tpl_vars['quote']->value['datecreated'];?>
</td>
                    <td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['quote']->value['normalisedValidUntil'];?>
</span><?php echo $_smarty_tpl->tpl_vars['quote']->value['validuntil'];?>
</td>
                    <td><span class="label status status-<?php echo $_smarty_tpl->tpl_vars['quote']->value['stageClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['quote']->value['stage'];?>
</span></td>
                    <td class="text-center">
                        <form method="submit" action="dl.php">
                            <input type="hidden" name="type" value="q" />
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
" />
                            <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotedownload'];?>
</button>
                        </form>
                    </td>
                    <td class="responsive-edit-button" style="display: none;">
                        <a href="viewquote.php?id=<?php echo $_smarty_tpl->tpl_vars['quote']->value['id'];?>
" class="btn btn-block btn-info">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['manageproduct'];?>

                        </a>
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
<?php }
}
