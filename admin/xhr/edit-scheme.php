<?php 
session_start();
if (isset($_SESSION['userType'])) {
    if ($_SESSION['userType'] != "CP" && $_SESSION['userType'] != "EO" && $_SESSION['userType'] != "ADMIN") {
        $_SESSION['errorLogin'] = "Access Denied!";
        header('location: ../login-test');
        exit();
    }
}

if(isset($_POST['id'])){
    include '../../classes/Crud.php';
    $crud = new Crud();
    date_default_timezone_set("Asia/Kolkata");
    $today = date("Y-m-d");
    $time = date("H:i:s");
    
    extract($_POST);

    if (empty($_FILES["pdf"]["name"]) ) {       
        $data = [               
            'scheme_name' => $schemeName,
            'location' => $address,
            'short_desc' => $description,
            'contact_no' => $phone,
            'date' => $today,  
        ]; 
       
        $count= $crud ->Count("schemes","`id`='$id'");
        if($count==1){
            $update =$crud->Update("schemes",$data,"`id`='$id'");
            $data["successMessage"]="data updated successfully.";
        } else {
            $data["errorMessage"]="Error updating data.";
        }
    } else {       

        if(!empty($_FILES['pdf']['name'])){
            $target_dir = "img/scheme/";
            $target_file = $target_dir . md5(time()).basename($_FILES["pdf"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));    

            // Allow certain file formats
            if($imageFileType != "pdf") {         
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $data["errorMessage"]="Something wrong with image.";
                echo json_encode($data);
                exit;
            } else {
    
                if (move_uploaded_file($_FILES["pdf"]["tmp_name"], "../".$target_file)) {
              
                    $data = [               
                        'scheme_name' => $schemeName,
                        'location' => $address,
                        'short_desc' => $description,
                        'contact_no' => $phone,
                        'pdf'=>$target_file,
                        'date' => $today,  
                    ]; 

                    $count= $crud ->Count("schemes","`id`='$id'");                   
                    if($count==1){
                        $update =$crud->Update("schemes",$data,"`id`='$id'");
                        
                        $data["successMessage"]="Data updated successfully.";
                    } else {
                        $data["errorMessage"]="error! id not matched.";
                    }

                }else{
                    $data["errorMessage"]="Sorry, there was an error uploading your file.";
                    echo json_encode($data);
                    exit;
                }
            }

        }
       
    }
    echo json_encode($data);
}
?>