{if $affiliatesystemenabled}

					<div class="portlet box">
						<div class="portlet-title" style="background-color: #f9f9f9;padding: 15px 10px;">
                            <div class="caption">
                            <i class="si si-diamond" style="padding-left:5px;"></i><span style="color:#666; font-size:15px; margin-left: 8px;">激活推介账户，开始赚钱</span>
                            </div>
						</div>
						<div class="portlet-body" style="background-color: #fff;">
							<div class="tab-content">
                            <div class="row">
                            <h2 class="text-center" style="margin-top: 30px;">每次介绍客户给我们，均可索取报酬<p class="h4">激活您的联盟账户，并开始获取收益…</p></h2>
                            <div class="col-sm-12" style="margin-top:20px;">
                            <div class="col-sm-4 text-center">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/advantage-icon1.png" width="150">
                            <h3>推介难度低</h3>
                            <span style="color:#7f8fa4;line-height: 40px;">多年积累丰厚资源，产品价格实惠，消费者易接受</span>
                            </div>
                            <div class="col-sm-4 text-center">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/advantage-icon2.png" width="150">
                            <h3>订单成交率高</h3>
                            <span style="color:#7f8fa4;line-height: 40px;">产品基于性能和CN2骨干网络构建，质量高，退款率低</span>
                            </div>
                            <div class="col-sm-4 text-center">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/advantage-icon3.png" width="150">
                            <h3>提成比例高</h3>
                            <span style="color:#7f8fa4;line-height: 40px;">推介成功消费，您将获得高额现金提成</span>
                            </div>
                            </div>
                            <div class="col-sm-12" style="margin-top:50px; margin-bottom:35px;">
                            <div class="col-sm-4 text-center">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/advantage-icon4.png" width="150">
                            <h3>完整产品线</h3>
                            <span style="color:#7f8fa4;line-height: 40px;">云虚拟主机、云服务器、独立服务器、高防产品均参与推介</span>
                            </div>
                            <div class="col-sm-4 text-center">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/advantage-icon5.png" width="150">
                            <h3>正规企业运营</h3>
                            <span style="color:#7f8fa4;line-height: 40px;">合规全网ISP/IDC资质，自主开发OpenStack云计算平台</span>
                            </div>
                            <div class="col-sm-4 text-center">
                            <img src="{$WEB_ROOT}/templates/{$template}/img/advantage-icon6.png" width="150">
                            <h3>7x24服务支撑</h3>
                            <span style="color:#7f8fa4;line-height: 40px;">7x24小时全天候金牌服务，让您免除后顾之忧</span>
                            </div>
                            </div>
                            </div>
							<p style="border-bottom:1px solid #EBEBEB; padding:8px 0px 12px 5px;;"></p>
									<p style="padding-top:10px;" class="text-center">
                                    {$LANG.affiliatesignupinfo1}
									</p>
    <form method="post" action="affiliates.php">
        <input type="hidden" name="activate" value="true" />
        <p align="center"><input type="submit" value="{$LANG.affiliatesactivate}" class="btn btn-primary" style="font-size:15px;font-weight: 400;" /></p>
    </form>
                                       <div class="row"> 
                                       <div class="col-md-12" style="padding-top:30px;">
                                    <div class="col-sm-6">
                                    <div class="well" style="height:108px;">
                                        <div class="col-sm-2 col-xs-2 text-center" style="padding-top:8px;">
                                        <img src="{$WEB_ROOT}/templates/{$template}/img/21.png" width="31" height="31">
                                        </div>
                                        <div class="col-sm-10 col-xs-10">
                                        <span style="color:#00C1DE;">每有效推广，最高可 <span style="color:#FD8A00; font-size:18px;">{$LANG.afflink1}</span> 返利</span>
                                        <p style="color:#9B9EA0;">推广您的专有链接地址给朋友<br>用户通过链接成功购买产品，获得佣金</p>
                                        </div>
									</div>
                                    </div>
									<div class="col-sm-6">
                                    <div class="well" style="height:108px;">
                                        <div class="col-sm-2 col-xs-2 text-center" style="padding-top:8px;">
                                        <img src="{$WEB_ROOT}/templates/{$template}/img/26.png" width="31" height="31">
                                        </div>
                                        <div class="col-sm-10 col-xs-10">
                                        <span style="color:#00C1DE;">佣金满 <span style="color:#FD8A00; font-size:18px;">{$LANG.afflink2}</span> 元即可提现</span>
                                        <p style="color:#9B9EA0;">佣金满100即可提交提现申请<br>我们在2-3工作日提现至您的银行卡</p>
                                        </div>
									</div>
									</div>
                                    </div>
                                    </div>
                                    
                           </div>
						</div>
                    </div>

{else}
    {include file="$template/includes/alert.tpl" type="warning" msg=$LANG.affiliatesdisabled textcenter=true}
{/if}
