<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("history","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['description']= $readEnquiry[0]['description'];
    $data['image']= $readEnquiry[0]['image'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>