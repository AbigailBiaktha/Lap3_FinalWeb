<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "verify_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Connection fail.." . mysqli_connect_error();
}

?>