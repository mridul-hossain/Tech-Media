<?php
require_once '../model/model.php';

if (isset($_POST['hidePost'])) {
    $id = (int)$_POST['postId'];

    if (hidePost($id)) {
        header('Location: ../view/postManage.php');
    }
}


if (isset($_POST['hideComment'])) {
    $id = (int)$_POST['commentId'];

    if (hideComment($id)) {
        header('Location: ../view/postManage.php');
    }
}
