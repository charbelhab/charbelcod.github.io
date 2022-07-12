<?php
session_start();
?>

           
    
            <!doctype html>
            <html class="no-js" lang="zxx">
                <head>
                    <link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
                <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
                <!-- Main Style Css -->
                <link rel="stylesheet" href="css/style.css"/>
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
                        <link rel="stylesheet" href="signup/css/style.css"/>
            
            
            
               </head>
            
               <body class="form-v4" >
                   
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
                                                      
                                                        <li><a href="about.php">About</a></li>
                                                        
                                                    </ul>
                                                </nav>
                                            </div>    
                                            <!-- Header-btn -->
                                            
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
               
                    <div class="page-content">
                        <div class="form-v4-content">
                            <div class="form-left">
                                <h2>INFOMATION</h2>
                                <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.</p>
                                <p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
                                <div class="form-left-last">
                                   <A href="signup.php"><input type="button" name="account" class="account" value="Your new ? "></A>
                                </div>
                            </div>
                            <form class="form-detail" action="checklogin.php" method="post" id="myform">
                                <h2>LOGIN</h2>
                                <?php
                                    if (isset($_SESSION["exist"]) && $_SESSION["exist"]==false){
                                        echo "<H4 style='color:red;'> You Have Entered Incorrect Info</H4>";
                                        session_destroy();
                                    }
                                ?>
                                <div class="form-row">
                                    <label for="your_email">Your Email</label>
                                    
                                    <input type="email" name="your_email" id="your_email"  class="input-text" >
                                </div>
                                <div class="form-group">
                                    <div class="form-row form-row-1 ">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" maxlength="12" minlength="8" id="password" class="input-text" required>
                                        <div>
                                    <SELECT name="tag">
                                       <option value="u">Login As User </option>
                                       <option value="c">Login As Company </option>
                                </SELECT>
                               
                                 </div>
                                        <div class="form-row-last">
                                            <input type="submit" name="register" class="register" value="login">
                                            <!-- <a href='forget.php' style="color: red;">Forget Password</a> -->
                                        </div>
                                        
                                    </div>
                                    
                            </form>
                        </div>
                    </div>
                    
                    <script>
                        // just for the demos, avoids form submit
                        jQuery.validator.setDefaults({
                              debug: true,
                              success:  function(label){
                                label.attr('id', 'valid');
                                },
                        });
                        $( "#myform" ).validate({
                              rules: {
                                password: "required",
                                comfirm_password: {
                                      equalTo: "#password"
                                }
                              },
                              messages: {
                                  first_name: {
                                      required: "Please enter a firstname"
                                  },
                                  last_name: {
                                      required: "Please enter a lastname"
                                  },
                                  your_email: {
                                      required: "Please provide an email"
                                  },
                                  password: {
                                      required: "Please enter a password"
                                  },
                                  
                              }
                        });
                    </script>
                
                
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