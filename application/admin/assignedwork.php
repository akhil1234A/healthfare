<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
           header("Location:../index.php");// Redirect to login page if not logged in
    exit();
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
                                <img src="assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Admin
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
                                href="users.php" aria-expanded="false"><i class="me-3 fas fa-user"
                                    aria-hidden="true"></i><span class="hide-menu">Users</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="dietitians.php" aria-expanded="false"><i class="me-3  fas fa-user-md"
                                    aria-hidden="true"></i><span class="hide-menu">Dietitians</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="assignedwork.php" aria-expanded="false"><i class="me-3 fas fa-tasks"
                                    aria-hidden="true"></i><span class="hide-menu">Assigned Works</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="usersupport.php" aria-expanded="false"><i class="me-3 fas fa-envelope"
                                    aria-hidden="true"></i><span class="hide-menu">User Support</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="faqs.php" aria-expanded="false"><i class="me-3 fas fa-question"
                                    aria-hidden="true"></i><span class="hide-menu">FAQS</span></a></li>
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
                        <h3 class="page-title mb-0 p-0">Assigned Tasks</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Assigned Tasks</li>
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
					  <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Add Tasks</h2>
                                <form action="insert-task.php" method="post" >
                                    <div class="form-group">
                            
                                        <div class="row">
                                            
                                            <div class="col-md-6">
											<label class="col-md-12 mb-0" for="height">Task Type</label>
                                                <input type="text" name="type"  class="form-control ps-0 form-control-line form-control">
                                            </div>
											 <div class="col-md-6">
											 <label class="col-md-12 mb-0" for="height">Task Name</label>
                                                <input type="text" name="name"  class="form-control ps-0 form-control-line form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-md-6">
											<label class="col-md-12 mb-0" for="weight">Dietitian Name</label>
                                                <input type="text" name="dietitian"  class="form-control ps-0 form-control-line form-control">
                                            </div>
											 <div class="col-md-6">
											 <label class="col-md-12 mb-0" for="weight">Assigned Date</label>
                                                <input type="date" name="date"  class="form-control ps-0 form-control-line form-control">
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <label class="col-md-12 mb-0" for="age">Status</label>
                                            <div class="col-md-12">
                                                <select name="status"  class="form-control ps-0 form-control-line form-control">
												<option value="Pending">Pending</option>
												<option value="In Progress">In Progress</option>
												<option value="Completed">Completed</option>
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
				
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Assigned Tasks</h4>
                                <h6 class="card-subtitle">Tasks assigned by Admin to Dietitians</h6>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Task Id</th>
                                                <th class="border-top-0">Task Type</th>
                                                <th class="border-top-0">Task Name</th>
                                                <th class="border-top-0">Dietitian Name</th>
                                                <th class="border-top-0">Assigned Date</th>
                                                <th class="border-top-0">Status</th>
												 <th class="border-top-0">Edit</th>
												  <th class="border-top-0">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           	<?php 
															require "connection.php"; 
											$sql = "SELECT * FROM tasks ";
											$result = mysqli_query($conn, $sql);
											
											while($row = mysqli_fetch_array($result))
												
															{
																$tid=$row['tid'];
																?><tr>
                                                <td><?php echo $row['tid']; ?></td>
                                                <td><?php echo $row['type']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['dietitian']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
												<td><a href="edit-tasks.php?id=<?php echo $row['tid']; ?>"class="btn btn-primary">Edit </a></td>
															<td><?php echo" <a onClick=\"javascript: return confirm('Please confirm deletion');\" href='assignedwork.php?id=".$tid."'>
							<button class='btn btn-danger' style='color:white'> Delete</button></div>
							</a> "; ?></td>
												</tr>
												
				<?php  } ?>
                                             
                                        </tbody>
                                    </table>
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
$insert2="delete from tasks where tid=$uid";
$sql_insert1=mysqli_query($conn,$insert2);
  echo "<script>
                window.location.href='assignedwork.php';
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