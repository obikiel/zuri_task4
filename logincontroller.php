<?php
// Initialize the session
include('config.php');
if (isset($_POST['login']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$s = "SELECT * FROM user WHERE username ='$username' && password = '$password'";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num ==1)
{
    header('location:dashboard.php');
    
}
else{
    header('location:login.php');
    session_start();
    $_SESSION['message'] =  "you dont have an account, please register";
    echo $_SESSION['message'];
    session_destroy();
    

}
}
?>