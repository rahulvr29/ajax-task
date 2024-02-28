<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are provided
    if (!empty($username) && !empty($password)) {
        // Check if username and password are correct (dummy validation)
        if ($username === "vr" && $password === "1234") {
            // Set session variables
            $_SESSION['username'] = $username;
            echo "Login successful!";
        } else {
            echo '<span style="color: red;">Invalid username or password.</span>';
        }
    } else {
        echo '<span style="color: red;">Please enter both username and password.</span>';
    }
}
?>

