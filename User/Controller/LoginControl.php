<?php

require_once '../Model.php';



	if(isset($_POST['submit'])){

		$data['name'] = $_POST['name'];
		$data['conpass'] = $_POST['password'];
		

		if(login($data))
		{
			
			
			if(isset($_POST['remember']))
			{
				setcookie('name',$data['name'],time()+60*60*7);
			}
			$_SESSION['username'] = $data['name'];
			header('Location: ../Dashboard.php');
		}
		else{
		
		$_SESSION['username'] = $data['name'];
		header("Location: ../login.php");
		
	}
	}
?>