<?php
/* Smarty version 3.1.32, created on 2019-10-10 21:12:46
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/knowledgebasearticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9f2e4eb6ba04_63823488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '174f5bf03818d8cbd0a243072c6767c7ccbb3c93' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/knowledgebasearticle.tpl',
      1 => 1528015388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9f2e4eb6ba04_63823488 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content-full content-boxed container push-50-t" style="margin-bottom: 150px;">
	<p style="font-size: 14px;margin-top: -20px; margin-bottom: 20px;"><?php echo $_smarty_tpl->tpl_vars['breadcrumbnav']->value;?>
</p> 
<div class="kb-article-title text-center push-30-t">
    <a href="#" class="btn btn-link btn-print" onclick="window.print();return false"><i class="fa fa-print"></i></a>
    <h2><?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
</h2>
</div>

<?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['voted']) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"knowledgebaseArticleRatingThanks"),$_smarty_tpl ) );
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success alert-bordered-left",'msg'=>$_prefixVariable1,'textcenter'=>true), 0, true);
}?>

<div class="bg-white push-30-t" style="border-radius: 5px;padding: 35px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);">

<div class="kb-article-content">
    <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['text'];?>

</div>
</div>
<ul class="kb-article-details">
    <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['tags']) {?>
        <li><i class="fa fa-tag"></i> <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['tags'];?>
</li>
    <?php }?>
    <li><i class="fa fa-star"></i> <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['useful'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaseratingtext'];?>
</li>
</ul>
<div class="clearfix"></div>

<div class="kb-rate-article hidden-print">
    <form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['id'];
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['kbarticle']->value['urlfriendlytitle'];
$_prefixVariable3 = ob_get_clean();
echo routePath('knowledgebase-article-view',$_prefixVariable2,$_prefixVariable3);?>
" method="post">
        <input type="hidden" name="useful" value="vote">
        <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['voted']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaserating'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasehelpful'];
}?>
        <?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['voted']) {?>
            <?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['useful'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaseratingtext'];?>
 (<?php echo $_smarty_tpl->tpl_vars['kbarticle']->value['votes'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasevotes'];?>
)
        <?php } else { ?>
            <button type="submit" name="vote" value="yes" class="btn btn-lg btn-link"><i class="fa fa-thumbs-o-up"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaseyes'];?>
</button>
            <button type="submit" name="vote" value="no" class="btn btn-lg btn-link"><i class="fa fa-thumbs-o-down"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebaseno'];?>
</button>
        <?php }?>
    </form>
</div>

</section><?php }
}
