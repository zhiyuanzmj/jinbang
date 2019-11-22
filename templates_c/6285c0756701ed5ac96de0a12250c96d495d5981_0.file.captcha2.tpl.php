<?php
/* Smarty version 3.1.32, created on 2019-10-10 00:02:42
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/captcha2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e04a2590bb5_98029289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6285c0756701ed5ac96de0a12250c96d495d5981' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/captcha2.tpl',
      1 => 1528006178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e04a2590bb5_98029289 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['captcha']->value == "recaptcha") {?>
            <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
            <div id="google-recaptcha-domainchecker" class="g-recaptcha center-block" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['reCaptchaPublicKey']->value;?>
"></div>
        <?php } else { ?>
                	<div class="form-group">
                    <div class="col-xs-8">
                        <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control" placeholder="请输入验证码" />
                    </div>
                    <div class="col-xs-4 captchaimage">
                        <img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />
                    </div>
                	</div>
        <?php }
}
}
}
