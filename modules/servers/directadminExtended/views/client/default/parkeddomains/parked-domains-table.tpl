<tbody>
{if $parkedDomainList == ''}
    <tr>
        <td colspan="5" class="text-center">{$lang.modify_parkeddomain_tbl_results_error}</td>
    </tr> 
{else}      
    {if $parkedDomainList|@count > 0}
        {section name=d loop=$parkedDomainList}  
            <tr>
                <td class="cell-sm-12">{$parkedDomainList[d].sourceDomain}</td>
                <td class="cell-sm-12">&#x2192;</td>
                <td class="cell-sm-12">{$parkedDomainList[d].targetDomain}</td>
                <td class="cell-sm-12">{$parkedDomainList[d].type}</td>
                <td class="cell-sm-12 cell-actions">
                    <a class="btn btn-icon" data-toggle="modal" data-target="#delete-parked-domain-modal" 
                       data-modal-insert=".target:{$parkedDomainList[d].targetDomain|rawurlencode}|.source:{$parkedDomainList[d].sourceDomain|rawurlencode}" title="{$lang.modify_parkeddomain_tbl_remove_link}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>	
        {/section}
    {else}
        <tr><td colspan="5" style="text-align: center">{$lang.modify_parkeddomain_tbl_results_empty}</td></tr> 
    {/if}
{/if}   
</tbody>