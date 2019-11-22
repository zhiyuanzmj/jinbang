<tbody>	
{foreach from=$userlist item="user"}
    <tr>
        <td data-label="Users" class="cell-sm-12">{$user.name}</td>
        <td data-label="Actions" class="cell-sm-12 cell-actions">
            <a class="btn btn-icon" data-toggle="modal" data-target="#delete-user-modal" data-modal-insert="[name=dbuser]:{$user.name|urlencode}|[name=dbname]:{$user.dbname|urlencode}" title="{$lang.current_users_bookmark_delete}"><i class="fa fa-trash"></i></a>
        </td>
    </tr>
{foreachelse}
    <tr><td colspan="2" class="text-center">{$lang.current_users_search_empty}</td></tr> 
{/foreach} 
</tbody>