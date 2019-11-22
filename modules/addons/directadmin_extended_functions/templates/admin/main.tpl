<div data-ng-app="appCRM" class="mg-wrapper body" data-target=".body" data-spy="scroll" data-twttr-rendered="true" style="min-width: 300px;">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/uniform.default.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/components-rounded.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/select2.css" />
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/onoffswitch.css" />
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/tiatoggle.css" />
    
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/mg-style.css" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="{$assetsURL}/css/icheck/all.css" rel="stylesheet">   
    
    <script type="text/javascript" src="{$assetsURL}/js/mgLibs.js"></script>
    <script type="text/javascript" src="{$assetsURL}/js/bootstrap.js"></script>
    <script type="text/javascript" src="{$assetsURL}/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="{$assetsURL}/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="{$assetsURL}/js/select2.min.js"></script>
    <script type="text/javascript" src="{$assetsURL}/js/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="{$assetsURL}/js/icheck.min.js"></script>
    <script type="text/javascript">
        JSONParser.create('{$JSONCurrentUrl}');
    </script>
    
    <div class="full-screen-module-container">
        <div class="page-header">
            <div class="top-menu">
                <div class="page-container">
                    <div class="modulename-logo">
                        <a href="http://www.modulesgarden.com" target="_blank"><img src="{$assetsURL}/img/mg-logo.png" alt="logo" class="logo-default"></a>
                    </div>
                    <div class="nav-menu">
                        <ul class="nav navbar-nav">
                            <li class="modulename">
                                <div><a href="{$mainURL}">DirectAdmin Extended Center</a></div>
                                <small>{$MGLANG->T('pagesLabels',$currentPageName,'label')}</small>
                            </li>
                            {foreach from=$menu key=catName item=category}
                                {if $category.submenu}
                                    <li class="menu-dropdown">
                                        <a href="{$category.url}" data-hover="dropdown" data-close-others="true">
                                            {if $category.icon}<i class="{$category.icon}"></i>{/if}
                                            {if $category.label}
                                                {$subpage.label}
                                            {else}
                                                {$MGLANG->T('pagesLabels',$catName,'label')}
                                            {/if}
                                            <i class="fa fa-angle-down dropdown-angle"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-left">
                                            {foreach from=$category.submenu key=subCatName item=subCategory}
                                                <li>
                                                    <a href="{$subCategory.url}">
                                                        {if $subCategory.icon}<i class="{$subCategory.icon}"></i>{/if} 
                                                        {if $subCategory.label}
                                                            {$subCategory.label}
                                                        {else}
                                                            {$MGLANG->T('pagesLabels',$catName,$subCatName)}
                                                        {/if}
                                                    </a>
                                                </li>
                                            {/foreach}
                                        </ul>
                                    </li>
                                {else}
                                    <li>
                                        <a href="{$category.url}">
                                            {if $category.icon}<i class="{$category.icon}"></i>{/if} 
                                            {if $category.label}
                                                {$subpage.label}
                                            {else}
                                                {$MGLANG->T('pagesLabels',$catName,'label')}
                                            {/if}
                                        </a>
                                    </li>
                                {/if}
                            {/foreach}
                            <li>
                                <a href="http://www.docs.modulesgarden.com/DirectAdmin_Extended_For_WHMCS" target="_blank">
                                    <i class="fa fa-book"></i> {$MGLANG->T('pagesLabels','documentation','label')}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>              
        <div class="page-container">
            <div class="row-fluid" id="MGAlerts">
                {if $error}
                    <div class="note note-danger">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                        <p><strong>{$error}</strong></p>
                    </div>
                {/if}
                {if $success}
                    <div class="note note-success">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                        <p><strong>{$success}</strong></p>
                    </div>
                {/if}
                <div style="display:none;" data-prototype="error">
                    <div class="note note-danger">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                        <strong></strong>
                        <a style="display:none;" class="errorID" href=""></a>
                    </div>
                </div>
                <div style="display:none;" data-prototype="success">
                    <div class="note note-success">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                        <strong></strong>
                    </div>
                </div>
            </div>
            <div class="page-content" id="MGPage{$currentPageName}">
                <div class="container-fluid">
                    {$content}
                </div>
            </div>
        </div>
    </div>
    <div id="MGLoader" style="display:none;" >
        <div>
            <img src="{$assetsURL}/img/ajax-loader.gif" alt="Loading ..." />
        </div>
    </div>   
</div>