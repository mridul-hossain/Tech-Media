<?php
session_start();
$_SESSION['username'] = null;
$_SESSION['name'] = null;
$_SESSION = array();
session_destroy();
header("location: adminLogin.php");
