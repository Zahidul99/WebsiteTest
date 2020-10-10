@extends(' layout')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{URL::to('/home')}}">Home</a></li>
          <li>About Details</li>
        </ol>
        <h2>About Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->
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



@endsection