<tbody>
    {foreach from=$list item="domain"}
        <tr>
            <td data-label="{$lang.name}" class="cell-sm-12">{$domain.domain}</td>
            <td data-label="{$lang.php_version}" class="cell-sm-12">{$domain.version}</td>
            <td data-label="{$lang.actions}" class="cell-actions cell-sm-12">
                {if !$domain.home}<a class="btn btn-icon" data-toggle="modal" data-target="#delete-modal" data-modal-insert="[name=domain]:{$domain.domain|rawurlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>{/if}
            </td>
        </tr>
    {foreachelse}
        <tr><td colspan="3" class="text-center">{$lang.search_results_empty}</td></tr>
    {/foreach}
</tbody>