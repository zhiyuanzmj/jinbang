<div class="module-header">
     <i class="icon-header icon-parkeddomains"></i>
    <h1>{$lang.add_parkeddomain_main_header}</h1>
    <p>{$lang.add_parkeddomain_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.add_parkeddomain_sub_main_header}</h4>
        <div class="well">
            <form class="form-horizontal" id="parked-domain-form">
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_parkeddomain_domain_label}</label>
                    <div class="col-sm-9 input-group">
                        <input class="form-control first" type="text" name="from" required pattern="{$patterns.simple_domain}" data-error="{$validator_lang.invalid_domain_name}">
                        <span class="input-group-addon"  data-no-validate>&#x2192;</span>
                        <select class="form-control last" name="domain" data-no-validate>
                        {foreach from=$domainlist item="domain"}
                            <option>{$domain}</option>
                        {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>    
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.add_parkeddomain_select_type}</label>
                    <div class="col-sm-9 input-group">
                        <span class="input-group-addon first"><input type="radio" class="" name="alias" value="yes" checked=""></span>
                        <span class="input-group-addon last">{$lang.add_parkeddomain_stype_alias}</span>
                        <span class="input-group-addon first"><input type="radio" class="" name="alias" value="no"></span>
                        <span class="input-group-addon last">{$lang.add_parkeddomain_stype_pointer}</span>
                    </div>
                </div>
                <div class="alert alert-info">
                    {$lang.add_parkeddomain_add_hint}
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="addparkeddomain" data-validate="1" data-formid="parked-domain-form" data-rtable="parked-domains-table">{$lang.add_parkeddomain_submit_text}</a>
                </div>
            </form>
        </div>
    </div>
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.search_parkeddomain_header}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="parked-domains-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="parked-domains-table">
            <thead>
                <tr>
                    <th>{$lang.modify_parkeddomain_tblhead_domain}</th>
                    <th>*</th>
                    <th>{$lang.modify_parkeddomain_tblhead_targer_domain}</th>
                    <th>{$lang.modify_parkeddomain_tblhead_type}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
                
{confirm_modal btn='data-act="delparkeddomain" data-raw="1" data-rtable="parked-domains-table"' id="delete-parked-domain-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_confirmation_body`<input class='source' type='hidden' name='source'/><input class='target' type='hidden' name='target'/>"}
                
{literal}
    <script>
        (function (jQuery) {
            refreshTable('parked-domains-table');
        })(jQuery);
    </script>
{/literal}