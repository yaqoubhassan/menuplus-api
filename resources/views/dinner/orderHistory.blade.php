@extends('layouts.dinner_page_template')

@section('title')
    My Orders
@endsection

@section('content')
<div class="row mt-3 pl-4">
    <span class="h4 text-light">Previous Orders</span>
</div>
<div class="row justify-content-center mb-5">
    @foreach ($orders as $order)
        @include('templates.order_history_template')
    @endforeach
</div><br>
@endsection