@extends('frontend.layouts.master')
@section('content')
<div
        class="position-relative text-white about-container"
        style="
          min-height: 60vh;
          height: auto;
          background: url('{{asset('assets/images/second.jpg')}}') center center/cover no-repeat;
          padding: 4rem 1rem;
        "
      >
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.4;"></div>

        <!-- Content -->
        <div
          class="container position-relative h-100 d-flex flex-column align-items-center justify-content-center text-center"
          style="min-width: 280px; max-width: 1200px; z-index: 1;"
        >
          <!-- Add your hero content here if needed -->
        </div>
</div>
      </div>
      <div class="container my-5 px-3">
        <div class="row justify-content-center pe-4">
          <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="text-center">
             <h3 class="fw-bold mb-4">Service</h3>
              <p class= "" style="line-height: 1.8;">
                All of our rooms & suites provide guests with the option to enjoy accommodations with impressive views of the extensive greenery of the Hattiban Forest and south lalitpur. Admire one of best get a glimpse of how the royals lived with a view of the central overseeing. Resort offers spaciously professionally designed accommodation features great accessibility to modern day comfort luxury. The rooms are wonderful mix of new-age charm and conveniences and promises to give its guests an unparalleled experience. 
               </p>
            </div>
          </div>
        </div>
      </div>
      <div id="carouselExampleControlsNoTouching" class="carousel slide mb-5" data-bs-touch="true" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/images/enjoy_spa_01.webp')}} " class="d-block w-100" style="max-height: 600px; object-fit: cover;" alt="Spa Image">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/images/chr-gym.jpg')}} " class="d-block w-100" style="max-height: 600px; object-fit: cover;" alt="Gym Image">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/chr-swimming.jpg') }}" class="d-block w-100" style="max-height: 600px; object-fit: cover;" alt="Swimming Pool Image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
      <div style="background-color: #F1F1F1; padding: 4rem 0;">
      <section id="Swimming" class="mb-5">
        <div class="container">
            <div class="row align-items-center gy-4">
                <!-- Left Image -->
                <div class="col-lg-6 col-md-6">
                    <img src="{{asset('assets/images/chr-swimming.jpg') }}" class="img-fluid shadow-sm" style="width: 100%; height: 400px; object-fit: cover;" alt="Swimming Pool">
                </div>
    
                <!-- Right Content -->
                <div class="col-lg-6 col-md-6">
                    <div class="px-3">
                        <h2 class="fw-bold mb-3">Swimming</h2>
                        <div class="highlight mb-4" style="width: 50px; height: 3px; background-color: #007bff;"></div>
                        <p class="mb-4" style="line-height: 1.8;">
                            Dive into serenity at Lachhi Pool. Whether you're looking for a refreshing swim or a peaceful retreat by the water, our signature pool is designed to rejuvenate your body and mind amidst the beauty of Champadevi Hills.
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <section id="spa" class="mb-5">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 col-md-6 order-md-1 order-2">
                    <div class="px-3">
                        <h2 class="fw-bold mb-3">Gym</h2>
                        <div class="highlight mb-4" style="width: 50px; height: 3px; background-color: #007bff;"></div>
                        <p class="mb-4" style="line-height: 1.8;">
                          Stay active at our fully equipped gym, where modern fitness facilities meet the calming ambiance of nature. Perfect for both fitness enthusiasts and casual guests aiming to maintain their wellness routine.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 order-md-2 order-1">
                    <img src="{{asset('assets/images/chr-gym.jpg')}}" class="img-fluid shadow-sm" style="width: 100%; height: 400px; object-fit: cover;" alt="Gym">
                </div>
            </div>
        </div>
      </section>

      <section id="gym">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 col-md-6">
                    <img src="{{asset('assets/images/enjoy_spa_01.webp')}} " class="img-fluid shadow-sm" style="width: 100%; height: 400px; object-fit: cover;" alt="Spa">
                </div>
    
                <div class="col-lg-6 col-md-6">
                    <div class="px-3">
                        <h2 class="fw-bold mb-3">Spa</h2>
                        <div class="highlight mb-4" style="width: 50px; height: 3px; background-color: #007bff;"></div>
                        <p class="mb-4" style="line-height: 1.8;">
                            An oasis of calm and tranquility, located deep within a protected forest,
                            our luxury spa and health club welcome members and guests with a wide
                            range of facilities and services.
                        </p>
                        <p class="mb-4" style="line-height: 1.8;">
                            Melt your cares away as you rejuvenate yourself in an oasis of calm and
                            tranquility deep within the heart of the protected Gokarna Forest at the
                            Harmony Spa and Health Club. Our relaxing indoor swimming pool is one-of-a-kind
                            in Nepal. It is the perfect place to cool down and unwind after a jungle walk,
                            or a workout at the gym.
                        </p>
                    </div>
                </div>
            </div>
        </div>
      </section>
    </div>

    
     
@php
    $review = \App\Models\Review::first(); // Fetch the first review from the database
@endphp

@if($review)
<!-- <div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="p-4 text-center">
                <!-- Stars -->
                <!-- <div class="mb-3">
                    @for($i = 0; $i < $review->rating; $i++)
                        <i class="bi bi-star-fill text-warning"></i>
                    @endfor
                </div> -->
                <!-- Testimonial -->
                <!-- <p class="fs-5 text-muted">
                    {{ $review->review }}
                </p> -->
                <!-- User Info -->
                <!-- <div class="d-flex align-items-center mt-4 flex-wrap justify-content-center">
                    <img
                        src="{{ asset('storage/' . $review->reviewer_image) }}"
                        alt="user"
                        class="rounded-circle me-3"
                        style="width: 60px; height: 60px;"
                    />
                    <div>
                        <h5 class="fw-bold p-0 m-0 text-color">{{ $review->reviewer_name }}</h5>
                        <p class="text-muted m-0">{{ $review->designation }}</p>
                    </div>
                </div> -->
                <!-- Progress Dots -->
                <!-- <div>
                    <span class="badge bg-secondary me-1"></span>
                    <span class="badge bg-secondary me-1"></span>
                    <span class="badge bg-primary"></span>
                </div>
            </div>
        </div>
    </div> -->
</div>
@endif
    </div>
   

    <!-- Add Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    

   <script>
     var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
 
</script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@endsection
  
