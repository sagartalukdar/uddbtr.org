<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("introduction","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['introduction']= $readEnquiry[0]['introduction'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>