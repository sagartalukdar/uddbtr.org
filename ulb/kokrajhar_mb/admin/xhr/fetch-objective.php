<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("objectives","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['objective']= $readEnquiry[0]['objective'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>