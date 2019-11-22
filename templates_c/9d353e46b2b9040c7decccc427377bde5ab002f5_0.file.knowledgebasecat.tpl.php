<?php
/* Smarty version 3.1.32, created on 2019-10-10 21:04:49
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/knowledgebasecat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9f2c71e38416_74151306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d353e46b2b9040c7decccc427377bde5ab002f5' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/knowledgebasecat.tpl',
      1 => 1528014960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9f2c71e38416_74151306 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content-full content-boxed container push-50-t" style="margin-bottom: 150px;">
<p style="font-size: 14px;margin-top: -20px; margin-bottom: 20px;"><?php echo $_smarty_tpl->tpl_vars['breadcrumbnav']->value;?>
</p> 
<?php if ($_smarty_tpl->tpl_vars['kbcats']->value) {?>
                   <div class="blocks row">
                    	<?php if ($_smarty_tpl->tpl_vars['kbcats']->value) {?>
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
                                    <h2 class="panel-title h3"><?php echo $_smarty_tpl->tpl_vars['kbcat']->value['name'];?>
 <span class="label label-primary pull-right"><?php echo $_smarty_tpl->tpl_vars['kbcat']->value['numarticles'];?>
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
                        <?php } else { ?>
						    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['knowledgebasenoarticles'],'textcenter'=>true), 0, true);
?>
						<?php }?>    
                   </div>	
	
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['kbarticles']->value || !$_smarty_tpl->tpl_vars['kbcats']->value) {?>
    <div class="blocks row">
    	<div class="col-sm-12">
    		<div class="panel panel-block" style="padding: 30px 0 20px 0;">
			<ul class="list-styled list-icon article_list" style="list-style: none;margin-left: -18px;">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kbarticles']->value, 'kbarticle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kbarticle']->value) {
?>
                <li style="color: #7782aa;font-size: 15px;margin-bottom: 10px;letter-spacing: 1px;line-height: 30px;"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['urlfriendlytitle'];
$_prefixVariable2 = ob_get_clean();
echo routePath('knowledgebase-article-view',$_prefixVariable1,$_prefixVariable2);?>
"><i class="zmdi zmdi-file-text"></i><?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
</a></li>
                <?php
}
} else {
?>
            	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['knowledgebasenoarticles'],'textcenter'=>true), 0, true);
?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
           </div>
       </div>
    </div>
<?php }?>
</section><?php }
}
