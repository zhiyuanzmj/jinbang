 <tbody>
    {foreach from=$backups.data key="k" item="item"}
        <tr>
            <td data-label="{$lang.install_app_field_name}" class="cell-sm-12">{$item.title} {$item.version}</td>
            <td data-label="{$lang.install_app_field_create_date}" class="cell-sm-12">{$item.time-backup|date_format}</td>
            <td data-label="{$lang.install_app_field_action}" class="cell-sm-12 cell-actions">
                <a class="btn btn-icon" data-toggle="modal" data-target="#restore-backup-modal" data-modal-insert="[name=backup_id]:{$item.id|urlencode}" title="{$lang.install_app_restore}"><i class="fa fa-share-square-o"></i></a>
                <a class="btn btn-icon" data-toggle="modal" data-target="#delete-backup-modal" data-modal-insert="[name=backup_id]:{$item.id|urlencode}" title="{$lang.install_app_delete}"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    {foreachelse}
        <tr><td colspan="3" class="text-center">{$lang.install_app_results_nothing}</td></tr>
    {/foreach}    
</tbody>
      