<?php
    session_start();
    $_SESSION["name"] = "Dashboard";

    if(isset($_POST["user"]))
    {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   
</head>
<body>
    <div class = "container">
        <h1>Welcome to Dashboard</h1>
        <div class="users">
            <a href="users.php"> <h3>User</h></a>
        </div>

        <a href="logout.php">Logout</a>

    </div>
</body>
</html>