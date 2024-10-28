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

   if(isset($_POST['imgIds'])){
      $ids = $_POST['imgIds'];

      if (is_array($ids)) {
         $ids = array_map('intval', $ids); // Sanitize IDs
         $idsString = implode(',', $ids); // Convert array to comma-separated string

         // Use the Delete method
         $result = $crud->Delete("gallery", "`id` IN ($idsString)");
         
         if ($result) {
            $data['successMessage'] = "Images Deleted Successfully";
         } else {
            $data['errorMessage'] = "Error Deleting Images";
         }
      } else {
         $data['errorMessage'] = "Invalid data received";
      }

      echo json_encode($data);
   }
}
?>
