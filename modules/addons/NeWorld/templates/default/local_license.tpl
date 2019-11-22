<table id="license-list" class="table table-hover small" style="margin-bottom:0">
            <thead>
            <tr>
                <th>{$LANG.neworld_products_name}</th>
                <th>{$LANG.neworld_license_auth}</th>
                <th class="hidden-xs">{$LANG.neworld_license_time}</th>
                <th class="text-center">{$LANG.neworld_current}</th>
                <th class="text-center">{$LANG.neworld_latest}</th>
                <th class="text-right">{$LANG.neworld_action}</th>
            </tr>
            </thead>
            <tbody>
            {if $product}
                {foreach $product as $value}
                    <tr id="product_{$value['id']|trim}">
                        <td><span class="visible-xs">{$LANG.neworld_products_name}</span>{$value['name']|trim}</td>
                        <td><span class="visible-xs">{$LANG.neworld_license_auth}</span>{$value['license']|trim}</td>
                        <td><span class="visible-xs">{$LANG.neworld_license_time}</span>{$value['date']|date_format:"%Y-%m-%d"}</td>
                        <td class="text-center" id="currentversion_{$value['id']|trim}">
	                        <span class="visible-xs">{$LANG.neworld_latest}</span>{$value['version']|trim}
	                    </td>
                        <td class="text-center" id="lastversion_{$value['id']|trim}">
	                        <span class="visible-xs">{$LANG.neworld_action}</span>{$value['lastversion']|trim}
	                    </td>
                        <td class="text-right">
                            {if $value['button'] eq 'activate'}
                                <div class="btn btn-info btn-xs" onclick="javascript:if (confirm('按下确认，你将跳转至模块设置页面')) location='configaddonmods.php';">
                                    <span class="glyphicon glyphicon-floppy-disk"></span> {$LANG.neworld_enable}
                                </div>
                            {else}
                                <div class="btn btn-{if $value['button'] eq 'update'}success{else}warning{/if} btn-xs" data-type="NeWorld" data-action="{$value['button']}" data-license="{$value['license']|trim}" data-name="{$value['name']|trim}" data-id="{$value['id']|trim}" id="button_{$value['id']|trim}">
                                    {if $value['button'] eq 'install'}{$LANG.neworld_install}{elseif $value['button'] eq 'reinstall'}{$LANG.neworld_reinstall}{elseif $value['button'] eq 'update'}{$LANG.neworld_update}{/if}
                                </div>
                            {/if}
                            <div class="btn btn-info btn-xs" data-type="NeWorld" data-action="check" data-license="{$value['license']|trim}" data-name="{$value['name']|trim}" data-id="{$value['id']|trim}">
                                {$LANG.neworld_check}
                            </div>
                            <div class="btn btn-danger btn-xs" data-type="NeWorld" data-action="delete" data-license="{$value['license']|trim}" data-name="{$value['name']|trim}" data-id="{$value['id']|trim}">
                                {$LANG.neworld_delete}
                            </div>
                        </td>
                    </tr>
                {/foreach}
            {else}
                <tr id="message">
                    <td colspan="6" class="text-center">
                        {$LANG.neworld_no_license}
                    </td>
                </tr>
            {/if}
            </tbody>
            <tfoot class="hide">
	            <tr>
	                <td colspan="6">
	                    <div class="row">
	                        <div class="col-lg-7 col-md-8 col-sm-10">
	                            <div class="input-group">
	                                <input type="text" id="licenseKey" class="form-control" placeholder="{$LANG.neworld_license}"><span class="input-group-btn"><button class="btn btn-default" type="submit" id="submitkey">{$LANG.neworld_add_license}</button></span>
	                            </div>
	                        </div>
	                    </div>
	                </td>
	            </tr>
            </tfoot>
        </table>