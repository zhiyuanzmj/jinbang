<div class="module-header">
    <i class="icon-header icon-webusers"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.add_header}</h4>
        <div class="well">
            <form class="form-horizontal" id="user-form">                 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.name}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="username" class="form-control" type="text" required>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.password_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="password" id="password" class="form-control" type="password" 
                                       data-minlength="5" required>
                                <div class="help-block">{$validator_lang.min_5_chars}</div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>    
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.password2_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="password2" id="password2" class="form-control" type="password" 
                                       data-match="#password" data-error="{$validator_lang.field_required}" data-match-error="{$validator_lang.field_not_match}" placeholder="" required>
                                <div class="help-block"></div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>  
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.strength}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6 col-xs-7">
                                <div id="pwstrengthbox" class="">{$validator_lang.very_weak}</div>
                            </div>
                            <div class="col-sm-6 col-xs-5">
                                <button id="generate_pwd" type="button" class="btn btn-sm btn-default" data-genpwd="password,password2,pwstrengthbox"><i class="fa fa-key"></i><span class="hide-sm">{$lang.generate_password}</span></button>
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.php_support}</label>
                    <div class="col-sm-9">
                        <div class="checkboxx">
                            <input name="php" class="" type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.cgi_support}</label>
                    <div class="col-sm-9">
                        <div class="checkboxx">
                            <input name="cgi" class="" type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.fastcgi_support}</label>
                    <div class="col-sm-9">
                        <div class="checkboxx">
                            <input name="fastcgi" class="" type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="add" data-formid="user-form" data-validate="1" data-rtable="webusers-table">{$lang.add_submit_text}</a>
                </div>
            </form>
        </div>
    </div>
                
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.web_users}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="webusers-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="webusers-table" >
            <thead>
                <tr>
                    <th>{$lang.name}</th>
                    <th>{$lang.php}</th>
                    <th>{$lang.cgi}</th>
                    <th>{$lang.fastcgi}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                    <h4 class="modal-title">{$lang.edit_webuser}</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="userid" value="" />
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{$lang.password_label}</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input name="password" id="password3" class="form-control" type="password" 
                                               data-minlength="5">
                                        <div class="help-block">{$validator_lang.min_5_chars}</div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">{$lang.password2_label}</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input name="password2" id="password4" class="form-control" type="password" 
                                               data-match="#password3" data-error="{$validator_lang.field_required}" data-match-error="{$validator_lang.field_not_match}" placeholder="">
                                        <div class="help-block"></div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{$lang.php_support}</label>
                            <div class="col-sm-9">
                                <div class="checkboxx">
                                    <input name="php" class="" type="checkbox">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{$lang.cgi_support}</label>
                            <div class="col-sm-9">
                                <div class="checkboxx">
                                    <input name="cgi" class="" type="checkbox">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{$lang.fastcgi_support}</label>
                            <div class="col-sm-9">
                                <div class="checkboxx">
                                    <input name="fastcgi" class="" type="checkbox">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                    <button type="button" class="btn btn-primary" data-act="edituser" data-rtable="webusers-table" data-validate="1">{$lang.save_changes}</button>
                </div>
            </div>
        </div>
    </div>

    {confirm_modal btn='data-act="delete" data-rtable="webusers-table"' id="delete-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_confirmation_body`<input type='hidden' name='userid'/>"}
</div>

{literal}
    <script>
        refreshTable('webusers-table');
    </script>
{/literal}
