@extends('frontend.layouts.master')

@section('content')
  <body>
    <!-- Hero Section -->
    <div
      class="position-relative text-white about-container"
      style="height: 90vh; background: url('{{asset('assets/images/chr-nightview.jpg')}}') center center/cover no-repeat;"
    >
      <!-- Overlay -->
      <div class="position-absolute top-0 start-0 w-100 h-100"></div>

      <!-- Centered Content (Currently empty, kept structure) -->
      <div
        class="container h-100 d-flex flex-column align-items-center justify-content-center text-center"
        style="min-width: 320px; max-width: 1200px;"
      >
      </div>
    </div>

    <!-- Blog Section -->
    <div class="text-slider-container" style="padding-top: 25px; padding-bottom: 60px;">
      <h2 class="text-center mb-5">Latest News</h2>
      <div class="container">
        <div class="row gx-4 gy-4">
          @if($blogs->count())
            @foreach ($blogs as $blog)
              <div class="col-md-4 d-flex">
                <div class="card" style="width: 100%; min-height: 450px; display: flex; flex-direction: column;">
                  <!-- Fixed height image -->
                  <img class="card-img-top lazyload"
                       src="{{ $blog->image ? asset('storage/' . $blog->image) : 'default-image.jpg' }}"
                       alt="{{ $blog->title }}"
                       style="height: 200px; object-fit: cover; width: 100%;">

                  <div class="card-body d-flex flex-column" style="flex-grow: 1; padding: 1rem;">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                    <small class="text-muted mb-2">
                      <i class="far fa-clock text-info"></i>
                      {{ $blog->published_at->format('M d, Y') }}
                    </small>
                    <p class="card-text" style="margin-bottom: 10px;">
                      {{ Str::limit($blog->short_description, 200) }}
                    </p>
                    <a href="{{ route('blog.detail', $blog->id) }}"
                       id="myBtn"
                       style="margin-top: auto; align-self: flex-start; margin-bottom: 0;">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <p class="text-center text-muted">No blog posts available.</p>
          @endif
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5">
          {{ $blogs->links() }}
        </div>
      </div>
    </div>
  </body>

  <!-- Read More JS -->
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

  <!-- Dropdown Script -->
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
