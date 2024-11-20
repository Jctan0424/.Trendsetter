<?php
$servername = "localhost"; // Server name
$username = "root"; // MySQL username
$password = ""; // MySQL password (leave empty if no password)
$dbname = "trendsetter"; // Database name
$port = 3307; // Specify the port number

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database.";
}
?>