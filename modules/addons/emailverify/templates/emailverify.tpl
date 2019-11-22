<div style="display:block;text-align:center">您需要验证您的邮箱后才能继续操作<br/>请点击右上的 <strong>{$LANG.resendEmail}</strong> 按钮发送验证码<br/>如多次未收到验证邮件 , 请在收信白名单中加入 {$sender} , 以便能够接受邮件</div>
{literal}
<script>
{/literal}
lang_email_v1 = "{$LANG.emailSent}"
{literal}

jQuery(document).ready(function() {
	jQuery('#btnResendVerificationEmail').click(function() {
		jQuery('#btnResendVerificationEmail').text(lang_email_v1);
		jQuery('#btnResendVerificationEmail').prop('disabled', true);
	})
})
</script>
{/literal}