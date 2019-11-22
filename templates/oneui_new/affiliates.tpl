{if $inactive}

    {include file="$template/includes/alert.tpl" type="danger" msg=$LANG.affiliatesdisabled textcenter=true}

{else}

					<div class="portlet box">
						<div class="portlet-title" style="background-color: #f9f9f9;padding: 15px 10px;">
                            <div class="caption">
                            <i class="si si-diamond" style="padding-left:5px;"></i><span style="color:#666; font-size:15px; margin-left: 8px;">用户推广</span>
                            </div>
						</div>
						<div class="portlet-body" style="background-color: #fff;">
							<div class="tab-content">
                            <div class="col-sm-12">&nbsp;</div>
                              <div class="col-sm-4">
                              <div class="y4b">
            <a {if !$withdrawlevel}{else}href="{$smarty.server.PHP_SELF}?action=withdrawrequest"{/if} class="btn btn-danger pull-right"{if !$withdrawlevel} disabled="true"{/if}>
                <i class="fa icon-wallet"></i>&nbsp; {$LANG.affiliatesrequestwithdrawal}
            </a>
                              <h4 style="color:#777;">{$LANG.affiliatescommissionsavailable}</h4>
                              <b style="font-size:24px;">{$balance}</b><hr>
                              <div class="row">
                              <div class="col-sm-6" style="border-right:1px solid #e6eaee;">
                              <p style="color:#777;margin-bottom: 10px;">{$LANG.affiliatescommissionspending}</p>
                              <span style="font-size:20px; color:#4B4747;">{$pendingcommissions}</span>
                              </div>
                              <div class="col-sm-6">
                              <p style="color:#777;margin-bottom: 10px;">{$LANG.affiliateswithdrawn}</p>
                              <span style="font-size:20px; color:#4B4747;">{$withdrawn}</span>
                              </div>
                              </div>
                              </div>
                              </div>
                              <div class="col-sm-4">
                              <div class="y4b">
            <a href="#" class="btn btn-primary btn-sm pull-right">
                <i class="fa icon-badge"></i>&nbsp; 如何快速推广？
            </a>
                              <h4 style="color:#777;">{$LANG.affiliatesconversionrate}</h4>
                              <b style="font-size:24px;">{$conversionrate}%</b><hr>
                              <div class="row">
                              <div class="col-sm-6" style="border-right:1px solid #e6eaee;">
                              <p style="color:#777;margin-bottom: 10px;">{$LANG.affiliatessignups}</p>
                              <span style="font-size:20px; color:#4B4747;">{$signups}</span>
                              </div>
                              <div class="col-sm-6">
                              <p style="color:#777;margin-bottom: 10px;">{$LANG.affiliatesclicks}</p>
                              <span style="font-size:20px; color:#4B4747;">{$visitors}</span>
                              </div>
                              </div>
                              </div>
                              </div>
                              <div class="col-sm-4">
                              <div class="y4b">
                              <h4>{$LANG.affiliatesreferallink}</h4><hr>
                              <p style="background-color: #f5f5f5; border: 1px solid #e3e3e3;padding: 10px; margin-top:30px; margin-bottom:15px; font-size:18px;">{$referrallink}</p>
                              </div>
                              </div>
   <div class="row">                           
                            <div class="col-md-12" style="margin-bottom:20px;"><div class="col-sm-12">
    <h4 style="margin-top:30px;">您的推广记录</h4><hr>

    {include file="$template/includes/tablelist.tpl" tableName="AffiliatesList"}
    <script type="text/javascript">
        jQuery(document).ready( function ()
        {
            var table = jQuery('#tableAffiliatesList').removeClass('hidden').DataTable();
            {if $orderby == 'regdate'}
                table.order(0, '{$sort}');
            {elseif $orderby == 'product'}
                table.order(1, '{$sort}');
            {elseif $orderby == 'amount'}
                table.order(2, '{$sort}');
            {elseif $orderby == 'status'}
                table.order(4, '{$sort}');
            {/if}
            table.draw();
            jQuery('#tableLoading').addClass('hidden');
        });
    </script>
    <div class="table-container clearfix">
        <table id="tableAffiliatesList" class="table table-list hidden">
            <thead>
                <tr>
                    <th>{$LANG.affiliatessignupdate}</th>
                    <th>{$LANG.orderproduct}</th>
                    <th>{$LANG.affiliatesamount}</th>
                    <th>{$LANG.affiliatescommission}</th>
                    <th>{$LANG.affiliatesstatus}</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$referrals item=referral}
                <tr class="text-center">
                    <td><span class="hidden">{$referral.datets}</span>{$referral.date}</td>
                    <td>{$referral.service}</td>
                    <td data-order="{$referral.amountnum}">{$referral.amountdesc}</td>
                    <td data-order="{$referral.commissionnum}">{$referral.commission}</td>
                    <td><span class='status-{$referral.rawstatus|strtolower}'>{$referral.status}</span></td>
                </tr>
            {/foreach}
            </tbody>
        </table>
        <div class="text-center" id="tableLoading">
            <p><i class="fa fa-spinner fa-spin"></i> {$LANG.loading}</p>
        </div>
    </div>

    {if $affiliatelinkscode}
        {include file="$template/includes/subheader.tpl" title=$LANG.affiliateslinktous}
        <div class="margin-bottom text-center">
            {$affiliatelinkscode}
        </div>
    {/if}
    </div></div>
    </div>
                           </div>
						</div>
                    </div>

    {if $affiliatelinkscode}
        {include file="$template/includes/subheader.tpl" title=$LANG.affiliateslinktous}
        <div class="margin-bottom text-center">
            {$affiliatelinkscode}
        </div>
    {/if}

{/if}
