<tbody>
{if $list == ''}
    <tr><td colspan="3" style="text-align: center">{$lang.modify_aforward_tbl_results_empty}</td></tr> 
{else}      
    {if $list|@count > 0}
        {foreach from=$list item="entry" key="k"}  
            {foreach from=$entry item="sub"  key="key"}
            <tr>
                <td class="cell-sm-12">{$k}{$sub.path}</td>
                <td class="cell-sm-12"><a href="{$sub.forward}" target="_blank">{$sub.forward}</a></td>
                <td class="cell-sm-12 cell-actions">
                    <a class="btn btn-icon" data-toggle="modal" data-target="#delete-domain-forward-modal" title="{$lang.modify_aforward_tbl_delete_link}"
                       data-modal-insert="[name=domain]:{$k|urlencode}|[name=src]:{$sub.path|rawurlencode}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            {/foreach}
        {/foreach}
    {else}
        <tr><td colspan="3" style="text-align: center">{$lang.modify_aforward_tbl_results_empty}</td></tr> 
    {/if}
{/if}        
</tbody>