<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once '../controllers/showNotification.php';
$users = fetchAllUsers();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../HnF/Footer.css">

</head>

<body>
    <?php
    include 'header_admin.php';
    include 'sidebar_admin.html';
    ?>

    <?php
    include '../HnF/Footer.php';
    ?>
</body>

</html>