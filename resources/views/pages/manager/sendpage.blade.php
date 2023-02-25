 
    @extends('master')
    @section('title')
    <title>Send-Manager</title>
    @endsection
    @section('content')<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('frontpage-assets/img/bg-header2.png');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-7 text-center">
                <h2>Send Message</h2>
                {{-- <p>Silahkan mengatur Jadwal Acara Pernikahan anda.</p> --}}
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="/dashboard">Dashboard</a></li>
              <li>Send Message</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->
   <section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="text-center">{{ $data->name }}</h2>
                <p class="text-center">{{ $data->link }}</p>
                @foreach($share as $key => $value)
                <li>
                    <a href="{{$value}}" target="_blank" style="float: left">
                        @if($key == "facebook")
                        <i class="fa fa-facebook"></i>
                        @elseif($key == "twitter")
                        <i class="fa fa-twitter"></i>
                        @elseif($key == "whatsapp")
                        <i class="fa fa-whatsapp"></i>
                        @elseif($key == "telegram")
                        <i class="fa fa-telegram"></i>
                        @else
                        <i class="fa fa-home"></i>
                        @endif
                    </a>
                </li>
                @endforeach
            </div>
        </div>
    </div>
   </section>
@endsection
      