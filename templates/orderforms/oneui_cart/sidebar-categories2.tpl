{foreach $secondarySidebar as $panel}
<div class="tab-content">
						{if {$LANG.fl1kg} eq "1"}
						{assign var=value value=" "|explode:$productGroup.name}
        				<div class="tab-pane{if {$value[1]} eq "{$LANG.fl1}"} active{/if}" id="{$LANG.fl1}">
						<div class="nav nav-tabs" menuItemName="{$panel->getName()}" {if $panel->getAttribute('id')} id="{$panel->getAttribute('id')}"{/if}>
	        {if $panel->hasChildren()}
                        {foreach $panel->getChildren() as $child}
                    	{if $child->getUri()}
                    	{assign var=value value=" "|explode:$child->getLabel()}
        				{if {$value[1]} eq "{$LANG.fl1}"}
                    	<li class="{if $child->isCurrent()} active{/if}">
                        <a menuItemName="{$child->getName()}" href="{$child->getUri()}" class="{if $child->isDisabled()} disabled{/if}{if $child->getClass()} {$child->getClass()}{/if}{if $child->isCurrent()} active{/if}"{if $child->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $child->getAttribute('target')} target="{$child->getAttribute('target')}"{/if} id="{$child->getId()}">
                            {assign var=value value=" "|explode:$child->getLabel()}
                            <img src="templates/orderforms/{$carttpl}/img/flagsm_{$value[2]|lower}.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;">{$value[0]}
                        </a>
                    	</li>
                    	
                    	{/if}
                    	{/if}
                {/foreach}
            {/if}    
    					</div>
        				</div>
        				{/if}
        				
        				{if {$LANG.fl2kg} eq "1"}
						{assign var=value value=" "|explode:$productGroup.name}
        				<div class="tab-pane{if {$value[1]} eq "{$LANG.fl2}"} active{/if}" id="{$LANG.fl2}">
						<div class="nav nav-tabs" menuItemName="{$panel->getName()}" {if $panel->getAttribute('id')} id="{$panel->getAttribute('id')}"{/if}>
	        {if $panel->hasChildren()}
                        {foreach $panel->getChildren() as $child}
                    	{if $child->getUri()}
                    	{assign var=value value=" "|explode:$child->getLabel()}
        				{if {$value[1]} eq "{$LANG.fl2}"}
                    	<li class="{if $child->isCurrent()} active{/if}">
                        <a menuItemName="{$child->getName()}" href="{$child->getUri()}" class="{if $child->isDisabled()} disabled{/if}{if $child->getClass()} {$child->getClass()}{/if}{if $child->isCurrent()} active{/if}"{if $child->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $child->getAttribute('target')} target="{$child->getAttribute('target')}"{/if} id="{$child->getId()}">
                            {assign var=value value=" "|explode:$child->getLabel()}
                            <img src="templates/orderforms/{$carttpl}/img/flagsm_{$value[2]|lower}.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;">{$value[0]}
                        </a>
                    	</li>
                    	
                    	{/if}
                    	{/if}
                {/foreach}
            {/if}    
    					</div>
        				</div>
        				{/if}

        				{if {$LANG.fl3kg} eq "1"}
						{assign var=value value=" "|explode:$productGroup.name}
        				<div class="tab-pane{if {$value[1]} eq "{$LANG.fl3}"} active{/if}" id="{$LANG.fl3}">
						<div class="nav nav-tabs" menuItemName="{$panel->getName()}" {if $panel->getAttribute('id')} id="{$panel->getAttribute('id')}"{/if}>
	        {if $panel->hasChildren()}
                        {foreach $panel->getChildren() as $child}
                    	{if $child->getUri()}
                    	{assign var=value value=" "|explode:$child->getLabel()}
        				{if {$value[1]} eq "{$LANG.fl3}"}
                    	<li class="{if $child->isCurrent()} active{/if}">
                        <a menuItemName="{$child->getName()}" href="{$child->getUri()}" class="{if $child->isDisabled()} disabled{/if}{if $child->getClass()} {$child->getClass()}{/if}{if $child->isCurrent()} active{/if}"{if $child->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $child->getAttribute('target')} target="{$child->getAttribute('target')}"{/if} id="{$child->getId()}">
                            {assign var=value value=" "|explode:$child->getLabel()}
                            <img src="templates/orderforms/{$carttpl}/img/flagsm_{$value[2]|lower}.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;">{$value[0]}
                        </a>
                    	</li>
                    	
                    	{/if}
                    	{/if}
                {/foreach}
            {/if}    
    					</div>
        				</div>
        				{/if}

        				{if {$LANG.fl4kg} eq "1"}
						{assign var=value value=" "|explode:$productGroup.name}
        				<div class="tab-pane{if {$value[1]} eq "{$LANG.fl4}"} active{/if}" id="{$LANG.fl4}">
						<div class="nav nav-tabs" menuItemName="{$panel->getName()}" {if $panel->getAttribute('id')} id="{$panel->getAttribute('id')}"{/if}>
	        {if $panel->hasChildren()}
                        {foreach $panel->getChildren() as $child}
                    	{if $child->getUri()}
                    	{assign var=value value=" "|explode:$child->getLabel()}
        				{if {$value[1]} eq "{$LANG.fl4}"}
                    	<li class="{if $child->isCurrent()} active{/if}">
                        <a menuItemName="{$child->getName()}" href="{$child->getUri()}" class="{if $child->isDisabled()} disabled{/if}{if $child->getClass()} {$child->getClass()}{/if}{if $child->isCurrent()} active{/if}"{if $child->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $child->getAttribute('target')} target="{$child->getAttribute('target')}"{/if} id="{$child->getId()}">
                            {assign var=value value=" "|explode:$child->getLabel()}
                            <img src="templates/orderforms/{$carttpl}/img/flagsm_{$value[2]|lower}.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;">{$value[0]}
                        </a>
                    	</li>
                    	
                    	{/if}
                    	{/if}
                {/foreach}
            {/if}    
    					</div>
        				</div>
        				{/if}

        				{if {$LANG.fl5kg} eq "1"}
						{assign var=value value=" "|explode:$productGroup.name}
        				<div class="tab-pane{if {$value[1]} eq "{$LANG.fl5}"} active{/if}" id="{$LANG.fl5}">
						<div class="nav nav-tabs" menuItemName="{$panel->getName()}" {if $panel->getAttribute('id')} id="{$panel->getAttribute('id')}"{/if}>
	        {if $panel->hasChildren()}
                        {foreach $panel->getChildren() as $child}
                    	{if $child->getUri()}
                    	{assign var=value value=" "|explode:$child->getLabel()}
        				{if {$value[1]} eq "{$LANG.fl5}"}
                    	<li class="{if $child->isCurrent()} active{/if}">
                        <a menuItemName="{$child->getName()}" href="{$child->getUri()}" class="{if $child->isDisabled()} disabled{/if}{if $child->getClass()} {$child->getClass()}{/if}{if $child->isCurrent()} active{/if}"{if $child->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $child->getAttribute('target')} target="{$child->getAttribute('target')}"{/if} id="{$child->getId()}">
                            {assign var=value value=" "|explode:$child->getLabel()}
                            <img src="templates/orderforms/{$carttpl}/img/flagsm_{$value[2]|lower}.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;">{$value[0]}
                        </a>
                    	</li>
                    	
                    	{/if}
                    	{/if}
                {/foreach}
            {/if}    
    					</div>
        				</div>
        				{/if}

        				{if {$LANG.fl6kg} eq "1"}
						{assign var=value value=" "|explode:$productGroup.name}
        				<div class="tab-pane{if {$value[1]} eq "{$LANG.fl6}"} active{/if}" id="{$LANG.fl6}">
						<div class="nav nav-tabs" menuItemName="{$panel->getName()}" {if $panel->getAttribute('id')} id="{$panel->getAttribute('id')}"{/if}>
	        {if $panel->hasChildren()}
                        {foreach $panel->getChildren() as $child}
                    	{if $child->getUri()}
                    	{assign var=value value=" "|explode:$child->getLabel()}
        				{if {$value[1]} eq "{$LANG.fl6}"}
                    	<li class="{if $child->isCurrent()} active{/if}">
                        <a menuItemName="{$child->getName()}" href="{$child->getUri()}" class="{if $child->isDisabled()} disabled{/if}{if $child->getClass()} {$child->getClass()}{/if}{if $child->isCurrent()} active{/if}"{if $child->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $child->getAttribute('target')} target="{$child->getAttribute('target')}"{/if} id="{$child->getId()}">
                            {assign var=value value=" "|explode:$child->getLabel()}
                            <img src="templates/orderforms/{$carttpl}/img/flagsm_{$value[2]|lower}.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;">{$value[0]}
                        </a>
                    	</li>
                    	
                    	{/if}
                    	{/if}
                {/foreach}
            {/if}    
    					</div>
        				</div>
        				{/if}

        				{if {$LANG.fl7kg} eq "1"}
						{assign var=value value=" "|explode:$productGroup.name}
        				<div class="tab-pane{if {$value[1]} eq "{$LANG.fl7}"} active{/if}" id="{$LANG.fl7}">
						<div class="nav nav-tabs" menuItemName="{$panel->getName()}" {if $panel->getAttribute('id')} id="{$panel->getAttribute('id')}"{/if}>
	        {if $panel->hasChildren()}
                        {foreach $panel->getChildren() as $child}
                    	{if $child->getUri()}
                    	{assign var=value value=" "|explode:$child->getLabel()}
        				{if {$value[1]} eq "{$LANG.fl7}"}
                    	<li class="{if $child->isCurrent()} active{/if}">
                        <a menuItemName="{$child->getName()}" href="{$child->getUri()}" class="{if $child->isDisabled()} disabled{/if}{if $child->getClass()} {$child->getClass()}{/if}{if $child->isCurrent()} active{/if}"{if $child->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $child->getAttribute('target')} target="{$child->getAttribute('target')}"{/if} id="{$child->getId()}">
                            {assign var=value value=" "|explode:$child->getLabel()}
                            <img src="templates/orderforms/{$carttpl}/img/flagsm_{$value[2]|lower}.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;">{$value[0]}
                        </a>
                    	</li>
                    	
                    	{/if}
                    	{/if}
                {/foreach}
            {/if}    
    					</div>
        				</div>
        				{/if}

        				{if {$LANG.fl8kg} eq "1"}
						{assign var=value value=" "|explode:$productGroup.name}
        				<div class="tab-pane{if {$value[1]} eq "{$LANG.fl8}"} active{/if}" id="{$LANG.fl8}">
						<div class="nav nav-tabs" menuItemName="{$panel->getName()}" {if $panel->getAttribute('id')} id="{$panel->getAttribute('id')}"{/if}>
	        {if $panel->hasChildren()}
                        {foreach $panel->getChildren() as $child}
                    	{if $child->getUri()}
                    	{assign var=value value=" "|explode:$child->getLabel()}
        				{if {$value[1]} eq "{$LANG.fl8}"}
                    	<li class="{if $child->isCurrent()} active{/if}">
                        <a menuItemName="{$child->getName()}" href="{$child->getUri()}" class="{if $child->isDisabled()} disabled{/if}{if $child->getClass()} {$child->getClass()}{/if}{if $child->isCurrent()} active{/if}"{if $child->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $child->getAttribute('target')} target="{$child->getAttribute('target')}"{/if} id="{$child->getId()}">
                            {assign var=value value=" "|explode:$child->getLabel()}
                            <img src="templates/orderforms/{$carttpl}/img/flagsm_{$value[2]|lower}.png" style="margin-right: 8px; margin-top: -1px;box-shadow: 0 1px 1px rgba(0,0,0,0.15);width: auto;height: 14px;">{$value[0]}
                        </a>
                    	</li>
                    	
                    	{/if}
                    	{/if}
                {/foreach}
            {/if}    
    					</div>
        				</div>
        				{/if}


</div>	
{/foreach}

