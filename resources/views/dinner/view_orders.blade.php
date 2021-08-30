@extends('layouts.dinner_page_template')

@section('title')
    View my Order
@endsection

@section('content')
<div class="row mt-3 ml-4 pl-3">
    @for ($i = 0; $i < 4; $i++)
        @include('templates.dinner_order_items_template')
    @endfor       
</div>
<div class="row justify-content-center">
    <a href="/dinner/orders/confirm" class="btn btn-danger w-50"><strong>Accept & Proceed</strong></a>
</div>
<br><br>
@endsection