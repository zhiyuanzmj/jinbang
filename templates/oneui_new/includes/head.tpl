<!-- Styling -->
<link href="{$WEB_ROOT}/templates/{$template}/css/all.min.css?v={$versionHash}" rel="stylesheet">
<link href="{$WEB_ROOT}/templates/{$template}/css/custom.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
    var csrfToken = '{$token}',
        markdownGuide = '{lang key="markdown.title"}',
        locale = '{if !empty($mdeLocale)}{$mdeLocale}{else}en{/if}',
        saved = '{lang key="markdown.saved"}',
        saving = '{lang key="markdown.saving"}';
</script>

<script src="{$WEB_ROOT}/templates/{$template}/js/scripts.min.js?v={$versionHash}"></script>

{if $templatefile == "viewticket" && !$loggedin}
  <meta name="robots" content="noindex" />
{/if}

{if $templatefile == 'homepage' || $filename == 'cart' || $filename == 'vps' || $filename == 'webhosting' || $filename == 'dediserver' || $filename == 'tos' || $filename == 'aup' || $templatefile == 'announcements' || $templatefile == 'viewannouncement' || $filename == 'contact' || $filename == 'knowledgebase' || $templatefile == 'knowledgebase' || $templatefile == 'knowledgebasearticle' || $templatefile == 'knowledgebasecat' || $templatefile == 'downloads' || $templatefile == 'downloaddenied' || $templatefile == 'downloadscat' || $filename == 'downloads'}
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="{$WEB_ROOT}/templates/{$template}/assets/css/oneui.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/magnific-popup/magnific-popup.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/slick/slick-theme.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/css/font.css">
{elseif $templatefile == 'login' || $templatefile == 'logout' || $templatefile == 'clientregister' || $templatefile == 'pwreset' || $templatefile == 'pwresetvalidation'}
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="{$WEB_ROOT}/templates/{$template}/assets/css/oneui.css">
{else}
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/css/bootstrap.min.css">
<link rel="stylesheet" id="css-main" href="{$WEB_ROOT}/templates/{$template}/assets/css/oneui.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/magnific-popup/magnific-popup.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/slick/slick-theme.min.css">
{/if}
