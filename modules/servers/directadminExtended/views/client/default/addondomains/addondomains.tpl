<div class="module-header">
    <i class="icon-header icon-addondomains"></i>
    <h1>{$lang.add_addondomain_main_header}</h1>
    <p>{$lang.add_addondomain_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.add_addondomain_sub_main_header}</h4>
        <div class="well">
            <form class="form-horizontal" id="domain-form"> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.add_addondomain_domain_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input name="newdomain" class="form-control" type="text" required pattern="{$patterns.simple_domain}" data-error="{$lang.valid_domainname_error1}">
                            </div>
                        </div>   
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.add_bandwidth_label}</label>
                    <div class="col-sm-9 input-group">
                        <span class="input-group-addon first"><input data-no-validate type="radio" name="bandwidth" value="" onclick="jQuery('#hej_dziewczyno_mloda').removeAttr('disabled');"/></span>
                        <input id="hej_dziewczyno_mloda" class="form-control" type="number" name="bandwidth" value="2048" min="1" disabled="" required="" data-error="{$lang.valid_bandwidth_error1}"/>
                        <span class="input-group-addon last">MB</span>
                        <span class="input-group-addon first"><input class="" data-no-validate type="radio" name="bandwidth" value="unlimited" checked="" onclick="jQuery('#hej_dziewczyno_mloda').attr('disabled', 'disabled');"/></span>
                        <span class="input-group-addon last">{$lang.quota_unlimited}</span>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.add_diskspace_label}</label>
                    <div class="col-sm-9 input-group">
                        <span class="input-group-addon first"><input data-no-validate type="radio" name="disc" value="" onclick="jQuery('#zatancz_w_mych_ramionach').removeAttr('disabled');"/></span>
                        <input id="zatancz_w_mych_ramionach" class="form-control" required="" type="number" name="disc" value="2048" min="1" disabled="" data-error="{$lang.valid_disk_error1}"/>
                        <span class="input-group-addon last">MB</span>
                        <span class="input-group-addon first"><input data-no-validate class="" type="radio" name="disc" value="unlimited" checked="" onclick="jQuery('#zatancz_w_mych_ramionach').attr('disabled', 'disabled');"/></span>
                        <span class="input-group-addon last">{$lang.quota_unlimited}</span>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.add_ssl_label}</label>
                    <div class="col-sm-9">
                        <input type="checkbox" class="" id="" name="ssl" value="1">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.add_cgi_label}</label>
                    <div class="col-sm-9">
                        <input type="checkbox" class="" id="" name="cgi" value="1">
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.add_php_label}</label>
                    <div class="col-sm-9">
                        <input type="checkbox" class="" id="" name="php" value="1">
                    </div>
                </div> 
                <div class="form-actions">
                    <a class="btn btn-success" data-act="add" data-formid="domain-form" data-validate="1" data-rtable="domains-table">{$lang.add_addondomain_submit_text}</a>
                </div>
            </form>
        </div>
    </div>
                
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.domains}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="domains-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="domains-table">
            <thead>
                <tr>
                    <th>{$lang.modify_addondomain_tblhead_domain}</th>
                    <th>{$lang.modify_addondomain_tblhead_ver}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    
                    
    {confirm_modal btn='data-act="delete" data-rtable="domains-table"' id="delete-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_confirmation_body`<input type='hidden' name='domain'/>"}
</div>

{literal}
    <script>
        refreshTable('domains-table');
    </script>
{/literal}
