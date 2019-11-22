<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:24:54
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e17e66e08c5_16026144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22882e98e26dd60e9a3a9d96a2d0babd59f2ba7b' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/announcements.tpl',
      1 => 1528012364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e17e66e08c5_16026144 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content-full content-boxed container">
<div class="bg-white push-50-t" style="border-radius: 5px;padding: 20px 25px 50px 25px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);margin-bottom: 150px;">
<?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
    <?php echo '<script'; ?>
>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['LANG']->value['locale'];?>
/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    <?php echo '</script'; ?>
>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
?>
                            <a href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" style="display: block;padding-bottom: 12px; margin-top: 20px;border-bottom: 1px solid #eee;"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
<span class="pull-right text-muted hidden-sm hidden-xs" style="font-size: 12px;"><?php echo date("jS M Y",$_smarty_tpl->tpl_vars['announcement']->value['timestamp']);?>
</span></a>

        <?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
            <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
            <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
        <?php }?>
        
<?php
}
} else {
?>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>((string)$_smarty_tpl->tpl_vars['LANG']->value['noannouncements']),'textcenter'=>true), 0, true);
?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['prevpage']->value || $_smarty_tpl->tpl_vars['nextpage']->value) {?>
	<div class="text-center">
        <nav class="post-navigation navigation pagination" role="navigation" style="margin: 50px 0 0 0;">
            <div class="nav-links">
            	<?php if ($_smarty_tpl->tpl_vars['prevpage']->value) {?>
                <a class="page-numbers btn btn-sm" href="<?php echo routePath('announcement-index-paged',$_smarty_tpl->tpl_vars['prevpage']->value,$_smarty_tpl->tpl_vars['view']->value);?>
" style="color: #00AAFF;"><i class="fa fa-long-arrow-left"></i></a>
                <?php } else { ?>
                <span class="page-numbers btn btn-sm " style="color: #ddd;"><i class="fa fa-long-arrow-left"></i></span>
                <?php }?>
                <span class="page-numbers btn btn-sm btn-primary btn-outline btn-circle active" style="background-color: #00AAFF;color: #fff;border-color: #00AAFF;"><?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['nextpage']->value) {?>
                <a class="page-numbers btn btn-sm" href="<?php echo routePath('announcement-index-paged',$_smarty_tpl->tpl_vars['nextpage']->value,$_smarty_tpl->tpl_vars['view']->value);?>
" style="color: #00AAFF;"><i class="fa fa-long-arrow-left"></i></a>
                <?php } else { ?>
                <span class="page-numbers btn btn-sm" style="color: #ddd;"><i class="fa fa-long-arrow-right"></i></span>
                <?php }?>
            </div>
        </nav>
   </div>
   <?php }?>
</div>
</section><?php }
}
