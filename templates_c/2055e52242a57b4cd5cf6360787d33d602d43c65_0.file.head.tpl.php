<?php
/* Smarty version 3.1.32, created on 2019-10-09 23:53:55
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e02935adc35_79292853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2055e52242a57b4cd5cf6360787d33d602d43c65' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/includes/head.tpl',
      1 => 1538811164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e02935adc35_79292853 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Styling -->
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/all.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/custom.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        markdownGuide = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.title"),$_smarty_tpl ) );?>
',
        locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo $_smarty_tpl->tpl_vars['mdeLocale']->value;
} else { ?>en<?php }?>',
        saved = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saved"),$_smarty_tpl ) );?>
',
        saving = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"markdown.saving"),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewticket" && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
  <meta name="robots" content="noindex" />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage' || $_smarty_tpl->tpl_vars['filename']->value == 'cart' || $_smarty_tpl->tpl_vars['filename']->value == 'vps' || $_smarty_tpl->tpl_vars['filename']->value == 'webhosting' || $_smarty_tpl->tpl_vars['filename']->value == 'dediserver' || $_smarty_tpl->tpl_vars['filename']->value == 'tos' || $_smarty_tpl->tpl_vars['filename']->value == 'aup' || $_smarty_tpl->tpl_vars['templatefile']->value == 'announcements' || $_smarty_tpl->tpl_vars['templatefile']->value == 'viewannouncement' || $_smarty_tpl->tpl_vars['filename']->value == 'contact' || $_smarty_tpl->tpl_vars['filename']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasearticle' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasecat' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloads' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloaddenied' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloadscat' || $_smarty_tpl->tpl_vars['filename']->value == 'downloads') {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/oneui.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/magnific-popup/magnific-popup.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/slick/slick-theme.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/font.css">
<?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'login' || $_smarty_tpl->tpl_vars['templatefile']->value == 'logout' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientregister' || $_smarty_tpl->tpl_vars['templatefile']->value == 'pwreset' || $_smarty_tpl->tpl_vars['templatefile']->value == 'pwresetvalidation') {?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/oneui.css">
<?php } else { ?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/oneui.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/magnific-popup/magnific-popup.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/slick/slick-theme.min.css">
<?php }
}
}
