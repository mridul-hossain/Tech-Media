<?php
require_once "../controllers/showPendingPosts.php";

$postData = fetchPendingPosts();

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../../HnF/Footer.css">
</head>

<body>
    <?php
    include 'header_admin.php';
    include 'sidebar_admin.php';
    ?>

    <form method="post" action="">
        <div class="dashboardDiv">
            <?php include "Sidebar.php"; ?>
            <div class="dashboardDivPosts">
                <?php foreach ($postData as $i => $data) : ?>
                    <div>
                        <div class="postMainDiv">

                            <label><?php echo $data['name'] ?>'s post need approval.</label>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </form>
    <?php include "Footer.php"; ?>

</body>

</html>