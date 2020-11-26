<?php
$host = "3.89.186.66";
$username = "team2";
$password = "password_XZD_2";
$dbname = "team2_db";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {

    die("Connection failed: " .  $conn->connect_error);

} else {
    // echo "Connected successfully";
}
?>
