<div class="row" style="margin-bottom: 30px;padding: 30px 0 40px;border-bottom: 1px solid #EEE;">
    <div class="col-md-12">
        <ul class="process-stepper clearfix" data-process-steps="3">
            <li class="active">
                <span>提交资料</span>
            </li>
            <li{if $userinfo->validation eq 'Pending' or $userinfo->validation eq 'yes'} class="active"{/if}>
                <span>等待审核</span>
            </li>
            <li{if $userinfo->validation eq 'yes'} class="active"{/if}>
                <span>认证完成</span>
            </li>
        </ul>
    </div>
</div>

<div class="form-horizontal">
	<form action="{$systemurl}/index.php?m=authentication&action=qiye" method="post" enctype="multipart/form-data">
		<input type="hidden" name="type" value="Company" />
	    <div class="form-group">
            <label class="col-sm-3 control-label">公司名称</label>
            <div class="col-sm-5">
                <input class="form-control" name="cert_name" value="{if $userinfo->type eq 'Company' or $userinfo->type eq 'Company2'}{$userinfo->cert_name}{/if}" {if $userinfo->validation == 'yes' or $userinfo->validation == 'Pending'}readonly{/if} />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">统一信用代码</label>
            <div class="col-sm-5">
                <input class="form-control" name="cert_no" value="{if $userinfo->type eq 'Company' or $userinfo->type eq 'Company2'}{$userinfo->cert_no}{/if}" {if $userinfo->validation == 'yes' or $userinfo->validation == 'Pending'}readonly{/if} />
            </div>
        </div>
	    {if $userinfo->validation ne 'Pending' or $userinfo->validation ne 'yes'}
        <div class="form-group">
            <label class="col-sm-3 control-label">营业执照</label>
            <div class="col-sm-8">
                <div class="profile-img">
                    <input id="company_info_1" type="file" name="company_info_1" class="hidden changeImages" />
	                {if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'}
	                <img id="company_info_1_pic" src="{$systemurl}modules/addons/authentication/upload/{$userinfo->information->company_info_1}" />
	                {else}
                    <img id="company_info_1_pic" src="{$systemurl}modules/addons/authentication/upload/default.png" />
                    {/if}
                    <a class="prfile-img-title{if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'} hidden{/if}" href="javascript: changeImage('company_info_1');">上传文件</a>
                </div>
                <div class="profile-description{if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'} hidden{/if}">
                    请上传营业执照照片或扫描件，JPG 或 PNG 格式，文件大小不超过5MB
                </div>
            </div>
        </div>
        {/if}
        <div class="form-group">
            <label class="col-sm-3 control-label">法人姓名</label>
            <div class="col-sm-5">
                <input class="form-control" name="company_info_2" value="{$userinfo->information->company_info_2}"{if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'} readonly{/if} />
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">法人证件号</label>
            <div class="col-sm-5">
                <input class="form-control" name="company_info_3" value="{$userinfo->information->company_info_3}"{if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'} readonly{/if} />
            </div>
        </div>
        
	    {if $userinfo->validation ne 'Pending' or $userinfo->validation ne 'yes'}
        <div class="form-group">
            <label class="col-sm-3 control-label">法人证件正面</label>
            <div class="col-sm-8">
                <div class="profile-img">
                    <input id="company_info_4" type="file" name="company_info_4" class="hidden changeImages" />
	                {if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'}
	                <img id="company_info_4_pic" src="{$systemurl}modules/addons/authentication/upload/{$userinfo->information->company_info_4}" />
	                {else}
                    <img id="company_info_4_pic" src="{$systemurl}modules/addons/authentication/upload/default.png" />
                    {/if}
                    <a class="prfile-img-title{if $userinfo->status eq 'Pending' || $userinfo->validation eq 'yes'} hidden{/if}" href="javascript: changeImage('company_info_4');">上传文件</a>
                </div>
                <div class="profile-description{if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'} hidden{/if}">
                    请上传法人证件正面，JPG 或 PNG 格式，文件大小不超过5MB
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">法人证件反面</label>
            <div class="col-sm-8">
                <div class="profile-img">
                    <input id="company_info_5" type="file" name="company_info_5" class="hidden changeImages" />
	                {if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'}
	                <img id="company_info_5_pic" src="{$systemurl}modules/addons/authentication/upload/{$userinfo->information->company_info_5}" />
	                {else}
                    <img id="company_info_5_pic" src="{$systemurl}modules/addons/authentication/upload/default.png" />
                    {/if}
                    <a class="prfile-img-title{if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'} hidden{/if}" href="javascript: changeImage('company_info_5');">上传文件</a>
                </div>
                <div class="profile-description{if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'} hidden{/if}">
                    请上传法人证件反面，JPG 或 PNG 格式，文件大小不超过5MB
                </div>
            </div>
        </div>
        {/if}
	    <div class="form-group">
	    	<div class="col-xs-8 col-xs-offset-3">
	        	<button class="btn btn-primary {if $userinfo->validation eq 'Pending' || $userinfo->validation eq 'yes'} hidden{/if}" type="submit">提交审核</button>
	        	<a class="btn btn-default" href="{$params['modulelink']}">返回</a>
	    	</div>
	    </div>
	</form>
</div>


<link href="//cdnjs.cat.net/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
<script src="//cdnjs.cat.net/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script type="application/javascript">
    // 触发文件上传的 input
    function changeImage(id) {
        $("#" + id).click();
    }

    // 显示图片预览
    var changeImages = $(".changeImages");
    var changeImages_upload = '';
    changeImages.on('change', function () {
        try {
            changeImages_upload = $(this)[0].files[0];

            if (changeImages_upload.size > 5242880) throw "仅允许上传小于 5 MB 的图像";

            if (changeImages_upload.type != 'image/jpeg' && changeImages_upload.type != 'image/png') throw "仅允许上传 JPG / PNG / GIF 等图像格式";

            var url = window.URL.createObjectURL(changeImages_upload);

            $("#" + $(this).attr('name') + "_pic").attr('src', url);
        }
        catch (err) {
            alertError('更改失败', err);
        }
    });

    // 弹出错误提示
    function alertError(title, text) {
        swal({
            title: title,
            text: text,
            type: "warning",
            confirmButtonText: "确认",
            html: true
        });
    }
</script>