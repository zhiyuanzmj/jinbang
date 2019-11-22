<?php
/* Smarty version 3.1.32, created on 2019-11-16 21:42:28
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dcffcc4899f23_98269308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '171b73fe2908bf0d2b8eb288a00767589f85709e' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/footer.tpl',
      1 => 1573911734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcffcc4899f23_98269308 (Smarty_Internal_Template $_smarty_tpl) {
?>
    </div>
</section>


<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions1' || $_smarty_tpl->tpl_vars['filename']->value == 'about' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions2' || $_smarty_tpl->tpl_vars['filename']->value == 'pages' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions3' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions4' || $_smarty_tpl->tpl_vars['filename']->value == 'cart' || $_smarty_tpl->tpl_vars['filename']->value == 'promotion' || $_smarty_tpl->tpl_vars['filename']->value == 'vps' || $_smarty_tpl->tpl_vars['filename']->value == 'webhosting' || $_smarty_tpl->tpl_vars['filename']->value == 'dediserver' || $_smarty_tpl->tpl_vars['filename']->value == 'tos' || $_smarty_tpl->tpl_vars['filename']->value == 'aup' || $_smarty_tpl->tpl_vars['templatefile']->value == 'announcements' || $_smarty_tpl->tpl_vars['templatefile']->value == 'viewannouncement' || $_smarty_tpl->tpl_vars['filename']->value == 'contact' || $_smarty_tpl->tpl_vars['filename']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasearticle' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasecat' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloads' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloaddenied' || $_smarty_tpl->tpl_vars['filename']->value == 'yzm' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloadscat' || $_smarty_tpl->tpl_vars['filename']->value == 'downloads') {?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/whmcstop/syfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value), 0, true);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'login' || $_smarty_tpl->tpl_vars['templatefile']->value == 'logout' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientregister' || $_smarty_tpl->tpl_vars['templatefile']->value == 'pwreset' || $_smarty_tpl->tpl_vars['templatefile']->value == 'pwresetvalidation') {?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/whmcstop/loginfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value), 0, true);
?>

<?php } else { ?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/whmcstop/hyzxfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value), 0, true);
?>

<?php }?>


<div class="modal system-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body panel-body">
                Loading...
            </div>
            <div class="modal-footer panel-footer">
                <div class="pull-left loader">
                    <i class="fa fa-circle-o-notch fa-spin"></i> Loading...
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }
}
