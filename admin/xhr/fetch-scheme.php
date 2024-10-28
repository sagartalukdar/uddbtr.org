<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("schemes","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['schemeName']= $readEnquiry[0]['scheme_name'];
    $data['address']= $readEnquiry[0]['location'];
    $data['description']= $readEnquiry[0]['short_desc'];
    $data['pdf']= $readEnquiry[0]['pdf'];
    $data['phone']= $readEnquiry[0]['contact_no'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>