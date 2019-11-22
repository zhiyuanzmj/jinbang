<div class="module-header">
    <i class="icon-header icon-404"></i>
    <h1>{$lang.main_header}</h1>
    <p>{$lang.main_hint}</p>
</div>
<div class="module-body">                
    <div class="section">
        <div class="table-header">
            <div class="header-title">
                <h4>{$lang.error_pages_list}</h4>
            </div>
            <div class="header-actions">
                <div class="header-search">
                    <div class="input-icon">
                        <i class="fa fa-search"></i>
                        <input class="form-control" type="text" placeholder="{$lang.search_placeholder}" data-search="emails-table">
                    </div>
                </div>

            </div>
        </div>
        <table class="table" id="emails-table">
            <thead>
                <tr>
                    <th>{$lang.page_name}</th>
                    <th>{$lang.file}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$pages key="code" item="page"}
                {assign var="zatancz_w_mych_ramionach" value="code`$code`"}
                <tr>
                    <td>{$lang.$zatancz_w_mych_ramionach}</td>
                    <td>{$page}</td>
                    <td class="cell-actions">
                        <a class="btn btn-icon" data-act="view" data-query="errorpage={$page|rawurlencode}" title="{$lang.edit}"><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
</div>
            
{literal}
    <script type="text/javascript">
        
        jQuery( document ).ready( function() {
            function openNewWindowWithContent(content) {
                var w = window.open().document.write(content);
            }
            
            jQuery( document ).delegate("[data-preview]", 'click' , function() {
                openNewWindowWithContent(jQuery("#api_form :input[name=text]").val());
                return false;
            });
        });
    </script>
{/literal}
