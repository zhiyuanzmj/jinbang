{foreach $navbar as $item}
{if $item->hasChildren()}
								
								<li menuItemName="{$item->getName()}" class="{if $item->hasChildren()}dropdown{/if}{if $item->getClass()} {$item->getClass()}{/if}" id="{$item->getId()}">
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-{if $item->getName() eq 'Services'}layers{elseif $item->getName() eq 'Domains'}globe{elseif $item->getName() eq 'Billing'}wallet{elseif $item->getName() eq 'Support'}support{else}crop{/if}"></i><span class="sidebar-mini-hide">{$item->getLabel()}</span></a>
                                    <ul>{foreach $item->getChildren() as $childItem}
                                    	{if $childItem->getName() eq "Services Divider" || $childItem->getName() eq "Domains Divider" || $childItem->getName() eq "Domains Divider 2" || $childItem->getName() eq "Billing Divider"}{else}
                                        <li menuItemName="{$childItem->getName()}" id="{$childItem->getId()}">
                                            <a href="{$childItem->getUri()}">{$childItem->getLabel()}</a>
                                        </li>
                                        {/if}
                                        {/foreach}
                                    </ul>
                              </li>
{else}
    <li menuItemName="{$item->getName()}" class="{if $item->hasChildren()}dropdown{/if}{if $item->getClass()} {$item->getClass()}{/if}" id="{$item->getId()}">
        <a href="{$item->getUri()}">
            <i class="si si-{if $item->getName() eq 'Home'}speedometer{elseif $item->getName() eq 'Open Ticket'}note{elseif $item->getName() eq 'Affiliates'}diamond{else}crop{/if}"></i><span class="sidebar-mini-hide">{$item->getLabel()}</span>
        </a>
    </li>
  {/if}
{/foreach}

