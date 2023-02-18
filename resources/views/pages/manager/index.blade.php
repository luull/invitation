 
    @extends('master')
    @section('title')
    <title>Index-Manager</title>
    @endsection
    @section('content')<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('frontpage-assets/img/page-header.jpg');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-7 text-center">
                <h2>Selamat Datang {{ session('dataUser')->name }} ..</h2>
                <p>Silahkan mengatur Jadwal Acara Pernikahan anda.</p>
              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Dashboard</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->
      
      <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up">
  
          <div class="row gy-4 justify-content-center">
            @if (session('message'))
            <div class="alert {{ session('color') }} alert-dismissible fade show">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
            </div>
            @endif
            @if(!empty($check))
            <div class="col-lg-4">
              <div class="services-list">
                <a href="#bio">Biodata</a>
                <a href="#music">Music</a>
                <a href="#">Foto-foto</a>
                <a href="#">Video</a>
              </div>
  
              <h4>{{ $check->username_male }} & {{ $check->username_female }} </h4>
              <p>{{ $check->quotes }}</p>
            </div>
            @endif
            <div class="{{ empty($check) ? 'col-12' : 'col-8' }}" style="max-height:70vh;overflow:scroll" id="bla">
                @if(empty($check))
                    <div class="text-center">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 col-12" style="text-align:left">
                            <h3>Silahkan Buat Undangan</h3>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 col-12" style="text-align:right">
                               <a href="/init/invitation" class="btn btn-light">Buat Undangan</a>
                            </div>
                        </div>
                        <hr>
                        <img src="{{ asset('frontpage-assets/img/schedule.svg') }}" class="img-fluid" alt="">
                    </div>
                    @else
                    
                    <div id="bio">
                        <h3>Biodata</h3>
                        <hr style="width: 60px">
                        <form role="form" method="POST" action="{{ route('create-invitation') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-8 mb-3">
                                    <div class="form-group">
                                        <label class="my-3" for="">Nama Lengkap Pria</label>
                                        <input type="text" class="form-control" value="{{ $check->name_male }}" name="name_male"/>
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div class="form-group">
                                        <label class="my-3" for="">Nama Panggilan Pria</label>
                                        <input type="text" class="form-control" value="{{ $check->username_male }}" name="username_male"/>
                                    </div>
                                </div>
                                <div class="col-8 mb-3">
                                    <div class="form-group">
                                        <label class="my-3" for="">Nama Lengkap Wanita</label>
                                        <input type="text" class="form-control" value="{{ $check->name_female }}" name="name_female"/>
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div class="form-group">
                                        <label class="my-3" for="">Nama Panggilan Wanita</label>
                                        <input type="text" class="form-control" value="{{ $check->username_female }}" name="username_female"/>
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div class="form-group">
                                        <label class="my-3" for="">Tanggal Pernikahan</label>
                                        <input type="date" class="form-control" value="{{ $check->wedding_date }}" name="wedding_date"/>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    <div class="form-group">
                                        <label class="my-3" for="">Waktu Pernikahan</label>
                                        <input type="time" class="form-control" value="{{ $check->wedding_time }}" name="wedding_time"/>
                                    </div>
                                </div>
                                <div class="col-5 mb-3">
                                    <div class="form-group">
                                        <label class="my-3" for="">Quotes</label>
                                        <textarea name="quotes" class="form-control" id="" cols="10" rows="3">{{ $check->quotes }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-5 col-12">
        
                                                <label class="my-3" for="">Background utama</label>
                                                <br>
                                                <img class="mb-3" src="{{ asset($check->bg_header) }}" style="width:250px;border-radius:8px" alt="">
                                            </div>
                                            <div class="col-md-7 col-12">
                                                <label class="my-3" for="">Ubah Background</label>
                                                <small class="text-danger">* batas ukuran 2mb</small>
                                                <br>
                                                <input type="file" class="form-control" name="bg_header">
                                                <input type="text" class="form-control" value="{{ $check->bg_header }}" name="default" hidden>
                                                @error('image')
                                                <br>
                                                <div class="text-danger mt-1">Gambar tidak sesuai dengan ketentuan</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="d-grid gap-2 text-center">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
                <div id="music">
                    @if(!empty($check))
                    <h3>Music</h3>
                    <hr style="width: 60px">
                    @endif
                </div>
                @endif

            </div>
        
          </div>
  
        </div>
      </section>
@endsection