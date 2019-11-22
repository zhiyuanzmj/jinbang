<div class="modal fade" id="edit-domain">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                <h4 class="modal-title">{$lang.certificateRequestTitle}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">                 
                    <div class="form-group">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <textarea name="certRequestBody" rows="20" class="form-control">{$certRequestBody}</textarea>
                                </div>
                            </div>    
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  