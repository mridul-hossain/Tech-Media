<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		th{
			background-color: #0066cc;
			color: white;
			padding: 5px;
		}
	</style>
</head>
<body>

	<?php
	include 'Header_Editor.php';
	?>


	<?php
	include 'Index.php';
	?>

	<form style="position: relative; left: 20%;">
		<table>
		<thead>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>City</th>
			<th>Country</th>
			<th>Date of Birth</th>
			<th>Gender</th>
		</thead>
		<tbody>
			<tr>
				<td>Mr. Cat</td>
				<td>mr.cat@catmail.com</td>
				<td>017*******</td>
				<td>Cat City</td>
				<td>Cat Kingdom</td>
				<td>29.02.1998</td>
				<td>Male</td>
				<td><a href="#">Edit</a></td>
				<td><a href="#">Delete</a></td>
			</tr>
			<tr>
				<td>Mr. Scooby</td>
				<td>mr.cat@catmail.com</td>
				<td>017*******</td>
				<td>Cat City</td>
				<td>Cat Kingdom</td>
				<td>29.02.1998</td>
				<td>Male</td>
				<td><a href="#">Edit</a></td>
				<td><a href="#">Delete</a></td>
			</tr>
			<tr>
				<td>Mr. Cat</td>
				<td>mr.cat@catmail.com</td>
				<td>017*******</td>
				<td>Cat City</td>
				<td>Cat Kingdom</td>
				<td>29.02.1998</td>
				<td>Male</td>
				<td><a href="#">Edit</a></td>
				<td><a href="#">Delete</a></td>
			</tr>
		</tbody>
	</table>
	</form>


	<?php include 'Footer.php'?>

</body>
</html>