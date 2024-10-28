<?php 
session_start();
error_reporting(E_ALL);

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

if(isset($_POST['id'])){
    extract($_POST);
      
        $data = [               
            'name' =>$name,      
            'designation' =>$designation,          
        ]; 
       
        $count= $crud ->Count("department_dignities","`id`='$id'");
        if($count==1){
            $update =$crud->Update("department_dignities",$data,"`id`='$id'");
            $data["successMessage"]="data updated successfully.";
        } else {
            $data["errorMessage"]="Error updating data.";
        }

    echo json_encode($data);
}
?>