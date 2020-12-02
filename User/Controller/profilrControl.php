<?php

	if(isset($_POST['submit']) && $_POST['uname']==$_POST['name'] && $_POST['pass']==$_POST['password']){
		echo "Welcome ". $_POST['name'];
		require_once '../Dashboard.php';
	}

	else{
		
		header("Location: ../Login.php");
		echo "Wrong Username or, Password!";
	}
?>
