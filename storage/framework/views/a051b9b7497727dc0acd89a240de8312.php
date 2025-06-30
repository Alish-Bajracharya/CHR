<?php $__env->startSection('content'); ?>
      <body>
      <div
        class="position-relative text-white about-container"
        style="
          height: 800px;
          background: url('<?php echo e(asset('assets/images/304A9030.jpg')); ?>') center center/cover no-repeat;
        "
      >

      </div>

  <div class="container text-slider-container">
    <div class="row justify-content-center pe-4">
      <div class="col-lg-8 col-md-10 col-sm-12">
        <div class="text-center">
            <div>

              <h2>BalKumari Hall</h2>
              <p>Big Hall having 160 seating, P2.5 LED Screen (2.5 mtr x 7.5 mtr size), HD Projector 3 nos, Audio & Video system, floor box (power socket & Net Interface) surroundings – Single Hall
                  <table class="table table-bordered">
                      <thead class="table-light">
                          <tr>
                              <th>Hall Setup</th>
                              <th>Occupancy</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Theatre</td>
                              <td>130 pax</td>
                          </tr>
                          <tr>
                              <td>Boardroom or UV Shaped</td>
                              <td>50-60 pax</td>
                          </tr>
                          <tr>
                              <td>Restaurant or Round Table</td>
                              <td>60-70 pax</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
            </div>
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





<div class="container page-top ">
<div class="row pe-4">
    <div class="col-lg-4 col-md-5 col-xs-6 thumb">
        <a href="<?php echo e(asset('assets/images/chr-conference-4.JPG')); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo e(asset('assets/images/chr-conference-4.JPG')); ?>" class="zoom img-fluid" alt="">
        </a>
    </div>
    <div class="col-lg-4 col-md-5 col-xs-6 thumb">
        <a href="<?php echo e(asset('assets/images/chr-conference-2.JPG')); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo e(asset('assets/images/chr-conference-2.JPG')); ?>" class="zoom img-fluid" alt="">
        </a>
    </div>
    
    
    <div class="col-lg-4 col-md-5 col-xs-6 thumb">
        <a href="<?php echo e(asset('assets/images/chr-conference-3.JPG')); ?>" class="fancybox" rel="ligthbox">
            <img src="<?php echo e(asset('assets/images/chr-conference-3.JPG')); ?>" class="zoom img-fluid" alt="">
        </a>
    </div>
    
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



  <!-- <div class="d-flex justify-content-center align-items-center">
    <div class="vertical-line"></div>
  </div> -->
  <!-- <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-ride="carousel" data-bs-interval="500">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo e(asset('assets/images/chr-conference-4.JPG')); ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('assets/images/chr-conference-2.JPG')); ?> " class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('assets/images/chr-conference-3.JPG')); ?> " class="d-block w-100" alt="...">
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
</div> -->

  <div style="background-color: #F1F1F1;">
    <div class="container text-center  text-slider-container">
      <h3 class="mb-5">Main Facilities</h3>
      <div class="row g-4">
        <div class="col-md-4">
          <i class="bi bi-film facility-icon"></i>
          <h3 class="facility-heading">Theatre</h3>
          <p class="facility-description">
            Resort ensure guest comfort with well-appointed rooms featuring air conditioning.
          </p>
        </div>
        <div class="col-md-4">
          <i class="facility-icon bi bi-easel"></i>
          <h3 class="facility-heading">White Board/Screen</h3>
          <p class="facility-description">
              We offer presentation amenities with provided whiteboards/screens for guest convenience.
          </p>
        </div>
        <div class="col-md-4">
          <i class="facility-icon bi bi-pin"></i>
          <h3 class="facility-heading">Soft (pin) board</h3>
          <p class="facility-description">
            For guests' notes and convenience.
          </p>
        </div>
        <div class="col-md-4">
          <i class="facility-icon bi bi-mic"></i>
          <h3 class="facility-heading">Mic System</h3>
          <p class="facility-description">
            Equip conference rooms with advanced microphone systems.
          </p>
        </div>
        <div class="col-md-4">
          <i class="facility-icon bi bi-calendar3"></i>
          <h3 class="facility-heading">Meeting & Events</h3>
          <p class="facility-description">
            Flip boards for presentations and collaborative sessions.
          </p>
        </div>
        <div class="col-md-4">
          <i class="facility-icon bi bi-megaphone"></i>
          <h3 class="facility-heading">Public Announcement</h3>
          <p class="facility-description">
            PA system with cordless microphones.
          </p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-projector facility-icon"></i>
          <h3 class="facility-heading">Projector</h3>
          <p class="facility-description">
            PA system with cordless microphones.
          </p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-camera-video facility-icon"></i>
          <h3 class="facility-heading">Video Conference Facilities</h3>
          <p class="facility-description">
            PA system with cordless microphones.
          </p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-printer facility-icon"></i>
          <h3 class="facility-heading">Printing Serive</h3>
          <p class="facility-description">
            PA system with cordless microphones.
          </p>
        </div>

      </div>
    </div>
  </div>
  <div class="container mx-auto" style="padding-top:50px;">
    <h3 class="text-center py-5">Conference Halls</h3>
    <div class="row g-4 pe-4">
        <div class="col-md-4">
            <a href="https://chr.com.np/new02/balkumari-hall" class="text-decoration-none"> <!-- Add your actual link here -->
                <div class="event-card">
                    <img src="<?php echo e(asset('assets/images/chr-conference-4.JPG')); ?>" alt="Meeting and Special Events">
                    <h4 class="overlay">BallKumari Hall
                      <p class="text-white fs-6 m-0">54 feet X 40 feet</p>
                      <div class="divider" style="margin-left:120px;background-color: #fff;"></div>
                    </h4>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="https://chr.com.np/new02/Bishnudevi&BirkheshworHall" class="text-decoration-none"> <!-- Add your actual link here -->
                <div class="event-card">
                    <img src="<?php echo e(asset('assets/images/chr-conference.jpg')); ?>" alt="Corporate Retreat and Team Building">
                    <h4 class="overlay">Bishnudevi & Birkheshwor Hall
                      <p class="text-white fs-6 m-0">40feet X 27feet</p>
                    <div class="divider" style="margin-left:120px; background-color: #fff;"></div>
                  </h4>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="https://chr.com.np/new02/Bagh%20Bhairab-Hall" class="text-decoration-none"> <!-- Add your actual link here -->
                <div class="event-card">
                    <img src="<?php echo e(asset('assets/images/chr-baghbhairav-3.jpg')); ?>" alt="Venues and Floor Plan">
                    <h4 class="overlay">Bagh Bhairab Hall
                      <p class="text-white fs-6 m-0">28 X 16 feet</p>
                      <div class="divider" style="margin-left:120px;background-color: #fff;"></div>
                    </h4>
                </div>
            </a>
        </div>
    </div>
</div>
</div>


  <!-- Bootstrap JS -->
<!-- testimonial -->
<!-- <?php
    $review = \App\Models\Review::first(); // Fetch the first review from the database
?> -->

<!-- <?php if($review): ?> -->
<!-- <div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="p-4 text-center"> -->
                <!-- Stars -->
                <!-- <div class="mb-3">
                    <?php for($i = 0; $i < $review->rating; $i++): ?>
                        <i class="bi bi-star-fill text-warning"></i>
                    <?php endfor; ?>
                </div> -->
                <!-- Testimonial -->
                <!-- <p class="fs-5 text-muted">
                    <?php echo e($review->review); ?>

                </p> -->
                <!-- User Info -->
                <!-- <div class="d-flex align-items-center mt-4 flex-wrap justify-content-center">
                    <img
                        src="<?php echo e(asset('storage/' . $review->reviewer_image)); ?>"
                        alt="user"
                        class="rounded-circle me-3"
                        style="width: 60px; height: 60px;"
                    />
                    <div>
                        <h5 class="fw-bold p-0 m-0 text-color"><?php echo e($review->reviewer_name); ?></h5>
                        <p class="text-muted m-0"><?php echo e($review->designation); ?></p>
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
    </div>
</div> -->
<!-- <?php endif; ?> -->

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- <script>
      document.addEventListener("DOMContentLoaded", function () {
        const carousel = document.querySelector(
          "#carouselExampleSlidesOnly"
        );
        new bootstrap.Carousel(carousel, {
          interval: 2000,
          ride: "carousel",
        });
      });
    </script> -->

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

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CHR\resources\views/frontend/ballkumarihall.blade.php ENDPATH**/ ?>