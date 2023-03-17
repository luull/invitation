 
    @extends('master')
    @section('title')
    <title>Scanning-Manager</title>
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
              <li>Scanning</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->
      
@section('content')
@if (session('message'))
<div class="alert {{ session('color') }} alert-dismissible fade show">
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
</div>
@endif
    <div class="row justify-content-center">
        <div class="mt-5" id="reader" width="600px"></div>
        <form method="POST" action="{{ route('scanning') }}">
            @csrf
            <input type="text" name="getLink" id="getLink" hidden/>
            <button type="submit" id="btn" style="background:transparent;color:transparent"></button>
            <div class="loader" id="loading"></div>
        </form>
    </div>
@endsection
@section('script')
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
    function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
  // console.log(`Code matched = ${decodedText}`, decodedResult);
  if(decodedText !== null){
    document.getElementById('getLink').value = decodedText;
    document.getElementById('btn').click();
    
    alert('Berhasil Konfirmasi Kehadiran');
  }

}

function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
//   console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 250, height: 250},  rememberLastUsedCamera: true,
  // Only support camera scan type.
  supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_CAMERA] },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>
@endsection
