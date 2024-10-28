<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_SESSION['userType'])) {
  if ($_SESSION['userType']!="CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN" ) {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: ../login-test');
    exit();
  }
   
}

if (isset($_POST['scheme_details_id'])) {
  $id = $_POST['scheme_details_id'];
  include '../../classes/Crud.php';
  $crud = new Crud();
  $readUsers =$crud->Read("scheme_details","`id`='$id'");
  if ($readUsers) {
    $data['id']=$id;
    $data['details']=$readUsers[0]['scheme_details'];
    $data['scheme_id']=$readUsers[0]['scheme_id'];
    $data['scheme_progress']=$readUsers[0]['progress'];
    $data['image1']=$readUsers[0]['image1'];
    $data['image2']=$readUsers[0]['image2'];
    $data['image3']=$readUsers[0]['image3'];
    
  } else {
    $data['errorMessage']="User not found.";
  }

  echo json_encode($data);
}
?>