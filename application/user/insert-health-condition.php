<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
       header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
    $hc = $_POST['hc'];
    $uid = $_POST['id'];
    $hc_severity = $_POST['hc_severity'];
	$member = $_POST['member'];
        $sql = "INSERT INTO health_condition (health_condition,hc_severity,fid,uid) 
                VALUES ('$hc','$hc_severity' ,'$member','$uid')";
        $result = mysqli_query($conn, $sql);

			header("Location: myhealth.php");
        
}
ob_end_flush();
?>
