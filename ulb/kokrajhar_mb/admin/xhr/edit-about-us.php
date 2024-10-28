<?php 
session_start();
error_reporting(E_ALL);

// if (isset($_SESSION['userType']) && isset($_SESSION['this_user_MB'])) {
//   if ($_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN" && $_SESSION['userType'] != "CP") {
//       $_SESSION['errorLogin'] = "Access Denied!";
//       header('location: ../login-test');
//       exit();
//   } else {
//       include '../../classes/Crud.php';
//       $crud = new Crud();
//       date_default_timezone_set("Asia/Kolkata");
//       $today = date("Y-m-d");
//       $time = date("H:i:s");
//       $sessionName = $_SESSION['this_user_username'];
//       $userType = $_SESSION['userType'];
//       // $userID = $_SESSION['this_user_id'];
//   }
// } 
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

if(isset($_POST['id'])){
    include '../../classes/Crud.php';
    $crud = new Crud();
    extract($_POST);

    if (empty($_FILES["image"]["name"])) {
        $data = [               
            'head' =>$head,
            'description' =>$description,
            'date_uploaded' =>$date,           
        ];
        $count= $crud ->Count("about_us","`id`='$id'");
        if($count==1){
            $update =$crud->Update("about_us",$data,"`id`='$id'");
            $data["successMessage"]="data updated successfully.";
        } else {
            $data["errorMessage"]="Error updating data.";
        }
    } else {
        $target_dir = "img/about/";
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
                    'image' => $target_file,                 
                    'head' =>$head,
                    'description' =>$description,
                    'date_uploaded' =>$date,                                
                ];
                
                $count= $crud ->Count("about_us","`id`='$id'");
               
                if($count==1){
                    $update =$crud->Update("about_us",$data,"`id`='$id'");
               
                    $data["successMessage"]="Data updated successfully.";
                } else {
                    $data["errorMessage"]="error! id not matched.";
                }

            } else {
                $data["errorMessage"]="Sorry, there was an error uploading your file.";
            }
        }
    }
    echo json_encode($data);
}
?>