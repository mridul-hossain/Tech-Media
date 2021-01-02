<?php
session_start();
if ($_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once '../controllers/showApprovedPosts.php';
$posts = fetchApprovedPosts();
$commentData = fetchAllComments();

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
                <div class="postCommentSeperator"></div>
                <?php foreach ($commentData as $i => $cData) : if ($cData['post_id'] == $data['id']) { ?>
                        <div class="postComment">
                            <div class="postHeaderContent">
                                <div>
                                    <?php $fileName = "../Pictures/" . $cData['image'];
                                    if (file_exists($fileName)) { ?>
                                        <td><img src="<?php echo $fileName; ?>" class="postCommentUserImage"></td>
                                    <?php } else { ?>
                                        <td><img src="../Pictures/user.png" class="postCommentUserImage"></td>
                                    <?php } ?>
                                </div>
                                <div class="postHeaderText">
                                    <label class="postCommentName"><?php echo $cData["name"] ?></label>
                                    <label class="postCommentTime"><?php echo $cData["time"] ?></label>
                                </div>
                            </div>
                            <div>
                                <p><?php echo $cData["text"] ?></p>
                            </div>
                            <input type="hidden" name="commentId" value="<?php echo $cData['id'] ?>">
                            <input type="submit" name="hideComment" value="Hide Comment" class="commentHideButton">
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
                <input type="hidden" name="postId" value="<?php echo $data['id'] ?>">
                <div class="commentDivHideButton">
                    <input type="submit" name="hidePost" value="Hide Post" class="postHideButton">
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