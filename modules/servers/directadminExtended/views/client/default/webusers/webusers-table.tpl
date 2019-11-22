<tbody>
    {foreach from=$list item="user"}
        <tr>
            <td data-label="{$lang.name}" class="cell-sm-12">{$user.login}</td>
            <td data-label="{$lang.php}" class="cell-sm-12">{if $user.php eq 'true'}<i class="fa fa-check" style="color: green;"></i>{else}<i class="fa fa-remove" style="color: red;"></i>{/if}</td>
            <td data-label="{$lang.cgi}" class="cell-sm-12">{if $user.cgi eq 'true'}<i class="fa fa-check" style="color: green;"></i>{else}<i class="fa fa-remove" style="color: red;"></i>{/if}</td>
            <td data-label="{$lang.fastcgi}" class="cell-sm-12">{if $user.fastcgi eq 'true'}<i class="fa fa-check" style="color: green;"></i>{else}<i class="fa fa-remove" style="color: red;"></i>{/if}</td>
            <td data-label="{$lang.actions}" class="cell-actions cell-sm-12">
                <a class="btn btn-icon" data-toggle="modal" data-target="#edit-modal" data-modal-insert="[name=userid]:{$user.id}" title="{$lang.edit_webuser}"><i class="fa fa-lock"></i></a>
                <a class="btn btn-icon" data-toggle="modal" data-target="#delete-modal" data-modal-insert="[name=userid]:{$user.id}|" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    {foreachelse}
        <tr><td colspan="3" class="text-center">{$lang.search_results_empty}</td></tr>
    {/foreach}
</tbody>