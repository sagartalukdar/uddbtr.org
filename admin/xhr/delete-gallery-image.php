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

    if (isset($_POST['dataId'])) {
        $ID = $_POST['dataId'];
        error_log("ID Received: $ID");

        $image = $crud->Read("gallery","`id`='$ID'");
     
        error_log("Query Result: " . print_r($image, true));

        if (!empty($image) && isset($image[0]['image'])) {
            $imagePath = $image[0]['image'];
            error_log("Image Path from DB: " . $imagePath);

            $baseDir = '../'; 
            $absolutePath = realpath($baseDir . $imagePath);
            error_log("Absolute Path: " . $absolutePath);

            if ($absolutePath && file_exists($absolutePath)) {
                
                if (unlink($absolutePath)) {
                   
                    $ifExists = $crud->Count("gallery", "`id`='$ID'");
                    if ($ifExists > 0) {
                        $crud->Delete("gallery", "`id`='$ID'");
                        $data['successMessage'] = "File and Data Deleted Successfully";
                    } else {
                        $data['errorMessage'] = "Error Deleting Data from Database";
                    }
                } else {
                    $data['errorMessage'] = "Error Deleting File from Server";
                }
            } else {
                $data['errorMessage'] = "File Not Found on Server";
            }
        } else {
            $data['errorMessage'] = "Image Path Not Found in Database";
        }

        echo json_encode($data);
    }
}
?>
