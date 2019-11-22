<div class="modal fade" id="edit-domain">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                <h4 class="modal-title">{$lang.edit_title}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal"> 
                    <input type="hidden" name="domainid" value="{$domainid}"/>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">{$lang.name}</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input name="name" class="form-control" type="text" disabled="" value="{$name}">
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">{$lang.hosting_type}</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <select name="htype" class="form-control" >
                                        <option value="vrt_hst" onclick="jQuery('.htype_vrt_hst2').show();" {if $hosting}selected=""{/if}>{$lang.website_hosting}</option>
                                        <option value="none" onclick="jQuery('.htype_vrt_hst2').hide();" {if !$hosting}selected=""{/if}>{$lang.no_hosting}</option>
                                    </select>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="htype_vrt_hst2" {if !$hosting}style="display: none;"{/if}>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{$lang.document_root}</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12 input-group">
                                        <input name="root" class="form-control first" type="text" disabled="" value="home">
                                        <span class="input-group-addon">/</span>
                                        <input name="path" class="form-control last" type="text" value="{$path}" required pattern="{$patterns.cpanel_dir}">
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                <button type="button" class="btn btn-primary" data-act="edit" data-rtable="domains-table">{$lang.save_changes}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  