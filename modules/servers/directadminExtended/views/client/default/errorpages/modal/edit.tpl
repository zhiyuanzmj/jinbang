<div class="modal fade" id="edit-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                <h4 class="modal-title">{$lang.edit_label}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="api_form">
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.error_page}</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="errorpage" value="{$errorpage}"/>
                            <input type="text" disabled="" name="errorpage" value="{$errorpage}" class="form-control"/>                         
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea name="text" class="form-control" rows="10" style="resize: vertical;">{$content}</textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <a href="javascript:;" data-preview="1" class="btn btn-primary">{$lang.preview}</a>
                <button type="button" class="btn btn-primary" data-act="edit"><span>{$lang.save}</span></button>
            </div>
        </div>
    </div>
</div>