<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="adminDashboard.css">
</head>

<body>
     <?php
     include 'header_admin.html';
     include 'sidebar_admin.html';

     ?>

     <div class="main">
          <div class="welcome_text column" id="col-2">
               <h2 class="text_dark center_align">Welcome User <?php echo $_SESSION['username']; ?> </h2>
          </div>
     </div>

</body>

</html>