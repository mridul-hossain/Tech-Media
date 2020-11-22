<?php
session_start();
if (isset($_POST['submit']) && $_POST['uname'] == $_POST['name'] && $_POST['pass'] == $_POST['password']) {
    header("location: ../admin/adminDashboard.php");
}
