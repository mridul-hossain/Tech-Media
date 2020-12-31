<?php
session_start();
require_once '../model/model.php';

function fetchAllNotifications()
{
    return showAllNotifications();
}
