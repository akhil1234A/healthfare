<?php
session_start();
ob_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php";
if (isset($_POST['submit'])) {
    $heading = $_POST['title'];
    
    $content = mysqli_real_escape_string($conn, $_POST['body']);;
	$id = $_POST['id'];
$filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];  

        $folder = "image/".$filename;   
move_uploaded_file($_FILES['image']['tmp_name'],$folder);
        $sql = "INSERT INTO posts (title, body, image,user_id) 
                VALUES ('$heading', '$content', '$folder', '$id')";
        $result = mysqli_query($conn, $sql);

			header("Location: blogs.php");
        
}
ob_end_flush();
?>
