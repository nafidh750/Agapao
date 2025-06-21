<?php
// filepath: /home/tz-young-elonmusk/Documents/Agapao/forms/connection.php

// Database configuration
$host = 'localhost'; // Database host
$username = 'root'; // Database username
$password = ''; // Database password
$database = 'agapaoco_agapao_db'; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo 'Database connection successful!';
?>