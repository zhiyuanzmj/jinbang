<section class="mg-cad-slick {$parentClass}" data-slick='{$dataSlick}'>
    {section name=k start=0 loop=$loop step=1}
        {assign var="i" value=$smarty.section.k.index}
        {if $slickItems.fileContent.$i}
            <div>
                {if $slickItems.url.$i} 
                    <a href="{$slickItems.url.$i}"><img src="{$slickItems.fileContent.$i}"/></a>
                {else}
                    <img src="{$slickItems.fileContent.$i}"/>
                {/if}
             </div>
            {/if}
            {if $slickItems.html.$i}
            <div> {$slickItems.html.$i|htmlspecialchars_decode}</div>
            {/if}
    {/section}
</section>