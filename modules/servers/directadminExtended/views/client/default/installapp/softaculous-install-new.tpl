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
                        <input class="form-control" name="params[softdirectory]" value="{if $app.urlname}{$app.urlname}{else}{$list_app_all[$app_id].urlname}{/if}"/>
                    </div>
                    <div class="col-sm-6 col-xs-1">
                        <i class="fa fa-question-circle" data-toggle="tooltip" title="{$lang.install_app_field_directory_description}"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_database}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6 col-xs-11">
                        <input class="form-control" type="text" name="params[softdb]" value="" maxlength='7'/>
                    </div>
                    <div class="col-sm-6 col-xs-1">
                        <i class="fa fa-question-circle" data-toggle="tooltip" title="{$lang.install_app_field_database_description}"></i>
                    </div>
                </div>                                                
            </div>
        </div>
                    
        {if $app.fields|@count > 0}
            {foreach from=$app.fields item="field"}
                {assign var="name" value=$field.name}
                {assign var="label" value=$field.label}
                <div class="form-group">
                    <label class="control-label col-sm-3">{if $lang.softaculous_fields.$name}{$lang.softaculous_fields.$name}{else}{$label}{/if}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                {if $field.type == "text"}
                                    <input class="form-control" type="text" name="params[{$name}]" value="{$field.value}" />
                                {elseif $field.type == "textarea"}
                                    <textarea class="form-control" name="params[{$name}]" cols="{$field.cols}" rows="{$field.rows}">{$field.value}</textarea>
                                {elseif $field.type == "cron"}
                                    <table>
                                        {foreach from=$field.values key="k" item="v"}
                                            <tr>
                                                <td>{if $lang.softaculous_fields.$k}{$lang.softaculous_fields.$k}{else}{$k}{/if}</td>
                                                <td><input type="text" name="params[{$k}]" value="{$v}" style="width: 50px;" /></td>
                                            </tr>
                                        {/foreach}
                                    </table>
                                {elseif $field.type == "checkbox"}
                                    <input class="" type="checkbox" name="params[{$name}]" value="{$field.value}"/>
                                {elseif $field.type == "select"}
                                    <select class="form-control" name="params[{$name}]">
                                    {foreach from=$field.options key="k" item="v"}
                                        <option value="{$k}">{$v}</option>
                                    {/foreach}
                                    </select>
                                {/if}
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        {else}
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
                <label class="control-label col-sm-3">{$lang.install_app_field_table}</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text"  name="params[dbprefix]" value="{$list_app_all[$app_id].softname}" />
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
                <label class="control-label col-sm-3">{$lang.install_app_field_sitedescription}</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="params[site_desc]" value="My site" />
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">{$lang.install_app_field_fname}</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="params[admin_fname]" value="admin" />
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">{$lang.install_app_field_lname}</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="params[admin_lname]" value="admin" />
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">{$lang.install_app_field_realname}</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="params[admin_realname]" value="admin" />
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
                            <input class="form-control" type="text" name="params[admin_pass]" value="admin"/>
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
        {/if}
        
       <!-- <div class="form-group">
            <label class="control-label col-sm-3">{$lang.install_app_field_overwrite}</label>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="checkbox">
                            <label><input type="checkbox" name="overwrite_existing" value="on"/>&nbsp;</label>
                        </div>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div> -->
        <input type="hidden" name="sid" value="{$app_id}" />
        <div class="form-actions">
            <button type="button" class="btn btn-primary" data-act="addsoftware" data-formid="new-app-{$app_id}" data-validate="1" data-rtable="installed-app-table">{$lang.install_app_main_label}</button>
            <button type="button" class="btn btn-default pull-right install-cancel-button">{$lang.install_app_cancel_btn}</button>
        </div>
    </form>
</div>