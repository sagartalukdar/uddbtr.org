<?php 
session_start();

   include '../../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");

if(isset($_POST['OTP'])){

    extract($_POST);
        
        $getOtp = $crud->Read("users","`otp`='$OTP' AND `userType`='$userType' AND `MB`='$MB' AND `phone`='$Phone'");

        if($getOtp) {
            $data["successMessage"]="Otp Verified";
        }else {
            $data["errorMessage"]="Otp Not Matched";
        }

    echo json_encode($data);
    exit();
}
?>


