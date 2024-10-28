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

        $data = [
            'email' => $email,      
            'phone' => $phone,  
            'address' => $address,                                   
        ];    
        $update = $crud->update("contact_details",$data,"`id`=$id");

        if($update) {
            $data["successMessage"]="Data Updated successfully.";
        } else {
            $data["errorMessage"]="Error Updating Data.";
        }                            

    } else {
        $data["errorMessage"]="error form submission.";
    }       
    
    echo json_encode($data);
    exit();

?>


