<?php 
session_start();
if (isset($_SESSION['userType'])) {
  if ($_SESSION['userType']!="ADMIN") {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: ../login.php');
    exit();
  }
   
}
if (isset($_POST['username'])) {
  include '../../classes/Crud.php';
  $crud = new Crud();
  date_default_timezone_set("Asia/Kolkata");
  $today = date("Y-m-d");
  $time = date("H:i:s");
  extract($_POST);
  $displayPass = $password;
  $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
  $password = hash('sha512', $password . $salt);

  $countUser = $crud->Count("users","`username`='$username' OR `email`='$email'");
  if ($countUser>0) {
    $data['errorMessage']="Username or Email Already Exists.";
    echo json_encode($data);
    exit();
  } else {
    $target_dir = "images/users/";
    $target_file = $target_dir.md5(time()).basename($_FILES["image"]["name"]);
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
      $data['errorMessage'] = "Something is not right with the file.";
    } else {

      if (move_uploaded_file($_FILES["image"]["tmp_name"],"../".$target_file)) {
        $data = [
          
          'email'=>$email,
          'MB'=>$MB,
          'designation'=>$designation,
          'username'=>$username,
          'password'=>$password,
          'phone'=>$phone,
          'userType'=>$userType,
          'user_image'=>$target_file,
          'register_date'=>$today,
          // 'added_time'=>$time
        ];

        $create = $crud->Create($data,"users");

        if($create) {
            $data['successMessage'] = "User Created Successfully";

        } 
      } else {
          $data['errorMessage'] = "Error Uploading File.";
      }
    }
  }

  
  echo json_encode($data);
}
?>