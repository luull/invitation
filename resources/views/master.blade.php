<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

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
  <link rel="stylesheet" type="text/css" href="{{ asset('frontpage-assets/datatable/datatables.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontpage-assets/datatable/dt-global_style.css')}}">
  <!-- =======================================================
  * Template Name: Logis - v1.3.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  @if(Request::is('login','regis'))
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

  @if(Request::is('login','regis'))
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
  <script src="{{ asset('frontpage-assets/js/jquery-3.1.1.min.js')}}"></script>
  <script src="{{ asset('frontpage-assets/datatable/datatables.js')}}"></script>
  <script>
    $('#dt-table').DataTable({
              "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
              "<'table-responsive'tr>" +
              "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
              "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                  "sInfo": "Showing page _PAGE_ of _PAGES_",
                  "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                  "sSearchPlaceholder": "Cari...",
                  "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
              });
              </script>
  <script src="https://kit.fontawesome.com/405cc35206.js" crossorigin="anonymous"></script>
  <script src="{{ asset('frontpage-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontpage-assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('frontpage-assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('frontpage-assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('frontpage-assets/vendor/aos/aos.js')}}"></script>
  {{-- <script src="{{ asset('frontpage-assets/vendor/php-email-form/validate.js')}}"></script> --}}
  
  <!-- Template Main JS File -->
  <script src="{{ asset('frontpage-assets/js/main.js')}}"></script>
  @yield('script')

</body>

</html>