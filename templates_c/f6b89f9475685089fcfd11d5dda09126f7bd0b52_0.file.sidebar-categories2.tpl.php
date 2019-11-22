<?php
/* Smarty version 3.1.32, created on 2019-10-09 23:55:55
  from '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/sidebar-categories2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e030bdce389_96053285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b89f9475685089fcfd11d5dda09126f7bd0b52' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/orderforms/oneui_cart/sidebar-categories2.tpl',
      1 => 1526079610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e030bdce389_96053285 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondarySidebar']->value, 'panel');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['panel']->value) {
?>
<div class="tab-content">
						<?php ob_start();
echo $_smarty_tpl->tpl_vars['LANG']->value['fl1kg'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "1") {?>
						<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
        				<div class="tab-pane<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl1'])) {?> active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl1'];?>
">
						<div class="nav nav-tabs" menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
	        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    	<?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                    	<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl1'])) {?>
                    	<li class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>">
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
                            <img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/flagsm_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[2], 'UTF-8');?>
.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                        </a>
                    	</li>
                    	
                    	<?php }?>
                    	<?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>    
    					</div>
        				</div>
        				<?php }?>
        				
        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['LANG']->value['fl2kg'];
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == "1") {?>
						<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
        				<div class="tab-pane<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl2'])) {?> active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl2'];?>
">
						<div class="nav nav-tabs" menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
	        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    	<?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                    	<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable6 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl2'])) {?>
                    	<li class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>">
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
                            <img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/flagsm_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[2], 'UTF-8');?>
.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                        </a>
                    	</li>
                    	
                    	<?php }?>
                    	<?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>    
    					</div>
        				</div>
        				<?php }?>

        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['LANG']->value['fl3kg'];
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable7 == "1") {?>
						<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
        				<div class="tab-pane<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable8 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl3'])) {?> active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl3'];?>
">
						<div class="nav nav-tabs" menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
	        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    	<?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                    	<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable9 = ob_get_clean();
if ($_prefixVariable9 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl3'])) {?>
                    	<li class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>">
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
                            <img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/flagsm_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[2], 'UTF-8');?>
.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                        </a>
                    	</li>
                    	
                    	<?php }?>
                    	<?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>    
    					</div>
        				</div>
        				<?php }?>

        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['LANG']->value['fl4kg'];
$_prefixVariable10 = ob_get_clean();
if ($_prefixVariable10 == "1") {?>
						<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
        				<div class="tab-pane<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable11 = ob_get_clean();
if ($_prefixVariable11 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl4'])) {?> active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl4'];?>
">
						<div class="nav nav-tabs" menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
	        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    	<?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                    	<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable12 = ob_get_clean();
if ($_prefixVariable12 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl4'])) {?>
                    	<li class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>">
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
                            <img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/flagsm_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[2], 'UTF-8');?>
.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                        </a>
                    	</li>
                    	
                    	<?php }?>
                    	<?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>    
    					</div>
        				</div>
        				<?php }?>

        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['LANG']->value['fl5kg'];
$_prefixVariable13 = ob_get_clean();
if ($_prefixVariable13 == "1") {?>
						<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
        				<div class="tab-pane<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable14 = ob_get_clean();
if ($_prefixVariable14 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl5'])) {?> active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl5'];?>
">
						<div class="nav nav-tabs" menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
	        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    	<?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                    	<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable15 = ob_get_clean();
if ($_prefixVariable15 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl5'])) {?>
                    	<li class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>">
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
                            <img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/flagsm_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[2], 'UTF-8');?>
.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                        </a>
                    	</li>
                    	
                    	<?php }?>
                    	<?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>    
    					</div>
        				</div>
        				<?php }?>

        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['LANG']->value['fl6kg'];
$_prefixVariable16 = ob_get_clean();
if ($_prefixVariable16 == "1") {?>
						<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
        				<div class="tab-pane<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable17 = ob_get_clean();
if ($_prefixVariable17 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl6'])) {?> active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl6'];?>
">
						<div class="nav nav-tabs" menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
	        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    	<?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                    	<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable18 = ob_get_clean();
if ($_prefixVariable18 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl6'])) {?>
                    	<li class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>">
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
                            <img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/flagsm_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[2], 'UTF-8');?>
.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                        </a>
                    	</li>
                    	
                    	<?php }?>
                    	<?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>    
    					</div>
        				</div>
        				<?php }?>

        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['LANG']->value['fl7kg'];
$_prefixVariable19 = ob_get_clean();
if ($_prefixVariable19 == "1") {?>
						<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
        				<div class="tab-pane<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable20 = ob_get_clean();
if ($_prefixVariable20 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl7'])) {?> active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl7'];?>
">
						<div class="nav nav-tabs" menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
	        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    	<?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                    	<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable21 = ob_get_clean();
if ($_prefixVariable21 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl7'])) {?>
                    	<li class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>">
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
                            <img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/flagsm_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[2], 'UTF-8');?>
.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                        </a>
                    	</li>
                    	
                    	<?php }?>
                    	<?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>    
    					</div>
        				</div>
        				<?php }?>

        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['LANG']->value['fl8kg'];
$_prefixVariable22 = ob_get_clean();
if ($_prefixVariable22 == "1") {?>
						<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['productGroup']->value['name']));?>
        				<div class="tab-pane<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable23 = ob_get_clean();
if ($_prefixVariable23 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl8'])) {?> active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['fl8'];?>
">
						<div class="nav nav-tabs" menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
	        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
                    	<?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                    	<?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
        				<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value[1];
$_prefixVariable24 = ob_get_clean();
if ($_prefixVariable24 == ((string)$_smarty_tpl->tpl_vars['LANG']->value['fl8'])) {?>
                    	<li class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>">
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php $_smarty_tpl->_assignInScope('value', explode(" ",$_smarty_tpl->tpl_vars['child']->value->getLabel()));?>
                            <img src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/img/flagsm_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['value']->value[2], 'UTF-8');?>
.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>

                        </a>
                    	</li>
                    	
                    	<?php }?>
                    	<?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>    
    					</div>
        				</div>
        				<?php }?>


</div>	
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
