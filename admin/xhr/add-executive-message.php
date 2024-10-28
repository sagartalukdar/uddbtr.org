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

if(isset($_POST['name'])){

    extract($_POST);

        $target_dir = "img/executive/";
        $target_file1 = $target_dir . md5(time()).basename($_FILES["image"]["name"]);
        $target_file2 = $target_dir . md5(time()).basename($_FILES["banner"]["name"]);
        $uploadOk = 1;
        $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
        $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
        
        $check1 = getimagesize($_FILES["image"]["tmp_name"]);
        $check2 = getimagesize($_FILES["banner"]["tmp_name"]);
        if($check1 !== false && $check2 !== false) {
            $uploadOk = 1;
        } else{
            $uploadOk = 0;
        } 
            // Allow certain file formats
        if(($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" && $imageFileType1 != "gif") 
          || 
        ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif")
        ) {
         
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $data["errorMessage"]="something wrong with file.";
        // if everything is ok, try to upload file
        } else {

            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file1) && move_uploaded_file($_FILES["banner"]["tmp_name"], "../".$target_file2)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image' => $target_file1,        
                    'banner' => $target_file2,                   
                    'name' =>$name,
                    'message' =>$message,     
                    'url' =>$url,        
                ];
               
                    $create = $crud->Create($data,"executive_message");

                    if($create) {
                        $data["successMessage"]="Data uploaded successfully.";
                    } else {
                        $data["errorMessage"]="Error uploading Data.";
                    }                                 

            } else {
                $data["errorMessage"]="file can't move to the folder.";
            }
        }
    
    echo json_encode($data);
    exit();
}
?>


