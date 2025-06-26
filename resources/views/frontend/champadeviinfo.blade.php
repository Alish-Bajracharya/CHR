@extends('frontend.layouts.master')
@section('content')
<div
    class="position-relative text-white about-container"
    style="
        height: 90vh;
background: url('{{asset('assets/images/chr-champadeviinfo.jpg')}}') center center/cover no-repeat;
    "
>
    <div class="position-absolute top-0 start-0 w-100 h-100"></div>

    <!-- Content -->
    <div
        class="container h-100 d-flex flex-column align-items-center justify-content-center text-center"
        style="min-width: 320px; max-width: 1200px;"
    >
       
    </div>
</div>

<div class="container" style="position: relative">
    <img
        src="{{asset('assets/images/chr-hillside.svg')}} "
        style="
            background-size: cover;
            width: 2000px;
            opacity: 0.04;
            object-fit: cover;
            height: 500px;
            padding-top: 50px;
        "
    />
    <div style="position: absolute; top:65%; left: 50%; transform: translate(-50%, -50%)">
        <h2 class="text-center">ChampaDevi Hillside Resort</h2>
        <div class="divider" style="background-color: #025e5b; margin-left: 25%;"></div>
        <div class="container my-5" style="display: flex; gap: 20px">
            <!-- First Column -->
            <div style="flex: 1">
                <p class="fs-5">
                    {{ $champadeviInfo->description ?? 'No description available.' }}
                </p>
            </div>
        </div>
    </div>
</div>
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-ride="carousel" data-bs-interval="500">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/taudaha.jpeg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/chr-champadeviforest.jpg')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/chr-stupa.jpg')}}" class="d-block w-100" alt="...">
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




<!-- testimonial -->
@php
    $review = \App\Models\Review::first(); // Fetch the first review from the database
@endphp

@if($review)
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="p-4 text-center">
                <!-- Stars -->
                <div class="mb-3">
                    @for($i = 0; $i < $review->rating; $i++)
                        <i class="bi bi-star-fill text-warning"></i>
                    @endfor
                </div>
                <!-- Testimonial -->
                <p class="fs-5 text-muted">
                    {{ $review->review }}
                </p>
                <!-- User Info -->
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
@endif



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
