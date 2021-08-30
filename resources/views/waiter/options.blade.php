@extends('layouts.waiter_template')

@section('title')
    Options
@endsection

@section('User_Avatar')
    <a href="/waiter/home"><img src="{{ asset('/image/profile/example.jpg')}}" class="img img-fluid rounded-circle circular-border p-0" style="border: 1px solid white; height: 40px; width: 40px;"/></a>
@endsection

@section('content')
@include('templates.area_tables_template')
{{-- @include('templates.name_position_template') --}}
<div class="row justify-content-center">
    <div class="box-div option-item mt-3 mx-3">
        <a href="/waiter/tables">
            <div class="row justify-content-center pt-4">
                <div class="col-6 mt-2">
                    <div class="row justify-content-center">
                        <img src="{{ asset('/image/icons/chair.svg')}}" class="img img-fluid">
                    </div>
                    <div class="row justify-content-center mt-3">
                        <span class="h6 text-light">Tables</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="box-div option-item mt-3 mr-3">
        <a href="/waiter/orders">
            <div class="row justify-content-center pt-4">
                <div class="col-6 mt-2">
                    <div class="row justify-content-center">
                        <img src="{{ asset('/image/icons/order-food.svg')}}" class="img img-fluid">
                    </div>
                    <div class="row justify-content-center mt-3"><span class="h6 text-light">Orders</span></div>
                </div>
            </div>
        </a>
    </div>
    <div class="box-div option-item mx-3 mt-3">
        <a href="/waiter/payment">
            <div class="row justify-content-center pt-4">
                <div class="col-6 mt-2">
                    <div class="row justify-content-center">
                        <img src="{{ asset('/image/icons/credit-card.svg')}}" class="img img-fluid">
                    </div>
                    <div class="row justify-content-center mt-3"><span class="h6 text-light">Payment</span></div>
                </div>
            </div>
        </a>
    </div>
    <div class="box-div option-item mt-3 mr-3">
        <div class="row justify-content-center pt-4">
            <div class="col-6 mt-2">
                <a href="/waiter/service">
                    <div class="row justify-content-center">
                        <img src="{{ asset('/image/icons/service.svg')}}" class="img img-fluid">
                    </div>
                    <div class="row justify-content-center mt-3"><span class="h6 text-light">Service</span></div>
                </a>
            </div>
        </div>
    </div>
</div><br><br><br>
@endsection