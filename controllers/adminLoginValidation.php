<?php
session_start();
$username = "";
$password = "";
$usernameErr = "";
$passwordErr = "";
$validateInfo = true;
$usernameFound = false;
$conn = new mysqli("localhost", "root", "", "project_db");

if (isset($_POST['login'])) {
    if (!empty($_POST['username'])) {
        $username = htmlspecialchars($_POST['username']);
        if ($conn->connect_error) {
            die("Connection failed: Server Down!!!" . $conn->connect_error);
        }
        $sql = "select username,password from admin where username = '" . $username . "';";
        $result = $conn->query($sql);
        if ($result->num_rows == 0) {
            $usernameErr = "username does not exsist";
            $validateInfo = false;
        } else {
            $usernameFound = true;
        }
    } else {
        $usernameErr = "Username can't be empty";
        $validateInfo = false;
    }

    if ($usernameFound) {
        if (!empty($_POST['password'])) {
            $password = htmlspecialchars($_POST['password']);
            $row = $result->fetch_assoc();
            if ($row['password'] != $_POST['password']) {
                $passwordErr = "wrong password !";
                $validateInfo = false;
            }
        } else {
            $passwordErr = "password can't be empty";
            $validateInfo = false;
        }
    }
    if ($validateInfo) {
        $_SESSION['adminUsername'] = $username;
        header("location:../admin/adminDashboard.php");
    }
}
