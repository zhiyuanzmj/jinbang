<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:06:57
  from '/www/wwwroot/www.zfyun.top/admin/templates/whatsnew_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e13b1932df5_81792980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce2c44b8067a5cfee198fa3da2df867a6079a743' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/admin/templates/whatsnew_modal.tpl',
      1 => 1532702578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e13b1932df5_81792980 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function () {
        $('.feature-highlights-carousel').owlCarousel({
            items: 1,
            loop: true,
            center: true,
            mouseDrag: true,
            touchDrag: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true
        });

        setTimeout(function() { $('.feature-highlights-carousel .feature').removeClass('hidden'); }, 500);

        var dismissedForAdmin = parseInt('<?php echo $_smarty_tpl->tpl_vars['dismissedForAdmin']->value;?>
');

        if (dismissedForAdmin) {
            $('#cbFeatureHighlightsDismissForVersion').attr('checked', true);
        }
    });
<?php echo '</script'; ?>
>

<div class="feature-highlights-content">
    <div class="feature-highlights-carousel owl-carousel owl-theme">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature', false, 'featureId');
$_smarty_tpl->tpl_vars['feature']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['featureId']->value => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->iteration++;
$__foreach_feature_0_saved = $_smarty_tpl->tpl_vars['feature'];
?>
            <div class="feature<?php if ($_smarty_tpl->tpl_vars['featureId']->value > 0) {?> hidden<?php }?>" id="featureHighlight<?php echo $_smarty_tpl->tpl_vars['featureId']->value;?>
">
                <div class="icon-image">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['feature']->value->getIcon();?>
">
                </div>
                <h1<?php if ($_smarty_tpl->tpl_vars['feature']->value->hasHeadlineImage()) {?> class="with-headline"<?php }?>><?php echo $_smarty_tpl->tpl_vars['feature']->value->getTitle();?>
</h1>
                <?php if ($_smarty_tpl->tpl_vars['feature']->value->hasHeadlineImage()) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['feature']->value->getHeadlineImage();?>
" class="headline-image">
                <?php }?>
                <h2><?php echo $_smarty_tpl->tpl_vars['feature']->value->getSubtitle();?>
</h2>
                <div class="feature-text">
                    <?php echo $_smarty_tpl->tpl_vars['feature']->value->getDescription();?>

                </div>
                <div class="action-btns">
                    <div class="row">
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value->hasBtn1Link()) {?>
                            <div class="col-sm-6<?php if (!$_smarty_tpl->tpl_vars['feature']->value->hasBtn2Link()) {?> col-sm-offset-3<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['feature']->value->getBtn1Link();?>
" class="btn btn-block btn-action-1" target="_blank" data-link="1" data-link-title="<?php echo $_smarty_tpl->tpl_vars['feature']->iteration;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['feature']->value->getBtn1Label();?>

                                </a>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value->hasBtn2Link()) {?>
                            <div class="col-sm-6">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['feature']->value->getBtn2Link();?>
" class="btn btn-block btn-action-2" target="_blank" data-link="2" data-link-title="<?php echo $_smarty_tpl->tpl_vars['feature']->iteration;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['feature']->value->getBtn2Label();?>

                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        <?php
$_smarty_tpl->tpl_vars['feature'] = $__foreach_feature_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<label class="checkbox-inline dismiss">
    <input type="checkbox" id="cbFeatureHighlightsDismissForVersion">
    Don't show this again until next update
</label>
<?php }
}
