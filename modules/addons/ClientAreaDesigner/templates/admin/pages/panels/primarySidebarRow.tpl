{**********************************************************************
* ClientAreaDesigner product developed. (2016-08-10)
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
           
<div class="panel panel-default mg-primary-sidebar-widget mg-drag-widget" data-id="{$panel.id}">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-8"> <h3 class="panel-title">{if $panel.icon}<i class="fa {$panel.icon}"></i>{/if} {if $panel.label}{$panel.label}{else}{$panel.name}{/if}</h3> </div>
            <div style="float:right; margin-right:9px"> 
                <a href="#" title="{$MGLANG->absoluteT('Edit')}"  class="mg-panel-edit"
                   data-id="{$panel.id}" data-class="PrimarySidebar" data-label="{$panel.label}" data-parent="{$panel.parent}"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="#" title="{$MGLANG->absoluteT('Delete')}" class="mg-panel-delete {if !$panel.delete}mg-not-active{/if}"
                   data-id="{$panel.id}" data-class="PrimarySidebar" data-label="{$panel.label}" data-parent="{$panel.parent}"><i class="glyphicon glyphicon-trash"></i></a>
                
                <a href="#" class="mg-panel-body-link"><i class="glyphicon glyphicon-plus"></i></a> 
            </div>
        </div>
    </div>
    <div class="panel-body" style="display:none;">
        {if !$panel.bodyHtml}
            <div class="list-group sortable">
                {foreach from=$children item=child}
                    <div class="list-group-item" data-id="{$child.id}">
                        {if $child.icon} <i class="fa {$child.icon}"></i>{/if}
                        {if $child.label}{$child.label}{else}{$child.name}{/if}
                        <div style="float:right;">
                            <a href="#" title="{$MGLANG->absoluteT('Edit')}"  class="mg-panel-edit"
                               data-id="{$child.id}" data-class="PrimarySidebar" data-label="{$child.label}" data-parent="{$child.parent}"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="#" title="{$MGLANG->absoluteT('Delete')}" class="mg-panel-delete {if !$child.delete}mg-not-active{/if}"
                               data-id="{$child.id}" data-class="PrimarySidebar" data-label="{$child.label}" data-parent="{$child.parent}" {if !$panel.delete}disabled=""{/if}><i class="glyphicon glyphicon-trash"></i></a>
                        </div>
                    </div>
                {/foreach}
            </div>
        {else}
            <div class="row">
                <div class="col-md-8">
                    {$panel.bodyHtml}
                    {if $panel.footerHtml}<br/>{$panel.footerHtml}{/if}
                </div>
            </div>
        {/if}
        <div class="row"  style="margin-top:8px; ">
            <div class="col-md-8">
                <button {if $panel.bodyHtml} disabled=""{/if} title="{$MGLANG->absoluteT('Add')}" class="btn btn-sm btn-success  btn-inverse mg-run-modal-add " data-class="PrimarySidebar" data-id="{$panel.id}" data-class="PrimarySidebar"  type="button" data-toggle="tooltip">
                    {$MGLANG->absoluteT('Add')}   
                </button>     
            </div>
        </div>
    </div>      
</div> 