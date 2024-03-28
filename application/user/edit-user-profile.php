<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
       header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php";
if(isset($_POST['edit']))
{
$name=$_POST['name'];
$email=$_POST['example-email'];
$phone=$_POST['number'];
$gender=$_POST['gender'];
$id=$_POST['id'];
$country=$_POST['country'];
$insert="update login set name='$name',email='$email', number='$phone', gender='$gender', country='$country' where id=$id";
$sql_insert1=mysqli_query($conn,$insert);
header('location:profile.php');
}
ob_end_flush();
?>