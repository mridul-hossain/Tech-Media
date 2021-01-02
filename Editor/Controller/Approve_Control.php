<?php

require_once '../Model/Model_.php';

if(isset($_POST['approve'])){
	$id = (int)$_POST['postId'];

	if(approvePost($id)){
		header('Location: ../View/Approve.php');
	}
}


if(isset($_POST['remove'])){
	$id = (int)$_POST['postId'];

	if(deletePost($id)){
		header('Location: ../View/Approve.php');
	}
}

?>