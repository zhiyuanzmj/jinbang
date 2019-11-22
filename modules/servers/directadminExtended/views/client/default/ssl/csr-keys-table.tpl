<tbody>
    {if empty($listKeys)}
        <tr>
            <td colspan="2" class="text-center">{$lang.no_keys_in_table}</td>
        </tr>
    {else}
        {foreach from=$listKeys key='domainname'  item=csr}
            <tr>
                <td data-label="{$lang.domain}" class="cell-sm-12">
                    {$domainname}
                </td>
                <td data-label="{$lang.action}" class="cell-sm-12 cell-actions">
                    <a class="btn btn-icon" data-toggle="modal" data-target="#show-csr-modal" onclick="openCertModal('#show-csr-modal', $(this), 'cert');"  title="{$lang.show}"><i class="fa fa-eye"></i></a>
                    <textarea style="display: none;"  class="form-control" rows="6">{$csr}</textarea>
{*                    <a class="btn btn-icon" data-toggle="modal" data-target="#delete-csr-modal" data-modal-insert="[name=host]:{$domainname|urlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>*}
                </td>
            </tr>
        {/foreach}
    {/if}
</tbody> 
