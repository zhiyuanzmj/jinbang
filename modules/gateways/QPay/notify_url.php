<?php
/**
 * 通用通知接口demo
 * ====================================================
 * 支付完成后，QQ会把相关支付和用户信息发送到商户设定的通知URL，
 * 商户接收回调信息后，根据需要设定相应的处理流程。
 * 
 * 这里举例使用log文件形式记录回调信息。
*/

include_once("./lib/QPayPubHelper.php");
$gatewayModule = "QPay"; # Enter your gateway module name here replacing template
$gatewayParams = getGatewayVariables($gatewayModule);
if (!$gatewayParams["type"]) die("Module Not Activated");
//使用通用通知接口
$notify = new Notify_pub();
//存储QQ钱包的回调
$xml = $GLOBALS['HTTP_RAW_POST_DATA'];
if ( !$xml ) {  
    $xml = file_get_contents("php://input");
} 
$notify->saveData($xml);

//验证签名，并回应微信。
//对后台通知交互时，如果微信收到商户的应答不是成功或超时，微信认为通知失败，
//微信会通过一定的策略（如30分钟共8次）定期重新发起通知，
//尽可能提高通知的成功率，但微信不保证通知最终能成功。
if ( $notify->checkSign() == FALSE ){
	$notify->setReturnParameter("return_code","FAIL");//返回状态码
	$notify->setReturnParameter("return_msg","签名失败");//返回信息
} else {
	$notify->setReturnParameter("return_code","SUCCESS");//设置返回码
}
$returnXml = $notify->returnXml();
echo $returnXml;

//==商户根据实际情况设置相应的处理流程，此处仅作举例=======

if ( $notify->checkSign() == TRUE ) {
	if ($notify->data["trade_state"] == "FAIL") {
		//此处应该更新一下订单状态，商户自行增删操作
		logTransaction($gatewayParams['name']."(N)","[通信出错]:".$notify->data, "FAIL");
	} elseif ($notify->data["trade_state"] == "FAIL") {
		//此处应该更新一下订单状态，商户自行增删操作
		logTransaction($gatewayParams['name']."(N)","[业务出错]:".$notify->data, "FAIL");
	} else {
		//此处应该更新一下订单状态，商户自行增删操作
		//$log_->log_result($log_name,"【支付成功】:\n".$xml."\n");
		//商户自行增加处理流程,
		//例如：更新订单状态
		//例如：数据库操作
		//例如：推送支付完成信息
		$success = $notify->data["trade_state"];
		$invoiceId = $notify->data["out_trade_no"];
		$transactionId = $notify->data["transaction_id"];
		$paymentAmount = $notify->data["total_fee"]/100;
		$paymentFee = 0;
		
		$transactionStatus = $success ? 'SUCCESS' : 'FAIL';
		
		$invoiceId = checkCbInvoiceID($invoiceId, $gatewayParams['name']);
		checkCbTransID($transactionId);
		logTransaction($gatewayParams['name']."(N)",$notify->data, $transactionStatus);
		
		$paymentSuccess = false;
		
		if ($success) {
		
		    /**
		     * Add Invoice Payment.
		     *
		     * Applies a payment transaction entry to the given invoice ID.
		     *
		     * @param int $invoiceId         Invoice ID
		     * @param string $transactionId  Transaction ID
		     * @param float $paymentAmount   Amount paid (defaults to full balance)
		     * @param float $paymentFee      Payment fee (optional)
		     * @param string $gatewayModule  Gateway module name
		     */
		    addInvoicePayment(
		        $invoiceId,
		        $transactionId,
		        $paymentAmount,
		        $paymentFee,
		        $gatewayModule
		    );
		
		    $paymentSuccess = true;
		
		}
		
		callback3DSecureRedirect($invoiceId, $paymentSuccess);
	}
	
}