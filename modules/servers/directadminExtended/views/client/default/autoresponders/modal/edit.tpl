<div class="modal fade" id="edit-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                <h4 class="modal-title">{$lang.edit_label}</h4>
            </div>
            <div class="modal-body">
                <input class="acc" type="hidden" name="user" value="{$account}" />
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.responder_address}</label>
                        <div class="col-sm-9 input-group">
                            <input type="hidden" name="user" value="{$user}"/>
                            <input type="hidden" name="domain" value="{$domain}"/>
                            <input class="form-control first" type="text" name="user" disabled value="{$user}"/>
                            <span class="input-group-addon">@</span>
                            <input class="form-control last" type="text" name="user" disabled value="{$domain}"/>                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.responder_message}</label>
                        <div class="col-sm-9">
                            <textarea name="text" class="form-control">{$message}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.send_cc_to}</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="ccemail" {if !empty($ccemail)}value="{$ccemail}"{/if} />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <button type="button" class="btn btn-primary" data-act="edit" data-rtable="emails-table"><span>{$lang.save}</span></button>
            </div>
        </div>
    </div>
</div>