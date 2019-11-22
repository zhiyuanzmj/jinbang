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
<div class="box light">
    <div class="row">
        <div class="col-md-12" id="mg-panels-content" >
            <legend>{$MGLANG->T('Navbars')}</legend>
            <p class="page-description">{$MGLANG->T('Manage positions available on the navigation bar in your client area. Additionally, define requirements for element to be shown.')}</p>
            <div class="row">
                {*Primary Navbar - Left Side*}
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-11 padFix"> <h4 class="panel-title"> {$MGLANG->T('Primary Navbar - Left Side')}</h4> </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-success btn-inverse mg-run-modal-add pull-right" data-class="PrimaryNavbar">
                                        {$MGLANG->T('Add')}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 sortable mg-widgets" id="mg-PrimaryNavbar" style="padding-right:0px; padding-bottom: 0px;">
                                    {foreach from=$primaryNavbars item=item}
                                        {include file='primaryNavbarRow.tpl' panel=$item.panel children=$item.children}
                                    {/foreach}                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {*Primary Navbar - Right Side*}
                <div class="col-md-4">
                    <div class="panel panel-primary" style="min-height: 203px;">
                        <div class="panel-heading">
                        <div class="row">
                                <div class="col-md-10 padFix"> <h4 class="panel-title"> {$MGLANG->T('Primary Navbar - Right Side')}</h4> </div>
                                <div class="col-md-2">
                                   <button type="button" class="btn btn-success btn-inverse mg-run-modal-add pull-right" data-class="SecondaryNavbar">
                                        {$MGLANG->T('Add')}
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 sortable mg-widgets" id="mg-SecondaryNavbar" style="padding-right:0px;">
                                    {foreach from=$secondaryNavbars item=item}
                                        {include file='secondaryNavbarRow.tpl' panel=$item.panel children=$item.children}
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
