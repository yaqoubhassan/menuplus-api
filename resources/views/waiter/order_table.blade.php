@extends('layouts.waiter_template')

@section('title')
    Order for Table No {{$table_no}}
@endsection

@section('content')
<div class="row justify-content-center">
    {{-- Enter  Table Number here --}}
    <span class="h2 text-light">Table No {{$table_no}}</span>
</div>
<br>
<div class="box-div">
    <div class="row justify-content-center m-1 pt-3">
        <div class="col-5">
            <div class="row justify-content-center">
                <span class="text-secondary">Selected Dishes</span>
            </div>
        </div>
        <div class="col-4">
            <div class="row justify-content-center">
                <span class="text-secondary">Serve As</span>
            </div>
        </div>
        <div class="col-3">
            <div class="row justify-content-center">
                <span class="text-secondary">Pos</span>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-4 px-4">
        @foreach ($orders as $order_item)
            @include('templates.order_items_template')
        @endforeach
    </div>
    <hr class="bg-secondary">
    <div class="row justify-content-center mt-4">
        <div class="col-10">
            <a href="/waiter/confirm/orders" class="btn btn-danger w-100">Confirm</a>
        </div>
    </div>
    <br>
</div>
<br><br>
@endsection