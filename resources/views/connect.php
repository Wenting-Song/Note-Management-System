<?php
$servername = "localhost";
$username = "php24sql";
$password = "sss@138341";
$database = "email";

// Create connection
$con = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>