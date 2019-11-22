<div class="module-header">
    <i class="icon-header icon-installapp"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section" style="min-width: 390px;">
        <ul class="nav nav-tabs" role="tablist" id="tabs">
            <li class="active"><a href="#installed-tab" role="tab" data-toggle="tab">{$lang.installed_apps}</a></li>
            {if $apps_backups}<li><a href="#backups-tab" role="tab" data-toggle="tab">{$lang.backups}</a></li>{/if}
            <li><a href="#install-new-tab" role="tab" data-toggle="tab">{$lang.install_app_new}</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="installed-tab">
                <div id="installed-app-div">
                    <div class="table-header">
                        <div class="header-title">
                            <h4>{$lang.your_installed_apps}</h4>
                        </div>
                        <div class="header-actions">
                            <div class="header-search">
                                <div class="input-icon">
                                    <i class="fa fa-search"></i>
                                    <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="installed-app-table">
                                </div>
                                <a class="btn btn-primary hide-sm" id="install-new-button">{$lang.install_app_new}</a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-app" id="installed-app-table">
                        <thead>
                            <tr>
                                <th>{$lang.install_app_field_name}</th>
                                <th>{$lang.path}</th>
                                <th>{$lang.install_app_field_size}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>        
                <div id="installed-app-edit">

                </div>
            </div>
            <div class="tab-pane" id="backups-tab">
                <div class="table-header">
                    <div class="header-title">
                        <h4>{$lang.your_apps_backups}</h4>
                    </div>
                    <div class="header-actions">
                        <div class="header-search">
                            <div class="input-icon">
                                <i class="fa fa-search"></i>
                                <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="backups-table">
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-app" id="backups-table">
                    <thead>
                        <tr>
                            <th>{$lang.install_app_field_name}</th>
                            <th>{$lang.install_app_field_create_date}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="install-new-tab">
                <button id="collapse-toggle" class="btn btn-primary btn-sm hide-sm">{$lang.toggle_all}</button>
                <div class="panel-group buttons-content" id="install-app">
                    {foreach from=$list_app_all item="group" key="ctn" name="app_loop"}
                        <div class="panel panel-default">
                            <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#install-app" href="#app-group-{$smarty.foreach.app_loop.index}">
                                <h6 class="panel-title text-uppercase">{if $lang.installatron_catname.$ctn}{$lang.installatron_catname.$ctn}{else}{$ctn}{/if}<i class="fa fa-plus pull-right"></i><i class="fa fa-minus pull-right"></i></h6>
                            </a>
                            <div id="app-group-{$smarty.foreach.app_loop.index}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">    
                                        {foreach from=$group item="app"}
                                            <div class="col-lg-4 col-xs-6">
                                                <a class="big-button"  data-toggle="tooltip" title="{$app->description}" data-act="install_new" data-query="sid={$app->appid}" data-no-span>
                                                    <div class="button-wrapper">
                                                        <img class="icon-btn" src="https://secure.installatron.com/images/remote/{$app->images[0]}"/><span>{$app->name} {$app->version}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        {foreachelse}
                                            <div class="col-lg-12">{$lang.sorry_no_applicatons_in_this_group}</div>
                                        {/foreach}
                                    </div>
                                </div>
                            </div>
                        </div>
                    {foreachelse}
                        {$lang.sorry_no_applicatons_to_install}
                    {/foreach}    
                </div>
            </div>
        </div>

        <div id="tasks">
            <div id="task-template" style="display: none;">
                <span class="task-label">:label:</span>
                <span class="task-status">:status:</span>
                <span class="task-progress pull-right">:progress:</span>
                <div class="progress progress-striped active">
                    <div class="bar" style="width: 0%;"></div>
                </div>
            </div>
        </div>         
    </div>
</div>                   

<div id="delete-app-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{$lang.delete_confirmation}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <input type="hidden" name="in_sid" />
                    <p>{$lang.delete_app_body}</p>
                    {*<div class="form-group">
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <label><input type='checkbox' name='remove_dir' value='1' />{$lang.install_app_remove_dir_lbl}</label> 
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <label><input type='checkbox' name='remove_db' value='1' />{$lang.install_app_remove_db_lbl}</label>
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <label><input type='checkbox' name='remove_datadir' value='1' />{$lang.install_app_remove_datadir_lbl}</label>
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <label><input type='checkbox' name='remove_wwwdir' value='1' />{$lang.install_app_remove_wwwdir_lbl}</label>
                            </div>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>*}
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                <button type="button" class="btn btn-danger" data-act="delete">{$lang.confirm}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->        

{confirm_modal btn='data-act="create_backup"' id="backup-app-modal" title=$lang.generate_backup_title
        body="`$lang.generate_backup_body`<input type='hidden' name='in_sid'/>" type='primary'} 

{confirm_modal btn='data-act="delete_backup" data-rtable="backups-table"' id="delete-backup-modal" title=$lang.delete_backup_title
        body="`$lang.delete_backup_body`<input type='hidden' name='backup_id'/>"}

{confirm_modal btn='data-act="restore_backup" data-rtable="installed-app-table"' id="restore-backup-modal" title=$lang.restore_backup_title
        body="`$lang.restore_backup_body`<input type='hidden' name='backup_id'/>" type='primary'}        

{literal}
    <script>
        setInterval(refreshTasks, 5000);

        function refreshTasks() {
            jQuery('#tasks .task.incomplete').each(function () {
                $this = jQuery(this);
                var id = $this.data('id');
                var pathArray = queryToArray(location.search.substring(1));
                pathArray['taskid'] = id;
                pathArray['ajax'] = 1;
                pathArray['act'] = 'gettaskstatus';
                jQuery.ajax({
                    type: "POST",
                    url: location.pathname + '?ajax=1',
                    data: arrayToQuery(pathArray),
                    //async: false
                })
                        .done(function (ret) {
                            if ($this.hasClass('completed'))
                                return;
                            var obj = jQuery.parseJSON(ret);

                            if (obj.result == 1) {
                                $this.find('.task-progress').html(obj.action.output.progress + '%');
                                $this.find('.task-status').html(obj.action.output.status);
                                $this.find('.bar').width(obj.action.output.progress + '%');

                                if (obj.action.output.progress == 100) {
                                    refreshTable($this.data('rtable'));
                                    $this.removeClass('incomplete');
                                    $this.addClass('completed');
                                    $this.data('time', '0');
                                    $this.find('.bar').parent().removeClass('active');
                                    if (obj.action.output.status == 'Error') {
                                        $this.addClass('error');
                                        $this.find('.bar').parent().addClass('progress-danger');
                                    } else {
                                        $this.find('.bar').parent().addClass('progress-success');
                                    }

                                }

                                setAlerts(obj.action.error, obj.action.info);
                            }
                        });
            });

            jQuery('#tasks .task.completed:not(.error)').each(function () {
                $this = jQuery(this);
                if ($this.data('time') > 15)
                    $this.fadeOut(400, function () {
                        $this.remove();
                    });
                $this.data('time', $this.data('time') + 3);

            });
        }

        function addTask(obj) {
            var html = jQuery("#task-template").html();
            html = html.replace(":label:", obj.label).replace(":status:", obj.status).replace(":progress:", obj.progress);
            jQuery('#tasks').append('<div data-id="' + obj.id + '" data-rtable="' + obj.rtable + '" class="task incomplete">' + html + '</div>');
        }

        function installNew(data) {
            jQuery('#install-app').hide();
            jQuery('#collapse-toggle').hide();
            jQuery('#install-new-tab').append('<div class="new-app">' + data.app_form + '</div>');
            jQuery('[title]').bstooltip();
        }

        function editApp(data) {
            jQuery('#installed-app-div').hide();
            jQuery('#installed-app-edit').html(data.page);
        }

        refreshTable('installed-app-table');
        refreshTable('backups-table');

        (function (jQuery) {
            jQuery(document).ready( function() {
                jQuery(document).delegate('.install-cancel-button', 'click', function () {
                    jQuery('#install-app').show();
                    jQuery('#collapse-toggle').show();
                    jQuery('#install-new-tab .new-app').hide();
                });

                jQuery(document).delegate('.edit-cancel-button', 'click', function () {
                    jQuery('#installed-app-div').show();
                    jQuery('#installed-app-edit').html('');
                });

                jQuery('[data-act="install_new"]').click(function (e) {
                    var sid = jQuery(this).data('query').split('=')[1];
                    if (jQuery('#new-app-' + sid).length) {
                        jQuery('#install-app').hide();
                        jQuery('#collapse-toggle').hide();
                        jQuery('#new-app-' + sid).parents('.new-app').first().show();
                        return false;
                    }
                });

                jQuery('#install-new-button').click(function () {
                    jQuery('#tabs a[href="#install-new-tab"]').tab('show');
                });

                jQuery('#install-app .collapse:first').collapse('show');

                jQuery('#collapse-toggle').on('click', function () {
                    if (jQuery(this).hasClass('open')) {
                        jQuery('#install-app .collapse').collapse('hide');
                        jQuery(this).removeClass('open');
                    } else {
                        jQuery('#install-app .collapse').collapse('show');
                        jQuery(this).addClass('open');
                    }
                });
            });
        })(jQuery);
    </script>
{/literal}                       