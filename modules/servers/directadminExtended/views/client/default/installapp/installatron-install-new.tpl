{foreach from=$list_app_all->data item="app" key="k"}
    {if $app->appid == $app_id}
        <div class="well">
            <form class="form-horizontal" id="new-app-{$app_id}">
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.install_app_field_domain}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6 col-xs-11">
                                <select class="form-control" name="params[softdomain]">
                                {foreach from=$domainlist item="d"}
                                       {assign var="domain" value=$d}
                                       <option value="{$d}">{$d}</option>
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
                                <input class="form-control" name="params[directory]" value="http://www.{$domain}/"/>
                            </div>
                            <div class="col-sm-6 col-xs-1">
                                <i class="fa fa-question-circle" data-toggle="tooltip" title="{$lang.install_app_field_directory_description}"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.install_app_field_content}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6 col-xs-11">
                                <select class="form-control" name="params[content_install]">
                                    <option value="yes">{$lang.install_app_field_content_demo}</option>
                                    <option value="no">{$lang.install_app_field_content_clean}</option>
                                </select>
                            </div>
                            <div class="col-sm-6 col-xs-1">
                                <!-- <i class="fa fa-question-circle" data-toggle="tooltip" title=""></i> -->
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.install_app_field_lang}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="language" value="" />
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
                                <input class="form-control" type="text" name="params[softdb]" value=""/>
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
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="params[db_user]" value=""/>
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
                                <input class="form-control" type="text" name="params[db_pass]" value=""/>
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
                                <input class="form-control" type="text"  name="params[dbprefix]" value="" />
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.install_app_field_sitename}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="params[site_name]" value="My site" />
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
                                <input class="form-control" type="text" name="params[admin_username]" value="admin" />
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.install_app_field_adminpass}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="params[admin_password]" value="admin" />
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
                                <input class="form-control" type="text" name="params[admin_email]" value="admin@{$domain}"/>
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
                                <input class="" type="checkbox" name="params[autoup]" value="1"/>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="sid" value="{$app_id}" />
                <input type="hidden" name="version" value="{$app->version}" />
                <div class="form-actions">
                    <button type="button" class="btn btn-primary" data-act="addsoftware" data-formid="new-app-{$app_id}" data-validate="1">{$lang.install_app_main_label}</button>
                    <button type="button" class="btn btn-default pull-right install-cancel-button">{$lang.install_app_cancel_btn}</button>
                </div>
            </form>
        </div>
    {/if}
{/foreach}

        
