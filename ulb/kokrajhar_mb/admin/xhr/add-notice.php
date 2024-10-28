<?php 
session_start();
if (empty($_SESSION['userType']) || $_SESSION['userType']!="ADMIN") {
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

if(isset($_FILES['pdf'])){

    extract($_POST);

        $pdfOk=1;

        $target_dir = "img/notice/";

        $pdfFile= $target_dir . md5(time()).basename($_FILES["pdf"]["name"]);
        $pdfFileType = strtolower(pathinfo($pdfFile,PATHINFO_EXTENSION));

        if($pdfFileType != "pdf" ) {         
            $pdfOk = 0;
        }

        if($pdfOk == 0){
            $data["errorMessage"]="something wrong with pdf file.";
            echo json_encode($data);
            exit;
        }
  

            if (move_uploaded_file($_FILES["pdf"]["tmp_name"], "../".$pdfFile)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'head' => $head,   
                    'title' => $title,                  
                    'pdf' =>$pdfFile,
                    'description' =>$description,
                    'link' =>$link,
                    'date'=>$today                                          
                ];
               
                    $create = $crud->Create($data,"recent_updates");

                    if($create) {
                        $data["successMessage"]="Data uploaded successfully.";
                    } else {
                        $data["errorMessage"]="Error uploading Data.";
                    }                                 

            } else {
                $data["errorMessage"]="file can't move to the folder.";
            }

}else{

    extract($_POST);

    $data = [
        'head' => $head,   
        'title' => $title,       
        'description' =>$description,
        'link' =>$link,           
        'date'=>$today                                          
    ];
   
        $create = $crud->Create($data,"recent_updates");

        if($create) {
            $data["successMessage"]="Data uploaded successfully.";
        } else {
            $data["errorMessage"]="Error uploading Data.";
        }           

}
    echo json_encode($data);
    exit();
?>


