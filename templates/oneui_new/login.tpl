							<p class="text-center text-muted">
                           	{include file="$template/includes/pageheader.tpl" title=$LANG.login desc="{$LANG.restrictedpage}"}
                            </p>
                            
                            {if $incorrect}
        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.loginincorrect textcenter=true}
    {elseif $verificationId && empty($transientDataName)}
        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.verificationKeyExpired textcenter=true}
    {elseif $ssoredirect}
        {include file="$template/includes/alert.tpl" type="info" msg=$LANG.sso.redirectafterlogin textcenter=true}
    {/if}

                            <!-- Login Form -->
                            <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form class="js-validation-login form-horizontal push-30-t login-form" action="{$systemurl}dologin.php" method="post" role="form" style="margin-bottom: 30px;">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="email" name="username" class="form-control" id="inputEmail">
                                            <label for="inputEmail" style="color: #767676;">{$LANG.clientareaemail}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="password" name="password" class="form-control" id="inputPassword" autocomplete="off" >
                                            <label for="login-password" style="color: #767676;">{$LANG.clientareapassword}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label class="css-input switch switch-sm switch-primary">
                                            <input type="checkbox" id="rememberme" name="rememberme"><span></span> {$LANG.loginrememberme}
                                        </label>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="font-s13 text-right push-5-t">
                                            <a href="pwreset.php" style="color: #00AAFF;">{$LANG.forgotpw}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group push-30-t">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                        <button id="login" class="btn btn-sm btn-block btn-primary" type="submit">{$LANG.loginbutton}</button>
                                    </div>
                                </div>
                            </form>
                            <!-- END Login Form -->
                            还没有账户？立即 <a href="register.php" style="color: #00aaff;">免费注册</a>
                            {include file="$template/includes/linkedaccounts.tpl" linkContext="login" customFeedback=true}


		

