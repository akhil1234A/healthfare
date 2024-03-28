<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
           header("Location: ../index.php");
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];

        $sql = "INSERT INTO faq (question, answer) 
                VALUES ('$question', '$answer')";
        $result = mysqli_query($conn, $sql);

			header("Location: faqs.php");
        
}
ob_end_flush();
?>
