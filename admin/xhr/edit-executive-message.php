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

    if (empty($_FILES["image"]["name"]) && empty($_FILES["banner"]["name"])) {       
        $data = [               
            'name' =>$name,
            'message' =>$message,
            'url' =>$url,               
        ]; 
       
        $count= $crud ->Count("executive_message","`id`='$id'");
        if($count==1){
            $update =$crud->Update("executive_message",$data,"`id`='$id'");
            $data["successMessage"]="data updated successfully.";
        } else {
            $data["errorMessage"]="Error updating data.";
        }
    } else {

        if(empty($_FILES["image"]["name"]) && !empty($_FILES["banner"]["name"])){

            $target_dir = "img/executive/";
            $target_file = $target_dir . md5(time()).basename($_FILES["banner"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));        
            $check = getimagesize($_FILES["banner"]["tmp_name"]);
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
            } else {
    
                if (move_uploaded_file($_FILES["banner"]["tmp_name"], "../".$target_file)) {
    
                    // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                    $data = [               
                        'name' =>$name,
                        'message' =>$message,
                        'url' =>$url,  
                        'banner' =>$target_file,        
                    ];
                    
                    $count= $crud ->Count("executive_message","`id`='$id'");
                   
                    if($count==1){
                        $update =$crud->Update("executive_message",$data,"`id`='$id'");
                   
                        $data["successMessage"]="Data updated successfully.";
                    } else {
                        $data["errorMessage"]="error! id not matched.";
                    }
    
                } else {
                    $data["errorMessage"]="Sorry, there was an error uploading your file.";
                }
            }
        }
        if(!empty($_FILES["image"]["name"]) && empty($_FILES["banner"]["name"])){
        
            $target_dir = "img/executive/";
            $target_file = $target_dir . md5(time()).basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));        
            $check = getimagesize($_FILES["image"]["tmp_name"]);
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
            } else {
    
                if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file)) {
    
                    // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                    $data = [               
                        'name' =>$name,
                        'message' =>$message,
                        'url' =>$url,  
                        'image' =>$target_file,        
                    ];
                    
                    $count= $crud ->Count("executive_message","`id`='$id'");
                   
                    if($count==1){
                        $update =$crud->Update("executive_message",$data,"`id`='$id'");
                   
                        $data["successMessage"]="Data updated successfully.";
                    } else {
                        $data["errorMessage"]="error! id not matched.";
                    }
    
                } else {
                    $data["errorMessage"]="Sorry, there was an error uploading your file.";
                }
            }
        }
        if(!empty($_FILES["image"]["name"]) && !empty($_FILES["banner"]["name"])){

            $target_dir = "img/executive/";
            $target_file1 = $target_dir . md5(time()).basename($_FILES["image"]["name"]);
            $target_file2 = $target_dir . md5(time()).basename($_FILES["banner"]["name"]);

            $uploadOk1 = 1;
            $uploadOk2 = 1;

            $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));       
            $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION)); 

            $check1 = getimagesize($_FILES["image"]["tmp_name"]);
            $check2 = getimagesize($_FILES["banner"]["tmp_name"]);

            if($check1 == false) {
                $uploadOk1 = 0;
            }           
            
            if($check2 == false) {
                $uploadOk2 = 0;
            }
            
                // Allow certain file formats
            if(($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" && $imageFileType1 != "gif" ) 
            ||
            ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif" )
            ) 
            {         
               if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" && $imageFileType1 != "gif" ){
                $uploadOk1=0;
               }
               if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif"){
                $uploadOk2=0;
               }
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk1 == 0 && $uploadOk2 ==0) {
                $data["errorMessage"]="Something wrong with images. please change !";
            }
            else if($uploadOk1 == 0){
                $data["errorMessage"]="Something wrong with executive's image. please change !";              
            }
            else if($uploadOk2 ==0){
                $data["errorMessage"]="Something wrong with banner image. please change !";
            }
            else {
    
                if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file1) && move_uploaded_file($_FILES["banner"]["tmp_name"], "../".$target_file2)) {
    
                    // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                    $data = [               
                        'name' =>$name,
                        'message' =>$message,
                        'url' =>$url,  
                        'image' =>$target_file1,        
                        'banner' =>$target_file2,        
                    ];
                    
                    $count= $crud ->Count("executive_message","`id`='$id'");
                   
                    if($count==1){
                        $update =$crud->Update("executive_message",$data,"`id`='$id'");
                   
                        $data["successMessage"]="Data updated successfully.";
                    } else {
                        $data["errorMessage"]="error! id not matched.";
                    }
    
                } else {
                    $data["errorMessage"]="Sorry, there was an error uploading your file.";
                }
            }
        }

       
    }
    echo json_encode($data);
}
?>