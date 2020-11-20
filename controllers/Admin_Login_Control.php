<?php

if (isset($_POST['submit']) && $_POST['uname'] == $_POST['name'] && $_POST['pass'] == $_POST['password']) {
    require_once '../admin/adminDashboard.php';
} else {
    echo 'Please';
}
