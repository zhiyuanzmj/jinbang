{**********************************************************************
* ClientAreaDesigner product developed. (2017-10-12)
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

<div class="form-group" style="display:none;" id="mg-prototype-file">
    <label class="col-sm-2 control-label" style="padding-top: 4px;">{$MGLANG->T('Image')}</label>
    <div class="col-sm-4" >
        <input type="hidden" class="mg-cad-input-result" value=""  name="moduleSettings[slickItems][fileContent][]" disabled="">
        <input type="hidden" class="mg-cad-input-file-name" value=""  name="moduleSettings[slickItems][fileName][]" disabled="">
        <input type="file" class="mg-cad-file"  placeholder="{$MGLANG->T('File')}" value="{$slickItems.fileName.$i}" disabled=""  name="moduleSettings[slickItems][file][]">
        <div  class="help-block with-errors" style="display:none;">{$MGLANG->absoluteT('File is too large.  Allowed file size is 2 MB.')}</div>
        <button class="close pull-left mg-cad-file-remove" type="button"  style="display:none;">
            <img src="" width="150px;"/>
            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
        </button>
    </div>
    <div class="col-sm-4" >
        <input type="text" class="form-control" name="moduleSettings[slickItems][url][]" placeholder="{$MGLANG->T('File URL')}" disabled=""  />
        <div  class="help-block with-errors mg-error-promotion" style="display:none;"></div>
    </div>
    <a  href="#" class="mg-clone-remove"  title="{$MGLANG->absoluteT('remove')}">               
        <i class="glyphicon glyphicon-remove"></i>
    </a>
</div>
<div class="form-group" style="display:none;" id="mg-prototype-html">
    <label class="col-sm-2 control-label">{$MGLANG->T('HTML')}</label>
    <div class="col-sm-8" >
        <textarea class="form-control" rows="3" name="moduleSettings[slickItems][html][]" disabled=""></textarea>
        <div  class="help-block with-errors mg-error-promotion" style="display:none;"></div>
    </div>
    <a  href="#" class="mg-clone-remove"  title="{$MGLANG->absoluteT('remove')}">               
        <i class="glyphicon glyphicon-remove"></i>
    </a>
</div>

<div class="form-horizontal" style="margin-left: 12px;">
    <div class="form-group">
        <div class="col-sm-12" style="margin-top: 10px;">
            <legend >{$MGLANG->T('Slick Items')}
                <button style="pointer-events: all; cursor: pointer;" data-prototypetarget="#mg-prototype-file" class="btn btn-default btn-inverse btn-xs pull-right mg-clone-add" type="button">
                    {$MGLANG->T('Add Image')}
                </button>
                <button style="pointer-events: all; cursor: pointer; margin-right:5px" data-prototypetarget="#mg-prototype-html" class="btn btn-default btn-inverse btn-xs pull-right mg-clone-add" type="button">
                    {$MGLANG->T('Add HTML')}
                </button>
            </legend>
        </div>
    </div> 
    <div class="target-clone">

        {section name=k start=0 loop=$loop step=1}
            {assign var="i" value=$smarty.section.k.index}
            {if $slickItems.fileContent.$i}
                <div class="form-group">
                    <label class="col-sm-2 control-label" style="padding-top: 4px;">{$MGLANG->T('Image')}</label>
                    <div class="col-sm-4" >
                        <input type="hidden" class="mg-cad-input-result" value="{$slickItems.fileContent.$i}"  name="moduleSettings[slickItems][fileContent][]">
                        <input type="hidden" class="mg-cad-input-file-name" value="{$slickItems.fileName.$i}"  name="moduleSettings[slickItems][fileName][]">
                        <input type="file" class="mg-cad-file"  placeholder="{$MGLANG->T('File')}" value="{$slickItems.fileName.$i}"  name="moduleSettings[slickItems][file][]">
                        <div  class="help-block with-errors" style="display:none;">{$MGLANG->absoluteT('File is too large.  Allowed file size is 2 MB.')}</div>
                        <button class="close pull-left mg-cad-file-remove" {if !$slickItems.fileContent.$i} style="display:none;" {/if} type="button">
                            <img src="{$slickItems.fileContent.$i}" width="150px;"/>
                            <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="col-sm-4" >
                        <input type="text" class="form-control" value="{$slickItems.url.$i}"  name="moduleSettings[slickItems][url][]" placeholder="{$MGLANG->T('File URL')}"  />
                        <div  class="help-block with-errors mg-error-promotion" style="display:none;"></div>
                    </div>
                    <a  href="#" class="mg-clone-remove"  title="{$MGLANG->absoluteT('remove')}">               
                        <i class="glyphicon glyphicon-remove"></i>
                    </a>
                </div> 
            {/if}
            {if $slickItems.html.$i}
                <div class="form-group">
                    <label class="col-sm-2 control-label">{$MGLANG->T('HTML')}</label>
                    <div class="col-sm-8" >
                        <textarea class="form-control" rows="3" name="moduleSettings[slickItems][html][]">{$slickItems.html.$i}</textarea>
                        <div  class="help-block with-errors mg-error-promotion" style="display:none;"></div>
                    </div>
                    <a  href="#" class="mg-clone-remove"  title="{$MGLANG->absoluteT('remove')}">               
                        <i class="glyphicon glyphicon-remove"></i>
                    </a>
                </div>
            {/if}
        {/section}
    </div>
    <legend >{$MGLANG->T('Options')}   </legend>
    <div class="form-group">
        <label class="col-sm-2 control-label " style="padding-left: 0px; padding-right: 30px;">{$MGLANG->T('Autoplay Speed')}</label>
        <div class="col-sm-8" >
            <input type="number"  min="10" class="form-control"  placeholder="300" value="{$autoplaySpeed}"  name="moduleSettings[autoplaySpeed]" style="width: 612px;">
            <div  class="help-block with-errors" style="display:none;"></div>
            <span  class="help-block">{$MGLANG->T('Speed in milliseconds.')}</span>
        </div>
    </div> 
    <div class="form-group">
        <label class="col-sm-2 control-label " style="padding-left: 0px; padding-right: 30px;">{$MGLANG->T('Features')}</label>
        <div class="col-sm-8" >
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="autoplay" {if in_array('autoplay',$features)}checked="checked"{/if} name="moduleSettings[features][]">
                    {$MGLANG->T('autoplay')}
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="dots" {if in_array('dots',$features)}checked="checked"{/if}  name="moduleSettings[features][]">
                    {$MGLANG->T('Dots')}
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="arrows" {if in_array('arrows',$features)}checked="checked"{/if}  name="moduleSettings[features][]">
                    {$MGLANG->T('Arrows')}
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="infinite" {if in_array('infinite',$features)}checked="checked"{/if} name="moduleSettings[features][]">
                    {$MGLANG->T('Infinite')}
                </label>
            </div>
        </div>
    </div> 
</div>
                