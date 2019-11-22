{if strtoupper($global_config.spam) neq "ON" || $error}
    <div class="alert-info" style="padding: 15px;">{$lang.turned_off}</div>
{else}
<div class="module-header">
    <i class="icon-header icon-spamassasin-settings"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body" id="spam-form">      
    <div class="section">
        <div class="row">
            <div class="col-md-12">
            {if $config.is_on == "no"}
                <div class="alert alert-warning">
                    {$lang.spamassasin_is_not_currently_enabled}
                    {$lang.click_save_to_enable_it}
                </div>
            {else}
                <div class="alert alert-success">                
                    {$lang.spamassasin_is_currently_enabled}
                <a class="btn btn-danger" data-act="disable" data-refresh="1">{$lang.disable}</a>
                </div>
            {/if}
            </div>
        </div>
            
       <div class="row">
            <div class="col-md-12">
                
                <div class="table-responsive table-borderless" style="overflow: hidden">
                    <table class="table" cellpadding="3" cellspacing="1" id="form-asd">
                        <tbody>
                            <tr><td class="listtitle well" colspan="2">{$lang.where_do_you_want_the_spam_go_to}</td></tr>
                            <tr><td class="list" align="center"><input name="where" value="inbox" {if $config.where eq 'inbox'}checked=""{/if} type="radio"></td><td class="list">{$lang.inbox}</td></tr>
                            <tr><td class="list2" align="center"><input name="where" value="spamfolder" {if $config.where eq 'spamfolder'}checked=""{/if} type="radio"></td><td class="list2">{$lang.redirect_to_catchall}</td></tr>
                            <tr><td class="list" align="center"><input name="where" value="userspamfolder" {if $config.where eq 'userspamfolder'}checked=""{/if} type="radio"></td><td class="list">{$lang.send_the_spam_to_the_user_spam_folder}</td></tr>
                            <tr><td class="list2" align="center"><input name="where" value="delete" {if $config.where eq 'delete'}checked=""{/if} type="radio"></td><td class="list2">{$lang.delete_the_spam}</td></tr>
                            {*<tr><td colspan="2">&nbsp;</td></tr>*}

                            <tr><td class="listtitle well" colspan="2">{$lang.what_score_threshold_do_you_wish_to_use}</td></tr>
                            <tr><td class="list" colspan="2">{$lang.a_lower_threshold_will_block_more_spam}<br>{$lang.a_higher_threshold_will_let_more_spam_through}</td></tr>
                            <tr><td class="list2" align="center"><input name="required_hits" value="5.0" {if $config.required_score eq '5.0' or !isset($config.required_score)}checked=""{/if} type="radio"></td><td class="list2">{$lang.low_threshold}</td></tr>
                            <tr><td class="list" align="center"><input name="required_hits" value="7.5" {if $config.required_score eq '7.5'}checked=""{/if} type="radio"></td><td class="list">{$lang.medium_threshold}</td></tr>
                            <tr><td class="list2" align="center"><input name="required_hits" value="10.0" {if $config.required_score eq '10.0'}checked=""{/if} type="radio"></td><td class="list2">{$lang.high_threshold}</td></tr>
                            <tr><td class="list" align="center"><input name="required_hits" value="custom" {if isset($config.required_score) && $config.required_score neq '5.0' && $config.required_score neq '7.5' && $config.required_score neq '10.0'}checked=""{/if} type="radio"></td><td class="list"><div class="row"><div class="col-md-3"><label>{$lang.custom_threshold}:</label></div><div class="col-md-2"><input name="required_hits_custom" size="4" value="{$config.required_score}" type="text" class="form-control"></div></div></td></tr>
                            {*<tr><td colspan="2">&nbsp;</td></tr>*}

                            <tr><td class="listtitle well" colspan="2">{$lang.would_toy_like_to_delete_high_scoring_spam}</td></tr>
                            <tr><td class="list" align="center"><input name="high_score_block" value="yes" {if $config.high_score_block eq 'yes'}checked=""{/if} type="radio"></td><td class="list">
                                    <div class="row"><div class="col-md-5"><label>{$lang.yes_block_all_spam_scoring_higher_than}: </label></div><div class="col-md-2"><input name="high_score" value="{$config.high_score}" maxlength="2" size="2" type="text"  class="form-control"></div> <div class="col-md-3"><label>{$lang.no_decimals}</label></div></div></td></tr>
                            <tr><td class="list2" align="center"><input name="high_score_block" value="no" {if $config.high_score_block eq 'no'}checked=""{/if} type="radio"></td><td class="list2">{$lang.no_do_not_block_high_scoring_spam}</td></tr>
                            {*<tr><td colspan="2">&nbsp;</td></tr>*}

                            <tr><td class="listtitle well" colspan="2">{$lang.do_you_wish_to_rewrite_the_subject}</td></tr>
                            <tr><td class="list" align="center"><input name="rewrite_subject" value="1" {if isset($config.rewrite_header)}checked=""{/if} type="radio"></td><td class="list">
                                    <div class="row"><div class="col-md-5"><label>{$lang.yes_set_the_subject_to_the_following}: </label></div><div class="col-md-4"><input name="subject_tag" value="{if isset($config.rewrite_header)}{$config.rewrite_header}{else}*****SPAM*****{/if}" type="text"  class="form-control"></div></div></td></tr>
                            <tr><td class="list2" align="center"><input name="rewrite_subject" value="0" {if !isset($config.rewrite_header)}checked=""{/if} type="radio"></td><td class="list2">{$lang.no_leave_the_subject_unchanged}</td></tr>
                            {*<tr><td colspan="2">&nbsp;</td></tr>*}

                            <tr><td class="listtitle well" colspan="2">{$lang.how_should_the_spam_be_delivered}</td></tr>
                            <tr><td class="list" colspan="2">{$lang.how_deliver_info}</td></tr>
                            <tr><td class="list2" align="center"><input name="report_safe" value="0" {if $config.report_safe eq '0'}checked=""{/if} type="radio"></td><td class="list2">{$lang.dont_use_attachments}</td></tr>
                            <tr><td class="list" align="center"><input name="report_safe" value="1" {if $config.report_safe eq '1'}checked=""{/if} type="radio"></td><td class="list">{$lang.use_attachments}</td></tr>
                            <tr><td class="list2" align="center"><input name="report_safe" value="2" {if $config.report_safe eq '2'}checked=""{/if} type="radio"></td><td class="list2">{$lang.use_textonly_attachments}</td></tr>
                            {*<tr><td colspan="2">&nbsp;</td></tr>*}

                            <tr><td class="listtitle well" colspan="2">{$lang.email_blacklist}</td></tr>
                            <tr><td class="list" colspan="2">{$lang.email_blacklist_info}</td></tr>
                            <tr><td class="list" colspan="2"><textarea class="form-control" name="blacklist_from" cols="40" rows="10">{$config.blacklist}</textarea></td></tr>
                            {*<tr><td colspan="2">&nbsp;</td></tr>*}

                            <tr><td class="listtitle well" colspan="2">{$lang.email_whitelist}</td></tr>
                            <tr><td class="list" colspan="2">{$lang.email_whitelist_info}</td></tr>
                            <tr><td class="list" colspan="2"><textarea class="form-control" name="whitelist_from" cols="40" rows="10">{$config.whitelist}</textarea></td></tr>
                            {*<tr><td colspan="2">&nbsp;</td></tr>*}
                        <tr><td colspan="2" align="center"><a class="btn btn-success" data-act="save" data-refresh="1" data-formid="form-asd">{$lang.save}</a></td></tr>                           
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
            
{literal}
    <style>
        .table-borderless, .table-borderless td, .table-borderless th {
            border: none !important;
        }
        
        table.list {
            width: 100%;
        }
        
        table.list td.listtitle {
            color: #EEE;
            background: linear-gradient(#406E99, #6D8BA8, #345B80, #2C4A67) repeat scroll 0% 0% transparent;
            padding-left: 5px !important;
        }
        
        table.list input:not([type='submit']) {
            width: initial;
            padding: initial;
            margin: initial;
            padding-left: 2px;
        }
        
        table.list textarea {
            width: 100%;
            box-sizing: border-box;
        }
        
        #mg-wrapper input[type="radio"], #mg-wrapper input[type="checkbox"] {
            margin-top: 5px;
        }
    </style>
{/literal}
        
{/if}

