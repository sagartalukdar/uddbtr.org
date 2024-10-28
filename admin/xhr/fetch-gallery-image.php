<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("gallery","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['category']= $readEnquiry[0]['category'];
    $data['image']= $readEnquiry[0]['image'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>