<tbody>
    {if empty($listCerts)}
        <tr>
            <td colspan="2" class="text-center">{$lang.no_keys_in_table}</td>
        </tr>
    {else}
        {foreach from=$listCerts key='domainname' item=cert}
            <tr>
                <td data-label="{$lang.domain}" class="cell-sm-12">
                    <span>{$domainname}</span>
                </td>
                <td data-label="{$lang.action}" class="cell-sm-12 cell-actions">
                    <button class="btn btn-icon" data-toggle="modal" data-target="#show-csr-modal" onclick="openCertModal('#show-csr-modal', $(this), 'cert');"  title="{$lang.view}"><i class="fa fa-eye"></i></button>
{*                    <a class="btn btn-icon" data-toggle="modal" data-target="#delete-crt-modal" data-modal-insert="[name=host]:{$domainname|urlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>*}
                    <textarea style="display: none;"  class="form-control" rows="6">{$cert}</textarea>
                </td>
            </tr>
        {/foreach}
    {/if}
</tbody> 
