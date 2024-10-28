<?php 
session_start();
if (isset($_SESSION['userType'])) {
  if ($_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN") {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: ../login-test');
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

  $countUser = $crud->Count("user","`username`='$username' OR `email`='$email'");
  if ($countUser > 0) {
    $data['errorMessage'] = "Username or Email Already Exists.";
    echo json_encode($data);
    exit();
  } else {
    // This block was not correctly structured in your original code
    $data = [
      'email' => $email,
      'MB' => $MB,
      'username' => $username,
      'password' => $password,
      'phone' => $phone,
      'userType' => $userType,
      'register_date' => $today,
      // 'added_time' => $time
    ];

    $create = $crud->Create($data, "user");

    if ($create) {
      $data['successMessage'] = "User Created Successfully";
    } else {
      $data['errorMessage'] = "Error Creating User."; // Corrected error message
    }

    echo json_encode($data);
  }
}
?>
