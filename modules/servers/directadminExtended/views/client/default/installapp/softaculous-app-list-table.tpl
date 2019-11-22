<tbody>
    {foreach from=$list_app_exist item="arr" key='sid'}
        {foreach from=$arr item="entry" key="k"}
            <tr>
                <td data-label="{$lang.install_app_field_name}" class="cell-sm-12"><img src="https://www.softaculous.net/images/softimages/{$sid}__logo.gif"/> {$list_app_all[$entry.sid].name} {$entry.ver}</td>
                <td data-label="{$lang.path}" class="cell-sm-12">
                    {$entry.softpath}
                </td>
                <td data-label="{$lang.install_app_field_size}" class="cell-sm-12">{($list_app_all[$entry['sid']].space/1024/1024)|round:2} MB</td>
                <td data-label="{$lang.install_app_field_action}" class="cell-sm-12 cell-actions">
                    {if $apps_backups}<a class="btn btn-icon" data-toggle="modal" data-target="#backup-app-modal" data-modal-insert="[name=in_sid]:{$entry.insid|urlencode}" title="{$lang.install_app_create_backup_link}"><i class="fa fa-history"></i></a>{/if}
                    <a class="btn btn-icon" data-toggle="modal" data-target="#delete-app-modal" data-modal-insert="[name=in_sid]:{$entry.insid|urlencode}" title="{$lang.install_app_delete_link}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        {/foreach}
    {foreachelse}
        <tr><td colspan="4" class="text-center">{$lang.install_app_results_nothing}</td></tr> 
        {/foreach}
</tbody>