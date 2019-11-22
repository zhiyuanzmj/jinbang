{**********************************************************************
* ClientAreaDesigner product developed. (2016-08-19)
* *
*
*  CREATED BY MODULESGARDEN       ->       http://modulesgarden.com
*  CONTACT                        ->       contact@modulesgarden.com
*
*
* This software is furnished under a license and may be used and copied
* only  in  accordance  with  the  terms  of such  license and with the
* inclusion of the above copyright notice.  This software  or any other
* copies thereof may not be provided or otherwise made available to any
* other person.  No title to and  ownership of the  software is  hereby
* transferred.
*
*
**********************************************************************}

{**
* @author Pawel Kopec <pawelk@modulesgarden.com>
*}
{*Modal mg-modal-panel-add *}
<form id="mg-modal-home-panel-form-add">
    <div class="modal fade bs-example-modal-lg" id="mg-modal-panel-add"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">{$MGLANG->T('New Panel')} <strong data-modal-var="name"></strong></h4>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#mg-tab-general" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('General')}</a></li>
                        <li role="presentation" class="mg-content"><a href="#mg-tab-content" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('Content')}</a></li>
                        <li role="presentation" class="mg-extras"><a href="#mg-tab-extras" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('Extras')}</a></li>
                        <li role="presentation" class="mg-display-rules"><a href="#mg-tab-display-rules" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('Display Rules')}</a></li> 
                        <li role="presentation" class="mg-display-conditions"><a href="#mg-tab-display-conditions" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('Conditions')}</a></li>
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
                        {*General*}
                        <div role="tabpanel" class="tab-pane active" id="mg-tab-general">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-label">{$MGLANG->T('Name')}</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-panel-label" class="form-control" value="" name="panel[label]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T('Provide display label here')}">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-name">{$MGLANG->T('Identifier')}</label>
                                <div class="col-sm-9">
                                    <input type="text" required="" placeholder="" id="mg-panel-name" class="form-control" value="" name="panel[name]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T("Provide unique 'menuitemname' attribute here.")}">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group mg-group-uri">
                                <label class="col-sm-2 control-label" for="mg-panel-uri">{$MGLANG->T('uri')}</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="" id="mg-panel-uri" class="form-control" value="" name="panel[uri]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T('Provide URI here')}">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-icon">{$MGLANG->T('Icon')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-icon" class="form-control mg-icon-select" name="panel[icon]">
                                        {foreach from=$icons item=icon}
                                            <option value="{$icon}"> {$icon}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T('Provide icon here')}">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-display">{$MGLANG->T('Display')}</label>
                                <div class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="on" id="mg-panel-display" name="panel[display][]" checked="checked">
                                            {$MGLANG->T('Tick to display')}
                                        </label>
                                    </div>
                                    <span style="display:none;" class="help-block error-block"></span>
                                </div>
                            </div>
                        </div>
                        {*Content*}
                        <div role="tabpanel" class="tab-pane" id="mg-tab-content">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-contentModule">{$MGLANG->T('Type')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-contentModule" class="form-control mg-panel-contentModule" name="panel[contentModule]">
                                        {foreach from=$contentModules item=contentModule}
                                            <option value="{$contentModule}"{if $contentModule=="0"}selected{/if}>{$MGLANG->T($contentModule)}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="mg-content-html">{$contentHtml}</div>
                                   
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-body-html">{$MGLANG->T('Body HTML')}</label>
                                <div class="col-sm-9">
                                    <textarea id="mg-panel-body-html" class="form-control" value="" name="panel[bodyHtml]" rows="3"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-footer-html">{$MGLANG->T('Footer HTML')}</label>
                                <div class="col-sm-9">
                                    <textarea id="mg-panel-footer-html" class="form-control" value="" name="panel[footerHtml]" rows="3"></textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        {*Extras*}
                        <div role="tabpanel" class="tab-pane" id="mg-tab-extras">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-color">{$MGLANG->T('Widget Color')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-extras-color" class="form-control" name="extras[color]">
                                        {foreach from=$colors item=color}
                                            <option value="{$color}">{$color}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-text">{$MGLANG->T('Button Name')}</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-extras-btn-text" class="form-control" value="" name="extras[btn-text]">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-link">{$MGLANG->T('Button URI')}</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-extras-btn-link" class="form-control" value="" name="extras[btn-link]">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-icon">{$MGLANG->T('Button Icon')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-extras-btn-icon" class="form-control mg-icon-select" name="extras[btn-icon]">
                                        {foreach from=$icons item=icon}
                                            <option value="{$icon}"> {$icon}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        {*Display Rules*}
                        <div role="tabpanel" class="tab-pane" id="mg-tab-display-rules">
                            <div class="note note-warning">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong>{$MGLANG->T('Not setting any rule will result in displaying this element always.')}</strong>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domains">{$MGLANG->T('Domains')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domains" class="form-control mg-select2" name="panel[domains][]" multiple="">
                                        {foreach from=$domains item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-products">{$MGLANG->T('Products')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-products" class="form-control mg-select2" name="panel[products][]" multiple="">
                                        {foreach from=$products item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-locations">{$MGLANG->T('Locations')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-locations" class="form-control mg-select2" name="panel[locations][]" multiple="">
                                        {foreach from=$locations item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        {*Conditions*}
                        <div role="tabpanel" class="tab-pane" id="mg-tab-display-conditions">
                            <legend>{$MGLANG->T('Actived')}</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domainActive">{$MGLANG->T('Domains')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domainActive" class="form-control mg-select2" name="panel[domainActive][]" multiple="">
                                        {foreach from=$domains item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-productActive">{$MGLANG->T('Products')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-productActive" class="form-control mg-select2" name="panel[productActive][]" multiple="">
                                        {foreach from=$products item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                                    <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-addonActive">{$MGLANG->T('Addons')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-addonActive" class="form-control mg-select2" name="panel[addonActive][]" multiple="">
                                        {foreach from=$addons item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <legend>{$MGLANG->T('Inactived')}</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domainInactive">{$MGLANG->T('Domains')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domainInactive" class="form-control mg-select2" name="panel[domainInactive][]" multiple="">
                                        {foreach from=$domains item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-productInactive">{$MGLANG->T('Products')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-productInactive" class="form-control mg-select2" name="panel[productInactive][]" multiple="">
                                        {foreach from=$products item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-addonInactive">{$MGLANG->T('Addons')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-addonInactive" class="form-control mg-select2" name="panel[addonInactive][]" multiple="">
                                        {foreach from=$addons item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <legend>{$MGLANG->T('Revenue')}</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{$MGLANG->T('Minimal')}</label>
                                <div class="col-sm-9">
                                    <input type="text" id="mg-panel-revenueMin" class="form-control" name="panel[revenueMin]" placeholder="{$MGLANG->T('Minimal')}"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{$MGLANG->T('Maximal')}</label>
                                <div class="col-sm-9">
                                    <input type="text" id="mg-panel-revenueMax" class="form-control" name="panel[revenueMax]" placeholder="{$MGLANG->T('Maximal')}"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"  id="mg-add-home-panel-fire" >{$MGLANG->absoluteT('Save Changes')}</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$MGLANG->absoluteT('Close')}</button>
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
                    <h4 class="modal-title">{$MGLANG->T('Edit:')} <strong data-modal-var="name"></strong></h4>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#mg-tab-general-edit" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('General')}</a></li>
                        <li role="presentation" class="mg-content"><a href="#mg-tab-content-edit" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('Content')}</a></li>
                        <li role="presentation" class="mg-extras"><a href="#mg-tab-extras-edit" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('Extras')}</a></li>
                        <li role="presentation" class="mg-display-rules"><a href="#mg-tab-display-rules-edit" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('Display Rules')}</a></li> 
                        <li role="presentation" class="mg-display-conditions"><a href="#mg-tab-display-conditions-edit" aria-controls="messages" role="tab" data-toggle="tab">{$MGLANG->T('Conditions')}</a></li>
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
                        {*General*}
                        <div role="tabpanel" class="tab-pane active" id="mg-tab-general-edit">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-label-edit">{$MGLANG->T('Name')}</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-panel-label-edit" class="form-control" value="" name="panel[label]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T('Provide display label here')}">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-name-edit">{$MGLANG->T('Identifier')}</label>
                                <div class="col-sm-9">
                                    <input type="text" required="" placeholder="" id="mg-panel-name-edit" class="form-control" value="" name="panel[name]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T("Provide unique 'menuitemname' attribute here.")}">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group mg-group-uri" >
                                <label class="col-sm-2 control-label" for="mg-panel-uri-edit">{$MGLANG->T('uri')}</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="" id="mg-panel-uri-edit" class="form-control" value="" name="panel[uri]">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T('Provide URI here')}">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-icon-edit">{$MGLANG->T('Icon')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-icon-edit" class="form-control mg-icon-select" name="panel[icon]">
                                        {foreach from=$icons item=icon}
                                            <option value="{$icon}"> {$icon}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-1 mg-tooltip"><a href="#" data-toggle="tooltip" data-placement="right" title="{$MGLANG->T('Provide icon here')}">
                                        <i class="glyphicon glyphicon-question-sign"></i></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-display-edit">{$MGLANG->T('Display')}</label>
                                <div  class="col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="mg-panel-display-edit" value="on" name="panel[display][]" checked="checked">
                                            {$MGLANG->T('Tick to display')}
                                        </label>
                                    </div>
                                    <span style="display:none;" class="help-block error-block"></span>
                                </div>
                            </div>
                        </div>
                        {*Content*}
                        <div role="tabpanel" class="tab-pane" id="mg-tab-content-edit">
                            <div class="note note-warning hidden" id="mg-tab-content-edit-note-warning">
                                <button type="button" class="close" data-dismiss="alert" data-target="#mg-tab-content-edit-note-warning"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong>{$MGLANG->T('Modyfying content of default elements will result in overwritting the default output.')}</strong>
                            </div>
                            <div class="note note-warning hidden" id="mg-tab-content-child-note">
                                <button type="button" class="close" data-dismiss="alert" data-target="#mg-tab-content-child-note"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong>{$MGLANG->T('Content not available if child elements are used.')}</strong>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-contentModule-edit">{$MGLANG->T('Type')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-contentModule-edit" class="form-control mg-panel-contentModule" name="panel[contentModule]">
                                        {foreach from=$contentModules item=contentModule}
                                            <option value="{$contentModule}">{$MGLANG->T($contentModule)}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="mg-content-html">{$contentHtml}</div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-body-html-edit">{$MGLANG->T('Body HTML')}</label>
                                <div class="col-sm-9">
                                    <textarea id="mg-panel-body-html-edit" class="form-control" value="" name="panel[bodyHtml]" rows="3"></textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-footer-html-edit">{$MGLANG->T('Footer HTML')}</label>
                                <div class="col-sm-9">
                                    <textarea id="mg-panel-footer-html-edit" class="form-control" value="" name="panel[footerHtml]" rows="3"></textarea>

                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        {*Extras*}
                        <div role="tabpanel" class="tab-pane" id="mg-tab-extras-edit">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-color-edit">{$MGLANG->T('Widget Color')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-extras-color-edit" class="form-control" name="extras[color]">
                                        {foreach from=$colors item=color}
                                            <option value="{$color}">{$color}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-text-edit">{$MGLANG->T('Button Name')}</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-extras-btn-text-edit" class="form-control" value="" name="extras[btn-text]">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-link-edit">{$MGLANG->T('Button URI')}</label>
                                <div class="col-sm-9">
                                    <input type="text"  placeholder="" id="mg-extras-btn-link-edit" class="form-control" value="" name="extras[btn-link]">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-extras-btn-icon-edit">{$MGLANG->T('Button Icon')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-extras-btn-icon-edit" class="form-control mg-icon-select" name="extras[btn-icon]">
                                        {foreach from=$icons item=icon}
                                            <option value="{$icon}"> {$icon}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        {*Display Rules*}
                        <div role="tabpanel" class="tab-pane" id="mg-tab-display-rules-edit">
                            <div class="note note-warning" id="mg-tab-display-rules-edit-note-warning">
                                <button type="button" class="close" data-dismiss="alert"  data-target="#mg-tab-display-rules-edit-note-warning"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                <strong>{$MGLANG->T('Not setting any rule will result in displaying this element always.')}</strong>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domains-edit">{$MGLANG->T('Domains')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domains-edit" class="form-control mg-select2" name="panel[domains][]" multiple="">
                                        {foreach from=$domains item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-products-edit">{$MGLANG->T('Products')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-products-edit" class="form-control mg-select2" name="panel[products][]" multiple="">
                                        {foreach from=$products item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-locations-edit">{$MGLANG->T('Locations')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-locations-edit" class="form-control mg-select2" name="panel[locations][]" multiple="">
                                        {foreach from=$locations item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                         {*Conditions*}
                        <div role="tabpanel" class="tab-pane" id="mg-tab-display-conditions-edit">
                            <legend>{$MGLANG->T('Actived')}</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domainActive-edit">{$MGLANG->T('Domains')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domainActive-edit" class="form-control mg-select2" name="panel[domainActive][]" multiple="">
                                        {foreach from=$domains item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-productActive-edit">{$MGLANG->T('Products')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-productActive-edit" class="form-control mg-select2" name="panel[productActive][]" multiple="">
                                        {foreach from=$products item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                                    <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-addonActive-edit">{$MGLANG->T('Addons')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-addonActive-edit" class="form-control mg-select2" name="panel[addonActive][]" multiple="">
                                        {foreach from=$addons item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <legend>{$MGLANG->T('Inactived')}</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-domainInactive-edit">{$MGLANG->T('Domains')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-domainInactive-edit" class="form-control mg-select2" name="panel[domainInactive][]" multiple="">
                                        {foreach from=$domains item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-productInactive-edit">{$MGLANG->T('Products')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-productInactive-edit" class="form-control mg-select2" name="panel[productInactive][]" multiple="">
                                        {foreach from=$products item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="mg-panel-addonInactive-edit">{$MGLANG->T('Addons')}</label>
                                <div class="col-sm-9">
                                    <select id="mg-panel-addonInactive-edit" class="form-control mg-select2" name="panel[addonInactive][]" multiple="">
                                        {foreach from=$addons item=entity key=k}
                                            <option value="{$k}"> {$entity}</option>
                                        {/foreach}
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <legend>{$MGLANG->T('Revenue')}</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{$MGLANG->T('Minimal')}</label>
                                <div class="col-sm-9">
                                    <input type="text" id="mg-panel-revenueMin-edit" class="form-control" name="panel[revenueMin]" placeholder="{$MGLANG->T('Minimal')}"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">{$MGLANG->T('Maximal')}</label>
                                <div class="col-sm-9">
                                    <input type="text" id="mg-panel-revenueMax-edit" class="form-control" name="panel[revenueMax]" placeholder="{$MGLANG->T('Maximal')}"/>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"  id="mg-add-home-panel-fire-edit" >{$MGLANG->absoluteT('Save Changes')}</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$MGLANG->absoluteT('Close')}</button>
                </div>
            </div>
        </div>
    </div>
</form>
{*Modal mg-modal-panel-delete *}       
<form id="mg-panel-form-delete">
    <div class="modal fade bs-example-modal-lg" id="mg-modal-panel-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">{$MGLANG->absoluteT('Delete:')} <strong data-modal-var="name"></strong></h4>
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
                        <div>{$MGLANG->T('Are you sure you want to delete this entry from panel list?')} </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" >{$MGLANG->absoluteT('Delete')}</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$MGLANG->absoluteT('Close')}</button>
                </div>
            </div>
        </div>
    </div>
</form> 
