<tbody>
{if isset($error)}
    <tr><td colspan="4">{$lang.cannot_load_list}</td></tr>
{elseif empty($list)}
    <tr><td colspan="4">{$lang.no_vacations}</td></tr>
{else}
    {foreach from=$list item="vacation"}
    <tr>
        <td>{$vacation.user}@{$vacation.domain}</td>
        <td>{$vacation.startday}-{$vacation.startmonth}-{$vacation.startyear} {$vacation.starttime}</td>
        <td>{$vacation.endday}-{$vacation.endmonth}-{$vacation.endyear} {$vacation.endtime}</td>
        <td class="cell-actions">
            <a class="btn btn-icon" data-act="view" data-query="user={$vacation.user|rawurlencode}&domain={$vacation.domain|rawurlencode}" title="{$lang.edit}"><i class="fa fa-pencil"></i></a>
            <a class="btn btn-icon" data-toggle="modal" data-target="#delete-confirmation" data-modal-insert="[name=user]:{$vacation.user|rawurlencode}|[name=domain]:{$vacation.domain|rawurlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
    {/foreach}
{/if}
</tbody>