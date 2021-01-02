<?php
session_start();
require_once '../model/model.php';
$id = $_GET['id'];

if (removeUser($id)) {
    $_GET['id'] = null;
    header('Location: ../view/usersData.php');
}
