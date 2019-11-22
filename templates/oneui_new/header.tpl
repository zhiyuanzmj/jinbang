<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="{$charset}" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>

    {include file="$template/includes/head.tpl"}

    {$headoutput}

</head>
<body data-phone-cc-input="{$phoneNumberInputStyle}"{if $templatefile == 'login' || $templatefile == 'logout' || $templatefile == 'clientregister' || $templatefile == 'pwreset' || $templatefile == 'pwresetvalidation'} style="background-color: #F5F5F5;"{/if}>

{$headeroutput}

{if $templatefile == 'homepage' || $filename == 'cart' || $filename == 'vps' || $filename == 'about' || $filename == 'solutions' || $filename == 'solutions1' || $filename == 'solutions2' || $filename == 'pages' || $filename == 'solutions3' || $filename == 'solutions4' || $filename == 'promotion' || $filename == 'webhosting' || $filename == 'dediserver' || $filename == 'tos' || $filename == 'yzm'|| $filename == 'aup' || $templatefile == 'announcements' || $templatefile == 'viewannouncement' || $filename == 'contact' || $filename == 'knowledgebase' || $templatefile == 'knowledgebase' || $templatefile == 'knowledgebasearticle' || $templatefile == 'knowledgebasecat' || $templatefile == 'downloads' || $templatefile == 'downloaddenied' || $templatefile == 'downloadscat' || $filename == 'downloads'}

{include file="$template/whmcstop/syheader.tpl" title=$displayTitle desc=$tagline}

{elseif $templatefile == 'login' || $templatefile == 'logout' || $templatefile == 'clientregister' || $templatefile == 'pwreset' || $templatefile == 'pwresetvalidation'}

{include file="$template/whmcstop/loginheader.tpl" title=$displayTitle desc=$tagline}

{else}

{include file="$template/whmcstop/hyzxheader.tpl" title=$displayTitle desc=$tagline}

{/if}

		<section id="main-body">
					<div class="main-content">
