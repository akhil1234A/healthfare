<?php
session_start();
require "connection.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
    $number = $_POST['number'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $postal_code = $_POST['postal_code'];

    // Query to check if the email already exists in the database
    $check_email = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");
    if (mysqli_num_rows($check_email) > 0) {
       $_SESSION['logvalid']="Email is already taken!";
	header("location:registration.php");
    } else {
        $sql = "INSERT INTO login (name, email, username, password, number, dob, gender, address1, address2, country, city, region, postal_code) 
                VALUES ('$name', '$email', '$username', '$password', '$number', '$dob', '$gender', '$address1', '$address2', '$country', '$city', '$region', '$postal_code')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Success: Account created');</script>";
			header("Location: index.php");
        } else {
            echo "<script>alert('Error: Unable to create account');</script>";
        }
    }
}
?>
