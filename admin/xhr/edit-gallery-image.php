<?php 
session_start();
error_reporting(E_ALL);

if (empty($_SESSION['userType']) || $_SESSION['userType'] != "ADMIN") {
    $_SESSION['errorLogin'] = "Access Denied!";
    header('location: ../login.php');
    exit();
} else {
    include '../../classes/Crud.php';
    $crud = new Crud();
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
    $time = date("H:i:s");
    $userType = $_SESSION['userType'];
}

if (isset($_POST['id'])) {
    extract($_POST);

    $currentImage = $crud->Read("gallery","`id`='$id'");
    $currentImagePath = !empty($currentImage) ? $currentImage[0]['image'] : '';

    $newImageUploaded = false; 
    $oldImageDeleted = false; 

    if (!empty($_FILES["image"]["name"])) {
        // New image is being uploaded
        $target_dir = "img/gallery/";
        $newImageName = md5(time()) . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $newImageName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            $uploadOk = 0;
            $data["errorMessage"] = "File is not an image.";
        }

        if (!in_array($imageFileType, ["jpg", "png", "jpeg", "gif"])) {
            $uploadOk = 0;
            $data["errorMessage"] = "Only JPG, JPEG, PNG & GIF files are allowed.";
        }

        if ($uploadOk == 0) {
            $data["errorMessage"] = "Image upload failed.";
        } else {
            
            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../" . $target_file)) {
                $newImageUploaded = true;

                // If old image exists, delete it
                if (!empty($currentImagePath)) {
                    $fullCurrentImagePath = "../" . $currentImagePath;
                    if (file_exists($fullCurrentImagePath)) {
                        if (unlink($fullCurrentImagePath)) {
                            $oldImageDeleted = true;
                        } else {
                            $data["errorMessage"] = "Failed to delete old image.";
                        }
                    } else {
                        // Old image doesn't exist, proceed with database update
                        $oldImageDeleted = true;
                    }
                } else {
                    // No old image to delete
                    $oldImageDeleted = true;
                }

                if ($newImageUploaded && $oldImageDeleted) {
                    // Update the database with the new image path
                    $data['image'] = $target_file;
                    $data['category'] = $category;
                    $count = $crud->Count("gallery", "`id`='$id'");
                    if ($count == 1) {
                        $update = $crud->Update("gallery", $data, "`id`='$id'");
                        $data["successMessage"] = "Data updated successfully.";
                    } else {
                        // Rollback new image upload if ID not matched
                        unlink("../" . $target_file);
                        $data["errorMessage"] = "Error! ID not matched.";
                    }
                } else {
                    // Rollback new image upload if old image not deleted
                    if ($newImageUploaded) {
                        unlink("../" . $target_file);
                    }
                    $data["errorMessage"] = "Error updating image.";
                }
            } else {
                $data["errorMessage"] = "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        // No new image uploaded; update only category
        $data['category'] = $category;
        $count = $crud->Count("gallery", "`id`='$id'");
        if ($count == 1) {
            $update = $crud->Update("gallery", $data, "`id`='$id'");
            $data["successMessage"] = "Data updated successfully.";
        } else {
            $data["errorMessage"] = "Error updating data.";
        }
    }

    echo json_encode($data);
}
?>
