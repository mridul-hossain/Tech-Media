<?php
session_start();
require_once '../model/model.php';

function Approve($id)
{
    return approvePost($id);
}
