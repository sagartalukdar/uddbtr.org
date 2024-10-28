<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("organization_info   ","`id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['image'];	
	$data['pdf']= $readEnquiry[0]['pdf'];
	$data['udd_information']= $readEnquiry[0]['udd_information'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>