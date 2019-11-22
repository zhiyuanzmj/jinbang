 <tbody>
    {foreach from=$backups key="parent" item="old"}
        {foreach from=$old key="k" item="item"}
            {foreach from=$item key="k2" item="item2"}
                    <tr class="{$item2.name}">
                        <td data-label="{$lang.install_app_field_name}" class="cell-sm-12">{$item2.name} {$item2.ver}</td>
                        <td data-label="{$lang.install_app_field_create_date}" class="cell-sm-12">{$item2.btime|date_format}</td>
                        <td data-label="{$lang.install_app_field_action}" class="cell-sm-12 cell-actions">
                            <a class="btn btn-icon" data-toggle="modal" data-target="#restore-backup-modal" data-modal-insert="[name=backup_id]:{$item2.name|urlencode}" title="{$lang.install_app_restore}"><i class="fa fa-share-square-o"></i></a>
                            <a class="btn btn-icon" data-toggle="modal" data-target="#delete-backup-modal" data-modal-insert="[name=backup_id]:{$item2.name|urlencode}" title="{$lang.install_app_delete}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
            {/foreach}
        {/foreach}
        {foreachelse}
            <tr><td colspan="3" class="text-center">{$lang.install_app_results_nothing}</td></tr>
    {/foreach}
</tbody>