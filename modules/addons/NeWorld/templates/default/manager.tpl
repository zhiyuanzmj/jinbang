<link rel="stylesheet" href="{$templates}assets/sweetalert/sweetalert.css">
<link rel="stylesheet" href="{$templates}assets/css/style.css?15">
<style type="text/css">
    h1 {
        display: none;
    }
</style>

{include file="./navbar.tpl"}

<div class="row">
	{if $notice}
    <div class="col-md-12">
	    {$notice}
    </div>
	{/if}
    <div class="col-md-12 page-content">
        {include file="./$PageName.tpl"}
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="list-group">
                {foreach $noticelist as $value}
                    <a href="{$value['2']|trim}" class="list-group-item">
                        <h5 class="list-group-item-heading">{$value['0']|trim}</h5>
                        <p class="list-group-item-text">
                            {$value['1']|trim}
                        </p>
                    </a>
                {/foreach}
            </div>
        </div>
    </div>
    <div class="col-xs-12 foot text-center">
        <p>Copyright &copy NeWorld Cloud Ltd. All Rights Reserved.</p>
    </div>
</div>
<script>
    $(function() {
		//$('.js-select2').select2();
    });
</script>
<script src="{$templates}assets/sweetalert/sweetalert.min.js"></script>