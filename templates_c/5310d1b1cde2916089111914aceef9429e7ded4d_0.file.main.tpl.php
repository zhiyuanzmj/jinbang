<?php
/* Smarty version 3.1.32, created on 2019-10-10 14:23:47
  from '/www/wwwroot/www.zfyun.top/modules/addons/ClientAreaDesigner/templates/admin/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9ece7361ed81_98502576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5310d1b1cde2916089111914aceef9429e7ded4d' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/modules/addons/ClientAreaDesigner/templates/admin/main.tpl',
      1 => 1538721470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9ece7361ed81_98502576 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mg-wrapper body" data-target=".body" data-spy="scroll" data-twttr-rendered="true">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=all" rel="stylesheet" type="text/css"/> 

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/uniform.default.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/components-rounded.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/onoffswitch.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/jquery-ui.min.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/css/mg-style.css" rel="stylesheet">    
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/mgLibs.js"><?php echo '</script'; ?>
>
    <?php if (!$_smarty_tpl->tpl_vars['isWHMCS6']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/select2.full.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/bootstrap-hover-dropdown.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/js/validator.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        JSONParser.create('<?php echo $_smarty_tpl->tpl_vars['JSONCurrentUrl']->value;?>
');
        
            jQuery(document).ready(function() {
                $("input[data-datepicker]").datepicker({
                    dateFormat: 'yy-mm-dd'
                });
                
                //used to change positioning inside of module navbar
                var navbar_in_two_lines    = false;                
                var navbar_width_hide_names    = 0;
                var resized_logo    = false;
                var mg_logo         = jQuery('.logo-default').attr( "src" );
                var mg_logo_cog     = mg_logo.replace("mg-logo.png","mg-logo-cog.png");
                
                function NavigationSet() {
                    var navbar_height = jQuery('.page-header').height();
                    
                    if(jQuery('.page-header').width()<=(jQuery('.nav-menu').width()+jQuery('.modulename-logo').width()+jQuery('.modulename > a').width()+40) && !navbar_in_two_lines) {
                        jQuery('.page-container').addClass('centered');
                        navbar_in_two_lines = true;
                    }
                    else if (jQuery('.page-header').width()>(jQuery('.nav-menu').width()+jQuery('.modulename-logo').width()+jQuery('.modulename > a').width()+40) && navbar_in_two_lines && !navbar_width_hide_names && !resized_logo) {
                        jQuery('.page-container').removeClass('centered');
                        navbar_in_two_lines=false; 
                    }
                    
                    //check if short logo should be shown
                    if(jQuery('.line-separator').width()<=(jQuery('.nav-menu').width()+jQuery('.modulename-logo').width())&&!resized_logo && !navbar_width_hide_names ){
                        jQuery('.logo-default').attr( "src", mg_logo_cog );
                        resized_logo=true;
                    //switch back logo to its full form
                    }else if(jQuery('.line-separator').width()>(jQuery('.nav-menu').width()+159)&&resized_logo && !navbar_width_hide_names  ){
                        jQuery('.logo-default').attr( "src", mg_logo ) ;
                        resized_logo=false;
                    }  
                    
                    //  hide page names from navigation bar
                    if(jQuery('.line-separator').width()<=(jQuery('.nav-menu').width()+jQuery('.modulename-logo').width())&&resized_logo ){
                        navbar_width_hide_names = jQuery('.page-header').width();
                        jQuery('.navbar-nav').addClass('short');
                    //  show page names from navigation bar                        
                    } else  if(navbar_width_hide_names < jQuery('.page-header').width() && navbar_width_hide_names!=0){
                        jQuery('.navbar-nav').removeClass('short');
                        navbar_width_hide_names = 0;
                    }
                  }
                  
                  $(document).ready(NavigationSet);
                  $(window).resize(NavigationSet);
            });




        
    <?php echo '</script'; ?>
>

    <div class="full-screen-module-container">
        <div class="page-header">  
            <div class="top-menu">
                <div class="page-container">
                    <div class="modulename">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['mainURL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['mainName']->value;?>
</a>
                    </div>
                    <div class="line-separator"></div>
                    <div class="nav-menu">
                        <ul class="nav navbar-nav">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value, 'category', false, 'catName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['catName']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['category']->value['submenu']) {?>
                                    <li class="menu-dropdown <?php if ($_smarty_tpl->tpl_vars['category']->value['isActive']) {?>active<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['category']->value['disableLink']) {?>
                                            <a href="#"  data-hover="dropdown" data-close-others="true">
                                            <?php if ($_smarty_tpl->tpl_vars['category']->value['icon']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
"></i><?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['category']->value['label']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['subpage']->value['label'];?>
 
                                            <?php } else { ?>
                                                <span class="mg-pages-label"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels','label',$_smarty_tpl->tpl_vars['catName']->value);?>
</span>
                                            <?php }?>
                                            <i class="fa fa-angle"></i>
                                            </a>
                                        <?php } else { ?>   
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
" data-hover="dropdown" data-close-others="true">
                                            <?php if ($_smarty_tpl->tpl_vars['category']->value['icon']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
"></i><?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['category']->value['label']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['subpage']->value['label'];?>

                                            <?php } else { ?>
                                                <span class="mg-pages-label"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels','label',$_smarty_tpl->tpl_vars['catName']->value);?>
</span>
                                            <?php }?>
                                            <i class="fa fa-angle"></i>
                                            </a>
                                        <?php }?>
                                        <ul class="dropdown-menu pull-left">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['submenu'], 'subCategory', false, 'subCatName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subCatName']->value => $_smarty_tpl->tpl_vars['subCategory']->value) {
?>
                                                <li>
                                                    <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['externalUrl']) {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['subCategory']->value['externalUrl'];?>
" target="_blank">
                                                        <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['icon']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['subCategory']->value['icon'];?>
"></i><?php }?> 
                                                        <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['label']) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['subCategory']->value['label'];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels',$_smarty_tpl->tpl_vars['catName']->value,$_smarty_tpl->tpl_vars['subCatName']->value);?>

                                                        <?php }?>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['subCategory']->value['url'];?>
">
                                                        <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['icon']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['subCategory']->value['icon'];?>
"></i><?php }?> 
                                                        <?php if ($_smarty_tpl->tpl_vars['subCategory']->value['label']) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['subCategory']->value['label'];?>

                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels',$_smarty_tpl->tpl_vars['catName']->value,$_smarty_tpl->tpl_vars['subCatName']->value);?>

                                                        <?php }?>
                                                    </a>
                                                    <?php }?>
                                                </li>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['category']->value['isActive']) {?>class="active"<?php }?>>
                                        <a href="<?php if ($_smarty_tpl->tpl_vars['category']->value['externalUrl']) {
echo $_smarty_tpl->tpl_vars['category']->value['externalUrl'];
} else {
echo $_smarty_tpl->tpl_vars['category']->value['url'];
}?>" <?php if ($_smarty_tpl->tpl_vars['category']->value['externalUrl']) {?>target="_blank"<?php }?>>
                                            <?php if ($_smarty_tpl->tpl_vars['category']->value['icon']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['category']->value['icon'];?>
"></i><?php }?> 
                                            <?php if ($_smarty_tpl->tpl_vars['category']->value['label']) {?>
                                                <span><?php echo $_smarty_tpl->tpl_vars['subpage']->value['label'];?>
</span>
                                            <?php } else { ?>
                                                <span><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels','label',$_smarty_tpl->tpl_vars['catName']->value);?>
</span>
                                            <?php }?>
                                        </a>
                                    </li>
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                        </ul>
                    </div>
                    
                    <div class="modulename-logo">
                        <a href="http://www.modulesgarden.com" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/img/mg-logo.png" alt="logo" class="logo-default"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>              
        <div class="page-container">
            <div class="row-fluid" id="MGAlerts">
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div class="note note-danger">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                        <p><strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong></p>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
                    <div class="note note-success">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                        <p><strong><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</strong></p>
                    </div>
                <?php }?>
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
            <div class="page-content" id="MGPage<?php echo $_smarty_tpl->tpl_vars['currentPageName']->value;?>
">
                <div class="container-fluid">
                    <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['mainURL']->value;?>
"><i class="fa fa-home"></i></a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value[0]) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumbs']->value[0]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels','label',$_smarty_tpl->tpl_vars['breadcrumbs']->value[0]['name']);?>
</a></li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['breadcrumbs']->value[1]) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumbs']->value[1]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['MGLANG']->value->T('pagesLabels',$_smarty_tpl->tpl_vars['breadcrumbs']->value[0]['name'],$_smarty_tpl->tpl_vars['breadcrumbs']->value[1]['name']);?>
</a></li> 
                            <?php }?>
                    </ul>
                    
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                </div>
            </div>
        </div>
    </div>
    <div id="MGLoader" style="display:none;" >
        <div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['assetsURL']->value;?>
/img/ajax-loader.gif" alt="Loading ..." />
        </div>
    </div>   
</div><?php }
}
