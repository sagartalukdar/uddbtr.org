<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("department_dignities","`id`='$dataId'");

if ($readEnquiry) {

	$data['name']= $readEnquiry[0]['name'];	
	$data['designation']= $readEnquiry[0]['designation'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>