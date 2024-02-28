<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="dashboard-container">
        <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
        <button id="add-user">Add User</button>
        <button id="logout">Logout</button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
