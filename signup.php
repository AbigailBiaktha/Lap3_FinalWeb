<?php

require "./logic/functions.php";

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $errors = signup($_POST);

    if (count($errors) == 0) {
        header("Location: login.php");
        die;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fitness Hub</title>
    <link rel="stylesheet" href="./assets/css/signup.css">

</head>

<body>
    <div class="box">
        <form action="signup.php" method="post">
            <h2>Sign Up</h2>

            <div class="inputBox">
                <input type="text" name="username" required="required">
                <span>Username</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>Email</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="password" name="password2" required="required">
                <span>Confirm Password</span>
                <i></i>
            </div>

            <input type="submit" name="submit" value="Sign Up">

            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
        </form>
    </div>
</body>

</html>