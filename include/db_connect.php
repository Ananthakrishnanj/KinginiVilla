<?php

include('credentials.php');

// Create connection
$conn = new mysqli(SERVER_NAME, DB_USERNAME, DB_PASSWORD);

// Check connection
if ($conn->connect_error) {
   header("../error.html")
} 


?>