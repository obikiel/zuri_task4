<?php
require('config.php');
//set the variables from the form
if (isset($_POST['register']) && !empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['confirm_password']))
{
    $username = $_POST['username'];
    $password =  $_POST['password'];
    $confirm_password =  $_POST['confirm_password'];
//check the password and confirm_password fields to make sure they are the same.

    $s = "SELECT * FROM user WHERE username ='$username'&& password = '$password'";
    $result = mysqli_query($conn,$s);
    $num = mysqli_num_rows($result);

    if($num ==1)
    {
        echo "username and password already taken";
    }
    elseif ($password!==$confirm_password)
        {
            session_start();
            $_SESSION['message'] =  "passwords do not match";
            echo $_SESSION['message'];
            session_destroy();
            

        }
        //enter the values into the database
     else{
        $query = "INSERT INTO user ( username,password,confirm_password) VALUES('$username','$password','$confirm_password')";

            if (mysqli_query($conn, $query))
                {
                    header('location:login.php');
                }
                else{
                echo "was unable to register user";
                } 
            }
}

?>