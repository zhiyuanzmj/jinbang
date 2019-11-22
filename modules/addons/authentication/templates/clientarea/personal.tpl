<div class="row list">
	{if $params['zhima'] == 'on'}
	<div class="col-sm-4">
		<a class="box 
			{if ($userinfo->type eq 'Personal' and $userinfo->validation eq 'Pending') or ($userinfo->type eq 'Personal' and $userinfo->validation eq 'yes')}
				active
			{else if $userinfo->validation eq '' or $userinfo->validation eq 'no'}
				
			{else}
				disabled
			{/if}" href="
				{if ($userinfo->type eq 'Personal' and $userinfo->validation eq 'Pending') or ($userinfo->validation eq '' or $userinfo->validation eq 'no') or ($userinfo->type eq 'Personal' and $userinfo->validation eq 'yes')}
					{$currentpagelinkback}action=zhima
				{else}
					#
				{/if}">
			<span class="hot">推荐</span>
			<img src="{$systemurl}/modules/addons/authentication/templates/assets/img/zhima.svg" />
			<h3>人脸认证</h3>
			<h5>请在明亮地方认证<br/>简单便捷、实时通过</h5>
			<span class="btn btn-primary">
				{if $userinfo->type eq 'Personal' and $userinfo->validation eq 'Pending'}
				待审核
				{else if $userinfo->type eq 'Personal' and $userinfo->validation eq 'yes'}
				认证完成
				{else}
				去认证
				{/if}
			</span>
		</a>
	</div>
	{/if}
	{if $params['shenfen'] == 'on'}
	<div class="col-sm-4">
		<a class="box 
			{if ($userinfo->type eq 'Personal2' and $userinfo->validation eq 'Pending') or ($userinfo->type eq 'Personal2' and $userinfo->validation eq 'yes')}
				active
			{else if $userinfo->validation eq '' or $userinfo->validation eq 'no'}
				
			{else}
				disabled
			{/if}" href="
				{if ($userinfo->type eq 'Personal2' and $userinfo->validation eq 'Pending') or ($userinfo->validation eq '' or $userinfo->validation eq 'no') or ($userinfo->type eq 'Personal2' and $userinfo->validation eq 'yes')}
					{$currentpagelinkback}action=shenfen
				{else}
					#
				{/if}">
			<img src="{$systemurl}/modules/addons/authentication/templates/assets/img/shenfen.svg" />
			<h3>身份证认证</h3>
			<h5>需清晰的身份证照片<br>3-5个工作日完成审核</h5>
			<span class="btn btn-primary">
				{if $userinfo->type eq 'Personal2' and $userinfo->validation eq 'Pending'}
				待审核
				{else if $userinfo->type eq 'Personal2' and $userinfo->validation eq 'yes'}
				认证完成
				{else}
				去认证
				{/if}
			</span>
		</a>
	</div>
	{/if}
	<div class="col-sm-4 hide">
		<a class="box" href="{$currentpagelinkback}action=weixin">
			<span class="hot no">未开放</span>
			<img src="{$systemurl}/modules/addons/authentication/templates/assets/img/weixin.svg" />
			<h3>微信支付认证</h3>
			<h5>需要用微信支付0.01元<br>实时通过、费用即时退还</h5>
			<span class="btn btn-primary">去认证</span>
		</a>
	</div>
	<div class="col-sm-4 hide">
		<a class="box" href="{$currentpagelinkback}action=huzhao">
			<span class="hot no">未开放</span>
			<img src="{$systemurl}/modules/addons/authentication/templates/assets/img/huzhao.svg" />
			<h3>护照认证</h3>
			<h5>需要上传护照照片<br>3-5个工作日完成审核</h5>
			<span class="btn btn-primary">去认证</span>
		</a>
	</div>
</div>