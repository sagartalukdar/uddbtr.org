<?php

include '../../classes/Crud.php';
$crud = new Crud();
date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$time = date("H:i:s");
function sendsmsGET($mobileNumber,$senderId,$routeId,$message,$serverUrl,$authKey){
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
    // return $output;
    $outputArray = json_decode($output, true);
    if($outputArray['responseCode'] == '3001') {
        $successMessage = 'OTP sent to '.$mobileNumber;
        return $successMessage;
    } else {
        // $data['success'] = false;
         return $errorMessage= 'Failed to send OTP via SMS';
    }


}

if(isset($_POST['email'])) {
    extract($_POST); 
// Generate hash for password validation
$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // Random string

$hash = hash('sha512', $password . $salt);
    $check = $crud->Read("users", "`userType`='$userType' AND `MB`='$MB' AND `email`='$email'  AND `password`='$hash'");

    if($check) {
     
                $otp = mt_rand(100000, 999999); 

                $updateData = [
                    'otp' => $otp
                ];

                $updateResult = $crud->Update("users", $updateData, "`userType`='$userType' AND `MB`='$MB' AND `email`='$email'");

                if($updateResult) {
                   $readUsers = $crud->Read("users","`otp`='$otp' AND `email`='$email'");
                    if($readUsers){
                        $mobileNumber=$readUsers[0]['phone'];
                        $userType=$readUsers[0]['userType'];
                        $MB=$readUsers[0]['MB'];
                        $otp=$readUsers[0]['otp'];
                        $name=$readUsers[0]['username'];
                        //send otp to users phone 

                        $name = $name;
                        $otp = $otp;
                        $mobileNumber = $mobileNumber;

                        //No to Change;
                        $message = "Dear ".$name.", your OTP for login to the Admin Panel is ".$otp.". This OTP is valid for 10 minutes. Please do not share this OTP with anyone. -SMARTBTR";

                        $senderId="SMBTR";
                        $serverUrl="msg.icloudsms.com";
                        $authKey="ca7431c23779cd3af61359b69ba86d";
                        $route="8";
                        $functionResponse = sendsmsGET($mobileNumber,$senderId,$route,$message,$serverUrl,$authKey);
                        $data['successMessage'] = $functionResponse;

                    
                    } else{
                        $data['errorMessage'] = "Failed to read User Data";
                    }
                // $data['successMessage'] = "Password Matched";
                  
                } else {
                   
                    $data['errorMessage'] = "Failed to update OTP for existing email";
                }
    } else {
     
        $data['errorMessage'] = "Email ID or Password is incorrect!";

    }
 
}
 echo json_encode($data); 
?>
