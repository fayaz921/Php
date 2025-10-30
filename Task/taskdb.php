<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mfayaz_phpdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection properly
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
}
?>
