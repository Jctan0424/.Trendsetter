<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: Base.php"); // Redirect to Base.php
exit(); // Ensure no further code is executed
?>