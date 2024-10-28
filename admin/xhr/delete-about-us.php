<?php 
session_start();
error_reporting(E_ALL);

if (empty($_SESSION['userType'])) {
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

   if(isset($_POST['dataId'])){
      $ID=$_POST['dataId'];
      $ifExists = $crud->Count("about_us","`id`='$ID'");
      if ($ifExists>0) {
          $crud->Delete("about_us","`id`='$ID'");
          $data['successMessage']="Data Deleted Successfully";
      }
      else{
         $data['errorMessage']="Error Deleting Data";
      }
      echo json_encode($data);
   }
}

?>