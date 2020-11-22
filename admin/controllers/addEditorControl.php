<?php
require_once '../model.php';


if (isset($_POST['createStudent'])) {
    $data['name'] = $_POST['name'];
    $data['username'] = $_POST['uname'];
    $data['email'] = $_POST['email'];
    $data['phone'] = $_POST['phone'];
    $data['address'] = $_POST['address'];
    $data['city'] = $_POST['city'];
    $data['country'] = $_POST['country'];
    $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
    $data['image'] = basename($_FILES["image"]["name"]);

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    if (addStudent($data)) {
        echo 'Successfully added!!';
    }
} else {
    echo 'You are not allowed to access this page.';
}
