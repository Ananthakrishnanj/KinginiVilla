<?php

include('./credentials.php');

// Create connection
$conn = new mysqli(SERVER_NAME, DB_USERNAME, DB_PASSWORD);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>