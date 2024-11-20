<?php
session_start(); // Start the session
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors for debugging

include 'connect.php'; // Include the database connection

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the posted values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query to find the user
    $stmt = $conn->prepare("SELECT password FROM sign_up WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        // User exists, now verify the password
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set the session variable
            $_SESSION['username'] = $username;
            header("Location: Base.php"); // Redirect to Base.php on successful login
            exit();
        } else {
            // Password is incorrect
            $_SESSION['login_error'] = 'Wrong username or password.';
            header("Location: Base.php"); // Redirect back to Base.php
            exit();
        }
    } else {
        // User does not exist
        $_SESSION['login_error'] = 'Wrong username or password.';
        header("Location: Base.php"); // Redirect back to Base.php
        exit();
    }
}
?>