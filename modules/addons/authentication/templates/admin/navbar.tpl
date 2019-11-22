<nav class="navbar navbar-NeWorld">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">
			<span>NeWorld</span>
			<small>Authentiction</small>
		</a>
	</div>
	
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="{$module}"{if $PageName eq "list"} class="active"{/if}>个人认证</a></li>
			<li><a href="{$module}&action=company" {if $PageName eq "company_list"} class="active"{/if}>企业认证</a></li>
			<li><a href="https://neworld.org" target="_blank">技术支持</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">当前版本： <span class="label label-success">{$version}</span></a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>