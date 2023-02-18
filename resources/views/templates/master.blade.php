<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ session('themes')->themes}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('templates-assets/'.session('themes')->themes.'/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('templates-assets/'.session('themes')->themes.'/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('templates-assets/'.session('themes')->themes.'/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  {{-- <i class="bi bi-list mobile-nav-toggle d-xl-none"></i> --}}

  @include('templates.'.session('themes')->themes.'.header')
  
  <main id="main">
      @yield(session('themes')->yield)
    </main>
    
  @include('templates.'.session('themes')->themes.'.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  @yield('script')
  <script src="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/waypoints/noframework.waypoints.js')}}"></script>
  {{-- <script src="{{ asset('templates-assets/'.session('themes')->themes.'/vendor/php-email-form/validate.js')}}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ asset('templates-assets/'.session('themes')->themes.'/js/main.js')}}"></script>

</body>

</html>