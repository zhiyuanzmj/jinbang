{include file="orderforms/{$carttpl}/common.tpl"}

<div id="order-standard_cart" style="margin-bottom: 100px;">

    <div class="row">
        <div class="col-md-12">



            <div class="row" style="margin-top: 30px;">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="alert alert-info order-confirmation">
                        {$LANG.ordernumberis} <span>{$ordernumber}</span>
                    </div>
                </div>
            </div>

            <p class="text-center" style="margin-top: 20px;margin-bottom: 20px;">{$LANG.orderfinalinstructions}</p>

            {if $invoiceid && !$ispaid}
                <div class="text-center" style="color: #f60;">
                    {$LANG.ordercompletebutnotpaid}
                    <br /><br />
                    <a href="viewinvoice.php?id={$invoiceid}" target="_blank" class="btn btn-primary">
                        {$LANG.invoicenumber}{$invoiceid}
                    </a>
                </div>
            {/if}

            {foreach $addons_html as $addon_html}
                <div class="order-confirmation-addon-output">
                    {$addon_html}
                </div>
            {/foreach}

            {if $ispaid}
                <!-- Enter any HTML code which should be displayed when a user has completed checkout here -->
                <!-- Common uses of this include conversion and affiliate tracking scripts -->
            {/if}

            <div class="text-center" style="margin-top: 30px;">
                <a href="clientarea.php" class="btn btn-default">
                    {$LANG.orderForm.continueToClientArea}
                    &nbsp;<i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>

        </div>
    </div>
</div>
