@extends('templates.master')
@section('header-content-templates1')
  <!-- ======= Hero Section ======= -->
  @if(!empty($getInvitation))
  <section id="hero" class="d-flex flex-column justify-content-start align-items-center" style="background: url({{ asset($getInvitation->bg_header)}}) top center !important;background-size: cover !important;background-repeat: no-repeat !important;">
  @else
  <section id="hero" class="d-flex flex-column justify-content-start align-items-center">
  @endif
  <div class="hero-container" data-aos="fade-in">
      <div class="text-center">
                 <h1 class="headline">Pernikahan</h1>
                 <h1 style="font-family: 'Dancing Script', cursive;text-transform:capitalize">{{ $getInvitation->username_male }}<br> & <br>{{ $getInvitation->username_female }}</h1>
                 <h3 class="headline" style="color:#fff;font-size:12px">Mengundang</h3>
                 <hr class="mb-2" style="color:#fff">
                 <h3 class="mb-0" style="font-family: 'Gloock', serif;color:#fff;text-transform:capitalize">Akbar Rais</h3>
                 <hr class="mt-2" style="color:#fff">
                 <div> {!! QrCode::size(100)->backgroundColor(255,255,255,0)->color(255,255,255)->generate('https://luull.github.io') !!}</div>
                 <h2 class="headline mt-3" style="font-size:10px;letter-spacing:1px;line-height:12px"><strong>scan barcode</strong> <br> untuk kehadiran</h2>
             </div>
                {{-- <p><span class="typed" data-typed-items="{{ $getInvitation->quotes }}"></span></p> --}}
    </div>
  </section>
@endsection
@section('main-content-templates1')

{{-- <embed name="GoodEnough" src="{{ asset('music-assets/music.mp3') }}" loop="false" hidden="true" autostart="true"> --}}
    <div data-video="{{ $getInvitation->backsound }}" data-autoplay="1" data-loop="1" id="youtube-audio" style="display:none"></div>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="section-title">
            <h2>About</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="{{ asset('templates-assets/templates1/img/profile-img.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
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
      </section><!-- End About Section -->
  
@endsection