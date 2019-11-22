<section class="content-full content-boxed container push-50-t" style="margin-bottom: 150px;">
	<p style="font-size: 14px;margin-top: -20px; margin-bottom: 20px;">{$breadcrumbnav}</p> 
<div class="kb-article-title text-center push-30-t">
    <a href="#" class="btn btn-link btn-print" onclick="window.print();return false"><i class="fa fa-print"></i></a>
    <h2>{$kbarticle.title}</h2>
</div>

{if $kbarticle.voted}
    {include file="$template/includes/alert.tpl" type="success alert-bordered-left" msg="{lang key="knowledgebaseArticleRatingThanks"}" textcenter=true}
{/if}

<div class="bg-white push-30-t" style="border-radius: 5px;padding: 35px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);">

<div class="kb-article-content">
    {$kbarticle.text}
</div>
</div>
<ul class="kb-article-details">
    {if $kbarticle.tags }
        <li><i class="fa fa-tag"></i> {$kbarticle.tags}</li>
    {/if}
    <li><i class="fa fa-star"></i> {$kbarticle.useful} {$LANG.knowledgebaseratingtext}</li>
</ul>
<div class="clearfix"></div>

<div class="kb-rate-article hidden-print">
    <form action="{routePath('knowledgebase-article-view', {$kbarticle.id}, {$kbarticle.urlfriendlytitle})}" method="post">
        <input type="hidden" name="useful" value="vote">
        {if $kbarticle.voted}{$LANG.knowledgebaserating}{else}{$LANG.knowledgebasehelpful}{/if}
        {if $kbarticle.voted}
            {$kbarticle.useful} {$LANG.knowledgebaseratingtext} ({$kbarticle.votes} {$LANG.knowledgebasevotes})
        {else}
            <button type="submit" name="vote" value="yes" class="btn btn-lg btn-link"><i class="fa fa-thumbs-o-up"></i> {$LANG.knowledgebaseyes}</button>
            <button type="submit" name="vote" value="no" class="btn btn-lg btn-link"><i class="fa fa-thumbs-o-down"></i> {$LANG.knowledgebaseno}</button>
        {/if}
    </form>
</div>

</section>