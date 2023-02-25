<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  @yield('title')
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontpage-assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('frontpage-assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontpage-assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontpage-assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('frontpage-assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontpage-assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontpage-assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontpage-assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontpage-assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  @if(Request::is('login','regis','admin/scan'))
  <!-- ======= Header ======= -->
  <!-- End Header -->
  @else
  <!-- ======= Header ======= -->
    @if(empty(session('dataUser')))
      @include('templates-frontpage.header')
    @else
      @include('templates-manager.header')
    @endif
  <!-- End Header -->
  @endif


  <main id="main">
    @yield('content')
  </main><!-- End #main -->

  @if(Request::is('login','regis','admin/scan'))
  <!-- ======= Footer ======= -->
  <!-- End Footer -->
  @else
  <!-- ======= Footer ======= -->
    @if(empty(session('dataUser'))):
      @include('templates-frontpage.footer')
    @else
      @include('templates-manager.footer')
    @endif
<!-- End Footer -->
  @endif


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  @yield('script')
  <script src="https://kit.fontawesome.com/405cc35206.js" crossorigin="anonymous"></script>
  <script src="{{ asset('frontpage-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontpage-assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('frontpage-assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('frontpage-assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('frontpage-assets/vendor/aos/aos.js')}}"></script>
  {{-- <script src="{{ asset('frontpage-assets/vendor/php-email-form/validate.js')}}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ asset('frontpage-assets/js/main.js')}}"></script>

</body>

</html>