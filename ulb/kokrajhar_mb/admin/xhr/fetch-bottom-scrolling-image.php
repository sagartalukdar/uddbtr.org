<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("bottom_scrolling_imges","`id`='$dataId'");

if ($readEnquiry) {
	
    $data['image']= $readEnquiry[0]['image'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>