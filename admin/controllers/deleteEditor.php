<?php
session_start();
require_once '../model/model.php';
if (removeEditor($_GET['$id'])) {
    header('Location: ../view/editorsData.php');    
}
