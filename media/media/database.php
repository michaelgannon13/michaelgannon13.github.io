<?php
$servername = "mysql2779int.cp.blacknight.com";
$username = "u1429287_michael";
$password = "S@3+Nmr1K[?h|Tu5";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
 