<tbody>
{foreach from=$domainlist item="domain"}
<tr>
    <td data-label="{$lang.edit_tblhead_account}" class="cell-sm-12">{$_params.username}@{$domain}</td>
    <td data-label="{$lang.edit_tblhead_actions}" class="cell-actions cell-sm-12"></td>
</tr>
{/foreach}
{foreach from=$list item="acc"}
    <tr>
        <td data-label="{$lang.edit_tblhead_account}" class="cell-sm-12">{$acc.full}</td>
        {*<td data-label="{$lang.edit_tblhead_quota}" class="cell-sm-12">{$acc.diskused}/{if $acc.diskquota eq 'unlimited'}∞{else}{$acc.diskquota}{/if}MB</td>*}
        <td data-label="{$lang.edit_tblhead_actions}" class="cell-actions cell-sm-12">
            <a class="btn btn-icon" data-toggle="modal" data-target="#change-pwd-modal" data-modal-insert=".acc:{$acc.user|urlencode}|.dom:{$acc.domain|urlencode}|[name=quota]:{$acc.quota}" data-quota-unlimited="{if $acc.quota eq 'unlimited' or empty($acc.quota)}1{else}0{/if}" title="{$lang.chg_account}"><i class="fa fa-edit"></i></a>
            <a class="btn btn-icon" data-toggle="modal" data-target="#delete-modal" data-modal-insert=".acc:{$acc.user|urlencode}|.dom:{$acc.domain|urlencode}" title="{$lang.del_account_bookmark}"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
{/foreach}
</tbody>
