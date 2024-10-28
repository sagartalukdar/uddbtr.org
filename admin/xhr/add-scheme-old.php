<?php 
session_start();
if (isset($_SESSION['userType'])) {
  if ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN") {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: ../login-test');
    exit();
  }
}


if (isset($_POST['scheme_name'])) {
  include '../../classes/Crud.php';
  $crud = new Crud();
  date_default_timezone_set("Asia/Kolkata");
  $today = date("Y-m-d");
  $time = date("H:i:s");
  extract($_POST);
  // $displayPass = $password;
  // $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; 
  // $password = hash('sha512', $password . $salt);

  $countUser = $crud->Count("schemes","`scheme_name`='$scheme_name' OR `contact_no`='$phone'");
  if ($countUser > 0) {
    $data['errorMessage'] = "scheme_name of same person Already Exists.";
    echo json_encode($data);
    exit();
  } else {
    // This block was not correctly structured in your original code
    $data = [
      'scheme_name' => $scheme_name,
      'location' => $location,
      'done_by' => $person,
      'contact_no' => $phone,
      
      'date' => $today,
      // 'added_time' => $time
    ];

    $create = $crud->Create($data, "schemes");

    if ($create) {
      $data['successMessage'] = "Schemes Added Successfully";
    } else {
      $data['errorMessage'] = "Error Adding Schemes."; // Corrected error message
    }

    echo json_encode($data);
  }
}
?>
