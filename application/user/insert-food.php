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
    $fid = $_POST['member'];
	$id = $_POST['id'];
	$did = $_POST['doctor'];
	$status="Requested";
$filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];  

        $folder = "image/".$filename;   
move_uploaded_file($_FILES['image']['tmp_name'],$folder);
        $sql = "INSERT INTO food_review (food_name, image,family_member, user,status,did) 
                VALUES ('$name', '$folder', '$fid', '$id','$status','$did')";
        $result = mysqli_query($conn, $sql);

			header("Location: findmeal.php");
        
}
ob_end_flush();
?>
