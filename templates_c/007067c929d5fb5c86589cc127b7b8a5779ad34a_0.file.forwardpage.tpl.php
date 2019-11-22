<?php
/* Smarty version 3.1.32, created on 2019-11-22 19:07:02
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/forwardpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dd7c156065229_15581195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007067c929d5fb5c86589cc127b7b8a5779ad34a' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/forwardpage.tpl',
      1 => 1527984818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd7c156065229_15581195 (Smarty_Internal_Template $_smarty_tpl) {
?><br /><br /><br />
<div class="col-sm-8 col-sm-offset-2">
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['message']->value,'textcenter'=>true), 0, true);
?>

<br />

<div class="text-center">

    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/loading.gif" alt="Loading" border="0" />

    <br /><br /><br />

    <div id="frmPayment" align="center">

        <?php echo $_smarty_tpl->tpl_vars['code']->value;?>


        <form method="post" action="<?php if ($_smarty_tpl->tpl_vars['invoiceid']->value) {?>viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;
} else { ?>clientarea.php<?php }?>">
        </form>

    </div>

</div>

<br /><br /><br />

<?php echo '<script'; ?>
 language="javascript">
    setTimeout("autoSubmitFormByContainer('frmPayment')", 5000);
<?php echo '</script'; ?>
>
</div><?php }
}
