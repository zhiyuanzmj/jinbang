<tbody>
    {foreach from=$list_app_exist->data key="k" item="arr"}
        {assign var="app_name" value=$arr->installer}
        <tr>
            <td data-label="{$lang.install_app_field_size}" class="cell-sm-12"><img src="https://secure.installatron.com/images/remote/{$images.$app_name}" alt="" /> {$arr->title} {$arr->version}</td>
            <td data-label="{$lang.path}" class="cell-sm-12">{$arr->path}</td>
            <td data-label="{$lang.install_app_field_size}" class="cell-sm-12">{($arr->{'cache-files'}/1024/1024)|round:2} MB</td>
            <td data-label="{$lang.install_app_field_action}" class="cell-sm-12 cell-actions">
                <a class="btn btn-icon" data-act="edit_page" data-query="sid={$arr->id}" title="{$lang.edit}"><i class="fa fa-pencil"></i></a>
                {if $apps_backups}<a class="btn btn-icon" data-toggle="modal" data-target="#backup-app-modal" data-modal-insert="[name=in_sid]:{$arr->id|urlencode}" title="{$lang.install_app_create_backup_link}"><i class="fa fa-history"></i></a>{/if}
                <a class="btn btn-icon" data-toggle="modal" data-target="#delete-app-modal" data-modal-insert="[name=in_sid]:{$arr->id|urlencode}" title="{$lang.install_app_delete_link}"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    {foreachelse}
    <tr><td colspan="4" class="text-center">{$lang.install_app_results_nothing}</td></tr> 
    {/foreach}
</tbody>