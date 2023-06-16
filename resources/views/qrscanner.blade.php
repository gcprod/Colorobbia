@extends('layouts.app')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@section('content')
<div class="container">
    <div class="flex justify-center">
        <div class="card">
            <div class="card-header">SCAN QR CODE</div>
            
            <div class="card-body">
                <form method="POST" action="{{ route('citizen.data') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                      <div class="form-group col-sm">
                            <div id="reader" width="600px"><
                                <div>
                                {{-- <input type="text" id="result"> --}}
                            </div>
        </div>
        
        {{-- <div class="form-row">
            <div class="form-group col-sm">
              <label for="nama"></label>
              <input type="text" class="form-control" id="result">
        </div> --}}

        
    </div>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
    

    function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
    // console.log(`Code matched = ${decodedText}`, decodedResult);
    $("#result").val(decodedText)
    window.open(decodedText, "_blank");

    // return Redirect::away("#result")
}

function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
  console.warn(`Code scan error = ${error}`);
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>

</div>
@endsection
