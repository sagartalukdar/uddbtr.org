<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("home_sliding_card","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['title']= $readEnquiry[0]['title'];
    $data['image']= $readEnquiry[0]['image'];
    $data['description']= $readEnquiry[0]['description'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>