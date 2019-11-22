<style type="text/css">
.input-group-addon {
	border-color: #DFE3E8;
	background-color: #FAFAFA;
	cursor: pointer;
}
</style>
<script src="{$WEB_ROOT}/templates/styledoiam/oneui/assets/js/core/jquery.min.js"></script>
<script>
function checkMail() {
	var eMail = $('#email').val();
	$('fieldset .alert').remove();
	if ( eMail == '') {
		$('fieldset').append('<div class="alert alert-danger text-center" style="margin: 10px 0 0;">接收方账户不能为空！</div>');
		return false;
	}
	$.ajax({
		cache: false,
		type: 'GET',
		url: '{$WEB_ROOT}/?m=transfer&email='+eMail,
		dataType:'json',
		async: true,
		beforeSend: function () {
			$('.input-group-addon').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>');
		},
		success: function (data) {
			if (data.status == 'success') {
				$('fieldset').append('<div class="alert alert-success text-center" style="margin: 10px 0 0;">'+data.info+'</div>');
				$('.input-group-addon').html('<i class="fa fa-check text-success"></i>');
			} else {
				$('fieldset').append('<div class="alert alert-danger" style="margin: 10px 0 0;">'+data.info+'</div>');
				$('.input-group-addon').html('<i class="fa fa-close text-danger"></i>');
			}
		}
	});
}
</script>
<h3 class="headline">产品过户</h3>
<div class="row">	
	<form method="POST" action="{$WEB_ROOT}/?m=transfer">
	<input type="hidden" name="action" value="PUSH" />
	<div class="col-sm-6 col-sm-offset-3">
		{if $code['status']}
			<div class="alert alert-{$code['status']}">
				{$code['info']}
			</div>
		{else}
			<div class="alert alert-info">
				<i class="alico icon-info-2"></i> 过户产品每次收取人民币 {$transferAmount} 元，请确保您的账户余额大于 {$transferAmount} 元。
			</div>
		{/if}
        <div class="panel panel-default">
            <div class="panel-body">
                <fieldset>
                    <div class="form-group">
                        <label for="amount" class="control-label">选择要过户的产品:</label>
                        <select name="product" class="form-control selectpicker">
	                        {if $results}
	                        	{foreach $results as $value}
                                	<option value="{$value['id']}" {if $getID eq $value['id']}selected{/if}>{$value['productname']} - {$value['domain']}</option>
                                {/foreach}
                            {/if}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label">接收方账户:</label>
                        <div class="input-group">
							<input type="text" id="email" class="form-control" name="email" />
							<div class="input-group-addon" onClick="checkMail()"><i class="fa fa-search" aria-hidden="true"></i></div>
						</div>
                    </div>
                </fieldset>
            </div>
            <div class="panel-footer">
                <span class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i> 请反复确认后再进行提交，一旦提交无法回滚操作。</span>
            </div>
        </div>
    </div>
	<div class="col-sm-6 col-sm-offset-3">
		<div class="form-group text-center">
			<button type="submit" class="btn btn-success">
				<i class="md md-assignment-turned-in"></i> 确认过户
			</button>
			<a style="margin-left: 20px;" class="btn btn-primary" href="{$WEB_ROOT}/clientarea.php?action=addfunds">
				<i class="md md-account-balance-wallet"></i> {$LANG.addfunds}
			</a>
		</div>
	</div>
	</form>
</div>