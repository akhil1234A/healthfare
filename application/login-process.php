<?php
session_start(); // This should be at the top of your PHP file

require "connection.php";


    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check the username and password in your database
        $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            // The user is authenticated, start a session
            $_SESSION['username'] = $username;
			
			 $row = mysqli_fetch_assoc($result);
			 $userType = $row['usertype'];

            // Redirect based on user type
            if ($userType == 'A') {
                header("Location: admin/index.php");
            
            } elseif ($userType == 'U') {
                header("Location: user/index.php");
            } elseif ($userType == 'D') {
                header("Location: dietitian/index.php");
            }

        	
        }
else {
           $_SESSION['logvalid']="Invalid Username or Password!";
	header("location:index.php");
        }

	
    }

?>