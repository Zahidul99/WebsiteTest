@extends(' layout')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{URL::to('/home')}}">Home</a></li>
          <li>Services</li>
        </ol>
        <h2>Services</h2>

      </div>
    </section><!-- End Breadcrumbs -->
 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Services</h3>
          <p>As The Leading Communications Development & Advertising Agency In Dhaka, Beatnik Technology Limited Delivers:</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">UI Design</a></h4>
              <p class="description">Intuitive interface design and the logical flow of information with sensible user experience</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Digital Marketing</a></h4>
              <p class="description">Creating a powerful presence in the all-pervasive digital media, accessible anytime and anyplace for consumers</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Ecommerce Development</a></h4>
              <p class="description">Translate ideas into delightful customer experiences through our ecommerce development services</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Web Design</a></h4>
              <p class="description">We practice the art of communications perfected in the web & mobile with crystal clear clarity and ease of use</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200"">
        <div class=" box">
            <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
            <h4 class="title"><a href="">Mobile App Development</a></h4>
            <p class="description">Conceptualize, design and build high quality, custom mobile apps with attractive, functional and intuitive user interfaces setting higher standards of efficiency</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="box">
            <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
            <h4 class="title"><a href="">
SEO services</a></h4>
            <p class="description">We also build comprehensive online presence through: Customer acquisition through search technology, prominent positioning connect with customers</p>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid" data-aos="fade-up">

        <header class="section-header">
          <h3>Make The Ordinary Into Extraordinary</h3>
          <p>Beatnik creative effort aims to convert the ordinary into extraordinary and build authoritative presence. We work on establishing consumer perception, build value & successfully present and communicate that value to the consumer.</p>
        </header>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="why-us-img">
              <img src="assets/img/why-us.jpg" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <p>
             Crafting a compelling websites can sometimes become a hard task. This is where our years of knowledge and deep understanding of user habits and behaviors comes in handy to design websites that are lucrative. We believe that your online presence - is your business front, it is a gateway to infinite scalability.
              </p>

              <div class="features clearfix" data-aos="fade-up" data-aos-delay="100">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>One Stop Destination</h4>
                <p>We are one stop destination for all kind of web development services and marketing solutions.</p>
              </div>

              <div class="features clearfix" data-aos="fade-up" data-aos-delay="200">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Expertise & Specialization</h4>
                <p>We are experts and specializes in application development, website design, digital marketing, E-commerce services, SEO, content management and marketing.</p>
              </div>

            </div>

          </div>

        </div>

      </div>

      
      <div class="container">
        <div class="row counters" data-aos="fade-up" data-aos-delay="100">
          		<?php

							$allservice=DB::table('services')
              ->get();
              foreach($allservice as $v_service){?>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{$v_service->client_no}}</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{$v_service->project_no}}</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{$v_service->support_time}}</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">{{$v_service->hard_worker}}</span>
            <p>Hard Workers</p>
          </div>
          <?php } ?>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Get a quote now</h3>
            <p class="cta-text"> Contact us today and discuss, how we can develop a mutually beneficial and long term relationship!</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{URL::to('/contact')}}">Get a quote now</a>
          </div>
        </div>

      </div>
    </section><!--  End Call To Action Section -->


@endsection