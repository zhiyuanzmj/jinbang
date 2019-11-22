<?php
/* Smarty version 3.1.32, created on 2019-10-10 09:26:12
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/pwreset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e88b423f202_32462684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acfee89c29fe063af39cb0b7b03b0cff01dccd31' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/pwreset.tpl',
      1 => 1528008418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e88b423f202_32462684 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['noPasswordResetWhenLoggedIn'],'textcenter'=>true), 0, true);
?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
							<p class="text-center text-muted">
                           	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationcheckemail'];?>

                            </p>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationsent'],'textcenter'=>true), 0, true);
?>

            

        <?php } else { ?>

            

            <?php if ($_smarty_tpl->tpl_vars['securityquestion']->value) {?>

                <p class="text-center text-muted"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsecurityquestionrequired'];?>
</p>
<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['errormessage']->value,'textcenter'=>true), 0, true);
?>
            <?php }?>
                <form method="post" action="pwreset.php"  class="js-validation-reminder form-horizontal push-30-t form-stacked">
                    <input type="hidden" name="action" value="reset" />
                    <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
					<div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="text" name="answer" class="form-control" id="inputAnswer">
                                            <label for="inputAnswer" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['securityquestion']->value;?>
</label>
                                        </div>
                                    </div>
                    </div>

                    <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-sm btn-block btn-primary" type="submit"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
</button>
                                    </div>
                    </div>

               </form>

            <?php } else { ?>

                <p class="text-center text-muted"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetemailneeded'];?>
</p>
<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['errormessage']->value,'textcenter'=>true), 0, true);
?>
            <?php }?>
                <form class="js-validation-reminder form-horizontal push-30-t" method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
pwreset.php" role="form">
                    <input type="hidden" name="action" value="reset" />
                    <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="email" name="email" class="form-control" id="inputEmail">
                                            <label for="inputEmail" style="color: #767676;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginemail'];?>
</label>
                                        </div>
                                    </div>
                    </div>
                    <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-sm btn-block btn-primary" type="submit"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
</button>
                                    </div>
                               </div>

                </form>
                <!-- Extra Links -->
                            <div class="text-center push-50-t">
                                <a href="login.php" style="color: #00AAFF;">返回登录页 >></a>
                            </div>
                            <!-- END Extra Links -->

            <?php }?>

        <?php }?>
    <?php }
}
}
