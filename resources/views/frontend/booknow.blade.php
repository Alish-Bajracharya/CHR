
      <style>
    .card-title { color:green }
    .amenities span {
      background: #f5f5f5;
      padding: 5px 10px;
      border-radius: 15px;
      font-size: 0.9rem;
      margin-right: 10px;
      margin-bottom: 10px;
    }
    .learn-more {
      background-color: red;
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
    }
    .learn-more:hover { background-color: #d51f0e; }
    .best-price-banner {
      background-color: #025e5b;
      border-radius: 5px;
      padding: 20px;
      text-align: center;
    }

    .best-price-banner i {
      color: #fff;
      margin-right: 10px;
    }
    .date-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  border: 1px solid #e0e0e0;
  border-radius: 5px;
  background-color: #f8f9fa;
  width: 770px;
  max-width:100%;
  margin: 20px auto;
}
.date-item {
  display: flex;
  align-items: center;
  position: relative;
}
.date-item svg {
  font-size: 24px;
  margin-right: 10px;
}
.date-item svg path {
    fill: #46637A;
  }
.date-item span {
  display: block;
  color: #b0b8c5;
  font-size: 12px;
}
.date-item strong {
  display: block;
  color: #2a6ebb;
  font-size: 16px;
}

.date-item .fa-calendar-alt {
  margin-right: 10px;
  color: #46637a;
  font-size: 30px;
}
#picker-container {
  position: relative;
}
.datetext{
  cursor:pointer;
}
.datepicker {
  top: 46px !important;
  left: 35px !important;
}
.form-container{
  max-width: 800px;
  margin:auto;
}
    
      </style>
      <div
        class="position-relative text-white about-container"
        style="
          height: 100vh;
          background: url('./images/chr-booking.jpg') center center/cover no-repeat;
        "
      >
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100"></div>

        <!-- Content -->
        <div
          class="container h-100 d-flex flex-column align-items-center justify-content-center text-center"
          style="min-width: 320px; max-width: 1200px"
        >

          
          <p class="m-0">Breathe in the crisp  mountains air and let Champadevi Hillside Resort redefine your ideas of paradise</p>
          <h1 class="display-2 fw-bold m-0 text-white">Booking</h1>

        
   
        
        </div>
      </div>
      <div style="background-color: #F1F1F1; padding-bottom: 60px;">
      <div class="form-container p-5">  
      <h2 class="text-center fw-bold">Book Your Stay</h2>
      <div class="contact-form">
      <form class="mt-5">
        <!-- Stay in Room (Check-in/Check-out Dates) -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="checkin-date" class="form-label">Check-in Date</label>
            <input type="date" id="checkin-date" class="form-control bg-white">
          </div>
          <div class="col-md-6">
            <label for="checkout-date" class="form-label">Check-out Date</label>
            <input type="date" id="checkout-date" class="form-control bg-white">
          </div>
        </div>
    
        <!-- Type of Room -->
        <div class="row mb-3">
          <div class="col-md-12">
            <label for="room-type" class="form-label">Type of Room</label>
            <select class="form-select text-muted bg-white"id="room-type">
              <option selected>Select a room type</option>
              <option value="single">Single Room</option>
              <option value="double">Double Room</option>
              <option value="suite">Suite</option>
              <option value="family">Family Room</option>
            </select>
          </div>
        
          <div class="row">
            <!-- Stay in Room Dropdown -->
            <div class="col-md-6 mt-3">
              <label for="stay-room" class="form-label">Stay in Room</label>
              <select id="stay-room" class="form-select text-muted bg-white">
                <option value="" selected disabled>Select number of people</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          
            <!-- Add Children Dropdown -->
            <div class="col-md-6 mt-5">
              <select id="add-children" class="form-select text-muted bg-white">
                <option value="" selected disabled>Add children</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
          </div>
        </div>
    
        <!-- Add Extra Room -->
        <div id="extra-rooms-section"></div>
        <div class="row mb-3">
          <div class="col text-left">
            <button type="button" id="myBtn" class="p-3 ">+ Add Extra Room</button>
          </div>
        </div>
    
        <!-- Action Buttons -->
        <div class="row mt-5 pb-5">
          <div class="col text-center">
            <button type="submit" id="myBtn" class="p-3 w-30">Check Availability</button>
          </div>
        </div>
      </form>
    </div>
    
    
      
      
      
        
    
        <!-- Banner -->
         <div class="best-price-banner mb-4">
          <h4><strong class="text-white">BOOK AT BEST PRICE!</strong></h4>
          <div class="d-flex justify-content-center gap-4 mt-3">
            <div class="text-white"><i class="bi bi-check-circle-fill"></i> Get the best deal</div>
            <div class="text-white"><i class="bi bi-check-circle-fill"></i> Our best price</div>
            <div class="text-white"><i class="bi bi-check-circle-fill"></i> Best price guarantee</div>
          </div>
        </div> 
    
        <!-- Room Information -->
        <div class="card border-1 shadow-sm border-danger">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./images/chr-deluxeroom-2.jpg" class="img-fluid rounded-start" alt="Room Image" style="height:289px"> 
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title">Deluxe Room</h3>
                  <p class="card-text mt-3">
                    <span class="me-3"><i class="fas fa-user"></i> Up to 3 guests</span>
                    <span class="me-3"><i class="fas fa-ruler-combined"></i> 25 m²</span>
                    <span><i class="fas fa-door-closed"></i> 50 rooms</span>
                  </p>
                  <div class="amenities d-flex flex-wrap">
                    <span><i class="fas fa-tv"></i> Flat-screen TV</span>
                    <span><i class="fas fa-snowflake"></i> Air conditioning</span>
                    <span><i class="fas fa-tree"></i> Balcony</span>
                    <span><i class="fas fa-wifi"></i> Wi-Fi</span>
                    <span><i class="fas fa-bed"></i> Three single beds</span>
                    <span>+29</span>
                  </div>
                  <p class="card-text  text-muted">
                    Discover Idyllic Luxury: Your Deluxe Country Villa Awaits. Each room exhibits a right dose of contemporary and traditional...<br><br>
                    <a href="#" class="learn-more">Learn More</a>
                  </p>
                 
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
     
    
      <div class="container my-4 text-slider-container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="p-4 text-center">
              <!-- Stars -->
              <div class="mb-3">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </div>
              <!-- Testimonial -->
              <p class="fs-5 text-muted">
                I had an absolutely wonderful stay at Champadevi Village Resort!
                The location is breathtaking, surrounded by lush greenery and
                offering stunning views of the hills and valleys. The staff were
                incredibly friendly and accommodating, making us feel at home
                from the moment we arrived.The rooms were clean, comfortable,
                and well-equipped with all the amenities needed for a relaxing
                stay. The food was another highlight—delicious local and
                international options, all prepared fresh.
              </p>
              <!-- User Info -->
              <div
                class="d-flex align-items-center mt-4 flex-wrap justify-content-center"
              >
                <img
                  src="./images/tripadvisor.png"
                  alt="user"
                  class="rounded-circle me-3"
                  style="width: 60px; height: 60px"
                />
                <div>
                  <h5 class="fw-bold p-0">Sushila Kafle</h5>
                  <p class="text-muted m-0">Marketing</p>
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
      <footer class="text-white  position-relative">
  

        <img
          src="./images/rb_2150429154.png"
          style="background-size: cover; width: 100%; opacity: 0.1; height: 600px; object-fit: cover;padding-top: 25px;"
        />
       
        <div class="footer-container d-flex justify-content-center align-items-center text-center ">
          <div class="footer-content row justify-content-center align-items-center section">
            <!-- Section 1: Commitment -->
            <div class="col-8 col-md-6 col-lg-3 mb-5">
              <h3 class="text-white" style="line-height: 50px;">
                Your Comfort is our Commitment!<br />CHR
              </h3>
            </div>
            
            <!-- Section 2: Contact -->
            <div class="col-8 col-md-6 col-lg-3 mb-1">
              <h4 class="text-white m-0">Contact</h4>
              <p class="text-white">
                Basbari-04, Dakshinkali Municipality,<br>
                Kathmandu, Nepal
                <br>
                info@chr.com.com<br>
              champadevihillside@gmail.com
              </p>
            </div>
            
            <!-- Section 3: Reservation -->
            <div class="col-8 col-md-6 col-lg-3 mb-5 footer-text">
              <h4 class="text-white">Reservation</h4>
              <p class="text-white">
                +977-01-5922050 / 592205 / 5922053<br>
                <a href="mailto:Reservation@chr.com.np" class="text-white">
                  Reservation@chr.com.np
                </a>
              </p>
            </div>
            
            <!-- Section 4: Payment Methods -->
            <div class="col-8 col-md-6 col-lg-3 mb-5"style="margin-top:-30px">
              <h4 class="text-white">We Accept</h4>
              <div class="payment d-flex justify-content-center align-items-center mt-3">
                <img src="./images/esewa.png" class="img-fluid me-2" alt="eSewa" style="max-width: 50px;" />
                <img src="./images/mastercard.png" class="img-fluid me-2" alt="Mastercard" style="max-width: 50px;" />
                <img src="./images/aveotr6ag.webp" class="img-fluid" alt="Payment Logo" style="max-width: 50px;" />
                <img src="./images/fonepay.png" class="img-fluid" alt="Payment Logo" style="max-width: 50px;" />
              </div>
            </div>
          </div>
        </div>
        
        
       <div class="uk-container uk-footer">
          <div class="uk-grid uk-child-width-1-1@s uk-child-width-1-1@m uk-child-width-1-3@l uk-grid-margin uk-margin-remove-top uk-margin-remove-bottom">
            <!-- Logo Section -->
            <div class="uk-width-1-1">
              <div class="uk-text-center uk-heading-line">
               <a href="#"> <span><img src="images/assets/whilelogo.png" alt="Logo" width="350"/></span></a>
              </div>
            </div>
          </div>
        
          <!-- Footer Content Section -->
          <div class="uk-grid uk-grid-small uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-3@l uk-grid-margin" uk-grid style="margin-top:-60px;">
            <!-- Copyright Section -->
            <div class="uk-flex-middle uk-text-center">
              <div class="uk-panel">
                <div class="uk-text-small">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Champadevi Hillside Resort. All rights reserved.
                </div>
              </div>
            </div>
        
            <!-- Social Media Icons Section -->
            <div class="uk-flex-middle uk-text-center  uk-footer-content">
              <div class="uk-panel">
                <div class="uk-margin">
                  <div class="uk-grid-small uk-flex-center uk-grid" uk-grid>
                    <div>
                      <a class="el-link uk-icon-link" href="#" target="_blank" rel="noreferrer"><span uk-icon="icon: facebook; ratio: 1.5"></span></a>
                    </div>
                    <div>
                      <a class="el-link uk-icon-link" href="#" target="_blank" rel="noreferrer"><span uk-icon="icon: twitter; ratio: 1.5"></span></a>
                    </div>
                    <div>
                      <a class="el-link uk-icon-link" href="#" target="_blank" rel="noreferrer"><span uk-icon="icon: instagram; ratio: 1.5"></span></a>
                    </div>
                    <div>
                      <a class="el-link uk-icon-link" href="#" target="_blank" rel="noreferrer"><span uk-icon="icon: tripadvisor; ratio: 1.5"></span></a>
                    </div>
                    <div>
                      <a class="el-link uk-icon-link" href="#" target="_blank" rel="noreferrer"><span uk-icon="icon: pinterest; ratio: 1.5"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
            <!-- Empty Section (can be used for additional links or content) -->
           
          </div>
        </div>
      </footer>
     
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
      $(document).ready(function() {
    // Initialize datepickers
    $('#datepicker-from').datepicker({
        format: 'dd M yyyy',
        autoclose: true,
        container: '#from-date' 
    }).on('changeDate', function(e) {
        $('#from-date strong').text(e.format('dd M yyyy'));
        $(this).hide();
    });

    $('#datepicker-to').datepicker({
        format: 'dd M yyyy',
        autoclose: true,
        container: '#to-date' 
    }).on('changeDate', function(e) {
        $('#to-date strong').text(e.format('dd M yyyy'));
        $(this).hide();
    });

    // Show datepicker under clicked date item
    $('#from-date').on('click', function() {
        $('#datepicker-from').datepicker('show').focus();
    });

    $('#to-date').on('click', function() {
        $('#datepicker-to').datepicker('show').focus();
    });
});
      </script>
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

  
  </body>
</html>
