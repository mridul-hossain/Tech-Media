<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
     header("location:adminLogin.php");
}
require_once '../controllers/showUserInfo.php';
$users = fetchAllUsers();
?>

<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
     <link rel="stylesheet" type="text/css" href="css/header_admin.css">
     <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
     <link rel="stylesheet" type="text/css" href="../HnF/Footer.css">
     <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
     <script type="text/javascript" src="js/search.js"></script>

</head>

<body>
     <?php
     include 'header_admin.php';
     include 'sidebar_admin.html';
     ?>
     <form>
          <div class="main">
               <div class="search-box">
                    <input type="text" autocomplete="off" placeholder="Search user..." onkeyup="search(this.value)" />
               </div>
               <div id=table>
                    <table id=list>
                         <thead>
                              <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Username</th>
                                   <th>Password</th>
                                   <th>Phone</th>
                                   <th>Email</th>
                                   <th>Address</th>
                                   <th>City</th>
                                   <th>Country</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php foreach ($users as $i => $user) : ?>
                                   <tr>
                                        <td><?php echo $user["id"] ?></td>
                                        <td><?php echo $user["name"] ?></td>
                                        <td><?php echo $user["username"] ?></td>
                                        <td><?php echo $user["pass"] ?></td>
                                        <td><?php echo $user["phone"] ?></td>
                                        <td><?php echo $user["email"] ?></td>
                                        <td><?php echo $user["address"] ?></td>
                                        <td><?php echo $user["city"] ?></td>
                                        <td><?php echo $user["country"] ?></td>
                                   </tr>
                              <?php endforeach; ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </form>
     <?php
     include '../HnF/Footer.php';
     ?>
</body>

</html>