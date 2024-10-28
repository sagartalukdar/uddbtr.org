<?php 
session_start();
error_reporting(E_ALL);

if (isset($_SESSION['userType']) && isset($_SESSION['this_user_MB'])) {
   if ($_SESSION['userType'] != "EO" && $_SESSION['userType'] != "CP" && $_SESSION['userType'] != "ADMIN" && $_SESSION['this_user_MB'] != "kokrajhar_mb") {
      $_SESSION['errorLogin'] = "Access Denied!";
      header('location: ../login-test');
      exit();
   } 
}

// Update user information
if (isset($_POST['scheme_id'])) {
      include '../../classes/Crud.php';
      $crud = new Crud();
      date_default_timezone_set("Asia/Kolkata");
      $today = date("Y-m-d");
      $time = date("H:i:s");
      $sessionName = $_SESSION['this_user_username'];
      $userType = $_SESSION['userType'];
      extract($_POST);
    
    $data = [
        'scheme_name' => $schemename,
        'location' => $location,
        'done_by' => $person,
        'contact_no' => $phone,
        
       
    ];
    
    $count = $crud->Count("schemes", "`id`='$scheme_id'");
    if ($count == 1) {
        $update = $crud->Update("schemes", $data, "`id`='$scheme_id'");
        if ($update) {
            $data['successMessage'] = "Scheme Updated Successfully";
        } else {
            $data['errorMessage'] = "Error Updating Scheme.";
        }
    } else {
        $data['errorMessage'] = "Scheme not found.";
    }
    
    echo json_encode($data);
}
?>
