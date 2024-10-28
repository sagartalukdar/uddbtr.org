<?php 
include '../../classes/Crud.php';

$crud = new Crud();

extract($_POST);

$readEnquiry = $crud->Read("vision_goals","`id`='$dataId'");

if ($readEnquiry) {
	
	$data['vision']= $readEnquiry[0]['vision'];
    $data['goals']= $readEnquiry[0]['goals'];

} else{

	$data['err'] ="Data Not Available";
}
echo json_encode($data);
?>