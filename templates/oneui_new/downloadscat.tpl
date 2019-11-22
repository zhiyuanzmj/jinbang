<section class="content-full content-boxed container push-50-t" style="margin-bottom: 150px;">
<p style="font-size: 14px;margin-top: -20px; margin-bottom: 20px;">{$breadcrumbnav}</p>
{if $dlcats}
					<div class=" row">
                    	{foreach $dlcats as $dlcat}
                            <div class="col-sm-4">
                            	<a href="{routePath('download-by-cat', $dlcat.id, $dlcat.urlfriendlyname)}">
                                <div class="panel panel-block" style="padding: 25px 20px 22px 20px;margin: 0 auto 30px;box-shadow: 1px 1px 22px rgba(157, 184, 209, 0.19);border-radius: 3px;">
                                    <h2 class="panel-title h3">{$dlcat.name} <span class="label label-primary pull-right" style="background-color: #00AAFF;">{$dlcat.numarticles}</span></h2>
                                    <p class="text-muted" style="margin-top: 15px;">{$dlcat.description}</p>
                                </div>
                            	</a>
                            </div>
                        {foreachelse}
				            <div class="col-sm-12">
				                <p class="text-center fontsize3">{$LANG.downloadsnone}</p>
				            </div>
                        {/foreach}     
                   </div>
{/if}

<h5 class="push-15 push-10-t">{$LANG.downloadsfiles}</h5>

    <div class="list-group">
        {foreach $downloads as $download}
            <a href="{$download.link}" class="list-group-item col-sm-4" style="position: relative;display: block;padding: 10px 15px;background-color: #fff;border: 1px solid #ddd;border-radius: 4px;">
                <h4 style="font-size: 15px;line-height: 30px;padding: 0 5px;">
                    <i class="fa fa-download"></i>
                    <b>{$download.title}</b>
                    {if $download.clientsonly}
                        <i class="fa fa-lock text-muted"></i>
                    {/if}
                    <small class="pull-right text-muted" style="font-size: 12px;margin-top: 10px;">{$LANG.downloadsfilesize}: {$download.filesize}</small>
                </h4>
                <h5 class="text-muted" style="font-size: 14px;line-height: 30px;font-weight: 300;padding: 0 5px;">{$download.description}</h5>
            </a>
        {foreachelse}
            <span class="list-group-item text-center">
                {$LANG.downloadsnone}
            </span>
        {/foreach}
    </div>

</section>