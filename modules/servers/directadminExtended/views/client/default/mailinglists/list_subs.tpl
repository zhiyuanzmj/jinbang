<tbody>
{if isset($error)}
    <tr><td colspan="3">{$lang.cannot_load_list}</td></tr>
{elseif empty($list)}
    <tr><td colspan="3">{$lang.no_data}</td></tr>
{else}
    {foreach from=$list item="sub"}
        <tr>
            <td class="cell-sm-12"><a href="mailto:{$sub.email}">{$sub.email}</a></td>
            <td class="cell-sm-12">{$sub.type}</td>
            <td class="cell-sm-12 cell-actions">
                <a class="btn btn-icon" data-toggle="modal" data-target="#delete-confirmation" data-modal-insert="[name=daact]:delete_subscriber{if $sub.type eq 'digest'}_digest{/if}|[name=sub]:{$sub.email|rawurlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    {/foreach}
{/if}
</tbody>