<?php

require_once '../Model.php';

session_start();

	if(isset($_POST['submit'])){

		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];
		

		if(login($data))
		{
			$_SESSION['username'] = $data['username'];
			header('Location: ../Dashboard.php');
		}
		else{
			$message = "Error";
		header("Location: ../Login.php?mesaage=".$message);
	}
	}
?>