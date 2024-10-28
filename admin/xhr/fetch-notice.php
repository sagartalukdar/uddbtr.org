<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("recent_updates   ","`id`='$dataId'");

if ($readEnquiry) {

	$data['head']= $readEnquiry[0]['head'];	
	$data['pdf']= $readEnquiry[0]['pdf'];
	$data['title']= $readEnquiry[0]['title'];
	$data['description']= $readEnquiry[0]['description'];
	$data['link']= $readEnquiry[0]['link'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>