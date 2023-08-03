<?php
// Replace with your actual database credentials
$hostname = 'localhost'; // or your database server IP
$username = 'root';
$password = '';
$database = 'survey';

// Create a connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo 'Connected successfully!';

?>
