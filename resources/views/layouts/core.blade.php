<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <meta name="author" content="Themefisher.com">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
   <title>Halaman @yield('title')</title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css') }}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('plugins/animate-css/animate.css') }}">
    <!-- Icofont -->
    <link rel="stylesheet" href="{{asset('plugins/icofont/icofont.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">


</head>


<body data-spy="scroll" data-target=".fixed-top">



<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" class="img-fluid b-logo">
                <br>
                <h7 class="Garnesia">Garnesia</h7>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
              </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                            <a class="dropdown-item " href="index.html">
                                Home-1
                            </a>
                            <a class="dropdown-item " href="index-2.html">
                                Home-2
                            </a> 
                            <a class="dropdown-item " href="index-3.html" target="blank">
                                Onepage
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="about.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="service.html">Budidaya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="pricing.html">Media Tanam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="blog.html">Belanja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="contact.html">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--MAIN HEADER AREA END -->

@yield('contents')

<!--  FOOTER AREA START  -->
<section id="footer" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-8 col-md-8">
                <div class="footer-widget footer-link">
                    <h4>We concern about you<br> to grow business rapidly.</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore ipsam hic non sunt recusandae atque unde saepe nihil earum voluptatibus aliquid optio suscipit nobis quia excepturi vel quod, iure quae.</p>
                </div>
            </div>
            <div class="col-lg-2 col-sm-4 col-md-4">
                <div class="footer-widget footer-link">
                    <h4>About</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6 col-md-6">
                <div class="footer-widget footer-link">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">How it Works</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Report Bug</a></li>
                        <li><a href="#">License</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="footer-widget footer-text">
                    <h4>Our location</h4>
                    <p class="mail"><span>Mail:</span> promdise@gmail.com</p>
                    <p><span>Phone :</span>+202-277-3894</p>
                    <p><span>Location:</span> 455 West Orchard Street Kings Mountain, NC 28086,NOC building</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer-copy">
                    © 2018 Promodise inc. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</section>
<!--  FOOTER AREA END  -->

   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
   <!-- Woow animtaion -->
    <script src="plugins/counterup/wow.min.js"></script>
    <script src="plugins/counterup/jquery.easing.1.3.js"></script>
     <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Google Map -->
    <script src="plugins/google-map/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>   
    <!-- Contact Form -->
    <script src="plugins/jquery/contact.js"></script>
    <script src="js/custom.js"></script>

  </body>
  </html>
   