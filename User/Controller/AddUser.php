<?php
require_once '../Model.php';

if(isset($_POST['submit'])){
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['website'] = $_POST['website'];
	$data['comment'] = $_POST['comment'];
	$data['conpass'] = $_POST['conpass'];
		
	$data['add'] = $_POST['add'];
	$data['gender'] = $_POST['gender'];
	

	if(addProduct($data))
	{
		echo "Product successfully saved!";
	}
}
else{
	echo "Please try again!";
}
?>