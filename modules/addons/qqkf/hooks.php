<?php
add_hook('ClientAreaHeadOutput', 1, function ($vars){
	$head_out = PHP_EOL.'<link href="modules/addons/qqkf/assets/css/style.css" rel="stylesheet">'.PHP_EOL;
    return $head_out;
});
add_hook('ClientAreaFooterOutput', 1, function ($vars){
	$foot_out = PHP_EOL.'<script src="index.php?m=qqkf&assets=kf.js"></script>'.PHP_EOL;
    return $foot_out;
});