<?php
session_start();
require_once '../model/model.php';

function fetchPendingPosts()
{
    return showPendingPosts();
}
