<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:51:57
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareasecurity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e1e3de7efa3_43586546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efb91aafa2d744e9878394ff71d64d1c1d665f1e' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareasecurity.tpl',
      1 => 1515118566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e1e3de7efa3_43586546 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['linkableProviders']->value) {?>
    <h2>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.titleLinkedAccounts'),$_smarty_tpl ) );?>

    </h2>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"clientsecurity"), 0, true);
?>

    <br>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/linkedaccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkContext'=>"linktable"), 0, true);
?>

    <br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['twofaavailable']->value) {?>

    <?php if ($_smarty_tpl->tpl_vars['twofaactivation']->value) {?>

        <div id="twofaactivation">
            <?php echo $_smarty_tpl->tpl_vars['twofaactivation']->value;?>

        </div>

    <?php } else { ?>

        <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['twofactorauth'];?>
</h2>

        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientAreaSecurityTwoFactorAuthRecommendation"),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"warning",'msg'=>$_prefixVariable1), 0, true);
?>

        <p>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['twofaactivationintro'];?>

        </p>

        <br />

        <form method="post" action="clientarea.php?action=security">
            <input type="hidden" name="2fasetup" value="1" />
            <p align="center">
                <?php if ($_smarty_tpl->tpl_vars['twofastatus']->value) {?>
                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['twofadisableclickhere'];?>
" class="btn btn-danger" />
                <?php } else { ?>
                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['twofaenableclickhere'];?>
" class="btn btn-success" />
                <?php }?>
            </p>
        </form>

        <br />
        <br />

    <?php }?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['securityquestionsenabled']->value && !$_smarty_tpl->tpl_vars['twofaactivation']->value) {?>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavsecurityquestions'];?>
</h2>

    <?php if ($_smarty_tpl->tpl_vars['successful']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['changessavedsuccessfully'],'textcenter'=>true), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['nocurrent']->value) {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientAreaSecurityNoSecurityQuestions"),$_smarty_tpl ) );
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable2), 0, true);
?>
    <?php } else { ?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"clientAreaSecuritySecurityQuestionOtherError"),$_smarty_tpl ) );
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_prefixVariable3), 0, true);
?>
    <?php }?>

    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?action=security">

        <?php if (!$_smarty_tpl->tpl_vars['nocurrent']->value) {?>
        <div class="form-group">
            <label for="inputCurrentAns" class="control-label"><?php echo $_smarty_tpl->tpl_vars['currentquestion']->value;?>
</label>
            <input type="password" name="currentsecurityqans" id="inputCurrentAns" class="form-control" autocomplete="off" />
        </div>
        <?php }?>

        <div class="form-group">
            <label for="inputSecurityQid" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
</label>
            <select name="securityqid" id="inputSecurityQid" class="form-control">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['securityquestions']->value, 'question', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['question']->value) {
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="inputSecurityAns1" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
</label>
                    <input type="password" name="securityqans" id="inputSecurityAns1" class="form-control" autocomplete="off" />
                </div>

            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="inputSecurityAns2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityconfanswer'];?>
</label>
                    <input type="password" name="securityqans2" id="inputSecurityAns2" class="form-control" autocomplete="off" />
                </div>

            </div>
        </div>

        <p class="text-center">
            <input class="btn btn-primary" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasavechanges'];?>
" />
            <input class="btn btn-default" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cancel'];?>
" />
        </p>

    </form>

    <br />
    <br />

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['showSsoSetting']->value && !$_smarty_tpl->tpl_vars['twofaactivation']->value) {?>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['sso']['title'];?>
</h2>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['sso']['summary']), 0, true);
?>

    <form id="frmSingleSignOn">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
        <input type="hidden" name="action" value="security" />
        <input type="hidden" name="toggle_sso" value="1" />
        <div class="margin-10">
            <input type="checkbox" name="allow_sso" class="toggle-switch-success" id="inputAllowSso"<?php if ($_smarty_tpl->tpl_vars['isSsoEnabled']->value) {?> checked<?php }?>>
            &nbsp;
            <span id="ssoStatusTextEnabled"<?php if (!$_smarty_tpl->tpl_vars['isSsoEnabled']->value) {?> class="hidden"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['sso']['enabled'];?>

            </span>
            <span id="ssoStatusTextDisabled"<?php if ($_smarty_tpl->tpl_vars['isSsoEnabled']->value) {?> class="hidden"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['sso']['disabled'];?>

            </span>
        </div>
    </form>

    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['sso']['disablenotice'];?>
</p>

    <br />
    <br />

<?php }
}
}
