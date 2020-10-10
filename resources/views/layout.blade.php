<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Beatnik Technology Limited</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top ">
    <div class="container d-flex justify-content-end">
      <div class="social-links">
   <a href="https://www.facebook.com/beatnik.technology/" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.linkedin.com/company/beatnik-technology/" class="linkedin"><i class="fa fa-linkedin"></i></a>
           </div>
    </div>
    <?php
                             $messege=Session::get('messege');
                             if ($messege) {
                             	echo $messege;
                             	Session::put('messege',null);
                             }
							             ?>
  </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
    <?php
    $headerlogo=DB::table('logos')
							->where('status',1)
              ->get();
              foreach($headerlogo as $v_logo){?>        
      <h1 class="logo mr-auto"><a href="{{URL::to('/home')}}"><img src="{{URL::to($v_logo->logo_image)}}"></a></h1>
      <?php } ?>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{URL::to('/home')}}">Home</a></li>
          <li><a href="{{URL::to('/about')}}">About Us</a></li>
          <li><a href="{{URL::to('/service')}}">Services</a></li>
          <li><a href="{{URL::to('/portfolio')}}">Portfolio</a></li>
          <li><a href="{{URL::to('/contact')}}">Contact Us</a></li>
          <li><a href="{{URL::to('/admin')}}">Login</a></li>
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->

  <main id="main">

    @yield('content');

  </main><!-- End #main -->  

 <!-- ======= Footer ======= -->
 <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>Beatnik</h3>
                  <p>Knowing and understanding a customer's unique needs and being able to fulfil them not just to their satisfaction but also often beyond expectation is the hallmark of a customer-centric organisation.</p>
                </div>

                <div class="footer-newsletter">
                  <h4>Our Newsletter</h4>
                  <form action="{{URL::to('/add-subscribe')}}" method="post">
                  {{csrf_field()}}
                    <input type="email" name="subscriber_email"><input type="submit">
                  </form>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><a href="{{URL::to('/home')}}">Home</a></li>
                    <li><a href="{{URL::to('/about')}}">About us</a></li>
                    <li><a href="{{URL::to('/service')}}">Services</a></li>
                    <li><a href="{{URL::to('/portfolio')}}">Portfolio</a></li>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4>Contact Us</h4>
                  <p>
                    House 106, Park Road <br>
                    Mohakhali DOHS, Dhaka<br>
                    <strong>Phone:</strong> +88 01316 100 183<br>
                    <strong>Email:</strong> info@beatnik.technology<br>
                  </p>
                </div>

                <div class="social-links">
                <a href="https://www.facebook.com/beatnik.technology/" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://www.linkedin.com/company/beatnik-technology/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <form action="{{URL::to('/send-mail')}}" method="post" role="form" class="php-email-form">
                      {{csrf_field()}}
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>

                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Beatnik Technology</strong>. All Rights Reserved
      </div>
      <div class="credits">
         Designed by <a href="https://beatnik.technology/">Beatnik Technology</a>
      </div>
    </div>
  </footer><!-- End  Footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>