
@extends('frontend.layouts.master')
@section('content')
  <body>
    <div
    class="position-relative text-white about-container"
    style="
      height: 90vh;
      background: url('{{asset('assets/images/chr-contact.png')}}   ') center center/cover no-repeat;
    "
  >
    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100"></div>

    <!-- Content -->
    <div
      class="container h-100 d-flex flex-column align-items-center justify-content-center text-center"
      style="min-width: 320px; max-width: 1200px;"
    >
     

      <!-- Subheading -->

    </div>
  </div>

  <div style="background-color: #f1f1f1;">
   <h2 class="text-center py-5">Get In Touch</h2>
   <div class="row pe-4">
    <!-- Contact Info -->
    <div class="col-lg-4 col-md-12 contact-info">
      <p style="color:gray; font-size: 12px;">INFORMATION</p>
      <div>
        <h4>Contact Us</h4>
        <h3>Champadevi Hillside Resort</h3>
        <p style="font-size:20px">Basbari-04, Dakshinkali Municipality<br> Kathmandu, Nepal</p>
      </div>
      <p class="fs-5">+977-01-5922050</p>
      <p>
        <a href="mailto:batikasauraha@gmail.com" style="font-size:20px">info@chr.com.np<br>
          champadevihillside@gmail.com
        </a>
      </p>

      <!-- Logos -->
      <div class="logos mt-3 d-flex flex-wrap align-items-center">
        <img src="{{asset('assets/images/agoda-removebg-preview.png')}} "
             alt="Agoda"
             class="img-fluid mx-3 my-2"
             style="max-width: 100px; object-fit: cover;" />
        <img src="{{asset('assets/images/images-removebg-preview.png')}} "
             alt="Expedia"
             class="img-fluid mx-3 my-2"
             style="max-width: 150px; object-fit: cover;" />
        <img src="{{asset('assets/images/booking.png')}}"
             alt="Booking.com"
             class="img-fluid mx-3 my-2"
             style="max-width: 150px;  object-fit: cover;" />
        <img src="{{asset('assets/images/Tripadvisor-Logo-removebg-preview.png')}} ./"
             alt="Tripadvisor"
             class="img-fluid mx-3 my-2"
             style="max-width: 150px; object-fit: cover;" />
      </div>
    </div>

    <!-- Contact Form -->
    <div class="col-lg-6 col-md-12 ps-4">
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name*</label>
                    <input type="text" class="form-control bg-white" name="first_name" placeholder="First Name" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name*</label>
                    <input type="text" class="form-control bg-white" name="last_name" placeholder="Last Name" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone*</label>
                    <input type="tel" class="form-control bg-white" name="phone" placeholder="Phone" required>
                </div>
                <div class="col-md-6">
                    <label for="state" class="form-label">Address*</label>
                    <input type="text" class="form-control bg-white" name="address" placeholder="Enter the address" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control bg-white" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label">Comments or Questions*</label>
                <textarea class="form-control bg-white" name="comments" rows="4" placeholder="Comments or questions" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="p-3" id="myBtn">Contact Now</button>
            </div>
        </form>

    </div>
  </div>

    </div>

        <div class="row align-items-center">
          <!-- Left Side: Map -->
          <div class="col-md-12">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.92831830796!2d85.28366907613909!3d27.626736629040952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb175f378db0a7%3A0x83c860a894a3ca33!2sChampadevi%20Hillside%20Resort%20Pvt.Ltd%20(Sunrise%20Hotel%20%26%20Resort%20Pvt.%20Ltd.)!5e0!3m2!1sen!2snp!4v1734433450920!5m2!1sen!2snp"
              width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!-- Right Side: Contact Information -->

        </div>



<script>
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }
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
  @endsection
