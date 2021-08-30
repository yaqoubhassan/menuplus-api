@extends('layouts.dinner_page_template')

@section('title')
    Rate your Dishes
@endsection

@section('content')
<div class="row mt-3 ml-4 pl-3">
    @for ($i = 0; $i < 3; $i++)
        @include('templates.rate_dish_template')
    @endfor       
</div><br>
<div class="row justify-content-center">
    <button class="btn btn-danger w-50"><i class="fas fa-cloud-download-alt"></i>&nbsp;&nbsp; Get a voucher</button>
</div>
<div class="row justify-content-center mt-3">
    <div class="col-8">
        <div class="row justify-content-center">
            <span class="text-light" style="text-align: center; font-size: 13px">Save the menu and get a $20 voucher for your next visit</span>
        </div>
    </div>
</div>
<br><br><br>
@endsection