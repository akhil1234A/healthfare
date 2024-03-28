<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
           header("Location: ../index.php");
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];
	$dietitian = $_POST['dietitian'];
		$date = $_POST['date'];
			$status = $_POST['status'];

        $sql = "INSERT INTO tasks (type, name, dietitian,date ,status) 
                VALUES ('$type', '$name', '$dietitian', '$date','$status')";
        $result = mysqli_query($conn, $sql);

			header("Location: assignedwork.php");
        
}
ob_end_flush();
?>
