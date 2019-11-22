<?php
/* Smarty version 3.1.32, created on 2019-10-09 23:23:36
  from '/www/wwwroot/www.zfyun.top/admin/templates/blend/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9dfb7813be11_21545410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec70e7529070e2a87ed18c1ca2457d6a1d6edb7e' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/admin/templates/blend/footer.tpl',
      1 => 1532702578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9dfb7813be11_21545410 (Smarty_Internal_Template $_smarty_tpl) {
?>
        </div>
        <div class="clear"></div>

    </div>

    <div class="clear"></div>

    <div class="footerbar clearfix">
        <div class="pull-left">
            <a href="#">
                <i class="fas fa-angle-double-up"></i>
                Top
            </a>
        </div>
        <div class="text-right whmcs-link">
            Copyright &copy; <a href="http://www.whmcs.com/" target="_blank">WHMCompleteSolution</a>.  All Rights Reserved.
        </div>
    </div>

    <div class="intellisearch">
        <form id="frmintellisearch">
            <input type="hidden" name="intellisearch" value="1" />
            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
            <input type="text" name="value" id="intellisearchval" />
            <input type="submit" style="display:none;">
        </form>
    </div>

    <div id="searchresults">
        <div id="searchresultsscroller"></div>
        <div class="close">
            <a href="#" onclick="searchclose();return false">
                <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['clientsummary']['close'];?>

                <img src="images/delete.gif" width="16" height="16" border="0" align="top" />
            </a>
        </div>
    </div>

    <div id="greyout"></div>

<form id="frmmynotes">
    <input type="hidden" name="action" value="savenotes" />
    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />
    <div class="modal fade modal-my-notes" id="myNotes">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-warning">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['mynotes'];?>
</h4>
                </div>
                <div class="modal-body">
                    <textarea id="mynotesbox" name="notes" rows="12" class="form-control"><?php echo $_smarty_tpl->tpl_vars['admin_notes']->value;?>
</textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['cancel'];?>
</button>
                    <button type="button" class="btn btn-primary" onclick="notesclose('1')"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['savechanges'];?>
</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php if ($_smarty_tpl->tpl_vars['clientLimitNotification']->value) {?>
    <div class="client-limit-notification client-limit-notification-form panel panel-<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['class'];?>
" id="clientLimitNotification">
        <div class="panel-heading">
            <button type="button" class="close" id="btnClientLimitNotificationDismiss"><span aria-hidden="true">&times;</span></button>
            <h3 class="panel-title">
                <i class="fas <?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['icon'];?>
"></i>
                <span><?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['title'];?>
</span>
                <small>(<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['numberOfActiveClients'];?>
 / <?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['clientLimit'];?>
)</small>
            </h3>
        </div>
        <div class="panel-body">
            <p><?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['body'];?>
</p>
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['upgradeUrl'];?>
" target="_blank" data-fetch-url="<?php echo routePath('admin-help-license-upgrade-data');?>
">
                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
">
                <input type="hidden" name="getupgradedata" value="1">
                <input type="hidden" name="license_key" value="" class="input-license-key">
                <input type="hidden" name="member_data" value="" class="input-member-data">
                <div class="links">
                    <a href="#" id="btnClientLimitNotificationDontShowAgain" class="btn btn-xs btn-link pull-right">Don't show this again</a>
                    <button type="submit" class="btn btn-xs btn-<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['class'];
if ($_smarty_tpl->tpl_vars['clientLimitNotification']->value['autoUpgradeEnabled']) {?> hidden<?php }?>" id="btnClientLimitNotificationUpgrade">Upgrade Now</button>
                    <?php if ($_smarty_tpl->tpl_vars['clientLimitNotification']->value['learnMoreUrl']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['learnMoreUrl'];?>
" class="btn btn-xs <?php if ($_smarty_tpl->tpl_vars['clientLimitNotification']->value['autoUpgradeEnabled']) {?>btn-<?php echo $_smarty_tpl->tpl_vars['clientLimitNotification']->value['class'];
} else { ?>btn-link<?php }?>" target="_blank">Learn more &raquo;</a>
                    <?php }?>
                </div>
            </form>
        </div>
    </div>
<?php }?>

<div class="modal whmcs-modal fade" id="modalAjax" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading" id="modalAjaxHeader">
                <button id="modalAjaxCloseSmall" type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="modalAjaxTitle">Title</h4>
            </div>
            <div class="modal-body panel-body" id="modalAjaxBody">
                Loading...
            </div>
            <div class="modal-footer panel-footer" id="modalAjaxFooter">
                <div id="modalFooterLeft"></div>
                <div class="pull-left loader" id="modalAjaxLoader">
                    <i class="fas fa-circle-notch fa-spin"></i> Loading...
                </div>
                <button id="modalAjaxClose" type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary modal-submit" id="modalAjaxSubmit">
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
