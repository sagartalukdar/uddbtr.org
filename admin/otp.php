<?php
//Dynamic Content;
$name = "Willson";
$otp = "123456";
$mobileNumber = "9101525126";

//No to Change;
$message = "Dear ".$name.", your OTP for login to Admin Panel is ".$otp.". This OTP is valid for 10 minutes. Please do not share this OTP with anyone. ";;

$senderId="SMBTR";
$serverUrl="msg.icloudsms.com";
$authKey="ca7431c23779cd3af61359b69ba86d";
$route="1";
echo sendsmsGET($mobileNumber,$senderId,$route,$message,$serverUrl,$authKey);

function sendsmsGET($mobileNumber,$senderId,$routeId,$message,$serverUrl,$authKey)
{
    $getData = 'mobileNos='.$mobileNumber.'&message='.urlencode($message).'&senderId='.$senderId.'&routeId='.$routeId;
    //API URL
    $url="http://msg.icloudsms.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$authKey."&".$getData;
    // init the resource
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0
    ));

    //get response
    $output = curl_exec($ch);

    //Print error if any
    if(curl_errno($ch)){
        echo 'error:' .curl_error($ch);
    }
    curl_close($ch);
    return $output;
}
?>