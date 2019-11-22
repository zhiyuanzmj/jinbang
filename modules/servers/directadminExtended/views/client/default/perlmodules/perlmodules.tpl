<div class="module-header">
    <i class="icon-header icon-perlmodules"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">
    <div class="section">
        <h4>{$lang.perl_modules_list}</h4>
        <table class="table table-striped table-condensed">
            <tr>
            {foreach from=$list item="module" name="forxd"}
                <td>{$module}</td>
                {if $smarty.foreach.forxd.index % 3 eq 2}
                    </tr><tr>
                {/if}
            {/foreach}
            </tr>
        </table>
    </div>
</div>
 
{literal}
    <style type="text/css">
        #mg-wrapper table.table.table-condensed tr > td {
            padding: initial;
            padding-left: 10px;
            height: auto;
            font-size: smaller;
        }
    </style>
{/literal}