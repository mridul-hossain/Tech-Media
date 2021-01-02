<?php
require_once '../model/model.php';
if (removeUser($id)) {
    header('Location: ../view/usersData.php');
}
