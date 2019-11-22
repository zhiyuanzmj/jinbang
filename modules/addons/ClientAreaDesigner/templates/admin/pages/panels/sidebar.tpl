{**********************************************************************
* ClientAreaDesigner product developed. (2016-07-28)
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
<div class="box light">
    <div class="row">
        <div class="col-md-12" id="mg-panels-content" >
            <legend>{$MGLANG->T('Sidebars')}</legend>
            <p class="page-description">{$MGLANG->T('Manage panels available on the left sidebar in your client area. Additionally, define requirements for panels to be shown or modify output of the default panels.')}</p>
            <div class="row">
                {*Sidebar - Top Part*}
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10 padFix"> <h4 class="panel-title"> {$MGLANG->T('Sidebar - Top Part')}</h4> </div>
                                <div class="col-md-2">
                                    <button type="button" class="pull-right btn btn-success btn-inverse mg-run-modal-add" data-class="PrimarySidebar">
                                        {$MGLANG->T('Add')}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 sortable mg-widgets" id="mg-PrimarySidebar" style="padding-right:0px;">
                                    {foreach from=$primarySidebars item=item}
                                        {include file='primarySidebarRow.tpl' panel=$item.panel children=$item.children}
                                    {/foreach}                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    {*Sidebar - Bottom Part*}
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10 padFix"> <h4 class="panel-title"> {$MGLANG->T('Sidebar - Bottom Part')}</h4> </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-success btn-inverse mg-run-modal-add pull-right" data-class="SecondarySidebar">
                                        {$MGLANG->T('Add')}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 sortable mg-widgets" id="mg-SecondarySidebar" style="padding-right:0px;">
                                    {foreach from=$secondarySidebars item=item}
                                        {include file='secondarySidebarRow.tpl' panel=$item.panel children=$item.children}
                                    {/foreach}                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="well well-sm">
                <button id="mg-button-save" type="submit" class="btn btn-primary btn-inverse" style="pointer-events: all; cursor: pointer;">
                    {$MGLANG->T('Save Order')}
                </button>
            </div>

            {include file='modals.tpl'}

        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="../modules/addons/ClientAreaDesigner/templates/admin/pages/panels/panels.css">
<script type="text/javascript" src="../modules/addons/ClientAreaDesigner/templates/admin/pages/panels/panels.js"></script>
