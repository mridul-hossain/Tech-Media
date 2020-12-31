<?php
require_once '../Model.php';

if(isset($_POST['Submit'])){


	$data['pass'] = $_POST['password'];
    $data['name'] = $_POST['name'];
    $data['phone'] = $_POST['phone'];
    $data['email'] = $_POST['email'];
    $data['city'] = $_POST['city'];
    $data['country'] = $_POST['country'];
    $data['dob'] = $_POST['dob'];
    $data['username'] = $_POST['username'];
    $data['gender'] = $_POST['gender'];

	if(addEditor($data))
	{
		header('Location: ../Registration.php');
	}
}
else{
	echo "Please try again!";
}
?>