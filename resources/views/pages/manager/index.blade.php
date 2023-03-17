 
    @extends('master')
    @section('title')
    <title>Index-Manager</title>
    @endsection
    @section('content')<!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('frontpage-assets/img/bg-header2.png');">
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
  
            @if(empty($check))
            <div class="row gy-4 justify-content-center">
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-8 col-12 col-sm-12 col-xs-12 col-12" style="text-align:left">
                            <h3>Silahkan Buat Undangan</h3>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 col-12" style="text-align:right">
                            <a href="/init/invitation" class="btn btn-light">Buat Undangan</a>
                            </div>
                    </div>
                    <hr>
                    <img src="{{ asset('frontpage-assets/img/schedule.svg') }}" class="img-fluid" alt="">
                </div>
            </div>
            @endif
            @if (session('message'))
            <div class="alert {{ session('color') }} alert-dismissible fade show">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
            </div>
            @endif
            @if(!empty($check))
            <div class="row justify-content-between">
                <div class="col-md-7 col-12">
                    <form role="form" method="POST" action="{{ route('create-invitation') }}" enctype="multipart/form-data">
                        @csrf
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="bio-tab" data-bs-toggle="tab" data-bs-target="#bio-tab-pane" type="button" role="tab" aria-controls="bio-tab-pane" aria-selected="true">Biodata</button>
                        <button class="nav-link" id="jdwl-tab" data-bs-toggle="tab" data-bs-target="#jdwl-tab-pane" type="button" role="tab" aria-controls="jdwl-tab-pane" aria-selected="false">Jadwal</button>
                        <button class="nav-link" id="place-tab" data-bs-toggle="tab" data-bs-target="#place-tab-pane" type="button" role="tab" aria-controls="place-tab-pane" aria-selected="false">Tempat</button>
                        <button class="nav-link" id="sound-tab" data-bs-toggle="tab" data-bs-target="#sound-tab-pane" type="button" role="tab" aria-controls="sound-tab-pane" aria-selected="false">Templates</button>
                        
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                     
              
                            <div class="tab-pane fade show active" id="bio-tab-pane" role="tabpanel" aria-labelledby="bio-tab" tabindex="0">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h3 class="mb-0">Biodata</h3>
                                        <hr class="mb-0" style="width: 60px">
                                    </div>
                                    <div class="col-md-7 col-12 mb-3">
                                        <div class="form-group">
                                            <label class="my-2" for="">Nama Lengkap Pria</label>
                                            <input type="text" class="form-control" value="{{ $check->name_male }}" name="name_male"/>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-12 mb-3">
                                        <div class="form-group">
                                            <label class="my-2" for="">Nama Panggilan Pria</label>
                                     
                                            
                                            <input type="text" class="form-control" value="{{ $check->username_male }}" name="username_male"/>
                                            <small class="text-danger">* Max 15 Karakter</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label class="my-2" for="">Nama Ayah Pria</label>
                                            <input type="text" class="form-control" value="{{ $check->father_male }}" name="father_male"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label class="my-2" for="">Nama Ibu Pria</label>
                                            <input type="text" class="form-control" value="{{ $check->mother_male }}" name="mother_male"/>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-12 mb-3">
                                        <div class="form-group">
                                            <label class="my-2" for="">Nama Lengkap Wanita</label>
                                            <input type="text" class="form-control" value="{{ $check->name_female }}" name="name_female"/>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-12 mb-3">
                                        <div class="form-group">
                                            <label class="my-2" for="">Nama Panggilan Wanita</label>
                                            <input type="text" class="form-control" value="{{ $check->username_female }}" name="username_female"/>
                                            <small class="text-danger">* Max 15 Karakter</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label class="my-2" for="">Nama Ayah Wanita</label>
                                            <input type="text" class="form-control" value="{{ $check->father_female }}" name="father_female"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <div class="form-group">
                                            <label class="my-2" for="">Nama Ibu Wanita</label>
                                            <input type="text" class="form-control" value="{{ $check->mother_female }}" name="mother_female"/>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="col-12 mb-3">
                                        <div class="d-grid gap-2 text-center">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                         
                            </div>
                            <div class="tab-pane fade" id="sound-tab-pane" role="tabpanel" aria-labelledby="sound-tab" tabindex="0">
                
                                <div class="row mt-3">
                                    <div class="col-12 mb-0">
                                        <h3 class="mb-0">Templates</h3>
                                        <hr class="mb-0" style="width: 60px">
                                        
                                    </div>
                                      <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <label class="my-3" for="">Header Message</label>
                                            <textarea name="header_message" class="form-control" id="" cols="10" rows="3">{{ $check->header_message }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 col-12">
                                                    <label class="my-3" for="">Background utama</label>
                                                    <br>
                                                    <img class="mb-3" src="{{ asset($check->bg_header) }}" style="width:100%;border-radius:8px" alt="">
                                                </div>
                                                <div class="col-md-8 col-12">
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
                                        <div class="form-group">
                                            <label class="my-3" for="">Footer Message</label>
                                            <textarea name="footer_message" class="form-control" id="" cols="10" rows="3">{{ $check->footer_message }}</textarea>
                                        </div>
                                    </div>
                                            <div class="col-md-12 col-12 mb-3">
                                                 <label class="my-3" for="">Backsound</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">https://www.youtube.com/watch?v=</span>
                                                    <input type="text" class="form-control" name="backsound" value="{{ $check->backsound }}">
                                                  </div>
                                                  
                                            </div>
                                            <hr class="my-4">
                                            <div class="col-12 mb-3">
                                                <div class="d-grid gap-2 text-center">
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="jdwl-tab-pane" role="tabpanel" aria-labelledby="jdwl-tab" tabindex="0">
                
                                <div class="row mt-3">
                                    <div class="col-12 mb-0">
                                        <h3 class="mb-0">Jadwal</h3>
                                        <hr class="mb-0" style="width: 60px">
                                        
                                    </div>
                                            <div class="col-md-8 col-12 mb-3">
                                                <div class="form-group">
                                                    <label class="my-3" for="">Tanggal Akad Nikah</label>
                                                    <input type="date" class="form-control" value="{{ $check->akad_date }}" name="akad_date"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3">
                                                <div class="form-group">
                                                    <label class="my-3" for="">Waktu Akad Nikah</label>
                                                    <input type="time" class="form-control" value="{{ $check->akad_time }}" name="akad_time"/>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-12 mb-3">
                                                <div class="form-group">
                                                    <label class="my-3" for="">Tanggal Resepsi Nikah</label>
                                                    <input type="date" class="form-control" value="{{ $check->resepsi_date }}" name="resepsi_date"/>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12 mb-3">
                                                <div class="form-group">
                                                    <label class="my-3" for="">Waktu Resepsi Nikah</label>
                                                    <input type="time" class="form-control" value="{{ $check->resepsi_time }}" name="resepsi_time"/>
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                            <div class="col-12 mb-3">
                                                <div class="d-grid gap-2 text-center">
                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                
                            </div>
                            <div class="tab-pane fade" id="place-tab-pane" role="tabpanel" aria-labelledby="place-tab" tabindex="0">
                
                                <div class="row mt-3">
                                    <div class="col-12 mb-0">
                                        <h3 class="mb-0">Alamat</h3>
                                        <hr class="mb-0" style="width: 60px">
                                        
                                    </div>
                                     
                                                <div class="col-md-12 col-12 mb-3">
                                                    <div class="form-group">
                                                        <label class="my-2" for="">Nama Tempat</label>
                                                        <input type="text" placeholder="Hotel .." class="form-control" value="{{ $check->place }}" name="place"/>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="form-group">
                                                        <label class="my-3" for="">Alamat lengkap</label>
                                                        <textarea name="address" placeholder="Jln. ..." class="form-control" id="" cols="10" rows="3">{{ $check->address }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-12 mb-3">
                                                    <div class="form-group">
                                                        <label class="my-2" for="">Link Google Maps</label>
                                                        <input type="text" class="form-control" value="{{ $check->link_address }}" name="link_address"/>
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                                <div class="col-12 mb-3">
                                                    <div class="d-grid gap-2 text-center">
                                                    <button type="submit" class="btn btn-success">Simpan</button>
                                                    </div>
                                                </div>
                                </div>
                            </div>
                           
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-12 mt-3">
                    @if (session('messaged'))
                    <div class="alert {{ session('color') }} alert-dismissible fade show">
                        {{ session('messaged') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
                    </div>
                    @endif
                    <div class="card">
                      
                        <form action="{{ route('send') }}"  target="_blank"  method="POST" enctype="multipart/form-data">
                       
                            @csrf
                        <div class="card-body">
                            <div class="col-12 mt-2 mb-2">
                                <h3 class="mb-0">Kirim</h3>
                                <hr class="mb-0" style="width: 60px">
                            </div>
                               <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label class="my-1">Nama Tamu</label>
                                        <input type="text" name="name" class="form-control">
                                        <input type="text" value="{{ $check->id }}" name="id_invitation" class="form-control" hidden>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="my-1">No Telp</label>
                                        <input type="text" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" name="phone" class="form-control">
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                    
                        <div class="d-grid text-center">
                            {{-- {!! $share !!} --}}
                            <button type="submit" class="btn btn-success"> <i class="fa fa-whatsapp"></i> Kirim Whatsapp</button>
                        </div>
                        
                        </form>
                    </div>
                </div>
                </div>
            @endif
            </div>
      </section>
@endsection