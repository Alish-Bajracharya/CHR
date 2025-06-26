@extends('frontend.layouts.master')
@section('content')
@foreach($majorAttractions as $attraction)
<div
    class="position-relative text-white about-container"
    style="
        height: 800px;
        background: url('{{ asset('storage/' . $attraction->image) }}') center center/cover no-repeat;
    "
>
    <div class="position-absolute top-0 start-0 w-100 h-100"></div>

    <!-- Content -->
    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center" style="min-width: 320px; max-width: 1200px">

    </div>
</div>

<div class="container py-4 mt-3">
    <div class="row justify-content-center pe-4">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="text-center">
                <h2>{{ $attraction->title }}</h2>
                <p>{!! $attraction->long_description !!}</p>
            </div>
        </div>
    </div>
</div>

@endforeach




<!-- Attractions Section with Zigzag Layout -->

@foreach ($attraction->places as $index => $place)
    <div class="container my-5 py-4">
        <div class="row align-items-center g-4">
            @php
                $imageHeight = $index === 0 ? '350px' : '350px'; // First image even smaller
            @endphp

            @if ($index % 2 === 0)
                <!-- Image Left, Text Right -->
                <div class="col-md-6 px-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/' . $place['image']) }}"
                         alt="{{ $place['name'] }}"
                         style="height: {{ $imageHeight }}; width: 100%; max-width: 700px; object-fit: cover; display: block;">
                </div>
                <div class="col-md-6 px-4 text-center text-md-start">
                    <h2 class="fw-bold mb-3">{{ $place['name'] }}</h2>
                    <div class="highlight mb-2"></div>
                    <p style="text-align: justify;">{{ $place['description'] }}</p>
                </div>
            @else
                <!-- Image Right, Text Left -->
                <div class="col-md-6 order-md-2 px-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/' . $place['image']) }}"
                         alt="{{ $place['name'] }}"
                         style="height: 350px; width: 100%; max-width: 700px; object-fit: cover; display: block;">
                </div>
                <div class="col-md-6 order-md-1 px-4 text-center text-md-start">
                    <h2 class="fw-bold mb-3">{{ $place['name'] }}</h2>
                    <div class="highlight mb-2"></div>
                    <p style="text-align: justify;">{{ $place['description'] }}</p>
                </div>
            @endif
        </div>
    </div>
@endforeach




<style>

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
    </style>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<div class="container page-top py-5 ">
        <div class="row pe-4">
            @foreach($majorAttractions as $attraction)
            @php
            // Ensure $attraction->images is always an array
            $images = is_string($attraction->images) ? json_decode($attraction->images, true) : $attraction->images;
            $images = is_array($images) ? $images : []; // Ensure it is an array
            @endphp
         @foreach($images as $index => $image)

          <div class="col-lg-4 col-md-5 col-xs-6 thumb">
                <a href="{{ asset('storage/' . $image) }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('storage/' . $image) }}" class="zoom img-fluid" alt="">
                </a>
            </div>
            @endforeach
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
</div>





<!-- Image Carousel -->
<!-- <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-ride="carousel" data-bs-interval="500">
    <div class="carousel-inner">
        @foreach($majorAttractions as $attraction)
            @php
                // Ensure $attraction->images is always an array
                $images = is_string($attraction->images) ? json_decode($attraction->images, true) : $attraction->images;
                $images = is_array($images) ? $images : []; // Ensure it is an array
            @endphp

            @if(count($images) > 0)
                @foreach($images as $index => $image)
                    <div class="carousel-item {{ $loop->parent->first && $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $image) }}" class="d-block w-100" alt="{{ $attraction->title }}">
                    </div>
                @endforeach
            @endif
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<!-- testimonial -->
<!-- @php
    $review = \App\Models\Review::first(); // Fetch the first review from the database
@endphp -->

<!-- @if($review) -->
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
<!-- </div>
@endif -->

<!-- Floating Book Now Button -->



<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    for (var i = 0; i < dropdown.length; i++) {
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
