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
			ModulesOcean <small>Manage Tools</small>
		</a>
	</div>
	
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="{$modulelink}"{if $PageName eq "license"} class="active"{/if}>{$LANG.neworld_manager}</a></li>
			<li><a href="https://ModulesOcean.com" target="_blank">{$LANG.neworld_support}</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li>{$LANG.neworld_version}： <span class="label label-success">{$version}</span></li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>