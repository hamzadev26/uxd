<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Affordable Branding & Design Services | UXD Consults UK</title>
  <meta name="description" content="UXD Consults is a leading branding and design agency that provides affordable branding and design services to businesses of all sizes.">
  <meta name="keywords" content="branding, design, agency, affordable, branding and design services, branding and design agency, branding and design company, branding and design firm, branding and design services, branding and design company, branding and design firm, branding and design services">
  <meta name="author" content="UXD Consults">
  <meta name="robots" content="index, follow">
  <!-- Stylesheets -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Teko:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fontawesome-all.css" rel="stylesheet">
  <link href="css/owl.css" rel="stylesheet">
  <link href="css/flaticon.css" rel="stylesheet">
  <link href="css/linoor-icons-2.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/jquery-ui.css" rel="stylesheet">
  <link href="css/jquery.fancybox.min.css" rel="stylesheet">
  <link href="css/hover.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jarallax.css">
  <link href="css/custom-animate.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <!-- rtl css -->
  <link href="css/rtl.css" rel="stylesheet">
  <!-- Responsive File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Color css -->
  <link rel="stylesheet" id="jssDefault" href="css/colors/color-default.css">

  <link rel="shortcut icon" href="images/favicon.png" id="fav-shortcut" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" id="fav-icon" type="image/x-icon">

  <!-- Responsive Settings -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

  <div class="page-wrapper">

    <!-- Main Header -->
    <header class="main-header header-style-one">

      <!-- Header Upper -->
      <div class="header-upper">
        <div class="inner-container clearfix">
          <!--Logo-->
          <div class="logo-box">
            <div class="logo"><a href="/" title="UXD Consults"><img src="images/web-logo.png" id="thm-logo"
                  alt="UXD Consults" title="UXD Consults"></a></div>
          </div>
          <div class="nav-outer clearfix">
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span class="txt">Menu</span>
            </div>

            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md navbar-light">
              <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                <ul class="navigation clearfix">
                  <li class="{{ request()->path() === '' ? 'current' : '' }}"><a href="/">Home</a>
                  </li>
                  <li class="{{ request()->is('about-us') ? 'current' : '' }} dropdown">
                    <a href="/about-us">About Us</a>
                  </li>
                  <li class="{{ request()->is('services', 'web-design', 'app-development', 'ui-ux-design', 'branding', 'content-writing', 'seo') ? 'current' : '' }} dropdown"><a href="/services">Services</a>
                    <ul>
                      <li><a href="/web-design">Website Development</a></li>
                      <li><a href="/app-development">App Development</a></li>
                      <li><a href="/ui-ux-design">UI/UX Designing</a></li>
                      <li><a href="/branding">Branding</a></li>
                      <li><a href="/content-writing">Content Writing</a></li>
                      <li><a href="/seo">SEO</a></li>
                      
                      
                    </ul>
                  </li>
                  <li class="{{ request()->is('portfolio') ? 'current' : '' }} dropdown"><a href="/portfolio">Portfolio</a>
                  </li>
                  <li class="{{ request()->is('our-process') ? 'current' : '' }} dropdown"><a href="/our-process">Our Process</a>
                  </li>
                  <li class="{{ request()->is('contact-us') ? 'current' : '' }} dropdown"><a href="/contact-us">Contact Us</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>

          <div class="other-links clearfix">
            <div class="link-box">
              <div class="call-us">
                <a class="link" href="tel:+447587864204">
                  <span class="icon"></span>
                  <span class="sub-text">Call Anytime</span>
                  <span class="number">+44 758 7864 204</span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!--End Header Upper-->

    </header>
    <!-- End Main Header -->

    <!--Mobile Menu-->
    <div class="side-menu__block">


      <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
      </div><!-- /.side-menu__block-overlay -->
      <div class="side-menu__block-inner ">
        <div class="side-menu__top justify-content-end">

          <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png" alt=""></a>
        </div><!-- /.side-menu__top -->


        <nav class="mobile-nav__container">
          <!-- content is loading via js -->
        </nav>
        <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
        <div class="side-menu__content">
          <p>We are a digital agency providing and catering to wide spectrum of digital design, development
            and marketing services.</p>
          <p><a href="mailto:support@uxdconsults.com">support@uxdconsults.com</a> <br> <a href="tel:+447587864204">+44
              758 7864 204</a></p>
          <div class="side-menu__social">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
          </div>
        </div><!-- /.side-menu__content -->
      </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->


{{-- Header Section End --}}





{{-- Content --}}


@hasSection('content')
@yield('content')
@else
<p>No content found</p>
@endif









{{-- Footer Section Start --}}


<!-- Main Footer -->
  <footer class="main-footer">
    <div class="auto-container">
      <!--Widgets Section-->
      <div class="widgets-section">
        <div class="row clearfix">
  
          <!--Column-->
          <div class="column col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="footer-widget logo-widget">
              <div class="widget-content">
                <div class="logo">
                  <a href="index.html"><img id="fLogo" src="images/web-logo.png" alt="UXD Consults" /></a>
                </div>
                <div class="text">We are a digital agency providing and catering to wide spectrum of
                  digital design, development and marketing services.</div>
                <ul class="social-links clearfix">
                  <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                  <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                  <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
  
          <!--Column-->
          <div class="column col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="footer-widget links-widget">
              <div class="widget-content">
                <h6>Explore</h6>
                <div class="row clearfix">
                  <div class="col-md-6 col-sm-12">
                    <ul>
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="portfolio.html">Portfolio</a></li>
                      <li><a href="our-process.html">Our Process</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <ul>
                      <li><a href="contact.html">Contact Us</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms of Use</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <!--Column-->
          <div class="column col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="footer-widget info-widget">
              <div class="widget-content">
                <h6>Contact</h6>
                <ul class="contact-info">
                  <li class="address"><span class="icon flaticon-pin-1"></span> 289 Hounslow Road,
                    Hanworth, Feltham, TW13 5JQ, Greater London , UK11803 Canyon Mills Dr,
                    Houston, TX 77905</li>
                  <li><span class="icon flaticon-call"></span><a href="tel:+447587864204">+44 758
                      7864 204</a></li>
                  <li><span class="icon flaticon-email-2"></span><a
                      href="mailto:support@uxdconsults.com">support@uxdconsults.com</a></li>
                </ul>
              </div>
            </div>
          </div>
  
        </div>
  
      </div>
    </div>
  
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="auto-container">
        <div class="inner clearfix">
          <div class="copyright">© {{ date('Y') }} UXD Consults. All Rights Reserved. | Powered By <span class="theme-color">UXD
              Consults</span></div>
        </div>
      </div>
    </div>
  
  </footer>
  
  </div>
  <!--End pagewrapper-->
  
  <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
  
  
  
  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/TweenMax.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery.fancybox.js"></script>
  <script src="js/owl.js"></script>
  <script src="js/mixitup.js"></script>
  <script src="js/appear.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jQuery.style.switcher.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js">
  </script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jarallax.min.js"></script>
  <script src="js/custom-script.js"></script>
  
  <script src="js/lang.js"></script>
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="js/color-switcher.js"></script>
  </body>
  
  </html>