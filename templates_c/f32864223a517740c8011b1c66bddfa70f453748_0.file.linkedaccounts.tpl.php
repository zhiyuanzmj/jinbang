<?php
/* Smarty version 3.1.32, created on 2019-10-10 09:26:12
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/linkedaccounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e88b4b63fd1_75514720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f32864223a517740c8011b1c66bddfa70f453748' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/linkedaccounts.tpl',
      1 => 1515172566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e88b4b63fd1_75514720 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['linkableProviders']->value || $_smarty_tpl->tpl_vars['hasLinkedProvidersEnabled']->value) && $_smarty_tpl->tpl_vars['linkContext']->value == 'linktable') {?>
    <table id="tableLinkedAccounts" class="table display data-driven"
           data-ajax-url="<?php echo $_smarty_tpl->tpl_vars['linkedAccountsUrl']->value;?>
"
           data-on-draw-rebind-confirmation="true"
           data-lang-empty-table="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.noLinkedAccounts'),$_smarty_tpl ) );?>
"
    >
        <thead>
        <tr class="text-center">
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.provider'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.name'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.emailAddress'),$_smarty_tpl ) );?>
</th>
            <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.actions'),$_smarty_tpl ) );?>
</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="4" class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.noLinkedAccounts'),$_smarty_tpl ) );?>
</td>
        </tr>
        </tbody>
    </table>
<?php } elseif ($_smarty_tpl->tpl_vars['linkableProviders']->value) {?>

    <div id="providerLinkingMessages" class="hidden">
        <p class="providerLinkingMsg-preLink-init_failed">
            <span class="provider-name"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.unavailable'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-connect_error">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.error'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.connectError'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-complete_sign_in">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.completeSignIn'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-2fa_needed">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.redirecting'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-linking_complete">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.success'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.accountNowLinked'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-login_to_link-signin-required">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.linkInitiated'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.oneTimeAuthRequired'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-login_to_link-registration-required">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.linkInitiated'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.completeRegistrationForm'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-checkout-new">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.linkInitiated'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.completeNewAccountForm'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-other_user_exists">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.error'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.linkedToAnotherClient'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-already_linked">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.error'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.alreadyLinkedToYou'),$_smarty_tpl ) );?>

        </p>
        <p class="providerLinkingMsg-preLink-default">
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.error'),$_smarty_tpl ) );?>
</strong> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.connectError'),$_smarty_tpl ) );?>

        </p>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['linkContext']->value == 'registration') {?>
        <div class="sub-heading">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.titleSignUpVerb'),$_smarty_tpl ) );?>
</span>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['linkContext']->value == 'checkout-existing') {?>
        <div class="sub-heading-borderless">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.titleOr'),$_smarty_tpl ) );?>
</span>
        </div>
        <p class="small text-center text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.saveTimeByLinking'),$_smarty_tpl ) );?>
</p>
    <?php } elseif ($_smarty_tpl->tpl_vars['linkContext']->value == 'checkout-new') {?>
        <div class="sub-heading">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.titleSignUpVerb'),$_smarty_tpl ) );?>
</span>
        </div>
        <p class="small text-center text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.saveTimeByLinking'),$_smarty_tpl ) );?>
</p>
    <?php } elseif ($_smarty_tpl->tpl_vars['linkContext']->value == 'clientsecurity') {?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'remoteAuthn.mayHaveMultipleLinks'),$_smarty_tpl ) );?>
</p>
    <?php }?>

    <div class="providerPreLinking" data-link-context="<?php echo $_smarty_tpl->tpl_vars['linkContext']->value;?>
"
         data-hide-on-prelink=<?php if (in_array($_smarty_tpl->tpl_vars['linkContext']->value,array('clientsecurity','login'))) {?>0<?php } else { ?>1<?php }?>
         data-disable-on-prelink=0>
        <div class="social-signin-btns">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkableProviders']->value, 'provider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['provider']->value) {
?>
                <?php if (in_array($_smarty_tpl->tpl_vars['linkContext']->value,array('checkout-existing'))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['provider']->value['login_button'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['provider']->value['code'];?>

                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

    <?php if (!isset($_smarty_tpl->tpl_vars['customFeedback']->value) || !$_smarty_tpl->tpl_vars['customFeedback']->value) {?>
        <div class="providerLinkingFeedback"></div>
    <?php }?>

<?php }
}
}
