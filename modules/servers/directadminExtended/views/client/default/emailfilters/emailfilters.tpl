<div class="module-header">
    <i class="icon-header icon-spam"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.switch_domain}</h4>
        <div class="well" id="switchdomain">
            <div class="row">
                <div class="col-md-8">
                    <select name="domain" class="form-control"  onchange="switchdomain($(this));">
                    {foreach from=$domainlist item="domain"}
                        <option  value="{$domain}"  
                                {if $currentdomain eq $domain}selected="selected"{/if}>
                            {$domain}
                        </option>
                    {/foreach}
                    </select>
                </div>
                <div class="col-md-4" id="switchdomainloader" style="display: none; padding-top: 8px;">
                    <i class="fa fa-spinner fa-pulse"></i>
                </div>
            </div>
            
        </div>
    </div>
        
    <div class="section">
        <h4>{$lang.create_new_filter}</h4>
        <div class="well">
            <form class="form-horizontal" id="email-form"> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.filter_type}</label>
                    <div class="col-sm-9">
                        <select name="type" class="form-control" data-no-validate>
                        {foreach from=$filters item="filter"}  
                            <option value="{$filter}">{$lang.$filter}</option>
                        {/foreach}
                        </select>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="acd1" class="col-sm-3 control-label">{$lang.value}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="acd1" name="value">
                    </div>
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
                <h4>{$lang.email_filters_list}</h4>
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
                    <th>{$lang.filter}</th>
                    <th>{$lang.value}</th>
                    <th>{$lang.actions}</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
                
    <div class="section" id="action-form">
        <h4>{$lang.filter_options}</h4>
        <div class="well">
            <form class="form-horizontal"> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.action_after_match}</label>
                    <div class="col-sm-9">
                        <select name="value" class="form-control">
                            <option value="drop" {if $action eq "drop"}selected=""{/if}>{$lang.drop_email}</option>
                            <option value="email" {if $action eq "email"}selected=""{/if}>{$lang.spambox}</option>
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="action" data-formid="action-form">{$lang.save}</a>
                </div>
            </form>
        </div>
    </div>
    
    <div class="section" id="action-form">
        <h4>{$lang.adult_filter}</h4>  
        <div class="row">
            <div class="col-md-5" {if $adult eq 'ON'}style="display: none"{/if}>
                <a class="btn btn-success" data-act="adult" data-refresh="1" {if $adult eq 'ON'}style="display: none"{/if}>{$lang.enable}</a>
            </div>
            <div class="col-md-5" {if $adult eq 'OFF'}style="display: none"{/if}>
                <a class="btn btn-danger" data-act="adult" data-refresh="1" {if $adult eq 'OFF'}style="display: none"{/if}>{$lang.disable}</a> 
            </div>
        </div>
    </div>     
     
    {confirm_modal btn='data-act="delete" data-rtable="emails-table"' id="delete-filter-modal" title=$lang.emailfilter_delete_confirmation_title
        body="`$lang.emailfilter_delete_confirmation_body`<input type='hidden' name='filterid'/>"}
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
        
        
        
        function switchdomain(input){
            
            var pathArray = queryToArray(location.search.substring(1));
            pathArray['act'] = 'switchdomain';
            pathArray['domain'] = input.val();
            pathArray['modop'] = 'custom';
            
            jQuery('#switchdomainloader').show();
            
            $.post(location.pathname + '?ajax=1' , pathArray, function(data){
                jQuery('#switchdomainloader').hide();
            });
        }
        
    </script>
{/literal}
