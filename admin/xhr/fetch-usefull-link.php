<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("usefull_links","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['title']= $readEnquiry[0]['title'];
	$data['url']= $readEnquiry[0]['link'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>