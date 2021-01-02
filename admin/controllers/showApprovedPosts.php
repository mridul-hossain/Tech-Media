<?php
session_start();
require_once '../model/model.php';

function fetchApprovedPosts()
{
    return showApprovedPosts();
}
function fetchAllComments()
{
    return showAllComments();
}
