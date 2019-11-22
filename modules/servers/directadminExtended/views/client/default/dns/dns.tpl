<div class="module-header">
     <i class="icon-header icon-managedns"></i>
    <h1>{$lang.page_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section well" id="change-domain">
        <div class="row">
            <div class="col-sm-6">
                <select name="domain" class="form-control" data-no-validate>
                    {foreach from=$domainlist key="k" item="entry"}
                        <option value="{$entry}" data-act="changedomain" data-refresh="" data-formid="change-domain" {if $domain_selected eq $entry}selected=""{/if}>{$entry}</option>
                    {foreachelse}
                        <option value="{$domain}" data-act="changedomain" data-refresh="" data-formid="change-domain">{$domain}</option>
                    {/foreach}
                </select>
            </div>
            <div class="col-sm-6">
                <i class="fa fa-spinner fa-pulse" style="margin-top: 10px; display: none;"></i>
            </div>
        </div>
    </div>
    <div id="manager">
        <div class="section">
            <h4>{$lang.add_new}</h4>
            <div class="well">
                <form class="form-horizontal" id="dns-form"> 
                    <div class="form-group ALL">
                        <label class="col-sm-3 control-label PTR" style="display: none;">{$lang.ip}</label>
                        <label class="col-sm-3 control-label NPTR">{$lang.name}</label>
                        <div class="col-sm-9">
                            <input name="addrecord[name]" class="form-control" type="text" data-error="{$validator_lang.field_required}" required pattern="{$patterns.no_white_chars}">
                        </div>
                    </div>
                    <div class="form-group ALL">
                        <label class="col-sm-3 control-label">{$lang.type}</label>
                        <div class="col-sm-9">
                            <select class="form-control add-type" name="addrecord[type]">
                                <option>A</option>
                                <option>NS</option>
                                <option>CNAME</option>
                                <option>MX</option>
                                <option>PTR</option>
                                <option>TXT</option>
                                <option>SRV</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group ALL">
                        <label class="col-sm-3 control-label PTR" style="display: none;">{$lang.domain}</label>
                        <label class="col-sm-3 control-label NPTR">{$lang.target}</label>
                        <div class="col-sm-9">
                            <input name="addrecord[value]" class="form-control" type="text" data-error="{$validator_lang.field_required}" required>
                        </div>
                    </div>
                    <div class="form-group PTR" style="display: none;">
                        <label class="col-sm-3 control-label">{$lang.mask}</label>
                        <div class="col-sm-9">
                            <input name="addrecord[mask]" class="form-control" type="text" data-error="{$validator_lang.field_required}" required>
                        </div>
                    </div>
                    <div class="form-group SRV" style="display: none;">
                        <label class="col-sm-3 control-label">{$lang.service}</label>
                        <div class="col-sm-9">
                            <input name="addrecord[service]" class="form-control" type="text" data-error="{$validator_lang.field_required}" required>
                        </div>
                    </div>
                    <div class="form-group SRV MX" style="display: none;">
                        <label class="col-sm-3 control-label">{$lang.priority}</label>
                        <div class="col-sm-9">
                            <select name="addrecord[priority]" class="form-control">	
                                <option value="50">{$lang.low_lbl} (50)</option>
                                <option value="45">45</option>
                                <option value="40">40</option>
                                <option value="35">35</option>
                                <option value="30">30</option>
                                <option value="25">25</option>
                                <option value="20">20</option>
                                <option value="15">15</option>
                                <option value="10">10</option>
                                <option value="5">5</option>
                                <option value="0" selected="">{$lang.high_lbl} (0)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group SRV" style="display: none;">
                        <label class="col-sm-3 control-label">{$lang.protocol}</label>
                        <div class="col-sm-9">
                            <input name="addrecord[protocol]" class="form-control" type="text" data-error="{$validator_lang.field_required}" required>
                        </div>
                    </div>
                    <div class="form-group SRV" style="display: none;">
                        <label class="col-sm-3 control-label">{$lang.port}</label>
                        <div class="col-sm-9">
                            <input name="addrecord[port]" class="form-control" type="text" data-error="{$validator_lang.field_required}" required>
                        </div>
                    </div>
                    <div class="form-group SRV" style="display: none;">
                        <label class="col-sm-3 control-label">{$lang.weight}</label>
                        <div class="col-sm-9">
                            <select name="addrecord[weight]" class="form-control">	
                                <option value="10">{$lang.low_lbl} (10)</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="60">60</option>
                                <option value="70">70</option>
                                <option value="80">80</option>
                                <option value="90">90</option>
                                <option value="100">{$lang.high_lbl} (100)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <a class="btn btn-success" data-act="addrecord" data-formid="dns-form" data-validate="1" data-refresh="">{$lang.add}</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="section">
            <div class="table-header">
                <div class="header-title">
                    <h4>{$lang.add_manage}</h4>
                </div>
                <div class="header-actions">
                    <div class="header-search">
                        <div class="input-icon">
                            <i class="fa fa-search"></i>
                            <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search-custom="current-dns-table">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table" id="current-dns-table">
                <thead>
                    <tr>
                        <th>{$lang.name}</th>
                        <th style="width: 90px;">{$lang.type}</th>
                        <th>{$lang.target}</th>
                        <th style="width: 30px;"></th>
                    </tr>
                </thead>
                <tbody id="save-form">
                    <tr class="no-matches" style="display: none;"><td colspan="4" class="text-center">{$lang.search_results_empty_js}</td></tr>
                    {foreach from=$records item="entry" key="k"}
                    <tr class="record">
                        <td>
                            <input type="text" name="record[{$k}][name]" value="{$entry->host}" class="form-control" />
                        </td>
                        <td style="width: 90px;"><input type="text" disabled="" value="{$entry->type}" class="form-control"/></td>
                        <td>
                            <input type="text" name="record[{$k}][value]" value="{$entry->value|escape}" class="form-control"/>
                            {if $entry->opt!="" && $entry->type=="MX"}<br />{$lang.priority}:<br />
                                <select name="record[{$k}][priority]" class="form-control">	
                                    <option value="50" {if $entry->opt == 50}selected{/if}>{$lang.low_lbl} (50)</option>
                                    <option value="45" {if $entry->opt == 45}selected{/if}>45</option>
                                    <option value="40" {if $entry->opt == 40}selected{/if}>40</option>
                                    <option value="35" {if $entry->opt == 35}selected{/if}>35</option>
                                    <option value="30" {if $entry->opt == 30}selected{/if}>30</option>
                                    <option value="25" {if $entry->opt == 25}selected{/if}>25</option>
                                    <option value="20" {if $entry->opt == 20}selected{/if}>20</option>
                                    <option value="15" {if $entry->opt == 15}selected{/if}>15</option>
                                    <option value="10" {if $entry->opt == 10}selected{/if}>10</option>
                                    <option value="5"  {if $entry->opt == 5}selected{/if}>5</option>
                                    <option value="0"  {if $entry->opt == 0}selected{/if}>{$lang.high_lbl} (0)</option>
                                </select>
                            {/if}
                            {if $entry->opt!="" && $entry->type=="PTR"}<br />{$lang.mask}:<br />
                                <input type="text" name="record[{$k}][priority]" value="{$entry->opt}" class="form-control"/> 
                            {/if}
                            {if $entry->opt!="" && $entry->type=="SRV"}
                                 {assign var=opt value=" "|explode:$entry->opt}

                                <br />{$lang.priority}:<br />
                                <select name="record[{$k}][priority]" class="form-control">	
                                    <option value="50" {if $opt[0] == 50}selected{/if}>{$lang.low_lbl} (50)</option>
                                    <option value="45" {if $opt[0] == 45}selected{/if}>45</option>
                                    <option value="40" {if $opt[0] == 40}selected{/if}>40</option>
                                    <option value="35" {if $opt[0] == 35}selected{/if}>35</option>
                                    <option value="30" {if $opt[0] == 30}selected{/if}>30</option>
                                    <option value="25" {if $opt[0] == 25}selected{/if}>25</option>
                                    <option value="20" {if $opt[0] == 20}selected{/if}>20</option>
                                    <option value="15" {if $opt[0] == 15}selected{/if}>15</option>
                                    <option value="10" {if $opt[0] == 10}selected{/if}>10</option>
                                    <option value="5"  {if $opt[0] == 5}selected{/if}>5</option>
                                    <option value="0"  {if $opt[0] == 0}selected{/if}>{$lang.high_lbl} (0)</option>
                                </select>
                                <div class="port" >
                                    {$lang.port}:<br /> <input type="text" name="record[{$k}][port]" value="{$opt[2]}" class="form-control"/>    
                                </div>
                                <div class="weight" >
                                    {$lang.weight}:<br />  
                                    <select name="record[{$k}][weight]" class="form-control">	
                                        <option value="10" {if $opt[1] == 10}selected{/if}>{$lang.low_lbl} (10)</option>
                                        <option value="20" {if $opt[1] == 20}selected{/if}>20</option>
                                        <option value="30" {if $opt[1] == 30}selected{/if}>30</option>
                                        <option value="40" {if $opt[1] == 40}selected{/if}>40</option>
                                        <option value="50" {if $opt[1] == 50}selected{/if}>50</option>
                                        <option value="60" {if $opt[1] == 60}selected{/if}>60</option>
                                        <option value="70" {if $opt[1] == 70}selected{/if}>70</option>
                                        <option value="80" {if $opt[1] == 80}selected{/if}>80</option>
                                        <option value="90" {if $opt[1] == 90}selected{/if}>90</option>
                                        <option value="100" {if $opt[1] == 100}selected{/if}>{$lang.high_lbl} (100)</option>
                                    </select>
                                </div>
                            {/if}
                        </td>
                        <td style="width: 30px;"><a class="btn btn-icon" data-toggle="modal" data-target="#delete-dns-modal" data-modal-insert="[name=line]:{$k|urlencode}" title="{$lang.delete}" ><i class="fa fa-trash"></i></a></td>
                    </tr>
                    {foreachelse}
                        <tr><td colspan="4">{$lang.noresult}</td></tr>
                    {/foreach}
                </tbody>
            </table>

            <a class="btn btn-success" data-act="save" data-formid="save-form" data-refresh="1">{$lang.save}</a>
        </div>
    </div>
    {confirm_modal btn='data-act="deleterecord" data-refresh=""' id="delete-dns-modal" title=$lang.delete
        body="`$lang.dns_delete_confirmation_body`<input type='hidden' name='line'/>"}

</div>

{literal}
    <script>
        (function (jQuery) {
            jQuery(document).delegate('.add-type', 'change', function() {
                var type = jQuery(this).val();
                jQuery(this).parents('form').first().find('.form-group:not(.'+type+')').hide().removeClass('has-error');
                jQuery(this).parents('form').first().find('.form-group.'+type+',.form-group.ALL').show();
                if(type == 'PTR') {
                    jQuery(this).parents('form').first().find('.control-label.NPTR').hide();
                    jQuery(this).parents('form').first().find('.control-label.PTR').show();
                } else {
                    jQuery(this).parents('form').first().find('.control-label.NPTR').show();
                    jQuery(this).parents('form').first().find('.control-label.PTR').hide();
                }
            });
            
            jQuery(document).delegate("[data-search-custom]", 'keyup', function() {
                var search = jQuery(this).val().toLowerCase();

                if(!search.length) {
                    jQuery('#save-form > tr.record').show().css('display', "");
                    return ;
                }

                jQuery('#save-form > tr.record').each(function() {
                    if (jQuery('input', this).filter(function() {return this.value.toLowerCase().indexOf(search) > -1;}).length) {
                        jQuery(this).show();
                    } else {
                        jQuery(this).hide();
                    }
                });

                jQuery('#save-form > tr.no-matches').toggle(!jQuery('#save-form > tr.record:visible').length);
            });
            
            jQuery(document).delegate('#change-domain select', 'change', function() {
                jQuery('#manager').fadeOut();
                jQuery('#change-domain i').show();
            });
            
        })(jQuery);
    </script>
{/literal}