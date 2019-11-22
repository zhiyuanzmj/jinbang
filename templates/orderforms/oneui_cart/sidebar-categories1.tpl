{foreach $secondarySidebar as $panel}
        {if $panel->hasBodyHtml()}
                {$panel->getBodyHtml()}
        {/if}
{/foreach}
