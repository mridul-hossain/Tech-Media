<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <div style="position: relative; top: -30px;"><img src="../logo.png" style="height: 200px; width: 200px"></div>
    <label style="position: relative; top: -90px; padding-left: 80%;">Logged in as <?php echo $_SESSION['username']; ?> | </label>
    <a href="adminDashboard.php" style="position: relative; top: -90px;">Dashboard</a>
    <label style="position: relative; top: -90px;">|</label>
    <a href="adminLogout.php" style="position: relative; top: -90px;">Logout</a>
    <div style="width: 100%; border-top: 2px solid gray;position: relative; top: -85px;"></div>



</body>

</html>