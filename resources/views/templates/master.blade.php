<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

  <title>{!! $getInvitation->username_male !!} & {!! $getInvitation->username_female !!}</title>
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{!! $getInvitation->username_male !!} & {!! $getInvitation->username_female !!}" />
  <meta property="og:description" content="{!! $getInvitation->header_message !!}" />
  <meta property="og:url" content="{!! $getInvitation->link_address !!}" />
  <meta property="og:image" content="{!! asset($getInvitation->bg_header) !!}" />

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    
  {{-- @include('templates.'.$getTheme->themes.'.footer') --}}
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('templates-assets/'.$getTheme->themes.'/js/main.js')}}"></script>

</body>
<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:auto;">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body mb-4">
          <div style="text-align:center">
             @yield('qr')
          </div>
      </div>
   
    </div>
  </div>
</div>

</html>