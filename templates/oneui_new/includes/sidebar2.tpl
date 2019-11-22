{foreach $sidebar as $item}
    <div menuItemName="{$item->getName()}" class="panel{if $item->getClass()}{$item->getClass()}{else}panel-sidebar{/if}"{if $item->getAttribute('id')} id="{$item->getAttribute('id')}"{/if}>
        {if $item->hasChildren()}
            <div class="{if $item->getChildrenAttribute('class')} {$item->getChildrenAttribute('class')}{/if}">
                {foreach $item->getChildren() as $childItem}
				{if $childItem->isDisabled()}
				{else}
                    {if $childItem->getUri()}
                        <a menuItemName="{$childItem->getName()}" href="{$childItem->getUri()}" class="list-group-item{if $childItem->isDisabled()} disabled{/if}{if $childItem->getClass()} {$childItem->getClass()}{/if}{if $childItem->isCurrent()} active{/if}"{if $childItem->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $childItem->getAttribute('target')} target="{$childItem->getAttribute('target')}"{/if} id="{$childItem->getId()}">
                            <span style="margin-left: 15px;">{$childItem->getLabel()}</span>
                        </a>
                    {else}
                        <div menuItemName="{$childItem->getName()}" class="list-group-item{if $childItem->getClass()} {$childItem->getClass()}{/if}" id="{$childItem->getId()}">
                            {if $childItem->hasBadge()}<span class="badge">{$childItem->getBadge()}</span>{/if}
                            {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                            {$childItem->getLabel()}
                        </div>
                    {/if}
                  {/if}
                {/foreach}
            </div>
        {/if}
        {if $item->hasFooterHtml()}
            <div class="{if $item->getChildrenAttribute('class')} {$item->getChildrenAttribute('class')}{/if}">
                {$item->getFooterHtml()}
            </div>
        {/if}
    </div>
{/foreach}

