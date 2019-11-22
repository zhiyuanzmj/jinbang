<div class="block block-rounded block-bordered">
    <ul class="nav nav-tabs" role="tablist">
        <li class="active">
        	<a class="tab-top" href="#tab1" role="tab" data-toggle="tab" id="tabLink1" data-tab-id="1" aria-expanded="true">已安装授权 (<span class="tatol_local_license">{$tatol_local_license}</span>)</a>
        </li>
        <li>
        	<a class="tab-top" href="#tab2" role="tab" data-toggle="tab" id="tabLink2" data-tab-id="2" aria-expanded="true">未安装授权 (<span class="tatol_remote_license">{$tatol_remote_license}</span>)</a>
        </li>
    </ul>
    <div class="block-content" style="padding: 0;">
		<div class="tab-content">
			<div class="tab-pane active" id="tab1">
		        {include file="./local_license.tpl"}
		    </div>
	        <div class="tab-pane" id="tab2">
		        {include file="./remote_license.tpl"}
	        </div>
	    </div>
    </div>
</div>

<script type="text/javascript">
$(function(){
    $("#submitkey").click(function() { //当按钮button被点击时的处理函数
        if ( checkLicense() ) {
            verifyLicense();
            //button被点击时执行postdata函数
            $("#licenseKey").val('').focus(); //提交清空内容
        }
    });
    actionButton();
    installButton();
});

function verifyLicense(license, name, id) { //提交数据函数
	var tatol_local_license = $('.tatol_local_license').html();
	var tatol_remote_license = $('.tatol_remote_license').html();
	
	var cname 	= '{$LANG.neworld_install}';
    var text 	= '{$LANG.neworld_install_text}';
    var tips 	= '{$LANG.neworld_install_tips}';
    
    swal({
		title: "{$LANG.neworld_action_start} " + cname + " " + name,
		text: text,
		type: "info",
		html: true,
		showCancelButton: true,
		closeOnConfirm: false,
		confirmButtonText: "{$LANG.neworld_confirm}",
		cancelButtonText: "{$LANG.neworld_cancel}",
		showLoaderOnConfirm: true,
	},
	function(){
	    $.ajax({ //调用jQuery 的 ajax 方法
	        type: "POST", //设置 ajax 方法提交数据的形式
	        timeout : 150000, //超时时间设置，单位毫秒
	        url: "{$systemURL}/modules/addons/NeWorld/public/verify.php", //把数据提交
	        data: "license=" + license + "&verify={$verify}", //输入框writer中的值作为提交的数据
	        dataType: 'json',
	        success: function(data) { //提交成功后的回调。
		        console.log(data);
		        if ( data.status ) {
		            if (data.status == 'success') {
		                var html = '<tr id="#product_' + data.id + '"><td><span class="visible-xs">{$LANG.neworld_products_name}</span>' + data.softname + '</td><td><span class="visible-xs">{$LANG.neworld_license_auth}</span>' + license + '</td><td class="hidden-xs"><span class="visible-xs">{$LANG.neworld_license_time}</span>' + data.date + '</td><td class="text-center" id="currentversion_' + data.id + '"><span class="visible-xs">{$LANG.neworld_current}</span>-</td><td class="text-center" id="lastversion_' + data.id + '"><span class="visible-xs">{$LANG.neworld_latest}</span>' + data.version + '</td><td class="text-right"><div class="btn btn-warning btn-xs" data-type="NeWorld" data-action="install" data-license="' + license + '" data-name="' + data.softname + '" data-id="' + data.id + '" id="button_' + data.id + '">{$LANG.neworld_install}</div> <div class="btn btn-info btn-xs" data-type="NeWorld" data-action="check" data-license="' + license + '" data-name="' + data.softname + '" data-id="' + data.id + '">{$LANG.neworld_check}</div> <div class="btn btn-danger btn-xs" data-type="NeWorld" data-action="delete" data-license="' + license + '" data-name="' + data.softname + '" data-id="' + data.id + '">{$LANG.neworld_delete}</div></td></tr>';
		                $("#license-list tbody").append(html);
		                $('.tatol_remote_license').html(parseInt(tatol_local_license) + 1);
		                $('.tatol_remote_license').html(parseInt(tatol_remote_license) - 1);
		                $('#product_remote_' + id).remove();
					    actionButton();
					    installButton();
	                    swal({
		                    title: name + '{$LANG.neworld_has_been}' + cname,
		                    text: tips,
		                    type: "success",
		                    html: true
	                    });
		            } else {
		                swal("{$LANG.neworld_fail}", data.info, "error");
		            }
		        }
	        },
	        complete : function(XMLHttpRequest,status){
	            //请求完成后最终执行参数
				if (status=='timeout') {
					//超时,status还有success,error等值的情况
					ajaxTimeoutTest.abort();
	                swal("{$LANG.neworld_fail}","{$LANG.neworld_timeout_more}","error");
				}
			}
	    });
	});
}

function installButton() {
    $(".install_button").click(function() { // 匿名函数
        verifyLicense($(this).attr('data-license'), $(this).attr('data-name'), $(this).attr('data-id'));
    });
}

function actionButton() {
    $("[data-type='NeWorld']").click(function() { // 匿名函数
        submitAction($(this).attr('data-action'), $(this).attr('data-license'), $(this).attr('data-name'), $(this).attr('data-id'));
    });
}

function submitAction(action, license, name, id) {
    // 别名
    var cname = '{$LANG.neworld_error_info}';
    var tips = '';
    switch (action) {
        case 'install':
            cname 	= '{$LANG.neworld_install}';
            text 	= '{$LANG.neworld_install_text}';
            tips 	= '{$LANG.neworld_install_tips}';
            break;
        case 'reinstall':
            cname 	= '{$LANG.neworld_reinstall}';
            text 	= '{$LANG.neworld_reinstall_text}';
            tips 	= '{$LANG.neworld_reinstall_tips}';
            break;
        case 'update':
            cname 	= '{$LANG.neworld_update}';
            text 	= '{$LANG.neworld_update_text}';
            tips 	= '{$LANG.neworld_update_tips}';
            break;
        case 'delete':
            cname 	= '{$LANG.neworld_delete}';
            text 	= '{$LANG.neworld_delete_text}';
            tips 	= '{$LANG.neworld_delete_tips}';
            break;
        case 'check':
            cname 	= '{$LANG.neworld_check}';
            text 	= '{$LANG.neworld_check_text}';
            tips 	= '{$LANG.neworld_check_tips}';
            break;
        default:
             swal(cname);
    }
    swal({
		title: "{$LANG.neworld_action_start} " + cname + " {$LANG.neworld_action_over}",
		text: text,
		type: "info",
		html: true,
		showCancelButton: true,
		closeOnConfirm: false,
		confirmButtonText: "{$LANG.neworld_confirm}",
		cancelButtonText: "{$LANG.neworld_cancel}",
		showLoaderOnConfirm: true,
	},
	function(){
        $.ajax({ //调用jquery的ajax方法
            type: "POST", //设置ajax方法提交数据的形式
            timeout : 150000, //超时时间设置，单位毫秒
            url: "{$systemURL}/modules/addons/NeWorld/public/action.php", //把数据提交
            data: "action=" + action + "&license=" + license + "&verify={$verify}" + "&id=" + id, //输入框writer中的值作为提交的数据
            dataType: 'json',
            success: function(data) { //提交成功后的回调。
                if (data.status == 'success') {
                    var button = $("#button_" + id);
                    switch (action)
                    {
                        case 'install':
                        case 'reinstall':
                        case 'update':
                            $("#currentversion_" + id).html(data.version);
                            button.html('<span class="glyphicon glyphicon-floppy-save"></span> {$LANG.neworld_reinstall}');
                            break;
                        case 'delete':
                            // 先使用 JS 的选择器
                            var product = document.getElementById("#product_" + id);

                            // 判断是否为 NULL
                            if (product) {
                                product.remove();
                            } else {
                                // 如果是 NULL 就用 JQ 选择器
                                $("#product_" + id).remove();
                            }
                            break;
                        case 'check':
                            $("#lastversion_" + id).html(data.version);
                            break;
                        default:
                            break;
                    }
                    swal({
	                    title: name + '{$LANG.neworld_has_been}' + cname,
	                    text: tips,
	                    type: "success",
	                    html: true
                    });
                } else {
                    swal({
	                    title: "{$LANG.neworld_fail}",
	                    text: data.info,
	                    type: "error",
	                    html: true
                    });
                }
            },
            complete : function(XMLHttpRequest,status){
	            //请求完成后最终执行参数
				if(status=='timeout'){
					//超时,status还有success,error等值的情况
					ajaxTimeoutTest.abort();
                    swal("{$LANG.neworld_fail}","{$LANG.neworld_timeout}","error");
				}
			}
        });
	});
}

function checkLicense() {
    var licenseKey = $("#licenseKey");
    if (licenseKey.val().length < 20) {
        swal("Error!", "{$LANG.neworld_enter_license}", "error");
        licenseKey.focus();
        return false;
    } else {
        return true;
    }
}
</script>