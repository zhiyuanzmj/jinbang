<?php
/*短信宝接口 2016-10-21  http://www.smsbao.com */
class smsbao extends AktuelSms implements SmsSenderInterface{

    function __construct($message,$gsmnumber){
        $this->message = $this->utilmessage($message);
        $this->gsmnumber = $this->utilgsmnumber($gsmnumber);
    }

    function send(){
        if($this->gsmnumber == "numbererror"){
            $log[] = ("Number format error.".$this->gsmnumber);
            $error[] = ("Number format error.".$this->gsmnumber);
            return null;
        }

        $params = $this->getParams();
//http://{$smsapi}/sms?u={$user}&p={$pass}&m={$phone}&c=".urlencode($content);
        $result = @file_get_contents('http://www.smsbao.com/sms?u='.$params->user.'&p='.md5($params->pass).'&m='.$this->gsmnumber.'&c='.urlencode($this->message).'&');
        $result = explode(" ",$result);

        if($result[0] == "0") {
            $log[] = ("信息发送成功.");
        } elseif($result[0] == "30") {
            $log[] = ("密码错误.");
            $error[] = ("密码错误.");
        } elseif($result[0] == "40") {
            $log[] = ("账号不存在.");
            $error[] = ("账号不存在.");
        } elseif($result[0] == "41") {
            $log[] = ("余额不足.");
            $error[] = ("余额不足.");
        } elseif($result[0] == "42") {
            $log[] = ("帐号过期.");
            $error[] = ("帐号过期.");
        } elseif($result[0] == "43") {
            $log[] = ("IP地址限制");
            $error[] = ("IP地址限制.");
        } elseif($result[0] == "50") {
            $log[] = ("内容含有敏感词.");
            $error[] = ("内容含有敏感词.");
        } elseif($result[0] == "51") {
            $log[] = ("手机号码不正确.");
            $error[] = ("手机号码不正确.");
        }

        return array(
            'log' => $log,
            'error' => $error,
            'msgid' => $result[0],
        );
    }

    function balance(){
        $params = $this->getParams();
        if($params->user && $params->pass) {
        	//http://www.smsbao.com/query?u=USERNAME&p=PASSWORD
            $result = @file_get_contents('http://www.smsbao.com/query?u='.$params->user.'&p='.md5($params->pass).'&');
            $result = explode(',',$result);
    	if ($result[0] != '')
    	{
    			$remain = (int)$result[1];
    			$str = sprintf('短信宝增值平台&nbsp;&nbsp;剩余：%d 条', $remain);
    			return $str;
    	}
    	
            else {
                return null;
            }
        } else {
            return null;
        }
    }

    function report($msgid){
        return "success";
    }

    //You can spesifically convert your gsm number. See netgsm for example
    function utilgsmnumber($number){
        return $number;
    }
    //You can spesifically convert your message
    function utilmessage($message){
        return $message;
    }
}

return array(
    'value' => 'smsbao',
    'label' => '短信宝',
    'fields' => array(
        'user','pass'
    )
);
