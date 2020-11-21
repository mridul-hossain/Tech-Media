<?php

if (isset($_POST['submit']) && $_POST['uname'] == $_POST['name'] && $_POST['pass'] == $_POST['password']) {
	header("location: ../editor/Dashboard.php");
}
