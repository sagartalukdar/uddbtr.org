<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check session for access control
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

if (isset($_POST['scheme_details_id'])) {
    include '../../classes/Crud.php';
    $crud = new Crud();
    extract($_POST);

    $data = [
        'scheme_details' => $scheme_details,
        'progress' => $scheme_progress,
    ];

    // Handle image uploads
    $uploadDir = "images/schemes/";
    $uploadOk = true;

    // Function to handle image upload and update data array
    function handleImageUpload($fileKey, &$data, $target_dir)
    {
        if (!empty($_FILES[$fileKey]['name'])) {
            $target_file = $target_dir . md5(time()) . '_' . basename($_FILES[$fileKey]['name']);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES[$fileKey]['tmp_name']);

            if ($check === false) {
                return false; // Invalid image file
            }

            if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
                return false; // Unsupported file type
            }

            if (!move_uploaded_file($_FILES[$fileKey]['tmp_name'],"../" . $target_file)) {
                return false; // Failed to move file
            }

            $data[$fileKey] = $target_file; // Store image path in $data array
        }

        return true;
    }

    // Update image paths in $data array
    $imageKeys = ['image1', 'image2', 'image3'];
    foreach ($imageKeys as $key) {
        $uploadSuccess = handleImageUpload($key, $data, $uploadDir);
        if (!$uploadSuccess) {
            $uploadOk = false;
            break;
        }
    }

    // Check upload status
    if ($uploadOk) {
        // Update scheme details in the database
        $schemeDetail = $crud->read("scheme_details", "`id`='$scheme_details_id'");
        if ($schemeDetail) {
            $update = $crud->Update("scheme_details", $data, "`id`='$scheme_details_id'");

            if ($update) {                 
                // Update image field in schemes table
                $schemeId=$schemeDetail[0]['scheme_id'];
                $schemeDetails = $crud->read("scheme_details", "`status`='1' AND `scheme_id`=$schemeId order by `id` desc");

                $isRecent=false;

                if($schemeDetails && $scheme_details_id==$schemeDetails[0]['id']){
                    $isRecent=true;
                }

                if ($isRecent && !empty($_FILES['image1']['name'])) {
                    $target_file = "images/schemes/" . md5(time()) . '_' . basename($_FILES['image1']['name']);
                    $updateData = [                   
                       'image' =>$target_file
                    ];           
                    $updateScheme = $crud->Update("schemes", $updateData, "`id` = $schemeId ");
                    
                    if ($updateScheme) {
                        echo json_encode(['successMessage' => "Scheme Details Updated Successfully"]);
                        exit;
                    } else {
                        echo json_encode(['errorMessage' => "Error Updating Scheme Details."]);
                        exit;
                    }
                }else{
                    echo json_encode(['successMessage' => "Scheme Details Updated Successfully"]);
                    exit;    
                }
            
            } else {
                $data['errorMessage'] = "Error Updating Scheme Details.";
            }

        } else {
            echo json_encode(['errorMessage' => "Scheme not found."]);
        }
    } else {
        echo json_encode(['errorMessage' => "Failed to upload one or more images."]);
    }
}
?>
