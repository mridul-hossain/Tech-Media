<?php



if(isset($_POST["save"])) {

    session_start();

require_once '../Model_.php';
  
  $data['name'] = $_POST['name'];
  $data['phone'] = $_POST['phone'];
  $data['email'] = $_POST['email'];
  $data['address'] = $_POST['address'];
  $data['city'] = $_POST['city'];
  $data['country'] = $_POST['country'];
  $data['gender'] = $_POST['gender'];
  $data['dob'] = $_POST['dob'];
  $data['username'] = $_SESSION['username'];
  $data['image'] = basename($_FILES["image"]["name"]);

  // $x=$_POST["name"];
  // if (empty($x) || !preg_match("/^[a-zA-Z\s]+$/", $x) || str_word_count($x)<2) {

  //   header('Location: ../Profile.php?nameErr=Give a valid Name!');
  // }
  // else{
  //   if(editInfo($data))
  //   {
  //     header('Location: ../Profile.php');
  //   }
  // }

  $target_dir = "../Pictures/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
      if(editInfo($data))
      {
        header('Location: ../Profile.php');
      }
    }

  

}


?>