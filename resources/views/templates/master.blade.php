<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $getTheme->themes}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('templates-assets/'.$getTheme->themes.'/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('templates-assets/'.$getTheme->themes.'/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Domine:wght@700&family=Montserrat:wght@300;400;500;600&family=Raleway:wght@300;400;500&family=Satisfy&display=swap" rel="stylesheet"> 
  <!-- Vendor CSS Files -->
  <link href="{{ asset('templates-assets/master/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/master/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/master/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/master/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/master/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('templates-assets/master/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('templates-assets/'.$getTheme->themes.'/css/style.css')}}" rel="stylesheet">

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

  {{-- @include('templates.'.$getTheme->themes.'.header') --}}
  @yield($getTheme->yield)
  @yield('header-'.$getTheme->yield)
  
  <main id="mains">
      @yield('main-'.$getTheme->yield)
    </main>
    
  @include('templates.'.$getTheme->themes.'.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  @yield('script')
  <script src="https://www.youtube.com/iframe_api"></script>
  <script src="https://cdn.rawgit.com/labnol/files/master/yt.js"></script>
  <script src="{{ asset('templates-assets/master/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('templates-assets/master/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('templates-assets/master/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('templates-assets/master/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('templates-assets/master/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('templates-assets/master/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('templates-assets/master/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{ asset('templates-assets/master/vendor/waypoints/noframework.waypoints.js')}}"></script>
  {{-- <script src="{{ asset('templates-assets/master/js/yt.js')}}"></script> --}}
  {{-- <script src="{{ asset('templates-assets/master/vendor/php-email-form/validate.js')}}"></script> --}}
  <!-- Template Main JS File -->

  <script src="{{ asset('templates-assets/'.$getTheme->themes.'/js/main.js')}}"></script>

</body>

</html>