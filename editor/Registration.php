<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
			.names{
				width: 100px;
				text-align: right;
				margin: auto;
				float: left;
			}
			.items{
				width: 500px;
				margin-left: 105px;
				text-align: left;
				vertical-align: top;
			}
			.line{
				width: 400px;
				border-top: 2px solid black;
			}
	</style>
</head>
<body>



	<?php

	$nameErr = $emailErr = $genderErr = $usernameErr = $passwordErr = $dobErr = $cpasswordErr = $cityErr = $countryErr = $phoneErr ="";
	$name = $email = $gender = $username = $password = $dob = $cpassword =  $city =  $country =  $phone = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$x=$_POST["name"];
  if (empty($x) || !preg_match("/^[a-zA-Z\s]+$/", $x) || str_word_count($x)<2) {
    $nameErr = "* Give a valid name.";
  } else {
    $name = test_input($_POST["name"]);
  }
  $e=$_POST["email"];

  if (empty($e)) {
    $emailErr = "* Type a valid Email.";
  } else {
    $email = test_input($_POST["email"]);
  }

  $c=$_POST["username"];

  if (empty($c)) {
    $usernameErr = "* Please select give a username!";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "* Please give a password.";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "* Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["dob"]) || date('m/d/yy') == $_POST["dob"]) {
    $dobErr = "* Give your valid birthdate.";
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["password"]) || $_POST["password"] != $_POST["cpassword"]) {
    $cpasswordErr = "* Password doesn't match.";
  } else {
    $password = test_input($_POST["cpassword"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = "* Give your city name.";
  } else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["country"])) {
    $countryErr = "* Give your country name.";
  } else {
    $country = test_input($_POST["country"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "* Type your phone number.";
  } else {
    $phone = test_input($_POST["phone"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	?>



	<?php include 'Header.php'; ?>




	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">



		<div style="position: relative; padding-left: 30%">
			<fieldset style="width: 30%">
				<legend>REGISTRATION</legend>
				<div class="names">
					<label>Name: </label><br><br>
					<label style="margin-bottom: 2px">Email: </label><br><br>
					<label>Gender: </label><br><br>
					<label>User Name: </label><br><br>
					<label>Password: </label><br><br>
					<label>Confirm Password: </label><br><br>
					<label>Date of Birth: </label><br><br>
					<label>City: </label><br><br>
					<label>Country: </label><br><br>
					<label>Phone: </label><br><br>
				</div>
				<div class="items">
					<input type="text" name="name"><span style="color: red"> <?php echo $nameErr;?></span><br><br>
					<input type="email" name="email" style="position: relative; bottom: 3px"><span style="color: red"> <?php echo $emailErr;?></span><br><br>
					<input type="radio" id="male" name="gender" value="Male" style="position: relative; bottom: 6px">
					<label for="male" style="position: relative; bottom: 6px">Male</label>
					<input type="radio" id="female" name="gender" value="Female" style="position: relative; bottom: 6px">
					<label for="female" style="position: relative; bottom: 6px">Female</label>
					<input type="radio" id="other" name="gender" value="Other" style="position: relative; bottom: 6px">
					<label for="other" style="position: relative; bottom: 6px">Other</label><span style="color: red; position: relative; bottom: 6px"> <?php echo $genderErr;?></span><br><br>
					<input type="text" name="username" style="position: relative; bottom: 8px"><span style="color: red; position: relative; bottom: 8px"> <?php echo $usernameErr;?></span><br><br>
					<input type="text" name="password" style="position: relative; bottom: 8px"><span style="color: red; position: relative; bottom: 8px"> <?php echo $passwordErr;?></span><br><br>
					<input type="text" name="cpassword" style="position: relative; bottom: 8px"><span style="color: red; position: relative; bottom: 8px"> <?php echo $cpasswordErr;?></span><br><br>





					<div style="position: relative; bottom: 2px">
						<input type="date" name="dob" style="float: left;">
					</div><span style="color: red; position: relative; bottom: 2px"> <?php echo $dobErr;?></span>

				</div><br><br>
				<input type="text" name="city" style="position: relative; bottom: 1px"><span style="color: red; position: relative; bottom: 1px"> <?php echo $cityErr;?></span><br><br>
				<input type="text" name="country" style="position: relative; bottom: 1px"><span style="color: red; position: relative; bottom: 1px"> <?php echo $countryErr;?></span><br><br>
				<input type="text" name="phone" style="position: relative; bottom: 1px"><span style="color: red; position: relative; bottom: 1px"> <?php echo $phoneErr;?></span><br><br>
				<div class="line"></div><br>
				<input type="submit" name="Submit" style="position: relative; float: left;">
			</fieldset>
		</div>
		


	</form>






	



			<?php include 'Footer.php'; ?>

</body>
</html>