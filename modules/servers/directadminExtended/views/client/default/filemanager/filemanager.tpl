<div class="module-header">
    <i class="icon-header icon-files"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
    <p>{$lang.filenames_warning}</p>
</div>
<div class="module-body">
    <div class="section">
        <div class="file-manager">
            <ul class="nav nav-pills" id="file-manager-nav">
            {foreach from=$actions key="action" item="filereq"}
                <li>
                    <a class="action-{$action}" data-modal="#modal-{$action}" data-filereq="{$filereq}">
                        <img src="{$_assets_dir}img/fm/{$action}.png" alt="" /> {$lang.$action}
                    </a>
                </li>
            {/foreach}  
            </ul>
        </div>
        <div class="clearfix mb-20"></div>
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.your_files}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="files-table-main">
                    </div>
                </div>

            </div>
        </div>
          <div class="breadcrumb">
            <i class="fa fa-folder-o"></i>
            {foreach from=$path item="p"}
                <i class="fa fa-angle-right"></i>
                <a href="clientarea.php?action=productdetails&id={$_params.serviceid}&modop=custom&a=management&page=filemanager&dir={$p.path}">{$p.name}</a>
            {/foreach}
        </div>
        <table class="table table-checkbox" id="files-table-main">
            <thead>
                <tr>
                    <th><input type="checkbox" id="select-all-files" /></th>
                    <th>{$lang.file_name}</th>
                    <th>{$lang.file_size}</th>
                    <th>{$lang.modified}</th>
                    <th>{$lang.permissions}</th>
                    <th>{$lang.uid}</th>
                    <th>{$lang.gid}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="files-table">
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modal-upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{$lang.upload}</h4>
            </div>
            <form class="form-horizontal" enctype="multipart/form-data" action="clientarea.php?action=productdetails&id={$productid}&modop=custom&a=management&page=filemanager&dir={$smarty.get.dir|urlencode}" method="post">
                <div class="modal-body">
                    <input type="hidden" name="act" value="upload">
                    <div class="alert alert-info">{$lang.maximum_file_size} {$max_file_size}MB</div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.select_file}</label>
                        <div class="col-sm-9">
                            <input type="file" name="file" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.upload_path}</label>
                        <div class="col-sm-9 input-group">                    
                            <span class="input-group-addon first">home/</span>
                            <input type="text" class="form-control last" name="path" value="{$dir}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                    <input class="btn btn-primary" type="submit" value="{$lang.upload}" />
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="modal-create_dir">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{$lang.create_dir}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <input type="hidden" name="perm" value="0755" />
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.dir_name}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" required data-error="{$validator_lang.field_required}">
                        </div>
                        <div class="col-md-9 col-md-offset-3">
                            <div class="help-block with-errors"></div>
                        </div>                          
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.create_in}</label>
                        <div class="col-sm-9 input-group">                    
                            <span class="input-group-addon first">home/</span>
                            <input type="text" class="form-control last" name="path" value="{$dir}">
                        </div>
                    </div>
                </form>          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <a class="btn btn-primary" data-act="create_dir" data-refresh="1">{$lang.create}</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="modal-zip" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang.zip}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.compression_type}</label>
                        <div class="col-sm-9">
                            <select name="metadata" class="form-control">
                                <option value="zip">zip</option>
                                <option value="tar.gz">tar.gz</option>
                                <option value="tar.bz2">tar.bz2</option>
                                <option value="tar">tar</option>
                                <option value="gz">gz</option>
                                <option value="bz2">bz2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.destination_file}</label>
                        <div class="col-sm-9 input-group">                    
                            <span class="input-group-addon first">home/</span>
                            <input type="text" class="form-control last" name="name" value="{$dir}/filename" required>
                        </div>
                    </div>
                </form>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <a class="btn btn-primary" data-act="zip" data-refresh="1" data-formid="files-table" data-with-modal data-raw="1">{$lang.compress}</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="modal-filereq" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang.file_req}</h4>
            </div>
            <div class="modal-body">
                {$lang.file_req_desc}
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" data-dismiss="modal" aria-hidden="true">{$lang.ok}</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>    

<div id="modal-delete" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang.delete_confirmation}</h4>
            </div>
            <div class="modal-body">
                {$lang.are_you_sure_delete}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                <a class="btn btn-danger" data-act="delete" data-refresh="1" data-formid="files-table" data-raw="1">{$lang.confirm}</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="modal-move" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang.move}</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">{$lang.replace_warning_text}</div>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.move_to}</label>
                        <div class="col-sm-9 input-group">
                            <span class="input-group-addon first">home/</span>                                                        
                            <input type="text" class="form-control last" name="move_to" value="{$dir}">
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <a class="btn btn-primary" data-act="move" data-refresh="1" data-formid="files-table" data-with-modal data-raw="1">{$lang.move}</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="modal-copy" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang.copy}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <input type="hidden" name="file" value="" />
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.copy_to}</label>
                        <div class="col-sm-9 input-group">
                            <span class="input-group-addon first">home/</span>
                            <input type="text" class="form-control last" name="copy_to" value="{$dir}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.overwrite}</label>
                        <div class="col-sm-9 input-group">
                            <input type="checkbox" class="input-xlarge" name="overwrite" id="input03">
                        </div>
                    </div>    
                </form>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <a class="btn btn-primary" data-act="copy" data-refresh="1" data-formid="files-table" data-with-modal data-raw="1">{$lang.copy}</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="modal-unzip" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang.unzip}</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">{$lang.replace_warning_text}</div>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.extract_to}</label>
                        <div class="col-sm-9 input-group">
                            <span class="input-group-addon first">home/</span> 
                            <input type="text" class="form-control last" name="unzip_to" value="{$dir}">
                        </div>
                    </div>
                </form>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <a class="btn btn-primary" data-act="unzip" data-refresh="1" data-formid="files-table" data-with-modal data-raw="1">{$lang.unzip}</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="modal-chmod" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang.change_permissions}</h4>
            </div>
            <div class="modal-body">                                            
                <div class="row">
                    <div class="col-xs-2 text-right"></div>
                    <div class="col-xs-3 text-center"><label>{$lang.owner}</label></div>
                    <div class="col-xs-3 text-center"><label>{$lang.group}</label></div>
                    <div class="col-xs-3 text-center"><label>{$lang.others}</label></div>
                </div>
                <div class="row">
                    <div class="col-xs-2 text-right"><label>{$lang.read}</label></div>
                    <div class="col-xs-3 text-center"><input type="checkbox" value="400" checked=""></div>
                    <div class="col-xs-3 text-center"><input type="checkbox" value="40" checked=""></div>
                    <div class="col-xs-3 text-center"><input type="checkbox" value="4" checked=""></div>
                </div>
                <div class="row">
                    <div class="col-xs-2 text-right"><label>{$lang.write}</label></div>
                    <div class="col-xs-3 text-center"><input type="checkbox" value="200" checked=""></div>
                    <div class="col-xs-3 text-center"><input type="checkbox" value="20" ></div>
                    <div class="col-xs-3 text-center"><input type="checkbox" value="2" ></div>
                </div>
                <div class="row">
                    <div class="col-xs-2 text-right"><label>{$lang.execute}</label></div>
                    <div class="col-xs-3 text-center"><input type="checkbox" value="100" checked=""></div>
                    <div class="col-xs-3 text-center"><input type="checkbox" value="10" checked=""></div>
                    <div class="col-xs-3 text-center"><input type="checkbox" value="1" checked=""></div>
                </div>
                <input type="hidden" name="chmod" value="0755" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <a class="btn btn-primary" data-act="chmod" data-refresh="1" data-formid="files-table" data-with-modal data-raw="1">{$lang.change}</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div id="modal-rename" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang.rename}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <input type="hidden" name="file" value="" />
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.rename_to}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="new_name" value="{$dir}" required data-error="{$validator_lang.field_required}">
                        </div>
                        <div class="col-md-9 col-md-offset-3">
                            <div class="help-block with-errors"></div>
                        </div>                          
                    </div>
                </form>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <a class="btn btn-primary" data-act="rename" data-refresh="1">{$lang.rename}</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
                
{literal}
    <script>
        refreshTable('files-table-main');
        jQuery(document).ready(function () {
            $(document).delegate("[data-modal='#modal-copy']", 'click', function() {
                var $this = $(this);
                $("#modal-copy input[name='file']").val($this.data('file'));
                $("#modal-copy input[name='copy_to']").val($this.data('file').slice(1));
            });
            
            $(document).delegate("#select-all-files", 'change', function() {
                if($(this).is(':checked')) {
                    $('#files-table :checkbox').attr('checked','checked');
                } else {
                    $('#files-table :checkbox').removeAttr('checked');
                }
            });
                       
            $(document).delegate(".action-rename", 'click', function() {
                var file = $(this).data('file');
                var filename = $(this).data('filename');
                $("#modal-rename input[name=file]").val(filename);
                $("#modal-rename input[name=new_name]").val(filename);
            });
            
            $(document).delegate("[data-modal]", 'click', function( e ) {
                var modal = 0;
                if($(this).data('filereq') == 1 && !isAnyFileSelected()) modal = '#modal-filereq';
                else modal = $(this).data('modal');
                
                $(modal).modal('show');
                //$modal.modal('show');
                e.preventDefault();
            });

            $(document).delegate("#modal-chmod :checkbox", 'change', function() {
                var val = 0;
                $('#modal-chmod :checkbox').each( function() {
                    if($(this).is(':checked')) {
                        val += parseInt($(this).val());
                    }
                });

                var pad = "0000";
                var n = val.toString();
                var result = (pad+n).slice(-pad.length);
                $('#modal-chmod input[name=chmod]').val(result);
            });
            
            $(document).delegate("[data-modal='#modal-chmod']", 'click', function() {
                if(countSelectedFiles() != 1)
                    return true;
                
                var current = $('#files-table :checkbox:checked').parents('tr').find('.chmodval').html();

                chmodCheck(current.charAt(0), '00');
                chmodCheck(current.charAt(1), '0');
                chmodCheck(current.charAt(2), '');
                $('#modal-chmod input[name=chmod]').val('0' + current);
            });
            
            function chmodCheck(val, zeros) {
                var bin = parseInt(val).toString(2);
                bin="000".substr(bin.length)+bin;
                
                $("#modal-chmod [value=1" + zeros +"]").prop('checked', bin.charAt(2) == '1');
                $("#modal-chmod [value=2" + zeros +"]").prop('checked', bin.charAt(1) == '1');
                $("#modal-chmod [value=4" + zeros +"]").prop('checked', bin.charAt(0) == '1');
            }
           
           function isAnyFileSelected() {
               return countSelectedFiles() > 0;
           }
           
           function countSelectedFiles() {
               return $('#files-table :checkbox:checked').length;
           }
           
        });

    </script>
{/literal}
