<?php
/* Smarty version 3.1.32, created on 2019-10-09 23:28:17
  from '/www/wwwroot/www.zfyun.top/templates/six/homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9dfc91cbc040_20334292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a00aef4a39c2af6efa4a5c098d9c857bba062695' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/six/homepage.tpl',
      1 => 1532702580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9dfc91cbc040_20334292 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['twitterusername']->value) {?>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['twitterlatesttweets'];?>
</h2>

    <div id="twitterFeedOutput">
        <p class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/loading.gif" /></p>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/twitter.js"><?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->tpl_vars['announcements']->value) {?>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['news'];?>
</h2>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->index++;
$__foreach_announcement_4_saved = $_smarty_tpl->tpl_vars['announcement'];
?>
        <?php if ($_smarty_tpl->tpl_vars['announcement']->index < 2) {?>
            <div class="announcement-single">
                <h3>
                    <span class="label label-default">
                        <?php echo $_smarty_tpl->tpl_vars['carbon']->value->translatePassedToFormat($_smarty_tpl->tpl_vars['announcement']->value['rawDate'],'M jS');?>

                    </span>
                    <a href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</a>
                </h3>

                <blockquote>
                    <p>
                        <?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text'])) < 350) {?>
                            <?php echo $_smarty_tpl->tpl_vars['announcement']->value['text'];?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['announcement']->value['summary'];?>

                            <a href="<?php echo routePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['readmore'];?>
 &raquo;</a>
                        <?php }?>
                    </p>
                </blockquote>

                <?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
                    <?php echo '<script'; ?>
>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) {
                                return;
                            }
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    <?php echo '</script'; ?>
>
                    <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                    <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="<?php echo fqdnRoutePath('announcement-view',$_smarty_tpl->tpl_vars['announcement']->value['id'],$_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle']);?>
" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
                <?php }?>
            </div>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
