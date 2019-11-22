<section class="content-full content-boxed container push-50-t" style="margin-bottom: 150px;">
<p style="font-size: 14px;margin-top: -20px; margin-bottom: 20px;">{$breadcrumbnav}</p> 
{if $kbcats}
                   <div class="blocks row">
                    	{if $kbcats}
                    	{foreach from=$kbcats name=kbcats item=kbcat}
                            <div class="col-sm-4">
                            	<a href="{if $seofriendlyurls}{$WEB_ROOT}/knowledgebase/{$kbcat.id}/{$kbcat.urlfriendlyname}{else}knowledgebase.php?action=displaycat&amp;catid={$kbcat.id}{/if}">
                                <div class="panel panel-block" style="padding: 25px 20px 22px 20px;margin: 0 auto 30px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);border-radius: 3px;">
                                    <h2 class="panel-title h3">{$kbcat.name} <span class="label label-primary pull-right">{$kbcat.numarticles}</span></h2>
                                    <p class="text-muted" style="margin-top: 15px;">{$kbcat.description}</p>
                                </div>
                            	</a>
                            </div>
                        {/foreach}    
                        {else}
						    {include file="$template/includes/alert.tpl" type="info" msg=$LANG.knowledgebasenoarticles textcenter=true}
						{/if}    
                   </div>	
	
{/if}

{if $kbarticles || !$kbcats}
    <div class="blocks row">
    	<div class="col-sm-12">
    		<div class="panel panel-block" style="padding: 30px 0 20px 0;">
			<ul class="list-styled list-icon article_list" style="list-style: none;margin-left: -18px;">
				{foreach from=$kbarticles item=kbarticle}
                <li style="color: #7782aa;font-size: 15px;margin-bottom: 10px;letter-spacing: 1px;line-height: 30px;"><a href="{routePath('knowledgebase-article-view', {$kbarticle.id}, {$kbarticle.urlfriendlytitle})}"><i class="zmdi zmdi-file-text"></i>{$kbarticle.title}</a></li>
                {foreachelse}
            	{include file="$template/includes/alert.tpl" type="info" msg=$LANG.knowledgebasenoarticles textcenter=true}
                {/foreach}
            </ul>
           </div>
       </div>
    </div>
{/if}
</section>