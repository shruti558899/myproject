@extends('layouts.main')

@section('main-container')
  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2 style="color: white">
                About Us
              </h2>
            </div>
            <p style="color:white "> 
              Normal distribution of letters, as opposed to using 'Content here, content here', making it look like
              readable English. Many desktop publishing packages and web page editors has a more-or-less normal
              distribution of letters, as opposed to using 'Content here, content here', making it look like readable
              English. Many desktop publishing packages and web page editors
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{url('images/about-img.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

 

  <!-- jQery -->
  <script src="{{url('js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{url('js/bootstrap.js')}}"></script>
  <!-- nice select -->
  <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js')}}" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="{{url('js/custom.js')}}"></script>

</body>

</html>
@endsection