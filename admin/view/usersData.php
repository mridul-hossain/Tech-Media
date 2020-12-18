<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
     header("location:adminLogin.php");
}
require_once 'controllers/userInfo.php';

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
     <style>
          #list {
               font-family: Arial, Helvetica, sans-serif;
               border-collapse: collapse;
               width: 100%;
          }

          #list td,
          #list th {
               border: 1px solid #ddd;
               padding: 8px;
          }

          #list tr:nth-child(even) {
               background-color: #f2f2f2;
          }

          #list tr:hover {
               background-color: #ddd;
          }

          #list th {
               padding-top: 12px;
               padding-bottom: 12px;
               text-align: left;
               background-color: dodgerblue;
               color: white;
          }
     </style>
</head>

<body>
     <?php
     include 'header_admin.html';
     include 'sidebar_admin.html';
     ?>


     <div class="main">
          <table>
               <thead>
                    <tr>
                         <th>Name</th>
                         <th>Username</th>
                         <th>Password</th>
                         <th>Image</th>
                         <th>Action</th>
                    </tr>
               </thead>
               <tbody>
                    <?php foreach ($users as $i => $user) : ?>
                         <tr>
                              <td><a href="showEditor.php?id=<?php echo $user['ID'] ?>"><?php echo $user['Name'] ?></a></td>
                              <td><?php echo $user['Username'] ?></td>
                              <td><?php echo $user['Password'] ?></td>
                              <td><img width="100px" src="uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['Name'] ?>"></td>
                              <td><a href="editStudent.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
                         </tr>
                    <?php endforeach; ?>
               </tbody>


          </table>
     </div>
     <?php
     include '../HnF/Footer.php';
     ?>
</body>

</html>