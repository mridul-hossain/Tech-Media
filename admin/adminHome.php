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
        <h2>Total Users : <span style="color: dodgerblue;">125</span></h2>
        <h2>Total Editors : <span style="color: dodgerblue;">5</span></h2>
        <h2>Total Visitors this week : <span style="color: dodgerblue;">301</span></h2>
        <h2>Total posts this week : <span style="color: dodgerblue;">22</span></h2>
    </div>

    <?php
    include '../footer.php';
    ?>

</body>


</html>