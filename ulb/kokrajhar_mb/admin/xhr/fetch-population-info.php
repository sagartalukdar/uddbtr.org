<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("population_info   ","`id`='$dataId'");

if ($readEnquiry) {

	$data['image']= $readEnquiry[0]['image'];	
	$data['pdf']= $readEnquiry[0]['pdf'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>