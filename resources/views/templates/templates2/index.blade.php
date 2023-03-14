@extends('templates.master')
@section('header-content-templates2')
  <!-- ======= Hero Section ======= -->
  @if(!empty($getInvitation->bg_header))
  <section id="hero" style="background: url({{ asset($getInvitation->bg_header)}}) center center !important;background-size: cover !important;background-repeat: no-repeat !important;">
  @else
  <section id="hero" >
  @endif
    <div class="hero-container">
       <div class="text-center">
        <h1 class="headline">pernikahan</h1>
        <h1>{{ $getInvitation->username_male }} <br> & {{ $getInvitation->username_female }}</h1>
        <h3 class="headline" style="color:#fff;font-size:12px">Mengundang</h3>
        <h2 style="font-family: 'Domine', serif;font-size:22px;text-transform:capitalize">{{ $getGuest->name }}</h2>
        <div> {!! QrCode::size(150)->backgroundColor(0,0,0,20)->color(255,255,255)->generate($getGuest->link) !!}</div>
        <h2 class="headline mt-3" style="font-size:10px;letter-spacing:1px;line-height:12px"><strong>scan barcode</strong> <br> untuk kehadiran</h2>
       </div>
      <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->
@endsection
@section('main-content-templates2')
<div data-video="{{ $getInvitation->backsound }}" data-autoplay="1" data-loop="0" id="youtube-audio" style="display:none"></div>
<section>
    <div class="container">
        <div class="section-title">
            <div class="text-center">
            <img src="{{ asset('templates-assets/master/img/bismillah.png') }}" class="img-fluid" style="width:300px;" alt="">
            <div class="row justify-content-center">
                <div class="col-md-8 col-12">
                    <p class="desc" style="text-align:center">{{ $getInvitation->header_message }}</p>
                </div>
            </div>
            {{-- <p>{{ $akad_date->format('l, j F Y ; h:i a') }}</p> --}}
            <div class="row justify-content-center mt-3">
                <div class="col-md-8 col-12">
                  
                    <div class="row">
                        <div class="col-12">
                            <h1 class="mb-0" style="font-family: 'Dancing Script', cursive;text-transform:capitalize">{{ $getInvitation->name_male }}</h1>
                            <small>Putra dari Bpk. {{ $getInvitation->father_male }} & Ibu. {{ $getInvitation->mother_male }}</small>
                            <h1 class="my-2" style="font-family: 'Dancing Script', cursive;text-transform:capitalize;font-size:34px">&</h1>
                            <h1 class="mb-0" style="font-family: 'Dancing Script', cursive;text-transform:capitalize">{{ $getInvitation->name_female }}</h1>
                            <small>Putra dari Bpk. {{ $getInvitation->father_female }} & Ibu. {{ $getInvitation->mother_female }}</small>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <h3 class="date_wed mb-0" style="font-size: 25px">{{ $akad_date->format('l') }}</h3>
                        </div>
                        <div class="col-4" style="border-left: 1px solid black;border-right: 1px solid black">
                            <h3 class="date_wed mb-0">{{ $akad_date->format('F') }}</h3>
                            @if ($akad_date == $resepsi_date)
                            <h3 class="date_wed_ mb-0" style="font-size:70px">{{ $akad_date->format('j') }}</h3>
                            @else 
                            <h3 class="date_wed_ mb-0">{{ $akad_date->format('j') }}</h3>
                            @endif
                            <h3 class="date_wed mb-0">{{ $akad_date->format('Y') }}</h3>
                        </div>
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            @if ($akad_date == $resepsi_date)
                                <div class="row">
                                    <div class="col-12 justify-content-start">
                                        
                                        <small class="date_wed_desc">Akad</small>
                                        <br>
                                        <h3 class="date_wed mb-3">{{ $akad_time->format('h:i - a') }}</h3>
                                    </div>
                                    <hr>
                                    <div class="col-12">
                                        <small class="date_wed_desc">Resepsi</small>
                                        <h3 class="date_wed mb-0">{{ $resepsi_time->format('h:i - a') }}</h3>

                                    </div>
                                </div>
                            @else
                            <div class="col-12 justify-content-start">
                   
                                <small class="date_wed_desc">Akad</small>
                                <br>
                                <h3 class="date_wed mb-3">{{ $akad_time->format('h:i - a') }}</h3>
                            </div>
                            @endif
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8 col-12">
                  <hr>
                <div class="row">
                    <div class="col-md-8 col-8">
                        <h3 class="date_wed mb-0" style="text-align: left">{{ $getInvitation->place }}</h3>
                        <p class="desc" style="text-align: left">{{ $getInvitation->address }}</p>
                    </div>
                    <div class="col-md-4 col-4">
                        <a href="{{ $getInvitation->link_address }}" target="_blank"> 
                           <div  style="background-color: #f0f1f3;;padding:10px;border-radius:8px">
                            <i class="fa fa-map-location-dot" style="font-size:50px;"></i>
                            <br>
                            <small class="text-dark">Google Maps</small>
                           </div>
                        </a>
                    </div>
                </div>
                <hr>
              </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-12">
                    <p class="desc" style="text-align:center">{{ $getInvitation->footer_message }}</p>
                </div>
            </div>
            </div>
          </div>
    </div>
</section>
@endsection