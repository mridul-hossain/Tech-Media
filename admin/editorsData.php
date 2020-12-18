<?php
session_start();
if ($_SESSION['username'] == "" || $_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
include("../dbConnect.php");
$err = "";
try {
    $connect = db_conn();
    if (isset($_POST["submit"])) {
        $sql = "SELECT * FROM editor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th></tr>";
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . " " . $row["lastname"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        $connect->close();
    }
} catch (PDOException $error) {
    echo $error->getMessage();
}
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
        <form>

        </form>
    </div>
    <?php
    include '../HnF/Footer.php';
    ?>
</body>

</html>