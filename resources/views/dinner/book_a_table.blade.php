@extends('layouts.account_access')

@section('title')
    MenuPlus - Book A Table
@endsection

@section('content')
<div class="row justify-content-center">
    <p class="h5 text-light">Book A Table</p>
</div><br>
<div class="row justify-content-center">
    <div class="col-md-8 col-10">
        <form class="form" action="" method="POST">
            @csrf
            <div class="form-row">
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" >
            </div>
            <div class="form-row mt-2">
                <div class="col-6 pl-0">
                    <input type="text" class="form-control" placeholder="Booking Date" disabled>
                </div>
                <div class="col-6 px-0">
                    <input class="form-control" type="date" name="booking_date" id="booking_date">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="col-6 pl-0">
                    <input type="text" class="form-control" placeholder="Time" disabled>
                </div>
                <div class="col-6 px-0">
                    <input class="form-control" type="time" name="booking_time" id="booking_time">
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="col-7 pl-0">
                    <input type="text" class="form-control" placeholder="Booking for" disabled>
                </div>
                <div class="col-5 px-0">
                    <select name="booking_period" id="booking_period" class="form-control select-dark">
                        <option value="0">Breakfast</option>
                        <option value="1">Lunch</option>
                        <option value="2">High Tea</option>
                        <option value="2">Dinner</option>
                    </select>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="col-8 pl-0">
                    <input type="text" class="form-control" placeholder="Select party size" disabled>
                </div>
                <div class="col-4 px-0">
                    <select name="party_size" id="party_size" class="form-control select-dark">
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                    </select>
                </div>
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="text" name="special_requeset" id="special_requeset" placeholder="Special Request">
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="text" name="phoneNumber" id="phoneNumber" placeholder="Mobile for confirmation">
            </div>
            <div class="form-row mt-3">
                {{-- <button type="submit" class="btn btn-danger col">Confirm</button> --}}
                <a href="#" class="btn btn-danger col">Confirm</a>
            </div>
        </form>
    </div>
</div>
@endsection