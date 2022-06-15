<?php
$servername = "localhost";
$username = "root123";
$password = "root123";
$dbname = "sparks_bank";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// echo "Connected successfully";
?>