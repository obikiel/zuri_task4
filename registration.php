<?php
include('config.php');
require('registrationcontroller.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>registration page</title>
</head>
<body>
<h1><strong> THE REGISTRATION PAGE </strong></h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="text" name="username" required placeholder="username"><br><br>
        <input type="password" name="password" required placeholder="password"><br><br>
        <input type="password" name="confirm_password" required placeholder="confirm_password"><br><br>
        <input type="submit" name="register" value="register">
        <button><a href="index.php">home</a></button>
    </form>
</body>
</html>