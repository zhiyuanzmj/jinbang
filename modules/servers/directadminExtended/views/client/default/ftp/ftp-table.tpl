<tbody>
    {foreach from=$list item="acc"}
        <tr>
            <td data-label="{$lang.edit_tblhead_login}" class="cell-sm-12">{$acc.user|replace:'_':'.'}</td>
            <td data-label="{$lang.edit_tblhead_path}" class="cell-sm-12">{$acc.path}</td>
            <td data-label="{$lang.edit_tblhead_actions}" class="cell-sm-12 cell-actions">
                {if $acc.default_account == 0}
                    <a class="btn btn-icon" data-toggle="modal" data-target="#change-pwd-modal" data-modal-insert=".acc:{$acc.user|replace:'_':'.'|urlencode}|[name=type]:{$acc.type}" title="{$lang.chg_password_bookmark}"><i class="fa fa-lock"></i></a>
                    <a class="btn btn-icon" data-toggle="modal" data-target="#delete-modal" data-modal-insert=".acc:{$acc.user|replace:'_':'.'|urlencode}" title="{$lang.del_account_bookmark}"><i class="fa fa-trash"></i></a>
                {/if}
            </td>
        </tr>
    {foreachelse}
        <tr><td colspan="4" class="text-center">{$lang.search_results_empty}</td></tr>
    {/foreach}
</tbody>



