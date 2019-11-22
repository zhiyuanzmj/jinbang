<div class="module-header ftp-header">
    <i class="icon-header icon-subdomains"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.add_header}</h4>
        <div class="well">
            <form class="form-horizontal" id="subdomain-form">
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.subdomain_label}</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input class="form-control first" type="text" name="domain" maxlength="64" required pattern="{$patterns.simple_domain_tld}" data-error="{$validator_lang.invalid}">
                            <span class="input-group-addon">.</span>
                            <select name="rootdomain" class="form-control last" data-no-validate>
                                {foreach from=$domainlist key="k" item="entry"}
                                    <option value="{$entry}">{$entry}</option>
                                {foreachelse}
                                    <option value="{$domain}">{$domain}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>                                   
                <div class="form-actions">
                    <a class="btn btn-success" data-act="addsubdomain" data-formid="subdomain-form" data-rtable="subdomains-table">{$lang.add_submit_text}</a>
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
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="subdomains-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="subdomains-table">
            <thead>
                <tr>
                    <th>{$lang.edit_tblhead_domain}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

{confirm_modal btn='data-act="removesubdomain" data-rtable="subdomains-table"' id="delete-subdomain-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_confirmation_body`<input type='hidden' name='domain'/><input type='hidden' name='subdomain'/>"}

{literal}
    <script>
        (function (jQuery) {
            refreshTable('subdomains-table');
        })(jQuery);
    </script>
{/literal}