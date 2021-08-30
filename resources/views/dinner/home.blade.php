@extends('layouts.account_access')

@section('title')
    Home - Dinner
@endsection

@section('content')
<div class="row justify-content-center mt-2">
    <span class="text-secondary"><small>Welcome</small></span>
</div>
<div class="row justify-content-center">
    {{-- Enter the Dinner's Name Here --}}
    <span class="h3 text-success" style="font-weight: bolder;">Angelina James</span>
</div>
<div class="row justify-content-center mt-4">
    <div class="col-md-8 col-11">
        <a href="/dinner/table-no" class="btn btn-black py-2 w-100" style="font-size: 16px">Dine - In</a>
        <br><br>
        <a href="/dinner/menu" class="btn btn-black py-2 w-100" style="font-size: 16px">Order Takeaway</a>
        <br><br>
        <a href="/dinner/order-history" class="btn btn-black py-2 w-100" style="font-size: 16px">Order History</a>
        <br><br>
        <a href="/dinner/book-table" class="btn btn-black py-2 w-100" style="font-size: 16px">Make A Booking</a>
        <br><br>
        <a href="/dinner/wait-table" class="btn btn-black py-2 w-100" style="font-size: 16px">Join the Q for a table</a>
        <br><br>
    </div>
</div>
@endsection