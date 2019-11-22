<?php
use WHMCS\Database\Capsule;

function qqkf_config() {
	$configarray = array(
		'name' 			=> 'QQ客服',
		'description' 	=> '此模块可以让用户在您的网站上添加QQ客服的功能',
		'version' 		=> '1.1',
		'author' 		=> 'WHMCS Care',
		'fields' 		=> []
	);

	$configarray['fields']['kflist'] = [
		'FriendlyName' 	=> '客服代码,以|及,分割',
		'Type' 			=> 'textarea',
		'Rows' 			=> '10',
		'Cols' 			=> '60',
		'Default' 			=> '客服1,1000|客服2,10001|客服3,10004'
	];

	$configarray['fields']['kfinfo1'] = [
		'FriendlyName' 	=> '说明栏1',
		'Type' 			=> 'text',
		'Size' 			=> '25',
		'Default' 			=> '工作时间8:00-16:00'
	];
	
	$configarray['fields']['kfinfo2'] = [
		'FriendlyName' 	=> '说明栏2',
		'Type' 			=> 'text',
		'Size' 			=> '25',
		'Default' 			=> '我们会竭诚为您服务'
	];
	
	return $configarray;
}

function qqkf_activate() {
	return [
		'status' => 'success',
		'description' => '模块激活成功. 点击 配置 对模块进行设置。'
	];
}

function qqkf_deactivate() {
	
	return [
		'status' => 'success',
		'description' => '模块卸载成功'
	];
}

function qqkf_clientarea($vars) {
	switch(trim($_REQUEST['assets'])){
	    case "kf.js":
	        $assetinfo = '$("body").append(\'<div id="floatTools" class="rides-cs" style="height:246px;"><div class="floatL"><a id="aFloatTools_Show" class="btnOpen" title="查看在线客服" style="top:20px;display:block" href="javascript:void(0);">展开</a><a id="aFloatTools_Hide" class="btnCtn" title="关闭在线客服" style="top:20px;display:none" href="javascript:void(0);">收缩</a></div><div id="divFloatToolsView" class="floatR" style="display: none;height:237px;width: 140px;"><div class="cn"><h3 class="titZx">在线客服</h3><ul>';
		    $kflist = explode('|',trim($vars['kflist']));
			foreach ($kflist as $kflistone){
				$kflisttwo = explode(',',trim($kflistone));
				if($kflisttwo[0] && $kflisttwo[1]){
					$assetinfo .= '<li><span>'.$kflisttwo[0].'</span><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin='.$kflisttwo[1].'&site=qq&menu=yes"><img border="0" src="modules/addons/qqkf/assets/images/online.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></li>';
				}
			}
			$assetinfo .=  '<li><p>'.$vars['kfinfo1'].'</p><div class="div_clear"></div></li><li style="border:none;"><span>'.$vars['kfinfo2'].'</span></li></ul></div></div></div>\');$(function(){$("#aFloatTools_Show").click(function(){$("#divFloatToolsView").animate({width:"show",opacity:"show"},100,function(){$("#divFloatToolsView").show()});$("#aFloatTools_Show").hide();$("#aFloatTools_Hide").show()});$("#aFloatTools_Hide").click(function(){$("#divFloatToolsView").animate({width:"hide",opacity:"hide"},100,function(){$("#divFloatToolsView").hide()});$("#aFloatTools_Show").show();$("#aFloatTools_Hide").hide()})});';
			break;
	    default:
		    header("HTTP/1.1 404 Not Found");
		    exit('Error To Load The Assets');
	        
	}
	exit($assetinfo);
}