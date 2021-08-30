@extends('layouts.dinner_page_template')

@section('title')
    Confirm my Order
@endsection

@section('content')
<div class="row mt-3 justify-content-center">
    <span class="h5 text-light">Confirm The Total Cost of your Order</span>
</div>
<div class="row mt-3 justify-content-center">
        <span class="h5 text-success">$ 58.00</span>
</div>
<div class="row mt-5 justify-content-center">
    <a href="/dinner/orders/rate" class="btn btn-danger w-50"><strong>Confirm</strong></a>
</div>
<br><br>
@endsection