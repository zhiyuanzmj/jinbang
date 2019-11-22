<tbody>
    {foreach from=$backups item="backup" key="fileindex"}
        <td class="cell-sm-12"><a href="{$_burl}&page=backups&act=down&who=admin&filename={$backup.file|rawurlencode}&filepath={$backupPath|rawurlencode}">{$backup.disp}</a></td>
        <td class="cell-sm-12 cell-actions">
            <a class="btn btn-icon" data-toggle="modal" data-target="#restore-admin-confirmation" 
               data-modal-insert="[name=file]:{$backup.file|rawurlencode}|[name=select]:{$fileindex|rawurlencode}|[name=adminBckupLocation]:{$backupPath|rawurlencode}" title="{$lang.restore}"><i class="fa fa-reply"></i></a>
            {if $backup.user && $da_settings.recreate}<a class="btn btn-icon" data-toggle="modal" data-target="#recreate-admin-confirmation" 
               data-modal-insert="[name=file]:{$backup.file|rawurlencode}|[name=select]:{$fileindex|rawurlencode}|[name=adminBckupLocation]:{$backupPath|rawurlencode}" title="{$lang.recreate}"><i class="fa fa-reply"></i></a>{/if}  
        </td>
    {foreachelse}
        <td colspan="2">{$lang.noBackupsFound}</td>
    {/foreach}
</tbody>
