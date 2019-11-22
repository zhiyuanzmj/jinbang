<tbody>
{foreach from=$dblist item="entry"}
    <tr>
        <td data-label="{$lang.current_db_head_db}" class="cell-sm-12">{$entry.name}</td>
        <td data-label="{$lang.current_db_head_users}" class="cell-sm-12 no-wrap">
            <ul>
                {foreach from=$entry.users item="user"}
                    <li>{$user}&nbsp;<button class="btn btn-icon" data-act="setuserprivilages" data-query="dbname={$entry.name|urlencode}&dbuser={$user|urlencode}" title="{$lang.manage_user_privileges}"><i class="fa fa-pencil" style="color: #8A8E99; font-size: 16px; line-height: 22px;"></i></button></li>
                {/foreach}
            </ul>
        </td>
        <td data-label="{$lang.current_db_head_actions}" class="cell-sm-12 cell-actions">
            <a class="btn btn-icon" data-toggle="modal" data-target="#delete-database-modal" data-modal-insert="[name=dbname]:{$entry.name|urlencode}" title="{$lang.current_db_bookmark_delete}"><i class="fa fa-trash"></i></a>
        </td>
    </tr>    
{foreachelse}
    <tr><td colspan="3" class="text-center">{$lang.current_db_search_empty}</td></tr> 
{/foreach}
</tbody>