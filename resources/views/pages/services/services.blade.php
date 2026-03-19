@extends('layouts.layoutOne')

@section('title')
    Services
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
        <h1>Services</h1>
        <div class="page-nav">
          <ul class="bread-crumb clearfix">
            <li><a href="index-main.html">Home</a></li>
            <li class="active">Services</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Banner Section -->

<!--Services Section-->
<section class="services-section-three padd-top">
  <div class="auto-container">
    <div class="services">
      <div class="row clearfix">
        <!--Service Block-->
        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
            <div class="bottom-curve"></div>
            <div class="icon-box"><span class="flaticon-monitor"></span></div>
            <h5><a href="/web-design">Website <br>Development</a></h5>
            <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
            <div class="link-box"><a href="/web-design"><span class="fa fa-angle-right"></span></a></div>
          </div>
        </div>

        <!--Service Block-->
        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
          <div class="inner-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
            <div class="bottom-curve"></div>
            <div class="icon-box"><span class="flaticon-app-development"></span></div>
            <h5><a href="/app-development">App <br>Development</a></h5>
            <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
            <div class="link-box"><a href="/app-development"><span class="fa fa-angle-right"></span></a></div>
          </div>
        </div>

        <!--Service Block-->
        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
          data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="bottom-curve"></div>
            <div class="icon-box"><span class="flaticon-ui"></span></div>
            <h5><a href="/ui-ux-design">Ui/UX<br>Designing</a></h5>
            <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
            <div class="link-box"><a href="/ui-ux-design"><span class="fa fa-angle-right"></span></a></div>
          </div>
        </div>

        <!--Service Block-->
        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms"
          data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="bottom-curve"></div>
            <div class="icon-box"><span class="flaticon-development"></span></div>
            <h5><a href="/branding">Branding</a></h5>
            <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
            <div class="link-box"><a href="/branding"><span class="fa fa-angle-right"></span></a></div>
          </div>
        </div>

        <!--Service Block-->
        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
          data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="bottom-curve"></div>
            <div class="icon-box"><span class="flaticon-digital"></span></div>
            <h5><a href="/content-writing">Content Writing</a></h5>
            <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
            <div class="link-box"><a href="/content-writing"><span class="fa fa-angle-right"></span></a></div>
          </div>
        </div>

        <!--Service Block-->
        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
          data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="bottom-curve"></div>
            <div class="icon-box"><span class="flaticon-instant-camera"></span></div>
              <h5><a href="/seo">SEO</a></h5>
            <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
            <div class="link-box"><a href="/seo"><span class="fa fa-angle-right"></span></a></div>
          </div>
        </div>

        <!--Service Block-->
        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms"
          data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="bottom-curve"></div>
            <div class="icon-box"><span class="flaticon-monitor"></span></div>
            <h5><a href="/hosting">Hosting</a></h5>
            <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
            <div class="link-box"><a href="/hosting"><span class="fa fa-angle-right"></span></a></div>
          </div>
        </div>

        <!--Service Block-->
        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms"
          data-wow-duration="1500ms">
          <div class="inner-box">
            <div class="bottom-curve"></div>
            <div class="icon-box"><span class="flaticon-computer"></span></div>
            <h5><a href="/2d-3d-animation">2D/3D Animation</a></h5>
            <div class="text">Lorem ipsum is are many variations of pass of majority.</div>
            <div class="link-box"><a href="/2d-3d-animation"><span class="fa fa-angle-right"></span></a></div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>





@endsection