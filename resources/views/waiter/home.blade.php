@extends('layouts.waiter_template')

@section('title')
    Home
@endsection

@section('content')
<div class="row justify-content-center mt-2">
    <span class="text-secondary">Welcome</span>
</div>
<div class="row justify-content-center">
    <span class="text-light" style="font-size: 24px;">Caroline Shay</span>
</div><br><br><br><br>
<div class="row justify-content-center mb-5">
    <div class="box-div col-md-8 col-10">
        <div class="shift-up">
            <div class="row justify-content-center">
                <div class="">
                    <img src="{{ asset('/image/profile/example.jpg') }}" class="img img-fluid rounded-circle circular-border">
                </div>
            </div><br>
            <div class="row justify-content-center">
                <span class="text-secondary">Your Working Area</span>
            </div>
            <div class="row justify-content-center">
                {{-- Get the Working Area from the Database. --}}
                <span class="h4 text-light">Bar Area</span>
            </div>
            <br><hr class="bg-secondary"><br>
            <div class="row justify-content-center">
                <div class="tables-box-div col-5 py-4">
                    <a href="/waiter/options">
                    {{-- Get the Working Area from the Database. --}}
                    <div class="row justify-content-center"><span class="text-secondary">Bar Area</span></div>
                    {{-- Get the Number of Tables in Area from the Database. --}}
                    <div class="row justify-content-center"><span class="text-light h5">10 Tables</span></div>
                    <div class="row justify-content-center"><span class="text-success">Start Shift</span></div>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection