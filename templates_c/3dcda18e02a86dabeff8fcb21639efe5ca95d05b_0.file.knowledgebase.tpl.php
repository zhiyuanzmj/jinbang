<?php
/* Smarty version 3.1.32, created on 2019-10-10 09:05:30
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/knowledgebase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e83da12df53_50445314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dcda18e02a86dabeff8fcb21639efe5ca95d05b' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/knowledgebase.tpl',
      1 => 1528014368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e83da12df53_50445314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/www.zfyun.top/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><section class="content-full content-boxed container push-50-t" style="margin-bottom: 150px;">

						<?php if ($_smarty_tpl->tpl_vars['kbcats']->value) {?>
						<div class="row">
                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbcats']->value, 'kbcat', false, NULL, 'kbcats', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kbcat']->value) {
?>
                            <div class="col-sm-4">
                            	<a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/knowledgebase/<?php echo $_smarty_tpl->tpl_vars['kbcat']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['kbcat']->value['urlfriendlyname'];
} else { ?>knowledgebase.php?action=displaycat&amp;catid=<?php echo $_smarty_tpl->tpl_vars['kbcat']->value['id'];
}?>">
                                <div class="panel panel-block" style="padding: 25px 20px 22px 20px;margin: 0 auto 30px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);border-radius: 3px;">
                                    <h2 class="panel-title h4" style="color: #00ACD4;"><?php echo $_smarty_tpl->tpl_vars['kbcat']->value['name'];?>
 <span class="label label-primary pull-right" style="background-color: #00AAFF;"><?php echo $_smarty_tpl->tpl_vars['kbcat']->value['numarticles'];?>
</span></h2>
                                    <p class="text-muted" style="margin-top: 15px;"><?php echo $_smarty_tpl->tpl_vars['kbcat']->value['description'];?>
</p>
                                </div>
                            	</a>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>    
                        <?php } else { ?>
						    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['knowledgebasenoarticles'],'textcenter'=>true), 0, true);
?>
						<?php }?> 

<?php if ($_smarty_tpl->tpl_vars['kbmostviews']->value) {?>

    <h5 class="push-15 push-10-t"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasepopular'];?>
</h5>

    <div class="kbarticles">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbmostviews']->value, 'kbarticle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kbarticle']->value) {
?>
            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['urlfriendlytitle'];
$_prefixVariable2 = ob_get_clean();
echo routePath('knowledgebase-article-view',$_prefixVariable1,$_prefixVariable2);?>
">
                <span class="glyphicon glyphicon-file"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>

            </a>
            <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['kbarticle']->value['article'],100,"...");?>
</p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

<?php }?>
</section><?php }
}
