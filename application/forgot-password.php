<?php
session_start();
include_once 'connection.php';
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $result = mysqli_query($conn,"SELECT * FROM login where username='" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['username'];
	$email_id=$row['email'];
	$password=$row['password'];
	if($user_id==$fetch_user_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From:sparkt171" . "\r\n" .
                "CC: dteam.sparktm@gmail.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forgot Password</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Forgot Password</header>
      <form action="forgot-password.php" method="POST">
        <input type="text" placeholder="Enter your username" name="user_id">
       
        <input type="submit" class="button" value="Submit" name="submit" style="background:#1977cc">
      </form>
   
    </div>
  
  </div>
</body>
</html>
