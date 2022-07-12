
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
<?php
session_start();
unset($_SESSION['job']);
unset($_SESSION['time']);
unset($_SESSION['level']);
unset($_SESSION['pf']);
unset($_SESSION['pt']);
unset($_SESSION['c']);

unset($_SESSION['idd']);
?>
   <body onload="myFunction()">
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

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Find the most exciting startup jobs</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
              
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Our Services Start -->
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED TOURS Packages</span>
                            <h2>Browse Top Categories </h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                            <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=1;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Python Developer</h5></a>';
                               
                            }
                            else{
                                
                               echo"<h5>Python developer</h5>";
                            }
                               ?>
                               
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 1 and showhide='show' ; ");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    
                                    echo "<span>";
                                    echo$row[0];
                                    echo"</span>";
                                    
                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=2;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>web designer</h5></a>';
                               
                            }
                            else{

                               echo"<h5>web designerr</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 2 and showhide='show' ; ");
                                
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                              
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=3;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>javascript </h5></a>';
                               
                            }
                            else{

                               echo"<h5>javascript</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 3 and showhide='show' ; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=4;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Mobile Application</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Mobile Application</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 4 and showhide='show'; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-helmet"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=5;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Database administrator</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Database administrator</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 5  and showhide='show'; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=6;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>IT technician </h5></a>';
                               
                            }
                            else{

                               echo"<h5>IT technician </h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 6 and showhide='show'; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-real-estate"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=7;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>java developer</h5></a>';
                               
                            }
                            else{

                               echo"<h5>java developer</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 7 and showhide='show'; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=8;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Content Writer</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Content Writer</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 8 and showhide='show'; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                </div>
<!--_________________________________________________________________________________-->
<!--_____________________________________________________________________________________________-->
<!--____________________________________________________________________________________________-->
<!--_____________________________________________________________________________________-->
<div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=9;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Support specialist</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Support specialist</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 9 and showhide='show'; ");
                                while ($row = mysqli_fetch_array($result))
                                {
                                    
                                    echo "<span>";
                                    echo$row[0];
                                    echo"</span>";
                                    
                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=10;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Systems analyst</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Systems analyst</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 10 and showhide='show' ; ");
                                
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=11;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Network engineer</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Network engineer</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 11 and showhide='show'; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=12;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Computer scientist</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Computer scientist</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 12 and showhide='show'; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-helmet"></span>
                            </div>
                            <div class="services-cap">
                        
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=13;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Software engineer</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Python developer</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 13 and showhide='show' ; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=14;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5> IT security specialist </h5></a>';
                               
                            }
                            else{

                               echo"<h5> IT security specialist </h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 14 and showhide='show' ; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-real-estate"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=15;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Data scientist</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Data scientist</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 15 and showhide='show' ; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                               
                               <?PHP
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                $maj=16;
                                echo'<a href="job_search2.php?id2='.$maj.'"><h5>Web administrator</h5></a>';
                               
                            }
                            else{

                               echo"<h5>Web administrator</h5>";
                            }
                               ?>
                               <span>
                               <?PHP
                                $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                $result=mysqli_query($globals["conn"],"SELECT COUNT(*) FROM job WHERE major_id = 16 and showhide='show' ; ");
                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    
                                                    echo "<span>";
                                                    echo$row[0];
                                                    echo"</span>";
                                                    
                                                }
                                
                                ?></span>
                            </div>
                        </div>
                    </div>
                </div>

<!--_________________________________________________________________________________-->
<!--_____________________________________________________________________________________________-->
<!--____________________________________________________________________________________________-->
<!--_____________________________________________________________________________________-->
                <!-- More Btn -->
                <!-- Section Button -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <?PHP
                             if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                            echo "<a href='job_listing.php' class='border-btn2'>Browse All job</a>";
                             }
                             else{
                                echo "<a href='' style='pointer-events: none; cursor: default;' class='border-btn2'>Login For More</a>";
                             }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
         
        <!-- Featured_job_start -->
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Recent Job</span>
                            <?php
                            if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                            echo"<h2>Featured Jobs</h2>";
                        }
                            else{
                                echo"<h2>Login For More</h2>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="single-job-items mb-30">
                                    <div class="job-items">
                                       
                                        <div class="job-tittle job-tittle2">
                                        <?PHP
                                        $globals["conn"]=mysqli_connect("localhost","root","")or die(mysqli_error($globals["conn"]));
                                        mysqli_select_db($globals["conn"],"jobhunter") or die(mysqli_error($globals["conn"]));
                                        
                                        $result= mysqli_query($globals['conn'],"SELECT entreprise.name , job.level  ,entreprise.number ,country.country ,entreprise.email,  job.time ,major.major ,job.attention ,job.daysoff ,job.salary , job.date,job.job_code,entreprise.logo  FROM (((job INNER JOIN (entreprise) ON entreprise.entnum=job.entnum ) INNER JOIN (major) ON major.major_id = job.major_id ) INNER JOIN (country) ON country.country_id = job.country_id ) order by job.job_code DESC LIMIT 4;");
                                        
                                        if (isset($_SESSION["login"]) && $_SESSION["login"]==true){
                                       
                                            while ($row = mysqli_fetch_array($result))
                                            {
                                                
                                                echo "<div class='single-job-items mb-30' style = 'height: 150px; width: 800px;'>";
                                                echo    "<div class='job-items'>";
                                                echo '<div class="company-img" >
                                            <img src="image/'.$row[12].'" width="90" 
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
                                                
                                                echo"<a href='job_details.php?e=$row[11]'>Details</a>";
                                                
                                                   
                                                echo'</div>';
                                                echo'</div>';
                                                
                                            }}
                                        
                                        
                                            ?>
                                        </div>
                                    </div>
                                    
        </section>
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Apply process</span>
                            <h2> How it works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Search a job</h5>
                               <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. Apply for job</h5>
                               <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. Get your job</h5>
                               <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- How  Apply Process End-->
        <!-- Testimonial Start -->
 
        <!-- Testimonial End -->
        
        <!-- Blog Area Start -->
        
        <!-- Blog Area End -->

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
