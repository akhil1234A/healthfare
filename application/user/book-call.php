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
    $date = $_POST['date'];
    $time = $_POST['time'];
    $doctor = $_POST['doctor'];
	$phone = $_POST['phone'];
    $message = $_POST['message'];
	$id = $_POST['id'];
        $sql = "INSERT INTO appointment (doctor,name, email, appointment_date, message,userid,phone) 
                VALUES ('$doctor','$name', '$email', '$date','$message','$id','$phone')";
        $result = mysqli_query($conn, $sql);

			header("Location: expert.php");
     
}
ob_end_flush();
?>