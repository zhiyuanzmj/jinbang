<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:33:14
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/verifyemail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e19daa00eb1_78707402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63063c31bc52f6ef895a12f83f4c4210071f0ac7' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/verifyemail.tpl',
      1 => 1515118566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e19daa00eb1_78707402 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value) {?>
    <div class="email-verification success">
        <div class="container">
            <i class="fa fa-check"></i>
            <span class="text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailAddressVerified'];?>
</span>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value === false) {?>
    <div class="email-verification failed">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-xs-push-10 col-sm-1 col-sm-push-11">
                    <button type="button" class="btn close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="col-xs-10 col-xs-pull-2 col-sm-7 col-sm-pull-1 col-md-8">
                    <i class="fa fa-times-circle"></i>
                    <span class="text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailKeyExpired'];?>
</span>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-sm-pull-1">
                    <button id="btnResendVerificationEmail" class="btn btn-default btn-sm btn-block">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
                </div>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationPending']->value && !$_smarty_tpl->tpl_vars['showingLoginPage']->value) {?>
    <div class="email-verification">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-xs-push-10 col-sm-1 col-sm-push-11">
                    <button type="button" class="btn close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="col-xs-10 col-xs-pull-2 col-sm-7 col-sm-pull-1 col-md-8">
                    <i class="fa fa-warning"></i>
                    <span class="text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>
</span>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-sm-pull-1">
                    <button id="btnResendVerificationEmail" class="btn btn-default btn-sm btn-block btn-resend-verify-email">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                    </button>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
