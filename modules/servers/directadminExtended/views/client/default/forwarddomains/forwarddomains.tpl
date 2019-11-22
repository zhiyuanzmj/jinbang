<div class="module-header">
    <i class="icon-header icon-forwarddomains"></i>
    <h1>{$lang.page_header}</h1>
    <p>{$lang.add_aforward_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <div style="display: inline-flex;"><h4>{$lang.add_aforward_sub_main_header}</h4>{if $template_six_style}
            <button class="show-sm btn btn-icon show-hint" data-toggle="tooltip" title="{$lang.main_hint}" type="button"> 
            <i class="glyphicon glyphicon-question-sign"></i> 
            </button>{/if}</div>         
        <div class="well">
            <form class="form-horizontal" id="domain-forward-form">
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.lbl_type}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <select name="type" class="form-control">
                                    <option value="301">{$lang.lbl_pernament}</option>
                                    <option value="302">{$lang.lbl_temporary}</option>
                                    <option value="303">{$lang.lbl_replaced}</option>
                                </select>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_aforward_label}</label>

                    <div class="input-group col-sm-9">
                        <select class="form-control first" name="domain" data-no-validate>
                        {foreach from=$domainlist item="domain"}
                            <option>{$domain}</option>
                        {/foreach}
                        </select>
                        <span class="input-group-addon">/</span>
                        <input class="form-control last" type="text" name="src" required="" pattern="{$patterns.no_white_chars}" data-error="{$validator_lang.invalid}" >
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>  
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_destination_info_label}</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="url" required="" value="http://" pattern="{$patterns.no_white_chars}"  data-error="{$validator_lang.field_required}">
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>   
                </div>
                            
                <div class="form-actions">
                    <a class="btn btn-success" data-act="addforward" data-formid="domain-forward-form" data-rtable="domain-forwarders-table">{$lang.add}</a>
                </div>
            </form>
        </div>
    </div>
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.search_dforward_header}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="domain-forwarders-table">
                    </div>
                </div>
            </div>
        </div>
        <table class="table" id="domain-forwarders-table">
            <thead>
                <tr>
                    <th>{$lang.modify_aforward_tblhead_address}</th>
                    <th>{$lang.modify_aforward_tblhead_forward}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
                
{confirm_modal btn='data-act="delforward" data-rtable="domain-forwarders-table"' id="delete-domain-forward-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_confirmation_body`<input type='hidden' name='domain'/><input type='hidden' name='src'/><input type='hidden' name='docroot'/>"}
        
{literal}
    <script>
        (function (jQuery) {
            refreshTable('domain-forwarders-table');
            
            jQuery('[name=rdwww]').change(function() {
                jQuery('#rdwww').html(jQuery('option:selected', this).data('copy'));
            });
        })(jQuery);
    </script>
{/literal}