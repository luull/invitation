@extends('templates.master')
@section('header-content-templates3')
@if(!empty($getInvitation))
<section id="hero"  class="d-flex flex-column justify-content-start" style="background: url({{ asset($getInvitation->bg_header)}}) center center !important;background-size: cover !important;background-repeat: no-repeat !important;">
@else
<section id="hero"  class="d-flex flex-column justify-content-start">
@endif
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
     <div class="text-center mt-5">
        <h1 class="headline">pernikahan</h1>
        <h1 style="font-family: 'Satisfy', cursive;">{{ $getInvitation->username_male }} <br> & {{ $getInvitation->username_female }}</h1>
        <h3 class="headline mt-3" style="font-size:12px">Mengundang</h3>
        <p><span class="typed" style="color:#000;font-weight:600;font-size:22px" data-typed-items="Annisa Salsabila"></span></p>
        <div class="mt-3"> {!! QrCode::size(100)->backgroundColor(255,255,255,0)->color(0,0,0)->generate('https://luull.github.io') !!}</div>
        <h2 class="headline mt-3" style="font-size:10px;letter-spacing:1px;line-height:12px"><strong>scan barcode</strong> <br> untuk kehadiran</h2>
     </div>
    </div>
  </section>
  @endsection
  @section('main-content-templates3')
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img src="{{ asset('templates-assets/templates3/img/profile-img.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3>UI/UX Designer &amp; Web Developer.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York, USA</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          <p>
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
          </p>
        </div>
      </div>

    </div>
  </section>
  @endsection