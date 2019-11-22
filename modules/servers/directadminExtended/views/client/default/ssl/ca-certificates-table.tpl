<tbody>
    {if empty($listKeys)}
        <tr>
            <td colspan="2" class="text-center">{$lang.no_keys_in_table}</td>
        </tr>
    {else}
        {foreach from=$listKeys key='domainname' item=key}
            <tr>
                <td data-label="{$lang.domain}" class="cell-sm-12">
                    {$domainname}
                </td>
                <td data-label="{$lang.action}" class="cell-sm-12 cell-actions">
                    <button class="btn btn-icon" data-toggle="modal" data-target="#show-csr-modal" onclick="openCertModal('#show-csr-modal', $(this), 'key');" data-query="domain={$domainname|urlencode}" title="{$lang.view}"><i class="fa fa-eye"></i></button>
                    <textarea style="display: none;"  class="form-control" rows="6">{$key}</textarea>
                   <a class="btn btn-icon" data-toggle="modal" data-target="#delete-key-modal" data-modal-insert="[name=host]:{$domainname|urlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        {/foreach}
    {/if}
</tbody> 
