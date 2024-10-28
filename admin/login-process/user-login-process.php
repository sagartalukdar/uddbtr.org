<?php 
session_start();

include '../../classes/Crud.php';
$crud = new Crud();
date_default_timezone_set("Asia/Kolkata");

if(isset($_POST['OTP'])) {
    extract($_POST);

    // $userType = $_POST['userType'];
    // $MB = $_POST['MB'];
    // $Phone = $_POST['Phone'];
    // $OTP = $_POST['OTP'];
    // echo $OTP;
    // echo $email;
     $readUsers = $crud->Read("users","`otp`='$OTP' AND `email`='$email'");
     if($readUsers)
     {
        $Phone=$readUsers[0]['phone'];
        $userType=$readUsers[0]['userType'];
        $MB=$readUsers[0]['MB'];
        // $Phone=$readUsers[0]['phone'];
        $name=$readUsers[0]['username'];
        // $Phone=$readUsers[0][''];
     
            $getOtp = $crud->Read("users","`otp`='$OTP' AND `userType`='$userType' AND `MB`='$MB' AND `phone`='$Phone'");

            if($getOtp) {

                $data["successMessage"] = "Otp Verified";

                $_SESSION['phone'] = $Phone;
                $_SESSION['otp'] = $_POST['OTP'];
                $_SESSION['userType'] = $userType;
                $_SESSION['MB'] = $MB;

                if ($userType == "ADMIN") {
                    $redirectPage = "session/session";
                } elseif ($userType == "EO" || $userType == "CP") {
                    $redirectPage = "session/mb_session";
                } 

                
                $data['redirectPage'] = $redirectPage;
            } else {
               
                $data["errorMessage"] = "Otp Not Matched";
            }
    }else{
        $data["errorMessage"] = "OTP Not Matched";
    }

    echo json_encode($data);
    exit();
}
?>
