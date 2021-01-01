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
    <link rel="stylesheet" type="text/css" href="../HnF/Footer.css">

</head>

<body>
    <?php
    include 'header_admin.php';
    include 'sidebar_admin.html';
    ?>
    <div class="main">
        <?php foreach ($posts as $i => $post) : ?>
            <fieldset>
                <div>
                    <div style="font-size: larger;font-weight: bold;"><?php echo $post["name"] ?></div><br>
                    <div style="font-size: large;"><?php echo $post["title"] ?></div>
                    <div style="font-style: italic;"><?php echo $post["time"] ?></div>
                    <div>
                        <?php $fileName =  "../../" . $post['image'];
                        if (file_exists($post['image'])) { ?>
                            <img src="<?php echo $fileName; ?>" class="profileImage" height="40%" width="40%">
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

        <?php endforeach; ?>
    </div>

    <?php
    include '../HnF/Footer.php';
    ?>
</body>

</html>