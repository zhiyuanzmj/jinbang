<table class="table" id="settings-table">
    <thead>
        <tr>
            <th>{$MGLANG->T('table_header','product')}</th>
            <th>{$MGLANG->T('table_header','auto_installer')}</th>
            <th>{$MGLANG->T('table_header','template')}</th>
            <th>{$MGLANG->T('table_header','enabled_features')}</th>
            <th style="width: 250px;">{$MGLANG->T('table_header','configure')}</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$products item=product}
        <tr>
            <td><a href="configproducts.php?action=edit&id={$product.pid}" >{$product.product_group} - {$product.product_name}</a></td>
            <td id="installer-{$product.pid}">{if $product.installer_type == 1}{$MGLANG->T('option_label','softaculous')}{elseif $product.installer_type == 2}{$MGLANG->T('option_label','installatron')}{else}-{/if}</td>
            <td id="skin-{$product.pid}">{if !empty($product.skin)}{$product.skin}{else}-{/if}</td>
            <td><span class="badge badge-success" id="features-count-{$product.pid}">{$product.features_count}</span></td>
            <td><a class="btn btn-success btn-inverse" data-edit-configuration="{$product.pid}">{$MGLANG->T('button', 'configuration')}</a></td>
        </tr>
    {foreachelse}
        <tr><td colspan="5" class="center-text">{$MGLANG->T('table', 'empty')}</tr>
    {/foreach}
    </tbody>
</table>
 
<div id="configurations">

</div>   
    
<select id="softaculous-select" style="display: none;">
    <option value="">{$MGLANG->T('option_label','none')}</option>
    {foreach from=$apps.softaculous item=app}
        <option>{$app.name}</option>
    {/foreach}
</select>

<select id="installatron-select" style="display: none;">
    <option value="">{$MGLANG->T('option_label','none')}</option>
    {foreach from=$apps.installatron item=app}
        <option>{$app.name}</option>
    {/foreach}
</select>
    
{literal} 
    <style type="text/css">
        .mg-wrapper #settings-table tbody td {
            vertical-align: middle;
        }
        
        .mg-wrapper .settings-box {
            display: inline-block;
            text-align: left;
            margin-bottom: 5px;
        }
        
        .mg-wrapper .settings-group {
            /*float: left;*/
            margin: 10px 10px 0px 10px;
        }
        
        .mg-wrapper label {
            font-weight: initial;
        }
        
        .mg-wrapper .group-label {
            margin-bottom: 10px;
        }
        
        .mg-wrapper .group-label span {
            font-weight: bold;
            font-size: 15px;
        }
        
        .mg-wrapper .group-label label b {
            font-size: 16px;
        }
        
        .mg-wrapper .div-td input[type="checkbox"] {
            margin-top: -1px;
        }
        
        .mg-wrapper input[type="checkbox"].form-control  {
            width: 1.0em;
        }
        
        .mg-wrapper .tooltip .tooltip-inner{
            max-width: 400px;
        }
        
        @media (max-width: 480px) {
            .mg-wrapper .tooltip .tooltip-inner{
                max-width: 200px;
            }
        }
        
        .mg-wrapper [title] {
            cursor: pointer;
        }
        
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            function showEditPage(id, data) {
                if(!data)
                    return 0;
                
                $('#settings-table').hide();
                $('#configurations').append('<div id="configuration-' + id + '">' + data.html + '</div>');
                        
                if($('#configuration-' + id + ' select[name="settings[apps_installer_type]"]').val() == 1) 
                    $('#configuration-' + id + ' select[name="settings[apps_app_name]"]').html($('#softaculous-select').html());
                else 
                    $('#configuration-' + id + ' select[name="settings[apps_app_name]"]').html($('#installatron-select').html());
                
                var $download_link = $('#configuration-' + id + ' .apps-file-download');
                $download_link.attr('href', $download_link.data('href-no-params') + '&apps_list=' + $('#configuration-' + id + ' select[name="settings[apps_installer_type]"]').val());

                $('#configuration-' + id + ' select[name="settings[apps_installer_type]"]').trigger('change');
                $('#configuration-' + id + ' [data-toggle="tooltip"]').tooltip();

                $('#configuration-' + id + ' .settings-group').iCheck({
                    checkboxClass: 'checkbox-styled',
                    radioClass: 'radio-styled',
                    increaseArea: '20%'
                });
                
                $('#configuration-' + id + ' select[name="settings[apps_app_name]"]').val($('#configuration-' + id + ' input[name="app_name_current_value"]').val());
            }
            
            $('[data-edit-configuration]').click( function() {                
                var id = $(this).data('edit-configuration');
                if($('#configuration-' + id).length) { //load from cache
                    $('#configuration-' + id).show();
                } else {
                    var query = [];
                    query[query.length] = {name: 'productid', value: id};
                    JSONParser.request('edit', query, function(data) {
                        showEditPage(id, data);
                    });
                }
            });
            
            $(document).delegate(".check-all", 'click ifChanged', function(){
                $(this).parents('div.settings-group').first().find('input:checkbox').not(this).prop('checked', this.checked).iCheck('update');
            });
            
            $(document).delegate('[name="settings[apps]"]', 'change', function() {
                if($(this).is(':checked')) 
                    $(this).parents('.panel').first().find('.div-tr:not(.dont-touch-me) :input').removeAttr('disabled');
                else
                    $(this).parents('.panel').first().find('.div-tr:not(.dont-touch-me) :input').attr('disabled','');
            });
            
            $(document).delegate('[data-save]','click', function() {
                var id = $(this).data('save');
                var query = $('#configuration-' + id + ' :input').serializeArray();
                
                JSONParser.request('save', query, function(data) {
                    var features_count = $('#configuration-' + id + ' .settings-group :checkbox:checked:not(.check-all)').length;
                    $('#features-count-'+id).html(features_count);
                    $('#skin-'+id).html($('#configuration-' + id + ' :input[name="settings[skin]"]').val() || '-');
                    $('#installer-'+ id).html($('#configuration-' + id + ' :input[name="settings[apps_installer_type]"] option:selected').first().html());
                    $('#settings-table').show();
                    $('#configurations').html('');
                    $(window).scroll();
                });
            });
            
            $(document).delegate('[data-close]','click', function() {
                $('#configuration-' + $(this).data('close')).remove();//hide();//cache
                $('#settings-table').show();
                $(window).scroll();
            });
            
            $(document).delegate('select[name="settings[apps_installer_type]"]','change', function() {
                if($(this).val() == 1) 
                    $(this).parents('.panel').first().find('select[name="settings[apps_app_name]"]').html($('#softaculous-select').html());
                else 
                    $(this).parents('.panel').first().find('select[name="settings[apps_app_name]"]').html($('#installatron-select').html());
                var $download_link = $(this).parents('.panel').first().find('.apps-file-download');
                $download_link.attr('href', $download_link.data('href-no-params') + '&apps_list=' + $(this).val());
            });
            
            $(document).delegate('[name="settings[apps_order_assign]"]','change', function() {
                var $panel = $(this).parents('.panel').first();
                $panel.find('select[name="settings[apps_app_name]"]').toggle(!$(this).is(':checked'));
                $panel.find('select[name="settings[apps_config_option_gid]"]').toggle($(this).is(':checked'));
                var $download_link = $panel.find('.apps-file-download').toggle($(this).is(':checked'));
            });
            
            $(document).delegate('[data-copy-to]', 'click', function() {
                var copy_from = $(this).parents('.panel').first().find('[name="copy_from"]').val();
                var copy_to = $(this).data('copy-to');
                
                var query = [];
                query[query.length] = {name: 'copy_from', value: copy_from};
                query[query.length] = {name: 'copy_to', value: copy_to};
                JSONParser.request('copy', query, function(data) {
                    $('#configuration-' + copy_to).remove();
                    showEditPage(copy_to, data);
                    var features_count = $('#configuration-' + copy_to + ' .settings-group :checkbox:checked:not(.check-all)').length;
                    $('#features-count-'+copy_to).html(features_count);
                    $('#skin-'+copy_to).html($('#configuration-' + copy_to + ' :input[name="settings[skin]"]').val() || '-');
                    $('#installer-'+copy_to).html($('#configuration-' + copy_to + ' :input[name="settings[apps_installer_type]"] option:selected').first().html());
                    //$('#configurations').append('<div id="configuration-' + copy_to + '">' + data.html + '</div>');
                    //$('#configuration-' + copy_to + ' select[name="settings[installer_type]"]').trigger('change'); 
               });
            });
            
            $(document).delegate('.settings-group :checkbox:not(.check-all)', 'change ifChanged', function() {
                //var checked = $(this).parents('.settings-group').first().find(':checkbox:checked:not(.check-all)').length;
                var unchecked = $(this).parents('.settings-group').first().find(':checkbox:not(.check-all,:checked)').length;
                $(this).parents('.settings-group').first().find('.check-all').prop('checked', unchecked == 0).iCheck('update');
            });
            
        });
    </script>
{/literal}