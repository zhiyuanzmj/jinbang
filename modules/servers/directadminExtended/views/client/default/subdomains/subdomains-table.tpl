<tbody>	
{if $subdomainlist == ''}
    <tr><td colspan="2">{$lang.search_results_error}</td></tr> 
{else}      
    {if $subdomainlist|@count > 0}
       {foreach from=$subdomainlist key="k" item="i"}
            {foreach from=$i item="sub"}
            <tr>
                <td class="cell-sm-12">{$sub}.{$k}</td>
                <td class="cell-sm-12 cell-actions">
                    <a class="btn btn-icon" data-toggle="modal" data-target="#delete-subdomain-modal" data-modal-insert="[name=domain]:{$k|urlencode}|[name=subdomain]:{$sub|urlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>	
            {/foreach}
       {/foreach}
    {else}
        <tr><td colspan="2">{$lang.search_results_empty}</td></tr> 
    {/if}
{/if}        
</tbody>