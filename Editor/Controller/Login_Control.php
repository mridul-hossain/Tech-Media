<?php

require_once '../Model/Model_.php';

session_start();

	if(isset($_POST['submit'])){

		$data['username'] = $_POST['name'];
		$data['password'] = $_POST['password'];
		

		if(login($data))
		{
			if(isset($_POST['remember'])){

				setcookie('username', $_POST['name'], time()+60);
				setcookie('password', $_POST['password'], time()+60);
			}
			$_SESSION['username'] = $data['username'];
			header('Location: ../View/Dashboard.php');
		}
		else{
			$message = "Wrong username or, password!";
		header("Location: ../View/Login.php?mesaage=".$message);
	}
	}
?>