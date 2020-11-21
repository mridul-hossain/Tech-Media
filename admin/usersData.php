<?php
session_start();
/* if(!isset($_SESSION['adminUsername']))
      {
          session_destroy();
          header("location:securityCode.php");
      }
      $adminUsername=$_SESSION['adminUsername'];*/
?>




<!DOCTYPE html>
<html lang="en">

<head>
     <title>Users data</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="adminDashboard.css">
</head>

<body>

     <div class="header">
          <div style=" position: relative; top: -30px;"><img src="../logo.png" style="height: 200px; width: 200px"></div>
          <h3>World's largest social media for tech geeks</h3>
          <label style=";">Logged in as <?php echo $_SESSION['username']; ?> | </label>
          <a href="adminDashboard.php" ">Dashboard</a>
          <label >|</label>
               <a href=" adminLogout.php">Logout</a>
     </div>

     <div class="content">
          <h1>Content</h1>
          <p>Some content blablabla, some content blablabla.</p>
          <p>Some content blablabla, some content blablabla.</p>
          <p>Some content blablabla, some content blablabla.</p>
     </div>

</body>

</html>