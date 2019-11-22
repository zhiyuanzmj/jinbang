<tbody>
{if isset($error)}
    <tr><td colspan="4">{$lang.cannot_load_list}</td></tr>
{elseif empty($list)}
    <tr><td colspan="4">{$lang.no_data}</td></tr>
{else}
    {foreach from=$list key="name" item="subscribers"}
        <tr>
            <td  class="cell-sm-12"><a href="mailto:{$name}@{$_params.domain}">{$name}@{$_params.domain}</a></td>
            <td  class="cell-sm-12">{$subscribers[0]}</td>
            <td class="cell-sm-12">{$subscribers[1]}</td>
            <td class="cell-sm-12 cell-actions">
                <a class="btn btn-icon" data-toggle="modal" data-target="#delete-confirmation" data-modal-insert="[name='name']:{$name|rawurlencode}" title="{$lang.delete}"><i class="fa fa-trash"></i></a>
                <a class="btn btn-icon" href="{$_burl}&page=mailinglists&view=view&name={$name|rawurlencode}" title="{$lang.view}"><i class="fa fa-eye"></i></a>
                <a class="btn btn-icon" href="{$_burl}&page=mailinglists&view=settings&name={$name|rawurlencode}" title="{$lang.settings}"><i class="fa fa-cogs"></i></a>
            </td>
        </tr>
    {/foreach}
{/if}
</tbody>
