<?php
session_start();
$_SESSION['username'] = 'Mariam';
$_SESSION['password'] = '5555';
?>
<!DOCTYPE HTML>
<html>

<body>
	<?php
	include 'Top.php';
	?>
	<form action="controller/profilrControl.php" method="post">
		<div style="position: relative; padding-left: 30%">
			<fieldset style="width:50%" align="center">
				<legend>Login</legend>
				<form>
					Name: <input type="text" name="name"><br>
					Password: <input type="text" name="password"><br>
					<hr>
					<input type="submit" name="submit">
					<p><a href="User_Registration.php">Forget Password?</a></p>
					<input type="hidden" name="uname" value="<?php echo $_SESSION['username'] ?>">
					<input type="hidden" name="pass" value="<?php echo $_SESSION['password'] ?>">
				</form>
			</fieldset>
		</div>
	</form>
	<br>
	<br>

	<?php
	include 'Abid.php';
	?>

</body>

</html>