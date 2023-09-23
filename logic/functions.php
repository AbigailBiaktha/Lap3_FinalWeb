<?php

session_start();

function signup($data)
{
    $errors = array();

    // Validate
    if (!preg_match('/^[a-zA-Z]+$/', $data['username'])) {
        $errors[] = "Please enter a valid username";
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 characters long";
    }

    if ($data['password'] != $data['password2']) {
        $errors[] = "Passwords must match";
    }

    // Check if the email already exists in the "members" table
    $check = database_run("SELECT * FROM members WHERE email = :email LIMIT 1", ['email' => $data['email']]);
    if (is_array($check)) {
        $errors[] = "That email already exists";
    }

    // Save to the "members" table
    if (count($errors) === 0) {
        $arr['username'] = $data['username'];
        $arr['email'] = $data['email'];
        $arr['password'] = hash('sha256', $data['password']);
        $arr['date'] = date("Y-m-d H:i:s");

        $query = "INSERT INTO members (username, email, password, date) VALUES (:username, :email, :password, :date)";

        database_run($query, $arr);
    }

    return $errors;
}

function login($data)
{
    // Validate email and password
    $email = $data['email'];
    $password = $data['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Please enter a valid email";
    }

    if (strlen(trim($password)) < 4) {
        return "Password must be at least 4 characters long";
    }

    // Check if a password reset is required
    if (isset($_SESSION['PASSWORD_RESET_REQUIRED']) && $_SESSION['PASSWORD_RESET_REQUIRED']) {

        return "Password reset required";
    }

    // Check credentials
    $query = "SELECT * FROM members WHERE email = :email LIMIT 1";
    $arr = array(':email' => $email);

    $row = database_run($query, $arr);

    if (is_array($row) && count($row) === 1) {
        $row = $row[0];
        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            // Password is correct; set session variables
            $_SESSION['USER'] = $row;
            $_SESSION['LOGGED_IN'] = true;
            return true;
        }
    }

    return "Wrong email or password";
}


function database_run($query, $vars = array())
{
    $string = "mysql:host=localhost;dbname=verify_db";
    $con = new PDO($string, 'root', '');

    if (!$con) {
        return false;
    }

    $stm = $con->prepare($query);
    $check = $stm->execute($vars);

    if ($check) {

        $data = $stm->fetchAll(PDO::FETCH_OBJ);

        if (count($data) > 0) {
            return $data;
        }
    }

    return false;
}

function check_login($redirect = true)
{

    if (isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])) {

        return true;
    }

    if ($redirect) {
        header("Location: login.php");
        die;
    } else {
        return false;
    }
}

function check_verified()
{

    $id = $_SESSION['USER']->id;
    $query = "select * from users where id = '$id' limit 1";
    $row = database_run($query);

    if (is_array($row)) {
        $row = $row[0];

        if ($row->email == $row->email_verified) {

            return true;
        }
    }

    return false;
}

// Function to change username
function changeUsername($newUsername)
{
    if (isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])) {
        $id = $_SESSION['USER']->id;



        $query = "UPDATE users SET username = :newUsername WHERE id = :id";
        $vars = array('newUsername' => $newUsername, 'id' => $id);

        if (database_run($query, $vars)) {
            $_SESSION['USER']->username = $newUsername;
            return $newUsername;
        }
    }

    return false;
}
