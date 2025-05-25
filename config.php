<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb"; // match your actual DB name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ DB Connection Failed: " . $conn->connect_error);
}
?>
