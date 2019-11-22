<section class="content-full content-boxed container">
<div class="bg-white push-50-t" style="border-radius: 5px;padding: 35px 35px 40px 35px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);margin-bottom: 150px;">


{if $twittertweet}
    <div class="pull-right">
        <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="{$twitterusername}">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
    </div>
{/if}
<div class="text-center"><span class="h4">{$title}</span></div><hr>
                	{$text}<br><br><p class="text-right">{$companyname} 运营部<br><span class="text-muted">{$timestamp|date_format:"%A, %B %e, %Y"}</span></p>
{if $googleplus1}
    <br />
    <br />
    <g:plusone annotation="inline"></g:plusone>
    {literal}<script type="text/javascript">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
    </script>{/literal}
{/if}

{if $facebookrecommend}
    <br />
    <br />
    {literal}
    <div id="fb-root">
    </div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    {/literal}
    <div class="fb-like" data-href="{fqdnRoutePath('announcement-view', $id, $urlfriendlytitle)}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend">
    </div>
{/if}

{if $facebookcomments}
    <br />
    <br />
    {literal}
    <div id="fb-root">
    </div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    {/literal}
    <fb:comments href="{fqdnRoutePath('announcement-view', $id, $urlfriendlytitle)}" num_posts="5" width="500"></fb:comments>
{/if}

<p class="text-center">
    <a href="{routePath('announcement-index')}" class="btn btn-default">{$LANG.clientareabacklink}</a>
</p>


</div>
</section>