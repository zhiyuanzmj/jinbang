<tbody>
    {foreach from=$backups item="backup"}
        <td class="cell-sm-12"><a href="{$_burl}&page=backups&act=down&who=ftp&filename={$backup.file|rawurlencode}&ftp_endpoint={$endpoint|rawurlencode}">{$backup.disp}</a></td>
        <td class="cell-sm-12 cell-actions">
            <a class="btn btn-icon" data-toggle="modal" data-target="#restore-ftp-confirmation" data-modal-insert="[name=fileName]:{$backup.file|rawurlencode}|[name=ftp_endpoint]:{$endpoint|rawurlencode}" title="{$lang.restore}"><i class="fa fa-reply"></i></a>
            {if $backup.user && $da_settings.recreate}<a class="btn btn-icon" data-toggle="modal" data-target="#recreate-ftp-confirmation" data-modal-insert="[name=fileName]:{$backup.file|rawurlencode}|[name=ftp_endpoint]:{$endpoint|rawurlencode}" title="{$lang.recreate}"><i class="fa fa-reply"></i></a>{/if}  
        </td>
    {foreachelse}
        <td colspan="2">{$lang.noBackupsFound}</td>
    {/foreach}
</tbody>
