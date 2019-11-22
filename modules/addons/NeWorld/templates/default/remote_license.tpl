<table id="license-list2" class="table table-hover small" style="margin-bottom:0">
    <thead>
	    <tr>
	        <th>{$LANG.neworld_products_name}</th>
	        <th>{$LANG.neworld_license_auth}</th>
	        <th>{$LANG.neworld_license_buy}</th>
	        <th class="text-right">{$LANG.neworld_action}</th>
	    </tr>
    </thead>
    <tbody>
        {foreach $product_remote as $value}
            <tr id="product_remote_{$value['id']|trim}">
                <td><span class="visible-xs">{$LANG.neworld_products_name}</span>{$value['name']|trim}</td>
                <td><span class="visible-xs">{$LANG.neworld_license_auth}</span>{$value['license']|trim}</td>
                <td><span class="visible-xs">{$LANG.neworld_license_buy}</span>{$value['regdate']|trim}</td>
                <td class="text-right">
                    <div class="btn btn-warning btn-xs install_button" data-name="{$value['name']|trim}" data-license="{$value['license']|trim}" data-id="{$value['id']|trim}">
	                    {$LANG.neworld_verify}
                    </div>
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>