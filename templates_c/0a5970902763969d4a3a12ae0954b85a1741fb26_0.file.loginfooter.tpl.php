<?php
/* Smarty version 3.1.32, created on 2019-10-10 00:02:42
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/whmcstop/loginfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e04a24eb815_10329400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a5970902763969d4a3a12ae0954b85a1741fb26' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/whmcstop/loginfooter.tpl',
      1 => 1528007316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e04a24eb815_10329400 (Smarty_Internal_Template $_smarty_tpl) {
?>                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Login Content -->


<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "clientregister") {?>
<div class="push-30-t text-center">
            <small class="text-muted"><span class="js-year-copy"></span> &copy; Copyright 2017 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 , All Rights Reserved</small>
        </div>
<?php } else { ?>
<!-- Login Footer -->
        <div class="pulldown push-30-t text-center animated fadeInUp">
            <small class="text-muted"><span class="js-year-copy"></span> &copy; Copyright 2017 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 , All Rights Reserved</small>
        </div>
        <!-- END Login Footer --><?php }?>





<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/core/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/core/jquery.scrollLock.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/core/jquery.appear.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/core/jquery.countTo.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/core/jquery.placeholder.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/core/js.cookie.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/app.js"><?php echo '</script'; ?>
>
        
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/pages/base_pages_login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/jquery-validation/jquery.validate.min.js"><?php echo '</script'; ?>
>

<?php }
}
