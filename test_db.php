<?php
$servername = "Your Host Name Or Server Nmae";
$username = "Your Database User Name";
$password = "Your Database Password";
$dbname = "Your Database Name";

// Connection create karna
$conn = new mysqli($servername, $username, $password, $dbname);

// Connection check karna
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connection successful!";
?>
