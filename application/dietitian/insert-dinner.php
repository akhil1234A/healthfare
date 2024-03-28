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
    $nutri_info = $_POST['nutri_info'];
	$calories = $_POST['calories'];
	$recipe = $_POST['recipe'];
	$ingredients = $_POST['ingredients'];
	$type = $_POST['type'];
	$hc = $_POST['hc'];
	$filename = $_FILES["image"]["name"];

    $tempname = $_FILES["image"]["tmp_name"];  

        $folder = "image/".$filename;   
move_uploaded_file($_FILES['image']['tmp_name'],$folder);
                $sql = "INSERT INTO foods (image,health_condition,name,nutri_info, calories, recipe,ingredients,type) 
                VALUES ('$folder','$hc','$name','$nutri_info', '$calories', '$recipe', '$ingredients','$type')";
        $result = mysqli_query($conn, $sql);

			header("Location: dinner.php");
        
}
if (isset($_POST['submit1'])) {
    $name = $_POST['name'];
    $nutri_info = $_POST['nutri_info'];
	$calories = $_POST['calories'];
	$recipe = $_POST['recipe'];
	$ingredients = $_POST['ingredients'];
	$id = $_POST['id'];
      $sql = "update foods set name='$name',nutri_info='$nutri_info',calories='$calories',recipe='$recipe',ingredients='$ingredients' where fdid=$id";
        $result = mysqli_query($conn, $sql);

			header("Location: dinner.php");
        
}
ob_end_flush();
?>
