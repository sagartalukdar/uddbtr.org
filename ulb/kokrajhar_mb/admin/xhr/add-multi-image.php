<?php 
session_start();
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

if(isset($_FILES['images'])){
include '../../classes/Crud.php';
    $crud = new Crud();
    extract($_POST);

    $target_dir = "img/gallery/";

    foreach($_FILES['images']['name'] as $key=>$val){

        $image=$val;
        $target_file = $target_dir.md5(time()).basename($image);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["images"]["tmp_name"][$key]);
        if($check !== false) {
            $uploadOk = 1;
        } else{
            $uploadOk = 0;
        } 

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {     
            $uploadOk = 0;
        }
    
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          $data['errorMessage'] = "Something is wrong with the file.";
        } else {
            if (move_uploaded_file($_FILES["images"]["tmp_name"][$key],"../".$target_file)) {
            $data = [
                'image'=>$target_file,
                'category'=>$category
            ];
    
            $create = $crud->Create($data,"gallery");

            if($create) {
                $data["successMessage"]="Data uploaded successfully.";
            } else {
                $data["errorMessage"]="Error uploading Data.";
            }                                 

            } else {
                $data["errorMessage"]="file can't move to the folder.";
            }
        } 

    }        
    
    echo json_encode($data);
    exit();
}
?>


