@extends('layouts.module_temp')

@section('module_title')
	QR Code Generation
@endsection

@section('content')
	<h2>Generate QR Code For The Branch of a Restaurant.</h2>
	<br>
	<br>
    <div class="row">
			<div class="col-md-4">
				    <h5>Simple Qr Code With String</h5>
    {!! QrCode::size(200)->generate('https://a2bosolutions.com'); !!}
			</div>

			<div class="col-md-4">
				<h5>Qr Code With Color</h5>
     {!! QrCode::size(200)->backgroundColor(255,55,0)->generate('https://crazydogsasd.com'); !!}
				
			</div>
			<div class="col-md-4">
				<h5>Qr Code with Image</h5>
				<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge(public_path('/image/MenuPlus_logo.png'), 0.3, true)
                        ->size(200)->errorCorrection('H')->backgroundColor(55,0,150)
                        ->generate('W3Adda Laravel Tutorial')) !!} ">
				
			</div>
	</div>
@endsection