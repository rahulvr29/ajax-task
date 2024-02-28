<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Check if username and password are correct (dummy validation)
if ($username === "admin" && $password === "password") {
  // Set session variables
  $_SESSION['username'] = $username;
  echo "<script>window.location = 'dashboard.php';</script>";
} else {
  echo "Invalid username or password.";
}
}
?>

