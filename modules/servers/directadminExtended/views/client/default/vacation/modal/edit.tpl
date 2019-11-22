<div class="modal fade" id="edit-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                <h4 class="modal-title">{$lang.edit_label}</h4>
            </div>
            <div class="modal-body" style="overflow-y: visible;">
                <form class="form-horizontal">
                    <input type="hidden" name="user" value="{$user}"/>
                    <input type="hidden" name="domain" value="{$domain}"/>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">{$lang.vacation_account}</label>
                        <div class="col-sm-9 input-group">
                             <input class="form-control first" type="text" value="{$user}" disabled="" />
                             <span class="input-group-addon">@</span>
                             <input class="form-control first" type="text" value="{$domain}" disabled="" />
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">{$lang.vacation_message}</label>
                        <div class="col-sm-9">
                            <textarea name="text" class="form-control">{$text}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">{$lang.vacation_start}</label>
                        <div class="col-sm-5">
                            <input name="datestart" type="text" class="form-control" id="datetimepicker3" value="{$startday}/{$startmonth}/{$startyear}" required="" data-error="{$validator_lang.field_required}"/>
                        </div>
                        <div class="col-sm-4">
                            <select name="starttime" class="form-control" data-no-validate>
                            {foreach from=$dayparts item="daypart"}
                                <option value="{$daypart}" {if $daypart eq $starttime}selected=""{/if}>{$lang.$daypart}</option>
                            {/foreach}
                            </select>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                    </div>        
                    <div class="form-group">
                        <label class="col-sm-3 control-label">{$lang.vacation_end}</label>
                        <div class="col-sm-5">
                            <input name="dateend" type="text" class="form-control" id="datetimepicker4" value="{$endday}/{$endmonth}/{$endyear}" required="" data-error="{$validator_lang.field_required}"/>
                        </div>
                        <div class="col-sm-4">
                            <select name="endtime" class="form-control" data-no-validate>
                            {foreach from=$dayparts item="daypart"}
                                <option value="{$daypart}" {if $daypart eq $endtime}selected=""{/if}>{$lang.$daypart}</option>
                            {/foreach}
                            </select>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3 help-block with-errors"></div>
                    </div> 
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.cancel}</button>
                <button type="button" class="btn btn-primary" data-act="edit" data-rtable="emails-table"><span>{$lang.save}</span></button>
            </div>
        </div>
    </div>
</div>
            
{literal}
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'DD-MM-YYYY',
            });
            $('#datetimepicker4').datetimepicker({
                format: 'DD-MM-YYYY',
                useCurrent: false
            });

            $("#datetimepicker3").on("dp.change", function (e) {
                $('#datetimepicker4').data("DateTimePicker").minDate(e.date.add(1, 'days'));
            });
            $("#datetimepicker4").on("dp.change", function (e) {
                $('#datetimepicker3').data("DateTimePicker").maxDate(e.date.subtract(1, 'days'));
            });
        });
    </script>
{/literal}