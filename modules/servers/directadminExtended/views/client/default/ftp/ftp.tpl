<div class="module-header">
    <i class="icon-header icon-ftp"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.add_header}</h4>
        <div class="well">
            <form class="form-horizontal" id="ftp-form">
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.login_label}</label>
                    <div class="col-sm-9 input-group">
                        <input class="form-control first" type="text" name="login" data-error="{$lang.field_required}" required>
                        <span class="input-group-addon">@</span>
                        <select class="form-control last" name="domain" data-no-validate>
                        {foreach from=$domainlist item="domain"}
                            <option>{$domain}</option>
                        {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="help-block"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.password_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input id="password" class="form-control" type="password" name="password" data-minlength="5" required>
                                <div class="help-block">{$validator_lang.min_5_chars}</div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>    
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.password2_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input id="password2" class="form-control" type="password" name="password2" data-match="#password" data-error="{$validator_lang.field_required}" data-match-error="{$validator_lang.field_not_match}" placeholder="" required>
                            </div>
                        </div>        
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.strength}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-xs-6">
                                <div id="pwstrengthbox" class="">{$validator_lang.very_weak}</div>
                            </div>
                            <div class="col-xs-6">
                                <button id="generate_pwd" type="button" class="btn btn-sm btn-default" data-genpwd="password,password2,pwstrengthbox"><i class="fa fa-key"></i><span class="hide-sm">{$lang.generate_password}</span></button>
                            </div>
                        </div>     
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.directory_label}</label>
                    <div class="col-sm-9">
                        <div class="form-fluid">
                            <div class="fluid-100">
                                <div class="radio">
                                    <label title="{$lang.domain_info_label}">
                                        <input type="radio" name="directory" value="domain" /> {$lang.domain_label}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <div class="form-fluid">
                            <div class="fluid-100">
                                <div class="radio">
                                    <label title="{$lang.ftp_info_label}">
                                        <input type="radio" name="directory" value="ftp" /> {$lang.ftp_label}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <div class="form-fluid">
                            <div class="fluid-100">
                                <div class="radio">
                                    <label title="{$lang.user_info_label}">
                                        <input type="radio" name="directory" value="user" /> {$lang.user_label}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <div class="form-fluid">
                            <div class="fluid-100">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="directory" value="custom" /> {$lang.custom_label}
                                        <input type="text" name="path" class="form-control" style="display: inline-block!important; width: auto!important;"/>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="addftpaccount" data-formid="ftp-form" data-rtable="ftp-table">{$lang.add_submit_text}</a>
                </div>
            </form>
        </div>
    </div>

    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.search_header}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="ftp-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="ftp-table">
            <thead>
                <tr>
                    <th>{$lang.edit_tblhead_login}</th>
                    <th>{$lang.edit_tblhead_path}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="change-pwd-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                    <h4 class="modal-title">{$lang.chg_password_bookmark}</h4>
                </div>
                <div class="modal-body">
                    <input class="acc" type="hidden" name="user" value="{$account}" />
                    <form class="form-horizontal">
                        <input type="hidden" name="type" value="" />
                        
                        <div class="form-group">
                            <label class="control-label col-sm-3">{$lang.chg_account_label}</label>
                            <div class="col-sm-9">
                                <span class="acc" style="padding: 0px;"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">{$lang.password_label}</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="pwd-modal" name="pwd" type="password" data-minlength="5" required/>
                                <div class="help-block">{$validator_lang.min_5_chars}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">{$lang.password2_label}</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="pwdc" type="password" data-match="#pwd-modal" data-match-error="{$validator_lang.field_not_match}" placeholder=""/>
                            </div>
                            <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.chg_account_cancel_text}</button>
                    <button type="button" class="btn btn-primary" data-act="chgftpaccountpasswd"><span>{$lang.save_changes}</span></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="change-quota-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                    <h4 class="modal-title">{$lang.chg_quota_bookmark}</h4>
                </div>
                <div class="modal-body">
                    <input class="acc" type="hidden" name="acc" value="{$account}" />
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-3">{$lang.chg_account_label}</label>
                            <div class="col-sm-9">
                                <span class="acc" style="padding: 0px;"></span>@{$_params.domain}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">{$lang.quota_label}</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label>
                                                <div class="form-fluid">
                                                    <div class="fluid-0">
                                                        <input name="quota" type="radio" value="limited" data-no-validate>
                                                    </div>
                                                    <div class="fluid-100">
                                                        <input class="form-control" name="quota_value" type="number" max="999999999" min="1" required>
                                                    </div>
                                                    <div class="fluid-0">
                                                        <span class="ml-5">MB</span>
                                                    </div>
                                                </div> 
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label>
                                                <input name="quota" type="radio" checked="" value="unlimited" data-no-validate>
                                                {$lang.quota_unlimited}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                    <button type="button" class="btn btn-primary" data-act="chgftpaccountquota" data-rtable="ftp-table"><span>{$lang.save_changes}</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                    <h4 class="modal-title">{$lang.delete_confirmation_title}</h4>
                </div>
                <div class="modal-body">
                    <input class="acc" type="hidden" name="user" value="{$account}" />
                    {$lang.delete_confirmation_body} 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                    <button type="button" class="btn btn-danger" data-act="deleteftpaccount" data-rtable="ftp-table"><span>{$lang.del_account_submit_text}</span></button>
                </div>
            </div> 
        </div>
    </div>
</div>
{literal}
    <style type="text/css">
        #ftp-form .tooltip {
            min-width: 300px !important;
        }
    </style>
    <script>
        refreshTable('ftp-table');

        (function (jQuery) {
            jQuery('#ftp-form [name=login]').change(function () {
                var val = jQuery(this).val();
                jQuery('#ftp-form [name=homedir]').val(val);
            });
            
            jQuery(document).delegate('[name="quota"]', 'change', function() {
                if(jQuery(this).val() == 'unlimited')
                    jQuery(this).parents('.form-group').first().find('[name="quota_value"]').first().attr('data-no-validate','');
                else
                    jQuery(this).parents('.form-group').first().find('[name="quota_value"]').first().removeAttr('data-no-validate').trigger('change');
            });

            jQuery(document).delegate('[data-target="#change-quota-modal"]', 'click', function () {
                var quota = jQuery(this).data('quota');
                if (quota == 'unlimited') {
                    jQuery('#change-quota-modal input[value=limited]').prop('checked', false);
                    jQuery('#change-quota-modal input[value=unlimited]').prop('checked', true);
                    jQuery('#change-quota-modal input[name=quota_value]').val(1).attr('data-no-validate', '');
                } else {
                    jQuery('#change-quota-modal input[value=unlimited]').prop('checked', false);
                    jQuery('#change-quota-modal input[value=limited]').prop('checked', true);
                    jQuery('#change-quota-modal input[name=quota_value]').val(quota).removeAttr('data-no-validate');
                }
            });
        })(jQuery);
    </script>
{/literal}
