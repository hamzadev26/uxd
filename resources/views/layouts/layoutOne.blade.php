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
                  <li class="{{ request()->is('about-us') ? 'current' : '' }}">
                    <a href="/about-us">About Us</a>
                  </li>
                  <li class="{{ request()->is('services', 'web-design', 'app-development', 'ui-ux-design', 'branding', 'content-writing', 'seo', 'hosting', '2d-3d-animation') ? 'current' : '' }} dropdown"><a href="/services">Services</a>
                    <ul>
                      <li><a href="/web-design">Website Development</a></li>
                      <li><a href="/app-development">App Development</a></li>
                      <li><a href="/ui-ux-design">UI/UX Designing</a></li>
                      <li><a href="/branding">Branding</a></li>
                      <li><a href="/content-writing">Content Writing</a></li>
                      <li><a href="/seo">SEO</a></li>
                      <li><a href="/hosting">Hosting</a></li>
                      <li><a href="/2d-3d-animation">2D/3D Animation</a></li>
                      
                      
                    </ul>
                  </li>
                  <li class="{{ request()->is('portfolio') ? 'current' : '' }}"><a href="/portfolio">Portfolio</a>
                  </li>
                  <li class="{{ request()->is('our-process') ? 'current' : '' }}"><a href="/our-process">Our Process</a>
                  </li>
                  <li class="{{ request()->is('contact-us') ? 'current' : '' }}"><a href="/contact-us">Contact Us</a>
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

          <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="images/icons/close-1-1.png" alt="UXD Consults" title="UXD Consults"></a>
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

    {{-- Quote Popup Start --}}
    <div class="search-popup">
      <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor" style="top: 588px; left: 56px;"></div>
        <div class="cursor-follower" style="top: 566px; left: 34px;"></div>
      </div>
      <div class="search-popup__inner">
        <section class="contact-section popup-sec contact-two">
          <div class="auto-container">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-two__content">
                  <div class="sec-title">
                    <h3 class="text-center"><span class="text-black text-uppercase">Request a <span class="theme-color">free
                          quote.</span></span></h3>
                    <button id="btn-close-modal">X</button>
                  </div>
                  <p class="footer-nine__contact__text text-center">
                    Your success story begins here - Request a free quote and make it happen!
                  </p>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-box">
                  <div class="default-form">
                    <form method="post" action="#" novalidate="novalidate" id="get-quote-form">
                      <div class="row clearfix">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <div class="field-inner">
                            <input type="text" name="quote_fname" id="quote_fname" class="popup-txt" placeholder="Full Name"
                              required="">
                          </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <div class="field-inner">
                            <input type="email" name="quote_email" id="quote_email" class="popup-txt"
                              placeholder="Email Address" required="">
                          </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <div class="field-inner">
                            <input type="number" name="quote_phone" id="quote_phone" class="popup-txt"
                              placeholder="Phone Number" required="" pattern="[0-9]*">
                          </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                          <div class="field-inner">
                            <select name="quote_estimate_budget" id="quote_estimate_budget" class="popup-txt"
                              placeholder="Estimate Budget">
                              <option value="">Estimate Budget</option>
                              <option value="$1000-$10,000">$1000 - $10,000</option>
                              <option value="$10,000-$50,000">$10,000 - $50,000</option>
                              <option value="$50,000-$100,000">$50,000 - $100,000</option>
                              <option value="$100,000-$10,00,000">$100,000 - $10,00,000</option>
                              <option value="Discuss">Discuss</option>
                            </select>
                          </div>
                        </div>
                        <h4><span class="text-black">Project Type<span class="dot">.</span></span></h4>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                          <div class="field-inner">
                            <p class="pera">
                              <input type="checkbox" name="project_type" class="project_type" id="project_type"
                                value="Website"> Website
                            </p>
                          </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                          <div class="field-inner">
                            <p class="pera"><input type="checkbox" name="project_type" class="project_type"
                                id="project_type" value="Mobile Application"> Mobile Application</p>
                          </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                          <div class="field-inner">
                            <p class="pera"><input type="checkbox" name="project_type" class="project_type"
                                id="project_type" value="Branding"> Branding</p>
                          </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                          <div class="field-inner">
                            <p class="pera"><input type="checkbox" name="project_type" class="project_type"
                                id="project_type" value="Logo &amp; Graphic Design"> Logo &amp; Graphic Design</p>
                          </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                          <div class="field-inner">
                            <p class="pera"><input type="checkbox" name="project_type" class="project_type"
                                id="project_type" value="Digital Marketing"> Digital Marketing</p>
                          </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                          <div class="field-inner">
                            <p class="pera"><input type="checkbox" name="project_type" class="project_type"
                                id="project_type" value="Game Design &amp; Development"> Game Design &amp; Development</p>
                          </div>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6">
                          <div class="field-inner">
                            <p class="pera"><input type="checkbox" name="project_type" class="project_type"
                                id="project_type" value="Other Services"> Other Services</p>
                          </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                          <div class="field-inner">
                            <textarea name="quote_message" id="quote_message" placeholder="Project Details" cols="2"
                              required=""></textarea>
                          </div>
                        </div>
                        <input type="hidden" name="quote_form_type" id="quote_form_type" value="quote_request">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                          <a class="theme-btn btn-style-one quote_send">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Send now</span>
                          </a>
                        </div>
                        <div class="alert alert-success success-msg" id="success-msg" role="alert">
                          Thanks for contacting us.
                        </div>
                        <div class="alert alert-danger danger-msg" id="danger-msg" role="alert">
                          Something went wrong.
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    {{-- Quote Popup End --}}

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
                      <li><a href="/privacy-policy">Privacy Policy</a></li>
                      <li><a href="/terms-conditions">Terms & Conditions</a></li>
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