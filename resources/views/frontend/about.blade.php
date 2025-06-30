@extends('frontend.layouts.master')
@section('content')
     
<div class="container mx-auto px-3">
    <div class="about-container mb-4"></div>

    <div class="py-3 about-head">
        <h2 class="text-center">Champadevi Hillside Resort</h2>
        <div class="divider mx-auto" style="background-color: #025e5b; width: 290px; height: 5px;"></div>

        <div class="two-column-text px-md-5">
            {!! $aboutUs->long_description !!}
        </div>
    </div>
</div>



<style>
  .about-container {
    height: 800px;
    background-image: url('{{ asset('storage/'.$aboutUs->feature_image) }}');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }

  @media (max-width: 768px) {
      .about-container {
          background-attachment: scroll;
          height: auto;
          min-height: 60vh;
      }
  }

  .two-column-text {
      column-count: 2;
      column-gap: 70px;
      text-align: justify;
  }

  @media (max-width: 768px) {
      .two-column-text {
          column-count: 1;
          column-gap: 0;
      }
  }

  #demo {
      height: 100%;
      position: relative;
      overflow: hidden;
  }

  .green {
      background-color: #6fb936;
  }
  .thumb {
      margin-bottom: 30px;
  }
  /* .page-top {
      margin-top: 85px;
  } */
  img.zoom {
      width: 100%;
      height: 200px;
      border-radius: 5px;
      object-fit: cover;
      transition: all .3s ease-in-out;
  }
  .transition {
      transform: scale(1.2);
  }
  .modal-header {
      border-bottom: none;
  }
  .modal-title {
      color: #000;
  }
  .modal-footer {
      display: none;
  }
  .about-head{padding-top:40px !important;}
 */

    </style>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<!-- <div id="carouselExampleControlsNoTouching" class="carousel slide"  data-bs-ride="carousel" data-bs-interval="500">
    <div class="carousel-inner">
        @foreach($aboutUs->carousel_images as $index => $image)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/'.$image['image']) }}" class="d-block w-100" alt="...">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> -->

<div class="container page-top py-4">
        <div class="row pe-4">
            @foreach($aboutUs->carousel_images as $index => $image)

            <div class="col-lg-4 col-md-5 col-xs-6 thumb">
                <a href="{{ asset('storage/'.$image['image']) }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('storage/'.$image['image']) }}" class="zoom img-fluid" alt="">
                </a>
            </div>
            @endforeach

           
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
            $(".zoom").hover(function(){
                $(this).addClass('transition');
            }, function(){
                $(this).removeClass('transition');
            });
        });
    </script>




      <div class="text-slider-container " style="background-color:#F1F1F1;">
        <h2 class="text-center">Our Facilities</h2>
        <div class="col-lg-6" style="position: relative; margin-top: 60px;">
          <div class="card">
            <img
              src="{{asset('assets/images/chr-content.jpg')}} "
              alt="Wedding Decoration"
              class="img-fluid"
            />
          </div>
          <div class="col-lg-9 col-md-9 about-section-text">

            <div class="slider-container">
              <div id="textSlider" class="slider">
                <div class="text-slide">
                  <h3 class="text-white">Swimming</h3>
                  <div class="about-divider"></div>
                  <p class="text-white">
                   Dive into serenity at Lachhi Pool. Whether you're looking for a refreshing swim or a peaceful retreat by the water, our signature pool is designed to rejuvenate your body and mind amidst the beauty of Champadevi Hills.
                  </p>
                
                </div>
                <div class="text-slide">
                  <h3 class="text-white">Coffee Shop</h3>
                  <div class="divider"></div>
                  <p class="text-white">
                    Our 24-hour coffee shop caters to every craving with a diverse menu. From authentic Nepalese delights to international favorites, enjoy rich flavors and warm hospitality any time of the day or night.
                  </p>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- testimonial -->


    </div>
    

    

     <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slider = document.querySelector('#textSlider');
      const slides = document.querySelectorAll('.text-slide');
      let currentIndex = 0;

      // Function to show the current slide
      function showSlide(index) {
        // Hide all slides
        slides.forEach((slide, i) => {
          slide.style.display = 'none';
        });

        // Show the current slide
        slides[index].style.display = 'block';
      }

      // Initialize the first slide
      showSlide(currentIndex);

      // Function to move to the next slide
      function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
      }


      setInterval(nextSlide, 5000);
    });
  </script>


    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
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
