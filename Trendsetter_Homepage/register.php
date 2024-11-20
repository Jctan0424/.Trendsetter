<?php
session_start(); // Start the session
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php'; // Include the database connection

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signUp'])) {
    // Get the form inputs
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if the passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit(); // Stop further execution
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO sign_up (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        // Store username in session
        $_SESSION['username'] = $username;
        header("Location: Base.php"); // Redirect to Base.php
        exit();
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>