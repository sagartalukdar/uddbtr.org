<?php 
session_start();
error_reporting(E_ALL);

if (isset($_SESSION['userType']) && isset($_SESSION['this_user_MB'])) {
   if ($_SESSION['userType'] != "ADMIN" && $_SESSION['this_user_MB'] != "UDD") {
      $_SESSION['errorLogin'] = "Access Denied!";
      header('location: ../login.php');
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

if (isset($_POST['user_id'])) {
 

  extract($_POST);

  $countUser = $crud->Delete("users","`id`='$user_id'");
  if ($countUser) {
    $data['successMessage'] = "User Deleted Successfully";
  } else {
      $data['errorMessage'] = "Error Deleting User.";
  }
    
  echo json_encode($data);
}
?>