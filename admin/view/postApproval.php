<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once '../controllers/showPendingPosts.php';
require_once '../controllers/approvePost.php';
require_once '../controllers/deletePost.php';

$pendings = fetchPendingPosts();

if (array_key_exists('approveBtn', $_POST)) {
    button1();
} else if (array_key_exists('declineBtn', $_POST)) {
    button2();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../../HnF/Footer.css">
    <style>
        fieldset {
            background-color: #eeeeee;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
            font-size: large;
        }
    </style>
</head>

<body>
    <?php
    include 'sidebar_admin.html';
    include 'header_admin.php';
    ?>
    <div class="main">
        <?php foreach ($pendings as $i => $pending) : ?>
            <form method="post">
                <fieldset>
                    <legend><?php echo $pending["name"] ?></legend>
                    <div>
                        <br>
                        <div style="font-size: large;"><?php echo $pending["title"] ?></div>
                        <div style="font-style: italic;"><?php echo $pending["time"] ?></div>
                        <div>
                            <?php $fileName =  "../../" . $pending['image'];
                            if (file_exists($fileName) && $pending['image'] != null) { ?>
                                <img src="<?php echo $fileName; ?>" class="profileImage" height="40%" width="40%">
                            <?php } else {
                                echo "";
                            } ?>
                        </div>
                        <br>
                        <div style="font-family:Georgia, 'Times New Roman', Times, serif;"><?php echo $pending["text"] ?></div>
                    </div>
                    <div>
                        <input type="submit" name="approveBtn" id="approveBtn" value="Approve">
                        <input type="submit" name="declineBtn" id="declineBtn" value="Decline">
                    </div>
                </fieldset>
            </form>

            <br>
        <?php endforeach; ?>
    </div>

    <?php
    include '../../HnF/Footer.php';
    ?>
</body>

</html>