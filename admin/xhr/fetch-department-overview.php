<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("department_overview","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['history']= $readEnquiry[0]['history'];
    $data['overview']= $readEnquiry[0]['overview'];
	$data['image1']= $readEnquiry[0]['image1'];
    $data['image2']= $readEnquiry[0]['image2'];
    $data['image3']= $readEnquiry[0]['image3'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>