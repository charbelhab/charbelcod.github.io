<?php
session_start();
unset($_SESSION['job']);
unset($_SESSION['time']);
unset($_SESSION['level']);
unset($_SESSION['pf']);
unset($_SESSION['pt']);
unset($_SESSION['c']);
unset($_SESSION['a']);
unset($_SESSION['idd']);
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Job board HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="inndex.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                        <li><a href="inndex.php">Home</a></li>
                                        <?php
                                        
                                             if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                            echo "<li id = 'joblist'><a href='job_listing.php'>Find a Jobs </a></li>";
                                             }
                                            
                                             
                                            echo "<li><a href='about.php'>About</a></li>";
                                            
                                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true && isset($_SESSION["tag"])&& $_SESSION["tag"]=="c"){
                                                echo " <li><a href='form.php'>Post a Job</a></li>";
                                                 }
                                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                                echo "<li> <a href='contact.php'>Contact</a></li>";
                                                 }
                                           
                                            ?>
                                        </ul>
                                    </nav>
                                </div>    
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                <?php
                                
                                
                                if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                    echo "<div class='header-btn d-none f-right d-lg-block'>";

                                    if ($_SESSION["tag"]=='u'){
                                        echo "<a href='' style='pointer-events: none; cursor: default;'class='btn head-btn1'>".$_SESSION["name"]."</a>";
                                        }
                                        else{
                                            echo "<a href='comprofile.php' class='btn head-btn1'>".$_SESSION["name"]."</a>";
                                        }
                                    echo "&nbsp";
                                    
                                    echo "<a href='logout.php' class='btn head-btn2'>Logout</a>";
                                echo "</div>";
                                }
                                else{
                                    echo "<div class='header-btn d-none f-right d-lg-block'>";
                                    echo "<a href='signup.php' class='btn head-btn1'>Register</a>";
                                    echo "<a href='login.php' class='btn head-btn2'>Login</a>";
                                echo "</div>";
                                }


                                ?>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>About us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- Support Company Start-->
        <div class="support-company-area fix section-padding2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>What we are doing</span>
                                <h2><?PHP $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"])); 
$result= mysqli_query($globals['conn'],"SELECT count(name) from signup  ");
if ($row=mysqli_fetch_array($result)){
    echo $row[0] ;
} ?> Talented people Browse Jobs</h2>
                            </div>
                            <div class="section-tittle section-tittle2">
                                <h3>Our Main Mission</h3>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">We are working to help talented people 
									who's seeking to find the best job with the best salary 
									with the easiest way.</p>
                            </div>
                            <div class="section-tittle section-tittle2">
                                <h3>Our Network</h3>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Since inception, 
								We tried to cover as many as possible counrties and regions in Middle East ,
								We have covered a big part of Middle East , 
								Including Egypt, Cyprus, Canada, Nigeria. </p>
                            </div>
                            <div class="section-tittle section-tittle2">
                                <h3>Our Team</h3>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Our team is composed of three young 
								students trying to provide the right position to the right candidate . </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="assets/img/service/support-img.jpg" alt="">
                            <div class="support-img-cap text-center">
                                <p>Since</p>
                                <span>2022</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
       
       

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address : Lebanon
                                       </p>
                                    </li>
                                    <li><a >Phone : +961 1 324543</a></li>
                                    <li><a >Email : jobhunteer@gmail.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="inndex.php"> home</a></li>
                                    <?php
                                             if (isset($_SESSION["login"]) && $_SESSION["login"]==true && $_SESSION['tag']=='c'){
                                            echo " <li><a href='contact.php'>Contact Us</a></li>";
                                             }

                                             if (isset($_SESSION["login"]) && $_SESSION["login"]==true ){
                                                echo " <li><a href='job_listing.php'>Browse Jobs</a></li>";
                                                 }
                                    
                                    
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>FeedBack</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Just Give Us A Simple FeedBack ! </p>
                             </div>
                             <!-- Form -->
                             <div class="footer-form" >
                           
                               
                                     <form action="fbtodb.php"
                                     method="get" class="subscribe_form relative mail_part">
                                         <textarea rows="4"  name="fb" id="newsletter-form-email" placeholder="FeedBack"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' FeedBack '"> </textarea>
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
                                         </div>
                                         
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                
               <!--  -->
               <div class="row footer-wejed justify-content-between">
                       <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                          <!-- logo -->
                          <div class="footer-logo mb-20">
                            <a href="inndex.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                          </div>
                       </div>
                       <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span><?PHP $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"])); 
$result= mysqli_query($globals['conn'],"SELECT count(job_code) from job  ");
if ($row=mysqli_fetch_array($result)){
    echo $row[0] ;
} ?> </span>
                            <p>Job Posted</p>
                        </div>
                       </div>
                       <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="footer-tittle-bottom">
                                <span><?PHP $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"])); 
$result= mysqli_query($globals['conn'],"SELECT count(name) from signup  ");
if ($row=mysqli_fetch_array($result)){
    echo $row[0] ;
} ?></span>
                                <p>Intersted Talented Hunter</p>
                            </div>
                       </div>
                       <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <!-- Footer Bottom Tittle -->
                            <div class="footer-tittle-bottom">
                                <span><?PHP $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"])); 
$result= mysqli_query($globals['conn'],"SELECT count(entnum) from entreprise  ");
if ($row=mysqli_fetch_array($result)){
    echo $row[0] ;
} ?></span>
                                <p>Company</p>
                            </div>
                       </div>
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>



