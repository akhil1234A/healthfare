<?php
ob_start();
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
    $food_name = $_POST['food_name'];
    $review = $_POST['review'];
	$image = $_POST['image'];
	$user = $_POST['user'];
	$family_member = $_POST['family_member'];
	$foodid = $_POST['fid'];
	$status = $_POST['status'];
	$did = $_POST['did'];
        $sql = "INSERT INTO food_review (status,food_name, review, image,did,user,family_member,fid) 
                VALUES ('$status','$food_name', '$review', '$image', '$did', '$user', '$family_member', '$foodid')";
        $result = mysqli_query($conn, $sql);

			header("Location: reviews.php");
        
}
if (isset($_POST['submit1'])) {
    $review = $_POST['review'];
	$status = $_POST['status'];
	$id = $_POST['fid'];
      $sql = "update food_review set status='$status',review='$review' where frid=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: reviews.php");
        
}
ob_end_flush();
?>
