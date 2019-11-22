<tbody>
{if isset($error)}
    <tr><td colspan="3">{$lang.cannot_load_list}</td></tr>
{elseif empty($list)}
    <tr><td colspan="4">{$lang.no_autoresponders}</td></tr>
{else}
    {foreach from=$list item=autoresponders key=domain}
        {foreach from=$autoresponders item="cc_email" key="user"}
            <tr>
                <td>{$user}</td>
                <td>{$domain}</td>
                <td>{$cc_email}</td>
                <td class="cell-actions">
                    <a class="btn btn-icon" data-act="view" data-query="user={$user|rawurlencode}&domain={$domain|rawurlencode}" title="{$lang.edit}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-icon" data-toggle="modal" data-target="#delete-confirmation" data-modal-insert="[name=user]:{$user|rawurlencode}|[name=domain]:{$domain|rawurlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        {/foreach}
    {/foreach}
{/if}
</tbody>