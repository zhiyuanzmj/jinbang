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
                    {foreach from=$list_app_all item="group"}
                        {assign var='ctn' value=$group.catname}
                        <div class="panel panel-default">
                            <a class="panel-heading collapsed" data-toggle="collapse" data-parent="#install-app" href="#{$ctn}">
                                <h6 class="panel-title text-uppercase">{if $lang.softaculous_catname.$ctn}{$lang.softaculous_catname.$ctn}{else}{$foo.catname}{/if}<i class="fa fa-plus pull-right"></i><i class="fa fa-minus pull-right"></i></h6>
                            </a>
                            <div id="{$ctn}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        {foreach from=$group.items item="app"}
                                            <div class="col-lg-4 col-xs-6">
                                                <a class="big-button"  data-toggle="tooltip" title="" data-original-title="{$app.description}" data-act="install_new" data-query="sid={$app.id}" data-no-span>
                                                    <div class="button-wrapper">
                                                        <img class="icon-btn" src="https://www.softaculous.net/images/softimages/{$app.id}__logo.gif"/><span>{$app.name} {$app.version}</span>
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
                <button type="button" class="btn btn-danger" data-act="delete" data-rtable="installed-app-table"><span>{$lang.confirm}</span></button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->        

{confirm_modal btn='data-act="create_backup" data-rtable="backups-table"' id="backup-app-modal" title=$lang.generate_backup_title
        body="`$lang.generate_backup_body`<input type='hidden' name='in_sid'/>" type='primary'} 

{confirm_modal btn='data-act="delete_backup" data-rtable="backups-table"' id="delete-backup-modal" title=$lang.delete_backup_title
        body="`$lang.delete_backup_body`<input type='hidden' name='backup_id'/>"}

{confirm_modal btn='data-act="restore_backup" data-rtable="installed-app-table"' id="restore-backup-modal" title=$lang.restore_backup_title 
        body="`$lang.restore_backup_body`<input type='hidden' name='backup_id'/>" type='primary'}        

{literal}
    <script>
        function appInstallationSuccess(data) {
            jQuery('#install-app').show();
            jQuery('#collapse-toggle').show();
            jQuery('#install-new-tab .new-app').hide();
            jQuery('#tabs a[href="#installed-tab"]').tab('show');
        }

        function installNew(data) {
            jQuery('#install-app').hide();
            jQuery('#collapse-toggle').hide();
            jQuery('#install-new-tab').append('<div class="new-app">' + data.app_form + '</div>');
            jQuery('[title]').bstooltip();
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