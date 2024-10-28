<?php 
session_start();
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

if(isset($_POST['ajax'])){
    include '../../classes/Crud.php';
    $crud = new Crud();
    extract($_POST);

        $target_dir = "img/departmentOverview/";
        $target_file1 = $target_dir . md5(time()).basename($_FILES["image1"]["name"]);
        $target_file2 = $target_dir . md5(time()).basename($_FILES["image2"]["name"]);
        $target_file3 = $target_dir . md5(time()).basename($_FILES["image3"]["name"]);

        $uploadOk = 1;
        $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
        $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
        $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

        $check1 = getimagesize($_FILES["image1"]["tmp_name"]);
        $check2 = getimagesize($_FILES["image2"]["tmp_name"]);
        $check3 = getimagesize($_FILES["image3"]["tmp_name"]);

        if($check1 !== false && $check2 !== false && $check3 !==false) {
            $uploadOk = 1;
        } else{
            $uploadOk = 0;
        } 
            // Allow certain file formats
        if(
        ($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" && $imageFileType1 != "gif") || 
        ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif") ||
        ($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg" && $imageFileType3 != "gif")
        ) {
         
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $data["errorMessage"]="something wrong with file.";
        // if everything is ok, try to upload file
        } else {

            if (move_uploaded_file($_FILES["image1"]["tmp_name"], "../".$target_file1) && move_uploaded_file($_FILES["image2"]["tmp_name"], "../".$target_file2) && move_uploaded_file($_FILES["image3"]["tmp_name"], "../".$target_file3)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'history' => $history,    
                    'overview'=>$overview,
                    'image1' => $target_file1,                   
                    'image2' => $target_file2,    
                    'image3' => $target_file3,         
                ];
               
                    $create = $crud->Create($data,"department_overview");

                    if($create) {
                        $data["successMessage"]="Data uploaded successfully.";
                    } else {
                        $data["errorMessage"]="Error uploading Data.";
                    }                                 

            } else {
                $data["errorMessage"]="file can't move to the folder.";
            }
        }
    
    echo json_encode($data);
    exit();
}
?>


