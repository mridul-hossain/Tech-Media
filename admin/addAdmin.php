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
        <form action="controller/createUser.php" method="POST" enctype="multipart/form-data" ">
            <fieldset>
                <legend>Add Admin</legend>
                <label for=" name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="phone">Phone:</label><br>
            <input type="text" id="phone" name="phone"><br>
            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address"><br>
            <label for="city">City:</label><br>
            <select name="city" id="city">
                <option value="empty">Select your city:</option>
                <option value="dhaka">Dhaka</option>
            </select><br>
            <label for="country">Select your country:</label><br>
            <select name="country" id="country">
                <option value="empty">Select your country:</option>
                <option value="bd">Bangladesh</option>
            </select><br>
            <label for="birthday">Birthday:</label><br>
            <input type="date" id="birthday" name="birthday"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <hr>
            <input type="submit" name="createUser" value="Create">
            <input type="reset">
            </fieldset>

        </form>
    </div>

</body>

</html>