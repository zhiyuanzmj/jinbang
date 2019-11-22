{if $verify}
<link href="{$systemurl}/modules/addons/authentication/templates/assets/sweetalert/sweetalert.css" rel="stylesheet">
<script src="{$systemurl}/modules/addons/authentication/templates/assets/sweetalert/sweetalert.min.js"></script>
<script>
jQuery(function(){
	swal({
	    title: "请验证身份信息",
	    text: '检测到账户资料尚未认证，可能会影响订单开通情况',
	    type: "info",
	    showCancelButton: true,
	    closeOnConfirm: false,
	    showLoaderOnConfirm: true,
	    cancelButtonText: "取消",
	    confirmButtonText: "确认"
	}, function () {
	    window.location = 'index.php?m=authentication';
	});
});
</script>
{/if}