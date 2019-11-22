<?php

/*华信科技接口 2016/3/17  http://www.ipyy.com */

class ipyy extends AktuelSms implements SmsSenderInterface
{

    function __construct($message, $gsmnumber)
    {
        $this->message = $this->utilmessage($message);
        $this->gsmnumber = $this->utilgsmnumber($gsmnumber);
    }

    function send()
    {
        if ($this->gsmnumber == "numbererror") {
            $log[] = ("Number format error." . $this->gsmnumber);
            $error[] = ("Number format error." . $this->gsmnumber);
            return null;
        }

        $params = $this->getParams();
        $gateway = "http://sz.ipyy.com/sms.aspx?action=send&userid=" . $params->senderid . "&account=" . $params->user . "&password=" . strtoupper(md5($params->pass)) . "&mobile=" . $this->gsmnumber . "&content=" . urlencode($this->message) . "&sendTime=";
        $result = file_get_contents($gateway);
        $xml = simplexml_load_string($result);
        $result = $xml->returnstatus;
        $msg = $xml->message;

        if ($result == "Success") {
            $log[] = $msg;
        } elseif ($result == "Faild") {
            $log[] = $msg;
            $error[] = $msg;
        }

        return array(
            'log' => $log,
            'error' => $error,
            'msgid' => $xml->taskID,
        );
    }

    function balance()
    {
        $params = $this->getParams();
        if ($params->user && $params->pass) {
            $gateway = "http://sz.ipyy.com/sms.aspx?action=overage&userid=" . $params->senderid . "&account=" . $params->user . "&password=" . strtoupper(md5($params->pass));
            $result = file_get_contents($gateway);
            $xml = simplexml_load_string($result);

            if ($xml->returnstatus == "Sucess") {
                $str = "华信科技短信平台&nbsp;&nbsp;剩余：" . $xml->overage . " 条,已经发送了" . $xml->sendTotal . "条";
                return $str;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    function report($msgid)
    {
        $params = $this->getParams();
        if ($params->user && $params->pass && $msgid) {
            $gateway = "http://sz.ipyy.com/statusJsonApi.aspx?action=query&userid=" . $params->senderid . "&account=" . $params->user . "&password=" . strtoupper(md5($params->pass)) . "&taskid=" . $msgid;
            $result = file_get_contents($gateway);
            $xml = json_decode($result);
            if ($xml->error == 1) {
                return "success";
            } else {
                return "error";
            }
        } else {
            return null;
        }
    }


//You can spesifically convert your gsm number. See netgsm for example
    function utilgsmnumber($number)
    {
        return $number;
    }

//You can spesifically convert your message
    function utilmessage($message)
    {
        return $message;
    }
}

return array(
    'value' => 'ipyy',
    'label' => '华信科技',
    'fields' => array('user', 'pass'));
