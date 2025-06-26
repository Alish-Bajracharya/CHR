@extends('frontend.layouts.master')
@section('content')
<div class="position-relative text-white hero-section"
    style="background: url('{{ asset('storage/'. $restaurant->feature_image) }}') center center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100 overlay"></div>
    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center position-relative">
    </div>
</div>

<section class="intro-section py-5">
    <div class="container">
        <div class="row justify-content-center pe-4">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="text-center">
                    <h2 class="section-title">Food & Drinks</h2>
                    <p class="section-description pe-4">{{ $restaurant->description }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="places-section py-5">
    @foreach ($restaurant->places as $index => $place)
    <div class="container mb-5">
        <div class="row align-items-center g-4 pe-4">
            @if ($index % 2 === 0)
            <div class="col-lg-6 col-md-6">
                <div class="place-image-wrapper">
                    <img src="{{ asset('storage/'. $place['image']) }}" class="img-fluid" alt="{{ $place['name'] }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="place-content">
                    <h2 class="place-title">{{ $place['name'] }}</h2>
                    <div class="highlight"></div>
                    <p class="place-description">{{ $place['description'] }}</p>
                </div>
            </div>
            @else
            <div class="col-lg-6 col-md-6 order-md-2">
                <div class="place-image-wrapper">
                    <img src="{{ asset('storage/'. $place['image']) }}" class="img-fluid" alt="{{ $place['name'] }}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 order-md-1">
                <div class="place-content">
                    <h2 class="place-title">{{ $place['name'] }}</h2>
                    <div class="highlight"></div>
                    <p class="place-description">{{ $place['description'] }}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</section>

<section class="gallery-section py-5">
    <div class="container">
        <div class="row g-4 pe-4">
            @foreach ($restaurant->places as $index => $place)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="gallery-item">
                    <a href="{{ asset('storage/'.$place['image']) }}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('storage/'.$place['image']) }}" class="zoom img-fluid" alt="">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="facilities-section py-5" style="background-color: #f1f1f1;">
    <div class="container">
        <h2 class="section-title text-center mb-5">Main Facilities</h2>
        <div class="row g-4 pe-4">
            <div class="col-lg-4 col-md-6">
                <div class="facility-item">
                    <i class="fas fa-coffee facility-icon"></i>
                    <h5 class="facility-title">COFFEE AND TEA</h5>
                    <p class="facility-description">We serve coffee and tea at any time of the day. Since we have an in-house kitchen, we offer tea and coffee in your room as well.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facility-item">
                    <i class="fas fa-server facility-icon"></i>
                    <h5 class="facility-title">24 HOUR RECEPTION</h5>
                    <p class="facility-description">We have a 24-hour functional reception. An innkeeper is always present in the lobby to answer your requests or concerns.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facility-item">
                    <i class="fas fa-wifi facility-icon"></i>
                    <h5 class="facility-title">FREE WIFI</h5>
                    <p class="facility-description">Multiple wireless routers are installed throughout the hotel. Each floor has access to high-speed internet at no additional charge.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facility-item">
                    <i class="fas fa-bed facility-icon"></i>
                    <h5 class="facility-title">ROOM SERVICE</h5>
                    <p class="facility-description">Not all good things come for free, but our room service does. We deliver your order to your bedside and clean your room exactly how you like it.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facility-item">
                    <i class="fas fa-tshirt facility-icon"></i>
                    <h5 class="facility-title">LAUNDRY SERVICES</h5>
                    <p class="facility-description">Enjoy fresh and clean clothes with our complimentary laundry service. We handle your laundry with care and deliver it back to you neatly folded.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="facility-item">
                    <i class="fas fa-shuttle-van facility-icon"></i>
                    <h5 class="facility-title">PICK-UP & DROP</h5>
                    <p class="facility-description">We offer convenient pick-up and drop services to ensure a hassle-free journey. Whether arriving or departing, our service guarantees a smooth ride.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>

.hero-section {
    height: 90vh;
    position: relative;
}

.overlay {
    background: rgba(0, 0, 0, 0.4);
}

/* Common Styles */



/* Places Section */
.place-image-wrapper {
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.place-image-wrapper img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.place-image-wrapper:hover img {
    transform: scale(1.05);
}

.place-content {
    padding: 2rem;
}

.place-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #333;
}

.highlight {
    width: 50px;
    height: 3px;
    background-color: #025E5B;
    margin: 1rem 0;
}



/* Gallery Section */
.gallery-item {
    margin-bottom: 2rem;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.zoom {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.transition {
    transform: scale(1.1);
}

/* Facilities Section */
.facility-item {
    text-align: center;
    padding: 2rem;
    background: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.facility-item:hover {
    transform: translateY(-5px);
}

.facility-icon {
    font-size: 2.5rem;
    color: #025E5B;
    margin-bottom: 1.5rem;
}

.facility-title {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #333;
}

.facility-description {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
}


/* Responsive Adjustments */
@media (max-width: 991px) {
    .section-title {
        font-size: 2rem;
    }
    
    .place-image-wrapper img {
        height: 300px;
    }
    
    .place-title {
        font-size: 1.8rem;
    }
}

@media (max-width: 767px) {
    .hero-section {
        height: 70vh;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .place-content {
        padding: 1.5rem 0;
    }
    
    .place-title {
        font-size: 1.5rem;
    }
    
    .facility-item {
        padding: 1.5rem;
    }
    
    .zoom {
        height: 200px;
    }
}

@media (max-width: 575px) {
    .hero-section {
        height: 50vh;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    .place-image-wrapper img {
        height: 250px;
    }
    
   
}
</style>

<!-- Scripts -->

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
@endsection
