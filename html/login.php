
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Tres chic</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #000000;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>

    <!--  Bootstrap 3-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">

 
    <!--  Slider -->
    <link rel="stylesheet" href="css/jquery.kenburnsy.css">

    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Web Icons Font -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/iconmoon.css">
    <link rel="stylesheet" href="css/et-line.css">
    <link rel="stylesheet" href="css/ionicons.css">

    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Tabs -->
    <link rel="stylesheet" type="text/css" href="css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="css/tabstyles.css" />

    <!-- Loader Style -->
    <link rel="stylesheet" href="css/loader-1.css">

    <!-- Costum Styles -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="favicon.ico">

    <!-- Modernizer & Respond js -->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
   
        
</head>

<body>

    <!-- Preloader -->
    <div class="cover"></div>

    <div class="header">
        <div class="container">
            <div class="logo">
                
                    <img src="img/logo1.png" alt="Logo">
                
            </div>
            
            <!-- Menu Hamburger (Default) -->
            <button class="main-menu-indicator" id="open-button">
                <span class="line"></span>
            </button>
            
            <div class="menu-wrap" style="background-image: url(img/co1.jpg)">
                <div class="menu-content">
                    <div class="navigation">
                        <span class="pe-7s-close close-menu" id="close-button"></span>
                        <div class="search-wrap js-ui-search">
                            <input class="js-ui-text" type="text" placeholder="Search Here...">
                            <span class="eks js-ui-close"></span>
                        </div>
                    </div>
                    <nav class="menu">
                    <div class="menu-list">
                        <ul>
                            <li class="menu-item-has-children"><a href="#">Home</a>
                                
                            <li><a href="about.html">About us</a></li>
                                <li class="menu-item-has-children"><a href="#">categories</a>
                                    <ul class="sub-menu">
                                        <li><a href="short-dress.html">Short Dresses</a></li>
                                        <li><a href="long-dress.html">Long dresses</a></li>
                                        <li><a href="jumpsuit.html">Jumpsuit</a></li>
                                        <li><a href="plussize.html">Plus Size</a></li>
                                    </ul>
                                </li>
                                 <li><a href="checkout.html">Checkout</a></li>
                                   <li><a href="login.html">Register</a></li>
                                <li><a href="contact.html">Feedback</a></li>
                              
                            </ul>
                        </div>
                    </nav>
                      <div class="hidden-xs">
                          <div class="menu-social-media">
                              <ul>
                                  <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
                                  <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
                                  <li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
                                  <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
                                  <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
                              </ul>
                          </div>
                        <div class="menu-information">
                            <ul>
                                <li><span>T:</span> 003 124 115</li>
                                <li><span>E:</span> info@mail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Menu Hamburger (Default) -->

        </div>
    </div>
    <form action="/action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
  <label for="psw-repeat"><b>User Id</b></label>
    <input type="text" placeholder="User Id" name="userid" required> 

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
  </div>
</form>




    <div class="footer margin-top">
        <div class="container">
            <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <h4>Tres chic</h4>
                                    <address>
                                        Kirtipur <br>
                                        Kathmandu <br>
                                        Nepal
                                    </address>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-md-push-8 col-sm-4 col-xs-12">
                        <div class="footer-inner">
                            <div class="footer-content">
                               <h4>CONTACT INFO</h4>
                                <p>
                                    T:+01 435616 <br>
                                    E:treschic@mail.com <br>
                                    W:www.treschic.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-inner">
                            <div class="footer-content">
                            <ul class="social-media">
                                <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
                                <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
                                <li><a href="#"><i class="iconmoon-flickr2"></i></a></li>
                                <li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
                                <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
                                <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
                            </ul>
                            <span class="copyright-mark">&copy; 2019 TRES CHIC, ALL RIGHTS RESERVED</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
 

    <a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i class="pe-7s-angle-up"></i></a>

    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script data-pace-options='{ "ajax": false }' src="js/vendor/pace.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/classie.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/vendor/jquery.velocity.min.js"></script>
    <script src="js/vendor/jquery.kenburnsy.min.js"></script>
    <script src="js/vendor/textslide.js"></script>
    
    <script src="js/vendor/tabs.js"></script>
    <script src="js/ef-slider.js"></script>    
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="js/vendor/jquery.social-buttons.min.js"></script>
    <script src="js/vendor/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
    <!-- Optional JavaScript -->
    
</body>
</html>