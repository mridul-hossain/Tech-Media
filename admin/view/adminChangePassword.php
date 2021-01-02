<?php
session_start();
if ($_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once '../model/model.php';
$passwordErr = "";
$re_PasswordErr = "";
$oldPass = showPassword($_SESSION['username']);
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/basicStyling.css">

    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../../HnF/Footer.css">
</head>

<body>
    <?php
    include 'header_admin.php';
    include 'sidebar_admin.php';
    ?>
    <div class="main">
        <form method="post" action="../controllers/updateAdminPassword.php">
            <div class="form-input">
                <label>Old Password</label>
                <br>
                <input type="text" name="password" value="<?php echo $oldPass['pass']; ?>" disabled>
            </div>
            <div class="form-input">
                <label>Enter Password</label>
                <br>
                <input type="password" name="password" placeholder="Password">
                <label class="text_error"><?php if (isset($_GET['passwordErr'])) echo $_GET['passwordErr']; ?></label>
            </div>
            <div class="form-input">
                <label>Re-type Password</label>
                <br>
                <input type="password" name="retypePassword" placeholder="Re-Type Password">
                <label class="text_error"><?php if (isset($_GET['re_passwordErr'])) echo $_GET['re_passwordErr']; ?></label>
            </div>
            <div>
                <input type="submit" value="Save Change" name="submit">
            </div>
        </form>
    </div>
    <?php
    include '../../HnF/Footer.php';
    ?>
</body>

</html>