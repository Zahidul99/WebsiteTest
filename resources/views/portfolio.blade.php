@extends(' layout')
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{URL::to('/home')}}">Home</a></li>
          <li>Portfolio</li>
        </ol>
        <h2>Portfolio</h2>

      </div>
    </section><!-- End Breadcrumbs -->

  
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
                <h4><a href="{{URL::to('/portfolio_details/'.$v_cproject->cproject_id)}}">{{$v_cproject->cproject_name}}</a></h4>
                <p>{{$v_cproject->cproject_category}}</p>
                <div>
                  <a href="{{URL::to($v_cproject->cproject_image)}}" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
                  <a href="{{URL::to('/portfolio_details/'.$v_cproject->cproject_id)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
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
                <h4><a href="{{URL::to('/portfolio_details/'.$v_wproject->wproject_id)}}">{{$v_wproject->wproject_name}}</a></h4>
                <p>{{$v_wproject->wproject_category}}</p>
                <div>
                  <a href="{{URL::to($v_wproject->wproject_image)}}" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
                  <a href="{{URL::to('/portfolio_details/'.$v_wproject->wproject_id)}}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
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



@endsection