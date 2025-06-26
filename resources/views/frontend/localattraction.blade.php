@extends('frontend.layouts.master')
@section('content')

<!-- Hero Section -->
<div
    class="position-relative text-white about-container"
    style="
        height: 90vh;
        background: url('{{ asset('assets/images/chr-majorattraction.jpg') }}') center center/cover no-repeat;
    "
>
    <div class="position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center" style="min-width: 320px; max-width: 1200px">
        <p class="m-0">Breathe in the crisp mountains air and let Champadevi Hillside Resort redefine your ideas of paradise</p>
        <h1 class="display-2 fw-bold m-0 text-white">Local Attraction</h1>
    </div>
</div>

<!-- Attractions Section -->
@foreach($localattractions as $attraction)
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="text-center" style="margin-top:60px;">
                    <h2>{{ $attraction->title }}</h2>
                    <p>{!! $attraction->long_description !!}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Vertical Separator -->
    <div class="d-flex justify-content-center align-items-center">
        <div class="vertical-line"></div>
    </div>

    <!-- Attractions Section with Zigzag Layout -->
    @foreach ($attraction->places as $index => $place)
        <div class="container my-5" style="padding-bottom: 60px;">
            <div class="row align-items-center">
                @if ($index % 2 === 0)
                    <div class="col-md-6">
                        <img src="{{ asset('storage/'. $place['image']) }}" class="img-fluid large-image" alt="{{ $place['name'] }}">
                    </div>
                    <div class="col-md-6">
                        <h2 class="fw-bold">{{ $place['name'] }}</h2>
                        <div class="highlight"></div>
                        <p>{{ $place['description'] }}</p>
                    </div>
                @else
                    <div class="col-md-6 order-md-2">
                        <img src="{{ asset('storage/'. $place['image']) }}" class="img-fluid large-image" alt="{{ $place['name'] }}">
                    </div>
                    <div class="col-md-6 order-md-1">
                        <h2 class="fw-bold">{{ $place['name'] }}</h2>
                        <div class="highlight"></div>
                        <p>{{ $place['description'] }}</p>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
@endforeach

<!-- Image Carousel -->
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-ride="carousel" data-bs-interval="500">
    <div class="carousel-inner">
        @foreach($localattractions as $attraction)
            @php
                $images = is_string($attraction->images) ? json_decode($attraction->images, true) : $attraction->images;
                $images = is_array($images) ? $images : [];
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
</div>

<!-- Testimonials Section -->
<!-- @php
    $review = \App\Models\Review::first();
@endphp -->

<!-- @if($review) -->
<!-- <div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="p-4 text-center">
                <div class="mb-3">
                    @for($i = 0; $i < $review->rating; $i++)
                        <i class="bi bi-star-fill text-warning"></i>
                    @endfor
                </div>
                <p class="fs-5 text-muted">
                    {{ $review->review }}
                </p>
                <div class="d-flex align-items-center mt-4 flex-wrap justify-content-center">
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
                </div>
                <div>
                    <span class="badge bg-secondary me-1"></span>
                    <span class="badge bg-secondary me-1"></span>
                    <span class="badge bg-primary"></span>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- @endif -->

<!-- Floating Book Now Button -->


<!-- Bootstrap JS -->

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
