<?php
require_once '../Model.php';

if(isset($_POST['Submit'])){

    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
	 $data['username'] = $_POST['username'];
    $data['pass'] = $_POST['password'];
	 $data['conpass'] = $_POST['cpassword'];
    $data['add'] = $_POST['add'];
    $data['gender'] = $_POST['gender'];

    
  if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z\s]+$/", $_POST["name"]) || str_word_count($_POST["name"])<2) {
    header('Location: ../Registration.php?nameErr=*Give a valid name.');
  }
  else if (empty($_POST["email"])) {
    header('Location: ../Registration.php?emailErr=*Type a valid Email.');
  }

  else if (empty($_POST["username"])) {
    header('Location: ../Registration.php?usernameErr=*Please select give a username!');
  }

  else if (empty($_POST["password"])) {
    header('Location: ../Registration.php?passwordErr=*Please give a password.');
  }

  else if (empty($_POST["gender"])) {
    header('Location: ../Registration.php?genderErr=*Gender is required');
  }

  

  else if (empty($_POST["password"]) || $_POST["password"] != $_POST["cpassword"]) {
    header('Location: ../Registration.php?cpasswordErr=*Password does not match.');
  }

  else if (empty($_POST["add"])) {
    header('Location: ../Registration.php?cityErr=*Give your address.');
  }

  
  else{
    if(addProduct($data))
    {
        header('Location: ../login.php');
    }
  }

	// if(addEditor($data))
	// {
	// 	header('Location: ../Registration.php');
	// }
}
else{
	echo "Please try again!";
}
?>