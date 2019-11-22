<?php
/* Smarty version 3.1.32, created on 2019-11-16 21:42:28
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dcffcc486c698_83943416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7790ddac22a222d22c34d12586c1dc42e559d9eb' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/header.tpl',
      1 => 1573911719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcffcc486c698_83943416 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body data-phone-cc-input="<?php echo $_smarty_tpl->tpl_vars['phoneNumberInputStyle']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'login' || $_smarty_tpl->tpl_vars['templatefile']->value == 'logout' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientregister' || $_smarty_tpl->tpl_vars['templatefile']->value == 'pwreset' || $_smarty_tpl->tpl_vars['templatefile']->value == 'pwresetvalidation') {?> style="background-color: #F5F5F5;"<?php }?>>

<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage' || $_smarty_tpl->tpl_vars['filename']->value == 'cart' || $_smarty_tpl->tpl_vars['filename']->value == 'vps' || $_smarty_tpl->tpl_vars['filename']->value == 'about' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions1' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions2' || $_smarty_tpl->tpl_vars['filename']->value == 'pages' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions3' || $_smarty_tpl->tpl_vars['filename']->value == 'solutions4' || $_smarty_tpl->tpl_vars['filename']->value == 'promotion' || $_smarty_tpl->tpl_vars['filename']->value == 'webhosting' || $_smarty_tpl->tpl_vars['filename']->value == 'dediserver' || $_smarty_tpl->tpl_vars['filename']->value == 'tos' || $_smarty_tpl->tpl_vars['filename']->value == 'yzm' || $_smarty_tpl->tpl_vars['filename']->value == 'aup' || $_smarty_tpl->tpl_vars['templatefile']->value == 'announcements' || $_smarty_tpl->tpl_vars['templatefile']->value == 'viewannouncement' || $_smarty_tpl->tpl_vars['filename']->value == 'contact' || $_smarty_tpl->tpl_vars['filename']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebase' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasearticle' || $_smarty_tpl->tpl_vars['templatefile']->value == 'knowledgebasecat' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloads' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloaddenied' || $_smarty_tpl->tpl_vars['templatefile']->value == 'downloadscat' || $_smarty_tpl->tpl_vars['filename']->value == 'downloads') {?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/whmcstop/syheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value), 0, true);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['templatefile']->value == 'login' || $_smarty_tpl->tpl_vars['templatefile']->value == 'logout' || $_smarty_tpl->tpl_vars['templatefile']->value == 'clientregister' || $_smarty_tpl->tpl_vars['templatefile']->value == 'pwreset' || $_smarty_tpl->tpl_vars['templatefile']->value == 'pwresetvalidation') {?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/whmcstop/loginheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value), 0, true);
?>

<?php } else { ?>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/whmcstop/hyzxheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value), 0, true);
?>

<?php }?>

		<section id="main-body">
					<div class="main-content">
<?php }
}
