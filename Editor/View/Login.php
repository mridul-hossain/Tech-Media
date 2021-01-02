<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="Prof.css">
  <script type="text/javascript" src="Profile.js"></script>
</head>
<body>
  <form action="../Controller/Login_Control.php" method="post">
    <div id="main" style="position: relative; padding-left: 10%">
      <form>
        <h1 id="h">Login</h1>
        <label><span style="color: red;"><?php if(isset($_GET['mesaage'])) echo $_GET['mesaage']; ?></span></label><br>
        <i class="fa fa-user icon"></i>
        <input type="text" id="name" name="name" placeholder="Enter your name" onblur="nameValidation()"><br><br>
        <label class="errMessage" id="nameErr1">Name cannot be empty.</label>
        <i class="fa fa-lock icon"></i>
        <input type="password" id="password" name="password" placeholder="Enter your password" onblur="emailValidation()"><br>
        <label class="errMessage1" id="emailErr"> Email cannot be empty.</label>
        <br>
        <label class="sml_font text_error"> </label>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember Me</label><br><br>
        <input type="submit" id="bt" name="submit" value="Sign in">
        <p><a href="Registration.php">Forget Password?</a></p>
        <br>
      </form>
    </div>
    <br>
    <br>
  </form>
</body>
</html>