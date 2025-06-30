<!-- <body class="">
    <div class="uk-hidden-visually uk-notification uk-notification-top-left uk-width-auto">
      <div class="uk-notification-message">
        <a href="#tm-main">Skip to main content</a>
      </div>
    </div>

    <div class="tm-page">
      <header class="tm-header-mobile uk-hidden@l tm-header-overlay" uk-header
        uk-inverse="target: .uk-navbar-container; sel-active: .uk-navbar-transparent">
        <div class="uk-navbar-container uk-navbar-transparent">
          <div class="uk-container uk-container-expand">
            <nav class="uk-navbar"
              uk-navbar='{"align":"left","container":".tm-header-mobile","boundary":".tm-header-mobile .uk-navbar-container","target-y":".tm-header-mobile .uk-navbar-container","dropbar":true,"dropbar-anchor":".tm-header-mobile .uk-navbar-container","dropbar-transparent-mode":"remove"}'>
              <div class="uk-navbar-left">
                <a uk-toggle href="#tm-dialog-mobile" class="uk-navbar-toggle">
                  <div uk-navbar-toggle-icon></div>

                  <span class="uk-margin-small-left uk-text-middle">Menu</span>
                </a>
              </div>

              <div class="uk-navbar-left">
                <a href="https://chr.com.np" aria-label="Back to home" class="uk-logo uk-navbar-item">
                  <img alt="CHR" loading="eager" width="80" height="67" src="{{asset('assets/images/assets/removebg-preview.png')}}" /></a>
              </div>
            </nav>
          </div>
        </div>
        <button class="uk-offcanvas-close uk-close-large" type="button" uk-close
          uk-toggle="cls: uk-close-large; mode: media; media: @s"></button>
        <div id="tm-dialog-mobile" uk-offcanvas="container: true; overlay: true" mode="push">
          <div class="uk-offcanvas-bar uk-flex uk-flex-column">

            <div class="uk-margin-auto-bottom">
                <div class="uk-panel" id="module-menu-dialog-mobile">
                    <ul class="uk-nav uk-nav-default">
                        <li class="item-149 uk-active"><a href="https://chr.com.np"> Home</a></li>
                        <li class="item-150"><a href="{{route('about-us.show')}}" class="text-white"> About CHR</a></li>
                        <li class="dropdown-btn-1 mt-2">Accommodation
                            <i class="fa fa-caret-down"></i>
                        </li>
                        <div class="dropdown-container-1">
                            <?php
                            $rooms = \App\Models\Room::all();
                            ?>
                            @foreach ($rooms as $room)
                                <a href="{{ route('room.detail', $room->id) }}" class="text-white mb-3">{{ $room->name }}</a>
                            @endforeach
                        </div>

                        <li class="item-153">
                            <?php
                            // Fetch the first restaurant from the database
                            $restaurant = \App\Models\Restaurant::first();
                            ?>
                            @if ($restaurant)
                                <a href="{{ route('restaurant.detail', $restaurant->slug) }}" class="text-white">Restaurant &amp; Bar</a>

                            @endif
                        </li>
                        <li class="dropdown-btn-1">Conference & Meeting
                            <i class="fa fa-caret-down"></i>
                        </li>
                        <div class="dropdown-container-1">
                            <a href="{{route('balkumari.show')}}">BallKumari Hall</a><br>
                            <a href="{{route('bishnudevi')}}">Bishnudevi Hall</a><br>
                            <a href="{{ route('bagh') }}">Bagh Bhairab Hall</a><br>
                        </div>
                        <li class="dropdown-btn-1 mt-2">Multimedia
                            <i class="fa fa-caret-down"></i>
                        </li>
                        <div class="dropdown-container-1">
                            <a href="{{route('blog')}}">Blog</a><br>
                            <a href="{{route('gallery')}}">Photo Gallery</a><br>
                            <a href=" {{route('videogallery')}}">Video Gallery</a><br>
                        </div>

                        <li class="dropdown-btn-1 mt-2">Recreation
                            <i class="fa fa-caret-down"></i>
                        </li>
                        <div class="dropdown-container-1">
                            <a href="{{route('service.show')}}">Spa</a><br>
                            <a href="{{route('service.show')}}">Swimming</a><br>
                            <a href="{{route('service.show')}}">Gym</a><br>
                        </div>

                        <li class="item-155"><a href="{{route('champadevi.show')}}" class="text-white">ChampaDevi info</a></li>
                        <li class="item-157"><a href="{{route('major.show')}}" class="text-white"> Major Attraction</a></li>
                        <li class="item-157"><a href="{{route('local')}}" class="text-white"> Local Interaction</a></li>
                        <li class="item-158"><a href="{{route('review.show')}}" class="text-white">Reviews</a></li>
                        <li class="item-159"><a href="{{route('contact')}}" class="text-white"> Contact</a></li>
                        <li class="item-176">
                            <a href="https://archiesoftbook.chr.com.np/" target="_blank" class="text-white"> Book Now</a>
                        </li>
                    </ul>
                </div>
            </div>
          </div>
        </div>
        <script>
          var dropdown = document.getElementsByClassName("dropdown-btn-1");
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
      </header>
      <header class="tm-header uk-visible@l tm-header-overlay"
        uk-inverse="target: .uk-navbar-left, .uk-navbar-center, .uk-navbar-right, .tm-headerbar" uk-header>




        <div class="uk-navbar-container uk-navbar-transparent uk-position-relative uk-position-z-index-high">

          <div class="uk-container uk-container-expand">
            <nav class="uk-navbar"
              uk-navbar="{&quot;align&quot;:&quot;left&quot;,&quot;container&quot;:&quot;.tm-header&quot;,&quot;boundary&quot;:&quot;.tm-header .uk-navbar-container&quot;,&quot;target-y&quot;:&quot;.tm-header .uk-navbar-container&quot;,&quot;dropbar&quot;:true,&quot;dropbar-anchor&quot;:&quot;.tm-header .uk-navbar-container&quot;,&quot;dropbar-transparent-mode&quot;:&quot;behind&quot;}">


              <div class="uk-navbar-left" style="margin-top:-90px;">
                <a href="https://chr.com.np" aria-label="Back to home" class="uk-logo uk-navbar-item">
                  <img alt="CHR" loading="eager" width="350px" height="326" src="{{asset('assets/images/assets/removebg-preview.png')}} "></a>


              </div>

              <div class="uk-navbar-right">


                <div class="rest">
                  <a uk-toggle href="#tm-dialog" class="uk-navbar-toggle">


                    <div uk-navbar-toggle-icon></div>

                    <span class="uk-margin-small-left uk-text-middle">Menu</span>

                  </a>
                </div>

              </div>

            </nav>
          </div>

        </div>
        <div id="tm-dialog" class="uk-modal-full" uk-modal>
          <div class="uk-modal-dialog  test">
             <div style="position: relative;" >
              <img src="./images/assets/removebg-preview.png"class="menu-img" width="350"style="margin-top: -90px; position: absolute; right:0;">
            </div>
            <button class="uk-modal-close-full uk-close-large" type="button" uk-close
              uk-toggle="cls: uk-close-large; mode: media; media: @s"></button>



            <div class="uk-modal-body uk-flex uk-flex-column uk-box-sizing-content uk-width-auto@s" uk-height-viewport>

              <div class="uk-text-center">

                <div class="uk-panel" id="module-108">
                  <div class="uk-grid tm-grid-expand uk-grid-column-large uk-grid-margin" uk-grid>

                    <div class="uk-flex">

                    <div class="uk-card uk-card-body"
                      style="width:50%;">

                      <div class="container" style="margin-left: 84px;">
                        <nav>
                          <ul class="mcd-menu">
                            <li>
                              <a href="https://chr.com.np" class="d-flex align-items-center text-decoration-none gap-3">
                                <strong>Home</strong>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ms-auto" viewBox="0 0 25 25">
                                  <path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
                                </svg>
                              </a>
                            </li>
                            <li>
                              <a href="{{route('about-us.show')}}" class="d-flex align-items-center text-decoration-none gap-3">
                                <strong>About CHR</strong>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ms-auto" viewBox="0 0 25 25">
                                  <path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
                                </svg>
                              </a>
                            </li>
                            <li class="dropdown-btn">
                                <a href="#" class="main-dropdown">
                                    <strong>Accommodation</strong>
                                    <i class="fa fa-caret-down drop-down-icon"></i>
                                </a>
                            </li>
                            <div class="dropdown-container">
                                <?php
                                // Fetch all rooms from the database
                                $rooms = \App\Models\Room::all();
                                ?>
                                @foreach ($rooms as $room)
                                    <a href="{{ route('room.detail', $room->id) }}" class="text-white mb-3">{{ $room->name }}</a>
                                @endforeach
                            </div>
                            <li>
                              <?php
                            // Fetch the first restaurant from the database
                            $restaurant = \App\Models\Restaurant::first();
                            ?>
                              <a href="{{ route('restaurant.detail', $restaurant->slug) }}" class="d-flex align-items-center text-decoration-none gap-3">
                                <strong>Resturant & Bar</strong>
                                <svg xmlns="http://www.w3.org/2000/svg"  class="ms-auto" viewBox="0 0 25 25">
                                  <path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
                                </svg>
                              </a>
                            </li>
                            <li class="dropdown-btn">
                              <a href="#" class="main-dropdown">
                                <strong>Conference & Meeting</strong>
                                <i class="fa fa-caret-down drop-down-icon"></i>
                              </a>
                            </li>
                            <div class="dropdown-container">
                              <a href="{{route('balkumari.show')}}" class="text-white mb-3">BallKumari Hall</a>
                              <a href="{{route('bishnudevi')}}" class="text-white mb-3">Bishnudevi & Birkheshow Hall</a>
                              <a href="{{route('bagh')}}" class="text-white mb-3">Bagh Bhairab Hall</a>
                            </div>

                            <li class="dropdown-btn">
                              <a href="#" class="main-dropdown">
                                <strong>Multimedia</strong>
                                <i class="fa fa-caret-down drop-down-icon"></i>
                              </a>
                            </li>
                            <div class="dropdown-container">
                              <a href="{{route('blog')}}" class="text-white mb-3">Blog</a>
                              <a href="{{route('gallery')}}" class="text-white mb-3">Photo Gallery</a>
                              <a href="{{route('videogallery')}}" class="text-white mb-3">Video Gallery</a>
                            </div>
                            <li>
                              <a href="{{route('service.show')}}" class="d-flex align-items-center text-decoration-none gap-3">
                                <strong>Recreation</strong>
                                <svg xmlns="http://www.w3.org/2000/svg"  class="ms-auto" viewBox="0 0 25 25">
                                  <path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
                                </svg>
                              </a>
                            </li>

                            <li>
                              <a href="{{route('champadevi.show')}}" class="d-flex align-items-center text-decoration-none gap-3">
                                <strong>Champadevi Info</strong>
                                <svg xmlns="http://www.w3.org/2000/svg"class="ms-auto" viewBox="0 0 25 25">
                                  <path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
                                </svg>
                              </a>
                            </li>
                            <li>
                              <a href="{{route('major.show')}}" class="d-flex align-items-center text-decoration-none gap-3">
                                <strong>Major Attraction</strong>
                                <svg xmlns="http://www.w3.org/2000/svg"class="ms-auto" viewBox="0 0 25 25">
                                  <path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
                                </svg>
                              </a>
                            </li>

                            <li>
                              <a href="{{route('local')}}" class="d-flex align-items-center text-decoration-none gap-3">
                                <strong>Local Attractions</strong>
                                <svg xmlns="http://www.w3.org/2000/svg"class="ms-auto" viewBox="0 0 25 25">
                                  <path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
                                </svg>
                              </a>
                            </li>

                            <li>
                              <a href="{{route('review.show')}}" class="d-flex align-items-center text-decoration-none gap-3">
                                <strong>Reviews</strong>
                                <svg xmlns="http://www.w3.org/2000/svg"class="ms-auto" viewBox="0 0 25 25">
                                  <path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
                                </svg>
                              </a>
                            </li>
                            <li>
                              <a href="{{route('contact')}}" class="d-flex align-items-center text-decoration-none gap-3">
                                <strong>Contact</strong>
                                <svg xmlns="http://www.w3.org/2000/svg"class="ms-auto" viewBox="0 0 25 25">
                                  <path d="m17.5 5.999-.707.707 5.293 5.293H1v1h21.086l-5.294 5.295.707.707L24 12.499l-6.5-6.5z"></path>
                                </svg>
                              </a>
                            </li>
                          </ul>
                        </nav>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </header>
    -->
  <!-- Bootstrap Navbar -->

<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
 /* Global font */
:root {
  --primary-font: 'Work Sans', sans-serif;
}

* {
  font-family: var(--primary-font);
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Navbar Base */
.navbar {
  padding: 0.5rem 1rem;
  height: 80px;
  background-color: rgba(33, 37, 41, 0.95) !important;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1030;
}

.container-fluid {
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
}

.navbar-brand {
  position: absolute;
  left: 20px;
}

.navbar-brand img {
  object-fit: contain;
  max-width: 140px;
  height: 50px;
}

.nav-center {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  width: auto;
  display: flex;
  align-items: center;
}

.navbar-nav {
  display: flex;
  gap: 1.5rem;
  list-style: none;
}

.nav-link {
  color: white !important;
  font-size: 20px;
  font-weight: 500;
  padding: 0.5rem 1rem !important;
  white-space: nowrap;
  transition: color 0.3s ease;
}

.nav-link:hover,
.nav-link:focus {
  color: #dc3545 !important; /* Optional hover effect */
  text-decoration: none;
}

/* Dropdown menus */
.nav-center .dropdown {
  position: relative;
}

.nav-center .dropdown-menu {
  display: block !important;
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%) translateY(10px);
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  min-width: 200px;
  margin-top: 0;
  background-color: #343a40;
  border: none;
  border-radius: 0;
  padding: 20px;
  z-index: 1100;
}

.nav-center .dropdown:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(0);
}

.dropdown-item {
  color: white;
  font-size: 18px;
  padding: 0.5rem 1rem;
  display: block;
  white-space: nowrap;
}

.dropdown-item:hover,
.dropdown-item:focus {
  background-color: #495057;
  color: white;
  text-decoration: none;
}

/* Navbar toggler (hamburger) */
.navbar-toggler {
  position: absolute;
  right: 20px;
  border: none;
  padding: 0.5rem;
  color: white !important;
  display: block !important;
  background: transparent;
  cursor: pointer;
}

.navbar-toggler:focus {
  box-shadow: none;
  outline: none;
}

.navbar-toggler i {
  font-size: 24px;
}

/* Sidebar styles */
.offcanvas {
  width: 300px;
  background-color: #212529;
  color: white;
}

.offcanvas-header {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.offcanvas-title {
  font-weight: 600;
  font-size: 20px;
  color: white;
}

.sidebar-dropdown-btn {
  background: none;
  border: none;
  width: 100%;
  text-align: left;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.8rem 1rem;
  color: white;
  cursor: pointer;
  font-size: 18px;
  font-weight: 500;
  transition: background-color 0.3s ease;
}

.sidebar-dropdown-btn:hover,
.sidebar-dropdown-btn:focus {
  background-color: rgba(255, 255, 255, 0.1);
}

.sidebar-dropdown-btn i {
  transition: transform 0.3s ease;
}

.sidebar-dropdown-btn.active i {
  transform: rotate(180deg);
}

.sidebar-dropdown-content {
  display: none;
  background-color: rgba(255, 255, 255, 0.05);
  padding-left: 1rem;
  overflow: hidden;
  transition: max-height 0.3s ease;
}

.sidebar-dropdown-content.show {
  display: block;
}

.sidebar-dropdown-content .nav-link {
  font-size: 16px;
  padding: 0.8rem 1rem;
  transition: padding-left 0.3s ease, background-color 0.3s ease;
  color: rgba(255, 255, 255, 0.8);
  display: block;
  white-space: nowrap;
}

.sidebar-dropdown-content .nav-link:hover,
.sidebar-dropdown-content .nav-link:focus {
  padding-left: 1.5rem;
  background-color: rgba(255, 255, 255, 0.1);
  color: white;
  text-decoration: none;
}

#sidebar .nav-link {
  color: rgba(255, 255, 255, 0.8);
  transition: color 0.3s ease;
}

#sidebar .nav-link:hover,
#sidebar .nav-link:focus {
  color: white;
  text-decoration: none;
}

#sidebar .nav-item {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

#sidebar .nav-item:last-child {
  border-bottom: none;
}

/* Book Now button */
.book-now-btn {
  background-color: #025e5b;
  color: #fff;
  padding: 10px 35px;
  border-radius: 40px;
  font-weight: 500;
  margin-left: 100px;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  text-decoration: none;
  white-space: nowrap;
  font-size: 16px;
  transition: background 0.3s ease;
}

.book-now-btn:hover,
.book-now-btn:focus {
  background-color: #dc3545;
  color: aliceblue;
  text-decoration: none;
}

/* Responsive Media Queries */

/* Large desktops */
@media (max-width: 1400px) {
  .nav-link {
    font-size: 15px;
  }
  .book-now-btn {
    padding: 10px 20px;
    font-size: 13px;
    margin-left: 50px;
  }
}

/* Medium desktops / tablets */
@media (max-width: 1200px) {
  .nav-link {
    font-size: 16px;
    padding: 0.5rem 0.75rem !important;
  }
  .navbar-nav {
    gap: 1rem;
  }
  .book-now-btn {
    margin-left: 30px;
  }
}

/* Smaller tablets and large phones */
@media (max-width: 992px) {
  .nav-center {
    display: none;
  }
  .book-now-btn.d-lg-inline-flex {
    display: none !important;
  }
  .book-now-btn.d-lg-none {
    display: flex !important;
    justify-content: center;
    margin-left: 0;
  }
}

/* Phones */
@media (max-width: 768px) {
  .navbar-brand img {
    max-width: 120px;
    height: auto;
  }
  .sidebar-dropdown-btn,
  .sidebar-dropdown-content .nav-link {
    font-size: 15px;
  }
  .offcanvas {
    width: 260px;
  }
  .book-now-btn {
    font-size: 14px;
    padding: 8px 20px;
    border-radius: 30px;
    width: 100%;
    margin-left: 0;
  }
}

/* Small phones */
@media (max-width: 576px) {
  .nav-link {
    font-size: 15px;
  }
  .dropdown-item {
    font-size: 14px;
  }
  .book-now-btn {
    font-size: 13px;
    text-align: center;
    justify-content: center;
  }
  .navbar-toggler i {
    font-size: 20px;
  }
  .offcanvas-title {
    font-size: 18px;
  }
}

</style>

<script>
    function toggleSidebarDropdown(button) {
        // Toggle active class on the button
        button.classList.toggle('active');
        
        // Find the next sibling which is the dropdown content
        const dropdownContent = button.nextElementSibling;
        
        // Toggle the show class
        if (dropdownContent.classList.contains('show')) {
            dropdownContent.classList.remove('show');
            dropdownContent.style.maxHeight = null;
        } else {
            dropdownContent.classList.add('show');
            dropdownContent.style.maxHeight = dropdownContent.scrollHeight + "px";
        }
    }

    // Close other dropdowns when opening a new one
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownBtns = document.querySelectorAll('.sidebar-dropdown-btn');
        
        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Close other dropdowns
                dropdownBtns.forEach(otherBtn => {
                    if (otherBtn !== btn && otherBtn.classList.contains('active')) {
                        otherBtn.classList.remove('active');
                        const content = otherBtn.nextElementSibling;
                        content.classList.remove('show');
                        content.style.maxHeight = null;
                    }
                });
            });
        });
    });
</script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Bootstrap Navbar -->
<div class="chr-navbar-wrapper">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">

      <!-- Logo -->
      <a class="navbar-brand" href="https://chr.com.np">
        <img src="{{ asset('assets/images/assets/removebg-preview.png') }}" alt="Logo" width="140" height="50">
      </a>

      <!-- Center content container -->
      <div class="d-flex align-items-center mx-auto gap-3">
        <!-- Center Nav Items -->
        <div class="d-none d-lg-flex">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item"><a class="nav-link" href="https://chr.com.np/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('about-us.show') }}">About</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#">Rooms <i class="fas fa-chevron-down ms-1"></i></a>
              <ul class="dropdown-menu navbar-dropdown-menu">
                @foreach (\App\Models\Room::all() as $room)
                  <li><a class="dropdown-item mb-1" href="{{ route('room.detail', $room->id) }}">{{ $room->name }}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#">Conference & Meeting <i class="fas fa-chevron-down ms-1"></i></a>
              <ul class="dropdown-menu navbar-dropdown-menu">
                <li><a class="dropdown-item mb-1" href="{{ route('balkumari.show') }}">BalKumari Hall</a></li>
                <li><a class="dropdown-item mb-1" href="{{ route('bishnudevi') }}">Bishnudevi Hall</a></li>
                <li><a class="dropdown-item mb-1" href="{{ route('bagh') }}">Bagh Bhairab Hall</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('restaurant.detail', $restaurant->slug) }}">Food & Drinks</a></li>

          </ul>
        </div>

        <!-- Book Now Button (always visible) -->
        <a href="https://archiesoftbook.chr.com.np/" 
            class="book-now-btn d-none d-lg-inline-flex" target="_blank">
            Book Now <span uk-icon="icon: chevron-right"></span>
        </a>
      </div>

      <!-- Hamburger (always right side) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
        <i class="fas fa-bars fa-lg"></i>
      </button>

    </div>
  </nav>

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a class="nav-link" href="https://chr.com.np">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-us.show') }}">About</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link sidebar-dropdown-btn" onclick="toggleSidebarDropdown(this)">
                        Rooms <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="sidebar-dropdown-content">
                        @foreach (\App\Models\Room::all() as $room)
                            <a class="nav-link" href="{{ route('room.detail', $room->id) }}">{{ $room->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <button class="nav-link sidebar-dropdown-btn" onclick="toggleSidebarDropdown(this)">
                        Conference & Meeting <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="sidebar-dropdown-content">
                        <a class="nav-link" href="{{ route('balkumari.show') }}">BalKumari Hall</a>
                        <a class="nav-link" href="{{ route('bishnudevi') }}">Bishnudevi Hall</a>
                        <a class="nav-link" href="{{ route('bagh') }}">Bagh Bhairab Hall</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('restaurant.detail', $restaurant->slug) }}">Food & Drinks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('major.show') }}">Sightseeing & Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('review.show') }}">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <div class="mt-2 text-center d-lg-none">
                    <a href="https://archiesoftbook.chr.com.np/" class="book-now-btn" target="_blank">
                        Book Now <span uk-icon="icon: chevron-right"></span>
                    </a>
                </div>
            </ul>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script>
function toggleSidebarDropdown(button) {
    button.classList.toggle('active');
    const dropdownContent = button.nextElementSibling;
    
    if (dropdownContent.classList.contains('show')) {
        dropdownContent.classList.remove('show');
        dropdownContent.style.maxHeight = null;
    } else {
        dropdownContent.classList.add('show');
        dropdownContent.style.maxHeight = dropdownContent.scrollHeight + "px";
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const dropdownBtns = document.querySelectorAll('.sidebar-dropdown-btn');
    
    dropdownBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            dropdownBtns.forEach(otherBtn => {
                if (otherBtn !== btn && otherBtn.classList.contains('active')) {
                    otherBtn.classList.remove('active');
                    const content = otherBtn.nextElementSibling;
                    content.classList.remove('show');
                    content.style.maxHeight = null;
                }
            });
        });
    });
});
</script>