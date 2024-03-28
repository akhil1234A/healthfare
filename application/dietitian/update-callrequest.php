<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$status = $_POST['status'];
        $sql = "update appointment set status='$status' where aid=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: callrequests.php");
        
}
ob_end_flush();
?>
