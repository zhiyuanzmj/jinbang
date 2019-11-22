<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:46:29
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/supportticketslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e1cf5452160_21208656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd43dd0d988538aa9b45fc01e56b51375de48d8c0' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/supportticketslist.tpl',
      1 => 1522977170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e1cf5452160_21208656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tableName'=>"TicketsList",'filterColumn'=>"2"), 0, true);
echo '<script'; ?>
 type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableTicketsList').removeClass('hidden').DataTable();
        <?php if ($_smarty_tpl->tpl_vars['orderby']->value == 'did' || $_smarty_tpl->tpl_vars['orderby']->value == 'dept') {?>
            table.order(0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'subject' || $_smarty_tpl->tpl_vars['orderby']->value == 'title') {?>
            table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'status') {?>
            table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value == 'lastreply') {?>
            table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
        <?php }?>
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
<?php echo '</script'; ?>
>
<div class="table-container clearfix">
    <table id="tableTicketsList" class="table table-list hidden">
        <thead>
            <tr>
                <th class="hidden-sm hidden-xs"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsdepartment'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketssubject'];?>
</th>
                <th class="hidden"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsstatus'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsstatus'];?>
</th>
                <th class="hidden-sm hidden-xs" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketlastupdated'];?>
</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
?>
                <tr onclick="window.location='viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['c'];?>
'">
                    <td class="hidden-sm hidden-xs">
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['department'];?>

                    </td>
                    <td>
                        <a href="viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
&amp;c=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['c'];?>
">
                            <span class="ticket-number" style="font-size: 13px;">#<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
</span>
                            <span class="ticket-subject<?php if ($_smarty_tpl->tpl_vars['ticket']->value['unread']) {?> unread<?php }?>" style="font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['subject'];?>
</span>
                        </a>
                    </td>
                    <td class="hidden">
                        <span class="label status <?php if (is_null($_smarty_tpl->tpl_vars['ticket']->value['statusColor'])) {?>status-<?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusClass'];?>
"<?php } else { ?>status-custom" style="border-color: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusColor'];?>
; color: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusColor'];?>
"<?php }?>>
                            <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ticket']->value['status']);?>

                        </span>
                    </td>
                    <td>
                        <span class="<?php if (is_null($_smarty_tpl->tpl_vars['ticket']->value['statusColor'])) {?>status-<?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusClass'];?>
"<?php } else { ?>status-custom" style="border-color: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusColor'];?>
; color: <?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusColor'];?>
"<?php }?>>
                            <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['ticket']->value['status']);?>

                        </span>
                    </td>
                    <td class="text-center hidden-sm hidden-xs">
                        <span class="hidden"><?php echo $_smarty_tpl->tpl_vars['ticket']->value['normalisedLastReply'];?>
</span>
                        <?php echo $_smarty_tpl->tpl_vars['ticket']->value['lastreply'];?>

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
