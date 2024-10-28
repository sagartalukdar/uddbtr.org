<?php 
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_SESSION['userType'])) {
  if ($_SESSION['userType']!="CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN" && $_SESSION['userType'] != "ADMIN" ) {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: ../login-test');
    exit();
  }
   
}

if (isset($_POST['schemeID'])) {
  $schemeID = $_POST['schemeID'];
  include '../../classes/Crud.php';
  $crud = new Crud();
  $readUsers =$crud->Read("schemes","`id`='$schemeID'");
  if ($readUsers) {
    $data['scheme_id']=$schemeID;
    $data['scheme_name']=$readUsers[0]['scheme_name'];
   
    $data['location']=$readUsers[0]['location'];
    $data['person']=$readUsers[0]['done_by'];
    $data['phone']=$readUsers[0]['contact_no'];
    $data['pdf']=$readUsers[0]['pdf'];
   
    $data['status']=$readUsers[0]['status'];
  } else {
    $data['errorMessage']="User not found.";
  }

  echo json_encode($data);
}
?>