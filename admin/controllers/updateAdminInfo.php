<?php
if (isset($_POST["save"])) {
    session_start();
    require_once '../model/model.php';

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
    $target_dir = "../view/images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;

    $check = getimagesize($_FILES["image"]["tmp_name"]);

    if (empty($_POST["name"]) || !preg_match("/^[a-zA-Z\s]+$/", $_POST["name"]) || str_word_count($_POST["name"]) < 2) {
        header('Location: ../view/adminProfile.php?nameErr=*Give a valid name.');
    } else if (empty($_POST["email"])) {
        header('Location: ../view/adminProfile.php?emailErr=*Type a valid Email.');
    } else if (empty($_POST["gender"])) {
        header('Location: ../view/adminProfile.php?genderErr=*Gender is required');
    } else if (empty($_POST["dob"]) || $_POST["dob"] >= date('Y-m-d')) {
        header('Location: ../view/adminProfile.php?dobErr=*Give your valid birthdate.');
    } else if (empty($_POST["city"])) {
        header('Location: ../view/adminProfile.php?cityErr=*Give your city name.');
    } else if (empty($_POST["country"])) {
        header('Location: ../view/adminProfile.php?countryErr=*Give your country name.');
    } else if (empty($_POST["phone"])) {
        header('Location: ../view/adminProfile.php?phoneErr=*Type your phone number.');
    } else if (empty($_POST["address"])) {
        header('Location: ../view/adminProfile.php?addressErr=*Give your Address.');
    } else if ($check == false) {
        $uploadOk = 0;
        header('Location: ../view/adminProfile.php?photoErr=*Image is not uploaded.');
    } else {
        $uploadOk = 1;
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        if (editInfo($data)) {
            header('Location: ../view/adminProfile.php');
        }
    }
}
