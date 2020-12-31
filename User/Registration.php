<!DOCTYPE HTML>  
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<style>
.error {color: #FF0000;}
</style>
</head>
<body>  


	<div style="position: relative; padding-left: 30%">
<fieldset style="width:50%">
<legend>Registration</legend> 
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr =$commentErr = $conpassErr= $websiteErr =$addErr ="";
$name = $email = $gender = $comment =$conpass= $website = $add="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["add"])) {
    $addErr = "Address is required";
  } else {
    $add = test_input($_POST["add"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$add)) {
      $addErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/^[a-zA-Z-' ]*$/",$website)) {
      $websiteErr = "Invalid username";
    }
  }
  ///^[a-z0-9A-Z-.{8,}' ]*$/

  if (empty($_POST["comment"])) {
    $commentErr = "Name is required";
  } else {
	   $comment = test_input($_POST["comment"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-z0-9A-Z-']*$/",$comment)|| strlen($comment)<=8) {
     $commentErr = "Only letters and number allowed and minimum 8 character";
    }
	  
    
  }
  if (empty($_POST["comment"]) || $_POST["comment"] != $_POST["conpass"]) {
    $conpassErr = " Password doesn't match.";
  } else {
    $comment = test_input($_POST["conpass"]);
  }
  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Registration</h2>

<form method="post" action="controller/AddUser.php"> 
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  User Name: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Password:  <input type="text" name="comment" value="<?php echo $comment;?>">
  <span class="error"><?php echo $commentErr;?></span>
  <br>
  Confirm Password:  <input type="text" name="conpass" value="<?php echo $conpass;?>">
  <span class="error"><?php echo $conpassErr;?></span>
  <br><br>
  Address:  <input type="text" name="add" value="<?php echo $add;?>">
  <span class="error"><?php echo $addErr;?></span>
  <br><br>
  
  
<fieldset style="width:50%">
<legend>Gender:</legend> 
  
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error"><?php echo $genderErr;?></span>
  <br><br>
 </fieldset>
  <input type="submit" name="submit" value="Submit"> 
</form>



 </fieldset>
 </div>

 <br>

</body>
</html>