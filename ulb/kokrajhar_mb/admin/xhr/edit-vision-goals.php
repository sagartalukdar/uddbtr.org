<?php 
session_start();
error_reporting(E_ALL);
include '../../classes/Crud.php';
    $crud = new Crud();

if(isset($_POST['id'])){
    include '../../classes/Crud.php';
    $crud = new Crud();
    extract($_POST);
      
        $data = [               
            'vision' =>$vision,      
            'goals' =>$goals    
        ]; 
       
        $count= $crud ->Count("vision_goals","`id`='$id'");
        if($count==1){
            $update =$crud->Update("vision_goals",$data,"`id`='$id'");
            $data["successMessage"]="data updated successfully.";
        } else {
            $data["errorMessage"]="Error updating data.";
        }

    echo json_encode($data);
}
?>