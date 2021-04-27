<?php
require('config.php');
session_start();
//initialise
$name="";
$address="";
$id=0;
$edit_state=false;


//send data to the database
if (isset($_POST['save'])){
    $name=$_POST['name'];
    $address=$_POST['address'];

    $query="INSERT INTO user(name,address) VALUES('$name','$address')"; 
    mysqli_query($conn,$query);
    $_SESSION['msg']="your details have been entered"; 
    header('location:dashboard.php'); 
}
//update data
if(isset($_POST['update'])){
    $name = ($_POST['name']);
    $address = ($_POST['address']);
    $id = ($_POST['id']);  

    mysqli_query($conn, "UPDATE user SET name='$name', address='$address' WHERE username='$username'");
    $_SESSION['msg']="address updated";
    header('location:dashboard.php');
}
// delete from the database
if(isset($_GET['del'])){
    $id =$_GET['del'];
    mysqli_query($conn, "DELETE FROM user WHERE username= '$username'");
    $_SESSION['msg'] = "address deleted";
    header('location:dashboard.php');
}
//retrieve data from database
$results = mysqli_query($conn, "SELECT*FROM user");

?> 
