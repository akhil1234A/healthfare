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
    $relation = $_POST['relation'];
	$id = $_POST['id'];
$filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];  

        $folder = "image/".$filename;   
move_uploaded_file($_FILES['image']['tmp_name'],$folder);
        $sql = "INSERT INTO familymember (name, relation, image, userid) 
                VALUES ('$name', '$relation', '$folder', '$id')";
        $result = mysqli_query($conn, $sql);

			header("Location: family_profile.php");
        
}
ob_end_flush();
?>
