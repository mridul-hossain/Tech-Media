<?php
if (isset($_POST["submit"])) {
    session_start();
    require_once '../model/model.php';

    $data['pass'] = $_POST['password'];
    if (!preg_match("^(?=.*\d).{4,8}$", $_POST["password"])) {
        header('Location: ../view/adminChangePassword.php?passwordErr=*Password must be between 4 and 8 digits long and include at least one numeric digit..');
    }
    if ($_POST["password"] !== $_POST["retypePassword"]) {
        header('Location: ../view/adminChangePassword.php?re_passwordErr=*Retype password did not match!');
    } else {
        if (editPassword($data, $_SESSION['username'])) {
            header('Location: ../view/adminChangePassword.php?msg="password changed successfully !!!"');
        }
    }
}
