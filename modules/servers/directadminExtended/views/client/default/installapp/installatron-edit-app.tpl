<div class="well">
    <form class="form-horizontal" id="edit-app-{$app_id}">
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_domain}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6 col-xs-11">
                        <select class="form-control" name="softdomain">
                        {foreach from=$domainlist item="d"}
                               <option value="{$d}" {if $d == $edit_app.urldomain}selected{/if}>{$d}</option>
                        {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-6 col-xs-1">
                        <i class="fa fa-question-circle" data-toggle="tooltip" title="{$lang.install_app_field_domain_description}"></i>
                    </div>
                </div>                    
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_directory}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6 col-xs-11">
                        <input class="form-control" name="url" value="{$edit_app.url}"/>
                    </div>
                    <div class="col-sm-6 col-xs-1">
                        <i class="fa fa-question-circle" data-toggle="tooltip" title="{$lang.install_app_field_directory_description}"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_lang}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="language" value="{$edit_app.language}" />
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_database}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6 col-xs-11">
                        <input class="form-control" type="text" name="db-name" value="{$edit_app.dbname}" readonly/>
                    </div>
                    <div class="col-sm-6 col-xs-1">
                        <i class="fa fa-question-circle" data-toggle="tooltip" title="{$lang.install_app_field_database_description}"></i>
                    </div>
                </div>                                                
            </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_database_dbuser}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6 col-xs-11">
                        <input class="form-control" type="text" name="db-user" value="{$edit_app.dbuser}" readonly/>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>                                                
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_database_dbpass}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="db-pass" value="{$edit_app.dbpass}" readonly/>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>                                                
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_table}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="db-prefix" value="{$edit_app.dbprefix}" readonly/>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>                                                
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_sitetitle}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="cfsitetitle" value="{$edit_app.title}"/>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>                                                
            </div>
        </div>   
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_adminname}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="cflogin" value="{$edit_app.cflogin}"/>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>                                                
            </div>
        </div> 
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_adminemail}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control" type="text" name="cfemail" value="{$edit_app.cfemail}"/>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>                                                
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_autoupdate}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <input class="" type="checkbox" name="autoup" value="1" {if $edit_app.autoup==1}checked{/if}/>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="sid" value="{$app_id}" />
        <input type="hidden" name="installer" value="{$edit_app.installer}" />
        <div class="form-actions">
            <button type="button" class="btn btn-primary" data-act="edit" data-formid="edit-app-{$app_id}" data-validate="1">{$lang.save}</button>
            <button type="button" class="btn btn-default pull-right edit-cancel-button">{$lang.install_app_cancel_btn}</button>
        </div>
    </form>
</div>