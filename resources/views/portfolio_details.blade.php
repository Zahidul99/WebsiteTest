@extends(' layout')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{URL::to('/home')}}">Home / </a><a href="{{URL::to('/portfolio')}}">Portfolio</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{URL::to($project_details->project_image1)}}" class="img-fluid" alt="">
            <img src="{{URL::to($project_details->project_image2)}}" class="img-fluid" alt="">
            <img src="{{URL::to($project_details->project_image3)}}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: {{$project_details->category}}</li>
              <li><strong>Client</strong>: {{$project_details->client}}</li>
              <li><strong>Project date</strong>:{{$project_details->project_date}}</li>
              <li><strong>Project URL</strong>: <a href="#">{{$project_details->project_url}}</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

 @endsection