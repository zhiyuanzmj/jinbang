<div class="module-header">
    <i class="icon-header icon-emails"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.add_header}</h4>
        <div class="well">
            <form class="form-horizontal" id="email-form"> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.email_label}</label>
                    <div class="input-group col-sm-9">
                        <input name="email" class="form-control first" type="text" 
                               data-error="{$validator_lang.field_required}" required maxlength="50">
                        <span class="input-group-addon">@</span>
                        <select name="domain" class="form-control last" data-no-validate>
                            {foreach from=$domainlist item="entry"}
                                <option>{$entry}</option>
                            {foreachelse}
                                <option value="{$domain}">{$domain}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.password_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="password" id="password" class="form-control" type="password" 
                                       data-minlength="5" required>
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
                                <input name="password2" id="password2" class="form-control" type="password" 
                                       data-match="#password" data-error="{$validator_lang.field_required}" data-match-error="{$validator_lang.field_not_match}" placeholder="" required>
                                <div class="help-block"></div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>  
                    </div>
                    <div class="col-sm-9 col-sm-offset-3"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.strength}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6 col-xs-7">
                                <div id="pwstrengthbox" class="">{$validator_lang.very_weak}</div>
                            </div>
                            <div class="col-sm-6 col-xs-5">
                                <button id="generate_pwd" type="button" class="btn btn-sm btn-default" data-genpwd="password,password2,pwstrengthbox"><i class="fa fa-key"></i><span class="hide-sm">{$lang.generate_password}</span></button>
                            </div>
                        </div>   
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.quota_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-7 input-group">
                                <span class="input-group-addon first"><input data-no-validate type="radio" name="quotaType" value="limited" onclick="jQuery('#hej_dziewczyno_mloda').removeAttr('disabled');"/></span>
                                <input id="hej_dziewczyno_mloda" class="form-control" disabled="" type="number" name="quota" type="number" min="1" max="4194304" value="1" required data-error="{$validator_lang.invalid}"/>
                                <span class="input-group-addon last">MB</span>
                                <span class="input-group-addon first"><input class="" data-no-validate type="radio" name="quotaType" value="unlimited" checked="" onclick="jQuery('#hej_dziewczyno_mloda').attr('disabled', 'disabled');"/></span>
                                <span class="input-group-addon last">{$lang.quota_unlimited}</span>
                            </div>
                            <div class="col-sm-5"></div>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="addemailaccount" data-formid="email-form" data-validate="1" data-rtable="emails-table">{$lang.add_submit_text}</a>
                </div>
            </form>
        </div>
    </div>
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.emails_accounts}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="emails-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="emails-table" >
            <thead>
                <tr>
                    <th>{$lang.edit_tblhead_account}</th>
                    {*<th>{$lang.edit_tblhead_quota}</th>*}
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
                    <h4 class="modal-title">{$lang.chg_account}</h4>
                </div>
                <div class="modal-body">
                    <input class="acc" type="hidden" name="email" />
                    <input class="dom" type="hidden" name="domain" />
                    
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-3">{$lang.chg_account_label}</label>
                            <div class="col-sm-9">
                                <span class="acc" style="padding: 0px;"></span>@<span class="dom" style="padding: 0px;"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">{$lang.password_label}</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="pwd-modal" name="pwd" type="password" data-minlength="5"/>
                                <div class="help-block">{$validator_lang.min_5_chars}</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">{$lang.password2_label}</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="pwdc" type="password" data-match="#pwd-modal" data-error="{$validator_lang.field_required}" data-match-error="{$validator_lang.field_not_match}" placeholder=""/>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{$lang.edit_tblhead_quota}</label>
                            <div class="col-sm-9 input-group">
                                <span class="input-group-addon first"><input data-no-validate type="radio" name="quotaType" value="limited" onclick="jQuery('#hej_dziewczyno_mloda2').removeAttr('disabled');"/></span>
                                <input id="hej_dziewczyno_mloda2" class="form-control" type="number" name="quota" type="number" min="1" max="4194304" value="1" required data-error="{$validator_lang.invalid}"/>
                                <span class="input-group-addon last">MB</span>
                                <span class="input-group-addon first"><input class="" data-no-validate type="radio" name="quotaType" value="unlimited" checked="" onclick="jQuery('#hej_dziewczyno_mloda2').attr('disabled', 'disabled');"/></span>
                                <span class="input-group-addon last">{$lang.quota_unlimited}</span>
                            </div>
                            <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                    <button type="button" class="btn btn-primary" data-act="chgemailsaccountpasswd" data-rtable="emails-table">{$lang.save_changes}</button>
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
                    <input class="acc" type="hidden" name="email" />
                    <input class="dom" type="hidden" name="domain" />
                    <p>{$lang.delete_confirmation_body}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                    <button type="button" class="btn btn-danger" data-act="deleteemailaccount" data-rtable="emails-table">{$lang.confirm}</button>
                </div>
            </div>
        </div>
    </div>
</div>

{literal}
    <script>
        refreshTable('emails-table');

        (function (jQuery) {
            jQuery(document).delegate('[name="quotaType"]', 'change', function() {
                el  =   jQuery('[name="quotaType"]:checked');
                
                if(jQuery(el).val() == 'unlimited')
                    jQuery(el).parents('.form-group').first().find('[name="quota"]').first().attr('data-no-validate','');
                else
                    jQuery(el).parents('.form-group').first().find('[name="quota"]').first().removeAttr('data-no-validate').trigger('change');
            });
            
            jQuery(document).delegate('[data-target="#change-pwd-modal"]', 'click', function () {
                var quota = jQuery(this).data('quota-unlimited');
                
                jQuery('#change-pwd-modal input[name=pwd]').val('');
                jQuery('#change-pwd-modal input[name=pwdc]').val('');
                
                jQuery('#change-pwd-modal input[value=limited]').prop('checked', quota != '1');
                jQuery('#change-pwd-modal input[value=unlimited]').prop('checked', quota == '1');
                jQuery('#change-pwd-modal input[name=quota]').prop('disabled', quota == '1');
            });
        })(jQuery);
    </script>
{/literal}
