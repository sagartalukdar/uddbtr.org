<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("executive_message","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['name']= $readEnquiry[0]['name'];
    $data['image']= $readEnquiry[0]['image'];
    $data['banner']= $readEnquiry[0]['banner'];
	$data['message']= $readEnquiry[0]['message'];
	$data['url']= $readEnquiry[0]['url'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>