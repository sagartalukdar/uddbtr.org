<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("chd_message","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['name']= $readEnquiry[0]['name'];
    $data['image']= $readEnquiry[0]['image'];
	$data['message']= $readEnquiry[0]['message'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>