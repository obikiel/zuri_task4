<?php
require('config.php');
require('logincontroller.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1><strong>THE LOGIN PAGE</strong></h1>
    <form action="logincontroller.php" method="POST">
        <input type="text" name="username" required placeholder="username"><br><br>
        <input type="password" name="password" required placeholder="password"><br><br>
        <input type="submit" name="login" value="login">
        <button><a href="index.php">home</a></button>

    </form>
</body>
</html>