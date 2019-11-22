<link href="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js"></script>

<style type="text/css">
    hr {
        border-top: 2px dashed #CCC;
        padding: 0;
        margin: 5% 0;
    }
    .row {
        margin-bottom: 15px;
    }
    .code {
        min-width: 120px;
    }
    .verifycode {
        background-image: url('{$systemurl}includes/verifyimage.php');
        background-position: center;
        background-repeat: no-repeat;
        background-size: 120% 120%;
        min-width: 120px;
        min-height: 24px;
        cursor: pointer;
    }
    .verifycode:active {
        background-size: 100% 100%;
    }
    .form-horizontal {
        margin: 6% 0 10%;
    }
    .tips {
        line-height: 34px;
    }
</style>

<div class="container-fluid form-horizontal">
    <input id="firstname" type="hidden" value=" " />
    <input id="lastname" type="hidden" value="." />
    <input id="systemurl" type="hidden" value="{$systemurl}" />
    <input id="modulelink" type="hidden" value="{$params['modulelink']}" />
	    
    <div class="form-group">
        <label class="col-sm-2 col-sm-offset-2 control-label">{$LANG.orderForm.phoneNumber}</label>
        <div class="col-sm-4 col-xs-12">
            <div class="input-group">
                <span class="input-group-addon">
                    +86
                </span>
                <input id="phone" type="text" class="form-control" onfocus="this.select()" />
            </div>
        </div>
    </div>
    
    <div class="form-group u-mb-medium">
        <label class="col-sm-2 col-sm-offset-2 control-label">验证码</label>
        <div class="col-sm-4 col-xs-12">
            <div class="input-group">
                <input id="code" type="text" class="form-control" onfocus="this.select()" />
                <div class="input-group-btn">
                    <a id="sendButton" href="javascript: send();" class="btn btn-default code">获取验证码</a>
                </div>
            </div>
        </div>
    </div>
    
    {*<div class="form-group">*}
        {*<label class="col-sm-2 col-sm-offset-2 control-label">* 验证</label>*}
        {*<div class="col-sm-4 col-xs-12">*}
            {*<div class="input-group">*}
                {*<input id="captchaValue" type="text" class="form-control" onfocus="this.select()" />*}
                {*<div class="input-group-addon verifycode" data-toggle="tooltip" data-placement="top" title="更换验证码">*}
                {*</div>*}
            {*</div>*}
        {*</div>*}
    {*</div>*}
        
        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-2 control-label">{$LANG.orderForm.emailAddress}</label>
            <div class="col-sm-4 col-xs-12">
                <input id="email" type="text" class="form-control" onfocus="this.select()" placeholder="{$LANG.orderForm.emailAddress}" autofocus="" />
            </div>
        </div>
	        
        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-2 control-label">{$LANG.clientareapassword}</label>
            <div class="col-sm-4 col-xs-12">
                <input id="password" type="password" class="form-control" onfocus="this.select()" placeholder="{$LANG.clientareapassword}" />
            </div>
        </div>
	        
        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-2 control-label">{$LANG.clientareaconfirmpassword}</label>
            <div class="col-sm-4 col-xs-12">
                <input id="password2" type="password" class="form-control" onfocus="this.select()" placeholder="{$LANG.clientareaconfirmpassword}" />
            </div>
        </div>
        

    {if $customField}
        {$fieldName = "staff|"|explode:$customField->fieldname}
        {$fieldOption = ","|explode:$customField->fieldoptions}
        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-2 control-label">{$fieldName['1']}</label>
            <div class="col-sm-4 col-xs-12">
                <select id="staff" class="form-control">
                    {foreach $fieldOption as $value}
                        <option value="{$value}">{$value}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    {/if}

    {if $ToS}
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                {$LANG.ordertosagreement} <a href="{$tosurl}" target="_blank">{$LANG.ordertos}</a>
            </div>
        </div>
    {/if}
    
    <div class="form-group u-mt-medium">
        <div class="col-sm-4 col-sm-offset-4 col-xs-12">
            <a href="javascript: verify();" class="btn btn-primary btn-block u-p-xsmall">立即注册</a>
        </div>
    </div>
</div>

<script src="{$systemurl}modules/addons/SMS_Verification/library/theme/ajax.js"></script>