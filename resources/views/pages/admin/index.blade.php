@extends('master')
@section('title')
<title>Login</title>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="mt-5" id="reader" width="600px"></div>
        <form method="POST" action="{{ route('scanning') }}">
            @csrf
            <input type="text" name="getLink" id="getLink" />
            <button type="submit" id="btn">ggas</button>
        </form>
    </div>
@endsection
@section('script')
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
    function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
  console.log(`Code matched = ${decodedText}`, decodedResult);
  document.getElementById('getLink').value = decodedText;
  document.getElementById('btn').click();
}

function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
//   console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>
@endsection
