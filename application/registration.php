<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="stylereg.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="insertion.php" method="POST" class="form">
          	<center>
						<?php 
						  if(isset($_SESSION['logvalid'])){
							echo "<span style='color:red'>".$_SESSION['logvalid'].'</span></br>';
						  }
						  session_reset();
						  session_destroy();
						?>
					</center>
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email" required />
        </div>
		 <div class="input-box">
          <label>User Name</label>
          <input type="text" placeholder="Enter user name" name="username" required />
        </div>
		 <div class="input-box">
          <label>Password</label>
          <input type="password" placeholder="Enter password" name="password" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="dob" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option" name="gender">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="male" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="female" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" value="not preferred" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" name="address1" required />
          <input type="text" placeholder="Enter street address line 2" name="address2" required />
          <div class="column">
            <div class="select-box">
              <select name="country">
                <option hidden>Country</option>
                <option>America</option>
                <option>Japan</option>
                <option>India</option>
                <option>Nepal</option>
              </select>
            </div>
            <input type="text" placeholder="Enter your city" name="city" required />
          </div>
          <div class="column">
            <input type="text" placeholder="Enter your region" name="region" required />
            <input type="number" placeholder="Enter postal code" name="postal_code" required />
          </div>
        </div>
        <button name="submit" style="background:#1977cc">Submit</button>
      </form>
    </section>
  </body>
</html>
