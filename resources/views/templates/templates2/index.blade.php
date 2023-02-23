@extends('templates.master')
@section('header-content-templates2')
  <!-- ======= Hero Section ======= -->
  @if(!empty($getInvitation->bg_header))
  <section id="hero" style="background: url({{ asset($getInvitation->bg_header)}}) center center !important;background-size: cover !important;background-repeat: no-repeat !important;">
  @else
  <section id="hero" >
  @endif
    <div class="hero-container">
       <div class="text-center mt-5">
        <h1 class="headline">pernikahan</h1>
        <h1>{{ $getInvitation->username_male }} <br> & {{ $getInvitation->username_female }}</h1>
        <h3 class="headline" style="color:#fff;font-size:12px">Mengundang</h3>
        <h2 style="font-family: 'Domine', serif;font-size:22px;text-transform:capitalize">Idfan nasywan</h2>
        <div> {!! QrCode::size(100)->backgroundColor(255,255,255,0)->color(255,255,255)->generate('https://luull.github.io') !!}</div>
        <h2 class="headline mt-3" style="font-size:10px;letter-spacing:1px;line-height:12px"><strong>scan barcode</strong> <br> untuk kehadiran</h2>
       </div>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->
@endsection
@section('main-content-templates2')
<div data-video="{{ $getInvitation->backsound }}" data-autoplay="1" data-loop="1" id="youtube-audio" style="display:none"></div>
<section id="about" class="about">
    <div class="container">
      <div class="section-title">
        <span>About Me</span>
        <h2>About Me</h2>
        <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
      </div>

      <div class="row">
        <div class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
        <div class="col-lg-8 d-flex flex-column align-items-stretch">
          <div class="content ps-lg-4 d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Laura Thomso</span></li>
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
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Me Section -->
@endsection