                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="side-header side-content">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times"></i>
                        </button>
                        <span>
                            <span class="font-w600 push-10-l">活动 & 通知</span>
                        </span>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="side-content remove-padding-t">
                        <!-- Side Overlay Tabs -->
                        <div class="block pull-r-l border-t">
                            <ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
                                <li class="active">
                                    <a href="#tabs-side-overlay-overview"><i class="fa fa-bell-o"></i>&nbsp; {$LANG.notice}</a>
                                </li>
                                <li>
                                    <a href="#tabs-side-overlay-sales"><i class="fa fa-commenting-o"></i>&nbsp; 在线客服</a>
                                </li>
                            </ul>
                            <div class="block-content tab-content">
                                <!-- Overview Tab -->
                                <div class="tab-pane fade fade-right in active" id="tabs-side-overlay-overview">
                                	<!-- Online Friends -->
                                    <div class="block pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">促销活动</h3>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <!-- Users Navigation -->
                                            	<div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="font-s15 font-w600">
                                                            	<i class="si si-present text-success"></i>&nbsp; 新春特惠，本站全线产品8折促销
                                                            </div>
                                                            <div class="font-s13 font-w400" style="padding: 16px 0px 6px 22px;">
                                                            	促销代码：<b class="text-smooth">80OFF</b>
                                                            </div>
                                                            <div class="font-s13 font-w400 text-muted" style="padding: 6px 0px 8px 22px;">
                                                            	活动规则：<br>
                                                            	1. 仅限2月11日之后的新注册用户参与。<br>
                                                            	2. 活动产品每个用户限购一台。<br>
                                                            	3. 活动产品不支持退款！
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- END Users Navigation -->
                                        </div>
                                    </div>
                                    <!-- END Online Friends -->
                                	
                                	{if $loggedin}
                                	{if $clientsstats.numdueinvoices>0}
                                    <!-- Activity -->
                                    <div class="block pull-r-l">
                                        <div class="block-header bg-gray-lighter">
                                            <ul class="block-options">
                                                <li>
                                                    <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                                </li>
                                            </ul>
                                            <h3 class="block-title">{$LANG.notifications}</h3>
                                        </div>
                                        <div class="block-content">
                                            <!-- Activity List -->
                                            <ul class="list list-activity">
                                            	{foreach $clientAlerts as $alert}
                                                <li>
                                                    <i class="fa fa-fw fa-{if $alert->getSeverity() == 'danger'}exclamation-circle{elseif $alert->getSeverity() == 'warning'}warning{elseif $alert->getSeverity() == 'info'}info-circle{else}check-circle{/if} text-{if $alert->getSeverity() == 'danger'}danger{elseif $alert->getSeverity() == 'warning'}warning{elseif $alert->getSeverity() == 'info'}info{else}black{/if}"></i>
                                                    <div><a href="{$alert->getLink()}" class="text-{if $alert->getSeverity() == 'danger'}danger{elseif $alert->getSeverity() == 'warning'}warning{elseif $alert->getSeverity() == 'info'}info{else}black{/if}">{$alert->getMessage()}</a></div>
                                                </li>
                                                {/foreach}
                                            </ul>
                                            <!-- END Activity List -->
                                        </div>
                                    </div>
                                    <!-- END Activity -->
                                    {/if}
                                    {/if}
                                  
                                </div>
                                <!-- END Overview Tab -->

                                <!-- Sales Tab -->
                                <div class="tab-pane fade fade-left" id="tabs-side-overlay-sales">
                                    <div class="block pull-r-l">
                                        <!-- Stats -->
                                        <div class="block-content pull-t" style="margin-left: 12px;">
                                            <div class="row items-push">
                                                <div class="col-sm-12">
                                                    <div class="font-w300 text-muted">工作时间</div>
                                                    <div class="font-s12 font-w600 text-black" style="margin-top: 10px;">周一 至 周五 （08:00 - 21:00）</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Stats -->
                                        <!-- Today -->
                                        <div class="block-content" style="margin-top: -20px;">
                                            <ul class="list list-activity pull-r-l" style="margin-left: 0px;">
                                                <li>
                                                    <i class="fa fa-qq"></i>
                                                    <div class="font-w600"><a href="#">售前咨询</a></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-qq"></i>
                                                    <div class="font-w600"><a href="#">技术支持</a></div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-qq"></i>
                                                    <div class="font-w600"><a href="#">渠道经理</a></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- END Today -->

                                    </div>
                                </div>
                                <!-- END Sales Tab -->
                            </div>
                        </div>
                        <!-- END Side Overlay Tabs -->
                    </div>
                    <!-- END Side Content -->
                </div>
 