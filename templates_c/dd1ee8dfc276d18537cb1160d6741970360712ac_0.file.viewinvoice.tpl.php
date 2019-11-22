<?php
/* Smarty version 3.1.32, created on 2019-11-22 19:07:10
  from '/www/wwwroot/www.zfyun.top/templates/oneui_new/viewinvoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5dd7c15e4858a0_01723992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd1ee8dfc276d18537cb1160d6741970360712ac' => 
    array (
      0 => '/www/wwwroot/www.zfyun.top/templates/oneui_new/viewinvoice.tpl',
      1 => 1515118566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd7c15e4858a0_01723992 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>

    <link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/invoice.css" rel="stylesheet">

</head>
<body>

    <div class="container-fluid invoice-container">

        <?php if ($_smarty_tpl->tpl_vars['invalidInvoiceIdRequested']->value) {?>

            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['error'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoiceserror'],'bodyTextCenter'=>true), 0, true);
?>

        <?php } else { ?>

            <div class="row invoice-header">
                <div class="invoice-col">

                    <?php if ($_smarty_tpl->tpl_vars['logo']->value) {?>
                        <p><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" /></p>
                    <?php } else { ?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</h2>
                    <?php }?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h3>

                </div>
                <div class="invoice-col text-center">

                    <div class="invoice-status">
                        <?php if ($_smarty_tpl->tpl_vars['status']->value == "Draft") {?>
                            <span class="draft"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdraft'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Unpaid") {?>
                            <span class="unpaid"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesunpaid'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Paid") {?>
                            <span class="paid"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicespaid'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Refunded") {?>
                            <span class="refunded"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesrefunded'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Cancelled") {?>
                            <span class="cancelled"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicescancelled'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Collections") {?>
                            <span class="collections"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicescollections'];?>
</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "Payment Pending") {?>
                            <span class="paid"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesPaymentPending'];?>
</span>
                        <?php }?>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['status']->value == "Unpaid" || $_smarty_tpl->tpl_vars['status']->value == "Draft") {?>
                        <div class="small-text">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatedue'];?>
: <?php echo $_smarty_tpl->tpl_vars['datedue']->value;?>

                        </div>
                        <div class="payment-btn-container hidden-print" align="center">
                            <?php echo $_smarty_tpl->tpl_vars['paymentbutton']->value;?>

                        </div>
                    <?php }?>

                </div>
            </div>

            <hr>

            <?php if ($_smarty_tpl->tpl_vars['paymentSuccessAwaitingNotification']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['success'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicePaymentSuccessAwaitingNotify'],'bodyTextCenter'=>true), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['paymentSuccess']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['success'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicepaymentsuccessconfirmation'],'bodyTextCenter'=>true), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['pendingReview']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['success'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicepaymentpendingreview'],'bodyTextCenter'=>true), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['paymentFailed']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"danger",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['error'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicepaymentfailedconfirmation'],'bodyTextCenter'=>true), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['offlineReview']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['success'],'bodyContent'=>$_smarty_tpl->tpl_vars['LANG']->value['invoiceofflinepaid'],'bodyTextCenter'=>true), 0, true);
?>
            <?php }?>

            <div class="row">
                <div class="invoice-col right">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicespayto'];?>
</strong>
                    <address class="small-text">
                        <?php echo $_smarty_tpl->tpl_vars['payto']->value;?>

                    </address>
                </div>
                <div class="invoice-col">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesinvoicedto'];?>
</strong>
                    <address class="small-text">
                        <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['companyname']) {
echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
<br /><?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];?>
, <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];?>
, <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
, <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['country'];?>

                        <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                        <br /><br />
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customfields']->value, 'customfield');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
?>
                        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['fieldname'];?>
: <?php echo $_smarty_tpl->tpl_vars['customfield']->value['value'];?>
<br />
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </address>
                </div>
            </div>

            <div class="row">
                <div class="invoice-col right">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['paymentmethod'];?>
</strong><br>
                    <span class="small-text">
                        <?php if ($_smarty_tpl->tpl_vars['status']->value == "Unpaid" && $_smarty_tpl->tpl_vars['allowchangegateway']->value) {?>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
" class="form-inline">
                                <?php echo $_smarty_tpl->tpl_vars['gatewaydropdown']->value;?>

                            </form>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['paymentmethod']->value;?>

                        <?php }?>
                    </span>
                    <br /><br />
                </div>
                <div class="invoice-col">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdatecreated'];?>
</strong><br>
                    <span class="small-text">
                        <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
<br><br>
                    </span>
                </div>
            </div>

            <br />

            <?php if ($_smarty_tpl->tpl_vars['manualapplycredit']->value) {?>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditapply'];?>
</strong></h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
">
                            <input type="hidden" name="applycredit" value="true" />
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditdesc1'];?>
 <strong><?php echo $_smarty_tpl->tpl_vars['totalcredit']->value;?>
</strong>. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditdesc2'];?>
. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditamount'];?>
:
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">
                                    <div class="input-group">
                                        <input type="text" name="creditamount" value="<?php echo $_smarty_tpl->tpl_vars['creditamount']->value;?>
" class="form-control" />
                                        <span class="input-group-btn">
                                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoiceaddcreditapply'];?>
" class="btn btn-success" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'headerTitle'=>$_smarty_tpl->tpl_vars['LANG']->value['invoicesnotes'],'bodyContent'=>$_smarty_tpl->tpl_vars['notes']->value), 0, true);
?>
            <?php }?>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicelineitems'];?>
</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdescription'];?>
</strong></td>
                                    <td width="20%" class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesamount'];?>
</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoiceitems']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];
if ($_smarty_tpl->tpl_vars['item']->value['taxed'] == "true") {?> *<?php }?></td>
                                        <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <tr>
                                    <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicessubtotal'];?>
</strong></td>
                                    <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
                                    <tr>
                                        <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['taxrate']->value;?>
% <?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
</strong></td>
                                        <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['tax']->value;?>
</td>
                                    </tr>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['taxrate2']->value) {?>
                                    <tr>
                                        <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['taxrate2']->value;?>
% <?php echo $_smarty_tpl->tpl_vars['taxname2']->value;?>
</strong></td>
                                        <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['tax2']->value;?>
</td>
                                    </tr>
                                <?php }?>
                                <tr>
                                    <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicescredit'];?>
</strong></td>
                                    <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['credit']->value;?>
</td>
                                </tr>
                                <tr>
                                    <td class="total-row text-right"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestotal'];?>
</strong></td>
                                    <td class="total-row text-center"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
                <p>* <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestaxindicator'];?>
</p>
            <?php }?>

            <div class="transactions-container small-text">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransdate'];?>
</strong></td>
                                <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransgateway'];?>
</strong></td>
                                <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransid'];?>
</strong></td>
                                <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransamount'];?>
</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
?>
                                <tr>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['date'];?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['gateway'];?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['transid'];?>
</td>
                                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['transaction']->value['amount'];?>
</td>
                                </tr>
                            <?php
}
} else {
?>
                                <tr>
                                    <td class="text-center" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicestransnonefound'];?>
</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <tr>
                                <td class="text-right" colspan="3"><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesbalance'];?>
</strong></td>
                                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="pull-right btn-group btn-group-sm hidden-print">
                <a href="javascript:window.print()" class="btn btn-default"><i class="fa fa-print"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['print'];?>
</a>
                <a href="dl.php?type=i&amp;id=<?php echo $_smarty_tpl->tpl_vars['invoiceid']->value;?>
" class="btn btn-default"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesdownload'];?>
</a>
            </div>

        <?php }?>

    </div>

    <p class="text-center hidden-print"><a href="clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoicesbacktoclientarea'];?>
</a></a></p>

</body>
</html>
<?php }
}
