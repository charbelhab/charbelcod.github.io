<!doctype html>
<?PHP
session_start();

$globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
$e=$_GET['e'];
$result= mysqli_query($globals['conn'],"SELECT entreprise.name , job.level  ,entreprise.number ,country.country ,entreprise.email,  job.time ,major.major ,job.attention ,job.daysoff ,job.salary,job.job_code,job.date  FROM (((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id ) INNER JOIN (country) ON country.country_id = job.country_id ) WHERE job.job_code='$e' " );
?>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?PHP
                $result= mysqli_query($globals['conn'],"SELECT entreprise.name ,country.country ,major.major ,job.salary  FROM (((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id ) INNER JOIN (country) ON country.country_id = job.country_id ) WHERE job.job_code='$e' " );
            while ($row = mysqli_fetch_array($result))
                        {
                   echo " <title>$row[0] - $row[2] </title>";
                                        }
                                        ?>
                            
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
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
       <!-- Header Start -->

        <!-- Header End -->
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" onclick='self.close();' data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <?PHP
                             $result= mysqli_query($globals['conn'],"SELECT major.major   FROM ((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id )  WHERE job.job_code='$e' " );
                        while ($row = mysqli_fetch_array($result))
                                        {
                                            echo"<h2>$row[0]</h2>";
                                        }
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120" >
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div  onclick='self.close();'class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                            <div class="company-img company-img-details">
                                <?PHP
                                 $result= mysqli_query($globals['conn'],"SELECT entreprise.logo from entreprise INNER JOIN job ON entreprise.entnum=job.entnum WHERE job.job_code='$e'"); 
                                 while ($row = mysqli_fetch_array($result))
                                 {  
                                 echo '<div class="company-img" >
                                            <img src="image/'.$row[0].'" width="90" 
                                            height="90" alt="">
                                        </div>';
                                 }
                                        ?>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                         <?PHP
                                          $result= mysqli_query($globals['conn'],"SELECT entreprise.name ,country.country ,major.major ,job.salary  FROM (((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id ) INNER JOIN (country) ON country.country_id = job.country_id ) WHERE job.job_code='$e' " );
                        while ($row = mysqli_fetch_array($result))
                                        {
                                            echo"<h4>$row[0]</h4>";
                                        
                            
                            
                                       
                                   echo ' </a>
                                    <ul>';
                                        
                                        echo"<li><i class='fas fa-map-marker-alt'></i>$row[1]</li>";
                                        echo"<li>$row[2]</li>";
                                        echo"<li>$row[3]$</li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <?PHP
                                          $result= mysqli_query($globals['conn'],"SELECT job.attention  FROM job  WHERE job.job_code='$e' " );
                        while ($row = mysqli_fetch_array($result))
                                        {
                                           echo " <p>$row[0]</p> ";  
                                        }
                                        ?>
                                
                            </div>
                            
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4> Experience</h4>
                                </div>
                               <ul>
                               <?PHP
                               $result= mysqli_query($globals['conn'],"SELECT job.experience  FROM job  WHERE job.job_code='$e' " );
                        while ($row = mysqli_fetch_array($result))
                                        
                                        {
                                            $row1=explode("//",$row[0]);
                                            $len=count($row1);
                                            
                                            for($i=0 ; $i<$len ; $i++){
                                            echo " <li>$row1[$i]</li> ";  
                                            }
                                        }
                                        ?>
                               
                                   
                               </ul>
                               <BR /><BR />
                               <div class="small-section-tittle">
                                    <h4> Education</h4>
                                </div>
                               <ul>
                               <?PHP
                               $result= mysqli_query($globals['conn'],"SELECT job.education  FROM job  WHERE job.job_code='$e' " );
                        while ($row = mysqli_fetch_array($result))
                                        
                                        {
                                            $row1=explode("//",$row[0]);
                                            $len=count($row1);
                                            
                                            for($i=0 ; $i<$len ; $i++){
                                            echo " <li>$row1[$i]</li> ";  
                                            }
                                        }
                                        ?>
                               
                                   
                               </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                          <?PHP
                        $result= mysqli_query($globals['conn'],"SELECT job.date,country.country,job.daysoff,job.time,job.salary  FROM job INNER JOIN country ON job.country_id=country.country_id  WHERE job.job_code='$e' " );
                        while ($row = mysqli_fetch_array($result))
                                        {
                                            $row1=explode(" ",$row[0]);
                                           echo " <li>Posted date : <span>$row1[0]</span></li>"; 
                                           echo "<li>Location : <span>$row[1]</span></li> ";
                                           echo "<li>Days Off : <span>$row[2]</span></li> ";
                                           echo "<li>Job time : <span>$row[3]</span></li> ";
                                           $s=$row[4]*12;
                                           echo "<li>Salary :  <span>$s $ yearly</span></li> ";
                                        }
                                        ?>
                                
                              
                              
                              
                          </ul>
                         <div class="apply-btn2">
                             <?PHP
                        $result= mysqli_query($globals['conn'],"SELECT entreprise.email FROM (job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum )  WHERE job.job_code='$e' " );
                        while ($row = mysqli_fetch_array($result))
                                        { 
                        if ($_SESSION["tag"]=="u" ){
                            
                                                echo"<a class='btn' href='mailto:$row[0]'>Apply</a>";
                                               
                                            } 
                                            
                                        }
                                            ?>
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                           <ul>
                           <?PHP
                        $result= mysqli_query($globals['conn'],"SELECT entreprise.email,entreprise.name FROM (entreprise INNER JOIN (job) ON entreprise.entnum=job.entnum )  WHERE job.job_code='$e' " );
                        while ($row = mysqli_fetch_array($result))
                                        { 
                                            echo "
                                            <li>Name: <span>$row[1] </span></li>
                                            <li>Email: <span>$row[0]</span></li>
                                            ";
                                        }
                                            ?>
                            
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

    </main>
    
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