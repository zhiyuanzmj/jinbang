<div class="module-header">
    <i class="icon-header icon-backups"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.createBackup}</h4>
        <div class="well" id="jakismaloznaczacyidik">
            <div class="row">
            {foreach from=$tableUsrBackup key="name" item="langName"} 
                <div class="col-md-4 col-sm-2">
                    <div class="checkbox">
                        <label><input name="options[{$langName[0]}]" value="{$langName[1]}" type="checkbox" checked="" /> {$langName[2]} </label>
                    </div>
                </div>              
            {/foreach} 
            </div>
            <div class="row" style="margin-top: 10px;">
                <dic class="col-sm-12">
                    <a class="btn btn-success" data-act="createBackupUsrLevel" data-formid="jakismaloznaczacyidik">{$lang.createBackupBtn}</a>
                </dic>
            </div>
        </div>
    </div>
                
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.userBackups}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="user-backups-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="user-backups-table">
            <thead>
                <tr>
                    <th>{$lang.tblHeadFile}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {if !$backupList || $backupList|count < 0}
                    <tr>
                        <td colspan="2">{$lang.get_backups_empty}</td> 
                    </tr>
                {/if}
                {foreach from=$backupList key="name" item="backup"} 
                <tr>
                    <td class="cell-sm-12"><a href="clientarea.php?action=productdetails&id={$productid}&modop=custom&a=management&page=backups&act=down&who=user&filename={$backup}">{$backup}</a></td>
                    <td class="cell-sm-12 cell-actions"> 
                        <a class="btn btn-icon" data-act="getSettings" data-query="file={$backup|rawurlencode}" title="{$lang.restore}"><i class="fa fa-reply"></i></a>
                        <a class="btn btn-icon" data-toggle="modal" data-target="#delete-confirmation" data-modal-insert="[name=file]:{$backup|rawurlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                {/foreach} 
            </tbody>
        </table>
    </div>
     
    {confirm_modal btn='data-act="deleteUsrLevel" data-refresh=""' id="delete-confirmation" title=$lang.delete_confirmation_label
        body="`$lang.delete_confirmation_text`<input type='hidden' name='file'/>"}
    
    {if $ftp_endpoints|count > 0}
        <div class="section">
            <h4>{$lang.restoreFromFtp}</h4>
            <div class="well">
                <form class="form-horizontal" id="list-files-form">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <label class="col-sm-5 control-label">{$lang.restoreFtpEndpoints}</label>
                        <div class="col-sm-4">
                            <select name="ftp_endpoint" class="form-control">
                            {foreach from=$ftp_endpoints item="e"}<option value="{$e.name}">{$e.name}</option>{/foreach}
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn btn-primary" data-act="listFilesFTP" data-formid="list-files-form">{$lang.listFiles}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
                        
        <div class="section">
            <div class="table-header">
                <div class="header-title">
                    <h4>{$lang.ftpBackups}</h4>
                </div>
                <div class="header-actions">
                    <div class="header-search">
                        <div class="input-icon">
                            <i class="fa fa-search"></i>
                            <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="ftp-backups-table">
                        </div>
                    </div>

                </div>
            </div>
            <table class="table" id="ftp-backups-table">
                <thead>
                    <tr>
                        <th>{$lang.tblHeadFile}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <td colspan="2">{$lang.useListFiles}</td>
                </tbody>
            </table>
        </div>
          
        {confirm_modal btn='data-act="restoreFTP"' id="restore-ftp-confirmation" title=$lang.restore_ftp_confirmation_label
            body="`$lang.restore_ftp_confirmation_text`<input type='hidden' name='fileName'/><input type='hidden' name='ftp_endpoint'/>"}
            
        {confirm_modal btn='data-act="recreate" data-query="from=ftp"' id="recreate-ftp-confirmation" title=$lang.recreate_ftp_confirmation_label
            body="`$lang.recreate_ftp_confirmation_text`<input type='hidden' name='fileName'/><input type='hidden' name='ftp_endpoint'/>"}
    {/if}
    
    {if $backup_directories|count > 0}
        <div class="section">
            <h4>{$lang.adminBackups}</h4>
            <div class="well">
                <form class="form-horizontal" id="list-admin-files-form">
                    <div class="form-group" style="margin-bottom: 0px;">
                        <label class="col-sm-5 control-label">{$lang.adminBackupLocation}</label>
                        <div class="col-sm-4">
                            <select name="backupPath" class="form-control">
                            {foreach from=$backup_directories item="p"}
                                <option value="{$p.path}">{$p.name}</option>
                            {/foreach}
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <a class="btn btn-primary" data-act="listAdminBackups" data-formid="list-admin-files-form">{$lang.listFiles}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
                        
        <div class="section">
            <div class="table-header">
                <div class="header-title">
                    <h4></h4>
                </div>
                <div class="header-actions">
                    <div class="header-search">
                        <div class="input-icon">
                            <i class="fa fa-search"></i>
                            <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="ftp-backups-table">
                        </div>
                    </div>

                </div>
            </div>
            <table class="table" id="admin-backups-table">
                <thead>
                    <tr>
                        <th>{$lang.tblHeadFile}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <td colspan="2">{$lang.useListFiles}</td>
                </tbody>
            </table>
        </div>
          
        {confirm_modal btn='data-act="restoreAdminLevel"' id="restore-admin-confirmation" title=$lang.restore_admin_confirmation_label
            body="`$lang.restore_admin_confirmation_text`<input type='hidden' name='file'/><input type='hidden' name='select'/><input type='hidden' name='adminBckupLocation'/>"}
            
        {confirm_modal btn='data-act="recreate" data-query="from=admin"' id="recreate-admin-confirmation" title=$lang.recreate_admin_confirmation_label
            body="`$lang.recreate_admin_confirmation_text`<input type='hidden' name='file'/><input type='hidden' name='select'/><input type='hidden' name='adminBckupLocation'/>"}
    {/if}
        
</div>
    
{literal}
    <script type="text/javascript">
        function ftpBackupListCallback(data, $obj) {
            jQuery('#ftp-backups-table tbody').replaceWith(data.html);
        }
        
        function listAdminBackupsCallback(data, $obj) {
            jQuery('#admin-backups-table tbody').replaceWith(data.html);
        }
    </script>
{/literal}

