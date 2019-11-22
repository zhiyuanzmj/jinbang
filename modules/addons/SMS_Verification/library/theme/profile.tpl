<link href="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js"></script>

<script type="application/javascript">
    // 弹出提示
    swal({
        title: "请补全资料",
        text: '检测到账户资料信息不全，可能会影响订单开通情况',
        type: "info",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
        cancelButtonText: "取消",
        confirmButtonText: "确认"
    }, function ()
    {
        window.location = 'clientarea.php?action=details';
    });
</script>