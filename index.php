<?php
session_start();

include("connection.php");
include("function.php");
$user_data=check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>website</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>this is index</h1>

    <br>
   <?php echo "<h1>Hello {$user_data['user_name']}</h1>"; ?>
</body>
</html>