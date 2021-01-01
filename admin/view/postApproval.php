<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once '../controllers/showPendingPosts.php';
require_once '../controllers/approvePost.php';
require_once '../controllers/deletePost.php';

$pendings = fetchPendingPosts();

if (isset($_POST['approveBtn'])) {
    $id = (int) $_POST['post_id']; // <-- gotta protect from sql injection.
    Approve($id);
}

if (isset($_POST['declineBtn'])) {
    $id = (int) $_POST['post_id']; // <-- gotta protect from sql injection.
    Delete($id);
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
            border-radius: 5px;
            margin-left: 5px;
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
                        <div style="font-style: italic;font-size: small;"><?php echo $pending["time"] ?></div>
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
                        <input type="hidden" name="post_id" value="<?php echo $pending["id"]; ?>">
                        <input type="submit" name="approveBtn" id="approveBtn" value="Approve">
                        <input type="submit" name="declineBtn" id="declineBtn" value="Decline">
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