<?php 
session_start();
if (empty($_SESSION['userType']) || $_SESSION['userType']!="ADMIN") {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: ../login.php');
   exit();
} else {
   include '../../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   $userType = $_SESSION['userType'];
}

    if(isset($_POST['email'])){

        extract($_POST);

        $count = $crud->Count("contact_details","`phone`='$phone' or `email`='$email'");
    
        if ($count>0) {
            $data['errorMessage']="Phone or Email Already Exists.";
            echo json_encode($data);
            exit(); 
        }else {        
            $data = [
                'email' => $email,      
                'phone' => $phone,  
                'address' => $address,                                   
            ];    
            $create = $crud->Create($data,"contact_details");

            if($create) {
                $data["successMessage"]="Data uploaded successfully.";
            } else {
                $data["errorMessage"]="Error uploading Data.";
            }   
        }                             

    } else {
        $data["errorMessage"]="error form submission.";
    }       
    
    echo json_encode($data);
    exit();

?>


