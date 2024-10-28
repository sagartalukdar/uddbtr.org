<?php 
session_start();
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

if(isset($_POST['id'])){
    include '../../classes/Crud.php';
    $crud = new Crud();
    extract($_POST);
      
        $data = [               
            'title' =>$title,      
            'link' =>$url    
        ]; 
       
        $count= $crud ->Count("usefull_links","`id`='$id'");
        if($count==1){
            $update =$crud->Update("usefull_links",$data,"`id`='$id'");
            $data["successMessage"]="data updated successfully.";
        } else {
            $data["errorMessage"]="Error updating data.";
        }

    echo json_encode($data);
}
?>