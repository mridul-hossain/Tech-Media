<?php
require_once '../Model.php';

if (isset($_POST['submit'])) {
	$data['name'] = $_POST['name'];
	$data['title'] = $_POST['title'];
	$data['text'] = $_POST['text'];
	if (addpst($data)) {
		echo "Post successfully saved!";
	}
} else {
	echo "Please try again!";
}
if (isset($_POST['post'])) {
	$_SESSION['username'] = $_POST['name'];
	showAllposts();
}
