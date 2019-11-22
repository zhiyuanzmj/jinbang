<link href="{$WEB_ROOT}/modules/addons/authentication/templates/assets/css/css.css?v55" rel="stylesheet">
<div class="u-p-medium authentication">
	{if $action == 'zhima'}
		{include file="./zhima.tpl"}
	{elseif $action == 'shenfen'}
		{include file="./shenfen.tpl"}
	{elseif $action == 'qiye'}
		{include file="./qiye.tpl"}
	{else}
	<div class="row">
		<div class="col-sm-3">
			<h3 style="font-size: 14px;line-height: 1.42857143;padding: 10px 15px;border-bottom: 2px solid #62B900;color: #62B900;margin: 0;">认证信息</h3>
			<div class="info text-center">
				<img class="avatar" src="//gravatar.neworld.org/avatar/{$clientsdetails.email|md5}?s=100&d={$systemurl}templates/{$template}/assets/img/default_family.jpg" alt="" />
				{if $clientsdetails.firstname != '' && $clientsdetails.lastname != '' && $clientsdetails.lastname != '姓' && $clientsdetails.firstname != '名'}
					<a class="text-muted" href="clientarea.php?action=details">{$clientsdetails.firstname} {$clientsdetails.lastname}</a>
				{else}
					<a class="text-muted" href="clientarea.php?action=details">{$clientsdetails.email}</a>
				{/if}
				{if $userinfo->validation eq ''}
					<span class="label label-default">尚未申请实名认证<br/>请点击右侧服务进行认证</span>
				{elseif $userinfo->validation eq 'no'}
					<span class="label label-danger">提交的认证信息未通过审核<br/>请重新提交</span>
				{elseif $userinfo->validation eq 'Pending'}
					<span class="label label-warning">已提交实名认证<br/>请耐心等待审核通过</span>
				{else}
					<span class="label label-success">已通过{if $userinfo->type eq 'Personal' or $userinfo->type eq 'Personal2'}个人{else}企业{/if}实名认证</span>
				{/if}
			</div>
		</div>
		<div class="col-sm-9">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#personal" aria-controls="personal" role="tab" data-toggle="tab">个人认证</a>
				</li>
				<li role="presentation">
					<a href="#company" aria-controls="company" role="tab" data-toggle="tab">企业认证</a>
				</li>
			</ul>
		
			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="personal">
					{include file="./personal.tpl"}
				</div>
				<div role="tabpanel" class="tab-pane" id="company">
					{include file="./company.tpl"}
				</div>
			</div>
		</div>
	</div>
{/if}