<?php $__env->startSection('content'); ?>


        <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        

        .modal-overlay {
            position: fixed;
            top: 61px;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .notice-page {
            position: relative;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 50%;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .resort-name {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 5px;
            padding-right: 30px; /* Add space for close button */
        }

        /* hr {
            border: 0;
            height: 1px;
            background: #eee;
            margin: 10px 0;
        } */

        .notice-title {
            color: #e74c3c;
            font-size: 18px;
            margin: 10px 0;
            font-weight: 600;
        }

        .notice-content {
            margin-top: 10px;
            color: #444;
            font-size: 14px;
            line-height: 1.5;
        }

        .important {
            background: #fff3cd;
            border-left: 4px solid #f39c12;
            padding: 10px;
            border-radius: 4px;
            margin: 10px 0;
            font-size: 13px;
        }

        .notice-content ul {
            text-align: left;
            margin: 10px 0;
            padding-left: 20px;
            font-size: 13px;
        }

        .notice-content ul li {
            margin: 5px 0;
        }

        .contact-box {
            background: #e3f2fd;
            border-left: 4px solid #3498db;
            padding: 10px;
            border-radius: 4px;
            margin: 15px 0;
            text-align: left;
            font-size: 13px;
        }

        .explore-rooms-section {
          background-color: #F1F1F1;
        }

        .explore-text-container {
          text-align: center;
          max-width: 800px;
          margin-top: 300px;
          margin: 0 auto;
        }

        .explore-text-container h2 {
          font-size: 36px;
          font-weight: 600;
          color: #025E5B;
        }

        .explore-text-container p {
          text-align: justify;
          position: relative;
          overflow: hidden;
          max-height: 7.5em;
          line-height: 1.5em;
          transition: max-height 0.4s ease;
        }

        .explore-text-container p.expanded {
          max-height: none;
        }

        .read-more-btn, .room-readmore-btn {
          margin-top: 10px;
          display: inline-block;
          color: #025E5B;
          cursor: pointer;
          font-weight: 500;
          font-size: 16px;
        }

        .explor_item {
          background-color: white;
          border-radius: 10px;
          overflow: hidden;
          box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
          transition: transform 0.3s ease;
        }

        .explor_item:hover {
          transform: translateY(-5px);
        }

        .room_image {
          overflow: hidden;
          position: relative;
          display: block;
          height: 100%;
        }

        .room_image img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          transition: transform 0.5s ease;
        }

        .room_image:hover img {
          transform: scale(1.1);
        }


        .explor_text {
          padding: 20px;
        }

        .explor_footer a {
          transition: all 0.3s ease;
          border: 2px solid #f18e25;
          padding: 6px 14px;
        }

        .explor_footer a:hover {
          background-color: #f18e25;
          color: white !important;
        }

        .room-card {
          min-height: 250px;
        }

        .room-description {
          overflow: hidden;
          max-height: 6em; /* ~4 lines */
          text-align: justify;
          transition: max-height 0.4s ease;
        }

        .room-description.expanded {
          max-height: none;
        }

        .text-danger {
            --bs-text-opacity: 1;
            color: rgb(233 110 0) !important;
        }
        .details {
            --bs-text-opacity: 1;
            color: #025E5B;
            border-radius: 10px;
            font-size: small;
        }

        .footer {
            margin-top: 10px;
            font-size: 12px;
            color: #7f8c8d;
        }

        .py-5 {
          
            position: relative;
            overflow: hidden;
        }

        /* .py-5::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, #c8a97e, transparent);
        } */

        .py-5 h2.text-center {
            font-family: 'Works Sans', sans-serif;
            font-size: 36px;
            color: #333;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }

        .py-5 h2.text-center::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 2px;
            background-color: #c8a97e;
        }

        .service-card {
            background: white;
            padding: 2rem 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid rgba(200, 169, 126, 0.1);
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(200, 169, 126, 0.1) 0%, rgba(200, 169, 126, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.2rem;
            position: relative;
            transition: all 0.3s ease;
            border: 2px solid rgba(200, 169, 126, 0.2);
        }
 
        .service-icon::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid #c8a97e;
            animation: pulse 2s infinite;
            opacity: 0;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.2);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }

        .service-card:hover .service-icon {
            background: #c8a97e;
            transform: rotateY(180deg);
        }

        .service-card:hover .service-icon i {
            color: white;
            transform: rotateY(180deg);
        }

        .service-icon i {
            color: #f18e25;
            transition: all 0.3s ease;
        }

        .service-title {
            font-family: "Work Sans", sans-serif;
            color: #333;
            font-size: 1.1rem;
            font-weight: 600;
            margin-top: 1rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-title {
            color: #c8a97e;
        }

@media (max-width: 768px) {
  /* --- Universal Padding on Both Sides --- */
  .container,
  .col-12,
  .section,
  .explore-rooms-section,
  .explore-text-container,
  .room-card,
  .service-section,
  .service-card,
  .explor_text {
    padding-left: 1rem;
    padding-right: 1rem;
    box-sizing: border-box;
  }

  /* --- Room Card Specific --- */
  .room-card {
    flex-direction: column !important;
    min-height: auto;
  }

  .room_image {
    width: 100%;
    height: 230px;
    border-bottom: 1px solid #ddd;
  }

  .room_image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-right: none;
    transition: transform 0.5s ease;
  }

  .explor_text {
    padding: 1rem 0;
  }

  .room-description {
    font-size: 14px;
    max-height: 6em;
    text-align: justify;
  }

  .room-description.expanded {
    max-height: none;
  }

  .room-readmore-btn,
  .read-more-btn {
    font-size: 14px;
  }

  .amenities-list {
    justify-content: center;
  }

  /* --- Explore Text Container --- */
  .explore-text-container {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }

  .explore-text-container h2 {
    font-size: 1.75rem;
  }

  .explore-text-container p {
    font-size: 14px;
    line-height: 1.6;
  }

  /* --- Services Section --- */
  .service-card {
    padding: 1.2rem 1rem;
    max-width: 250px;
    margin: auto;
    text-align: center;
  }

  .service-icon {
    width: 60px;
    height: 60px;
  }

  .service-icon i {
    font-size: 1.5rem;
  }

  .service-title {
    font-size: 0.9rem;
  }

  .py-5 h2.text-center {
    font-size: 1.75rem;
  }
}
    </style>


    <div id="noticeModal" class="modal-overlay">
        <div class="notice-page">
            <div class="resort-header">
                <button class="close-button" onclick="closeModal()">✕</button>
                <div class="resort-name">Champadevi Hill Side Resort</div>
                <hr>
            </div>
            <h2 class="notice-title">Important Booking Notice</h2>
            <div class="notice-content">
                <p>Dear Valued Guests,</p>
                <div class="important">
                    <p><strong>Please note:</strong> Champadevi Hill Side Resort is currently <strong>not accepting online bookings through our OTA platforms</strong>.</p>
                    <p>Any reservations attempted through our OTA Platforms will not be processed.</p>
                </div>
                <p>We apologize for any inconvenience this may cause and appreciate your understanding as we upgrade our booking systems to better serve you.</p>
                <h3>What This Means For You:</h3>
                <ul>
                    <li>Do not attempt to book rooms through our OTA platforms like(Booking.com,Agoda.com etc)</li>
                    <li>Existing reservations made prior to this notice will be honored</li>
                    <li>We're making these changes to improve service quality</li>
                </ul>
                <div class="contact-box">
                    <h3>How To Book With Us:</h3>
                    <p><strong>Phone:</strong> +9763699009</p>
                    <p><strong>Email:</strong> reservation@chr.com.np</p>
                    <p><strong>In Person:</strong> Visit our reception during business hours</p>
                </div>
                <p>Thank you for your continued support. We look forward to welcoming you to Champadevi Hill Side Resort.</p>
                <p><strong>The Management Team</strong></p>
            </div>
            <div class="footer">
                &copy; <span id="current-year"></span> Champadevi Hill Side Resort. All rights reserved.
            </div>
        </div>
    </div>

    <script>
        document.getElementById('current-year').textContent = new Date().getFullYear();
        function closeModal() {
            document.getElementById("noticeModal").style.display = "none";
        }
        window.onload = function() {
            document.getElementById("noticeModal").style.display = "flex";
        };
    </script>



    <main id="tm-main">
      <div id="system-message-container" data-messages="[]"></div>

      <!-- Builder #page -->
      <style class="uk-margin-remove-adjacent">
        #page\#0 iframe.uk-cover {
          min-width: 2000px;
        }
      </style>
      <?php
    $slider = App\Models\Carousel::all(); 
?>
<div id="page#0"
    class="uk-position-relative uk-inverse-light uk-section uk-padding-remove-top uk-padding-remove-bottom uk-flex uk-flex-middle"
    tm-header-transparent-noplaceholder uk-height-viewport="offset-top: true;">
    <div class="uk-width-1-1">
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin">
            <div class="uk-width-1-1@m uk-width-1-1@s">
                <div uk-slideshow="ratio: false; autoplay: 1; pauseOnHover: false; autoplayInterval: 8000;" class="uk-margin uk-margin-remove-bottom">
                    <div class="uk-position-relative">
                        <ul class="uk-slideshow-items" style="min-height: max(300px, 100vh)">
                            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $images = is_array($item->images) ? $item->images : json_decode($item->images, true);
                                ?>
                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="el-item">
                                        <picture>
                                            <img src="<?php echo e(asset('storage/' . $image)); ?>" class="el-image" alt="<?php echo e($item->title); ?>" loading="lazy" uk-cover />
                                        </picture>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                         <!-- Left Button -->
                        <div class="uk-position-center-left uk-position-small uk-hidden-hover">
                            <a href="#" uk-slideshow-item="previous"
                                class="uk-icon-button"
                                style="background-color: #025E5B; border-radius: 50%; padding: 12px;">
                                <span uk-icon="icon: chevron-left; ratio: 2"></span>
                            </a>
                        </div>

                        <!-- Right Button -->
                        <div class="uk-position-center-right uk-position-small uk-hidden-hover">
                            <a href="#" uk-slideshow-item="next"
                                class="uk-icon-button"
                                style="background-color: #025E5B; border-radius: 50%; padding: 12px;">
                                <span uk-icon="icon: chevron-right; ratio: 2"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


      <div class="uk-section-default uk-position-relative" style="margin-bottom: 0 !important; padding-bottom: 0 !important;">
        <div
          style="background-size: 800px 731px; padding: 0; padding-top: 100px; padding-bottom: 0 !important; margin-bottom: 0 !important;"
          data-src="/templates/yootheme/cache/94/hawthron-943af740.png"
          data-sources='[{"type":"image\/webp","srcset":"\/templates\/yootheme\/cache\/ea\/hawthron-ea001363.webp 800w, \/templates\/yootheme\/cache\/49\/hawthron-49efbed5.webp 1024w, \/templates\/yootheme\/cache\/73\/hawthron-736cd0b5.webp 1199w, \/templates\/yootheme\/cache\/2e\/hawthron-2e8d227f.webp 1200w","sizes":"(min-width: 800px) 800px"}]'
          uk-img
          class="uk-background-norepeat uk-background-bottom-left uk-section uk-section-xlarge uk-flex uk-flex-middle uk-height-viewport"
          uk-parallax="bgx: -150,-150; easing: 1"
        >
          <div class="uk-position-cover" style="background-color: rgba(255, 255, 255, 0.82); margin-bottom: 0 !important;"></div>

          <div class="uk-width-1-1" style="margin-bottom: 0 !important;">
            <div class="uk-container uk-container-large uk-position-relative" style="margin-bottom: 0 !important;">
              <div class="uk-grid tm-grid-expand uk-grid-collapse" uk-grid style="margin-bottom: 0 !important;">
                <?php
                  $aboutUs = App\Models\AboutUs::first(); // Fetching the first record or you can change this logic as needed
                ?>
                <div class="uk-width-1-2@m">
                  <div
                    class="uk-card uk-card-default uk-card-small uk-card-body uk-margin-remove-first-child uk-padding-remove uk-position-z-index uk-position-relative uk-margin"
                    uk-parallax="x: 50,50; y: -50,110; easing: 1; media: @m; end: 20vh + 20%">
                    <div class="el-content uk-panel uk-margin-top">
                      <img src="<?php echo e(asset('storage/' . $aboutUs->main_image)); ?> " />
                    </div>
                  </div>
                </div>
                <div class="uk-grid-item-match uk-width-1-2@m">
                  <div class="uk-tile-muted uk-tile">
                    <h1 class="uk-width-medium uk-margin-auto">
                      Champadevi Hillside Resort
                    </h1>
                    <hr style="margin-left:120px">
                    <div class="uk-panel uk-margin uk-width-medium uk-margin-auto about-description">
                      <?php echo e($aboutUs->short_description); ?>

                    </div>

                    <div class="uk-margin uk-width-medium uk-margin-auto">
                      <a class="el-content uk-button uk-button-text" href="<?php echo e(route('about-us.show')); ?>">
                        READ THE STORY
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- acco -->
      <!-- <div class="uk-section-secondary section">
        <div style="background-size: 1440px 748px;"
                data-src="/templates/yootheme/cache/1e/bg1-1ed6064a.png"
                data-sources="[{&quot;type&quot;:&quot;image\/webp&quot;,&quot;srcset&quot;:&quot;\/templates\/yootheme\/cache\/6d\/bg1-6dde2b32.webp 1440w, \/templates\/yootheme\/cache\/f7\/bg1-f763d985.webp 1600w, \/templates\/yootheme\/cache\/ce\/bg1-ceed0864.webp 1920w, \/templates\/yootheme\/cache\/fb\/bg1-fbe0e926.webp 2341w&quot;,&quot;sizes&quot;:&quot;(min-width: 1440px) 1440px&quot;}]"
                uk-img
                class="uk-background-norepeat uk-background-top-right">
                <div class="uk-container uk-container-large">
                        <div class="uk-grid-margin uk-container uk-container-small">
                                <div class="uk-grid tm-grid-expand uk-child-width-1-1">
                                        <div class="uk-width-1-1@m">

                                                <h2
                                                        class="uk-h1 uk-width-xlarge@m uk-margin-auto-right@m uk-margin-remove-left@m uk-margin-auto uk-text-left" style="padding-top:50px">
                                                        The Stay </h2>
                                                <div
                                                        class="uk-panel uk-margin uk-width-medium@m" style="color:#000">
                                                        The ChampaDevi Resort provides guests
                                                        with a range of fully-furnished elegant
                                                        rooms fit for any occasion for travelers
                                                        and all across the world.</div>
                                        </div>
                                </div>
                        </div>
                        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-margin-xlarge">
<div class="uk-width-1-1@m">
    <div class="cnc-inverse-divider uk-margin uk-text-center">
        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-3@m uk-child-width-1-5@l uk-grid-small uk-style"
            uk-grid>

            <?php
                $rooms = \App\Models\Room::all(); // Fetch rooms from the database
            ?>

            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Loop through the rooms -->
                <!-- <div>
                    <div class="el-item uk-light">
                        <a class="uk-box-shadow-medium uk-box-shadow-hover-large uk-inline-clip uk-transition-toggle uk-link-toggle"
                            href="<?php echo e(route('room.detail', $room->id)); ?>"> <!-- Adjust link as per your routes -->

                            <!-- <picture>
                                <img src="<?php echo e(asset('storage/' . $room->featured_image)); ?>" width="296" height="555" alt
                                    loading="lazy" class="el-image uk-transition-opaque uk-image-rooms"
                                    style="height:400px; object-fit: cover; filter:brightness(0.7);">
                            </picture>

                            <div class="uk-overlay-default uk-transition-fade uk-position-cover"></div>
                            <div class="uk-position-bottom-center">
                                <div class="uk-overlay uk-margin-remove-first-child">
                                    <h4 class="el-title uk-heading-divider uk-margin-top uk-margin-remove-bottom">
                                        <?php echo e($room->name); ?> <!-- Display room name -->
                                    <!-- </h4>
                                     <ul class="amenities-list list-unstyled d-flex flex-wrap gap-3">
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
                    </div>  -->
                <!-- </div> -->
            <!-- <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
        <!-- </div>
    </div>
</div> -->
                        <!-- </div>
                </div>


        </div>

</div>






    </div>
  </div>
</div> -->
      <!-- Highlights -->
      <!-- <div class="section">
        <h2 class="uk-text-center">Highlights</h2>
        <div class="uk-grid tm-grid-expand uk-child-width-1-1 uk-grid-margin" style="padding-top:50px;">
          <div class="uk-width-1-1@m">
            <div class="uk-light cf-emotion-accordion">
              <div class="cf-container cf-breakpoint cf-breakpoint-" style="height: 700px">
                <div class="cf-source uk-cover-container">
                  <img class="cf-default cf-source-content" alt="" uk-cover data-src=" <?php echo e(asset('assets/images/chr-menubar.jpg')); ?> " uk-img />
                  <img class="cf-673c846ea1d5e cf-source-content" alt="" uk-cover data-src="<?php echo e(asset('assets/images/slide05.jpg')); ?> "
                    uk-img />
                  <img class="cf-673c846ea1d62 cf-source-content" alt="" uk-cover data-src="<?php echo e(asset('assets/images/chr-champadeviforest.jpg')); ?>"
                    uk-img />
                  <img class="cf-673c846ea1d64 cf-source-content" alt="" uk-cover data-src="<?php echo e(asset('assets/images/enjoy_spa_01.webp')); ?>"
                    uk-img />
                </div>
                <div class="cf-tabs cf-all-close">
                  <div id="cf-673c846ea1d5e" class="cf-tab el-item">
                    <div class="cf-close"><a uk-icon="icon: close"></a></div>
                    <div class="cf-meta">
                      <p class="uk-text-meta">Sports</p>
                    </div>
                    <div class="cf-title-close">
                      <h2 class="uk-h1 uk-text-center cf-title" style="color:white !important;">Pool</h2>

                      <span class="uk-text-center el-image" uk-icon="icon: plus; ratio: 1.5;"></span>
                    </div>
                    <div class="cf-link-close">
                      <div class="uk-text-center"></div>
                    </div>
                    <div class="cf-item-open">
                      <div class="cf-open-meta uk-margin-auto-right">
                        <p class="uk-text-meta">Sports</p>
                      </div>
                      <div class="cf-open-title uk-margin-auto-right">
                        <h2 class="uk-h1 uk-text-center cf-title" style="color:white !important;">Pool</h2>
                      </div>
                      <div class="content">
                        <div class="el-content uk-margin">
                          <div class="uk-width-xlarge uk-margin-bottom">
                            Inspired by the myth, magic and mystery of the
                            once forbidden valley, David Kidd of Gleneagles
                            Golf Developments, pitted his skills against those
                            of nature, creating a golf masterpiece. Spread
                            over 140 acres at 4,550 ft above sea level, the
                            6,755 yard par 72 course boasts the only bentgrass
                            greens on an 18 hole course in South and South
                            East Asia.
                          </div>

                          <a href="#" class="uk-button uk-button-primary uk-button-small" style="color:#fff">Read More</a>
                        </div>
                      </div>
                      <div class="cf-open-title"></div>
                    </div>
                  </div>
                  <div id="cf-673c846ea1d62" class="cf-tab el-item">
                    <div class="cf-close"><a uk-icon="icon: close"></a></div>
                    <div class="cf-meta">
                      <p class="uk-text-meta">Experiences</p>
                    </div>
                    <div class="cf-title-close">
                      <h2 class="uk-h1 uk-text-center cf-title" style="color:white !important;">
                        Forest Walk
                      </h2>

                      <span class="uk-text-center el-image" uk-icon="icon: plus; ratio: 1.5;"></span>
                    </div>
                    <div class="cf-link-close">
                      <div class="uk-text-center"></div>
                    </div>
                    <div class="cf-item-open">
                      <div class="cf-open-meta uk-margin-auto-right">
                        <p class="uk-text-meta">Experiences</p>
                      </div>
                      <div class="cf-open-title uk-margin-auto-right">
                        <h2 class="uk-h1 uk-text-center cf-title" style="color:white !important;">
                          Forest Walk
                        </h2>
                      </div>
                      <div class="content">
                        <div class="el-content uk-margin">
                          <div class="uk-width-large uk-margin-bottom">
                            Stroll along Champadevihillside resort Forest
                            Resort on our well trained and friendly horses
                            enjoying melodies of birds and cool breezes as you
                            pass through the jungle.
                          </div>

                          <a href="#" class="uk-button uk-button-primary uk-button-small"style="color:#fff">Read More</a>
                        </div>
                      </div>
                      <div class="cf-open-title"></div>
                    </div>
                  </div>

                  <div id="cf-673c846ea1d64" class="cf-tab el-item">
                    <div class="cf-close"><a uk-icon="icon: close"></a></div>
                    <div class="cf-meta">
                      <p class="uk-text-meta">Recreate</p>
                    </div>
                    <div class="cf-title-close">
                      <h2 class="uk-h1 uk-text-center cf-title" style="color:white !important;">Spa</h2>

                      <span class="uk-text-center el-image" uk-icon="icon: plus; ratio: 1.5;"></span>
                    </div>
                    <div class="cf-link-close">
                      <div class="uk-text-center"></div>
                    </div>
                    <div class="cf-item-open">
                      <div class="cf-open-meta uk-margin-auto-right">
                        <p class="uk-text-meta">Comming Soon</p>
                      </div>
                      <div class="cf-open-title uk-margin-auto-right">
                        <h2 class="uk-h1 uk-text-center cf-title" style="color:white !important;">Spa</h2>
                      </div>
                      <div class="content">
                        <div class="el-content uk-margin">
                          <div class="uk-width-large uk-margin-bottom">
                            An oasis of calm and tranquility, located deep
                            within a protected forest, our luxury spa and
                            health club welcome members and guests with a wide
                            range of facilities and services. Our Adam & Eve
                            and Serenity massage rooms offer a wonderful range
                            of services
                          </div>

                          <a href="#" class="uk-button uk-button-primary uk-button-small"style="color:#fff">Read More</a>
                        </div>
                      </div>
                      <div class="cf-open-title"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <script>
              var script = document.createElement("script");

              script.innerHTML =
                "window.onresize = checkMobile; function checkMobile() { var accordions = document.getElementsByClassName('cf-container'); for (var accordion of accordions) { if (typeof accordions[accordion] !== 'function') { if( accordion.classList.contains('cf-mobile')) { accordion.removeAttribute('style'); } else { accordion.setAttribute('style', 'height: 700px;'); }	}  } }";

              document.head.appendChild(script);
            </script>
          </div>
        </div>
      </div> -->

<section class="explore-rooms-section  py-5">
  <div class="container">
    <div class="explore-text-container  mb-5">
      <h2>Explore Our Rooms</h2>
      <hr class="mx-auto" style="width: 100px; border-color: #025E5B;">
      <p id="roomDesc">
        The resort features three distinct blocks, each named in honor of the ancestors who played a pivotal role in our legacy. In a heartfelt tribute to our ancestors, the names of various places within the resort have been thoughtfully chosen to reflect the cherished locations from their hometown. Nestled against the serene backdrop of the Champadevi hills, our resort offers a unique blend of nature and comfort. Each room at Champadevi Hillside Resort is thoughtfully designed to provide a peaceful retreat, surrounded by breathtaking views of lush greenery and mountain landscapes.
      </p>
      <span class="read-more-btn" onclick="toggleReadMore()">Read more</span>
    </div>

    <!-- Room Cards -->
    <div class="row g-4">
      <?php $rooms = \App\Models\Room::all(); ?>

      <?php $__currentLoopData = $rooms->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-12">
        <div class="explor_item d-flex room-card flex-md-row flex-column">
          <!-- Image -->
          <div class="col-md-4 p-0">
            <a href="<?php echo e(route('room.detail', $room->id)); ?>" class="room_image d-block h-100">
              <img src="<?php echo e(asset('storage/' . $room->featured_image)); ?>" alt="<?php echo e($room->name); ?>">
            </a>
          </div>

          <!-- Text -->
          <div class="col-md-8 explor_text d-flex flex-column justify-content-between">
            <div>
              <a href="<?php echo e(route('room.detail', $room->id)); ?>">
                <h4 class="text-start mb-2" style="color: #025E5B;"><?php echo e($room->name); ?></h4>
              </a>

              <!-- Occupancy & Bed Info -->
              <p class="mb-2" style="color: #444;">
                <strong>Occupancy:</strong> <?php echo e($room->occupancy ?? '2 Adults, 1 Child'); ?> |
                <strong>Bed:</strong> <?php echo e($room->bed_type ?? 'Twin Bed'); ?>

              </p>

              <!-- Description with Read More -->
              <div id="desc-<?php echo e($room->id); ?>" class="room-description">
                <?php echo e($room->description ?? 'Experience a perfect stay with scenic views, traditional design, and modern amenities tailored for your comfort. Relax on a private balcony, soak in nature, and enjoy a memorable retreat.'); ?>

              </div>
              <span class="room-readmore-btn" onclick="toggleRoomDesc(<?php echo e($room->id); ?>)">Read more</span>

              <!-- Amenities -->
              <ul class="amenities-list text-danger list-unstyled d-flex flex-wrap gap-3 mt-3 mb-3">
                <li><i class="bi bi-tv-fill"></i></li>
                <li><i class="bi bi-cup-straw"></i></li>
                <li><i class="bi bi-wifi"></i></li>
                <li><i class="bi bi-shield-lock-fill"></i></li>
                <li><i class="bi bi-hair-dryer"></i></li>
                <li><i class="bi bi-tools"></i></li>
              </ul>
            </div>

            <!-- Footer -->
            <div class="explor_footer d-flex justify-content-between align-items-center mt-3">
              <h4 style="color: #025E5B; font-family: 'Rubik', sans-serif; font-weight: 700; font-size: 24px;">
                $<?php echo e($room->price); ?>

                <span style="font-size: 14px; font-weight: 400; color: #777;">/ Night</span>
              </h4>
              <a class="fw-bold details" href="<?php echo e(route('room.detail', $room->id)); ?>">
                View Details →
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</section>

<script>
  function toggleReadMore() {
    const para = document.getElementById('roomDesc');
    para.classList.toggle('expanded');
    const btn = document.querySelector('.read-more-btn');
    btn.textContent = para.classList.contains('expanded') ? 'Read less' : 'Read more';
  }

  function toggleRoomDesc(id) {
    const desc = document.getElementById('desc-' + id);
    const btn = desc.nextElementSibling;
    desc.classList.toggle('expanded');
    btn.textContent = desc.classList.contains('expanded') ? 'Read less' : 'Read more';
  }
</script>
  

<!-- service section -->
<div class="py-5">
    <h2 class="text-center">Our Premium Services</h2>
    <div class="container my-5">
        <div class="row g-4 justify-content-center">
            <!-- Service 1 -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bed fa-2x"></i>
                    </div>
                    <div class="service-title">Room Booking</div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-car fa-2x"></i>
                    </div>
                    <div class="service-title">Pickup & Drop</div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-wifi fa-2x"></i>
                    </div>
                    <div class="service-title">Free Wifi</div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tshirt fa-2x"></i>
                    </div>
                    <div class="service-title">Laundry</div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils fa-2x"></i>
                    </div>
                    <div class="service-title">Food & Drinks</div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 d-flex justify-content-center">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-concierge-bell fa-2x"></i>
                    </div>
                    <div class="service-title">24/7 Room Service</div>
                </div>
            </div>
        </div>
    </div>
</div>


      <!-- immersive experience -->

<div class="py-5" style="background-color: #F1F1F1;">
  <div class="container">
    <h2 class="text-center fw-bold display-5 mb-5">Explore the Resort</h2>

      <style>
/* Container & Section */
.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
  background-color: #F1F1F1;
}

      .explore-card {
        background: #fff;
        padding: 2.5rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        border-radius: 1rem;
        height: 100%;
        transition: transform 0.3s ease;
      }

      .explore-card:hover {
        transform: translateY(-5px);
      }

      .explore-card h3 {
        font-size: 1.75rem;
        font-weight: 700;
        color: #025E5B;
      }

      .explore-card p {
        font-size: 1rem;
        color: #444;
        margin-top: 1rem;
        justify-items: center;
        justify-content: center;
      }

      .explore-card hr {
        width: 60px;
        border: 2px solid #C8A97E;
        margin-top: 0.5rem;
      }

      .explore-btn {
        display: inline-block;
        margin-top: 1.5rem;
        padding: 0.5rem 1.5rem;
        border-radius: 0.5rem;
        border: 2px solid #f18e25;
        background: transparent;
        color: #025E5B;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .explore-btn:hover {
        background-color: #f18e25;
        color: #fff;
      }

      .explore-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 1rem;
        transition: transform 0.4s ease;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }

      .explore-img:hover {
        transform: scale(1.03);
      }

      </style>

    <!-- Reusable Component -->
    <div class="row align-items-center mb-5">
      <div class="col-md-6 px-0 px-md-3 mb-3 mb-md-0">
        <img src="<?php echo e(asset('assets/images/chr-indravirbar.jpg')); ?>" alt="Indra Bir Bar" class="explore-img w-100" />
      </div>
      <div class="col-md-6 px-0 px-md-3">
        <div class="explore-card">
          <h3>Indra Bir Bar</h3>
          <hr />
          <p>Named after the beloved patriarch of our founding family, Indra Bir Bar is a tribute to a man known for his love of fine drinks and captivating stories. Experience an ambiance where good times and cherished memories are always flowing.</p>
          <a href="https://chr.com.np/restaurant/food&drink" class="explore-btn">Read More →</a>
        </div>
      </div>
    </div>

    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-6 mb-3 mb-md-0">
        <img src="<?php echo e(asset('assets/images/chr-contact.jpg')); ?>" alt="Seesh Mahal" class="explore-img w-100" />
      </div>
      <div class="col-md-6">
        <div class="explore-card">
          <h3>Seesh Mahal</h3>
          <hr />
          <p>Enjoy exquisite gourmet meals under the stars. Seesh Mahal offers a culinary journey blending local delicacies with international flavors, ensuring an unforgettable dining experience in a mesmerizing ambiance.</p>
          <a href="https://chr.com.np/restaurant/food&drink" class="explore-btn">Read More →</a>
        </div>
      </div>
    </div>

    <div class="row align-items-center mb-5">
      <div class="col-md-6 mb-3 mb-md-0">
        <img src="<?php echo e(asset('assets/images/chr-swimming.jpg')); ?>" alt="Lachhi Pool" class="explore-img w-100" />
      </div>
      <div class="col-md-6">
        <div class="explore-card">
          <h3>Lachhi Pool</h3>
          <hr />
          <p>Dive into serenity at Lachhi Pool. Whether you're looking for a refreshing swim or a peaceful retreat by the water, our signature pool is designed to rejuvenate your body and mind amidst the beauty of Champadevi Hills.</p>
          <a href="https://chr.com.np/services" class="explore-btn">Read More →</a>
        </div>
      </div>
    </div>

    <div class="row align-items-center mb-5 flex-md-row-reverse">
      <div class="col-md-6 mb-3 mb-md-0">
        <img src="<?php echo e(asset('assets/images/chr-contact (2).png')); ?>" alt="Coffee Shop" class="explore-img w-100" />
      </div>
      <div class="col-md-6">
        <div class="explore-card">
          <h3>Coffee Shop</h3>
          <hr />
          <p>Our 24-hour coffee shop caters to every craving with a diverse menu. From authentic Nepalese delights to international favorites, enjoy rich flavors and warm hospitality any time of the day or night.</p>
          <a href="https://chr.com.np/restaurant/food&drink" class="explore-btn">Read More →</a>
        </div>
      </div>
    </div>

    <div class="row align-items-center mb-5">
      <div class="col-md-6 mb-3 mb-md-0">
        <img src="<?php echo e(asset('assets/images/gym.jpeg')); ?>" alt="Gym" class="explore-img w-100" />
      </div>
      <div class="col-md-6">
        <div class="explore-card">
          <h3>Gym</h3>
          <hr />
          <p>Stay active at our fully equipped gym, where modern fitness facilities meet the calming ambiance of nature. Perfect for both fitness enthusiasts and casual guests aiming to maintain their wellness routine.</p>
          <a href="https://chr.com.np/services" class="explore-btn">Read More →</a>
        </div>
      </div>
    </div>
  </div>
</div>















      








          <!-- <div class="d-flex flex-wrap justify-content-center mt-2">
            <ul class="list-unstyled d-flex flex-wrap gap-3 gap-md-5 m-0 text-dark">
              <li class="fs-6 fs-md-5 clickable-item" data-target="local-connection">
                <button class="btn-link text-decoration-none text-dark">
                  Local Interaction
                </button>
              </li>
              <li class="fs-6 fs-md-5 clickable-item" data-target="Major-Attraction">
                <button class="btn-link text-decoration-none text-dark">
                   Major Attraction
                </button>
              </li>
              <li class="fs-6 fs-md-5 clickable-item" data-target="nature-exploration">
                <button class="btn-link text-decoration-none text-dark">
                  Nature Exploration
                </button>
              </li>
            </ul>
          </div> -->



          <!-- Container for dynamically displayed content -->
          <!-- <div id="dynamic-content" class="container mt-5" style="display: none"></div>

        </div>
      </div> -->
      <!-- Facilities -->
      <!-- <div class="container-full my-5" style="padding-bottom: 100px;">
        <div class="row align-item-center">
          <h2 class="section-title text-center">In the Resort</h2> -->
            <!-- Facilities Section -->
            <!-- <div class="col-lg-5" style="position: relative;">

                <div class="card">
                    <img src="<?php echo e(asset('assets/images/chr-content.jpg')); ?>" alt="Wedding Decoration" class="img-fluid">
                </div>
                <div class="col-lg-5 col-md-9 text-section">
                  <div class="slider-container">
                    <div id="textSlider" class="slider">
                      <div class="slide">
                        <h3 style="color:#fff">Swimming</h3>
                        <div class="divider"></div>
                        <p>
                          ChampadeviHillside Resort offers you a perfect natural setting for a dream wedding. Boasting a breathtaking backdrop, the resort radiates overwhelming natural beauty.
                        </p>
                        <a href="#" class="read-more">READ MORE →</a>
                      </div>
                      <div class="slide">
                        <h3 style="color:#fff">Coffee Shop</h3>
                        <div class="divider"></div>
                        <p>
                          ChampadeviHillside Resort offers you a perfect natural setting for a dream wedding. Boasting a breathtaking backdrop, the resort radiates overwhelming natural beauty.
                        </p>
                        <a href="#" class="read-more">READ MORE →</a>
                      </div>
                      <!-- Additional slides... -->
                    <!-- </div>
                  </div>
                </div> -->


            <!-- </div>
      </div> -->
            <!-- Services Section -->

      <!-- Custom JavaScript for the Slider -->
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          const slider = document.querySelector('#textSlider');
          const slides = document.querySelectorAll('.slide');
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


          setInterval(nextSlide, 2000);
        });
      </script>


</div>
  <!-- exclusive offer -->
<?php
// Fetch all exclusive offers
$exclusiveOffers = App\Models\ExclusiveOffer::all();
?>

<!-- <div id="offer">
    <h2 class="text-center" style="padding-top:50px;">Exclusive Offer</h2>
    <div class="main" style="padding-bottom:60px;">
        <ul class="cards">
            <?php $__currentLoopData = $exclusiveOffers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image">
                            <img src="<?php echo e(asset('storage/' . $offer->image)); ?>" loading="lazy" class="w-100" style="height:240px;" alt="<?php echo e($offer->title); ?>">
                        </div>
                        <div class="card_content">
                            <h2 class="card_title"><?php echo e($offer->title); ?></h2>
                            <div class="card_text">
                                <p><?php echo $offer->description; ?></p>
                                <hr />
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div> -->
<!-- testimonial -->
<?php
    $reviews = \App\Models\Review::all(); // Fetch all reviews from the database
?>

<?php if($reviews->count()): ?>
<div class="container my-5 py-5">
    <h2 class="text-center fw-bold display-5 mb-5 text-color">Words from Guests</h2>

    <style>
        #reviewCarousel .carousel-item {
            transition: transform 0.6s ease-in-out;
        }

        .testimonial-card {
            background-color: #fff;
            padding: 2.5rem;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        }

        .testimonial-text {
            font-size: 1.1rem;
            line-height: 1.75;
            color: #555;
        }

        .testimonial-stars i {
            font-size: 1.1rem;
            color: #FFD700;
            animation: fadeIn 0.3s ease-in;
        }

        .reviewer-img {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        .carousel-indicators [data-bs-target] {
            background-color: #025E5B;
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .text-color {
            color: #025E5B;
        }

        .carousel-custom-buttons {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .carousel-btn {
            background-color: #025E5B;
            color: #fff;
            border: none;
            padding: 0.6rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .carousel-btn:hover {
            background-color: #f18e25;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>

    <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-item">
          <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10 col-sm-12">
                  <div class="testimonial-card text-center">
                      <div class="testimonial-stars mb-3">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-half"></i>
                      </div>
                      <p class="testimonial-text fst-italic">“The view, the food, and the serenity – everything was just magical. We’ll definitely be back! The rooms were clean, comfortable, and well-equipped with all the amenities needed for a relaxing stay. The food was another highlight - delicious local and international options, all prepared fresh.  The staff were incredibly friendly and accommodating, making us feel at home from the moment we arrived.”</p>
                      <div class="d-flex align-items-center justify-content-center mt-4 flex-column flex-md-row gap-3">
                          <img
                              src="<?php echo e(asset('assets/images/alish.jpg')); ?>"
                              alt="user"
                              class="reviewer-img"
                          />
                          <div>
                              <h5 class="fw-bold m-0 text-color">Alish Bajracharya</h5>
                              <small class="text-muted d-block">Developer</small>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
        <div class="carousel-inner">
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="carousel-item <?php echo e($index === 0 ? 'active' : ''); ?>">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="testimonial-card text-center">
                            <div class="testimonial-stars mb-3">
                                <?php for($i = 0; $i < $review->rating; $i++): ?>
                                    <i class="bi bi-star-fill"></i>
                                <?php endfor; ?>
                            </div>
                            <p class="testimonial-text fst-italic">“<?php echo e($review->review); ?>”</p>
                            <div class="d-flex align-items-center justify-content-center mt-4 flex-column gap-2">
                                <img src="<?php echo e(asset('storage/' . $review->reviewer_image)); ?>" alt="user" class="reviewer-img" />
                                <div class="text-center">
                                    <h5 class="fw-bold m-0 text-color"><?php echo e($review->reviewer_name); ?></h5>
                                    <small class="text-muted d-block"><?php echo e($review->designation); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>

        
        <?php if($reviews->count() > 1): ?>
        <div class="carousel-indicators mt-4">
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button type="button" data-bs-target="#reviewCarousel" data-bs-slide-to="<?php echo e($index); ?>" class="<?php echo e($index === 0 ? 'active' : ''); ?>" aria-current="<?php echo e($index === 0 ? 'true' : 'false'); ?>" aria-label="Slide <?php echo e($index + 1); ?>"></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>

        
        <?php if($reviews->count() > 1): ?>
        <div class="carousel-custom-buttons">
            <button class="carousel-btn" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
                ← Previous
            </button>
            <button class="carousel-btn" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
                Next →
            </button>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>








<!-- Contact Information -->
<div class="container my-5">
  <div class="row gx-1 align-items-start">
    <!-- Left Side: Map -->
    <div class="col-md-7">
      <div class="map-container rounded overflow-hidden shadow-sm">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.92831830796!2d85.28366907613909!3d27.626736629040952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb175f378db0a7%3A0x83c860a894a3ca33!2sChampadevi%20Hillside%20Resort%20Pvt.Ltd%20(Sunrise%20Hotel%20%26%20Resort%20Pvt.%20Ltd.)!5e0!3m2!1sen!2snp!4v1734433450920!5m2!1sen!2snp"
          width="100%" height="350" style="border: 0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <!-- Right Side: Contact Info -->
    <div class="col-md-5">
      <div class="contact-info p-4 rounded shadow-sm bg-white h-100 d-flex flex-column justify-content-between">
        <style>
          .contact-info {
            font-size: 16px;
            color: #333;
            border: #2c3e50;
          }

          .contact-info h4,
          .contact-info h3 {
            color: #025E5B;
          }

          .contact-info h3 {
            font-size: 1.5rem;
            font-weight: 700;
          }

          .contact-info h4 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
          }

          .contact-info a {
            color: #025E5B;
            text-decoration: none;
          }

          .contact-info a:hover {
            color: #f18e25;
          }

          .logos {
            display: flex;
            flex-wrap: nowrap;
            gap: 1rem;
            align-items: center;
            margin-top: 0.5rem;
            overflow: auto;
          }

          .logos img {
            max-height: 45px;
            object-fit: contain;
            transition: transform 0.3s ease;
          }

          .logos img:hover {
            transform: scale(1.05);
          }

          .map-container iframe {
            width: 100%;
            height: 350px;
          }

          @media (max-width: 768px) {
            .logos {
              flex-wrap: wrap;
              justify-content: center;
            }

            .map-container iframe {
              height: 300px;
            }

            .contact-info {
              text-align: center;
            }
          }
        </style>

        <div>
          <p class="text-muted small mb-1">INFORMATION</p>
          <h4>Contact Us</h4>
          <h3>Champadevi Hillside Resort</h3>
          <p class="mb-3">Bansbari-04, Dakshinkali Municipality<br>Kathmandu, Nepal</p>

          <p class="mb-2"><strong>Phone:</strong><br> +977-01-5922050</p>

          <p class="mb-2"><strong>Email:</strong><br>
            <a href="mailto:info@chr.com.np">info@chr.com.np</a><br>
            <a href="mailto:champadevihillside@gmail.com">champadevihillside@gmail.com</a><br>
            <a href="mailto:reservation@chr.com.np">reservation@chr.com.np</a>
          </p>
        </div>

        <!-- Logos (in same line) -->
        <div class="logos mt-2">
          <img src="<?php echo e(asset('assets/images/agoda-removebg-preview.png')); ?>" alt="Agoda" />
          <img src="<?php echo e(asset('assets/images/images-removebg-preview.png')); ?>" alt="Expedia" />
          <img src="<?php echo e(asset('assets/images/booking.png')); ?>" alt="Booking.com" />
          <img src="<?php echo e(asset('assets/images/Tripadvisor-Logo-removebg-preview.png')); ?>" alt="Tripadvisor" />
        </div>
      </div>
    </div>
  </div>
</div>

  </main>



  </div>

  



<script>
const buttons = document.querySelectorAll('.clickable-item button');

    // Add event listeners to toggle active state
    buttons.forEach((button) => {
      button.addEventListener('click', () => {
        // Remove 'active' class from all buttons
        buttons.forEach((btn) => btn.classList.remove('active'));

        // Add 'active' class to the clicked button
        button.classList.add('active');
      });
    });




    document.addEventListener("DOMContentLoaded", function () {
      const items = document.querySelectorAll(".clickable-item");
      const contentContainer = document.getElementById("dynamic-content");

      const contentData = {
        "local-connection": `
        <div class="row about-section-margin">
          <div class="col-md-4">
            <a href="https://chr.com.np/local-attraction" class="card-new">

             <img
                class="card-new__background"
                src=" <?php echo e(asset('assets/images/chr-jatra.jpeg')); ?>"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                width="1920"
                height="2193"
              />
               <div class="card-new__content | flow-new">
                <div class="card-new__content--container | flow-new">
                  <h3 class="card-new__title text-white">Cultural Performance</h3>
                  <p class="card-new__description text-white">
                    Our local farm offers fresh, organic produce that enhances your dining experience. Savor the taste of farm-to-table meals...
                  </p>
                </div>
                <button class="card-new__button">Read more</button>
              </div>


             </a>

          </div>
          <div class="col-md-4">
             <a href="lhttps://chr.com.np/local-attraction" class="card-new">

              <img
                class="card-new__background"
                src=" <?php echo e(asset('assets/images/chr-localfarm.jpg')); ?>"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                width="1920"
                height="2193"
              />
              <div class="card-new__content | flow-new">
                <div class="card-new__content--container | flow-new">
                  <h3 class="card-new__title text-white">Local Farm</h3>
                  <p class="card-new__description text-white">
                    Our local farm offers fresh, organic produce that enhances your dining experience. Savor the taste of farm-to-table meals...
                  </p>
                </div>
                <button class="card-new__button">Read more</button>
              </div>
            </a>
          </div>
          <div class="col-md-4">
             <a href="https://chr.com.np/local-attraction"class="card-new">
              <img
                class="card-new__background"
                src="<?php echo e(asset('assets/images/chr-village-tur.jpeg')); ?>"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                width="1920"
                height="2193"
              />
              <div class="card-new__content | flow-new">
                <div class="card-new__content--container | flow-new">
                  <h3 class="card-new__title text-white">Village Tour</h3>
                  <p class="card-new__description text-white">
                   Explore the charm of local villages at Champadevi Hillside Resort. Experience Nepalese traditions, interact with locals, and enjoy stunning views...
                  </p>
                </div>
                <button class="card-new__button">Read more</button>
              </div>
           </a>
          </div>
        </div>
      `,
        "Major-Attraction": `
     <div class="row">
          <div class="col-md-4">
            <a href="https://chr.com.np/major-attractions" class="card-new">
              <img
                class="card-new__background"
                src="<?php echo e(asset('assets/images/chr-jatra.jpeg')); ?>"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                width="1920"
                height="2193"
              />
              <div class="card-new__content | flow-new">
                <div class="card-new__content--container | flow-new">
                  <h3 class="card-new__title text-white">Shesh Narayan</h3>
                  <p class="card-new__description text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                  </p>
                </div>
                <button class="card-new__button">Read more</button>
              </div>
            </a>
          </div>
          <div class="col-md-4">
             <a href="https://chr.com.np/major-attractions"  class="card-new">
              <img
                class="card-new__background"
                src="<?php echo e(asset('assets/images/dakshinkali-natural-beauty.png')); ?>"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                width="1920"
                height="2193"
              />
              <div class="card-new__content | flow-new">
                <div class="card-new__content--container | flow-new">
                  <h3 class="card-new__title text-white">Dakshinkali Temple</h3>
                  <p class="card-new__description text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                  </p>
                </div>
                <button class="card-new__button">Read more</button>
              </div>
           </a>
          </div>
          <div class="col-md-4">

              <a href="https://chr.com.np/major-attractions" class="card-new">
                <img
                class="card-new__background"
                src="<?php echo e(asset('assets/images/chr-gurupadmassana.jpeg')); ?>"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                width="1920"
                height="2193"
              />
              <div class="card-new__content | flow-new">
                <div class="card-new__content--container | flow-new">
                  <h3 class="card-new__title text-white">Guru Padmaha</h3>
                  <p class="card-new__description text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                  </p>
                </div>
                <button class="card-new__button">Read more</button>
              </div></a>

          </div>
        </div>
      `,
        "nature-exploration": `
     <div class="row">
          <div class="col-md-4">
            <article class="card-new">
              <img
                class="card-new__background"
                src="<?php echo e(asset('assets/images/taudaha.jpeg')); ?>"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                width="1920"
                height="2193"
              />
              <div class="card-new__content | flow-new">
                <div class="card-new__content--container | flow-new">
                  <h3 class="card-new__title text-white">Taudaha</h3>
                  <p class="card-new__description text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                  </p>
                </div>
                <button class="card-new__button">Read more</button>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="card-new">
              <img
                class="card-new__background"
                src="<?php echo e(asset('assets/images/hiking near champadevi.jpg')); ?>"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                width="1920"
                height="2193"
              />
              <div class="card-new__content | flow-new">
                <div class="card-new__content--container | flow-new">
                  <h3 class="card-new__title text-white">Hiking</h3>
                  <p class="card-new__description text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                  </p>
                </div>
                <button class="card-new__button">Read more</button>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="card-new">
              <img
                class="card-new__background"
                src="<?php echo e(asset('assets/images/mountainbiking.webp')); ?>"
                alt="Photo of Cartagena's cathedral at the background and some colonial style houses"
                width="1920"
                height="2193"
              />
              <div class="card-new__content | flow-new">
                <div class="card-new__content--container | flow-new">
                  <h3 class="card-new__title text-white">Mountain Biking</h3>
                  <p class="card-new__description text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                  </p>
                </div>
                <button class="card-new__button">Read more</button>
              </div>
            </article>
          </div>
        </div>
      `,
      };


      const defaultContent = contentData["local-connection"];
      contentContainer.innerHTML = defaultContent;
      contentContainer.style.display = "block";


      items.forEach((item) => {
        item.addEventListener("click", function () {
          const target = item.getAttribute("data-target");
          const content = contentData[target];

          if (content) {
            contentContainer.innerHTML = content;
            contentContainer.style.display = "block";
          } else {
            contentContainer.innerHTML = `<p>No content available for ${target}.</p>`;
          }
        });
      });
    });

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
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('#textSlider');
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.style.display = 'none';
      });
      slides[index].style.display = 'block';
    }

    showSlide(currentIndex);

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    setInterval(nextSlide, 2000);
  });
  </script>

  
</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CHR\resources\views/frontend/index.blade.php ENDPATH**/ ?>