{if $_errors}
<div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
    {foreach from=$_errors item=error}
    <p>{$error}</p>
    {/foreach}
</div>
{/if}