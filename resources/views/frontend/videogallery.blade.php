@extends('frontend.layouts.master')
@section('content')
<div
        class="position-relative text-white about-container"
        style="
          height: 90vh;
          background: url('{{asset('assets/images/chr-videogallery.png')}} ') center center/cover no-repeat;
        "
      >
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100"></div>

        <!-- Content -->
        <div
          class="container h-100 d-flex flex-column align-items-center justify-content-center text-center"
          style="min-width: 320px; max-width: 1200px"
        >


          

          <!-- Subheading -->
        </div>
      </div>
      <div class="container my-4">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10 col-sm-12">
            <div class=" text-center" style="margin-top:60px;">
             <h3>Discover serenity at Champadevi Hillside Resort</h3>
              <p class="fs-5 text-muted" style="margin-top: 30px;">
                All of our rooms & suites provide guests with the option to enjoy accommodations with impressive views of the extensive greenery of the Hattiban Forest and south lalitpur. Admire one of best get a glimpse of how the royals lived with a view of the central overseeing. Resort offers spaciously professionally designed accommodation features great accessibility to modern day comfort luxury. The rooms are wonderful mix of new-age charm and conveniences and promises to give its guests an unparalleled experience.
               </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-full  custom-gallery" style="margin-top:60px; padding-bottom: 60px;">
        <h3 class="text-center">Inspiring Video Gallery</h3>
        <div class="container" style="margin-top: 60px; padding-bottom: 60px;">
          <div class="row g-4">
            @forelse ($videos as $video)
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="ratio ratio-16x9">
                <iframe width="560" height="315" src="{{$video->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No videos found</p>
            </div>
        @endforelse

          </div>
        </div>

  </div>

      </div>
      <div class="container my-4 text-slider-container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="p-4 text-center">
              <!-- Stars -->
              <div class="mb-3">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <!-- Testimonial -->
              <p class="fs-5 text-muted">
                I had an absolutely wonderful stay at Champadevi Village Resort!
                The location is breathtaking, surrounded by lush greenery and
                offering stunning views of the hills and valleys. The staff were
                incredibly friendly and accommodating, making us feel at home
                from the moment we arrived.The rooms were clean, comfortable,
                and well-equipped with all the amenities needed for a relaxing
                stay. The food was another highlight—delicious local and
                international options, all prepared fresh.
              </p>
              <!-- User Info -->
              <div
                class="d-flex align-items-center mt-4 flex-wrap justify-content-center"
              >
                <img
                  src="{{asset('assets/images/tripadvisor.png')}}"
                  alt="user"
                  class="rounded-circle me-3"
                  style="width: 60px; height: 60px"
                />
                <div>
                  <h5 class="fw-bold p-0 m-0 text-color">Sushila Kafle</h5>
                  <p class="text-muted m-0">Marketing</p>
                </div>
              </div>
              <!-- Progress Dots -->
              <div>
                <span class="badge bg-secondary me-1"></span>
                <span class="badge bg-secondary me-1"></span>
                <span class="badge bg-primary"></span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = `${entry.target.dataset.delay * 0.2}s`;
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.gallery-item').forEach(item => {
            observer.observe(item);
        });
    </script>


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
  @endsection
