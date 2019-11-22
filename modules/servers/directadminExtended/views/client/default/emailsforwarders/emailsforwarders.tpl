<div class="module-header">
     <i class="icon-header icon-emailsforwarders"></i>
    <h1>{$lang.add_aforward_main_header}</h1>
    <p>{$lang.add_aforward_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.add_forwarder_header}</h4>
        <div class="well">
            <form class="form-horizontal" id="add-forwarder-form">
                <div class="form-group">
                    <label class="control-label col-md-3">{$lang.label_email}</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input class="form-control first" type="text" name="email" data-error="{$lang.field_required}" required>
                            <span class="input-group-addon">@</span>
                            <select name="domain" class="form-control last" data-no-validate>
                                {foreach from=$domainlist key="k" item="entry"}
                                    <option>{$entry}</option>
                                {foreachelse}
                                    <option value="{$domain}">{$domain}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">{$lang.label_forwarder_email}</label>
                    <div class="col-md-9">
                        <input class="form-control" type="email" name="forwarder" data-error="{$validator_lang.invalidemail}" required />
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="addforward" data-validate="1" data-formid="add-forwarder-form" data-rtable="email-forwarders-table">{$lang.add_forwarder}</a>
                </div>
            </form>
        </div>
    </div>
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.search_header}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="email-forwarders-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="email-forwarders-table">
            <thead>
                <tr>
                    <th>{$lang.edit_tblhead_from}</th>
                    <th>{$lang.edit_tblhead_to}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                </tr>
            </tbody>
        </table>
    </div>
        
    {confirm_modal btn='data-act="delaforward" data-rtable="email-forwarders-table"' id="delete-forwarder-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_confirmation_body`<input type='hidden' name='user_name'/><input type='hidden' name='domain'/>"}
        
        <div class="modal fade" id="edit-forwarder">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                        <h4 class="modal-title">{$lang.edit_forwarder}</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <input type="hidden" class="form-control" name="email" >
                            <input type="hidden" class="form-control" name="domain" >
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.mod_forwarder_label}</label>
                                <div class="col-sm-9 input-group">
                                    <input type="text" class="form-control first" name="email" disabled="">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" class="form-control last" name="domain" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.label_forwarder_email}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="forwarder">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                        <button type="button" class="btn btn-primary" data-act="edit" data-rtable="email-forwarders-table">{$lang.save}</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->  
</div>

{literal}
    <script>
        refreshTable('email-forwarders-table');
    </script>
{/literal}
