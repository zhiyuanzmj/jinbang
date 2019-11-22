<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:25:27
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/downloads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e1807aab754_34592956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '235d1da270069ccf4c6416ff9123382d5fe6f0a5' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/downloads.tpl',
      1 => 1528016414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e1807aab754_34592956 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content-full content-boxed container push-50-t" style="margin-bottom: 150px;">
<?php if (empty($_smarty_tpl->tpl_vars['dlcats']->value)) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'],'textcenter'=>true), 0, true);
} else { ?>

<div class=" row">
                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dlcats']->value, 'dlcat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dlcat']->value) {
?>
                            <div class="col-sm-4">
                            	<a href="<?php echo routePath('download-by-cat',$_smarty_tpl->tpl_vars['dlcat']->value['id'],$_smarty_tpl->tpl_vars['dlcat']->value['urlfriendlyname']);?>
">
                                <div class="panel panel-block" style="padding: 25px 20px 22px 20px;margin: 0 auto 30px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);border-radius: 3px;">
                                    <h2 class="panel-title h3"><?php echo $_smarty_tpl->tpl_vars['dlcat']->value['name'];?>
 <span class="label label-primary pull-right" style="background-color: #00AAFF;"><?php echo $_smarty_tpl->tpl_vars['dlcat']->value['numarticles'];?>
</span></h2>
                                    <p class="text-muted" style="margin-top: 15px;"><?php echo $_smarty_tpl->tpl_vars['dlcat']->value['description'];?>
</p>
                                </div>
                            	</a>
                            </div>
                        <?php
}
} else {
?>
				            <div class="col-sm-12">
				                <p class="text-center fontsize3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>
</p>
				            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>     
                   </div>

    <h5 class="push-15 push-10-t"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadspopular'];?>
</h5>

    <div class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mostdownloads']->value, 'download');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['download']->value) {
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['download']->value['link'];?>
" class="list-group-item col-sm-4" style="position: relative;display: block;padding: 10px 15px;background-color: #fff;border: 1px solid #ddd;border-radius: 4px;">
                <h4 style="font-size: 15px;line-height: 30px;padding: 0 5px;">
                    <i class="fa fa-download"></i>
                    <b><?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>
</b>
                    <?php if ($_smarty_tpl->tpl_vars['download']->value['clientsonly']) {?>
                        <i class="fa fa-lock text-muted"></i>
                    <?php }?>
                    <small class="pull-right text-muted" style="font-size: 12px;margin-top: 10px;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsfilesize'];?>
: <?php echo $_smarty_tpl->tpl_vars['download']->value['filesize'];?>
</small>
                </h4>
                <h5 class="text-muted" style="font-size: 14px;line-height: 30px;font-weight: 300;padding: 0 5px;"><?php echo $_smarty_tpl->tpl_vars['download']->value['description'];?>
</h5>
            </a>
        <?php
}
} else {
?>
            <span class="list-group-item text-center">
                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>

            </span>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>
</section><?php }
}
