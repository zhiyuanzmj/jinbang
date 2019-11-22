<tbody>
    {foreach from=$joblist item="job"}
        <tr id="line{$job.cronId}">
            {*<td data-label="ID" class="cell-sm-6">{$job.cronId}</td>*}
            <td data-label="{$lang.current_tblheader_minute}" class="cell-sm-6">{$job.min}</td>
            <td data-label="{$lang.current_tblheader_hour}" class="cell-sm-6">{$job.hour}</td>
            <td data-label="{$lang.current_tblheader_day}" class="cell-sm-6">{$job.dayOfMonth}</td>
            <td data-label="{$lang.current_tblheader_month}" class="cell-sm-6">{$job.month}</td>
            <td data-label="{$lang.current_tblheader_weekday}" class="cell-sm-6">{$job.dayOfWeek}</td>
            <td data-label="{$lang.current_tblheader_command}" class="cell-sm-12">{$job.command}</td>
            <td data-label="{$lang.current_tblheader_actions}" class="cell-sm-12 cell-actions">
                <a class="btn btn-icon" data-toggle="modal" data-target="#delete-job-modal" title="{$lang.current_bookmark_delete}" data-modal-insert="[name=line]:{$job.cronId}"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    {foreachelse}
        <tr><td colspan="8" class="text-center">{$lang.current_tblheader_empty}</td></tr> 
    {/foreach}
</tbody>