{if $clientsstats.productsnumtotal>0}
{include file="$template/includes/tablelist.tpl" tableName="ServicesList" filterColumn="4"}
<script type="text/javascript">
    jQuery(document).ready( function ()
    {
        var table = jQuery('#tableServicesList').removeClass('hidden').DataTable();
        {if $orderby == 'product'}
            table.order([0, '{$sort}'], [4, 'asc']);
        {elseif $orderby == 'amount' || $orderby == 'billingcycle'}
            table.order(1, '{$sort}');
        {elseif $orderby == 'nextduedate'}
            table.order(2, '{$sort}');
        {elseif $orderby == 'domainstatus'}
            table.order(4, '{$sort}');
        {/if}
        table.draw();
        jQuery('#tableLoading').addClass('hidden');
    });
</script>
<div class="table-container clearfix">
    <table id="tableServicesList" class="table table-list hidden">
        <thead>
            <tr>
                <th>{$LANG.orderproduct}</th>
                <th class="hidden-sm hidden-xs">{$LANG.clientareaaddonpricing}</th>
                <th class="hidden-sm hidden-xs">{$LANG.cartchoosecycle}</th>
                <th class="hidden-sm hidden-xs">{$LANG.clientareahostingnextduedate}</th>
                <th class="hidden">{$LANG.clientareastatus}</th>
                <th>{$LANG.clientareastatus}</th>
                <th class="responsive-edit-button" style="display: none;"></th>
                <th style="text-align: center;">操作</th>
            </tr>
        </thead>
        <tbody>
            {foreach key=num item=service from=$services}
                <tr onclick="clickableSafeRedirect(event, 'clientarea.php?action=productdetails&amp;id={$service.id}', false)">
                    <td><strong style="color: #000000;">{$service.product}</strong>{if $service.dedicatedip}<br />{$service.dedicatedip}{/if}{if $service.domain}<br /><a href="http://{$service.domain}" target="_blank">{$service.domain}</a>{/if}</td>
                    <td data-order="{$service.amountnum}" class="hidden-sm hidden-xs">{$service.amount}</td>
                    <td class="hidden-sm hidden-xs">{$service.billingcycle}</td>
                    <td class="hidden-sm hidden-xs"><span class="hidden">{$service.normalisedNextDueDate}</span>{$service.nextduedate}</td>
                    <td class="hidden"><span class="label status status-{$service.status|strtolower}">{$service.statustext}</span></td>
                    <td><span class="status-{$service.status|strtolower}"><i class="fa  {if $service.status|strtolower == "active"}fa-circle{elseif $service.status|strtolower == "completed"}fa-dot-circle-o{elseif $service.status|strtolower == "pending"}fa-spinner{elseif $service.status|strtolower == "suspended"}fa-pause{elseif $service.status|strtolower == "terminated"} fa-trash-o{elseif $service.status|strtolower == "cancelled"}fa-ban{elseif $service.status|strtolower == "fraud"}fa-exclamation-triangle{/if}" style="font-size:12px;"></i>&nbsp;{$service.statustext}</span></td>
                    <td class="responsive-edit-button" style="display: none;">
                        <a href="clientarea.php?action=productdetails&amp;id={$service.id}" class="btn btn-block btn-info">
                            {$LANG.manageproduct}
                        </a>
                    </td>
                    <td class="text-center">
													<div class="btn-group">
														<a type="button" class="btn btn-default"  href="clientarea.php?action=productdetails&amp;id={$service.id}" style="background: #FFFFFF;font-weight: 400; font-size: 13px;"><i class="fa fa-cogs"></i>&nbsp; 管理</a>
													</div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
    <div class="text-center" id="tableLoading">
        <p><i class="fa fa-spinner fa-spin"></i> {$LANG.loading}</p>
    </div>
</div>
{else}
							<div class="portlet">
								<!-- end PROJECT HEAD -->
								<div class="portlet-body">
                                  <div class="col-sm-12 text-center">
                                    <p style="padding-top:50px;"><img src="{$WEB_ROOT}/templates/{$template}/img/empty.png" class="hidden-sm hidden-xs" width="330" height="190"><img src="{$WEB_ROOT}/templates/{$template}/img/empty.png" class="hidden-lg hidden-md" width="231" height="133"></p>
                                    <h4 style="padding-top:10px;"><b>{$LANG.gmsm}</b></h4>
                                    <p style="padding-top:20px; line-height:22px; color:#666;">{$LANG.gmsm1}</p>
                                       <p style="padding-top:15px;"><a href="cart.php" class="btn btn-primary" style="background-color: #00aaff;border-color: #00aaff;border-radius: 0;"><i class="fa fa-plus"></i>&nbsp; {$LANG.gmsm3}</a>&nbsp; &nbsp;&nbsp;<a href="knowledgebase.php" target="_blank" class="text-primary" style="text-decoration: none; color: #06c;">{$LANG.gmsm2}&nbsp;&nbsp;<i class="fa fa-external-link"></i></a></p>
                                  </div>
                              </div>
</div>
{/if}
