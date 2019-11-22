<tbody>
{if isset($error)}
    <tr><td colspan="3">{$lang.cannot_load_list}</td></tr>
{elseif empty($list)}
    <tr><td colspan="3">{$lang.no_handlers}</td></tr>
{else}
    {foreach from=$list item="extensions" key="handler"}
    <tr>
        <td>{$handler}</td>
        <td>
        {foreach from=$extensions item="extension"}
            {if !empty($extension)}
            <span class="remove-label" style="display: inline-block;" 
                  data-modal-insert="[name=handler]:{$handler|rawurlencode}|[name=extension]:{$extension|rawurlencode}"  
                  data-toggle="modal" data-target="#delete-extension-confirmation">{$extension}</span>
            {/if}
        {/foreach}
        </td>
        <td class="cell-actions">
            <a class="btn btn-icon" data-toggle="modal" data-target="#delete-confirmation" data-modal-insert="[name=handler]:{$handler|rawurlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    {/foreach}
{/if}
</tbody>
