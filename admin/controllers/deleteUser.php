<?php
require_once '../model/model.php';
if (removeUser($_GET['user_id'])) {
    header('Location: ../view/usersData.php');
}
