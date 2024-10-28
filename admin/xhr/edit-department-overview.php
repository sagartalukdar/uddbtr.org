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

    if (empty($_FILES["image1"]["name"]) && empty($_FILES["image2"]["name"]) && empty($_FILES["image3"]["name"]) ) {       
        $data = [               
            'history' =>$history,
            'overview' =>$overview,             
        ]; 
       
        $count= $crud ->Count("department_overview","`id`='$id'");
        if($count==1){
            $update =$crud->Update("department_overview",$data,"`id`='$id'");
            $data["successMessage"]="data updated successfully.";
        } else {
            $data["errorMessage"]="Error updating data.";
        }
    } else {

        if(!empty($_FILES['image1']['name'])){
            $target_dir = "img/departmentOverview/";
            $target_file = $target_dir . md5(time()).basename($_FILES["image1"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));        
            $check = getimagesize($_FILES["image1"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else{
                $uploadOk = 0;
            } 
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {         
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $data["errorMessage"]="Something wrong with image.";
                echo json_encode($data);
                exit;
            } else {
    
                if (move_uploaded_file($_FILES["image1"]["tmp_name"], "../".$target_file)) {
                    $data['image1']=$target_file;  
                    $count= $crud ->Count("department_overview","`id`='$id'");                   
                    if($count==1){
                        $update =$crud->Update("department_overview",$data,"`id`='$id'");
                    } 
                }else{
                    $data["errorMessage"]="Sorry, there was an error uploading your file.";
                    echo json_encode($data);
                    exit;
                }
            }

        }

        if(!empty($_FILES['image2']['name'])){
            $target_dir = "img/departmentOverview/";
            $target_file = $target_dir . md5(time()).basename($_FILES["image2"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));        
            $check = getimagesize($_FILES["image2"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else{
                $uploadOk = 0;
            } 
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {         
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $data["errorMessage"]="Something wrong with image.";
                echo json_encode($data);
                exit;
            } else {
    
                if (move_uploaded_file($_FILES["image2"]["tmp_name"], "../".$target_file)) {
                    $data['image2']=$target_file;   
                    $count= $crud ->Count("department_overview","`id`='$id'");                   
                    if($count==1){
                        $update =$crud->Update("department_overview",$data,"`id`='$id'");
                    }
                }else{
                    $data["errorMessage"]="Sorry, there was an error uploading your file.";
                    echo json_encode($data);
                    exit;
                }
            }

        }

        if(!empty($_FILES['image3']['name'])){
            $target_dir = "img/departmentOverview/";
            $target_file = $target_dir . md5(time()).basename($_FILES["image3"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));        
            $check = getimagesize($_FILES["image3"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else{
                $uploadOk = 0;
            } 
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {         
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $data["errorMessage"]="Something wrong with image.";
                echo json_encode($data);
                exit;
            } else {
    
                if (move_uploaded_file($_FILES["image3"]["tmp_name"], "../".$target_file)) {
                    $data['image3']=$target_file; 

                    $count= $crud ->Count("department_overview","`id`='$id'");                   
                    if($count==1){
                        $update =$crud->Update("department_overview",$data,"`id`='$id'");
                    }
                }else{
                    $data["errorMessage"]="Sorry, there was an error uploading your file.";
                    echo json_encode($data);
                    exit;
                }
            }

        }

        $data = [               
            'history' =>$history,
            'overview' =>$overview,             
        ]; 
        
        $count= $crud ->Count("department_overview","`id`='$id'");
                   
        if($count==1){
            $update =$crud->Update("department_overview",$data,"`id`='$id'");

            $data["successMessage"]="Data updated successfully.";
        } else {
            $data["errorMessage"]="error! id not matched.";
        }


       
    }
    echo json_encode($data);
}
?>