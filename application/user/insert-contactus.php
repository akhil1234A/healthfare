<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
       header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
	$id = $_POST['id'];
        $sql = "INSERT INTO contact (name, email, message,userid) 
                VALUES ('$name', '$email','$message','$id')";
        $result = mysqli_query($conn, $sql);

			header("Location: contactus.php");
     
}
ob_end_flush();
?>