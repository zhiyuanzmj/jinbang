<?php
/* Smarty version 3.1.32, created on 2019-10-10 14:23:47
  from '/www/wwwroot/www.zfyun.top/modules/addons/ClientAreaDesigner/templates/admin/pages/panels/modals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9ece735bbb53_70892989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '588307dd5adc842965ec034d40417f98031b7b35' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/modules/addons/ClientAreaDesigner/templates/admin/pages/panels/modals.tpl',
      1 => 1538721470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9ece735bbb53_70892989 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="mg-modal-home-panel-form-add">
    <div class="modal fade bs-example-modal-lg" id="mg-modal-panel-add"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('New Panel');?>
 <strong data-modal-var="name"></strong></h4>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#mg-tab-general" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('General');?>
</a></li>
                        <li role="presentation" class="mg-content"><a href="#mg-tab-content" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Content');?>
</a></li>
                        <li role="presentation" class="mg-extras"><a href="#mg-tab-extras" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Extras');?>
</a></li>
                        <li role="presentation" class="mg-display-rules"><a href="#mg-tab-display-rules" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Display Rules');?>
</a></li> 
                        <li role="presentation" class="mg-display-conditions"><a href="#mg-tab-display-conditions" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Conditions');?>
</a></li>
                    </ul>
                    <div class="modal-alerts">
                        <div style="display:none;" data-prototype="error">
                            <div class="note note-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong></strong>
                                <a style="display:none;" class="errorID" href=""></a>
                            </div>
                        </div>
                        <div style="display:none;" data-prototype="success">
                            <div class="note note-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="class" id="mg-panel-class"  value="">
                    <input type="hidden" name="panel[parent]" id="mg-panel-parent"  value="">
                    <!-- Tab panes -->
                    <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="mg-tab-general">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-label"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Name');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-panel-label" class="form-control" value="" name="panel[label]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Provide display label here');?>
">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-name"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Identifier');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text" required="" placeholder="" id="mg-panel-name" class="form-control" value="" name="panel[name]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T("Provide unique 'menuitemname' attribute here.");?>
">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group mg-group-uri">
                                <label class="col-sm-2 control-label" for="mg-panel-uri"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('uri');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="" id="mg-panel-uri" class="form-control" value="" name="panel[uri]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Provide URI here');?>
">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-icon"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Icon');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-icon" class="form-control mg-icon-select" name="panel[icon]">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value, 'icon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Provide icon here');?>
">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-display"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Display');?>
</label>
                                <div class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="on" id="mg-panel-display" name="panel[display][]" checked="checked">
                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Tick to display');?>

                                        </label>
                                    </div>
                                    <span style="display:none;" class="help-block error-block"></span>
                                </div>
                            </div>
                        </div>
                                                <div role="tabpanel" class="tab-pane" id="mg-tab-content">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-contentModule"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Type');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-contentModule" class="form-control mg-panel-contentModule" name="panel[contentModule]">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contentModules']->value, 'contentModule');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contentModule']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['contentModule']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['contentModule']->value == "0") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['contentModule']->value);?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="mg-content-html"><?php echo $_smarty_tpl->tpl_vars['contentHtml']->value;?>
</div>
                                   
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-body-html"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Body HTML');?>
</label>
                                <div class="col-sm-9">
                                    <textarea id="mg-panel-body-html" class="form-control" value="" name="panel[bodyHtml]" rows="3"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-footer-html"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Footer HTML');?>
</label>
                                <div class="col-sm-9">
                                    <textarea id="mg-panel-footer-html" class="form-control" value="" name="panel[footerHtml]" rows="3"></textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                                                <div role="tabpanel" class="tab-pane" id="mg-tab-extras">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-color"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Widget Color');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-extras-color" class="form-control" name="extras[color]">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-text"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Button Name');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-extras-btn-text" class="form-control" value="" name="extras[btn-text]">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-link"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Button URI');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-extras-btn-link" class="form-control" value="" name="extras[btn-link]">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-icon"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Button Icon');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-extras-btn-icon" class="form-control mg-icon-select" name="extras[btn-icon]">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value, 'icon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                                                <div role="tabpanel" class="tab-pane" id="mg-tab-display-rules">
                            <div class="note note-warning">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Not setting any rule will result in displaying this element always.');?>
</strong>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domains"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Domains');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domains" class="form-control mg-select2" name="panel[domains][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-products"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Products');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-products" class="form-control mg-select2" name="panel[products][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-locations"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Locations');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-locations" class="form-control mg-select2" name="panel[locations][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                                                <div role="tabpanel" class="tab-pane" id="mg-tab-display-conditions">
                            <legend><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Actived');?>
</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domainActive"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Domains');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domainActive" class="form-control mg-select2" name="panel[domainActive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-productActive"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Products');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-productActive" class="form-control mg-select2" name="panel[productActive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                                    <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-addonActive"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Addons');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-addonActive" class="form-control mg-select2" name="panel[addonActive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <legend><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Inactived');?>
</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domainInactive"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Domains');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domainInactive" class="form-control mg-select2" name="panel[domainInactive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-productInactive"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Products');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-productInactive" class="form-control mg-select2" name="panel[productInactive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-addonInactive"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Addons');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-addonInactive" class="form-control mg-select2" name="panel[addonInactive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <legend><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Revenue');?>
</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Minimal');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text" id="mg-panel-revenueMin" class="form-control" name="panel[revenueMin]" placeholder="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Minimal');?>
"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Maximal');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text" id="mg-panel-revenueMax" class="form-control" name="panel[revenueMax]" placeholder="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Maximal');?>
"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"  id="mg-add-home-panel-fire" ><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Save Changes');?>
</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Close');?>
</button>
                </div>
            </div>
        </div>
    </div>
</form>
<form id="mg-modal-panel-form-edit">
    <div class="modal fade bs-example-modal-lg" id="mg-modal-home-panel-edit"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Edit:');?>
 <strong data-modal-var="name"></strong></h4>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#mg-tab-general-edit" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('General');?>
</a></li>
                        <li role="presentation" class="mg-content"><a href="#mg-tab-content-edit" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Content');?>
</a></li>
                        <li role="presentation" class="mg-extras"><a href="#mg-tab-extras-edit" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Extras');?>
</a></li>
                        <li role="presentation" class="mg-display-rules"><a href="#mg-tab-display-rules-edit" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Display Rules');?>
</a></li> 
                        <li role="presentation" class="mg-display-conditions"><a href="#mg-tab-display-conditions-edit" aria-controls="messages" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Conditions');?>
</a></li>
                    </ul>

                    <input type="hidden" name="panel[id]" id="mg-panel-id-edit"  value="">
                    <input type="hidden" name="class" id="mg-panel-class-edit"  value="">
                    <div class="modal-alerts">
                        <div style="display:none;" data-prototype="error">
                            <div class="note note-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong></strong>
                                <a style="display:none;" class="errorID" href=""></a>
                            </div>
                        </div>
                        <div style="display:none;" data-prototype="success">
                            <div class="note note-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="mg-tab-general-edit">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-label-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Name');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-panel-label-edit" class="form-control" value="" name="panel[label]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Provide display label here');?>
">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-name-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Identifier');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text" required="" placeholder="" id="mg-panel-name-edit" class="form-control" value="" name="panel[name]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T("Provide unique 'menuitemname' attribute here.");?>
">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group mg-group-uri" >
                                <label class="col-sm-2 control-label" for="mg-panel-uri-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('uri');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="" id="mg-panel-uri-edit" class="form-control" value="" name="panel[uri]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Provide URI here');?>
">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-icon-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Icon');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-icon-edit" class="form-control mg-icon-select" name="panel[icon]">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value, 'icon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Provide icon here');?>
">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-display-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Display');?>
</label>
                                <div  class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="mg-panel-display-edit" value="on" name="panel[display][]" checked="checked">
                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Tick to display');?>

                                        </label>
                                    </div>
                                    <span style="display:none;" class="help-block error-block"></span>
                                </div>
                            </div>
                        </div>
                                                <div role="tabpanel" class="tab-pane" id="mg-tab-content-edit">
                            <div class="note note-warning hidden" id="mg-tab-content-edit-note-warning">
                                <button type="button" class="close" data-dismiss="alert" data-target="#mg-tab-content-edit-note-warning"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Modyfying content of default elements will result in overwritting the default output.');?>
</strong>
                            </div>
                            <div class="note note-warning hidden" id="mg-tab-content-child-note">
                                <button type="button" class="close" data-dismiss="alert" data-target="#mg-tab-content-child-note"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Content not available if child elements are used.');?>
</strong>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-contentModule-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Type');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-contentModule-edit" class="form-control mg-panel-contentModule" name="panel[contentModule]">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contentModules']->value, 'contentModule');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contentModule']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['contentModule']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T($_smarty_tpl->tpl_vars['contentModule']->value);?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="mg-content-html"><?php echo $_smarty_tpl->tpl_vars['contentHtml']->value;?>
</div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-body-html-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Body HTML');?>
</label>
                                <div class="col-sm-9">
                                    <textarea id="mg-panel-body-html-edit" class="form-control" value="" name="panel[bodyHtml]" rows="3"></textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-footer-html-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Footer HTML');?>
</label>
                                <div class="col-sm-9">
                                    <textarea id="mg-panel-footer-html-edit" class="form-control" value="" name="panel[footerHtml]" rows="3"></textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                                                <div role="tabpanel" class="tab-pane" id="mg-tab-extras-edit">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-color-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Widget Color');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-extras-color-edit" class="form-control" name="extras[color]">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colors']->value, 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-text-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Button Name');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-extras-btn-text-edit" class="form-control" value="" name="extras[btn-text]">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-link-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Button URI');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-extras-btn-link-edit" class="form-control" value="" name="extras[btn-link]">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-icon-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Button Icon');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-extras-btn-icon-edit" class="form-control mg-icon-select" name="extras[btn-icon]">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['icons']->value, 'icon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                                                <div role="tabpanel" class="tab-pane" id="mg-tab-display-rules-edit">
                            <div class="note note-warning" id="mg-tab-display-rules-edit-note-warning">
                                <button type="button" class="close" data-dismiss="alert"  data-target="#mg-tab-display-rules-edit-note-warning"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Not setting any rule will result in displaying this element always.');?>
</strong>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domains-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Domains');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domains-edit" class="form-control mg-select2" name="panel[domains][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-products-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Products');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-products-edit" class="form-control mg-select2" name="panel[products][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-locations-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Locations');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-locations-edit" class="form-control mg-select2" name="panel[locations][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['locations']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                                                 <div role="tabpanel" class="tab-pane" id="mg-tab-display-conditions-edit">
                            <legend><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Actived');?>
</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domainActive-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Domains');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domainActive-edit" class="form-control mg-select2" name="panel[domainActive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-productActive-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Products');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-productActive-edit" class="form-control mg-select2" name="panel[productActive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                                    <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-addonActive-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Addons');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-addonActive-edit" class="form-control mg-select2" name="panel[addonActive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <legend><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Inactived');?>
</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domainInactive-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Domains');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domainInactive-edit" class="form-control mg-select2" name="panel[domainInactive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-productInactive-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Products');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-productInactive-edit" class="form-control mg-select2" name="panel[productInactive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-addonInactive-edit"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Addons');?>
</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-addonInactive-edit" class="form-control mg-select2" name="panel[addonInactive][]" multiple="">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addons']->value, 'entity', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['entity']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['entity']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <legend><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Revenue');?>
</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Minimal');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text" id="mg-panel-revenueMin-edit" class="form-control" name="panel[revenueMin]" placeholder="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Minimal');?>
"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Maximal');?>
</label>
                                <div class="col-sm-9">
                                    <input type="text" id="mg-panel-revenueMax-edit" class="form-control" name="panel[revenueMax]" placeholder="<?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Maximal');?>
"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"  id="mg-add-home-panel-fire-edit" ><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Save Changes');?>
</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Close');?>
</button>
                </div>
            </div>
        </div>
    </div>
</form>
       
<form id="mg-panel-form-delete">
    <div class="modal fade bs-example-modal-lg" id="mg-modal-panel-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Delete:');?>
 <strong data-modal-var="name"></strong></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="class" id="mg-modal-panel-delete-class"  value="">
                    <input type="hidden" name="id" id="mg-modal-panel-delete-id"  value="">
                    <div class="modal-alerts">
                        <div style="display:none;" data-prototype="error">
                            <div class="note note-danger">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong></strong>
                                <a style="display:none;" class="errorID" href=""></a>
                            </div>
                        </div>
                        <div style="display:none;" data-prototype="success">
                            <div class="note note-success">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong></strong>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 30px; text-align: center;">
                        <div><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('Are you sure you want to delete this entry from panel list?');?>
 </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" ><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Delete');?>
</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->absoluteT('Close');?>
</button>
                </div>
            </div>
        </div>
    </div>
</form> 
<?php }
}
