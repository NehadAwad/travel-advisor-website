<?php

$servername = "localhost";
$username = "me";
$password = "111";
$dbname = "trip_advisior";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>