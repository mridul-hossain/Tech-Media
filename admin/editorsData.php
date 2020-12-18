<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once 'controllers/editorInfo.php';

$editors = fetchAllEditors();

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../HnF/Footer.css">
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
                <?php foreach ($editors as $i => $editor) : ?>
                    <tr>
                        <td><a href="showEditor.php?id=<?php echo $editor['ID'] ?>"><?php echo $editor['Name'] ?></a></td>
                        <td><?php echo $editor['Username'] ?></td>
                        <td><?php echo $editor['Password'] ?></td>
                        <td><img width="100px" src="uploads/<?php echo $editor['image'] ?>" alt="<?php echo $editor['Name'] ?>"></td>
                        <td><a href="editStudent.php?id=<?php echo $editor['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $editor['ID'] ?>">Delete</a></td>
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