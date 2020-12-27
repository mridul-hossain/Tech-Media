<!DOCTYPE html>
<?php
session_start();

require_once 'Controller/Profile_Control.php';


$_SESSION['username'] = 'mridul';

$info = fetchInfo($_SESSION['username']);
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Profile.css">

	<script type="text/javascript" src="Profile.js"></script>

</head>
<body>
	<?php include 'editorHeader.php'; ?>
	<form method="post" action="Controller/ProfileInfo_Control.php">
		<div class="contentProfile">
			<?php include "Sidebar.php"; ?>
			<div class="divFieldset">
				<fieldset class="fieldsetProfile">
					<div>
						<h3 class="profileTableHead">Personal Information</h3> 
						<div class="profileImageDiv">
							<table>
								<tr>
									<td>
										<?php $fileName="Pictures/".$_SESSION['username'].".png"; if(file_exists($fileName)){ ?>
											<img src="<?php echo $fileName; ?>" class="profileImage">
										<?php }else{?>
											<img src="user.png" class="profileImage">
										<?php }?> 
									</td>
								</tr>
								<tr><td><input type="file" name="photo"></td></tr>
							</table>
						</div>
					</div>
					<div>
						<table class="profiletable">
							<tr><td><label class="profileTableLabel">Name</label></td></tr>
							<tr><td><input type="text" name="name" class="profileTableInput" id="name" onblur="nameValidation()" value="<?php echo $info['name']?>"></td></tr>
							<tr><td><label class="errMessage" id="nameErr1">Name cannot be empty.</label></td></tr>
							<tr><td><label><?php if(isset($_GET['nameErr'])) echo $_GET['nameErr']; ?></label></td></tr>
							<tr><td class="profileTableLabel"><label>Phone</label></td></tr>
							<tr><td><input type="text" name="phone" class="profileTableInput" id="phone" onblur="phoneValidation()" value="<?php echo $info['phone']?>"></td></tr>
							<tr><td><label class="errMessage" id="phoneErr">Phone cannot be empty.</label></td></tr>
							<tr><td class="profileTableLabel"><label>Email</label></td></tr>
							<tr><td><input type="text" name="email" class="profileTableInput" id="email" onblur="emailValidation()" value="<?php echo $info['email']?>"></td></tr>
							<tr><td><label class="errMessage" id="emailErr">Email cannot be empty.</label></td></tr>
							<tr><td class="profileTableLabel"><label>Address</label></td></tr>
							<tr><td><input type="text" name="address" id="address" class="profileTableInput" onblur="addressValidation()" value="<?php echo $info['address']?>"></td></tr>
							<tr><td><label class="errMessage" id="addressErr">Address cannot be empty.</label></td></tr>
							<tr><td class="profileTableLabel"><label>City</label></td></tr>
							<tr><td><input type="text" name="city" class="profileTableInput" id="city" onblur="cityValidation()" value="<?php echo $info['city']?>"></td></tr>
							<tr><td><label class="errMessage" id="cityErr">City cannot be empty.</label></td></tr>
							<tr><td class="profileTableLabel"><label>Country</label></td></tr>
							<tr><td><input type="text" name="country" class="profileTableInput" id="country" onblur="countryValidation()" value="<?php echo $info['country']?>"></td></tr>
							<tr><td><label class="errMessage" id="countryErr">Country cannot be empty.</label></td></tr>
							<tr><td class="profileTableLabel"><label>Date of Birth</label></td></tr>
							<tr><td><input type="date" name="dob" class="profileTableInput" value="<?php echo $info['dob']?>"></td></tr>
							<tr><td class="profileTableLabel"><label>Gender</label></td></tr>
							<tr>
								<td>
									<input type="radio" name="gender" id="male" value="Male" <?php if($info['gender'] == 'Male') echo 'checked' ?>>
									<label for="male">Male</label>
									<input type="radio" name="gender" id="female" value="Female" <?php if($info['gender'] == 'Female') echo 'checked' ?>>
									<label for="female">Female</label>
								</td>
							</tr>
							<tr>
								<td class="profileTableButtonDiv">
									<input type="submit" name="save" value="Save" class="profileTableButtonSave">
									<input type="submit" name="delete" value="Delete" class="profileTableButtonDelete">
								</td>
							</tr>
						</table>
					</div>
				</fieldset>
			</div>
		</div>
	</form>
	<?php include "Footer.php"; ?>
	

</body>
</html>