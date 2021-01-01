<?php
session_start();
require_once '../model/model.php';

function updatePassword($id,$data)
{
    return editPassword($id,$data);
}
