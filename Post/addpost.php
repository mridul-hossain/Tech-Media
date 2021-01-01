<?php
require_once '../Model.php';

if(isset($_POST['submit'])){
	
	$data['name'] = $_POST['name'];
	$data['title'] = $_POST['title'];
	$data['text'] = $_POST['text'];
	
	$data['nameErr'] = '';
	$data['username'] = $_SESSION['username'];
  $data['image'] = basename($_FILES["image"]["name"]);
	$target_dir = "../Pictures/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
      if(addpst($data))
	{
		 header('Location: ../Dashboard.php?nameErr=Post successfully saved!');
		//echo "Post successfully saved!";
		
	}
    }


	
}
else{
	echo "Please try again!";
}

	
?>