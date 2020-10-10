@extends(' layout')
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Technology Solutions<br>for Your <span>Business!</span></h2>
          <div>
            <a href="{{URL::to('/get_started')}}" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img" data-aos="fade-right" data-aos-delay="100">
              <img src="assets/img/about-img.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">
              <h2>About Us</h2>
              <h3>We are an international award-winning IT company with 6 offices across Bangladesh, and offers web design, web development and digital marketing services.</h3>
              <p>Beatnik is rated as one of the top web agencies in Bangladesh by various industry magazines and review sites. We have a right blend of award-winning designers, expert web developers and Google certified digital marketers which make us a unique one-stop solution for hundreds of our clients, spread across 80+ countries.</p>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> UI/UX Design support</li>
                <li><i class="ion-android-checkmark-circle"></i> Website Design and Development</li>
                <li><i class="ion-android-checkmark-circle"></i> Software Development</li>
				<li><i class="ion-android-checkmark-circle"></i> Mobile App Development</li>
				<li><i class="ion-android-checkmark-circle"></i> Digital Marketing</li>
                <li><i class="ion-android-checkmark-circle"></i> DevOps Service</li>
				<li><i class="ion-android-checkmark-circle"></i> Cloud Computing</li>
 
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->

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

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
							$all_app_project=DB::table('projects')
							->where('status',1)
              ->get();
              foreach($all_app_project as $v_aproject){?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{URL::to($v_aproject->project_image)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="{{URL::to('/portfolio_details/'.$v_aproject->project_id)}}">{{$v_aproject->project_name}}</a></h4>
                <p>{{$v_aproject->project_category}}</p>
                <div>
                  <a href="{{URL::to($v_aproject->project_image)}}" data-gall="portfolioGallery" title="App 1" class="link-preview venobox"><i class="ion ion-eye"></i></a>
                  <a href="{{URL::to('/portfolio_details/'.$v_aproject->project_id)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
             <?php } ?>

          <?php
							$all_card_project=DB::table('cprojects')
							->where('status',1)
              ->get();
              foreach($all_card_project as $v_cproject){?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{URL::to($v_cproject->cproject_image)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="{{URL::to('/portfolio_details')}}">{{$v_cproject->cproject_name}}</a></h4>
                <p>{{$v_cproject->cproject_category}}</p>
                <div>
                  <a href="{{URL::to($v_cproject->cproject_image)}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
                  <a href="{{URL::to('/portfolio_details')}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <?php
							$all_web_project=DB::table('wprojects')
							->where('status',1)
              ->get();
              foreach($all_web_project as $v_wproject){?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="{{URL::to($v_wproject->wproject_image)}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="{{URL::to('/portfolio_details')}}">{{$v_wproject->wproject_name}}</a></h4>
                <p>{{$v_wproject->wproject_category}}</p>
                <div>
                  <a href="{{URL::to($v_wproject->wproject_image)}}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
                  <a href="{{URL::to('/portfolio_details')}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

   
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
        </header>
        <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Are your Websites Custom? Do you use templates? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Yes, everything we build is 100% Custom made with unlimited revisions to the design. We are custom starting from the design all the way to your administration area to manage the website yourself.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">What if I need HELP, Do you offer support? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Yes, we offer LIFETIME SUPPORT You will be able to change modify or add anything to your website yourself thru the administration (CMS) that we will build for you. But most important you will have access to our developers for any questions you might need. We use the same style of support as apple.com which means we connect to your computer and teach/help you with your questions or modifications to the website. We also give you unlimited training on our administration area. We offer LIFETIME SUPPORT because 99% of our customer only need training once as the administration area is super simple and easy to learn. You don't need any knowledge on coding and you know we are just a phone call way.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">What about hosting, Do I have to host my website with you?
 <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                No at all unless you want to! Unlike other web design companies at our level we do not need you to host the website with us. We do provide hosting for our customers but it does not means you are obligated to host with us.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">SEO Are your websites SEO friendly?
 <i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                100% Yes! Remember we are Google Partners! it's our obligation to you as a customer to make sure your website is visible online. So, for that reason we help you by building the website 100% SEO friendly and we use best practice on web design as requested by our partner GOOGLE.
              </p>
            </div>
          </li>

         
        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

  </main><!-- End #main -->

  @endsection