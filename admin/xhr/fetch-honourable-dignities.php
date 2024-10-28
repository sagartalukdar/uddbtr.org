<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("honourable_dignities","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['name']= $readEnquiry[0]['name'];
    $data['image']= $readEnquiry[0]['image'];
	$data['designation']= $readEnquiry[0]['designation'];
	$data['description']= $readEnquiry[0]['description'];
	$data['facebook']= $readEnquiry[0]['facebook'];
    $data['youtube']= $readEnquiry[0]['youtube'];
	$data['instagram']= $readEnquiry[0]['instagram'];
	$data['twitter']= $readEnquiry[0]['twitter'];
} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>