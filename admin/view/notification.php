<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once '../controllers/showNotification.php';
$notifications = fetchAllNotifications();
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
    <div class="main">
        <?php foreach ($notifications as $i => $notification) : ?>
            <fieldset>
                <div>
                    <div style="font-size: large;"><?php echo $notification["title"] ?></div>
                    <div style="font-style: italic;"><?php echo $notification["time"] ?></div>
                    <div><?php echo $notification["image"] ?></div>
                    <br>
                    <div style="font-family:Georgia, 'Times New Roman', Times, serif;"><?php echo $notification["text"] ?></div>
                </div>
            </fieldset>

        <?php endforeach; ?>
    </div>

    <?php
    include '../HnF/Footer.php';
    ?>
</body>

</html>