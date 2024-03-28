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
                            class="btn btn-danger text-white mt-4" >Log Out</a>
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
                        <h3 class="page-title mb-0 p-0">Reviews</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
					<div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="../signout.php"
                                class="btn btn-success d-none d-md-inline-block text-white" >Log Out</a>
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
                 <?php 
											    if(isset($_GET['id'])){
											        $id=$_GET['id'];
											        	require "connection.php"; 
												$sql = "SELECT * FROM food_review where frid=$id";
												$result = mysqli_query($conn, $sql);
												while($row = mysqli_fetch_array($result))
												{
													$name=$row['food_name'];
													$review=$row['review'];
													$status=$row['status'];
													$frid=$row['frid'];
											        ?>
											        <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Update Food Review</h2>
                                <form action="insert-food-review.php" method="post"  enctype="multipart/form-data">
                                    <div class="form-group">
                            
                                        <div class="row">
                                            
                                            <div class="col-md-12">
											<label class="col-md-12 mb-0" for="height">Food name</label>
											<input type="text" name="name" value="<?php echo $name ?>" disabled class="form-control">
                                            </div>
											<input type="hidden" name="fid" value="<?php echo $frid ?>">
                                        <div class="row">
                                            <label class="col-md-12 mb-0" for="age">Review</label>
                                            <div class="col-md-12">
												<textarea name="review" class="form-control"rows="5"><?php echo $review ?></textarea>
												</div>
                                        </div>
										<div class="row">
                                            <label class="col-md-12 mb-0" for="age">Status</label>
                                            <div class="col-md-12">
                                                <select name="status"  class="form-control ps-0 form-control-line form-control">
												<option  value="Pending" <?php if($status=='Pending') echo 'selected' ?>>Pending</option>
												<option  value="In Progress"  <?php if($status=='In Progress') echo 'selected' ?>>In Progress</option>
												<option value="Completed" <?php if($status=='Completed') echo 'selected' ?>> Completed</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                               </br> <input type="submit" value="Submit" name="submit1" class="btn btn-success d-none d-md-inline-block text-white">
                                            </div>
                                        </div>
                                    </div>

									
                                  
                                </form>
								   
                            </div>
                                
                            
                        </div>
                    </div>
                </div>
                </div>
											        <?php } } else{ ?>
				  <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Add Food Review</h2>
                                <form action="insert-food-review.php" method="post"  enctype="multipart/form-data">
                                    <div class="form-group">
                            
                                        <div class="row">
                                            
                                            <div class="col-md-12">
											<label class="col-md-12 mb-0" for="height">Food name</label>
											<select name="food_name"  class="form-control ps-0 form-control-line form-control">
											  <?php 
												require "connection.php"; 
												$sql = "SELECT * FROM foods";
												$result = mysqli_query($conn, $sql);
												while($row = mysqli_fetch_array($result))
												{
													$name=$row['name'];
													$image=$row['image'];
													$userid=$row['userid'];
													$family_member=$row['fid'];
													$foodid=$row['fid'];
																	?>
                                                 
												<option value="<?php echo $row['name'];?>"><img src="user"><?php echo $name ?></option>
												<?php }?>
												</select>
                                            </div>
											<input type="hidden" name="fid" value="<?php echo $foodid ?>">
											<input type="hidden" name="did" value="<?php echo $userData['id'] ?>">
                                       <input type="hidden" name="family_member" value="<?php echo $family_member ?>">
									   <input type="hidden" name="user" value="<?php echo $userid ?>">
                                    <input type="hidden" name="image" value="<?php echo $image ?>">
                                        <div class="row">
                                            <label class="col-md-12 mb-0" for="age">Review</label>
                                            <div class="col-md-12">
												<textarea name="review" class="form-control"rows="5"></textarea>
												</div>
                                        </div>
										<div class="row">
                                            <label class="col-md-12 mb-0" for="age">Status</label>
                                            <div class="col-md-12">
                                                <select name="status"  class="form-control ps-0 form-control-line form-control">
												<option  value="Pending">Pending</option>
												<option  value="In Progress">In Progress</option>
												<option value="Completed"> Completed</option>
												</select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                               </br> <input type="submit" value="Submit" name="submit" class="btn btn-success d-none d-md-inline-block text-white">
                                            </div>
                                        </div>
                                    </div>

									
                                  
                                </form>
								   
                            </div>
                                
                            
                        </div>
                    </div>
                </div>
                </div>
                <?php } ?>
               
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Reviews</h4>
                                <h6 class="card-subtitle">view all reviews</code></h6>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Review Id</th>
                                                <th class="border-top-0">Food Name</th>
                                                <th class="border-top-0">Review</th>
                                                <th class="border-top-0">User Name</th>
                                                <th class="border-top-0">Submitted Date</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Edit</th>
                                                <th class="border-top-0">Delete</th>
                                        </thead>
                                        <tbody>
										 <?php 
												require "connection.php"; 
												$id=$userData['id'];
												$sql = "SELECT *,date(date) as date FROM food_review where did='$id'";
												$result = mysqli_query($conn, $sql);
												while($row = mysqli_fetch_array($result))
												{
												    
                        							$date=$row['date'];
                        							$newDate = date("d M, Y", strtotime($date));  
													$name=$row['food_name'];
													$image=$row['image'];
													$sql1 = "SELECT * FROM login where id=$id";
												$result1 = mysqli_query($conn, $sql1);
												$row1 = mysqli_fetch_array($result1);
												
																	?>
                                            <tr>
                                                <td><?php echo $row['frid'] ?></td>
                                                <td><?php echo $name ?></td>
                                                <td><?php echo $row['review'] ?></td>
                                                <td><?php echo $row1['name'] ?></td>
                                                <td><?php echo $newDate ?></td>
                                                <td><?php echo $row['status'] ?></td>
                                                <td><a href="reviews.php?id=<?php echo $row['frid']; ?>"class="btn btn-primary">Edit </a></td>
                                                <td>
			<?php echo" <a class='btn btn-danger' style='color:white' onClick=\"javascript: return confirm('Please confirm deletion');\" href='reviews.php?fid=".$row['frid']."'>Delete</a> "; ?>
			</td>
                                            </tr>
												<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
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
     <?php
 include("connection.php");
if(isset($_GET['fid']))
{
$uid=$_GET['fid'];
$insert2="delete from food_review where frid=$uid";
$sql_insert1=mysqli_query($conn,$insert2);
  echo "<script>
                window.location.href='reviews.php';
            </script>";
}
?>
</html>