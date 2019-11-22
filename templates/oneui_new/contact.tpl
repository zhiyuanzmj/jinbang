<section class="content-full content-boxed container">
<div class="bg-white push-50-t" style="border-radius: 5px;padding: 50px 25px 50px 25px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);margin-bottom: 150px;">

{if $sent}
    {include file="$template/includes/alert.tpl" type="success" msg=$LANG.contactsent textcenter=true}
{/if}

{if $errormessage}
    {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage}
{/if}

{if !$sent}
    <form method="post" action="contact.php" class="form-horizontal" role="form">
        <input type="hidden" name="action" value="send" />

            <div class="form-group">
                <label for="inputName" class="col-sm-3 control-label">{$LANG.supportticketsclientname}</label>
                <div class="col-sm-7">
                    <input type="text" name="name" value="{$name}" class="form-control" id="inputName" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-3 control-label">{$LANG.supportticketsclientemail}</label>
                <div class="col-sm-7">
                    <input type="email" name="email" value="{$email}" class="form-control" id="inputEmail" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputSubject" class="col-sm-3 control-label">{$LANG.supportticketsticketsubject}</label>
                <div class="col-sm-7">
                    <input type="subject" name="subject" value="{$subject}" class="form-control" id="inputSubject" />
                </div>
            </div>
            <div class="form-group">
                <label for="inputMessage" class="col-sm-3 control-label">{$LANG.contactmessage}</label>
                <div class="col-sm-7">
                    <textarea name="message" rows="7" class="form-control" id="inputMessage">{$message}</textarea>
                </div>
            </div>

            <div class="text-center margin-bottom">
                {include file="$template/includes/captcha.tpl"}
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">{$LANG.contactsend}</button>
                </div>
            </div>

    </form>

{/if}

</div>
</section>