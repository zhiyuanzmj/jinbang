<h3 style="margin-top: 0px; display: inline;">{$settings.product_group} - {$settings.product_name}</h3>
<input type="hidden" name="settings[product_id]" value="{$settings.productid}" />
<br /> <br />

{if !empty($current)}
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">{$MGLANG->T('label', 'copy_configuration')}</h3>
        </div>
        <div class="panel-body">
            <div class="div-tr">
                <div class="div-td">{$MGLANG->T('option_label', 'copy_configuration_from')}</div>
                <div class="div-td">
                    <select name="copy_from" class="form-control" style="display: inline;">
                    {foreach from=$current item=product}
                        <option value="{$product.productid}">{$product.product_group} - {$product.product_name}</option>
                    {/foreach}
                    </select>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a class="btn btn-success btn-inverse" data-copy-to="{$settings.productid}">{$MGLANG->T('button', 'copy')}</a>
        </div>
    </div>
{/if}

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('button', 'features')}</h3>
    </div>
    <div class="panel-body">
        <div class="div-table">
            <div class="div-tr">
            {foreach from=$features key=group_name item=group}
                <div class="settings-group div-td">
                    <div class="group-label"><label><input type="checkbox" class="check-all" {if $features_all.$group_name}checked=""{/if}/><span>&nbsp;{$MGLANG->T('group_label',$group_name)}</span></label></div>
                    {foreach from=$group item=config_name}
                        <div class=""><label><input type="checkbox" name="settings[{$config_name}]" {if !empty($settings.$config_name)}checked=""{/if}/><span>&nbsp;{$MGLANG->T('option_label',$config_name)}</span></label></div>
                    {/foreach}
                </div>
            {/foreach}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary" style="min-width: 340px;">
            <div class="panel-heading">
                <h3 class="panel-title">{$MGLANG->T('button', 'install_app')}</h3>
            </div>
            <div class="panel-body">
                <div class="div-tr dont-touch-me">
                    <div class="div-td middle" style="min-width: 160px;"><label><b>{$MGLANG->T('option_label','install_app')}</b></label></div>
                    <div class="div-td" style="width: 300px;">
                        <div class="div-td middle"><div class="checkbox checkbox-slider--b-flat" style="margin-top: 4px;"><label><input class="" type="checkbox" name="settings[apps]" {if !empty($settings.apps)}checked=""{/if}/><span></span></label></div></div>
                        <div class="div-td middle"><div style="display: inline;"><i class="fa fa-question-circle" style="display: inline;" data-toggle="tooltip" title="{$MGLANG->T('help','install_app1')}{$MGLANG->T('help','install_app2')}"></i></div></div>
                    </div>
                    
                    <div class="div-td middle" style="width:60px;">

                    </div>
                </div>
                <div class="div-tr">
                    <div class="div-td middle"><b>{$MGLANG->T('option_label','auto_installer')}</b></div>
                    <div class="div-td">
                        <select class="form-control" name="settings[apps_installer_type]" {if empty($settings.apps)}disabled=""{/if}>
                            <option value="1" {if $settings.apps_installer_type == 1}selected=""{/if}>{$MGLANG->T('option_label','softaculous')}</option>
                            <option value="2" {if $settings.apps_installer_type == 2}selected=""{/if}>{$MGLANG->T('option_label','installatron')}</option>
                        </select>
                    </div>
                </div>
                <div class="div-tr">
                    <div class="div-td middle"><label><b>{$MGLANG->T('option_label','assign_to_configurable_options')}</b></label></div>
                    <div class="div-td">
                        <div class="checkbox checkbox-slider--b-flat"><label><input type="checkbox" name="settings[apps_order_assign]" {if $settings.apps_order_assign}checked=""{/if} {if empty($settings.apps)}disabled=""{/if}/><span></span></label></div>
                    </div>
                </div>
                <div class="div-tr">
                    <div class="div-td middle"><b>{$MGLANG->T('option_label','apps_configurable_options')}</b></div>
                    <div class="div-td">
                        <select class="form-control" name="settings[apps_app_name]" {if $settings.apps_order_assign == 1}style="display:none"{/if} {if empty($settings.apps)}disabled=""{/if}>
                            
                        </select>
                        <select class="form-control" name="settings[apps_config_option_gid]" {if $settings.apps_order_assign == 0}style="display:none"{/if} {if empty($settings.apps)}disabled=""{/if}>
                            <option value="0">{$MGLANG->T('option_label','none')}</option>
                            {foreach from=$conf_options item=option}
                                <option value="{$option.id}" {if $settings.apps_config_option_gid == $option.id}selected=""{/if}>{$option.name}</option>
                            {/foreach}
                        </select>
                        <input type="hidden" name="app_name_current_value" value="{$settings.apps_app_name}" />
                    </div>
                    <div class="div-td middle">
                        <a class="apps-file-download" href="{$download_link}" {if $settings.apps_order_assign == 0}style="display:none;"{/if} data-href-no-params="{$download_link_no_params}" data-toggle="tooltip" title="{$MGLANG->T('help','download')}"><i class="fa fa-download" style="font-size: 15px !important;"></i></a>
                        &nbsp;<i class="fa fa-question-circle" data-toggle="tooltip" title="{$MGLANG->T('help','conf_opt')}"></i>
                    </div> 
                </div>
                <div class="div-tr">
                    <div class="div-td middle"><label><b>{$MGLANG->T('option_label','install_button')}</b></label></div>
                    <div class="div-td"><div class="checkbox checkbox-slider--b-flat"><label><input type="checkbox" name="settings[apps_installation]" {if !empty($settings.apps_installation)}checked=""{/if} {if empty($settings.apps)}disabled=""{/if}/><span></span></label></div></div>
                </div>
                <div class="div-tr">
                    <div class="div-td middle"><label><b>{$MGLANG->T('option_label','backup_button')}</b></label></div>
                    <div class="div-td"><div class="checkbox checkbox-slider--b-flat"><label><input type="checkbox" name="settings[apps_backups]" {if !empty($settings.apps_backups)}checked=""{/if} {if empty($settings.apps)}disabled=""{/if}/><span></span></label></div></div>
                </div>
                <div class="div-tr">
                    <div class="div-td middle"><b>{$MGLANG->T('option_label','language')}</b></div>
                    <div class="div-td"><input class="form-control" type="text" name="settings[apps_lang]" value="{$settings.apps_lang}" {if empty($settings.apps)}disabled=""{/if} placeholder="en"/></div>
                    <div class="div-td middle">
                        <i class="fa fa-question-circle" data-toggle="tooltip" title="{$MGLANG->T('help','lang')}"></i>
                    </div> 
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{$MGLANG->T('label', 'other')}</h3>
            </div>
            <div class="panel-body">
                <div class="div-tr">
                    <div class="div-td">{$MGLANG->T('option_label', 'webmail_type')}</div>
                    <div class="div-td">
                        <select name="settings[webmail_type]" class="form-control" style="display: inline;">
                            <option value="1" {if $settings.webmail_type eq '1'}selected=""{/if}>Horde</option>
                            <option value="2" {if $settings.webmail_type eq '2'}selected=""{/if}>Roundcube</option>
                            <option value="3" {if $settings.webmail_type eq '3'}selected=""{/if}>Squirellmail</option>
                        </select>
                    </div>
                </div>
                <div class="div-tr">
                    <div class="div-td">{$MGLANG->T('option_label', 'show_server_ip')}</div>
{*                    <div class="div-td">
                        <input name="settings[dedicated_ip]" type="checkbox" class="checkbox checkbox-slider--b-flat" style="display: inline;">

                    </div>*}
                    <div class="div-td">
                        <div class="checkbox checkbox-slider--b-flat">
                            <label>
                                <input type="checkbox" name="settings[show_ip]" {if !empty($settings.show_ip)}checked=""{/if} /><span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="div-tr">
                    <div class="div-td">{$MGLANG->T('option_label', 'show_ssl_encrypt')}</div>
                    <div class="div-td">
                        <div class="checkbox checkbox-slider--b-flat">
                            <label>
                                <input type="checkbox" name="settings[ssl_allow_encrypt]" {if !empty($settings.ssl_allow_encrypt)}checked=""{/if} /><span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    {*<div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{$MGLANG->T('label', 'look_and_feel')}</h3>
            </div>
            <div class="panel-body">
                <div class="alert alert-info">{$MGLANG->T('info', 'directadmin_templates_location')|html_entity_decode}</div>
                <div class="div-tr">
                    <div class="div-td">{$MGLANG->T('option_label', 'skin')}</div>
                    <div class="div-td">
                        <select name="settings[skin]" class="form-control" style="display: inline;">
                        {foreach from=$skins item=skin}
                            <option value="{$skin}" {if $settings.skin eq $skin}selected=""{/if}>{$skin}</option>
                        {/foreach}
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>*}
</div>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('label', 'ftp_backup_end_points')}</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
            
            
        <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    <th>{$MGLANG->T('end_points_table', 'server')}</th>
                    <th>{$MGLANG->T('end_points_table', 'backup_name')}</th>
                    <th>{$MGLANG->T('end_points_table', 'host')}</th>
                    <th>{$MGLANG->T('end_points_table', 'port')}</th>
                    <th>{$MGLANG->T('end_points_table', 'user')}</th>
                    <th>{$MGLANG->T('end_points_table', 'password')}</th>
                    <th>{$MGLANG->T('end_points_table', 'path_to_files')}</th>
                    <th>{$MGLANG->T('end_points_table', 'use_admin_access')}</th>
                    <th>{$MGLANG->T('end_points_table', 'enable_restores')}</th>
                    <th>{$MGLANG->T('end_points_table', 'actions')}</th>
                </tr>
            </thead>
            <tbody>
                <tr style="display: none" class="end_points_temp">
                    <td>
                        <select class="form-control" name="settings[ftp_endpoints][template][server]">
                        {foreach from=$servers item="server" key="id"}
                            <option value="{$id}">{$server}</option>
                        {/foreach}
                        </select>
                    </td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][template][name]" value="" /></td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][template][host]" value="" /></td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][template][port]" value="" /></td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][template][user]" value="" /></td>
                    <td><input class="form-control" type="password" name="settings[ftp_endpoints][template][password]" value="" /></td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][template][path]" value="" /></td>
                    <td style="vertical-align: middle;"><input class="" type="checkbox" name="settings[ftp_endpoints][template][admin_access]"/></td>
                    <td style="vertical-align: middle;"><input class="" type="checkbox" name="settings[ftp_endpoints][template][enable_restore]" /></td>
                    <td><a class="btn btn-danger" onclick="$(this).parents('tr').remove();">{$MGLANG->T('remove')}</a></td>
                </tr>
            {foreach from=$settings.ftp_endpoints item="point" key="id"}
                <tr>
                    <td>
                        <select class="form-control" name="settings[ftp_endpoints][{$id}][server]">
                        {foreach from=$servers item="server" key="idd"}
                            <option value="{$idd}" {if $idd eq $point.server}selected=""{/if}>{$server}</option>
                        {/foreach}
                        </select>
                    </td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][{$id}][name]" value="{$point.name}" /></td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][{$id}][host]" value="{$point.host}" /></td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][{$id}][port]" value="{$point.port}" /></td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][{$id}][user]" value="{$point.user}" /></td>
                    <td><input class="form-control" type="password" name="settings[ftp_endpoints][{$id}][password]" value="{$point.password}" /></td>
                    <td><input class="form-control" type="text" name="settings[ftp_endpoints][{$id}][path]" value="{$point.path}" /></td>
                    <td style="vertical-align: middle;"><input class="" type="checkbox" name="settings[ftp_endpoints][{$id}][admin_access]" {if $point.admin_access eq 'on'}checked=""{/if} /></td>
                    <td style="vertical-align: middle;"><input class="" type="checkbox" name="settings[ftp_endpoints][{$id}][enable_restore]" {if $point.enable_restore eq 'on'}checked=""{/if} /></td>
                    <td><a class="btn btn-danger" onclick="$(this).parents('tr').remove();">{$MGLANG->T('remove')}</a></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        <a class="btn btn-succes" onclick="letsMakeSomeNoise(this);">{$MGLANG->T('add')}</a>    
            </div>
        </div>
        
    </div>
</div>
            
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">{$MGLANG->T('label', 'backup_directory_paths')}</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-condensed">
            <thead>
                <tr>
                    <th>{$MGLANG->T('end_points_table', 'server')}</th>
                    <th>{$MGLANG->T('end_points_table', 'name')}</th>
                    <th>{$MGLANG->T('end_points_table', 'path')}</th>
                    <th>{$MGLANG->T('end_points_table', 'use_admin_access')}</th>
                    <th>{$MGLANG->T('end_points_table', 'enable_path')}</th>
                    <th>{$MGLANG->T('end_points_table', 'actions')}</th>
                </tr>
            </thead>
            <tbody>
                <tr style="display: none" class="dir_temp">
                    <td>
                        <select class="form-control" name="settings[backup_directories][template][server]">
                        {foreach from=$servers item="server" key="id"}
                            <option value="{$id}">{$server}</option>
                        {/foreach}
                        </select>
                    </td>
                    <td><input class="form-control" type="text" name="settings[backup_directories][template][name]" value="" /></td>
                    <td><input class="form-control" type="text" name="settings[backup_directories][template][path]" value="" /></td>
                    <td style="vertical-align: middle;"><input class="" type="checkbox" name="settings[backup_directories][template][admin_access]" /></td>
                    <td style="vertical-align: middle;"><input class="" type="checkbox" name="settings[backup_directories][template][enable_path]" /></td>
                    <td><a class="btn btn-danger" onclick="$(this).parents('tr').remove();">{$MGLANG->T('remove')}</a></td>
                </tr>
            {foreach from=$settings.backup_directories item="dir" key="id"}
                <tr>
                    <td>
                        <select class="form-control" name="settings[backup_directories][{$id}][server]">
                        {foreach from=$servers item="server" key="idd"}
                            <option value="{$idd}" {if $idd eq $dir.server}selected=""{/if}>{$server}</option>
                        {/foreach}
                        </select>
                    </td>
                    <td><input class="form-control" type="text" name="settings[backup_directories][{$id}][name]" value="{$dir.name}" /></td>
                    <td><input class="form-control" type="text" name="settings[backup_directories][{$id}][path]" value="{$dir.path}" /></td>
                    <td style="vertical-align: middle;"><input class="" type="checkbox" name="settings[backup_directories][{$id}][admin_access]" {if $dir.admin_access eq 'on'}checked=""{/if} /></td>
                    <td style="vertical-align: middle;"><input class="" type="checkbox" name="settings[backup_directories][{$id}][enable_path]" {if $dir.enable_path eq 'on'}checked=""{/if} /></td>
                    <td><a class="btn btn-danger" onclick="$(this).parents('tr').remove();">{$MGLANG->T('remove')}</a></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        <a class="btn btn-succes" onclick="letsMakeSomeNoise(this);">{$MGLANG->T('add')}</a>
    </div>
</div>
                        
<div class="">
    <a class="btn btn-success btn-inverse" data-save="{$settings.productid}" style="width: 150px;">{$MGLANG->T('button', 'save')}</a>
    <a class="btn btn-primary btn-inverse" data-close="{$settings.productid}" style="width: 150px">{$MGLANG->T('button', 'back')}</a>
</div>
                    
{literal}
    <script type="text/javascript">
        function letsMakeSomeNoise(dubstep) {
            var id = guidso();
            var $table = $(dubstep).parents('.panel-body').find('tbody');
            $('tr', $table).first().clone().appendTo($table).show().find('input, select').each(function() {
                $(this).val('').removeAttr('checked');
                var reg = /settings\[(.*)\]\[(.*)\]\[(.*)\]/g;
                var name = $(this).attr('name');
                var match = reg.exec(name);
                $(this).removeAttr('name').attr('name', 'settings['+match[1]+'][' + id + '][' + match[3] + ']');
            });
        }
        
        function guidso() {
            function s4() {
              return Math.floor((1 + Math.random()) * 0x10000)
                .toString(16)
                .substring(1);
            }
            return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
              s4() + '-' + s4() + s4() + s4();
        }
    </script>    
{/literal}