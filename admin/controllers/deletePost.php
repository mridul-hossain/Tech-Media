<?php
session_start();
require_once '../model/model.php';

function Delete($id)
{
    return deletePost($id);
}
