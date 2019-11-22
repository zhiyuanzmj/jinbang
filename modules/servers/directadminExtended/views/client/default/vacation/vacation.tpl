<div class="module-header">
    <i class="icon-header icon-out-of-office"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.set_new_vacation_message}</h4>
        <div class="well">
            <form class="form-horizontal" id="email-form"> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.vacation_account}</label>
                    <div class="col-sm-9 input-group">
                        <select name="user" class="form-control first" id="idiknaszybko">
                        {foreach from=$users_list item="item"}  
                            <option value="{$item.user}" data-domain="{$item.domain|htmlspecialchars}" >{$item.user}</option>
                        {foreachelse}
                            <option value=""></option>
                        {/foreach}
                         </select>
                         <span class="input-group-addon">@</span>
                         <select name="domain" class="form-control last">
                             {foreach from=$domainlist item="domain" key="k"}
                                 <option onclick="jQuery('#idiknaszybko option').hide().removeAttr('selected'); jQuery('#idiknaszybko option[data-domain={$k}]').show().first().prop('selected',true);">{$domain}</option>
                             {/foreach}
                         </select> 
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.vacation_message}</label>
                    <div class="col-sm-9">
                        <textarea name="text" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.vacation_start}</label>
                    <div class="col-sm-5">
                        <input name="datestart" type="text" class="form-control" id="datetimepicker1" required="" data-error="{$validator_lang.field_required}"/>
                    </div>
                    <div class="col-sm-4">
                        <select name="starttime" class="form-control" data-no-validate>
                        {foreach from=$dayparts item="daypart"}
                            <option value="{$daypart}">{$lang.$daypart}</option>
                        {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                </div>        
                <div class="form-group">
                    <label class="col-sm-3 control-label">{$lang.vacation_end}</label>
                    <div class="col-sm-5">
                        <input name="dateend" type="text" class="form-control" id="datetimepicker2" required="" data-error="{$validator_lang.field_required}"/>
                    </div>
                    <div class="col-sm-4">
                        <select name="endtime" class="form-control" data-no-validate>
                        {foreach from=$dayparts item="daypart"}
                            <option value="{$daypart}">{$lang.$daypart}</option>
                        {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
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
                <h4>{$lang.vacations_list}</h4>
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
                    <th>{$lang.vacation_account}</th>
                    <th>{$lang.start_time}</th>
                    <th>{$lang.end_time}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
     
    {confirm_modal btn='data-act="delete" data-rtable="emails-table"' id="delete-confirmation" title=$lang.delete_confirmation_label
        body="`$lang.delete_confirmation_text`<input type='hidden' name='user'/><input type='hidden' name='domain'/>"}
        
</div>        
        
{literal}
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                format: 'DD-MM-YYYY',
            });
            $('#datetimepicker2').datetimepicker({
                format: 'DD-MM-YYYY',
                useCurrent: false
            });

            $("#datetimepicker1").on("dp.change", function (e) {
                $('#datetimepicker2').data("DateTimePicker").minDate(e.date.add(1, 'days'));
            });
            $("#datetimepicker2").on("dp.change", function (e) {
                $('#datetimepicker1').data("DateTimePicker").maxDate(e.date.subtract(1, 'days'));
            });
        });
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
