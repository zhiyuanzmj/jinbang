{if $_infos}
<div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
    {foreach from=$_infos item=info}
    <p>{$info}</p>
    {/foreach}
</div>
{/if}