
    {if $invalidlink}

        {include file="$template/includes/alert.tpl" type="danger" msg=$invalidlink textcenter=true}

    {elseif $success}

        {include file="$template/includes/alert.tpl" type="success" msg=$LANG.pwresetvalidationsuccess textcenter=true}

        <p class="text-center text-muted">
            {$LANG.pwresetsuccessdesc|sprintf2:'<a href="clientarea.php" style="color: #00AAFF;">':'</a>'}
        </p>

    {else}
		<p class="text-center text-muted">{$LANG.pwresetenternewpw}</p>
        {if $errormessage}
            {include file="$template/includes/alert.tpl" type="danger" msg=$errormessage textcenter=true}
        {/if}

        <form class="js-validation-reminder form-horizontal push-30-t using-password-strength" method="post" action="{$smarty.server.PHP_SELF}?action=pwreset">
            <input type="hidden" name="key" id="key" value="{$key}" />
					<div id="newPassword1" class="form-group has-feedback">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="password" name="newpw" id="inputNewPassword1" class="form-control" autocomplete="off" />
                                        	<label for="inputNewPassword1" style="color: #767676;">{$LANG.newpassword}</label>
                                        	<span class="form-control-feedback glyphicon glyphicon-password"></span>
                                        </div>
                                    </div>
                   </div>
                   <div id="newPassword2" class="form-group has-feedback">
                                    <div class="col-xs-12">
                                        <div class="form-material form-material-primary floating">
                                        	<input type="password" name="confirmpw" id="inputNewPassword2" class="form-control" autocomplete="off" />
                                        	<label for="inputNewPassword2" style="color: #767676;">{$LANG.confirmnewpassword}</label>
                                        	<span class="form-control-feedback glyphicon glyphicon-password"></span>
                							<div id="inputNewPassword2Msg"></div>
                                        </div>
                                    </div>
                   </div>

            <div class="form-group">
            	<div class="col-xs-12">
                <label class="control-label">{$LANG.pwstrength}</label>
                {include file="$template/includes/pwstrength.tpl"}
               </div>
            </div>

            <div class="form-group">
            	<div class="col-xs-12">
                <div class="text-center">
                    <input class="btn btn-primary" type="submit" name="submit" value="{$LANG.clientareasavechanges}" style="background-color: #00AAFF;border-color: #00AAFF;color: #fff;" />
                    <input class="btn btn-default" type="reset" value="{$LANG.cancel}" />
                </div>
               </div>
            </div>

        </form>

    {/if}
