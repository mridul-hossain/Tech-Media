<?php
session_start();
require_once 'controllers/studentInfo.php';
$profile = fetchProfile($_GET['id']);

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

    <table>
        <tr>
            <td>

            </td>
            <td></td>
            <td>
                <?php echo $profile['Surname'] ?>
            </td>
        </tr>
    </table>


    <?php
    include '../footer.php';
    ?>

</body>


</html>