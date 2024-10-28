<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("news_events","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['head']= $readEnquiry[0]['head'];
    $data['image']= $readEnquiry[0]['image'];
    $data['address']= $readEnquiry[0]['address'];
	$data['description']= $readEnquiry[0]['description'];
    $data['date']= $readEnquiry[0]['date'];
	$data['url']= $readEnquiry[0]['url'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>