<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
        .names {
            width: 100px;
            text-align: right;
            margin: auto;
            float: left;
        }

        .items {
            width: 500px;
            margin-left: 105px;
            text-align: left;
            vertical-align: top;
        }

        .line {
            width: 400px;
            border-top: 2px solid black;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/basicStyling.css">
    <link rel="stylesheet" type="text/css" href="css/adminDashboard.css">
    <link rel="stylesheet" type="text/css" href="css/header_admin.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_admin.css">
    <link rel="stylesheet" type="text/css" href="../../HnF/Footer.css">
    <script type="text/javascript" src="js/profile.js"></script>
</head>

<body>

    <?php
    include 'sidebar_admin.html';
    include 'header_admin.php';
    ?>
    <form method="post" action="../controllers/createEditor.php">
        <div style="position: relative; padding-left: 30%; padding-top: 20px;">
            <fieldset style="width: 30%; box-shadow: 0 0 20px;">
                <div class="names">
                    <label>Name: </label><br><br>
                    <label style="margin-bottom: 2px">Email: </label><br><br>
                    <label>Gender: </label><br><br><br>
                    <label>User Name: </label><br><br>
                    <label>Password: </label><br><br>
                    <label>Confirm Password: </label><br><br>
                    <label>Date of Birth: </label><br><br>
                    <label>City: </label><br><br>
                    <label>Country: </label><br><br>
                    <label>Phone: </label><br><br>
                </div>
                <div class="items">
                    <input type="text" name="name">
                    <span><?php if (isset($_GET['nameErr'])) echo $_GET['nameErr']; ?><br><br>
                        <input type="email" name="email" style="position: relative; bottom: 3px">
                        <span><?php if (isset($_GET['emailErr'])) echo $_GET['emailErr']; ?></span><br><br>
                        <input type="radio" id="male" name="gender" value="Male" style="position: relative; bottom: 6px">
                        <label for="male" style="position: relative; bottom: 6px">Male</label>
                        <input type="radio" id="female" name="gender" value="Female" style="position: relative; bottom: 6px">
                        <label for="female" style="position: relative; bottom: 6px">Female</label>
                        <span><?php if (isset($_GET['genderErr'])) echo $_GET['genderErr']; ?><br><br>
                            <input type="text" name="username" style="position: relative; bottom: 8px">
                            <span><?php if (isset($_GET['usernameErr'])) echo $_GET['usernameErr']; ?><br><br>
                                <input type="text" name="password" style="position: relative; bottom: 8px">
                                <span><?php if (isset($_GET['passwordErr'])) echo $_GET['passwordErr']; ?><br><br>
                                    <input type="text" name="cpassword" style="position: relative; bottom: 8px">
                                    <span><?php if (isset($_GET['cpasswordErr'])) echo $_GET['cpasswordErr']; ?><br><br>





                                        <div style="position: relative; bottom: 2px">
                                            <input type="date" name="dob" style="float: left;">
                                        </div>
                                        <span><?php if (isset($_GET['dobErr'])) echo $_GET['dobErr']; ?>

                </div><br><br>
                <input type="text" name="city" style="position: relative; bottom: 1px">
                <span><?php if (isset($_GET['cityErr'])) echo $_GET['cityErr']; ?><br><br>
                    <input type="text" name="country" style="position: relative; bottom: 1px">
                    <span><?php if (isset($_GET['countryErr'])) echo $_GET['countryErr']; ?><br><br>
                        <input type="text" name="phone" style="position: relative; bottom: 1px">
                        <span><?php if (isset($_GET['phoneErr'])) echo $_GET['phoneErr']; ?><br><br>

                            <input type="submit" name="Submit" style="position: relative; float: left;">
            </fieldset>
        </div>



    </form>

</body>

</html>