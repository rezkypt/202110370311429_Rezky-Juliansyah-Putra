<?php
// Start a session
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}

// The user is logged in, display the dashboard content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary head content here -->
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a> <!-- Add a logout link to logout.php -->
</body>
</html>
