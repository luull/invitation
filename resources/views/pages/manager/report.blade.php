 
    @extends('master')
    @section('title')
    <title>Report-Manager</title>
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
              <li>Report</li>
            </ol>
          </div>
        </nav>
    </div>
    <div class="container my-5">
        <div class="row">
          @if (session('message'))
          <div class="alert {{ session('color') }} alert-dismissible fade show">
              {{ session('message') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
          </div>
          @endif
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped" id="dt-table">
                        <thead>
                            <tr>
                                <th>Nama Tamu</th>
                                <th>No telp</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($data as $dt )
                            <tr>
                                <td>{{ $dt->name }}</td>
                                <td>{{ $dt->phone }}</td>
                                @if($dt->status == 0)
                                  <td><span class="badge rounded-pill text-bg-warning">{{ $dt->status == 0 ? 'Tidak Hadir' : 'Hadir' }}</span></td>
                                @else
                                  <td><span class="badge rounded-pill text-bg-success">{{ $dt->status == 0 ? 'Tidak Hadir' : 'Hadir' }}</span></td>
                                @endif
                                <td>
                                    <a href="/report/delete/{{ $dt->id }}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
