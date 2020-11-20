<?php
session_start();
/*if (!isset($_SESSION['proceed'])) {
    session_destroy();
    header("location:securityCode.php");
}*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../basicstyling.css">
    <link rel="stylesheet" type="text/css" href="adminLogin.css">
</head>

<body>
    <div class="container form-input" id="login_form_admin">
        <form method="post" action="../controllers/adminLoginValidation.php">
            <h2 class="center_align upper_txt">Adminstrator area</h2>

            <div class="credential_input">

                <label class="med_font">username</label>
                <br>
                <input type="text" name="username" placeholder="Enter Admin Username">
                <br>
                <label class="sml_font text_error"> <?php echo $usernameErr; ?></label>
                <br>
                <label class="med_font">password</label>
                <br>
                <input type="password" name="password" placeholder="Enter Admin Password">
                <br>
                <label class="sml_font text_error"> <?php echo $passwordErr; ?></label>
                <div class="btn btn_danger login_btn">
                    <input type="submit" name="login" value="login">
                </div>

            </div>

        </form>
    </div>
</body>

</html>