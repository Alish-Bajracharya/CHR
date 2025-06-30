@extends('frontend.layouts.master')
@section('content')
<div
    class="position-relative text-white about-container"
    style="
        max-height: 900px;
        min-height: 800px;
        background: url('{{ asset('storage/'.$room->featured_image) }}') center center/cover no-repeat;
        background-attachment: scroll; /* fixes mobile background issues */
    "
>
    
    
</div>

<style>
.details-section {
    position: relative;
    z-index: 2;
    margin-top: -50px;
}

.details-wrapper {
    position: relative;
    background: transparent;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
}

.room-icon {
    position: relative;
    backdrop-filter: blur(5px);
    transition: all 0.3s ease;
}

.room-icon:hover {
    transform: translateY(-5px);
}

.room-icon i {
    font-size: 24px;
    margin-bottom: 10px;
}

.room-icon p {
    margin: 0;
}
</style>

<section class="details-section text-center py-4">
    <div class="details-wrapper">
        <div class="row justify-content-center align-items-center g-0">
            <div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
                <div class="d-flex flex-column align-items-center room-icon p-3">
                    <i class="fas fa-ruler-combined icon text-white mb-2"></i>
                    <p class="fs-5 text-white mb-0">{{$room->size}}</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
                <div class="d-flex flex-column align-items-center room-icon p-3" style="background-color:#347e7b">
                    <i class="fas fa-bed icon text-white mb-2"></i>
                    <p class="fs-5 text-white mb-0">{{$room->name}}</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex flex-column align-items-center room-icon p-3" style="background-color:#4d8e8c;">
                    <i class="fas fa-user text-white mb-2"></i>
                    <p class="text-white mb-0">{{$room->capacity}} Person</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container my-4">
      <div class="row justify-content-center pe-4">
        <div class="col-lg-8 col-md-10 col-sm-12">
          <div class=" text-center">
           <h2> {{ $room->name }}</h2>
            <p class=" text-muted justify-center">
              All of our rooms & suites provide guests with the option to enjoy accommodations with impressive views of the extensive greenery of the Hattiban Forest and south lalitpur. Admire one of best get a glimpse of how the royals lived with a view of the central overseeing. Resort offers spaciously professionally designed accommodation features great accessibility to modern day comfort luxury. The rooms are wonderful mix of new-age charm and conveniences and promises to give its guests an unparalleled experience.
             </p>
          </div>
        </div>
      </div>
    </div>
    <style>

#demo {
    height: 100%;
    position: relative;
    overflow: hidden;
}

.green {
    background-color: #6fb936;
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

<style>
  /* .thumb img {
    width: 100%;
    height: 300px !important;
    object-fit: cover;
   
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
   @media (min-width: 768px) {
    .custom-ratio {
      --bs-aspect-ratio: 40%; 
    }
   }
</style>

<div class="container page-top py-4">
        <div class="row pe-4">
            @foreach($room->images as $index => $image)
            <div class="col-lg-4 col-md-5 col-xs-6 thumb">
                <a href="{{ asset('storage/'.$image) }}" class="fancybox" rel="ligthbox">
                    <img src="{{ asset('storage/'.$image) }}" class="zoom img-fluid" alt="">
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
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>





    <!-- <div class="d-flex justify-content-center align-items-center">
        <div class="vertical-line"></div>
      </div>
<!-- Carousel for Room Images -->
<!-- <div id="carouselExampleControlsNoTouching" class="carousel slide"  data-bs-ride="carousel" data-bs-interval="500">
    <div class="carousel-inner">
        @foreach ($room->images as $index => $image)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/'.$image) }}" class="d-block w-100" alt="Room Image">
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
</div>  -->

<!-- Room Features -->
<div class="container py-5 custom-margin-padding">
    <div class="row g-5">
        <div class="col-lg-7">
            <p class="text-muted fs-6 m-0">Champadevi Hillside Resort</p>
            <h3 class="fw-bold m-0 text-color">The Pinnacle of Comfort</h3>
            <p class="text-muted pe-4" style="text-align: justify; padding: 10px 0px;">
                {{ $room->description }}
            </p>

            <a href="https://archiesoftbook.chr.com.np/"><button id="myBtn1">Book Now</button></a>
        </div>

        <div class="col-lg-4 col-md-12 pe-4">
            <div class="row row-cols-2 row-cols-sm-2 ">
                <!-- Left Column of Features -->
                <div class="col">
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-tv feature-icon " style="margin-right: 10px; margin-top:5px;"></i>
                        <span>32" Smart TV</span>
                    </div>
                    <div class="divider" style="background-color: #f1f1f1;"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-chair feature-icon " style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Private Balcony</span>
                    </div>
                    <div class="divider" style="background-color: #f1f1f1;"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-couch feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Seating Area</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-broom feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Daily Housekeeping</span>
                    </div>
                    <div class="divider" style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-wind feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Hair Dryer</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-phone feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Telephone</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-dumpster feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Iron Facilities</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                      <i class="fas fa-shoe-prints feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                      <span>Bathroom Slippers</span>
                  </div>
                  <div class="divider"style="background-color:#f1f1f1"></div>
                </div>

                <!-- Right Column of Features -->
                <div class="col">
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-wifi feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Free Wifi</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-snowflake feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Air Conditioner</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-mug-hot feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Electric Kettle</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-clipboard feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Work Desk</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-shower feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Shower</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-syringe feature-icon" style="margin-right: 10px;margin-top:5px;"></i>
                        <span>Sewing Kit</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>
                    <div class="feature-item" style="display: flex; align-items: center;">
                        <i class="fas fa-tint feature-icon" style="margin-right: 10px;"></i>
                        <span>Complimentary Water Bottle</span>
                    </div>
                    <div class="divider"style="background-color:#f1f1f1"></div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Similar Rooms Section -->
<!-- <div style="background-color: #F1F1F1;">
    <h3 class="text-center p-5 text-color fw-bold">Similar Rooms</h3>
    
@php
    $currentRoomId = request()->route('id'); // Get the current room ID from the route
    $rooms = \App\Models\Room::where('id', '!=', $currentRoomId)->get(); // Exclude the current room
@endphp

<div class="cnc-inverse-divider uk-margin uk-text-center">
    <div class="uk-container"> 
        <div class="uk-flex uk-flex-center"> 
            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small " uk-grid>

                @foreach($rooms as $room)
                    <div>
                        <div class="el-item uk-light">
                            <a class="uk-box-shadow-medium uk-box-shadow-hover-large uk-inline-clip uk-transition-toggle uk-link-toggle"
                                href="{{ route('room.detail', $room->id) }}"> <!-- Adjust link as per your routes -->

                                <!-- <picture>
                                    <img src="{{ asset('storage/' . $room->featured_image) }}" width="296" height="555" alt
                                        loading="lazy" class="el-image uk-transition-opaque uk-image-rooms"
                                        style="height:400px; object-fit: cover; filter:brightness(0.7);">
                                </picture> -->

                                <!-- <div class="uk-overlay-default uk-transition-fade uk-position-cover"></div>
                                <div class="uk-position-bottom-center">
                                    <div class="uk-overlay uk-margin-remove-first-child">
                                        <h4 class="el-title uk-heading-divider uk-margin-top uk-margin-remove-bottom">
                                            {{ $room->name }} <!-- Display room name -->
                                        <!-- </h4>
                                        <ul class="amenities-list list-unstyled d-flex flex-wrap gap-3 justify-content-center">
                                            <li><i class="bi bi-tv-fill"></i></li>
                                            <li><i class="bi bi-cup-straw"></i></li>
                                            <li><i class="bi bi-wifi"></i></li>
                                            <li><i class="bi bi-shield-lock-fill"></i></li>
                                            <li><i class="bi bi-hair-dryer"></i></li>
                                            <li><i class="bi bi-tools"></i></li>
                                        </ul>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div> -->
                <!-- @endforeach -->
<!-- 
            </div>
        </div>
    </div>
</div>
</div>  -->
<!-- testimonial -->
<style>
    .room-card {
      position: relative;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .room-image {
      width: 100%;
      height: 450px;
      display: block;
    }

    .room-info {
      position: absolute;
      bottom: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.5);
      color: #fff;
      text-align: center;
      padding: 15px 10px;
    }

    .room-info h5 {
      border-top: 1px solid #fff;
      border-bottom: 1px solid #fff;
      display: inline-block;
      padding: 5px 20px;
      margin-bottom: 10px;
    }

    .room-icons i {
      font-size: 16px;
      margin: 0 8px;
    }
</style>

@php
    $currentRoomId = request()->route('id'); // Get the current room ID from the route
    $rooms = \App\Models\Room::where('id', '!=', $currentRoomId)->get(); // Exclude the current room
@endphp

<section class="py-5 pe-4" style="background-color: #F1F1F1;">
    <div class="container mx-auto">
        <h2 class="text-center py-3">Similar Rooms</h2>
        <div class="row justify-content-center">
             @foreach($rooms as $room)
       <div class="col-md-4 col-lg-3">
        
         <a href="{{ route('room.detail', $room->id) }}"class="text-white"><div class="room-card">
        <img src="{{ asset('storage/' . $room->featured_image) }}" alt="Super Deluxe Room" class="room-image"> <!-- Replace with your image -->
         <div class="room-info">
     <h5> {{ $room->name }}</h5>  
          <div class="room-icons mt-2">
            <i class="fas fa-tv"></i>
            <i class="fas fa-coffee"></i>
            <i class="fas fa-wifi"></i>
            <i class="fas fa-shield-alt"></i>
            <i class="fas fa-utensils"></i>
          </div></a>
        </div>
      </div>
    </div>
    
@endforeach

    </div>
    </div>
</section>

            
    





