<?php
session_start();
if ($_SESSION["usertype"] != "admin") {
    header("location:adminLogin.php");
}
require_once '../controllers/showEditorInfo.php';
$editors = fetchAllEditors();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../../HnF/Footer.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.search-box input[type="text"]').on("keyup input", function() {
                /* Get input value on change */
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if (inputVal.length) {
                    $.get("searchEditor.php", {
                        term: inputVal
                    }).done(function(data) {
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else {
                    resultDropdown.empty();
                }
            });

            // Set search input value on click of result item
            $(document).on("click", ".result p", function() {
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
</head>

<body>
    <?php
    include 'header_admin.php';
    include 'sidebar_admin.html';
    ?>

    <form>
        <div class="main">
            <div class="search-box">
                <input type="text" autocomplete="off" placeholder="Search user..." />
                <div class="result">

                    <table id="list">
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
                            <?php foreach ($editors as $i => $editor) : ?>
                                <tr>
                                    <td><?php echo $editor["id"] ?></td>
                                    <td><?php echo $editor["name"] ?></td>
                                    <td><?php echo $editor["username"] ?></td>
                                    <td><?php echo $editor["pass"] ?></td>
                                    <td><?php echo $editor["phone"] ?></td>
                                    <td><?php echo $editor["email"] ?></td>
                                    <td><?php echo $editor["address"] ?></td>
                                    <td><?php echo $editor["city"] ?></td>
                                    <td><?php echo $editor["country"] ?></td>
                                    <td><a href="editEditor.php?id=<?php echo $editor['id'] ?>">Edit</a>&nbsp<a href="../controllers/deleteEditor.php?id=<?php echo $editor['id'] ?>">Delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </form>

    <?php
    include '../../HnF/Footer.php';
    ?>
</body>

</html>