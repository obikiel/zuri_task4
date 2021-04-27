<?php
    //initialising database variables
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "zuri_crud";

    //connecting database
    $conn = new mysqli($servername,$username, $password,$db_name);

    if($conn->connect_error)
    {
        die('connection failed:'.$conn->connect_error);
    }


?>