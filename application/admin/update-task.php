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
	$type = $_POST['type'];
	$name = $_POST['name'];
	$dietitian = $_POST['dietitian'];
	$date = $_POST['date'];
	$status = $_POST['status'];
        $sql = "update tasks set name='$name',type='$type',dietitian='$dietitian',date='$date',status='$status' where tid=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: assignedwork.php");     
}
ob_end_flush();
?>
