<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
    $health_condition = $_POST['health_condition'];
    $severity = $_POST['severity'];
	$info = $_POST['info'];

        $sql = "INSERT INTO dataset (health_condition,severity, additional_info) 
                VALUES ('$health_condition','$severity', '$info')";
        $result = mysqli_query($conn, $sql);

			header("Location: healthconditions.php");
        
}
if (isset($_POST['submit1'])) {
   $health_condition = $_POST['health_condition'];
    $severity = $_POST['severity'];
	$info = $_POST['additional_info'];

	$id = $_POST['id'];
      $sql = "update dataset set health_condition='$health_condition',severity='$severity',additional_info='$info'where did=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: healthconditions.php");
        
}
ob_end_flush();
?>
