<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HealthFare</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
 <style>

.whatsapp-icon {
  position: fixed;
  bottom: 20px;
  left: 20px;
  z-index: 9999;
}

.whatsapp-icon img {
  width: 60px;
  height: 60px;
}

</style>

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <a href="https://wa.me/+919037356274" class="whatsapp-icon" target="_blank">
    <img src="assets/img/whatsapp.png" alt="WhatsApp Icon">
  </a>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">healthfare.project@gmail.com</a>
        <i class="bi bi-phone"></i><a href="tel: 91 7994485573" type="tel"> +91 7994485573</a>
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

	<img src="assets/img/logo.png" width="250px" height="auto"/>

      <!--h1 class="logo me-auto"><a href="index.php">HealthFare</a></h1-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#appointment">Appointment</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="application/index.php" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Sign Up</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style='  background: url("assets/img/4.jpg") top center;
  background-size: cover;'>
    <div class="container">
      <h1>Welcome to <b>HealthFare</b></h1>
      <h2>Your Personalized Health Companion</h2>
      <a href="application/index.php" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose HealthFare?</h3>
              <p>
                At HealthFare, we understand that maintaining a healthy lifestyle is a personal journey, and we are here to support you 
				every step of the way. Our platform goes beyond generic solutions, offering personalized diet plans crafted to meet your 
				unique health needs and preferences. What sets us apart is the access to expert guidance from certified dietitians and 
				nutritionists, ensuring you receive the best advice for your health goals
              </p>

            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Personalized Diet Plans</h4>
                    <p>Our platform provides personalized diet recommendations tailored to your individual health needs and preferences.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Expert Guidance</h4>
                    <p>Access expert dietitians and nutritionists for personalized consultations and advice on your health journey.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Health Tracking Made Easy</h4>
                    <p>Effortlessly track your health conditions, allergies, and dietary preferences for a comprehensive health profile.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
      <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative" style=' background: url("assets/img/1.jpg") center center no-repeat;
  background-size: cover;'>
            <a href="https://www.youtube.com/watch?v=84CznVlkNaM" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>About Us</h3>
            <p>Welcome to HealthFare, where your journey to a healthier lifestyle begins. We are a dedicated team of health 
			enthusiasts, dietitians, and technology experts on a mission to make nutrition and well-being accessible to everyone.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Our Vision:</a></h4>
              <p class="description">Empowering individuals to take control of their health through personalized and sustainable dietary choices.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">What Drives Us:</a></h4>
              <p class="description">Passion for health, a commitment to innovation, and the belief that everyone deserves 
			  personalized nutrition guidance</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">What Sets Us Apart:</a></h4>
              <p class="description">We understand that each person is unique, and so are their health needs. HealthFare takes 
			  a personalized approach, considering your health conditions, dietary preferences, and lifestyle to provide tailored 
			  recommendations.</p>
			  <p class="description">Our team includes certified dietitians and nutrition experts who ensure that 
			   the information and recommendations you receive are backed by science and expertise.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   
    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Schedule an appointment with our certified dietitians to receive expert guidance tailored to your unique health needs.
		  Whether you're seeking advice on managing a specific health condition, looking to improve your diet, or have questions 
		  about nutrition, our dedicated team is here to support you.</p>
        </div>

        <form action="appointments.php" method="post">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" style="padding:4%">
             
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" style="padding:4%">
          
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" style="padding:4%">
             
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" style="padding:4%">
            
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select" style="padding:4%">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select" style="padding:4%">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
         
          </div>
         
          <div class="text-center"></br><button type="submit" name="submit" class="btn" style="background: #1977cc; border: 0; 
		  padding: 10px 35px; color: #fff;transition: 0.4s;border-radius: 50px;">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Explore commonly asked questions about our platform, services, and features. Find quick answers to ensure 
		  you get the most out of your HealthFare experience. If you can't find what you're looking for, feel free to 
		  contact us for personalized assistance.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is HealthFare?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  HealthFare is an innovative platform that connects users with certified dietitians, 
				  providing personalized nutrition guidance and support.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">How does HealthFare work? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Users can sign up, input their health information, and see personalized recommendations.
				  User can also schedule appointments with dietitians, read blogs and check BMI from our platform. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Is my personal information secure on HealthFare? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
					Yes, we take privacy seriously. HealthFare employs robust security measures to ensure the confidentiality of 
					your personal and health-related data.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How can I schedule an appointment with a dietitian? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
				To book an appointment, go to the "Make an Appointment" section, fill out the form, and our team will contact you with available slots.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Can I add family members to my account? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
					Yes, you can. Use the "Add a Family Member" feature in your profile to include your family members and manage their health information.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

 


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Have questions or need support? Reach out to us!</p>
        </div>
      </div>

      

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Assabah Arts And Science College, Valayamkulam</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:healthfare.project@gmail.com">healthfare.project@gmail.com</a></p>

              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><a href="tel: 91 7994485573" type="tel"> +91 7994485573</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="contact.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required style="padding:4%">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required style="padding:4%">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required style="padding:2%">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>

              <div class="text-center"></br><button type="submit" name="submit" class="btn" style="background: #1977cc; border: 0; 
		  padding: 10px 35px; color: #fff;transition: 0.4s;border-radius: 50px;">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
           <h4 class="mb-4">HealthFare</h4>
            <p>
              Assabah Arts And Science College, <br>
              Valayamkulam<br>
              Malappuram <br><br>
              <strong>Phone:</strong> <a href="tel: 91 7994485573" type="tel"> +91 7994485573</a><br>
              <strong>Email:</strong> <a href="mailto:healthfare.project@gmail.com">healthfare.project@gmail.com</a><br>
            </p>
          </div>
			
		  
          <div class="col-lg-2 col-md-6 footer-links">
            <h4 class="mb-4">Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#appointment">Appointment</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
			
		  
          </div>

               <div class="col-lg-3 col-md-6 footer-contact">
			  <h4 class="mb-4">Our Team</h4>
			  <ul class="list-unstyled">
				<li><i class="bx bx-user mb-2"></i> Akhil Anwer M</li>
				<li><i class="bx bx-user mb-2"></i> Athul Krishnan K.R</li>
				<li><i class="bx bx-user mb-2"></i> Mohammed Dilshad P.L</li>
				<li><i class="bx bx-user mb-2"></i> Mohammed Arshad C</li>
			  </ul>
			</div>

	     
     

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>HealthFare</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
     
        </div>
      </div>
	  
	  
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>