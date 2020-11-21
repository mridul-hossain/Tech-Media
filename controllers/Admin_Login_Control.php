<?php

if (isset($_POST['submit']) && $_POST['uname'] == $_POST['name'] && $_POST['pass'] == $_POST['password']) {
    require_once '/var/www/html/Tech-Media/admin/adminDashboard.php';
} else {
    echo 'Please ';
    echo $_POST['submit'] . " " . $_POST['uname'] . " " . $_POST['name'] . " " . $_POST['pass'] . " " . $_POST['password'];
}
