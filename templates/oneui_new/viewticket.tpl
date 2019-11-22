{if $invalidTicketId}

    {include file="$template/includes/alert.tpl" type="danger" title=$LANG.thereisaproblem msg=$LANG.supportticketinvalid textcenter=true}

{else}

    {if $closedticket}
        {include file="$template/includes/alert.tpl" type="warning" msg=$LANG.supportticketclosedmsg textcenter=true}
    {/if}

    {if $errormessage}
        {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage}
    {/if}

{/if}

{if !$invalidTicketId}

<div class="col-sm-12" style="background: #eaedf1; padding: 20px 20px 14px 20px;">
<span style="color:#999;">{$LANG.supportticketssubject}：</span><b>{$subject}</b>{if $showclosebutton}<input type="button" value="{$LANG.supportticketsclose}" class="btn btn-danger btn-sm pull-right" onclick="window.location='{$smarty.server.PHP_SELF}?tid={$tid}&amp;c={$c}&amp;closeticket=true'" style="color: #fff;background-color: #F3565D;border-color: #f13e46; border-radius: 0; font-weight: 400;" />{/if}<br>
<div class="row" style="margin-top:15px;">
	<div class="col-sm-3"><span style="color:#999;">{$LANG.supportticketsticketid}：</span># {$tid}</div>
	<div class="col-sm-3"><span style="color:#999;">{$LANG.supportticketsdepartment}：</span>{$department}</div>
	<div class="col-sm-3"><span style="color:#999;">{$LANG.supportticketsstatus}：</span>{$status}</div>
	<div class="col-sm-3"><span style="color:#999;">{$LANG.supportticketsticketurgency}：</span>{$urgency}</div>
</div>
</div>

<div class="row"><div class="col-sm-12" style="margin-top:8px;">
<div class="table-viewer-header">
<span style="font-size:14px;">{$LANG.gtjl}</span>&nbsp;&nbsp;<a href="#hfgd" class="btn btn-xs btn-warning active" style="border-color: #e68f11;border-radius: 0; font-weight: 400;">回复此工单</a>
</div>
<div class="table-viewer-body">
    {foreach from=$descreplies key=num item=reply}
        <div class="ticket-reply markdown-content{if $reply.admin} staff{/if}">
            <div class="date">
                <font color="#777777">{$reply.date}</font>
            </div>
            <div class="user">
                <i class="si si-{if $reply.admin}earphones{else}user{/if}" {if $reply.admin}{else}style="color:#777;"{/if}></i>
                <span class="name">
                    {if $reply.admin}{$reply.name}{else}<font color="#777777">{$reply.name}</font>{/if}
                </span>
                <span class="label label-sm label-{if $reply.admin}primary{else}default{/if}" style="font-size: 12px;padding: 2px 4px 1px 4px;border-radius: 0;font-weight: 400;">
                    {if $reply.admin}
                        {$LANG.supportticketsstaff}
                    {elseif $reply.contactid}
                        {$LANG.supportticketscontact}
                    {elseif $reply.userid}
                        {$LANG.supportticketsclient}
                    {else}
                        {$reply.email}
                    {/if}
                </span>
            </div>
            <div class="message">
                {if $reply.admin}<b>{$reply.message}</b>{else}<font color="#777777">{$reply.message}</font>{/if}
                {if $reply.id && $reply.admin && $ratingenabled}
                    <div class="clearfix">
                        {if $reply.rating}
                            <div class="rating-done">
                                {for $rating=1 to 5}
                                    <span class="star{if (5 - $reply.rating) < $rating} active{/if}"></span>
                                {/for}
                                <div class="rated">{$LANG.ticketreatinggiven}</div>
                            </div>
                        {else}
                            <div class="rating" ticketid="{$tid}" ticketkey="{$c}" ticketreplyid="{$reply.id}">
                                <span class="star" rate="5"></span>
                                <span class="star" rate="4"></span>
                                <span class="star" rate="3"></span>
                                <span class="star" rate="2"></span>
                                <span class="star" rate="1"></span>
                            </div>
                        {/if}
                    </div>
                {/if}
            </div>
            {if $reply.attachments}
                <div class="attachments">
                    <strong>{$LANG.supportticketsticketattachments} ({$reply.attachments|count})</strong>
                    <ul><div class="row">
                        {foreach from=$reply.attachments key=num item=attachment}
                        <div class="col-sm-3 col-xs-6" style="margin-bottom:5px;">
                            <i class="fa fa-file-o"></i> <a href="dl.php?type={if $reply.id}ar&id={$reply.id}{else}a&id={$id}{/if}&i={$num}">{$attachment}</a></div>
                        {/foreach}</div>
                    </ul>
                </div>
            {/if}
        </div>
    {/foreach}
</div>
</div></div>

<div class="row"><div class="col-sm-12" style="margin-top:8px;">

	<div class="table-viewer-header" id="hfgd">
<span style="font-size:14px;">{$LANG.supportticketsreply}</span>
</div>
<div class="table-viewer-body">
            <form method="post" action="{$smarty.server.PHP_SELF}?tid={$tid}&amp;c={$c}&amp;postreply=true" enctype="multipart/form-data" role="form" id="frmReply">

                <div class="row">
                    <div class="form-group col-sm-4">
                        <label for="inputName">{$LANG.supportticketsclientname}</label>
                        {if $loggedin}
                            <input class="form-control disabled" type="text" id="inputName" value="{$clientname}" disabled="disabled" />{else}<input class="form-control" type="text" name="replyname" id="inputName" value="{$replyname}" />
                        {/if}
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="inputEmail">{$LANG.supportticketsclientemail}</label>
                        {if $loggedin}
                            <input class="form-control disabled" type="text" id="inputEmail" value="{$email}" disabled="disabled" />{else}<input class="form-control" type="text" name="replyemail" id="inputEmail" value="{$replyemail}" />
                        {/if}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputMessage">{$LANG.contactmessage}</label>
                    <textarea name="replymessage" id="inputMessage" rows="12" class="form-control markdown-editor" data-auto-save-name="client_ticket_reply_{$tid}">{$replymessage}</textarea>
                </div>

                <div class="row form-group">
                    <div class="col-sm-12">
                        <label for="inputAttachments">{$LANG.supportticketsticketattachments}</label>
                    </div>
                    <div class="col-sm-9">
                        <input type="file" name="attachments[]" id="inputAttachments" class="form-control" />
                        <div id="fileUploadsContainer"></div>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-default btn-block" onclick="extraTicketAttachment()">
                            <i class="fa fa-plus"></i> {$LANG.addmore}
                        </button>
                    </div>
                    <div class="col-xs-12 ticket-attachments-message text-muted">
                        {$LANG.supportticketsallowedextensions}: {$allowedfiletypes}
                    </div>
                </div>

                <div class="form-group text-center">
                    <input class="btn btn-primary" type="submit" name="save" value="{$LANG.supportticketsticketsubmit}" />
                    <input class="btn btn-default" type="reset" value="{$LANG.cancel}" onclick="jQuery('#ticketReply').click()" />
                </div>

            </form>

</div>
</div>
</div>
{/if}
