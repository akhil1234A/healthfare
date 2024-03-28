<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
           header("Location: ../index.php");
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$specialization = $_POST['specialization'];
	$status = $_POST['status'];
        $sql = "update login set name='$name',email='$email',number='$contact',specialization='$specialization',status='$status' where id=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: dietitians.php");
        
}
ob_end_flush();
?>
