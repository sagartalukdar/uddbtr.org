<?php 
session_start();
error_reporting(E_ALL);

if (isset($_SESSION['userType']) && isset($_SESSION['this_user_MB'])) {
   if ($_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN") {
      $_SESSION['errorLogin'] = "Access Denied!";
      header('location: ../login-test');
      exit();
   } else {
      include '../../classes/Crud.php';
      $crud = new Crud();
      date_default_timezone_set("Asia/Kolkata");
      $today = date("Y-m-d");
      $time = date("H:i:s");
      $sessionName = $_SESSION['this_user_username'];
      $userType = $_SESSION['userType'];
      // $userID = $_SESSION['this_user_id'];
   }
} 


if(isset($_POST['userID'])){
    extract($_POST);

    if (empty($_FILES["image"]["name"])) {
        $data = [
          'username'=>$username,
          'MB' =>$MB,
          'email'=>$email,
          'phone'=>$phone,
          'userType'=>$userType,
          // 'user_image'=>$target_file,
          'status'=>$status
            
        ];
        $count= $crud ->Count("user","`id`='$userID'");
        if($count==1){
            $update =$crud->Update("user",$data,"`id`='$userID'");
       $data['successMessage'] = "User Updated Successfully";
        } else {
           $data['errorMessage'] = "Error Updating User.";
        }
    } else {
        $target_dir = "images/users/";
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

        if ($uploadOk == 0) {
          $_SESSION['message']= '<script>alert("Sorry, your file was not uploaded.");</script>';
        // if everything is ok, try to upload file
        } else {

            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file)) {

                // $_SESSION['message']= "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
                $data = [
                        'username'=>$username,
                        'MB' =>$MB,
                        'email'=>$email,
                        'phone'=>$phone,
                        'userType'=>$userType,
                        'user_image'=>$target_file,
                        'status'=>$status
                    
                ];
                
                $count= $crud ->Count("user","`id`='$userID'");
               
                if($count==1){
                    $update =$crud->Update("users",$data,"`id`='$userID'");
               $data['successMessage'] = "Users Updated Successfully";
                } else {
                   $data['errorMessage'] = "Error Updating Users.";
                }

            } else {
               $data['errorMessage'] = "Users Not Found!";
            }
        }
    }
    echo json_encode($data);
}
?>