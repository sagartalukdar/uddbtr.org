<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("contact_details","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['email']= $readEnquiry[0]['email'];
    $data['phone']= $readEnquiry[0]['phone'];
	$data['address']= $readEnquiry[0]['address'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>