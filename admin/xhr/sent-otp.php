<?php
$data = [];
include '../../classes/Crud.php';
$crud = new Crud();
date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$time = date("H:i:s");

if(isset($_POST['Phone'])) {
    extract($_POST); 
// Generate hash for password validation
$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // Random string

$hash = hash('sha512', $password . $salt);
    $check = $crud->Read("users", "`userType`='$userType' AND `MB`='$MB' AND `phone`='$Phone'  AND `password`='$hash'");

    if($check) {
     
                $otp = mt_rand(100000, 999999); 

                $updateData = [
                    'otp' => $otp
                ];

                $updateResult = $crud->Update("users", $updateData, "`userType`='$userType' AND `MB`='$MB' AND `Phone`='$Phone'");

                if($updateResult) {
                   
                    $data['successMessage'] = "Password Matched";
                  
                } else {
                   
                    $data['errorMessage'] = "Failed to update OTP for existing Phone";
                   }
    } else {
     
        $data['errorMessage'] = "Phone or Password not matched!";

    }
 
}
 echo json_encode($data); 
?>
