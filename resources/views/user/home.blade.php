<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center</title>

  <link rel="stylesheet" href="{{ asset('../assets/css/maicons.css') }}">

  <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('../assets/vendor/owl-carousel/css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset('../assets/vendor/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('../assets/css/theme.css') }}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="tel://256774609978"><span class="mai-call text-primary"></span> +256 7746 099 78</a>
              <span class="divider">|</span>
              <a href="mailto:kuolmarko47.com"><span class="mai-mail text-primary"></span> kuolmarko47@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://facebook.com/kuolmarko"><span class="mai-logo-facebook-f"></span></a>
              {{-- <a href="#"><span class="mai-logo-twitter"></span></a> --}}
              <a href="https://instagram.com/kuolual"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            @if(Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link" style="background-color: greenyellow" href="{{ url('myappointment') }}">My appointment</a>
            </li>
            <x-app-layout>

            </x-app-layout>            
            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
              </li>
            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
<!--code to show message has been sent-->
  @if(session()->has('message'))
  <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      {{ session()->get('message') }}
  </div>
  @endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">At One Health Center, we consider saving life first then pay for your bills later on once you are healed. You can always make an appoint with us online using one health app.!</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  
  <!--doctors-->
  @include('user.doctor')
  <!--doctorsend-->
  @include('user.appointment')
  <!-- .page-section -->
  
 
  @include('user.footer')

<script src="{{ asset('../assets/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('../assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('../assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('../assets/vendor/wow/wow.min.js') }}"></script>

<script src="{{ asset('../assets/js/theme.js') }}"></script>
  
</body>
</html>
