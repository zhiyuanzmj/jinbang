<section class="content-full content-boxed container">
<div class="bg-white push-50-t" style="border-radius: 5px;padding: 20px 25px 50px 25px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);margin-bottom: 150px;">
{if $announcementsFbRecommend}
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/{$LANG.locale}/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
{/if}
{foreach from=$announcements item=announcement}
                            <a href="{routePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}" style="display: block;padding-bottom: 12px; margin-top: 20px;border-bottom: 1px solid #eee;">{$announcement.title}<span class="pull-right text-muted hidden-sm hidden-xs" style="font-size: 12px;">{"jS M Y"|date:$announcement.timestamp}</span></a>

        {if $announcementsFbRecommend}
            <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="{fqdnRoutePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
            <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="{fqdnRoutePath('announcement-view', $announcement.id, $announcement.urlfriendlytitle)}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
        {/if}
        
{foreachelse}

    {include file="$template/includes/alert.tpl" type="info" msg="{$LANG.noannouncements}" textcenter=true}

{/foreach}

{if $prevpage || $nextpage}
	<div class="text-center">
        <nav class="post-navigation navigation pagination" role="navigation" style="margin: 50px 0 0 0;">
            <div class="nav-links">
            	{if $prevpage}
                <a class="page-numbers btn btn-sm" href="{routePath('announcement-index-paged', $prevpage, $view)}" style="color: #00AAFF;"><i class="fa fa-long-arrow-left"></i></a>
                {else}
                <span class="page-numbers btn btn-sm " style="color: #ddd;"><i class="fa fa-long-arrow-left"></i></span>
                {/if}
                <span class="page-numbers btn btn-sm btn-primary btn-outline btn-circle active" style="background-color: #00AAFF;color: #fff;border-color: #00AAFF;">{$pagenumber}</span>
                {if $nextpage}
                <a class="page-numbers btn btn-sm" href="{routePath('announcement-index-paged', $nextpage, $view)}" style="color: #00AAFF;"><i class="fa fa-long-arrow-left"></i></a>
                {else}
                <span class="page-numbers btn btn-sm" style="color: #ddd;"><i class="fa fa-long-arrow-right"></i></span>
                {/if}
            </div>
        </nav>
   </div>
   {/if}
</div>
</section>