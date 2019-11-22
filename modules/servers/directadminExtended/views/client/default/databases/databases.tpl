<div class="module-header">
     <i class="icon-header icon-databases"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.add_header}</h4>
        <div class="well">
            <form class="form-horizontal" id="add-db-form">
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.new_db_label}</label>
                    <div class="col-sm-9 input-group">
                        <span class="input-group-addon first">{$username}_</span>
                        <input class="form-control last" type="text" name="dbname" pattern="^[a-zA-Z0-9-]{$_O}1,{$_C}$" maxlength="{$db_len}" required data-error="{$lang.field_required}">
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors">
                        <span class="help-block"> {$lang.up_to} {$db_len} {$lang.letters_numbers_and_dashes}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_user_label_username}</label>
                    <div class="col-sm-9 input-group">
                        <span class="input-group-addon first">{$username}_</span>
                        <input class="form-control last" type="text" name="username" pattern="^[a-zA-Z0-9-]{$_O}1,{$_C}$" required  data-error="{$lang.field_required}">
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_user_label_password}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" id="password5" name="password" type="password" data-minlength="5" required  data-error="{$lang.field_required}"/>
                                <div class="help-block">{$validator_lang.min_5_chars}</div>
                            </div>
                            <div class="col-sm-6">
                            </div>
                        </div>   
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_user_label_password2}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input id="password6" class="form-control" name="password2" type="password" data-match="#password5" data-error="{$validator_lang.field_required}" data-match-error="{$validator_lang.field_not_match}" placeholder="Confirm" required />
                                <div class="help-block"></div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>       
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.strength}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-xs-6">
                                <div id="pwstrengthbox" class="">{$validator_lang.very_weak}</div>
                            </div>
                            <div class="col-xs-6">
                                <button type="button" class="btn btn-sm btn-default" id="generate-pwd2" data-genpwd="password5,password6,pwstrengthbox"><i class="fa fa-key"></i><span class="hide-sm">{$lang.generate_password}</span></button>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="adddb" data-formid="add-db-form" data-validate="1" data-refresh="">{$lang.new_db_submit_text}</a> {* data-rtable="current-databases-table"*}
                </div>
            </form>
        </div>
    </div>
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.current_db_header}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="current-databases-table">
                    </div>
                </div>
            </div>
        </div>
        <table class="table" id="current-databases-table">
            <thead>
                <tr>
                    <th>{$lang.current_db_head_db}</th>
                    <th>{$lang.current_db_head_users}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="section">
        <h4>{$lang.add_user_header}</h4>
        <div class="well">
            <form class="form-horizontal" id="add-user-form">
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_userdb_label_database}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <select name="dbname" class="form-control">
                                    {foreach from=$dblist item="db"}
                                        <option>{$db|htmlspecialchars}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_user_label_username}</label>
                    <div class="col-sm-9 input-group">
                        <span class="input-group-addon first">{$username}_</span>
                        <input class="form-control last" type="text" name="username" pattern="^[a-zA-Z0-9-]{$_O}1,{$_C}$" required data-error="{$validator_lang.field_required}" />
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_user_label_password}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" id="password" name="password" type="password" data-minlength="5" required data-error="{$validator_lang.field_required}"/>
                                <div class="help-block">{$validator_lang.min_5_chars}</div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>   
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.add_user_label_password2}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input id="password2" class="form-control" name="password2" type="password" data-match="#password" data-error="{$validator_lang.field_required}" data-match-error="{$validator_lang.field_not_match}" placeholder="Confirm" required/>
                                <div class="help-block"></div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>       
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.strength}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-xs-6">
                                <div id="pwstrengthbox" class="">{$validator_lang.very_weak}</div>
                            </div>
                            <div class="col-xs-6">
                                <button type="button" class="btn btn-sm btn-default" id="generate-pwd" data-genpwd="password,password2,pwstrengthbox"><i class="fa fa-key"></i><span class="hide-sm">{$lang.generate_password}</span></button>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="form-actions">
                    <a class="btn btn-success" data-act="adduser" data-formid="add-user-form" data-validate="1" data-refresh="">{$lang.add_user_submit_text}</a>{*"data-rtable="users-table"*}
                </div>
            </form>
        </div>
    </div>
                
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.current_users_header}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="users-table">
                    </div>
                </div>
            </div>
        </div>
        <table class="table" id="users-table">
            <thead>
                <tr>
                    <th>{$lang.current_users_head_users}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td class="cell-actions">
                        <a href="#" class="btn btn-icon" data-toggle="tooltip" title="" data-original-title="Remove"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
                    
    {confirm_modal btn='data-act="deldb" data-refresh=""' id="delete-database-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_confirmation_body`<input type='hidden' name='dbname'/>"}
    {confirm_modal btn='data-act="deleteuser" data-refresh=""' id="delete-user-modal" title=$lang.delete_confirmation_title
        body="`$lang.delete_confirmation_body`<input type='hidden' name='dbname'/><input type='hidden' name='dbuser'/>"}

</div>

{literal}
    <script>
        refreshTable('current-databases-table');
        refreshTable('users-table');
    </script>
{/literal}