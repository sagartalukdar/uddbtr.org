<?php 
session_start();
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

    if(isset($_POST['objective'])){
        include '../../classes/Crud.php';
    $crud = new Crud();
        extract($_POST);

        $data = [
            'objective' => $objective                                       
        ];    
            $create = $crud->Create($data,"objectives");

            if($create) {
                $data["successMessage"]="Data uploaded successfully.";
            } else {
                $data["errorMessage"]="Error uploading Data.";
            }                                 

    } else {
        $data["errorMessage"]="error form submission.";
    }       
    
    echo json_encode($data);
    exit();

?>


