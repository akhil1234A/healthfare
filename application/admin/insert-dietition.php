<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
           header("Location: ../index.php");
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
	$contact = $_POST['contact'];
		$username = $_POST['username'];
			$password = $_POST['password'];
		$specialization = $_POST['specialization'];
			$status = $_POST['status'];
$usertype="D";
        $sql = "INSERT INTO login (name, email, number,specialization ,status,username,password,usertype) 
                VALUES ('$name', '$email', '$contact', '$specialization','$status','$username','$password','$usertype')";
        $result = mysqli_query($conn, $sql);

			header("Location: dietitians.php");
        
}
ob_end_flush();
?>
