@extends('frontend.layouts.master')
@section('content')

<style>
.custom-gallery .gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 images per row */
    gap: 25px;
    padding: 0 15px;
}

.gallery-item img {
    width: 100%;
    height: 350px; /* Bigger image height */
    object-fit: cover;
    display: block;
    /* no border-radius as requested */
}

.gallery-item {
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
}

.gallery-item:hover {
    transform: scale(1.05);
}

@media (min-width: 1200px) {
    .gallery-item img {
        height: 400px; /* Even bigger on large screens */
    }
}
</style>

<div
  class="about-container"
  style="
    min-height: 800px;
    height: 800px;
    width: 100%;
    background: url('{{ asset('assets/images/chr-content.jpg') }}') center center / cover no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  "
>
</div>    

<div class="container py-4">
    <div class="row justify-content-center pe-4">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="text-center">
                <h3 class="mt-3">Photo Gallery</h3>
                <p class="text-muted" >
                    All of our rooms & suites provide guests with the option to enjoy accommodations with impressive views of the extensive greenery of the Hattiban Forest and south Lalitpur. Admire one of the best glimpses of how the royals lived with a view of the central overseeing. The resort offers spacious, professionally designed accommodation with great accessibility to modern-day comfort and luxury. The rooms are a wonderful mix of new-age charm and conveniences, promising an unparalleled experience for its guests.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto custom-gallery pb-5">
    <h3 class="text-center py-5">Inspiring Gallery</h3>
    <div id="gallery-container" class="gallery pe-4"></div>
    <div class="pagination-controls">
        <button class="pagination-button" id="prev-btn" disabled>Previous</button>
        <div id="page-numbers" class="page-numbers-container"></div>
        <button class="pagination-button" id="next-btn">Next</button>
    </div>
</div>

<!-- Optional Testimonial Section -->
<!-- testimonial -->
@php
    $review = \App\Models\Review::first(); // Fetch the first review from the database
@endphp

@if($review)
<div class="container my-4">
    <div class="row justify-content-center pe-4">
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

    // Main Gallery Script
    document.addEventListener('DOMContentLoaded', function() {
        const galleryContainer = document.getElementById('gallery-container');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const pageNumbersContainer = document.getElementById('page-numbers');

        let currentPage = 1;
        let galleryImages = [];

        function renderGallery(page) {
            galleryContainer.innerHTML = '';
            const imagesPerPage = 6;  // You can keep 6 or reduce if needed
            const startIndex = (page - 1) * imagesPerPage;
            const endIndex = page * imagesPerPage;
            const images = galleryImages.slice(startIndex, endIndex);

            images.forEach(item => {
                const div = document.createElement('div');
                div.className = 'gallery-item';
                div.innerHTML = `<img src="${item.src}" alt="${item.alt}">`;
                galleryContainer.appendChild(div);
            });

            renderPageNumbers();
            prevBtn.disabled = page === 1;
            nextBtn.disabled = page === Math.ceil(galleryImages.length / imagesPerPage);
        }

        function renderPageNumbers() {
            const totalPages = Math.ceil(galleryImages.length / 6);
            pageNumbersContainer.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const span = document.createElement('span');
                span.textContent = i;
                span.className = `page-number ${i === currentPage ? 'active' : ''}`;
                span.addEventListener('click', () => {
                    currentPage = i;
                    renderGallery(currentPage);
                });
                pageNumbersContainer.appendChild(span);
            }
        }

        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderGallery(currentPage);
            }
        });

        nextBtn.addEventListener('click', () => {
            const totalPages = Math.ceil(galleryImages.length / 6);
            if (currentPage < totalPages) {
                currentPage++;
                renderGallery(currentPage);
            }
        });

        async function fetchImages() {
            try {
                const response = await fetch('/new02/api/gallery/images');
                const data = await response.json();
                galleryImages = data;
                renderGallery(currentPage);
            } catch (error) {
                console.error('Error fetching gallery images:', error);
            }
        }

        fetchImages();
    });
</script>

<script>
    // Dropdown functionality
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

<!-- Fixed Book Now Button -->
<div class="uk-margin-remove-last-child custom">
    <a href="https://archiesoftbook.chr.com.np/" class="cnc-menu-fixed">
        <span class="uk-margin-small-left uk-textb-middle uk-light">
            Book Now
            <span class="uk-light" uk-icon="icon: chevron-down"></span>
        </span>
    </a>
</div>

@endsection
