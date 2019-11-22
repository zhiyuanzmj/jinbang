<?php
/* Smarty version 3.1.32, created on 2019-10-10 01:33:14
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareahome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d9e19da9ef203_43078120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2037253d0effd8e93d4efc78f42a541a7163590' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/clientareahome.tpl',
      1 => 1549816954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e19da9ef203_43078120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'outputHomePanels' => 
  array (
    'compiled_filepath' => '/www/wwwroot/www.zfyun.top/templates_c/f2037253d0effd8e93d4efc78f42a541a7163590_0.file.clientareahome.tpl.php',
    'uid' => 'f2037253d0effd8e93d4efc78f42a541a7163590',
    'call_name' => 'smarty_template_function_outputHomePanels_9623035745d9e19da987688_25036052',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/www.zfyun.top/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/other.css" rel="stylesheet"> 
<div class="row">
    <div class="col-lg-12">
        <div class="content">
            <div class="push-15-t">
                <img class="img-avatar" src="<?php if (strpos($_smarty_tpl->tpl_vars['clientsdetails']->value['email'],'@qq.com')) {?>//q1.qlogo.cn/g?b=qq&nk=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['clientsdetails']->value['email'],'@qq.com');?>
&s=100<?php } else { ?>//cn.gravatar.com/avatar/<?php echo md5($_smarty_tpl->tpl_vars['clientsdetails']->value['email']);?>
?s=64&d=<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/default_family1.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
" style="height:56px;width:auto;margin-right:8px;">
                <span class="hidden-xs hidden-sm">
                <span class="text-muted">欢迎回来，</span><span class="h5 push-30-r"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=details" title="个人资料" class="push-15-r" style="vertical-align: middle;"><i class="fa fa-address-card-o" style="color:#00aaff;font-size:18px;"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=changepw" title="修改密码" class="push-15-r" style="vertical-align: middle;"><i class="si si-settings" style="color:#00aaff;font-size:16px;"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=emails" title="邮件存档" class="push-15-r" style="vertical-align: middle;"><i class="si si-envelope-letter" style="color:#00aaff;font-size:16px;"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=security" title="安全设置" style="vertical-align: middle;"><i class="si si-shield" style="color:#00aaff;font-size:16px;"></i></a>
                </span>
                <div class="hidden-lg hidden-md" style="position: absolute;margin-left: 76px;top: 36px;">
                <span class="text-muted">欢迎回来，</span><span class="h5 push-30-r"><?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
</span><p style="margin-bottom: 0;margin-top: 6px;"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=details" title="个人资料" class="push-15-r" style="vertical-align: middle;"><i class="fa fa-address-card-o" style="color:#00aaff;font-size:18px;"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=changepw" title="修改密码" class="push-15-r" style="vertical-align: middle;"><i class="si si-settings" style="color:#00aaff;font-size:16px;"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=emails" title="邮件存档" class="push-15-r" style="vertical-align: middle;"><i class="si si-envelope-letter" style="color:#00aaff;font-size:16px;"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=security" title="安全设置" style="vertical-align: middle;"><i class="si si-shield" style="color:#00aaff;font-size:16px;"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
	    <div class="col-lg-12">
				<div class="content">
					<div class="row">
                        <div class="col-md-4">
                            <div class="bg-white">
                                <div class="block-content block-content-full clearfix">
                                    <h4 class="h5 text-muted push-5-t" style="margin-bottom:39px;">财务概览</h4>
                                    <div class="row items-push text-left">
                                        <div class="col-xs-6 border-r">
                                            <div class="font-w300" style="color:#636566;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['statscreditbalance'];?>
</div>
                                            <div class="push-5 font-w600 push-10-t" style="color:#f60;font-size:20px;"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['creditbalance'];?>
</div>
                                        </div>
                                        <div class="col-xs-6">
                                            <a class="ssszdzf" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=masspay&all=true">
                                            <div class="font-w300 push-10-l" style="color:#636566;">未支付账单</div>
                                            <div class="push-5 font-w600 push-10-t push-10-l" style="font-size:20px;"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numunpaidinvoices'];?>
</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div style="margin-top:17px;margin-bottom:6px;">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=addfunds" class="nybtn push-20-r">充值</a><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=invoices" class="push-20-r" style="color:#0af;">我的账单</a><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=quotes" style="color:#0af;">定制账单</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white">
                                <div class="block-content block-content-full clearfix">
                                    <h4 class="h5 text-muted push-20 push-5-t">待办事项</h4>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=services" class="dbsx" style="margin-bottom:7px;"><span style="margin-right:8px;font-size:15px;font-weight:600;color:#000;"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['productsnumactive'];?>
</span>个已激活的产品<span class="pull-right" style="color:#0af;">前往管理 ></span></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/supporttickets.php" class="dbsx" style="margin-bottom:7px;"><span style="margin-right:8px;font-size:15px;font-weight:600;color:#000;"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numactivetickets'];?>
</span>个待处理工单<span class="pull-right" style="color:#0af;">前往处理 ></span></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=invoices" class="dbsx"><span style="margin-right:8px;font-size:15px;font-weight:600;color:#000;"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numunpaidinvoices'];?>
</span>个未支付账单<span class="pull-right" style="color:#0af;">前往支付 ></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white" style="min-height:240px;">
                                <div class="block-content block-content-full clearfix">
                                    <h4 class="h5 text-muted push-5-t" style="margin-bottom: 22px;">新闻公告<a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements.php" class="pull-right" style="font-size:12px;color:#0af;">查看全部 ></a></h4>
                                    <ul class="hyzxggss" style="margin-bottom: 0;padding: 0;"><?php if ($_smarty_tpl->tpl_vars['announcements']->value) {?>
        			            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'ann', false, 'i');
$_smarty_tpl->tpl_vars['ann']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['ann']->value) {
$_smarty_tpl->tpl_vars['ann']->index++;
$__foreach_ann_7_saved = $_smarty_tpl->tpl_vars['ann'];
?>
        				            	<?php if ($_smarty_tpl->tpl_vars['ann']->index < 3) {?>
				                	<li><span class="text-muted" style="font-size:12px;margin-right:8px;margin-left:5px;">[<?php echo $_smarty_tpl->tpl_vars['ann']->value['date'];?>
]</span><a href="announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['ann']->value['id'];?>
" class="ssszdzf"><?php echo $_smarty_tpl->tpl_vars['ann']->value['title'];?>
</a></li>
        						        <?php }?>
        					        <?php
$_smarty_tpl->tpl_vars['ann'] = $__foreach_ann_7_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				                    <?php }?></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="row">
	    <div class="col-lg-12">
				<div class="content">
					<div class="row">
					    <div class="col-md-8">
					       <div class="bg-white">
					           <div class="block-content block-content-full clearfix">
					               <h4 class="h5 text-muted push-5-t" style="margin-bottom:22px;">帮助 & 支持</h4>
					               <div class="row">
					                   <div class="col-sm-4" style="margin-bottom:8px;">
					                       <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/knowledgebase.php" class="dbsx" style="height:65px;line-height:65px;padding:0 24px;">
					                           <i class="si si-book-open" style="font-size:28px;vertical-align: middle;"></i>
					                           <h5 class="h6" style="position: absolute;margin-left: 50px;margin-top: -50px;color: #000;">帮助文档
					                           <p class="text-muted" style="font-weight:400;font-size:12px;margin: 3px 0;">云计算产品使用手册</p></h5>
					                       </a>
					                   </div>
					                   <div class="col-sm-4" style="margin-bottom:8px;">
					                       <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/downloads.php" class="dbsx" style="height:65px;line-height:65px;padding:0 24px;">
					                           <i class="si si-cloud-download" style="font-size:28px;vertical-align: middle;"></i>
					                           <h5 class="h6" style="position: absolute;margin-left: 50px;margin-top: -50px;color: #000;">下载中心
					                           <p class="text-muted" style="font-weight:400;font-size:12px;margin: 3px 0;">常用资源/软件下载</p></h5>
					                       </a>
					                   </div>
					                   <div class="col-sm-4" style="margin-bottom:8px;">
					                       <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/submitticket.php" class="dbsx" style="height:65px;line-height:65px;padding:0 24px;">
					                           <i class="si si-speech" style="font-size:28px;vertical-align: middle;"></i>
					                           <h5 class="h6" style="position: absolute;margin-left: 50px;margin-top: -50px;color: #000;">工单支持
					                           <p class="text-muted" style="font-weight:400;font-size:12px;margin: 3px 0;">专业技术团队为您服务</p></h5>
					                       </a>
					                   </div>
					               </div>
					           </div>
					       </div>
					   </div>
            
					   <div class="col-md-4">
					       <div class="bg-white" style="height:159px;">
					           <div class="block-content block-content-full clearfix">
					               <h4 class="h5 text-muted push-5-t" style="margin-bottom:22px;">推广联盟</h4>
                                 <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['affiliates'] && $_smarty_tpl->tpl_vars['clientsstats']->value['isAffiliate']) {?>
					               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panels']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                        	<?php if ($_smarty_tpl->tpl_vars['item']->value->getName() == "Affiliate Program") {?>
                                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'outputHomePanels', array(), true);?>

                                            <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                 <?php } else { ?>
                                 <div>您尚未激活推广联盟！</div><p class="pull-right push-20-t"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/affiliates.php" style="color:#0af;">开启推广赚钱 ></a></p>
                                 <?php }?>
					           </div>
					       </div>
					   </div>
					</div>
				</div>
		</div>
	</div>
    <div class="row" style="margin-bottom:50px;">
	    <div class="col-lg-12">
				<div class="content">
					<div class="row">
					    <div class="col-md-4">
					       <div class="bg-white">
					           <div class="block-content block-content-full clearfix hyzxlb">
					                <h4 class="h5 text-muted push-20 push-5-t">已激活产品</h4>
                        <div class="panel-cards <?php if (count($_smarty_tpl->tpl_vars['othProducts']->value) > 4) {?> cards-carousel<?php }?>">
                            <ul class="cards">
                                <li>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['othProducts']->value, 'prod', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['prod']->value) {
?>
                                        <a class="card-row" href="clientarea.php?action=productdetails&id=<?php echo $_smarty_tpl->tpl_vars['prod']->value['id'];?>
">
        			                        <span class="cell-title"><?php echo $_smarty_tpl->tpl_vars['prod']->value['name'];?>
</span>
        			                        <span class="cell-cycle">
        			                        	<span class="text-muted"></span>
        			                        	<?php echo $_smarty_tpl->tpl_vars['prod']->value['domain'];?>

        			                        </span>
        			                        <span class="cell-license">
        			                        	<span class="text-muted">到期时间: </span>
        			                        	<?php if ($_smarty_tpl->tpl_vars['prod']->value['nextduedate'] != '0000-00-00') {
echo $_smarty_tpl->tpl_vars['prod']->value['nextduedate'];
} else { ?>永久<?php }?>
        			                        </span>
        			                    </a>
                                        <?php if (count($_smarty_tpl->tpl_vars['othProducts']->value) != ($_smarty_tpl->tpl_vars['i']->value+1)) {?>
                                            <?php if (($_smarty_tpl->tpl_vars['i']->value+1)%4 == 0) {?></li><li><?php }?>
                                        <?php }?>
                                    <?php
}
} else {
?>
                                        <div class="panel-body text-center">
                                                    <div class="icon-holder" style="margin-top: 70px;">
                        								<i class="si si-basket border-radios"></i>
                        							</div>
                        							<p class="zt">没有已激活产品</p>
                                                </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </li>
                            </ul>
                            <div class="cards-nav">
                                <?php if (count($_smarty_tpl->tpl_vars['othProducts']->value) > 4) {?>
                                <button class="card-prev btn btn-default btn-icon btn-link" type="button">
                                    <i class="fa fa-angle-left"></i>
                                </button>
                                <?php }?>
                                <span class="card-number"><b class="number-current"><?php if (count($_smarty_tpl->tpl_vars['othProducts']->value) > 4) {?>4<?php } else {
echo count($_smarty_tpl->tpl_vars['othProducts']->value);
}?></b>/<span class="number-total"><?php echo count($_smarty_tpl->tpl_vars['othProducts']->value);?>
</span></span>
                                <?php if (count($_smarty_tpl->tpl_vars['othProducts']->value) > 4) {?>
                                <button class="card-next btn btn-default btn-icon btn-link" type="button">
                                    <i class="fa fa-angle-right"></i>
                                </button>
                                <?php }?>
                            </div>
                        </div>
					           </div>
					       </div> 
					    </div>
					    <div class="col-md-4">
					        <div class="bg-white">
					           <div class="block-content block-content-full clearfix">
					               <h4 class="h5 text-muted push-20 push-5-t">未支付账单</h4>
					               <div class="panel-cards <?php if (count($_smarty_tpl->tpl_vars['invoices']->value) > 4) {?> cards-carousel<?php }?>">
                                        <ul class="cards">
                                            <li>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices']->value, 'invoice', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['invoice']->value) {
?>
                                                    <a class="card-row" href="viewinvoice.php?id=<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
">
                                                        <span class="cell-title">#<?php echo $_smarty_tpl->tpl_vars['invoice']->value['invoicenum'];?>
</span>
                                                        <span class="cell-date" style="float: left"><span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['nextdue'];?>
: </span><?php echo $_smarty_tpl->tpl_vars['invoice']->value['datedue'];?>
</span>
                                                        <span class="cell-total"><span class="price text-danger"><?php echo $_smarty_tpl->tpl_vars['invoice']->value['total'];?>
</span></span>
                                                    </a>
                                                    <?php if (count($_smarty_tpl->tpl_vars['invoices']->value) != ($_smarty_tpl->tpl_vars['i']->value+1)) {?>
                                                        <?php if (($_smarty_tpl->tpl_vars['i']->value+1)%4 == 0) {?></li><li><?php }?>
                                                    <?php }?>
                                                <?php
}
} else {
?>
                                                    <div class="panel-body text-center">
                                                    <div class="icon-holder" style="margin-top: 70px;">
                        								<i class="si si-wallet border-radios"></i>
                        							</div>
                        							<p class="zt">没有未支付账单</p>
                                                </div>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </li>
                                        </ul>
                                        <div class="cards-nav">
                                            <?php if (count($_smarty_tpl->tpl_vars['invoices']->value) > 4) {?>
                                            <button class="card-prev btn btn-default btn-icon btn-link" type="button">
                                                <i class="fa fa-angle-left"></i>
                                            </button>
                                            <?php }?>
                                            <span class="card-number"><b class="number-current"><?php if (count($_smarty_tpl->tpl_vars['invoices']->value) > 4) {?>4<?php } else {
echo count($_smarty_tpl->tpl_vars['invoices']->value);
}?></b>/<span class="number-total"><?php echo count($_smarty_tpl->tpl_vars['invoices']->value);?>
</span></span>
                                            <?php if (count($_smarty_tpl->tpl_vars['invoices']->value) > 4) {?>
                                            <button class="card-next btn btn-default btn-icon btn-link" type="button">
                                                <i class="fa fa-angle-right"></i>
                                            </button>
                                            <?php }?>
                                        </div>
                                    </div>
					           </div>
					       </div>
					    </div>
					    <div class="col-md-4">
					        <div class="bg-white">
					           <div class="block-content block-content-full clearfix">
					               <h4 class="h5 text-muted push-20 push-5-t">待处理工单</h4>
					               <div class="panel-cards <?php if (count($_smarty_tpl->tpl_vars['tickets']->value) > 4) {?> cards-carousel<?php }?>">
                                        <ul class="cards">
                                            <li>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['ticket']->value) {
?>
                                                    <a class="card-row" href="viewticket.php?tid=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
&c=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['c'];?>
">
                                                        <span class="cell-title"><?php if ($_smarty_tpl->tpl_vars['ticket']->value['unread']) {?><strong><?php }?><b>#<?php echo $_smarty_tpl->tpl_vars['ticket']->value['tid'];?>
</b> - <?php echo $_smarty_tpl->tpl_vars['ticket']->value['subject'];
if ($_smarty_tpl->tpl_vars['ticket']->value['unread']) {?></strong><?php }?></span>
                                                        <span class="cell-status"><span class="label label-simple label-<?php echo $_smarty_tpl->tpl_vars['ticket']->value['statusClass'];?>
"><?php echo strip_tags($_smarty_tpl->tpl_vars['ticket']->value['status']);?>
</span></span>
                                                        <span class="cell-date"><span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsreply'];?>
: </span><?php echo $_smarty_tpl->tpl_vars['ticket']->value['lastreply'];?>
</td>
                                                    </a>
                                                <?php if (count($_smarty_tpl->tpl_vars['tickets']->value) != ($_smarty_tpl->tpl_vars['i']->value+1)) {?>
                                                <?php if (($_smarty_tpl->tpl_vars['i']->value+1)%4 == 0) {?></li><li><?php }?>
                                                <?php }?>
                                                <?php
}
} else {
?>
                                                <div class="panel-body text-center">
                                                    <div class="icon-holder" style="margin-top: 70px;">
                        								<i class="si si-speech border-radios"></i>
                        							</div>
                        							<p class="zt">没有待处理工单</p>
                                                </div>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </li>
                                        </ul>
                                        <div class="cards-nav">
                                            <?php if (count($_smarty_tpl->tpl_vars['tickets']->value) > 4) {?>
                                            <button class="card-prev btn btn-default btn-icon btn-link" type="button">
                                                <i class="fa fa-angle-left"></i>
                                            </button>
                                            <?php }?>
                                            <span class="card-number"><b class="number-current"><?php if (count($_smarty_tpl->tpl_vars['tickets']->value) > 4) {?>4<?php } else {
echo count($_smarty_tpl->tpl_vars['tickets']->value);
}?></b>/<span class="number-total"><?php echo count($_smarty_tpl->tpl_vars['tickets']->value);?>
</span></span>
                                            <?php if (count($_smarty_tpl->tpl_vars['tickets']->value) > 4) {?>
                                            <button class="card-next btn btn-default btn-icon btn-link" type="button">
                                                <i class="fa fa-angle-right"></i>
                                            </button>
                                            <?php }?>
                                        </div>
                                    </div>
					           </div>
					       </div>
					    </div>
					</div>
			    </div>
	    </div>
	</div>
	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/lightslider.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/dashboard.js"><?php echo '</script'; ?>
>


<?php }
/* smarty_template_function_outputHomePanels_9623035745d9e19da987688_25036052 */
if (!function_exists('smarty_template_function_outputHomePanels_9623035745d9e19da987688_25036052')) {
function smarty_template_function_outputHomePanels_9623035745d9e19da987688_25036052(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

                    <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBodyHtml()) {?>
                            <div><?php echo $_smarty_tpl->tpl_vars['item']->value->getBodyHtml();?>
<p class="pull-right" style="margin-top: -10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/affiliates.php" style="color:#0af;">查看详情 ></a></p></div>
                    <?php }?>
            <?php
}}
/*/ smarty_template_function_outputHomePanels_9623035745d9e19da987688_25036052 */
}
