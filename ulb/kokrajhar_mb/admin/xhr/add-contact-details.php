<?php 
session_start();
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

    if(isset($_POST['email'])){
        include '../../classes/Crud.php';
        $crud = new Crud();
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


