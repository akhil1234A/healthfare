<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
    $dietary_pref = $_POST['dietary_pref'];
    $description = $_POST['description'];
	
        $sql = "INSERT INTO dietary_pref (dietary_pref,description) 
                VALUES ('$dietary_pref', '$description')";
        $result = mysqli_query($conn, $sql);

			header("Location: dietarypreferance.php");
        
}
if (isset($_POST['submit1'])) {
  $dietary_pref = $_POST['dietary_pref'];
    $description = $_POST['description'];
	$id = $_POST['id'];
      $sql = "update dietary_pref set dietary_pref='$dietary_pref',description='$description' where dpid=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: dietarypreferance.php");
        
}
ob_end_flush();
?>
