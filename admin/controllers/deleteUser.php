<?php
session_start();
require_once '../model/model.php';
if (removeUser($_GET['$id'])) {
    header('Location: ../view/usersData.php');
}
