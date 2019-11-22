<div class="module-header">
     <i class="icon-header icon-cron"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="alert alert-warning">
    {$lang.main_hint3}
</div>
<div class="module-body">
    <div class="section">
        <div style="display: inline-flex;"><h4>{$lang.add_header}</h4>{if $template_six_style}
            <button class="show-sm btn btn-icon show-hint" data-toggle="tooltip" title="{$lang.main_hint}" type="button"> 
            <i class="glyphicon glyphicon-question-sign"></i> 
            </button>{/if}</div>
        <div class="well">
            <form class="form-horizontal" id="cron-form">
                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.common_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <select class="form-control add_job_common_select" data-no-validate>
                                    <option value="--">-- {$lang.common_label1} --</option>
                                    <option value="* * * * *">{$lang.common_label2} (* * * * *)</option>
                                    <option value="*/5 * * * *">{$lang.common_label3} (*/5 * * * *)</option>
                                    <option value="0,30 * * * *">{$lang.common_label4} (0,30 * * * *)</option>
                                    <option value="0 * * * *">{$lang.common_label5} (0 * * * *)</option>
                                    <option value="0 0,12 * * *">{$lang.common_label6} (0 0,12 * * *)</option>
                                    <option value="0 0 * * *">{$lang.common_label7} (0 0 * * *)</option>
                                    <option value="0 0 * * 0">{$lang.common_label8} (0 0 * * 0)</option>
                                    <option value="0 0 1,15 * *">{$lang.common_label9} (0 0 1,15 * *)</option>
                                    <option value="0 0 1 * *">{$lang.common_label10} (0 0 1 * *)</option>
                                    <option value="0 0 1 1 *">{$lang.common_label11} (0 0 1 1 *)</option>  
                                </select>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.min_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-fluid">
                                    <div class="fluid-0 pr-10">
                                        <input class="form-control" name="minute" type="text" required="" data-error="{$validator_lang.field_required}" >
                                    </div>
                                    <div class="fluid-100">
                                        <select class="form-control" data-no-validate data-input-target="minute">
                                            <option value="--">-- {$lang.min_label1} --</option>
                                            <option value="*">{$lang.min_label2} (*)</option>
                                            <option value="*/2">{$lang.min_label3} (*/2)</option>
                                            <option value="*/5">{$lang.min_label4} (*/5)</option>
                                            <option value="*/10">{$lang.min_label5} (*/10)</option>
                                            <option value="*/15">{$lang.min_label6} (*/15)</option>
                                            <option value="0,30">{$lang.min_label7} (0,30)</option>

                                            <option value="--">-- {$lang.min_label8} --</option>
                                            <option value="0">:00 {$lang.min_label9} (0)</option>
                                            <option value="1">:01 (1)</option>
                                            <option value="2">:02 (2)</option>
                                            <option value="3">:03 (3)</option>
                                            <option value="4">:04 (4)</option>
                                            <option value="5">:05 (5)</option>
                                            <option value="6">:06 (6)</option>
                                            <option value="7">:07 (7)</option>
                                            <option value="8">:08 (8)</option>
                                            <option value="9">:09 (9)</option>
                                            <option value="10">:10 (10)</option>
                                            <option value="11">:11 (11)</option>
                                            <option value="12">:12 (12)</option>
                                            <option value="13">:13 (13)</option>
                                            <option value="14">:14 (14)</option>
                                            <option value="15">:15 {$lang.min_label10} (15)</option>
                                            <option value="16">:16 (16)</option>
                                            <option value="17">:17 (17)</option>
                                            <option value="18">:18 (18)</option>
                                            <option value="19">:19 (19)</option>
                                            <option value="20">:20 (20)</option>
                                            <option value="21">:21 (21)</option>
                                            <option value="22">:22 (22)</option>
                                            <option value="23">:23 (23)</option>
                                            <option value="24">:24 (24)</option>
                                            <option value="25">:25 (25)</option>
                                            <option value="26">:26 (26)</option>
                                            <option value="27">:27 (27)</option>
                                            <option value="28">:28 (28)</option>
                                            <option value="29">:29 (29)</option>
                                            <option value="30">:30 {$lang.min_label11} (30)</option>
                                            <option value="31">:31 (31)</option>
                                            <option value="32">:32 (32)</option>
                                            <option value="33">:33 (33)</option>
                                            <option value="34">:34 (34)</option>
                                            <option value="35">:35 (35)</option>
                                            <option value="36">:36 (36)</option>
                                            <option value="37">:37 (37)</option>
                                            <option value="38">:38 (38)</option>
                                            <option value="39">:39 (39)</option>
                                            <option value="40">:40 (40)</option>
                                            <option value="41">:41 (41)</option>
                                            <option value="42">:42 (42)</option>
                                            <option value="43">:43 (43)</option>
                                            <option value="44">:44 (44)</option>
                                            <option value="45">:45 {$lang.min_label12} (45)</option>
                                            <option value="46">:46 (46)</option>
                                            <option value="47">:47 (47)</option>
                                            <option value="48">:48 (48)</option>
                                            <option value="49">:49 (49)</option>
                                            <option value="50">:50 (50)</option>
                                            <option value="51">:51 (51)</option>
                                            <option value="52">:52 (52)</option>
                                            <option value="53">:53 (53)</option>
                                            <option value="54">:54 (54)</option>
                                            <option value="55">:55 (55)</option>
                                            <option value="56">:56 (56)</option>
                                            <option value="57">:57 (57)</option>
                                            <option value="58">:58 (58)</option>
                                            <option value="59">:59 (59)</option>
                                    </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>                                             
                </div>

                 <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.hour_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-fluid">
                                    <div class="fluid-0 pr-10">
                                        <input class="form-control" name="hour" type="text" required="" data-error="{$validator_lang.field_required}">
                                    </div>
                                    <div class="fluid-100">
                                        <select id="add_job_hour_select" class="form-control" data-no-validate data-input-target="hour" >
                                            <option value="--">-- {$lang.hour_label1} --</option>
                                            <option value="*">{$lang.hour_labe2} (*)</option>
                                            <option value="*/2">{$lang.hour_labe3} (*/2)</option>
                                            <option value="*/3">{$lang.hour_labe4} (*/3)</option>
                                            <option value="*/4">{$lang.hour_labe5} (*/4)</option>
                                            <option value="*/6">{$lang.hour_labe6} (*/6)</option>
                                            <option value="0,12">{$lang.hour_labe7} (0,12)</option>

                                            <option value="--">-- {$lang.hour_label8} --</option>
                                            <option value="0">{$lang.hour_label9}</option>
                                            <option value="1">1:00 {$lang.hour_label11} (1)</option>
                                            <option value="2">2:00 {$lang.hour_label11} (2)</option>
                                            <option value="3">3:00 {$lang.hour_label11} (3)</option>
                                            <option value="4">4:00 {$lang.hour_label11} (4)</option>
                                            <option value="5">5:00 {$lang.hour_label11} (5)</option>

                                            <option value="6">6:00 {$lang.hour_label11} (6)</option>
                                            <option value="7">7:00 {$lang.hour_label11} (7)</option>
                                            <option value="8">8:00 {$lang.hour_label11} (8)</option>
                                            <option value="9">9:00 {$lang.hour_label11} (9)</option>
                                            <option value="10">10:00 {$lang.hour_label11} (10)</option>
                                            <option value="11">11:00 {$lang.hour_label11} (11)</option>

                                            <option value="12">{$lang.hour_label10}</option>
                                            <option value="13">1:00 {$lang.hour_label12} (13)</option>
                                            <option value="14">2:00 {$lang.hour_label12} (14)</option>
                                            <option value="15">3:00 {$lang.hour_label12} (15)</option>
                                            <option value="16">4:00 {$lang.hour_label12} (16)</option>
                                            <option value="17">5:00 {$lang.hour_label12} (17)</option>

                                            <option value="18">6:00 {$lang.hour_label12} (18)</option>
                                            <option value="19">7:00 {$lang.hour_label12} (19)</option>
                                            <option value="20">8:00 {$lang.hour_label12} (20)</option>
                                            <option value="21">9:00 {$lang.hour_label12} (21)</option>
                                            <option value="22">10:00 {$lang.hour_label12} (22)</option>
                                            <option value="23">11:00 {$lang.hour_label12} (23)</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>                                          
                </div>

                 <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.day_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-fluid">
                                    <div class="fluid-0 pr-10">
                                        <input class="form-control" name="day" type="text" required="" data-error="{$validator_lang.field_required}">
                                    </div>
                                    <div class="fluid-100">
                                        <select id="add_job_day_select" class="form-control" data-no-validate data-input-target="day"> 
                                            <option value="--">-- {$lang.day_label1} --</option>
                                            <option value="*">{$lang.day_label2} (*)</option>
                                            <option value="*/2">{$lang.day_label3} (*/2)</option>
                                            <option value="1,15">{$lang.day_label4} (1,15)</option>
                                            <option value="--">-- {$lang.day_label5} --</option>

                                            <option value="1">{$lang.day_label6}</option>
                                            <option value="2">{$lang.day_label7}</option>
                                            <option value="3">{$lang.day_label8}</option>
                                            <option value="4">{$lang.day_label9}</option>
                                            <option value="5">{$lang.day_label10}</option>
                                            <option value="6">{$lang.day_label11}</option>

                                            <option value="7">{$lang.day_label12}</option>
                                            <option value="8">{$lang.day_label13}</option>
                                            <option value="9">{$lang.day_label14}</option>
                                            <option value="10">{$lang.day_label15}</option>
                                            <option value="11">{$lang.day_label16}</option>
                                            <option value="12">{$lang.day_label17}</option>

                                            <option value="13">{$lang.day_label18}</option>
                                            <option value="14">{$lang.day_label19}</option>
                                            <option value="15">{$lang.day_label20}</option>
                                            <option value="16">{$lang.day_label21}</option>
                                            <option value="17">{$lang.day_label22}</option>
                                            <option value="18">{$lang.day_label23}</option>

                                            <option value="19">{$lang.day_label24}</option>
                                            <option value="20">{$lang.day_label25}</option>
                                            <option value="21">{$lang.day_label26}</option>
                                            <option value="22">{$lang.day_label27}</option>
                                            <option value="23">{$lang.day_label28}</option>
                                            <option value="24">{$lang.day_label29}</option>

                                            <option value="25">{$lang.day_label30}</option>
                                            <option value="26">{$lang.day_label31}</option>
                                            <option value="27">{$lang.day_label32}</option>
                                            <option value="28">{$lang.day_label33}</option>
                                            <option value="29">{$lang.day_label34}</option>
                                            <option value="30">{$lang.day_label35}</option>

                                            <option value="31">{$lang.day_label36}</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>                                          
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.month_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-fluid">
                                    <div class="fluid-0 pr-10">
                                        <input class="form-control" type="text" name="month" required="" data-error="{$validator_lang.field_required}">
                                    </div>
                                    <div class="fluid-100">
                                        <select id="add_job_month_select" class="form-control" data-no-validate data-input-target="month">
                                            <option value="--">-- {$lang.month_label1} --</option>
                                            <option value="*">{$lang.month_label2} (*)</option>
                                            <option value="*/2">{$lang.month_label3} (*/2)</option>
                                            <option value="*/4">{$lang.month_label4} (*/4)</option>
                                            <option value="1,7">{$lang.month_label5} (1,7)</option>

                                            <option value="--">-- {$lang.month_label6} --</option>
                                            <option value="1">{$lang.month_label7} (1)</option>
                                            <option value="2">{$lang.month_label8} (2)</option>
                                            <option value="3">{$lang.month_label9} (3)</option>
                                            <option value="4">{$lang.month_label10} (4)</option>
                                            <option value="5">{$lang.month_label11} (5)</option>

                                            <option value="6">{$lang.month_label12} (6)</option>
                                            <option value="7">{$lang.month_label13} (7)</option>
                                            <option value="8">{$lang.month_label14} (8)</option>
                                            <option value="9">{$lang.month_label15} (9)</option>
                                            <option value="10">{$lang.month_label16} (10)</option>
                                            <option value="11">{$lang.month_label17} (11)</option>

                                            <option value="12">{$lang.month_label18} (12)</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>                                          
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.weekday_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-fluid">
                                    <div class="fluid-0 pr-10">
                                        <input class="form-control" type="text" name="weekday" required="" data-error="{$validator_lang.field_required}">
                                    </div>
                                    <div class="fluid-100">
                                        <select id="add_job_weekday_select" class="form-control" data-no-validate data-input-target="weekday">
                                            <option value="--">-- {$lang.weekday_label1} --</option>
                                            <option value="*">{$lang.weekday_label2} (*)</option>
                                            <option value="1-5">{$lang.weekday_label3} (1-5)</option>
                                            <option value="0,6">{$lang.weekday_label4} (6,0)</option>
                                            <option value="1,3,5">{$lang.weekday_label5} (1,3,5)</option>

                                            <option value="2,4">{$lang.weekday_label6} (2,4)</option>
                                            <option value="--">-- {$lang.weekday_label7} --</option>
                                            <option value="0">{$lang.weekday_label8} (0)</option>
                                            <option value="1">{$lang.weekday_label9} (1)</option>
                                            <option value="2">{$lang.weekday_label10} (2)</option>
                                            <option value="3">{$lang.weekday_label11} (3)</option>

                                            <option value="4">{$lang.weekday_label12} (4)</option>
                                            <option value="5">{$lang.weekday_label13} (5)</option>
                                            <option value="6">{$lang.weekday_label14} (6)</option>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>                                          
                </div>

                  <div class="form-group">
                    <label class="control-label col-sm-3">{$lang.command_label}</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="command" required="" value="/home/{$username}/" data-error="{$validator_lang.field_required}">
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-md-offset-3">
                        <div class="help-block with-errors"></div>
                    </div>                              
                </div>

                <div class="form-actions">
                    <a class="btn btn-success" data-act="addnewjob" data-formid="cron-form" data-validate="1" data-rtable="cron-table">{$lang.add_submit_text}</a>
                </div>
            </form>
        </div>
    </div>
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.current_header}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="cron-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="cron-table">
            <thead>
                <tr>
                    {*<th></th>*}
                    <th>{$lang.current_tblheader_minute}</th>
                    <th>{$lang.current_tblheader_hour}</th>
                    <th>{$lang.current_tblheader_day}</th>
                    <th>{$lang.current_tblheader_month}</th>
                    <th>{$lang.current_tblheader_weekday}</th>
                    <th>{$lang.current_tblheader_command}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
           
<div class="modal fade" id="edit-job-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{$lang.close}</span></button>
                <h4 class="modal-title">{$lang.edit_cron}</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="line" value="" />
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.common_label}</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <select class="form-control add_job_common_select" data-no-validate>
                                        <option value="--">-- {$lang.common_label1} --</option>
                                        <option value="* * * * *">{$lang.common_label2} (* * * * *)</option>
                                        <option value="*/5 * * * *">{$lang.common_label3} (*/5 * * * *)</option>
                                        <option value="0,30 * * * *">{$lang.common_label4} (0,30 * * * *)</option>
                                        <option value="0 * * * *">{$lang.common_label5} (0 * * * *)</option>
                                        <option value="0 0,12 * * *">{$lang.common_label6} (0 0,12 * * *)</option>
                                        <option value="0 0 * * *">{$lang.common_label7} (0 0 * * *)</option>
                                        <option value="0 0 * * 0">{$lang.common_label8} (0 0 * * 0)</option>
                                        <option value="0 0 1,15 * *">{$lang.common_label9} (0 0 1,15 * *)</option>
                                        <option value="0 0 1 * *">{$lang.common_label10} (0 0 1 * *)</option>
                                        <option value="0 0 1 1 *">{$lang.common_label11} (0 0 1 1 *)</option>  
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.min_label}</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-fluid">
                                        <div class="fluid-0 pr-10">
                                            <input class="form-control" name="minute" type="text" required="" data-error="{$validator_lang.field_required}">
                                        </div>
                                        <div class="fluid-100">
                                            <select class="form-control" data-no-validate data-input-target="minute">
                                                <option value="--">-- {$lang.min_label1} --</option>
                                                <option value="*">{$lang.min_label2} (*)</option>
                                                <option value="*/2">{$lang.min_label3} (*/2)</option>
                                                <option value="*/5">{$lang.min_label4} (*/5)</option>
                                                <option value="*/10">{$lang.min_label5} (*/10)</option>
                                                <option value="*/15">{$lang.min_label6} (*/15)</option>
                                                <option value="0,30">{$lang.min_label7} (0,30)</option>

                                                <option value="--">-- {$lang.min_label8} --</option>
                                                <option value="0">:00 {$lang.min_label9} (0)</option>
                                                <option value="1">:01 (1)</option>
                                                <option value="2">:02 (2)</option>
                                                <option value="3">:03 (3)</option>
                                                <option value="4">:04 (4)</option>
                                                <option value="5">:05 (5)</option>
                                                <option value="6">:06 (6)</option>
                                                <option value="7">:07 (7)</option>
                                                <option value="8">:08 (8)</option>
                                                <option value="9">:09 (9)</option>
                                                <option value="10">:10 (10)</option>
                                                <option value="11">:11 (11)</option>
                                                <option value="12">:12 (12)</option>
                                                <option value="13">:13 (13)</option>
                                                <option value="14">:14 (14)</option>
                                                <option value="15">:15 {$lang.min_label10} (15)</option>
                                                <option value="16">:16 (16)</option>
                                                <option value="17">:17 (17)</option>
                                                <option value="18">:18 (18)</option>
                                                <option value="19">:19 (19)</option>
                                                <option value="20">:20 (20)</option>
                                                <option value="21">:21 (21)</option>
                                                <option value="22">:22 (22)</option>
                                                <option value="23">:23 (23)</option>
                                                <option value="24">:24 (24)</option>
                                                <option value="25">:25 (25)</option>
                                                <option value="26">:26 (26)</option>
                                                <option value="27">:27 (27)</option>
                                                <option value="28">:28 (28)</option>
                                                <option value="29">:29 (29)</option>
                                                <option value="30">:30 {$lang.min_label11} (30)</option>
                                                <option value="31">:31 (31)</option>
                                                <option value="32">:32 (32)</option>
                                                <option value="33">:33 (33)</option>
                                                <option value="34">:34 (34)</option>
                                                <option value="35">:35 (35)</option>
                                                <option value="36">:36 (36)</option>
                                                <option value="37">:37 (37)</option>
                                                <option value="38">:38 (38)</option>
                                                <option value="39">:39 (39)</option>
                                                <option value="40">:40 (40)</option>
                                                <option value="41">:41 (41)</option>
                                                <option value="42">:42 (42)</option>
                                                <option value="43">:43 (43)</option>
                                                <option value="44">:44 (44)</option>
                                                <option value="45">:45 {$lang.min_label12} (45)</option>
                                                <option value="46">:46 (46)</option>
                                                <option value="47">:47 (47)</option>
                                                <option value="48">:48 (48)</option>
                                                <option value="49">:49 (49)</option>
                                                <option value="50">:50 (50)</option>
                                                <option value="51">:51 (51)</option>
                                                <option value="52">:52 (52)</option>
                                                <option value="53">:53 (53)</option>
                                                <option value="54">:54 (54)</option>
                                                <option value="55">:55 (55)</option>
                                                <option value="56">:56 (56)</option>
                                                <option value="57">:57 (57)</option>
                                                <option value="58">:58 (58)</option>
                                                <option value="59">:59 (59)</option>
                                        </select>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-md-offset-3">
                            <div class="help-block with-errors"></div>
                        </div>                                                  
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.hour_label}</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-fluid">
                                        <div class="fluid-0 pr-10">
                                            <input class="form-control" name="hour" type="text" required="" data-error="{$validator_lang.field_required}">
                                        </div>
                                        <div class="fluid-100">
                                            <select id="add_job_hour_select" class="form-control" data-no-validate data-input-target="hour" >
                                                <option value="--">-- {$lang.hour_label1} --</option>
                                                <option value="*">{$lang.hour_labe2} (*)</option>
                                                <option value="*/2">{$lang.hour_labe3} (*/2)</option>
                                                <option value="*/3">{$lang.hour_labe4} (*/3)</option>
                                                <option value="*/4">{$lang.hour_labe5} (*/4)</option>
                                                <option value="*/6">{$lang.hour_labe6} (*/6)</option>
                                                <option value="0,12">{$lang.hour_labe7} (0,12)</option>

                                                <option value="--">-- {$lang.hour_label8} --</option>
                                                <option value="0">{$lang.hour_label9}</option>
                                                <option value="1">1:00 {$lang.hour_label11} (1)</option>
                                                <option value="2">2:00 {$lang.hour_label11} (2)</option>
                                                <option value="3">3:00 {$lang.hour_label11} (3)</option>
                                                <option value="4">4:00 {$lang.hour_label11} (4)</option>
                                                <option value="5">5:00 {$lang.hour_label11} (5)</option>

                                                <option value="6">6:00 {$lang.hour_label11} (6)</option>
                                                <option value="7">7:00 {$lang.hour_label11} (7)</option>
                                                <option value="8">8:00 {$lang.hour_label11} (8)</option>
                                                <option value="9">9:00 {$lang.hour_label11} (9)</option>
                                                <option value="10">10:00 {$lang.hour_label11} (10)</option>
                                                <option value="11">11:00 {$lang.hour_label11} (11)</option>

                                                <option value="12">{$lang.hour_label10}</option>
                                                <option value="13">1:00 {$lang.hour_label12} (13)</option>
                                                <option value="14">2:00 {$lang.hour_label12} (14)</option>
                                                <option value="15">3:00 {$lang.hour_label12} (15)</option>
                                                <option value="16">4:00 {$lang.hour_label12} (16)</option>
                                                <option value="17">5:00 {$lang.hour_label12} (17)</option>

                                                <option value="18">6:00 {$lang.hour_label12} (18)</option>
                                                <option value="19">7:00 {$lang.hour_label12} (19)</option>
                                                <option value="20">8:00 {$lang.hour_label12} (20)</option>
                                                <option value="21">9:00 {$lang.hour_label12} (21)</option>
                                                <option value="22">10:00 {$lang.hour_label12} (22)</option>
                                                <option value="23">11:00 {$lang.hour_label12} (23)</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-md-offset-3">
                            <div class="help-block with-errors"></div>
                        </div>                                              
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.day_label}</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-fluid">
                                        <div class="fluid-0 pr-10">
                                            <input class="form-control" name="day" type="text" required="" data-error="{$validator_lang.field_required}">
                                        </div>
                                        <div class="fluid-100">
                                            <select id="add_job_day_select" class="form-control" data-no-validate data-input-target="day"> 
                                                <option value="--">-- {$lang.day_label1} --</option>
                                                <option value="*">{$lang.day_label2} (*)</option>
                                                <option value="*/2">{$lang.day_label3} (*/2)</option>
                                                <option value="1,15">{$lang.day_label4} (1,15)</option>
                                                <option value="--">-- {$lang.day_label5} --</option>

                                                <option value="1">{$lang.day_label6}</option>
                                                <option value="2">{$lang.day_label7}</option>
                                                <option value="3">{$lang.day_label8}</option>
                                                <option value="4">{$lang.day_label9}</option>
                                                <option value="5">{$lang.day_label10}</option>
                                                <option value="6">{$lang.day_label11}</option>

                                                <option value="7">{$lang.day_label12}</option>
                                                <option value="8">{$lang.day_label13}</option>
                                                <option value="9">{$lang.day_label14}</option>
                                                <option value="10">{$lang.day_label15}</option>
                                                <option value="11">{$lang.day_label16}</option>
                                                <option value="12">{$lang.day_label17}</option>

                                                <option value="13">{$lang.day_label18}</option>
                                                <option value="14">{$lang.day_label19}</option>
                                                <option value="15">{$lang.day_label20}</option>
                                                <option value="16">{$lang.day_label21}</option>
                                                <option value="17">{$lang.day_label22}</option>
                                                <option value="18">{$lang.day_label23}</option>

                                                <option value="19">{$lang.day_label24}</option>
                                                <option value="20">{$lang.day_label25}</option>
                                                <option value="21">{$lang.day_label26}</option>
                                                <option value="22">{$lang.day_label27}</option>
                                                <option value="23">{$lang.day_label28}</option>
                                                <option value="24">{$lang.day_label29}</option>

                                                <option value="25">{$lang.day_label30}</option>
                                                <option value="26">{$lang.day_label31}</option>
                                                <option value="27">{$lang.day_label32}</option>
                                                <option value="28">{$lang.day_label33}</option>
                                                <option value="29">{$lang.day_label34}</option>
                                                <option value="30">{$lang.day_label35}</option>

                                                <option value="31">{$lang.day_label36}</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-md-offset-3">
                            <div class="help-block with-errors"></div>
                        </div>                                              
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.month_label}</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-fluid">
                                        <div class="fluid-0 pr-10">
                                            <input class="form-control" type="text" name="month" required="" data-error="{$validator_lang.field_required}">
                                        </div>
                                        <div class="fluid-100">
                                            <select id="add_job_month_select" class="form-control" data-no-validate data-input-target="month">
                                                <option value="--">-- {$lang.month_label1} --</option>
                                                <option value="*">{$lang.month_label2} (*)</option>
                                                <option value="*/2">{$lang.month_label3} (*/2)</option>
                                                <option value="*/4">{$lang.month_label4} (*/4)</option>
                                                <option value="1,7">{$lang.month_label5} (1,7)</option>

                                                <option value="--">-- {$lang.month_label6} --</option>
                                                <option value="1">{$lang.month_label7} (1)</option>
                                                <option value="2">{$lang.month_label8} (2)</option>
                                                <option value="3">{$lang.month_label9} (3)</option>
                                                <option value="4">{$lang.month_label10} (4)</option>
                                                <option value="5">{$lang.month_label11} (5)</option>

                                                <option value="6">{$lang.month_label12} (6)</option>
                                                <option value="7">{$lang.month_label13} (7)</option>
                                                <option value="8">{$lang.month_label14} (8)</option>
                                                <option value="9">{$lang.month_label15} (9)</option>
                                                <option value="10">{$lang.month_label16} (10)</option>
                                                <option value="11">{$lang.month_label17} (11)</option>

                                                <option value="12">{$lang.month_label18} (12)</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-md-offset-3">
                            <div class="help-block with-errors"></div>
                        </div>                                              
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.weekday_label}</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-fluid">
                                        <div class="fluid-0 pr-10">
                                            <input class="form-control" type="text" name="weekday" required="" data-error="{$validator_lang.field_required}">
                                        </div>
                                        <div class="fluid-100">
                                            <select id="add_job_weekday_select" class="form-control" data-no-validate data-input-target="weekday">
                                                <option value="--">-- {$lang.weekday_label1} --</option>
                                                <option value="*">{$lang.weekday_label2} (*)</option>
                                                <option value="1-5">{$lang.weekday_label3} (1-5)</option>
                                                <option value="0,6">{$lang.weekday_label4} (6,0)</option>
                                                <option value="1,3,5">{$lang.weekday_label5} (1,3,5)</option>

                                                <option value="2,4">{$lang.weekday_label6} (2,4)</option>
                                                <option value="--">-- {$lang.weekday_label7} --</option>
                                                <option value="0">{$lang.weekday_label8} (0)</option>
                                                <option value="1">{$lang.weekday_label9} (1)</option>
                                                <option value="2">{$lang.weekday_label10} (2)</option>
                                                <option value="3">{$lang.weekday_label11} (3)</option>

                                                <option value="4">{$lang.weekday_label12} (4)</option>
                                                <option value="5">{$lang.weekday_label13} (5)</option>
                                                <option value="6">{$lang.weekday_label14} (6)</option>
                                            </select>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-md-offset-3">
                            <div class="help-block with-errors"></div>
                        </div>                                              
                    </div>

                      <div class="form-group">
                        <label class="control-label col-sm-3">{$lang.command_label}</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" name="command" required="" data-error="{$validator_lang.field_required}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-md-offset-3">
                            <div class="help-block with-errors"></div>
                        </div>                                  
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{$lang.close}</button>
                <button type="button" class="btn btn-primary" data-act="chgjob" data-rtable="cron-table">{$lang.save_changes}</button>
            </div>
        </div>
    </div>
</div>                   
                    
{confirm_modal btn='data-act="deletejob" data-rtable="cron-table"' id="delete-job-modal" title=$lang.confirmation_title 
        body="`$lang.confirmation_body`<input type='hidden' name='line'/>"}
                
{literal}
    <script>
        (function (jQuery) {
            jQuery(document).ready( function() {
                refreshTable('cron-table');
                
                jQuery('.add_job_common_select').change( function() {
                    var value = jQuery(this).val();
                    if(value == '--')
                        return ;
                    var values = value.split(' ');
                    var $form = jQuery(this).parents('form').first();
                    jQuery('input[name="minute"]', $form).val(values[0]);
                    jQuery('input[name="hour"]', $form).val(values[1]);
                    jQuery('input[name="day"]', $form).val(values[2]);
                    jQuery('input[name="month"]', $form).val(values[3]);
                    jQuery('input[name="weekday"]', $form).val(values[4]);
                });
                
                jQuery('[data-input-target]').change(function() {
                    var value = jQuery(this).val();
                    if(value == '--') 
                        return ;
                    var target = jQuery(this).data('input-target');
                    jQuery(this).parents('form').find('input[name="' + target + '"]').val(value);
                });
            })
        }) (jQuery);
   </script>
{/literal}                