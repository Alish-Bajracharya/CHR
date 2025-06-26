@extends('frontend.layouts.master')
@section('content')
  <body>
    <div
    class="position-relative text-white about-container"
    style="
      height: 90vh;
      background: url('{{asset('assets/images/chr-content.jpg')}}') center center/cover no-repeat;
    "
  >
    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100"></div>

    <!-- Content -->
    <div
      class="container h-100 d-flex flex-column align-items-center justify-content-center text-center"
      style="min-width: 320px; max-width: 1200px;"
    >
      <!-- Logo -->

      <!-- Heading -->

      <h1 class="m-0 text-white fw-bold">{{ $blog->title }}</h1>
    </div>
  </div>
  <div>
</div>
<div class="container my-5" >
  <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0 recipe-footer">
    <div class="views">{{ $blog->created_at->format('M d, h:i A') }}</div>
  </div>
    <div class="row align-items-center pe-4">
        <div class="col-md-12">
            <h2 class="fw-bold">{{ $blog->title }}</h2>
            <div class="highlight"></div>
            
            <p>
                {!! $blog->content !!}

            </p>

        </div>
    </div>
</div>

<!--{{-- <div class="container"  style="padding-bottom: 60px;">-->
<!--  <div class="row align-items-center">-->
<!--      <div class="col-md-12">-->
<!--          <h4 class="fw-bold">ChampadeviHillside Resort?</h4>-->
<!--          <div class="highlight"></div>-->
<!--          <p>-->
<!--              An oasis of calm and tranquility, located deep within a protected forest,-->
<!--              our luxury spa and health club welcome members and guests with a wide-->
<!--              range of facilities and services.-->
<!--          </p>-->
<!--          <p>-->
<!--              Melt your cares away as you rejuvenate yourself in an oasis of calm and-->
<!--              tranquility deep within the heart of the protected Gokarna Forest at the-->
<!--              Harmony Spa and Health Club. Our relaxing indoor swimming pool is one-of-a-kind-->
<!--              in Nepal. It is the perfect place to cool down and unwind after a jungle walk,-->
<!--              or a workout at the gym. erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.-->
<!--              The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.-->

<!--          </p>-->

<!--      </div>-->
<!--  </div>-->
<!--</div> --}}-->



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
