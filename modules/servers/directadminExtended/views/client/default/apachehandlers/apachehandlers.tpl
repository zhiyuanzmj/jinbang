<div class="module-header">
    <i class="icon-header icon-apache-handlers"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.create_new_filter}</h4>
        <div class="well">
            <form class="form-horizontal" id="email-form"> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.handler}</label>
                    <div class="col-sm-9">
                        <input type="text" name="handler" class="form-control" />
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.extension}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="extension">
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
                <h4>{$lang.handlers_list}</h4>
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
        <table class="table" id="emails-table">
            <thead>
                <tr>
                    <th>{$lang.handler}</th>
                    <th>{$lang.extensions}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
     
    {confirm_modal btn='data-act="delete" data-rtable="emails-table"' id="delete-confirmation" title=$lang.delete_confirmation_label
        body="`$lang.delete_confirmation_text`<input type='hidden' name='handler'/>"}
        
    {confirm_modal btn='data-act="delete_extension" data-rtable="emails-table"' id="delete-extension-confirmation" title=$lang.delete_extension_confirmation_label
        body="`$lang.delete_extension_confirmation_text`<input type='hidden' name='handler'/><input type='hidden' name='extension'/>"}
</div>

{literal}
    <script>
        refreshTable('emails-table');
    </script>
    <style>
        .remove-label {
            margin-bottom: 2px;
            margin-top: 2px;
            margin-right: 5px;
            padding: 1px 3px 2px;
            background-color: #BFBFBF;
            font-size: 10px;
            font-weight: normal;
            color: #FFF;
            text-transform: uppercase;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
{/literal}
