// 自动变换验证码
var verifyCode = $(".verifycode");

verifyCode.click(function ()
{
    verifyCode.css("background-image", "url('"+systemurl()+"includes/verifyimage.php?"+Math.random()+"')");
});

// 获取模块链接
function api()
{
    return systemurl() + modulelink() + '&action=system&function=';
}

// 获取模块链接
function modulelink()
{
    return $("#modulelink").val();
}

// 获取系统链接
function systemurl()
{
    return $("#systemurl").val();
}

// 获取验证码
function send()
{
    try
    {
        // 手机号码
        var phone = $("#phone");

        if (!phone.val()) throw "手机号码为必填内容";

        if (!(/^1[34578]\d{9}$/.test(phone.val())))
        {
            throw "手机号码 [ "+phone.val()+" ] 格式有误，请修改后重试";
        }

        // 验证码输入框
        var code = $("#code");

        // 弹出提示
        swal({
            title: "确认信息",
            text: '请确认手机号码 [ '+phone.val()+' ] 是否无误',
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            cancelButtonText: "取消",
            confirmButtonText: "确认"
        }, function ()
        {
            var sendButton = $("#sendButton");

            // 发起 POST
            $.ajax({
                type: 'post',
                timeout : 3000,
                url: api() + "send",
                data: {"phone":phone.val()},
                dataType: 'json',
                beforeSend: function()
                {
                    // 禁用按钮
                    sendButton.addClass('disabled');
                },
                success: function(data) { //提交成功后的回调。
                    try
                    {
                        switch (data.status)
                        {
                            case 'error':
                                // 恢复按钮
                                sendButton.removeClass('disabled');

                                throw data.info;
                                break;
                            case 'success':
                                // 禁用手机号码输入框
                                phone.addClass('disabled');

                                swal({
                                    title: '发送成功',
                                    text: '短信验证码已发送到你的手机',
                                    type: "success",
                                    confirmButtonText: "确认",
                                    html: true
                                }, function ()
                                {
                                    // 让验证码输入框获取焦点
                                    code.focus();

                                    // 按钮倒数秒数
                                    var i = 120;

                                    // 隔一秒修改一次按钮的数字
                                    var interval = setInterval(function ()
                                    {
                                        sendButton.addClass('btn-danger');
                                        sendButton.removeClass('btn-default');
                                        sendButton.html(i + ' s');

                                        if (i == 0)
                                        {
                                            sendButton.addClass('btn-default');
                                            sendButton.removeClass('btn-danger');

                                            // 恢复按钮文字
                                            sendButton.html('获取验证码');

                                            // 恢复按钮
                                            sendButton.removeClass('disabled');

                                            clearInterval(interval);
                                        }
                                        else
                                        {
                                            i--;
                                        }
                                    }, 1000);
                                });
                                break;
                            default:
                                throw "无法解析系统所返回的内容";
                                break;
                        }
                    }
                    catch (err)
                    {
                        alertError("发送失败", data.info);
                    }
                },
                complete : function(XMLHttpRequest, status){
                    try
                    {
                        switch (status)
                        {
                            case 'success':
                                break;
                            case 'error':
                                throw "系统未做出任何响应，请重试操作";
                                break;
                            case 'timeout':
                                throw "可能由于网络原因，网页请求超时";
                                break;
                            default:
                                throw "无法解析系统返回的内容";
                        }
                    }
                    catch (err)
                    {
                        alertError("发送失败", data.info);
                    }
                }
            });
        });
    }
    catch (err)
    {
        alertError("发送失败", err);
    }

    //
}

// 验证验证码
function verify()
{
    try
    {
        // 需要收集的信息
        var email = $("#email");

        if (!email.val()) throw "邮箱是必填选项，用于找回密码";

        var phone = $("#phone");

        if (!phone.val()) throw "请勿修改手机号码信息";

        var code = $("#code");

        if (!code.val()) throw "请务必填写短信验证码";

        // var captchaValue = $("#captchaValue");
        //
        // if (!captchaValue.val()) throw "请务必填写图片验证码";

        var firstname = $("#firstname");

        if (!firstname.val()) throw "请填写您的名字";

        var lastname = $("#lastname");

        if (!lastname.val()) throw "请填写您的形式";

        var password = $("#password");

        if (!password.val()) throw "请为账户填写一个密码";

        // 弹出提示
        swal({
            title: "确认信息",
            text: '请确认账户邮箱 [ '+email.val()+' ] 是否无误',
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            cancelButtonText: "取消",
            confirmButtonText: "确认"
        }, function ()
        {
            var sendButton = $("#sendButton");

            // 发起 POST
            $.ajax({
                type: 'post',
                timeout : 3000,
                url: api() + "verify",
                // data: {"phone":phone.val(),"code":code.val(),"captchaValue":captchaValue.val(),"userDetails":{"firstname":firstname.val(),"lastname":lastname.val(),"email":email.val(),"password":password.val()}},
                data: {"phone":phone.val(),"code":code.val(),"userDetails":{"firstname":firstname.val(),"lastname":lastname.val(),"email":email.val(),"password":password.val()}},
                dataType: 'json',
                success: function(data) { //提交成功后的回调。
                    try
                    {
                        switch (data.status)
                        {
                            case 'error':
                                throw data.info;
                                break;
                            case 'success':
                                swal({
                                    title: '注册成功',
                                    text: '单击 [ 确认 ] 跳转先前所查阅的页面',
                                    type: "success",
                                    confirmButtonText: "确认",
                                    html: true
                                }, function ()
                                {
                                    window.location = data.result;
                                });
                                break;
                            default:
                                throw "无法解析系统所返回的内容";
                                break;
                        }
                    }
                    catch (err)
                    {
                        alertError("注册失败", data.info);
                    }
                },
                complete : function(XMLHttpRequest, status){
                    try
                    {
                        switch (status)
                        {
                            case 'success':
                                break;
                            case 'error':
                                throw "系统未做出任何响应，请重试操作";
                                break;
                            case 'timeout':
                                throw "可能由于网络原因，网页请求超时";
                                break;
                            default:
                                throw "无法解析系统返回的内容";
                        }
                    }
                    catch (err)
                    {
                        alertError("注册失败", data.info);
                    }
                }
            });
        });
    }
    catch (err)
    {
        alertError("注册失败", err);
    }

    //
}

// 验证验证码
function change()
{
    try
    {
        var phone = $("#phone");

        if (!phone.val()) throw "请勿修改手机号码信息";

        var code = $("#code");

        if (!code.val()) throw "请务必填写短信验证码";

        var captchaValue = $("#captchaValue");

        if (!captchaValue.val()) throw "请务必填写图片验证码";

        // 弹出提示
        swal({
            title: "确认信息",
            text: '请确认手机号码 [ '+phone.val()+' ] 是否无误',
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            cancelButtonText: "取消",
            confirmButtonText: "确认"
        }, function ()
        {
            var sendButton = $("#sendButton");

            // 发起 POST
            $.ajax({
                type: 'post',
                timeout : 3000,
                url: api() + "change",
                data: {"phone":phone.val(),"code":code.val(),"captchaValue":captchaValue.val()},
                dataType: 'json',
                success: function(data) { //提交成功后的回调。
                    try
                    {
                        switch (data.status)
                        {
                            case 'error':
                                throw data.info;
                                break;
                            case 'success':
                                swal({
                                    title: '修改成功',
                                    text: '单击 [ 确认 ] 跳转客户中心管理页面',
                                    type: "success",
                                    confirmButtonText: "确认",
                                    html: true
                                }, function ()
                                {
                                    window.location = data.result;
                                });
                                break;
                            default:
                                throw "无法解析系统所返回的内容";
                                break;
                        }
                    }
                    catch (err)
                    {
                        alertError("修改成功", data.info);
                    }
                },
                complete : function(XMLHttpRequest, status){
                    try
                    {
                        switch (status)
                        {
                            case 'success':
                                break;
                            case 'error':
                                throw "系统未做出任何响应，请重试操作";
                                break;
                            case 'timeout':
                                throw "可能由于网络原因，网页请求超时";
                                break;
                            default:
                                throw "无法解析系统返回的内容";
                        }
                    }
                    catch (err)
                    {
                        alertError("修改成功", data.info);
                    }
                }
            });
        });
    }
    catch (err)
    {
        alertError("修改失败", err);
    }

    //
}

// 弹出错误提示
function alertError(title, text)
{
    swal({
        title: title,
        text: text,
        type: "warning",
        confirmButtonText: "确认",
        html: true
    });
}