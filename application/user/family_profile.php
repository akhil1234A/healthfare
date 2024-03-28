<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
        header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}

// If the user is logged in, show the welcome message
require "connection.php"; 

// Fetch user data from the database
$sql = "SELECT * FROM login WHERE username = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $sql);

$userData = null;

if (mysqli_num_rows($result) > 0) {
    $userData = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>HealthFare</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="assets/images/leaf.png">-->
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                           <!-- <img src="assets/images/leaf.png" height="30" width="30" alt="homepage" class="dark-logo" />-->

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/logo.png" height="40px" width="180px" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/users/1.jpg" alt="user" class="profile-pic me-2"><?php echo $_SESSION['username']; ?>
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="index.php" aria-expanded="false"><i class="me-3 fas fa-home"
                                aria-hidden="true"></i><span class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="family_profile.php" aria-expanded="false">
                            <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                class="hide-menu">Family Members</span></a>
                    </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="myhealth.php" aria-expanded="false"><i class="me-3 fas fa-heartbeat"
                                    aria-hidden="true"></i><span class="hide-menu">My Health</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="findmeal.php" aria-expanded="false"><i class="me-3 fas fa-utensils"
                                    aria-hidden="true"></i><span class="hide-menu">Add Your Meals</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="mymeal.php" aria-expanded="false"><i class="me-3 fas fa-beer"
                                    aria-hidden="true"></i><span class="hide-menu">My Meals</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="bmi.php" aria-expanded="false"><i class="me-3 fas fa-calculator"
                                    aria-hidden="true"></i><span class="hide-menu">BMI</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="blog.php" aria-expanded="false"><i class="me-3 fa fa-info-circle"
                                    aria-hidden="true"></i><span class="hide-menu">Blog</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="expert.php" aria-expanded="false"><i class="me-3 fas fa-user-md"
                                    aria-hidden="true"></i><span class="hide-menu">Connect with Experts</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="contactus.php" aria-expanded="false"><i class="me-3 fas fa-user-md"
                                    aria-hidden="true"></i><span class="hide-menu">Contact Us</span></a></li>	
										<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="faq-user.php" aria-expanded="false"><i class="me-3 fas fa-question"
                                    aria-hidden="true"></i><span class="hide-menu">FAQS</span></a></li>
                        <li class="text-center p-20 upgrade-btn">
                                        <a href="../signout.php"
                                            class="btn btn-danger text-white mt-4">Log Out
                                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
          
			<div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Family Members</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="../signout.php"
                                class="btn btn-success d-none d-md-inline-block text-white">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Family Members -->
				
				 <div class="row">
                    <!-- Column -->
					<?php 
				require "connection.php"; 
$sql = "SELECT * FROM familymember WHERE userid = '" . $userData['id'] . "'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
				{
					$fid=$row['fid'];
					?>
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
							<div class="row">
							<div class="col-6"><a href="edit-family-member.php?id=<?php echo $row['fid'] ?>"><i class="ti-pencil-alt" style="color:#009efb;text-align:right"> Edit</i></a></div>
							<div class="col-6" style="text-align:right">
							<?php echo" <a onClick=\"javascript: return confirm('Please confirm deletion');\" href='family_profile.php?id=".$fid."'>
							<i class='ti-trash' style='color:red;text-align:right'> Delete</i></div>
							</a> "; ?>
			
							

							</div>
                                <center class="mt-4"> <img src="<?php echo $row['image'] ?>"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2"><?php echo $row['name'] ?></h4>
                                    <h6 class="card-subtitle"><?php echo $row['relation'] ?></h6>
                                    
                                    
                                </center>
                            </div>
                        </div>
                    </div>
				<?php } ?>
					
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                              <a href="add-family-member.php" style="color:grey">  <center class="mt-4"> <img src="assets/images/big/OIP.jpeg"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2">Add Profile </h4>
                                  </a>
                                    
                                    
                                </center></br></br>
                            </div>
                        </div>
                    </div>
				  </div>
				</div>
				
			
			
				
				
			<?php
require "connection.php";
if(isset($_GET['id']))
{
$uid=$_GET['id'];
$insert2="delete from familymember where fid=$uid";
$sql_insert1=mysqli_query($conn,$insert2);
$insert3="delete from health_condition where fid=$uid";
$sql_insert3=mysqli_query($conn,$insert3);
$insert4="delete from food_review where family_member=$uid";
$sql_insert4=mysqli_query($conn,$insert4);
  echo "<script>
                window.location.href='family_profile.php';
            </script>";
}
?>	
               
					
					
					
					
					 
                    <!-- Column -->
                    <!-- Column -->
                    
                  
                    <!-- Column -->
                
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                 © HealthFare</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>