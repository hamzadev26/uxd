@extends('layouts.layoutOne')

@section('title')
Contact Us | UXD Consults
@endsection

@section('content')




<!-- Banner Section -->
    <section class="page-banner">
      <div class="image-layer"
        style="background-image:url({{ asset('images/breadbg/banner1.webp') }});"></div>
      <div class="shape-1"></div>
      <div class="shape-2"></div>
      <div class="banner-inner">
        <div class="auto-container">
          <div class="inner-container clearfix">
            <h1>Contact Us</h1>
            <div class="page-nav">
              <ul class="bread-crumb clearfix">
                <li><a href="index-main.html">Home</a></li>
                <li class="active">Contact Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Banner Section -->
    
    <!--Contact Section-->
    <section class="contact-section contact-two">
      <div class="auto-container">
        <div class="row">
          <div class="col-lg-4">
            <div class="contact-two__content">
              <div class="sec-title">
                <h2>Let's start a project <span class="theme-color">Together.</span></span></h2>
              </div>
              <p class="contact-two__text">We make all your dreams come true in a successful project.</p> 
            </div><!-- /.contact-two__content -->
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-8">
            <div class="form-box">
              <div class="default-form">
                <form method="post" action="sendemail.php" id="contact-form">
                  <div class="row clearfix">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <div class="field-inner">
                        <input type="text" name="username" value="" placeholder="Your Name" required="">
                      </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <div class="field-inner">
                        <input type="email" name="email" value="" placeholder="Email Address" required="">
                      </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <div class="field-inner">
                        <input type="number" name="phone" value="" placeholder="Phone Number" required="">
                      </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <div class="field-inner">
                        <textarea name="message" placeholder="Write Message" required=""></textarea>
                      </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <button class="theme-btn btn-style-one">
                        <i class="btn-curve"></i>
                        <span class="btn-title">Submit</span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    
      </div>
    </section>
    
    
    <section class="contact-info-two">
      <div class="auto-container">
        <div class="row">
          {{-- <div class="col-md-12 col-lg-4">
            <div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms">
              <i class="fa fa-map-marker-alt"></i>
              <a href="#">289 Hounslow Road, Hanworth, Feltham, TW13 5JQ, Greater London , UK11803 Canyon Mills Dr, Houston, TX 77905</a>
            </div> 
          </div> --}}
          <div class="col-md-12 col-lg-6">
            <div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
              <i class="fa fa-envelope"></i>
              <a href="mailto:support@uxdconsults.com">support@uxdconsults.com</a>
            </div><!-- /.contact-info-two__card -->
          </div><!-- /.col-md-12 col-lg-4 -->
          <div class="col-md-12 col-lg-6">
            <div class="contact-info-two__card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
              <i class="fa fa-phone"></i>
              <a href="tel:+447587864204">+44 758 7864 204</a>
            </div><!-- /.contact-info-two__card -->
          </div><!-- /.col-md-12 col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.auto-container -->
    </section><!-- /.contact-info-two -->



@endsection