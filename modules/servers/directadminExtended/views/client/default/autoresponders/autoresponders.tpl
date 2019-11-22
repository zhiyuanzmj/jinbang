<div class="module-header">
    <i class="icon-header icon-auto-responder"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.create_new_autoresponder}</h4>
        <div class="well">
            <form class="form-horizontal" id="email-form"> 
                <div class="form-group">
                    <label for="acd1" class="col-sm-3 control-label">{$lang.responder_address}</label>
                    <div class="col-sm-9 input-group">
                        <input id=acd1" type="text" name="user" class="form-control first" required data-error="{$validator_lang.field_required}"/>
                        <span class="input-group-addon">@</span>
                        <select name="domain" class="form-control last">
                        {foreach from=$domainlist item="domain"}
                            <option>{$domain}</option>
                        {/foreach}
                        </select> 
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div> 
                <div class="form-group">
                    <label for="acd2" class="col-sm-3 control-label">{$lang.responder_message}</label>
                    <div class="col-sm-9">
                        <textarea name="text" class="form-control" id="acd2"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="acd3" class="col-sm-3 control-label">{$lang.send_cc_to}</label>
                    <div class="col-sm-9">
                        <input type="email" name="ccemail" class="form-control" data-error="{$validator_lang.invalidemail}"/>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="add" data-formid="email-form" data-validate="1" data-rtable="emails-table">{$lang.add_submit_text}</a>
                </div>
            </form>
        </div>
    </div>
                
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.auto_reponders_list}</h4>
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
                    <th>{$lang.user}</th>
                    <th>{$lang.domain}</th>
                    <th>{$lang.cc_email}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
     
    {confirm_modal btn='data-act="delete" data-rtable="emails-table"' id="delete-confirmation" title=$lang.delete_confirmation_label
        body="`$lang.delete_confirmation_text`<input type='hidden' name='user'/><input type='hidden' name='domain'/>"}
</div>

{literal}
    <script>
        refreshTable('emails-table');

        (function (jQuery) {
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
