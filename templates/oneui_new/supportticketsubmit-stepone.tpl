<p>{$LANG.supportticketsheader}</p>

<br />

		<div class="row">
			{foreach from=$departments key=num item=department}
			<div class="col-md-{$LANG.ticknum}">
			<a href="{$smarty.server.PHP_SELF}?step=2&amp;deptid={$department.id}" class="balance_block1" style="margin-bottom: 30px;">
				<div>
					<i class="fa {if $department.id == "{$LANG.s1}"}fa-comment-o{elseif $department.id == "{$LANG.s2}"}fa-support{elseif $department.id == "{$LANG.s3}"}fa-credit-card{elseif $department.id == "{$LANG.s4}"}fa-ticket{elseif $department.id == "{$LANG.s5}"}fa-user{elseif $department.id == "{$LANG.s6}"}fa-edit{else}fa-envelope-o{/if}" style="color: #1e88e5; font-size: 30px;"></i>
				</div>
				<div>
					{$department.name}
				</div>
				<div>
					{if $department.description}
                        {$department.description}
                    {/if}
				</div>
			</a>
			</div>
			{foreachelse}
                {include file="$template/includes/alert.tpl" type="info" msg=$LANG.nosupportdepartments textcenter=true}
            {/foreach}
		</div>
