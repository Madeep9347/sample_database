<?php
$servername = "database-2.cruq66wo2x31.ap-south-1.rds.amazonaws.com"; // Replace with your RDS endpoint
$username = "admin";                 // Replace with your RDS username
$password = "Madhu1234";                 // Replace with your RDS password
$dbname = "demo_php";                  // Replace with your desired database name
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists<br>";
} else {
    die("Error creating database: " . $conn->error);
}

// Select the database
$conn->select_db($dbname);
// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully or already exists<br>";
} else {
    die("Error creating table: " . $conn->error);
}
?>
