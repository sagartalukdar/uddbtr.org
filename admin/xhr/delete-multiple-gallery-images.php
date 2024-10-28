



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

    if (isset($_POST['imgIds'])) {
        $ids = $_POST['imgIds'];
      
        if (is_array($ids)) {
         $ids = array_map('intval', $ids); // Sanitize IDs
         $idsString = implode(',', $ids); // Convert array to comma-separated string

         // Use the read method
         $result = $crud->Read("gallery", "`id` IN ($idsString)");
         // error_log("Query Result: " . print_r($result, true));
  
               if (!empty($result)) {
                   foreach($result as $image){
                     $imagePath = $image['image']; 
                     $imageId = $image['id'];

                     error_log("Image Path from DB: " . $imagePath);
                     $baseDir = '../'; 
                     $absolutePath = realpath($baseDir . $imagePath);
                     error_log("Absolute Path: " . $absolutePath);

                     if ($absolutePath && file_exists($absolutePath)) {
                     
                        if (unlink($absolutePath)) {
                           
                           $ifExists = $crud->Count("gallery", "`id`='$imageId'");
                           if ($ifExists > 0) {
                                 $crud->Delete("gallery", "`id`='$imageId'");
                                 // $data['successMessage'] = "File and Data Deleted Successfully";
                           } else {
                                 $data['errorMessage'] = "Error Deleting Data from Database";
                           }
                        } else {
                           $data['errorMessage'] = "Error Deleting File from Server";
                        }
                     } else {
                        $data['errorMessage'] = "File Not Found on Server";
                     }


                   }

                   $data['successMessage'] = "File and Data Deleted Successfully";
 
              

                 
               } else {
                  $data['errorMessage'] = "Invalid data received";
               }

     

             echo json_encode($data);
         } 
      }
   }?>