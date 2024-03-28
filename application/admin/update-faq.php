<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
           header("Location:../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php";

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$question = $_POST['question'];
	$answer = $_POST['answer'];
        $sql = "update faq set question='$question',answer='$answer'where faqid=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: faqs.php");
        
}
ob_end_flush();
?>
