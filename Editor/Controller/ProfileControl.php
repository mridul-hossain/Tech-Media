<?php

$data['nameErr'] = '';


function fetchInfo($data)
{
	require_once 'Model_.php';
	return showInfo($data);
}

function validation()
{
	require_once '../Model_.php';
session_start();


if(isset($_POST["save"])) {

  
  $data['name'] = $_POST['name'];
  $data['phone'] = $_POST['phone'];
  $data['email'] = $_POST['email'];
  $data['address'] = $_POST['address'];
  $data['city'] = $_POST['city'];
  $data['country'] = $_POST['country'];
  $data['gender'] = $_POST['gender'];
  $data['dob'] = $_POST['dob'];
  $data['username'] = $_SESSION['username'];
  

  $x=$_POST["name"];
  if (empty($x) || !preg_match("/^[a-zA-Z\s]+$/", $x) || str_word_count($x)<2) {
    $data['nameErr'] = "Give a valid name.";
    header('Location: ../Profile.php');
  }

  if(editInfo($data))
  {
    header('Location: ../Profile.php');
  }


}

$this->Controller('../Profile', $data);
}

?>