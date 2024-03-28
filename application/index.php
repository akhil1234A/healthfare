<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="login-process.php" method="POST">
          	<center>
						<?php 
						  if(isset($_SESSION['logvalid'])){
							echo "<span style='color:red'>".$_SESSION['logvalid'].'</span>';
						  }
						  session_reset();
						  session_destroy();
						?>
					</center></br>
        <input type="text" placeholder="Enter your username" name="username">
        <input type="password" placeholder="Enter your password" name="password">
        <a href="forgot-password.php">Forgot password?</a>
        <input type="submit" class="button" value="Login" name="submit" style="background:#1977cc">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <a href ="registration.php">Signup</a>
        </span>
      </div>
    </div>
  
  </div>
</body>
</html>
