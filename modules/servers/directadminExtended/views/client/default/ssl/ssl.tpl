
{if $newview}
    <link rel="stylesheet" type="text/css" href="{$_assets_dir}/css/select2.css" />
    <script type="text/javascript" src="{$_assets_dir}/js/select2.min.js"></script>
    <div class="module-header">
        <i class="icon-header icon-ssl"></i>
        <h1>{$lang.main_header}</h1>
        <p>{$lang.main_hint}</p>
    </div>
    {if $template_six_style}    
        <div style="display: inline-flex;"><h3>{$lang.main_header}</h3>
            <button class="show-sm btn btn-icon show-hint" data-toggle="tooltip" title="{$lang.main_hint}" type="button"> 
                <i class="glyphicon glyphicon-question-sign"></i> 
            </button></div> <br /><br />{/if}
        <div class="module-body"> 
            <div class="module-sub-header">
                <h2>{$lang.key_on_server}</h2>
                <p>{$lang.key_desc}</p>
            </div>
            <div class="section">
                <div class="table-header">
                    <div class="header-title">
                        <h4>{$lang.your_private_keys}</h4>
                    </div>
{*                    <div class="header-actions">
                        <div class="header-search">
                            <button data-toggle="modal" data-target="#upload" class="btn btn-success btn-block-mobile">{$lang.keys_upload}</button>
                            <button data-toggle="modal" data-target="#generate" class="btn btn-primary btn-block-mobile">{$lang.keys_generate}</button>
                        </div>
                    </div>*}
                </div>
                <table class="table" id="private-keys-table">
                    <thead>
                        <tr>
                            <th>{$lang.domain}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="module-sub-header">
                <h2>{$lang.csr_on_server}</h2>
                <p>{$lang.csr_desc}</p>
            </div>
            <div class="section">
                <div class="table-header">
                    <div class="header-title">
                        <h4>{$lang.your_csr_keys}</h4>
                    </div>
                    <div class="header-actions">
                        <div class="header-search">                                           
                            <button data-toggle="modal" data-target="#csr" class="btn btn-primary btn-block-mobile">{$lang.csr_generate}</button>
                        </div>
                    </div>
                </div>
                {*        <table class="table" id="csr-keys-table">
                <thead>
                <tr>
                <th>{$lang.domain}</th>
                <th></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                </table>*}
            </div>
            <div class="module-sub-header">
                <h2>{$lang.crt_on_server}</h2>
                <p>{$lang.crt_desc}</p>
            </div>
            <div class="section">
                <div class="table-header">
                    <div class="header-title">
                        <h4>{$lang.your_ssl_certificates}</h4>
                    </div>
                    <div class="header-actions">
                        <div class="header-search">                                           
                            <button data-toggle="modal" data-target="#ssl-upload" class="btn btn-success btn-block-mobile">{$lang.crt_upload}</button>
                            <button data-toggle="modal" data-target="#ssl-generate" class="btn btn-primary btn-block-mobile">{$lang.crt_generate}</button>
{*                            <button data-toggle="modal" data-target="#installssl" class="btn btn-success btn-block-mobile">{$lang.crt_install}</button>*}
                            {if $ssl_allow_encrypt}<button data-toggle="modal" data-target="#letsencrypt" class="btn btn-info btn-block-mobile">{$lang.letsencrypt}</button>{/if}
                        </div>
                    </div>
                </div>
                <table class="table" id="ssl-certificates-table">
                    <thead>
                        <tr>
                            <th>{$lang.domain}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

{*        <div id="upload" class="modal fade">
            <form class="form-horizontal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{$lang.keys_upload}</h4>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.key4domain}</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="domain" id="key-upload-domain" required pattern="{$patterns.simple_domain}"  data-error="{$validator_lang.invalid}">
                                </div>
                                <div class="col-md-9 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                          
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.or}</label>
                                <div class="col-sm-9">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.select_domain}</label>
                                <div class="col-sm-9">
                                    <select name="domain" class="form-control" data-copy-to="key-upload-domain">
                                        <option value="">{$lang.fields.select_domain}</option>
                                        {foreach from=$domainList item=value}  
                                            <option value="{$value}">{$value}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.paste_key}</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" name="keyArea" required  data-error="{$validator_lang.field_required}"></textarea>
                                </div>
                                <div class="col-md-9 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                            
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                            <button type="button" class="btn btn-primary" data-act="keys_upload" data-refresh="">{$lang.upload}</button> <!-- data-rtable="private-keys-table" -->
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </form>
        </div><!-- /.modal -->
*}
 {*       <!-- ---------------------------- -->
        <!-- MODAL: GENERATE PRIVATE KEYS -->
        <!-- ---------------------------- -->
        <div id="generate" class="modal fade">
            <form class="form-horizontal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{$lang.keys_generate}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.key4domain}</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="host" id="key-generate-domain" required pattern="{$patterns.simple_domain}"  data-error="{$validator_lang.invalid}">
                                </div>
                                <div class="col-md-9 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                          
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.or}</label>
                                <div class="col-sm-9">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.select_domain}</label>
                                <div class="col-sm-9">
                                    <select name="domain" class="form-control" data-copy-to="key-generate-domain">
                                        <option value="">{$lang.fields.select_domain}</option>
                                        {foreach from=$domainList item=value}  
                                            <option value="{$value}">{$value}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.key_size}</label>
                                <div class="col-sm-9">
                                    <select name="keysize" class="form-control">
                                        {foreach from=$lang.addfield.key key="key" item="item"}
                                            <option value="{$key}">{$item}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                            <button type="button" class="btn btn-primary" data-act="keys_generate" data-refresh="1">{$lang.generate}</button> <!-- data-rtable="private-keys-table" -->
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </form>
        </div><!-- /.modal -->
*}

        <!-- -------------------------------- -->
        <!-- MODAL: GENERATE SSL Cert REQUEST -->
        <!-- -------------------------------- -->
        <div id="csr" class="modal fade">
            <form class="form-horizontal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{$lang.csr_generate}</h4>
                        </div>
                        <div class="modal-body">   
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.select_key_domain}</label>
                                <div class="col-sm-8">
                                    <select name="domain" class="form-control"  >
                                        <option value="">{$lang.fields.select_domain}</option>
                                        {foreach from=$domainList item=value}  
                                            <option value="{$value}">{$value}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                              
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.addfield.country}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="country" value="{$clientsdetails.country}" required  data-error="{$validator_lang.field_required}" />
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                         
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.state}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="province" value="{$clientsdetails.state}" required  data-error="{$validator_lang.field_required}" >
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.city}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="city" value="{$clientsdetails.city}" required  data-error="{$validator_lang.field_required}" >
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.company}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="company" value="{$clientsdetails.companyname}" required  data-error="{$validator_lang.field_required}" >
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.comp_divi}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="division" value="" id="comp_divi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.email}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="email" name="email" value="{$clientsdetails.email}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">{$lang.addfield.common}</label>
                                <div class="col-sm-8">
                                    <input class="form-control"type="text" name="name" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.key_size}</label>
                                <div class="col-sm-8">
                                    <select name="keysize" class="form-control">
                                        {foreach from=$lang.key_sizes key="key" item="item"}
                                            <option value="{$key}">{$item}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="change" value="request">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                            <button type="button" class="btn btn-primary" data-act="edit" data-refresh="1" data-rtable="csr-keys-table">{$lang.generate}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <!-- -------------------------------------- -->
        <!-- MODAL: GENERATE OWN Singed CERTIFICATE -->
        <!-- -------------------------------------- -->
        <div id="ssl-generate" class="modal fade">
            <form class="form-horizontal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{$lang.crt_generate}</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.select_key_domain}</label>
                                <div class="col-sm-8">
                                    <select name="domain" class="form-control" pattern="{$patterns.simple_domain}" required=""  data-error="{$validator_lang.invalid}" >
                                        <option value="">{$lang.fields.select_domain}</option>
                                        {foreach from=$domainList item=value}  
                                            <option value="{$value}">{$value}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                              
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.addfield.country}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="country" value="{$clientsdetails.country}" required  data-error="{$validator_lang.field_required}" />
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                           
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.state}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="province" value="{$clientsdetails.state}" required  data-error="{$validator_lang.field_required}" >
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                           
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.city}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="city" value="{$clientsdetails.city}" required  data-error="{$validator_lang.field_required}" >
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                           
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.company}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="company" value="{$clientsdetails.companyname}" required  data-error="{$validator_lang.field_required}" >
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                           
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.comp_divi}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="division" value="" id="comp_divi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">{$lang.addfield.common}</label>
                                <div class="col-sm-8">
                                    <input class="form-control"type="text" name="name" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">{$lang.fields.email}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="email" name="email" value="{$clientsdetails.email}">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">{$lang.fields.key_size}</label>
                            <div class="col-sm-8">
                                <select name="keysize" class="form-control">
                                    {foreach from=$lang.key_sizes key="key" item="item"}
                                        <option value="{$key}">{$item}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="change" value="self">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                            <button type="button" class="btn btn-primary" data-act="edit" data-refresh="1"  data-rtable="ssl-certificates-table">{$lang.generate}</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </form>
        </div><!-- /.modal -->

        
        <!-- -------------------------------------- -->
        <!-- MODAL: PASTE PRE-GENEATED CERTIFICATE -->
        <!-- -------------------------------------- -->        
        <div id="ssl-upload" class="modal fade">
            <form class="form-horizontal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{$lang.crt_upload}</h4>
                        </div>
                        <div class="modal-body">
                                <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.select_key_domain}</label>
                                <div class="col-sm-9">
                                    <select name="domain" class="form-control"  >
                                        <option value="">{$lang.fields.select_domain}</option>
                                        {foreach from=$domainList item=value}  
                                            <option value="{$value}">{$value}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-md-9 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                              
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.pasteCrt}</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="" name="newCert" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.pasteKey}</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="" name="newKey" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="change" value="paste">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                            <button type="button" class="btn btn-primary" data-act="edit" data-rtable="ssl-certificates-table">{$lang.upload}</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </form>
        </div><!-- /.modal -->

        <!-- ------------------ -->
        <!-- MODAL: LETSENCRYPT -->
        <!-- ------------------ -->
        <div id="letsencrypt" class="modal fade">
            <form class="form-horizontal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{$lang.letsencrypt}</h4>
                            <div style="word-break:normal;" class="modal-description">{$lang.letsencryptdesc}</div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.select_domain}</label>
                                <div class="col-sm-9">
                                    <select name="domain" id="encryptdomain"  onchange="swichAddonDomainGroup($(this))" class="form-control" data-copy-to="key-upload-domain">
                                        <option value="">{$lang.fields.select_domain}</option>
                                        {foreach from=$domainList item=value}  
                                            <option value="{$value}">{$value}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
{*                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.paste_key}</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" name="keyArea" required  data-error="{$validator_lang.field_required}"></textarea>
                                </div>
                                <div class="col-md-8 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                            
                            </div>*}
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.common}</label>
                                <div class="col-sm-9">
                                    <input class="form-control"type="text" name="name" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.email}</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="email" name="email" value="{$clientsdetails.email}">
                                </div>
                            </div>                        
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.key_size}</label>
                                <div class="col-sm-9">
                                    <select name="keysize" class="form-control">
                                        {foreach from=$lang.key_sizes key="key" item="item"}
                                            <option value="{$key}">{$item}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.encryption}</label>
                                <div class="col-sm-9">
                                    <select name="encryption" class="form-control">
                                        {foreach from=$lang.fields.encryption_types key="key" item="item"}
                                            <option value="{$key}">{$item}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.selectedentries}</label>
                                <div class="col-sm-9">
                                    
                                    <table class="table borderless encryptentries">
                                        <thead>
                                        <tr>
                                            <th>{$lang.entries}</th>
                                            <th>{$lang.select}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                <tr class="group-emptygr" ><td colspan="2">{$lang.emptyentries}</td></tr>
                                            {foreach from=$subDomainList key="addondom" item="addondomains"}
                                                {foreach from=$addondomains key="key" item="subdomain"}
                                                    <tr class="group-{$addondom}" >
                                                        <td> 
                                                            {$subdomain}       
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" class="" name="entries[{$addondom}][{$subdomain}]">
                                                        </td>
                                                    </tr>
                                                {/foreach}
                                            {/foreach}
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="change" value="letsencrypt">
                            <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                            <button type="button" class="btn btn-primary" data-act="edit" data-refresh="">{$lang.encrypt}</button> 
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </form>
        </div><!-- /.modal -->


        {confirm_modal btn='data-act="key_delete" data-refresh="1"' id="delete-key-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_key_confirmation_body`<input type='hidden' name='host'/>"} {*data-rtable="private-keys-table"*}
        {confirm_modal btn='data-act="csr_delete" data-rtable="csr-keys-table"' id="delete-csr-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_csr_confirmation_body`<input type='hidden' name='host'/>"}
        {confirm_modal btn='data-act="crt_delete" data-rtable="ssl-certificates-table"' id="delete-crt-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_crt_confirmation_body`<input type='hidden' name='host'/>"}

        <div class="modal fade modal-large" id="installssl">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                        <h4 class="modal-title">{$lang.crt_install}</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.fields.select_key_domain}</label>
                                <div class="col-sm-9" id="installssl-domain">
                                    <div class="form-fluid">
                                        <div class="fluid-100">
                                            <select name="domain" class="form-control">
                                                <option value="">{$lang.fields.select_domain}</option>
                                                {foreach from=$listDomains item=value}  
                                                    <option value="{$value}">{$value}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                        <div class="fluid-0">
                                            <a class="btn btn-default ml-10" data-act="installssl_data" data-formid="installssl-domain" data-dont-close-modal="1">{$lang.autofill_by_domain}</a>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.certificate_crt}</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="6" name="crt" required  data-error="{$validator_lang.field_required}" ></textarea>
                                </div>
                                <div class="col-md-9 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                              
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.private_key_key}</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="6" name="key" required  data-error="{$validator_lang.field_required}" ></textarea>
                                </div>
                                <div class="col-md-9 col-md-offset-3">
                                    <div class="help-block with-errors"></div>
                                </div>                              
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">{$lang.certificate_authority_bundle_cabundle}</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="6" name="cabundle"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                        <button type="button" class="btn btn-primary" data-act="installssl" data-validate="1">{$lang.install_ssl}</button>
                    </div>
                </div>
            </div>
        </div>

        <div  id="show-csr-modal" class="modal fade modal-large">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                        <h4 class="modal-title">{$domain}</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label  id='certlabel'  class="control-label col-sm-3">{$lang.content_ssl}</label>
                                <label id='keylabel' class="control-label col-sm-3">{$lang.keylbl}</label>
                                <div class="col-sm-9">
                                    <textarea  class="form-control" rows="6"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                    </div>
                </div>
            </div>
        </div>         

        {literal}
            <script>
                function setInstallSSLData(data) {
                    jQuery('#installssl textarea[name="crt"]').val(data.crt);
                    jQuery('#installssl textarea[name="key"]').val(data.key);
                }

                (function (jQuery) {
                    //   refreshTable('csr-keys-table');
                    refreshTable('private-keys-table');
                    refreshTable('ssl-certificates-table');

                })(jQuery);


                function openCertModal(selector, btn, type) {

                    $(selector).find('label.control-label').hide();
                    $(selector).find( '#' + type + 'label').show();

                    var value = btn.parent().find('textarea').text();
                    $(selector).find('textarea.form-control').text(value);
                }
                
                jQuery(document).ready(function(){
                    swichAddonDomainGroup($('#encryptdomain'));
                });
                
                
                function swichAddonDomainGroup(select){
                    var groupname = select.val().replace(/[.]/g, '\\.');
                    
//                    if(groupname == '')
 //                   {
 //                       $('.encryptentries').hide();
 //                   } else
 //                   {
 //                       $('.encryptentries').show();
 //                   }
                    
                    $('.encryptentries tbody tr').hide();
                    var group = $('.group-' + groupname)
                    if(group.length > 0)
                    {
                        group.show();
                    }
                    else
                    {
                        $('.group-emptygr').show();
                    }
                }
                
            </script>
        {/literal}

        
{*  there is if/else  construction,  after 'else' there is an old view     *}
        
    {else}


        <div class="module-header">
            <i class="icon-header icon-ssl"></i>
            <h1>{$lang.main_header}</h1>
            <p>{$lang.main_hint}</p>
        </div>
        <div class="module-body">
            <div class="section">
                <h4>{$lang.current_ssl}</h4>
                <div class="well">
                    {if !($myvars.server == 'yes' || $myvars.server =='no')}
                        <div class="alert alert-info" role="alert">{$lang.iperror}</div>
                    {/if}
                    <form class="form-horizontal">
                        <div class="form-group" id="set_ssl_status">
                            <label class="col-sm-3 control-label">{$lang.sslStatusLbl}</label>
                            <div class="col-sm-3">
                                <select name="sslStatus" class="form-control">
                                    <option value="on">{$lang.sslStatus.yes}</option>
                                    <option value="off">{$lang.sslStatus.no}</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <a class="btn btn-success" data-act="sslStatus" data-formid="set_ssl_status">{$lang.changeButton}</a>
                            </div>    
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{$lang.current_status}</label>
                            <div class="col-sm-6">
                                {if $myvars.server == 'yes'}
                                    <input class="form-control" type="text" disabled="disabled" value="{$lang.useSSl.yes}" />
                                {elseif $myvars.server == 'no'}
                                    <input class="form-control" type="text" disabled="disabled" value="{$lang.useSSl.no}" />   
                                {else}
                                    <input class="form-control" type="text" disabled="disabled" value="" />   
                                {/if}
                            </div>
                        </div>
                        {if $myvars.certificate && $myvars.server == 'no'} 
                            <div class="form-group"><div class="col-sm-12"><textarea class="form-control" rows="24">{$myvars.certificate}</textarea></div></div>
                            <div class="form-group"><div class="col-sm-12"><textarea class="form-control" rows="24">{$myvars.key}</textarea></div></div>
                                {/if}
                    </form>
                </div>
            </div>

            <div class="section">
                <h4>{$lang.change_ssl}</h4>
                <div class="well">
                    <form class="form-horizontal" id="reqq-form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{$lang.changeLbl}</label>
                            <div class="col-sm-6">
                                <select name="change" id="changeDA" class="form-control">
                                    <option value="" onclick="jQuery('.hide-me-pls').hide();"> {$lang.change.info} </option>
                                    <option value="self" onclick="jQuery('.hide-me-pls').hide();
                                    jQuery('#self-or-request').show();"> {$lang.change.self} </option>
                                    <option value="request" onclick="jQuery('.hide-me-pls').hide();
                                    jQuery('#self-or-request').show();"> {$lang.change.request} </option>
                                    <option value="paste" onclick="jQuery('.hide-me-pls').hide();
                                    jQuery('#pre-generated').show();"> {$lang.change.paste} </option>
                                    <option value="server" onclick="jQuery('.hide-me-pls').hide();
                                    jQuery('#server-cert').show();"> {$lang.change.server} </option>
                                </select>
                            </div>
                        </div>
                        <div id="self-or-request" class="hide-me-pls" style="display: none;">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.country} -  {$lang.key_on_server}</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="country" value="{$value.country}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.state}</label>
                                <div class="col-sm-6">
                                    <input class="form-control"type="text" name="province" value="{$value.province}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.city}</label>
                                <div class="col-sm-6">
                                    <input class="form-control"type="text" name="city" value="{$value.city}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.company}</label>
                                <div class="col-sm-6">
                                    <input class="form-control"type="text" name="company" value="{$value.company}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.division}</label>
                                <div class="col-sm-6">
                                    <input class="form-control"type="text" name="division" value="{$value.division}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.common}</label>
                                <div class="col-sm-6">
                                    <input class="form-control"type="text" name="name" value=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.email}</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="texts" name="email" value="{$value.email}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.keyLbl} ll</label>
                                <div class="col-sm-6">
                                    <select name="keysize" class="form-control">
                                        {foreach from=$lang.addfield.key key="key" item="item"}
                                            <option value="{$key}">{$item}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <a class="btn btn-success" data-act="edit" data-formid="reqq-form" data-validate="1">{$lang.changeButton}</a>
                            </div>
                        </div>
                        <div id="pre-generated" class="hide-me-pls" style="display: none;">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.pasteCrt}</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="20" name="newCert" >{$value.newCert}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">{$lang.addfield.pasteKey}</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="20" name="newKey" >{$value.newKey}</textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <a class="btn btn-success" data-act="edit" data-formid="reqq-form" data-validate="1">{$lang.changeButton}</a>
                            </div>
                        </div>
                        <div id="server-cert" class="hide-me-pls" style="display: none;">
                            <div class="form-actions">
                                <a class="btn btn-success" data-act="edit" data-formid="reqq-form" data-validate="1">{$lang.changeButton}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="section">
                <h4>{$lang.add_ssl}</h4>
                <div class="well">
                    <form class="form-horizontal" id="ccertt">
                        <div class="form-group">
                            <label class="col-sm-5 control-label" style="text-align: left;">{$lang.useCaCert}</label>
                            <div class="col-sm-12">
                                <input type="checkbox" value="yes"  name="useCaCrt"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="text-align: left;">{$lang.caCert}</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="24" name="caCert">{$myvars.certificate}</textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <a class="btn btn-success" data-act="editCA" data-formid="ccertt" data-validate="1">{$lang.save_ssl}</a>
                        </div>
                    </form>
                </div>
            </div>           
        </div>

        {literal}
            <style type="text/css">
                textarea {
                    resize: vertical;
                }
            </style>
        {/literal}

    {/if}