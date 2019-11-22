

    {if $loggedin}
        {include file="$template/includes/alert.tpl" type="error" msg=$LANG.noPasswordResetWhenLoggedIn textcenter=true}
    {else}
        {if $success}
							<p class="text-center text-muted">
                           	{$LANG.pwresetvalidationcheckemail}
                            </p>
            {include file="$template/includes/alert.tpl" type="success" msg=$LANG.pwresetvalidationsent textcenter=true}

            

        {else}

            

            {if $securityquestion}

                <p class="text-center text-muted">{$LANG.pwresetsecurityquestionrequired}</p>
{if $errormessage}
                {include file="$template/includes/alert.tpl" type="error" msg=$errormessage textcenter=true}
            {/if}
                <form method="post" action="pwreset.php"  class="js-validation-reminder form-horizontal push-30-t form-stacked">
                    <input type="hidden" name="action" value="reset" />
                    <input type="hidden" name="email" value="{$email}" />
					<div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="text" name="answer" class="form-control" id="inputAnswer">
                                            <label for="inputAnswer" style="color: #767676;">{$securityquestion}</label>
                                        </div>
                                    </div>
                    </div>

                    <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-sm btn-block btn-primary" type="submit">{$LANG.pwresetsubmit}</button>
                                    </div>
                    </div>

               </form>

            {else}

                <p class="text-center text-muted">{$LANG.pwresetemailneeded}</p>
{if $errormessage}
                {include file="$template/includes/alert.tpl" type="error" msg=$errormessage textcenter=true}
            {/if}
                <form class="js-validation-reminder form-horizontal push-30-t" method="post" action="{$systemsslurl}pwreset.php" role="form">
                    <input type="hidden" name="action" value="reset" />
                    <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="email" name="email" class="form-control" id="inputEmail">
                                            <label for="inputEmail" style="color: #767676;">{$LANG.loginemail}</label>
                                        </div>
                                    </div>
                    </div>
                    <div class="form-group">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                        <button class="btn btn-sm btn-block btn-primary" type="submit">{$LANG.pwresetsubmit}</button>
                                    </div>
                               </div>

                </form>
                <!-- Extra Links -->
                            <div class="text-center push-50-t">
                                <a href="login.php" style="color: #00AAFF;">返回登录页 >></a>
                            </div>
                            <!-- END Extra Links -->

            {/if}

        {/if}
    {/if}
