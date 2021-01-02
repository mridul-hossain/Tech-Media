<?php
require_once '../Model/Model_.php';

if(isset($_POST['hidePost'])){
	$id = (int)$_POST['postId'];

	if(hidePost($id)){
		header('Location: ../View/Dashboard.php');
	}
}


if(isset($_POST['hideComment'])){
	$id = (int)$_POST['commentId'];

	if(hideComment($id)){
		header('Location: ../View/Dashboard.php');
	}
}

?>