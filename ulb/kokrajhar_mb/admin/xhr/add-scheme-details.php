<?php 
session_start();
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

if (isset($_POST['scheme_id'])) {
    include '../../classes/Crud.php';
    $crud = new Crud();
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");

    extract($_POST);

    // Check if progress is unique
    $countUser = $crud->Count("scheme_details", "`scheme_id`=$scheme_id AND `progress` >= '$progress'");
    if ($countUser > 0) {
        $data['errorMessage'] = "Progress must be greater than from the last.";
        echo json_encode($data);
        exit();
    }

    // Handle image uploads
    $imageFields = ['image1', 'image2', 'image3'];
    $imageDir = "images/schemes/";
    $uploadOk = 1;
    $uploadedFiles = [];

    foreach ($imageFields as $field) {
        if (isset($_FILES[$field]) && $_FILES[$field]['error'] == UPLOAD_ERR_OK) {
            $fileName = md5(time() . $field) . basename($_FILES[$field]["name"]);
            $target_file = $imageDir . $fileName;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            
            // Check if image file is valid
            $check = getimagesize($_FILES[$field]["tmp_name"]);
            if ($check !== false && in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
                // Move uploaded file
                if (!move_uploaded_file($_FILES[$field]["tmp_name"], "../" . $target_file)) {
                    $uploadOk = 0;
                    $data['errorMessage'] = "Error uploading $field.";
                    break;
                } else {
                    $uploadedFiles[$field] = $target_file;
                }
            } else {
                $uploadOk = 0;
                $data['errorMessage'] = "Invalid file type for $field.";
                break;
            }
        }
    }

    if ($uploadOk) {
        // Prepare data for insertion into scheme_details table
        $schemeData = [
            'scheme_details' => $scheme_details,
            'progress' => $progress,
            'image1' => isset($uploadedFiles['image1']) ? $uploadedFiles['image1'] : null,
            'image2' => isset($uploadedFiles['image2']) ? $uploadedFiles['image2'] : null,
            'image3' => isset($uploadedFiles['image3']) ? $uploadedFiles['image3'] : null,
            'scheme_id' => $scheme_id,
            'date' => $today
        ];

        // Insert scheme details
        $create = $crud->Create($schemeData, "scheme_details");

        if ($create) {
            echo json_encode(['successMessage' => "Scheme Details added Successfully"]);
        } else {
            $data['errorMessage'] = "Error Adding Scheme Details.";
        }
    } else {
        echo json_encode($data);
    }
}
?>
