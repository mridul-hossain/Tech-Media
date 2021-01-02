<?php
require_once '../model/model.php';
if (removeEditor($id)) {
    header('Location: ../view/editorsData.php');
}
