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

    if(empty($_FILES["pdf"]["name"])) {
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
    }else{
        $target_dir = "images/schemes/";
        $target_file = $target_dir . md5(time()).basename($_FILES["pdf"]["name"]);
        $uploadOk = 1;
        $pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));    

        // Allow certain file formats
        if($pdfFileType != "pdf") {         
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $data["errorMessage"]="Something wrong with pdf.";
            echo json_encode($data);
            exit;
        } else {

            if (move_uploaded_file($_FILES["pdf"]["tmp_name"], "../".$target_file)) {
                $data = [
                    'scheme_name' => $schemename,
                    'location' => $location,
                    'done_by' => $person,
                    'contact_no' => $phone,
                    'pdf'=>$target_file          
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
            }else{
                $data["errorMessage"]="Sorry, there was an error uploading your file.";               
            }
        }
    } 
    
    echo json_encode($data);
}
?>
