<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
header("Location:../index.php");
exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$assigned_to = $_POST['assigned_to'];
	
	$status = $_POST['status'];
        $sql = "update contact set assigned_to='$assigned_to',status='$status' where cid=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: usersupport.php");
        
}
ob_end_flush();
?>
