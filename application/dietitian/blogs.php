<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");// Redirect to login page if not logged in
    exit();
}
require "connection.php"; 

// Fetch user data from the database
$sql = "SELECT * FROM login WHERE username = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $sql);

$userData = null;

if (mysqli_num_rows($result) > 0) {
    $userData = mysqli_fetch_assoc($result);
}
// If the user is logged in, show the welcome message
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
   <!-- <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">-->
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
                    <a class="navbar-brand" href="index.php">
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
                                <img src="assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Dietitian
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
                                aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="assignedwork.php" aria-expanded="false"><i class="me-3 fas fa-user"
                                aria-hidden="true"></i><span class="hide-menu">Assigned Works</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="callrequests.php" aria-expanded="false"><i class="me-3  fas fa-user-md"
                                aria-hidden="true"></i><span class="hide-menu">Call Requests</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="blogs.php" aria-expanded="false"><i class="me-3 fas fa-tasks"
                                aria-hidden="true"></i><span class="hide-menu">Blogs</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="reviews.php" aria-expanded="false"><i class="me-3 fas fa-envelope"
                                aria-hidden="true"></i><span class="hide-menu">Reviews</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="healthconditions.php" aria-expanded="false"><i class="me-3 fas fa-question"
                                aria-hidden="true"></i><span class="hide-menu">Dataset</span></a></li>
                    <li class="text-center p-20 upgrade-btn">
                        <a href="../signout.php"
                            class="btn btn-danger text-white mt-4">Log Out</a>
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
                        <h3 class="page-title mb-0 p-0">Blogs</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
                <div class="row ">
                    <!-- Column -->
                       <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card"></br>
                              <a href="add-blog.php" style="color:grey">  <center class="mt-4"> <img src="assets/images/big/OIP.jpeg"
                                        class="rounded-circle" width="150" /></br></br>
                                    <h3 class="card-title mt-2">Add Blog </h3>
                                  </a>
                                    
                                    
                                </center></br>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
						<?php 
						$uid=$userData['id'];
															require "connection.php"; 
											$sql = "SELECT * FROM posts where user_id=$uid";
											$result = mysqli_query($conn, $sql);
											
											while($row = mysqli_fetch_array($result))
												
															{
																$id=$row['id'];
																																$date=$row['created_at'];
																    $newDate = date("d M, Y", strtotime($date));  
																
																?>
                    <div class="col-lg-4 col-md-6">
					
                        <div class="card">
                            <a href="blog-post.php?id=<?php echo $id; ?>"><img class="card-img-top img-responsive" src="<?php echo $row['image'] ?>" alt="Card"></a>
                            <div class="card-body">
                                <ul class="list-inline d-flex align-items-center">
                                    <li class="ps-0"><?php echo $newDate ?></li> &nbsp &nbsp <li class="ps-0"><a href="edit-post.php?id=<?php echo $id; ?>"><span style="color:blue"><b>Edit</b></span></a></li> &nbsp &nbsp <li class="ps-0"><a href="blogs.php?did=<?php echo $id; ?>"><span style="color:red"><b>Delete</b></span></a></li>
                                </ul>
                              <a href="blog-post.php?id=<?php echo $id; ?>" style="color:black">  <h3 class="font-normal"><?php echo $row['title'] ?></h3></a>
								
                            </div>
                        </div>
						
                    </div>
                    <!-- Column -->
															<?php } ?>
                </div>
            <?php
require "connection.php"; 
if(isset($_GET['did']))
{
$uid=$_GET['did'];
$insert2="delete from posts where id=$uid";
$sql_insert1=mysqli_query($conn,$insert2);
  echo "<script>
                window.location.href='blogs.php';
            </script>";
}
?>     
               
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