<?php
session_start();
if ($_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once '../controllers/showApprovedPosts.php';
$posts = fetchApprovedPosts();
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
    include 'header_admin.php';
    include 'sidebar_admin.php';
    ?>
    <div class="main">
        <?php foreach ($posts as $i => $post) : ?>
            <fieldset>
                <legend><?php echo $post["name"] ?></legend>
                <div>
                    <br>
                    <div style="font-size: large;"><?php echo $post["title"] ?></div>
                    <div style="font-style: italic; font-size: small;"><?php echo $post["time"] ?></div>
                    <div>
                        <?php $fileName =  "../../" . $post['image'];
                        if (file_exists($fileName) && $post['image'] != null) { ?>
                            <img src="<?php echo $fileName; ?>" height="40%" width="40%">
                        <?php } else {
                            echo "";
                        } ?>
                    </div>
                    <br>
                    <div style="font-family:Georgia, 'Times New Roman', Times, serif;"><?php echo $post["text"] ?></div>
                </div>
                <div>
                    <input type="submit" name="removeBtn" id="removeBtn" value="Remove this post">
                </div>
            </fieldset>
            <br>
        <?php endforeach; ?>
    </div>

    <?php
    include '../../HnF/Footer.php';
    ?>
</body>

</html>