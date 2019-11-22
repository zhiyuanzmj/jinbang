{if $captcha}
        {if $captcha == "recaptcha"}
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <div id="google-recaptcha-domainchecker" class="g-recaptcha center-block" data-sitekey="{$reCaptchaPublicKey}"></div>
        {else}
                	<div class="form-group">
                    <div class="col-xs-8">
                        <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control" placeholder="请输入验证码" />
                    </div>
                    <div class="col-xs-4 captchaimage">
                        <img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />
                    </div>
                	</div>
        {/if}
{/if}
