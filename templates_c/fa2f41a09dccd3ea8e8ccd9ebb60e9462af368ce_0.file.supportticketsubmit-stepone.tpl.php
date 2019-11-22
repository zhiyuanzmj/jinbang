<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:34:06
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/supportticketsubmit-stepone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e1a0e17c352_21198312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2f41a09dccd3ea8e8ccd9ebb60e9462af368ce' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/supportticketsubmit-stepone.tpl',
      1 => 1522978060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e1a0e17c352_21198312 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsheader'];?>
</p>

<br />

		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['departments']->value, 'department', false, 'num');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['department']->value) {
?>
			<div class="col-md-<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ticknum'];?>
">
			<a href="<?php echo $_SERVER['PHP_SELF'];?>
?step=2&amp;deptid=<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
" class="balance_block1" style="margin-bottom: 30px;">
				<div>
					<i class="fa <?php if ($_smarty_tpl->tpl_vars['department']->value['id'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['s1'])) {?>fa-comment-o<?php } elseif ($_smarty_tpl->tpl_vars['department']->value['id'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['s2'])) {?>fa-support<?php } elseif ($_smarty_tpl->tpl_vars['department']->value['id'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['s3'])) {?>fa-credit-card<?php } elseif ($_smarty_tpl->tpl_vars['department']->value['id'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['s4'])) {?>fa-ticket<?php } elseif ($_smarty_tpl->tpl_vars['department']->value['id'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['s5'])) {?>fa-user<?php } elseif ($_smarty_tpl->tpl_vars['department']->value['id'] == ((string)$_smarty_tpl->tpl_vars['LANG']->value['s6'])) {?>fa-edit<?php } else { ?>fa-envelope-o<?php }?>" style="color: #1e88e5; font-size: 30px;"></i>
				</div>
				<div>
					<?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>

				</div>
				<div>
					<?php if ($_smarty_tpl->tpl_vars['department']->value['description']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['department']->value['description'];?>

                    <?php }?>
				</div>
			</a>
			</div>
			<?php
}
} else {
?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['nosupportdepartments'],'textcenter'=>true), 0, true);
?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
<?php }
}
