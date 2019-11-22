{foreach $sidebar as $item}
        {if $item->hasChildren()}
                {foreach $item->getChildren() as $childItem}
				{if $childItem->isDisabled()}
				{else}
                <li class="{if $item->getClass()}{$item->getClass()}{else}panel-default{/if}{if $item->getExtra('mobileSelect') and $item->hasChildren()} hidden-sm hidden-xs{/if}{if $childItem->isCurrent()} active{/if}{if $childItem->isDisabled()} hidden{/if}"{if $item->getAttribute('id')} id="{$item->getAttribute('id')}"{/if}>
                <a menuItemName="{$childItem->getName()}" href="{$childItem->getUri()}" class="list-group-item{if $childItem->isDisabled()} disabled{/if}{if $childItem->getClass()} {$childItem->getClass()}{/if}{if $childItem->isCurrent()} active{/if}"{if $childItem->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $childItem->getAttribute('target')} target="{$childItem->getAttribute('target')}"{/if} id="{$childItem->getId()}" style="line-height:30px;">
                            {if $childItem->hasBadge()}<span class="badge pull-right" style="margin-top:6px;">{$childItem->getBadge()}</span>{/if}
                            {$childItem->getLabel()}
                </a>
                </li>
			{/if}
                {/foreach}
        {/if}
{/foreach}