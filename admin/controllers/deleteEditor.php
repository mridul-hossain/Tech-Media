<?php
session_start();
require_once '../model/model.php';
$id = $_GET['id'];

if (removeEditor($id)) {
    $_GET['id'] = null;
    header('Location: ../view/editorsData.php');
}
