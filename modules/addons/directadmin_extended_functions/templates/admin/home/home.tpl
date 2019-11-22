{if $directadmin_not_installed_correctly}
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-danger">{$warning_parsed_lang|html_entity_decode}</div>
    </div>
</div>
{/if}
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{$MGLANG->T('panel', 'products')} <small>DirectAdmin Extended</small></h3>
            </div>
            <div class="panel-body">
                {foreach from=$directadmin_ex_hostings_list key=pid item=product}
                <div class="div-tr">
                    <div class="div-td"><b><a href="configproducts.php?action=edit&id={$product.pid}">#{$product.pid} {$product.group} - {$product.name}</a></b></div>
                    <div class="div-td"><span class="badge badge-success" data-toggle="tooltip" title="{$MGLANG->T('badge', 'active')}">{$product.active}</span></div>
                    <div class="div-td"><span class="badge badge-warning" data-toggle="tooltip" title="{$MGLANG->T('badge', 'suspended')}">{$product.suspended}</span></div>
                    <div class="div-td"><span class="badge badge-danger" data-toggle="tooltip" title="{$MGLANG->T('badge', 'terminated')}">{$product.terminated}</span></div>
                </div>
                {foreachelse}
                    {$MGLANG->T('info', 'no_product_configured_yet')}
                {/foreach}
            </div>
        </div>
            
       {if !empty($directadmin_products_list)}
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{$MGLANG->T('panel', 'products')} <small>DirectAdmin</small></h3>
            </div>
            <div class="panel-body">
                <div class="alert alert-info">{$MGLANG->T('info', 'directadmin_products_migrate')|html_entity_decode}</div>
                {foreach from=$directadmin_products_list item=product}
                <div class="div-tr">
                    <div class="div-td"><b><a href="configproducts.php?action=edit&id={$product.pid}">#{$product.pid} {$product.product_group} - {$product.product_name}</a></b></div>
                    <div class="div-td">
                        <a class="btn btn-success btn-inverse btn-sm" href="configproducts.php?action=edit&id={$product.pid}&tab=2">{$MGLANG->T('label', 'product_configuration')}</a>
                    </div>
                </div>
                {/foreach}
            </div>
        </div>
        {/if}
    </div>
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{$MGLANG->T('panel', 'servers')} <small>DirectAdmin {$MGLANG->T('panel', 'and')} DirectAdmin Extended</small></h3>
            </div>
            <div class="panel-body">
                {foreach from=$directadmin_servers_list item=server}
                <div class="div-tr">
                    <div class="div-td"><b><a href="configservers.php?action=manage&id={$server.id}">#{$server.id} {$server.name}</a></b></div>
                    <div class="div-td">
                        {$MGLANG->T('badge', 'active_accounts')} <span class="badge badge-success">{$server.accounts_count} / {$server.maxaccounts}</span>
                    </div>
                    <div class="div-td">
                        <form action="{if $server.secure eq 'on'}https{else}http{/if}://{if $server.hostname}{$server.hostname}{else}{$server.ipaddress}{/if}:{if $server.port}{$server.port}{else}2222{/if}/CMD_LOGIN" method="post" target="_blank">
                            <input name="username" value="{$server.username}" type="hidden">
                            <input name="password" value="{$server.password}" type="hidden">
                            <input name="referer" value="/" type="hidden">
                            <input value="DirectAdmin" type="submit" class="btn btn-success btn-inverse btn-sm" style="background-image: none;">
                        </form>
                    </div>
                </div>
               {foreachelse}
                    {$MGLANG->T('info', 'no_servers_configured_yet')}
               {/foreach}
            </div>
        </div>
    </div>
</div>
            
{literal}
    <style>
        [data-toggle="tooltip"] {
            cursor: default;
        }
        
        .mg-wrapper .badge-success {
            background-color: #46a546;
        }
        
        .mg-wrapper .badge-warning {
            background-color: #0768b8;
        }
        
        .mg-wrapper .badge-danger {
            background-color: #c43c35;
        }
        
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
{/literal}
