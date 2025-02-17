<?php 
session_start();
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

if (isset($_POST['scheme_details_Id']) && isset($_POST['schemeId'])) {
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
    $time = date("H:i:s");
    include '../../classes/Crud.php';
    $crud = new Crud();
    extract($_POST);
    $scheme_details_Id = $_POST['scheme_details_Id'];
    $scheme_Id = $_POST['schemeId'];


    $schemeDetail = $crud->read("scheme_details", "`id`='$scheme_details_Id'");

    if ($schemeDetail) {
        // Update scheme_details table
        $data = ['status' => '1'];
        $update = $crud->Update("scheme_details", $data, "`id`='$scheme_details_Id'");

        if ($update) {
            // Update schemes table

            $data2 = ['status' => '1'];
            $update2 = $crud->Update("schemes", $data2, "`id`='$scheme_Id'");

            $schemeDetails = $crud->read("scheme_details", "`status`='1' AND `scheme_id`=$scheme_Id order by `id` desc");

            $isRecent=false;

            if($schemeDetails && $scheme_details_Id==$schemeDetails[0]['id']){
                $isRecent=true;
            }

            if ($isRecent){
                // Update image field in schemes table
                $updateData = [
                    'image' => $schemeDetails[0]['image1']
                ];
                $updateScheme = $crud->Update("schemes", $updateData, "`id` = '$scheme_Id'");
                
                if ($updateScheme) {
                    $response = ['successMessage' => "Scheme Details Verified Successfully"];
                } else {
                    $response = ['errorMessage' =>"Error Verifing Scheme Details."];
                }
            }else{
                $response = ['successMessage' => "Scheme Details Verified Successfully"];
            }

        } else {
            $response = ['errorMessage' => "Error Verifing scheme_details "];
        }
    }
    else {
        $response = ['errorMessage' => "Error Verifing scheme_details"];
    }        


} else {
    $response = ['errorMessage' => "Scheme ID or Scheme Details ID not provided"];
}

echo json_encode($response);
?>
