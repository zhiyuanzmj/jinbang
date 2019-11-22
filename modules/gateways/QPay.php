<?php 
if( !function_exists("isMobile") ) 
{
function isMobile()
{
    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    $mobile_browser = array( "mqqbrowser", "opera mobi", "juc", "iuc", "fennec", "ios", "applewebKit/420", "applewebkit/525", "applewebkit/532", "ipad", "iphone", "ipaq", "ipod", "iemobile", "windows ce", "240×320", "480×640", "acer", "android", "anywhereyougo.com", "asus", "audio", "blackberry", "blazer", "coolpad", "dopod", "etouch", "hitachi", "htc", "huawei", "jbrowser", "lenovo", "lg", "lg-", "lge-", "lge", "mobi", "moto", "nokia", "phone", "samsung", "sony", "symbian", "tablet", "tianyu", "wap", "xda", "xde", "zte" );
    $is_mobile = false;
    foreach( $mobile_browser as $device ) 
    {
        if( stristr($user_agent, $device) ) 
        {
            $is_mobile = true;
            break;
        }

    }
    return $is_mobile;
}

}

function QPay_MetaData()
{
    return array( "DisplayName" => "QQ钱包支付", "APIVersion" => "1.1", "DisableLocalCredtCardInput" => true, "TokenisedStorage" => false );
}

function QPay_config()
{
    $configarray = array( "FriendlyName" => array( "Type" => "System", "Value" => "QQ钱包支付" ), "MCHID" => array( "FriendlyName" => "商户号", "Type" => "text", "Size" => "32" ), "KEY" => array( "FriendlyName" => "商户支付密钥", "Type" => "text", "Size" => "32" ), "checkTime" => array( "FriendlyName" => "检查时间", "Type" => "text", "Size" => "5", "Default" => "5", "Description" => "单位：秒 支付状态检查间隔" ) );
    return $configarray;
}

function QPay_link($params)
{
    $invoiceid = $params["invoiceid"];
    $description = $params["description"];
    $amount = $params["amount"];
    $amount = $amount * 100;
    $currency = $params["currency"];
    $companyname = $params["companyname"];
    $systemurl = $params["systemurl"];
    $notify_url = $systemurl . "/modules/gateways/QPay/notify_url.php";
    include_once("QPay/lib/QPayPubHelper.php");
    $unifiedOrder = new UnifiedOrder_pub();
    $unifiedOrder->setParameter("body", (string) $description);
    $timeStamp = time();
    $out_trade_no = QPayConf_pub::MCHID . (string) $timeStamp;
    $unifiedOrder->setParameter("out_trade_no", (string) $invoiceid);
    $unifiedOrder->setParameter("total_fee", (string) $amount);
    $unifiedOrder->setParameter("notify_url", (string) $notify_url);
    $unifiedOrder->setParameter("trade_type", "NATIVE");
    $unifiedOrder->setParameter("attach", (string) $invoiceid);
    $unifiedOrder->setParameter("product_id", (string) $invoiceid);
    $unifiedOrderResult = $unifiedOrder->getResult();
    if( $unifiedOrderResult["return_code"] == "FAIL" ) 
    {
        echo "通信出错：" . $unifiedOrderResult["return_msg"] . "<br>";
    }
    else
    {
        if( $unifiedOrderResult["result_code"] == "FAIL" ) 
        {
        }
        else
        {
            if( $unifiedOrderResult["code_url"] != NULL ) 
            {
                $code_url = $unifiedOrderResult["code_url"];
            }

        }

    }

    $result["qrcode"] = $code_url;
    $result["invoiceid"] = $invoiceid;
    $result["returnurl"] = $params["returnurl"];
    $result["checkTime"] = checkTime * 1000;
    $code = QPay_getSmarty(array( "dir" => __DIR__ . "/QPay/", "file" => "QPay", "vars" => $result ));
    if( stristr($_SERVER["PHP_SELF"], "viewinvoice") ) 
    {
        return $code;
    }

    return "<img style=\"width: 200px\" src=\"" . $systemurl . "/modules/gateways/QPay/QPay.png\" alt=\"QQ钱包支付\" />";
}

function QPay_getSmarty(array $page)
{
    if( isset($page["file"]) ) 
    {
        $smarty = new \Smarty();
        if( isset($page["vars"]) ) 
        {
            if( is_array($page["vars"]) ) 
            {
                $smarty->assign($page["vars"]);
            }
            else
            {
                throw new \Exception("已定义的传值字段并非数组");
            }

        }

        isset($page["dir"]);
        (isset($page["dir"]) ? ($dir = $page["dir"]) : ($dir = $page["dir"]));
        
        if( isset($page["cache"]) && $page["cache"] == true ) 
        {
            $smarty->caching = true;
        }
        else
        {
            $smarty->caching = false;
        }

        $smarty->compile_dir = $GLOBALS["templates_compiledir"];
        return (string) $smarty->fetch($dir . $page["file"] . ".tpl");
    }

    throw new \Exception("未定义模板文件");
}

function QPay_refund($params)
{
    include_once("QPay/lib/QPayPubHelper.php");
    $accountId = $params["accountID"];
    $secretKey = $params["secretKey"];
    $testMode = $params["testMode"];
    $dropdownField = $params["dropdownField"];
    $radioField = $params["radioField"];
    $textareaField = $params["textareaField"];
    $transactionIdToRefund = $params["transid"];
    $refundAmount = $params["amount"];
    $currencyCode = $params["currency"];
    $firstname = $params["clientdetails"]["firstname"];
    $lastname = $params["clientdetails"]["lastname"];
    $email = $params["clientdetails"]["email"];
    $address1 = $params["clientdetails"]["address1"];
    $address2 = $params["clientdetails"]["address2"];
    $city = $params["clientdetails"]["city"];
    $state = $params["clientdetails"]["state"];
    $postcode = $params["clientdetails"]["postcode"];
    $country = $params["clientdetails"]["country"];
    $phone = $params["clientdetails"]["phonenumber"];
    $companyName = $params["companyname"];
    $systemUrl = $params["systemurl"];
    $langPayNow = $params["langpaynow"];
    $moduleDisplayName = $params["name"];
    $moduleName = $params["paymentmethod"];
    $whmcsVersion = $params["whmcsVersion"];
    $appAuthToken = "";
    $invoice = Illuminate\Database\Capsule\Manager::table("tblaccounts")->where("transid", $transactionIdToRefund)->first();
    $out_trade_no = $invoice->invoiceid;
    $out_refund_no = $out_trade_no . $timeStamp;
    $total_fee = $invoice->amountin * 100;
    $refund_fee = $refundAmount * 100;
    $refund = new Refund_pub();
    $refund->setParameter("out_trade_no", (string) $out_trade_no);
    $refund->setParameter("out_refund_no", (string) $out_refund_no);
    $refund->setParameter("total_fee", (string) $total_fee);
    $refund->setParameter("refund_fee", (string) $refund_fee);
    $refund->setParameter("op_user_id", QPayConf_pub::MCHID);
    $refundResult = $refund->getResult();
    switch( $refundResult["return_code"] ) 
    {
        case "SUCCESS":
            $code = array( "status" => "success", "rawdata" => date("Y-m-d h:i:sa", $timeStamp), "transid" => $refundResult["out_refund_no"], "fees" => $refundResult["refund_fee"] / 100 );
            logTransaction("QPay", json_encode($refundResult), $code["status"]);
            break;
        case "FAIL":
            $code = array( "status" => "error", "rawdata" => date("Y-m-d h:i:sa", $time_stamp) );
            logTransaction("QPay", json_encode($refundResult), $code["status"]);
            break;
        default:
            echo "不支持的交易状态，交易返回异常!!!";
            break;
    }
    return $code;
}
?>