<tbody>
{if $forwardersList == ''}
    <tr><td colspan="3">{$lang.search_results_empty}</td></tr> 
{else}      
    {if $forwardersList|@count > 0}
        {section name=e loop=$forwardersList}  
            {if $forwardersList[e]}
                <tr>
                    <td class="cell-sm-12">{$forwardersList[e].from}</td>
                    <td class="cell-sm-12">{$forwardersList[e].to}</td>
                    <td class="cell-sm-12 cell-actions">
                        <a class="btn btn-icon" data-toggle="modal" data-target="#edit-forwarder" 
                           data-modal-insert="[name=domain]:{$forwardersList[e].domain|urlencode}|[name=email]:{$forwardersList[e].user|urlencode}|[name=forwarder]:{$forwardersList[e].to|rawurlencode}" data-rtable="email-domain-forwarders-table" title="{$lang.edit}"><i class="fa fa-pencil"></i></a>
                        
                           <a class="btn btn-icon" data-toggle="modal" data-target="#delete-forwarder-modal" 
                           data-modal-insert="[name=domain]:{$forwardersList[e].domain|urlencode}|[name=user_name]:{$forwardersList[e].user|urlencode}" data-rtable="email-domain-forwarders-table" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
                       
                    </td>
                </tr>
            {/if}	   	
        {/section}
    {else}
        <tr><td colspan="3">{$lang.no_forwarders}</td></tr> 
    {/if}
{/if}
</tbody>