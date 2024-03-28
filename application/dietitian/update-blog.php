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
	$title = $_POST['title'];
	 $body = mysqli_real_escape_string($conn, $_POST['body']);
	
        $sql = "update posts set title='$title',body='$body' where id=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: blogs.php");
        
}
ob_end_flush();
?>
