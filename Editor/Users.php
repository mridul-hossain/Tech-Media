<!DOCTYPE html>

<?php 
require_once "model.php";

$users = showAllUsers();

?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Profile.css">

</head>
<body>

	
			<?php include 'Header.php'; ?>
	        


	        <form>
	        	<div class="userBody">
	        		<?php include 'Sidebar.php'; ?>
	        	<div id="normalTable">
	        		<table class="userTable">
	        		<thead>
	        			<td class="tableDesign">Name</td>
	        			<td class="tableDesign">Phone</td>
	        			<td class="tableDesign">Email</td>
	        			<td class="tableDesign">Address</td>
	        			<td class="tableDesign">City</td>
	        			<td class="tableDesign">Country</td>
	        		</thead>
	        		<tbody>
	        			<?php foreach($users as $i=>$user): ?>
	        				<tr>
	        					<td class="tableDesign"><?php echo $user["name"] ?></td>
	        					<td class="tableDesign"><?php echo $user["phone"] ?></td>
	        					<td class="tableDesign"><?php echo $user["email"] ?></td>
	        					<td class="tableDesign"><?php echo $user["address"] ?></td>
	        					<td class="tableDesign"><?php echo $user["city"] ?></td>
	        					<td class="tableDesign"><?php echo $user["country"] ?></td>
	        				</tr>
	        			<?php endforeach; ?>
	        		</tbody>
	        	</table>
	        	</div>
	        	</div>
	        </form>


	        <?php include "Footer.php"; ?>
	

</body>
</html>