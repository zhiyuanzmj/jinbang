<div class="module-header">
    <i class="icon-header icon-mailing-list"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    {if $view eq "main"}
    <div class="section">
        <h4>{$lang.add_mailing_list}</h4>
        <div class="well">
            <form class="form-horizontal" id="create-form"> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.list_name}</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" />
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="create" data-formid="create-form" data-validate="1" data-rtable="mailing-lists">{$lang.add_list_submit}</a>
                </div>
            </form>
        </div>
    </div>
                
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.mailing_lists}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="mailing-lists">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="mailing-lists">
            <thead>
                <tr>
                    <th>{$lang.mailing_list}</th>
                    <th>{$lang.subscribers}</th>
                    <th>{$lang.digest_subscribers}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    {literal}
        <script type="text/javascript">
            refreshTable('mailing-lists');
        </script>
    {/literal}
                    
    {confirm_modal btn='data-act="delete" data-rtable="mailing-lists"' id="delete-confirmation" title=$lang.delete_confirmation_label
        body="`$lang.delete_confirmation_text`<input type='hidden' name='name'/>"} 
        
    {elseif $view eq "view"}
        <div class="section">
            <div class="table-header">
                <div class="header-title">
                    <h4>{$lang.add_email_to_list}</h4>
                </div>
                <div class="header-actions">
                    <div class="header-search">
                        <a class="btn btn-primary" href="{$_burl}&page=mailinglists">{$lang.back}</a>
                    </div>
                </div>
            </div>
            <div class="well">
                <form class="form-horizontal" id="add-form"> 
                    <input type="hidden" name="name" value="{$smarty.get.name}" />
                    <div class="form-group">
                        <label class="col-sm-3 control-label">{$lang.email}</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" required="required" data-error="{$validator_lang.invalidemail}"/>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>  
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">{$lang.subscriber_type}</label>
                        <div class="col-sm-9">
                            <select name="type" class="form-control">
                                <option value="list" selected="">{$lang.add_to} {$smarty.get.name}</option>
                                <option value="digest">{$lang.add_to} {$smarty.get.name}-{$lang.digest}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <a class="btn btn-success" data-act="add" data-formid="add-form" data-validate="1" data-rtable="sub-lists">{$lang.add_email_submit}</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="section">
            <div class="table-header">
                <div class="header-title">
                    <h4>{$lang.subscribers_list}</h4>
                </div>
                <div class="header-actions">
                    <div class="header-search">
                        <div class="input-icon">
                            <i class="fa fa-search"></i>
                            <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="sub-lists">
                        </div>
                    </div>

                </div>
            </div>
            <table class="table" id="sub-lists">
                <thead>
                    <tr>
                        <th>{$lang.mailing_list}</th>
                        <th>{$lang.subscriber_type}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        {literal}
            <script type="text/javascript">
                refreshTable('sub-lists');
            </script>
        {/literal}

        {confirm_modal btn='data-act="delete" data-rtable="sub-lists"' id="delete-confirmation" title=$lang.delete_confirmation_label
            body="`$lang.delete_confirmation_text`<input type='hidden' name='daact'/><input type='hidden' name='sub'/>"} 
    {elseif $view eq "settings"}
        <div class="section">
            <div class="table-header">
                <div class="header-title">
                    <h4>{$lang.modify_mailing_list} {$smarty.get.name}@{$domain}</h4>
                </div>
                <div class="header-actions">
                    <div class="header-search">
                        <a class="btn btn-primary" href="{$_burl}&page=mailinglists">{$lang.back}</a>
                    </div>
                </div>
            </div>
                    
        <div class="well">
            <form class="form-horizontal" id="settings-form"> 
                <input type="hidden" name="name" value="{$smarty.get.name}" />
                
                <div class="row" style="margin-left: 30px;">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.admin_password}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[admin_passwd]" value="{$settings.admin_passwd}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.reply_to}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[reply_tod]" value="{$settings.reply_to}" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.approve_password}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[approve_passwd]" class="form-control" value="{$settings.approve_passwd}" />
                            </div>
                        </div>    
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.restrict_post}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[restrict_post]" class="form-control" value="{$settings.restrict_post}" />
                            </div>
                        </div>    
                    </div>
                </div>
                            
                <div class="row" style="margin-left: 30px;">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.digest_issue}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[digest_issue]" class="form-control" value="{$settings.digest_issue}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.digest_maxdays}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[digest_maxdays]" class="form-control" value="{$settings.digest_maxdays}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.precedence}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[precedence]" class="form-control" value="{$settings.precedence}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.subject_prefix}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[subject_prefix]" class="form-control" value="{$settings.subject_prefix}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.digest_volume}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[digest_volume]" class="form-control" value="{$settings.digest_volume}"/>
                            </div>
                        </div>    
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.digest_maxlines}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[digest_maxlines]" class="form-control" value="{$settings.digest_maxlines}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.moderator}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[moderator]" class="form-control" value="{$settings.moderator}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label">{$lang.maxlength}</label>
                            <div class="col-sm-7">
                                <input type="text" name="options[maxlength]" class="form-control" value="{$settings.maxlength}"/>
                            </div>
                        </div>
                    </div>
                </div>
                            
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.description}</label>
                    <div class="col-sm-9">
                        <input type="text" name="options[description]" class="form-control" value="{$settings.description}"/>
                    </div>
                </div>            
                            
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.taboo_body}</label>
                    <div class="col-sm-9">
                        <textarea name="options[taboo_body]" class="form-control">{$settings.taboo_body}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.taboo_headers}</label>
                    <div class="col-sm-9">
                        <textarea name="options[taboo_headers]" class="form-control">{$settings.taboo_headers}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.message_footer}</label>
                    <div class="col-sm-9">
                        <textarea name="options[message_footer]" class="form-control">{$settings.message_footer}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.message_fronter}</label>
                    <div class="col-sm-9">
                        <textarea name="options[message_fronter]" class="form-control">{$settings.message_fronter}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.message_headers}</label>
                    <div class="col-sm-9">
                        <textarea name="options[message_headers]" class="form-control">{$settings.message_headers}</textarea>
                    </div>
                </div>
                    
                <div class="form-actions">
                    <a class="btn btn-success" data-act="save" data-formid="settings-form">{$lang.save_settings}</a>
                </div>
            </form>
        </div>
    </div>

    {/if}
    
        
    {confirm_modal btn='data-act="delete_extension" data-rtable="emails-table"' id="delete-extension-confirmation" title=$lang.delete_extension_confirmation_label
        body="`$lang.delete_extension_confirmation_text`<input type='hidden' name='handler'/><input type='hidden' name='extension'/>"}
</div>
