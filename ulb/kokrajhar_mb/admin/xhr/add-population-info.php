<?php 
session_start();
if (!isset($_SESSION['userType']) || ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN")) {
    $_SESSION['errorLogin'] = "Access Denied!";
    echo json_encode(['errorMessage' => "Access Denied!"]);
    exit();
}

if(isset($_FILES['image'])){
    include '../../classes/Crud.php';
    $crud = new Crud();
    extract($_POST);

        $uploadOk = 1;
        $pdfOk=1;

        $target_dir = "img/populationInfo/";
        $target_file = $target_dir . md5(time()).basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $pdfFile= $target_dir . md5(time()).basename($_FILES["pdf"]["name"]);
        $pdfFileType = strtolower(pathinfo($pdfFile,PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["image"]["tmp_name"]);

        if($check !== false) {
            $uploadOk = 1;
        } else{
            $uploadOk = 0;
        } 

            // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {         
            $uploadOk = 0;
        }

        if($pdfFileType != "pdf" ) {         
            $pdfOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $data["errorMessage"]="something wrong with image file.";
            echo json_encode($data);
            exit;
        // if everything is ok, try to upload file
        } 
        if($pdfOk == 0){
            $data["errorMessage"]="something wrong with pdf file.";
            echo json_encode($data);
            exit;
        }
  

            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file) && move_uploaded_file($_FILES["pdf"]["tmp_name"], "../".$pdfFile)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image' => $target_file,                   
                    'pdf' =>$pdfFile,                     
                ];
               
                    $create = $crud->Create($data,"population_info");

                    if($create) {
                        $data["successMessage"]="Data uploaded successfully.";
                    } else {
                        $data["errorMessage"]="Error uploading Data.";
                    }                                 

            } else {
                $data["errorMessage"]="file can't move to the folder.";
            }

    
    echo json_encode($data);
    exit();
}
?>


