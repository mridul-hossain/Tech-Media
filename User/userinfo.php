<?php
require_once('./dbconn.php');

$selectquery = "select * from user_info ";
$result = $conn->query($selectquery);
foreach ($result as $row) {
	echo "ID:" . $row['Name'] . "<br><br>";
}
