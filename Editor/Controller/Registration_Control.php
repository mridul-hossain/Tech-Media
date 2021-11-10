<?php
require_once '../Model/Model_.php';

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

    
  if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z\s]+$/", $_POST["name"]) || str_word_count($_POST["name"])<2) {
    header('Location: ../View/Registration.php?nameErr=*Give a valid name.');
  }
  else if (empty($_POST["email"])) {
    header('Location: ../View/Registration.php?emailErr=*Type a valid Email.');
  }

  else if (empty($_POST["username"])) {
    header('Location: ../View/Registration.php?usernameErr=*Please select give a username!');
  }

  else if (empty($_POST["password"])) {
    header('Location: ../View/Registration.php?passwordErr=*Please give a password.');
  }

  else if (empty($_POST["gender"])) {
    header('Location: ../View/Registration.php?genderErr=*Gender is required');
  }

  else if (empty($_POST["dob"]) || $_POST["dob"] >= date('Y-m-d')) {
    header('Location: ../View/Registration.php?dobErr=*Give your valid birthdate.');
  }

  else if (empty($_POST["password"]) || $_POST["password"] != $_POST["cpassword"]) {
    header('Location: ../View/Registration.php?cpasswordErr=*Password does not match.');
  }

  else if (empty($_POST["city"])) {
    header('Location: ../View/Registration.php?cityErr=*Give your city name.');
  }

  else if (empty($_POST["country"])) {
    header('Location: ../View/Registration.php?countryErr=*Give your country name.');
  }

  else if (empty($_POST["phone"])) {
    header('Location: ../View/Registration.php?phoneErr=*Type your phone number.');
  }
  else{
    if(addEditor($data))
    {
        header('Location: ../View/Login.php');
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