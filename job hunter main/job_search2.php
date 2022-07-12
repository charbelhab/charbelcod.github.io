<?php
session_start();
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
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
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
                                <h2>Get your job</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start 
    -->
    <form action="job_search.php" method="post">
    <div class="job-listing-area pt-120 pb-120">
            <div  class="container">
                <div class="row">
                    <!-- Left content -->
                   
                            <div  class="col-12">
                                    <div class="small-section-tittle2 mb-45">
                                    
                                    <h4> <a href='job_listing.php' class='btn head-btn1'>Search Job Filters</a></h4>
                                </div>
                            </div>
                       
                    <div style="visibility: hidden"class="col-xl-3 col-lg-3 col-md-4">
                        
                        <!-- Job Category Listing start -->
                        <div class="job-category-listing mb-50">
                            <!-- single one -->
                            <div class="single-listing">
                               <div style="visibility: hidden" class="small-section-tittle2">
                                     <h4>Job Category</h4>
                               </div>
                                <!-- Select job items start -->
                                <div  style="visibility: hidden" class="select-job-items2">
                                    <select name="job" disabled>
                                    <option value="any">any</option>
                                    <option value="Python Developer">Python developer</option>
                                    <option value="Web Designer ">web designer </option>
                                    <option value="Javascript">javascript</option>
                                    <option value="Mobile Application">Mobile Application</option>
                                    <option value="Database administrator">Database administrator</option>
                                    <option value=" IT technician"> IT technician</option>
                                    <option value="Java Developer">java developer</option>
                                    <option value="Content Writer">Content Writer</option>

                                    <option value="Support specialist">Support specialist</option>
                                    <option value="Systems analyst">Systems analyst</option>
                                    <option value="Network engineer">Network engineer</option>
                                    <option value="Computer scientist">Computer scientist</option>
                                    <option value="Software engineer">Software engineer</option>
                                    <option value="IT security specialist">IT security specialist</option>
                                    <option value="Data scientist">Data scientist</option>
                                    <option value="Web administrator">Web administrator</option>
                                    </select>
                                </div>
                                <!--  Select job items End-->
                                <!-- select-Categories start -->
                                <div style="visibility: hidden"  class="select-Categories pt-80 pb-50">
                                    <div  style="visibility: hidden" class="small-section-tittle2">
                                        <h4>Job Time</h4>
                                    </div>
                                    <label class="container">any
                                        <input type="radio" name = "rb" value="any" onclick="this.checked=false;">
                                        <span class="checkmark"></span>
                                    </label> 

                                    <label class="container">full Time
                                        <input type="radio" name = "rb" value="full time"onclick="this.checked=false;">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">part Time
                                        <input type="radio" name = "rb" value="part time"onclick="this.checked=false;" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container" >remote
                                        <input type="radio" name = "rb" value="remote" onclick="this.checked=false;">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">freelance
                                        <input type="radio" name = "rb" value="freelance"onclick="this.checked=false;" >
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <!-- single two -->
                            <div style="visibility: hidden" class="single-listing">
                               <div class="small-section-tittle2">
                                     <h4>Job Location</h4>
                               </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                <select name="country" disabled> 
                            <option value="The United Kingdom">The United Kingdom</option>
                            <option value="Germany">Germany</option>
                            <option value="China">China</option>
                            <option value="Hong Kong ">Hong Kong</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Australia">Australia</option>
                            <option value="Canada">Canada</option>
                            <option value="France">France</option>
                            <option value="USA">USA</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Kuwait">Kuwait</option>
                       
                         </select>
                                </div>
                                <!--  Select job items End-->
                                <!-- select-Categories start -->
                                <div style="visibility: hidden" class="select-Categories pt-80 pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Experience</h4>
                                    </div>
                                    <label class="container">Any
                                        <input type="radio" name="level"  value="any"    onclick="this.checked=false;">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Biginner
                                        <input type="radio" name="level" value="Biginner"onclick="this.checked=false;">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Medium
                                        <input type="radio" name="level" value="Medium" onclick="this.checked=false;">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Intermediate
                                        <input type="radio" name="level" value="Intermediate" onclick="this.checked=false;">
                                        <span class="checkmark"></span>
                                    </label>
                                    
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <!-- single three -->
                            <div  class="single-listing">
                                <!-- select-Categories start -->
                                <!-- <div class="select-Categories pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Posted Within</h4>
                                    </div>
                                    <label class="container">Any
                                        <input name="date" type="radio" >
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Today
                                        <input name="date" type="radio" checked="checked active">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 2 days
                                        <input name="date" type="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 3 days
                                        <input name="date" type="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 5 days
                                        <input name="date" type="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Last 10 days
                                        <input name="date" type="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                                <!-- select-Categories End -->
                            </div>
                            <div style="visibility: hidden" class="single-listing">
                                <!-- Range Slider Start -->
                                <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                                    <div class="small-section-tittle2">
                                        <h4>Filter Jobs</h4>
                                    </div>
                                    <div class="widgets_inner">
                                        <div class="range_item">
                                            <p>from</p>
                                            <input type = "number" min="0" max="16777215" value="0" name="pricefrom" readonly /> 
                                            <p>to</p>
                                            <input type = "number" min="0" max="16777215" value="10000" name="priceto" readonly />
                                            
                                        </div>
                                        <BR />
                                        
                                        <a href='job_listing.php' class='btn head-btn1'>Research</a>
                                    </div>
                                    <div class="header-btn d-none f-right d-lg-block">
                                   
                                    
                                </div>
                                </aside>
                              <!-- Range Slider End -->
                            </div>
                        </div>
                        <!-- Job Category Listing End -->
                    </div>
                    
</form>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <?PHP
                                            $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                            mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                           $db=$globals["conn"];
                                           if (isset($_GET['id2'])){
                                               $id2=$_GET['id2'];
                                               
                                            $resultcount= mysqli_query($globals['conn'],"SELECT COUNT(entnum) FROM job WHERE major_id='$id2' and showhide='show'");
                                           
                                           
                                            $row = mysqli_fetch_array($resultcount);
                                            $_SESSION['a']=$row[0];
                                            $a=$_SESSION['a'];
                                           }
                                            else{
                                                $a=$_SESSION['a'];
                                            }
                                           echo "<span>".$a." jobs found </span>";
                                           
                                            ?>
                                            <div class="select-job-items">
                                                <span>Sort by</span>
                                                <select name="select">
                                                    <option value="">None</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!-- Count of Job list End -->
                                <!-- single-job-content -->
                                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                       
                                        <div class="job-tittle job-tittle2">
                                        <?PHP
                                        $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                        mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                        $limit = 5;  
                                        if (isset($_GET["page"])) {
                                            $page  = $_GET["page"]; 
                                            } 
                                            else{ 
                                            $page=1;
                                            };  
                                    $start_from = ($page-1) * $limit;  
                                        if (isset($_GET['id2'])){
                                            $_SESSION['idd']=$_GET['id2']; 
                                            $idd=$_SESSION['idd'];
                                        
                                        }
                                        else{
                                            $idd=$_SESSION['idd'];
                                        }
                                            $result= mysqli_query($globals['conn'],"SELECT entreprise.name , job.level  ,entreprise.number ,country.country ,entreprise.email,  job.time ,major.major ,job.attention ,job.daysoff ,job.salary,job.job_code,entreprise.logo   FROM (((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id ) INNER JOIN (country) ON country.country_id = job.country_id)  WHERE job.major_id= '$idd' and job.showhide='show' order by job.entnum DESC LIMIT $start_from, $limit ");
                                            echo '<div>';
                                            while ($row = mysqli_fetch_array($result))
                                            {
                                                
                                                echo "<div class='single-job-items mb-30' style = 'height: 150px; width: 800px;'>";
                                                echo    "<div class='job-items'>";
                                                echo '<div class="company-img" >
                                            <img src="image/'.$row[11].'" width="90" 
                                            height="90" alt="">
                                        </div>';
                                                echo           "<div class='job-tittle job-tittle2'>";
                                                echo           '<h4>'. $row[0] .'</h4>';
                                                                
                                                echo      '<ul>';
                                                echo          '<li>' .$row[6].'</li>';
                                                echo           '<li><i class="fas fa-map-marker-alt"></i>'.$row[3].'</li>';
                                                echo           '<li>'.$row[9].'$</li>';
                                                echo       '</ul>';
    
                                               
                                                echo   '</div>';
                                                echo'</div>';
                                                echo'<div class="items-link items-link2 f-right" style = "width: 300x;" >';
                                                
                                                echo"<a href='job_details.php?e=$row[10]'>Details</a>";
                                                
                                                   
                                                echo'</div>';
                                                echo'</div>';
                                                
                                            }
                                               
                                            $total_records = $a;
                                            $total_pages = ceil($total_records / $limit); 
                                           
                                          
                                            
                                            echo ' <div class="single-wrap d-flex justify-content-center">';
                                           
                                            $pagLink = "<ul class='pagination justify-content-start'>";
                                            if (isset($_GET['page'])){  
                                                $so=$_GET['page'];
                                                
                                                $cont=0;
                                                
                                            }
                                            else{
                                                $cont=0;
                                                $so=1;
                                            }
                                            
                                            
                                            $so++;
                                            
                                            
    
                                            for ($i=$so; $i<=$total_pages; $i++) {
                                                $cont++;
                                                          $pagLink .= "<li class='page-item' ><a class='page-link' href='job_search2.php?page=".$i."'>".$i."</a></li>";
                                                          if ($cont >=3){
                                                              break;
                                                          }
                                                              
                                            }
                                            echo $pagLink . "</ul>"; 
                                           
                                            echo '</div>' ;
                                            if (isset($_GET['page']) && $so>2){  
                                                echo "<BR /> <BR /> ";
                                                
                                                echo"<a class=border-btn2 href='job_search2.php?page=".($so-2)."'>".'Back'."</a>";
                                            }
                                            if ($so <= $total_pages){
                                            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                                            echo"<a class=border-btn2 href='job_search2.php?page=".$so."'>".'Next'."</a>";
                                            }
                                            echo "</div>";
                                        
                                       
                                       
                                      ?>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
       
        
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address :Your address goes
                                        here, your demo address.</p>
                                    </li>
                                    <li><a href="#">Phone : +8880 44338899</a></li>
                                    <li><a href="#">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#"> View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                             </div>
                             <!-- Form -->
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
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
                            <span>5000+</span>
                            <p>Talented Hunter</p>
                        </div>
                       </div>
                       <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="footer-tittle-bottom">
                                <span>451</span>
                                <p>Talented Hunter</p>
                            </div>
                       </div>
                       <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <!-- Footer Bottom Tittle -->
                            <div class="footer-tittle-bottom">
                                <span>568</span>
                                <p>Talented Hunter</p>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

		<!-- Jquery Slick , Owl-Carousel Range -->
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