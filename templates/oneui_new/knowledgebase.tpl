<section class="content-full content-boxed container push-50-t" style="margin-bottom: 150px;">

						{if $kbcats}
						<div class="row">
                    	{foreach from=$kbcats name=kbcats item=kbcat}
                            <div class="col-sm-4">
                            	<a href="{if $seofriendlyurls}{$WEB_ROOT}/knowledgebase/{$kbcat.id}/{$kbcat.urlfriendlyname}{else}knowledgebase.php?action=displaycat&amp;catid={$kbcat.id}{/if}">
                                <div class="panel panel-block" style="padding: 25px 20px 22px 20px;margin: 0 auto 30px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);border-radius: 3px;">
                                    <h2 class="panel-title h4" style="color: #00ACD4;">{$kbcat.name} <span class="label label-primary pull-right" style="background-color: #00AAFF;">{$kbcat.numarticles}</span></h2>
                                    <p class="text-muted" style="margin-top: 15px;">{$kbcat.description}</p>
                                </div>
                            	</a>
                            </div>
                        {/foreach}
						</div>    
                        {else}
						    {include file="$template/includes/alert.tpl" type="info" msg=$LANG.knowledgebasenoarticles textcenter=true}
						{/if} 

{if $kbmostviews}

    <h5 class="push-15 push-10-t">{$LANG.knowledgebasepopular}</h5>

    <div class="kbarticles">
        {foreach from=$kbmostviews item=kbarticle}
            <a href="{routePath('knowledgebase-article-view', {$kbarticle.id}, {$kbarticle.urlfriendlytitle})}">
                <span class="glyphicon glyphicon-file"></span>&nbsp;{$kbarticle.title}
            </a>
            <p>{$kbarticle.article|truncate:100:"..."}</p>
        {/foreach}
    </div>

{/if}
</section>