<div class="row">
	{if $params['qiye'] == 'on'}
	<div class="col-sm-4">
		<a class="box 
			{if ($userinfo->type eq 'Company' and $userinfo->validation eq 'Pending') or ($userinfo->type eq 'Company' and $userinfo->validation eq 'yes')}
				active
			{else if $userinfo->validation eq '' or $userinfo->validation eq 'no'}
				
			{else}
				disabled
			{/if}" href="
				{if ($userinfo->type eq 'Company' and $userinfo->validation eq 'Pending') or ($userinfo->validation eq '' or $userinfo->validation eq 'no') or ($userinfo->type eq 'Company' and $userinfo->validation eq 'yes')}
					{$currentpagelinkback}action=qiye
				{else}
					#
				{/if}">
			<span class="hot">推荐</span>
			<img src="{$systemurl}/modules/addons/authentication/templates/assets/img/qiye.svg" />
			<h3>企业营业执照</h3>
			<h5>需上传清晰营业执照照片<br>3-5个工作日完成审核</h5>
			<span class="btn btn-primary">
				{if $userinfo->type eq 'Company' and $userinfo->validation eq 'Pending'}
				待审核
				{else if $userinfo->type eq 'Company' and $userinfo->validation eq 'yes'}
				认证完成
				{else}
				去认证
				{/if}
			</span>
		</a>
	</div>
	{/if}
	<div class="col-sm-4 hide">
		<a class="box {if $userinfo->type == 'Company2' and $userinfo->validation == 'Pending' or $userinfo->validation eq 'yes'}active{/if}" href="{$currentpagelinkback}action=duigong">
			<span class="hot no">未开放</span>
			<img src="{$systemurl}/modules/addons/authentication/templates/assets/img/zhima.svg" />
			<h3>对公账号</h3>
			<h5>给对公账号打款认证<br>认证周期7个工作日</h5>
			<span class="btn btn-primary">去认证</span>
		</a>
	</div>
</div>