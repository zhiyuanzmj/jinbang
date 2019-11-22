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
    <input id="systemurl" type="hidden" value="{$systemurl}" />
    <input id="modulelink" type="hidden" value="{$params['modulelink']}" />

    <div class="row">
        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-2 control-label">手机验证</label>
            <div class="col-sm-4 col-xs-12 tips">
                输入您的常用手机号
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-2 control-label">* 手机号</label>
            <div class="col-sm-4 col-xs-12">
                <div class="input-group">
                    <div class="input-group-addon">
                        +86
                    </div>
                    <input id="phone" type="text" class="form-control" value="{$phone}" onfocus="this.select()" autofocus="" />
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-2 control-label">* 手机验证码</label>
            <div class="col-sm-4 col-xs-12">
                <div class="input-group">
                    <input id="code" type="text" class="form-control" onfocus="this.select()" />
                    <div class="input-group-btn">
                        <a id="sendButton" href="javascript: send();" class="btn btn-default code">获取验证码</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label class="col-sm-2 col-sm-offset-2 control-label">* 验证</label>
            <div class="col-sm-4 col-xs-12">
                <div class="input-group">
                    <input id="captchaValue" type="text" class="form-control" onfocus="this.select()" />
                    <div class="input-group-addon verifycode" data-toggle="tooltip" data-placement="top" title="更换验证码">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                <a href="javascript: change();" class="btn btn-primary btn-block">修改号码</a>
            </div>
        </div>
    </div>
</div>

<link href="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js"></script>

<script src="{$systemurl}modules/addons/SMS_Verification/library/theme/ajax.js"></script>