<?php
// Start a session
session_start();

// Include database connection
include_once("profile"); // Replace with your actual database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate user credentials (this is a basic example, update it based on your needs)
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Authentication successful
        $_SESSION["username"] = $username;
        header("Location: dashboard.php"); // Redirect to a dashboard page or any other page after login
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?>
