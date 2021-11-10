<?php
require_once '../model/model.php';
if (removeEditor($_GET['editor_id'])) {
    header('Location: ../view/editorsData.php');
}
