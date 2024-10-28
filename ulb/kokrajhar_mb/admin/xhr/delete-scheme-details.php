<?php 
session_start();
error_reporting(E_ALL);
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

if (isset($_POST['scheme_details_id'])) {
 include '../../classes/Crud.php';
  $crud = new Crud();
  date_default_timezone_set("Asia/Kolkata");
  $today = date("Y-m-d");
  $time = date("H:i:s");

  extract($_POST);

  $schemeDetail=$crud->Read("scheme_details","`id`=$scheme_details_id");
  $schemeId=$schemeDetail[0]['scheme_id'];
  
  $countUser = $crud->Delete("scheme_details","`id`='$scheme_details_id'");
  if ($countUser) {

    $schemeDetails=$crud->Read("scheme_details","`status`='1' AND `scheme_id`=$schemeId order by `id` desc");

    if($schemeDetails){     
      $updateData = [                   
         'image' =>$schemeDetails[0]['image1']
      ];
      $updateScheme = $crud->Update("schemes", $updateData, "`id` = $schemeId ");
      
      if ($updateScheme) {
          echo json_encode(['successMessage' => "Scheme Details Deleted Successfully"]);
          exit;
      } else {
          echo json_encode(['errorMessage' => "Error Deleting Scheme Details."]);
          exit;
      }
    }else{
      $updateData = [                   
        'image' =>""
      ];
      $updateScheme = $crud->Update("schemes", $updateData, "`id` = $schemeId ");
      
      if ($updateScheme) {
          echo json_encode(['successMessage' => "Scheme Details Deleted Successfully"]);
          exit;
      } else {
          echo json_encode(['errorMessage' => "Error Deleting Scheme Details."]);
          exit;
      }
    }
    
  } else {
      $data['errorMessage'] = "Error Deleting Scheme Details.";
  }
    
  echo json_encode($data);
}
?>