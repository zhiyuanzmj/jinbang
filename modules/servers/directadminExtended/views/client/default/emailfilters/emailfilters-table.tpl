<tbody>
{if isset($error)}
    <tr><td colspan="3">{$lang.cannot_load_list}</td></tr>
{elseif empty($list) || (empty($list[0].type) && count($list) == 1)}
    <tr><td colspan="3">{$lang.no_filters}</td></tr>
{else}
    {foreach from=$list item="filter"}
        {if !empty($filter.type)}
            {assign var="type" value=$filter.type}
            <tr>
                <td>{$lang.$type}</td>
                <td>{$filter.value}{if $filter.type eq 'size'} KB{/if}</td>
                <td class="cell-actions">
                    <a class="btn btn-icon" data-toggle="modal" data-target="#delete-filter-modal" data-modal-insert="[name=filterid]:{$filter.user|rawurlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        {/if}
    {/foreach}
{/if}
</tbody>