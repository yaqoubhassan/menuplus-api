@extends('layouts.account_access')

@section('title')
    MenuPlus - Wait For A Table
@endsection

@section('content')
<div class="row justify-content-center">
    <p class="h5 text-light">Wait For A Table</p>
</div><br>
<div class="row justify-content-center">
    <div class="col-md-8 col-10">
        <form class="form" action="" method="POST">
            @csrf
            <div class="form-row">
                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" >
            </div>
            <div class="form-row mt-2">
                <div class="col-7 pl-0">
                    <input type="text" class="form-control" placeholder="Prefereed Area" disabled>
                </div>
                <div class="col-5 px-0">
                    <select name="booking_period" id="booking_period" class="form-control select-dark">
                        <option value="0">Garden</option>
                        <option value="1">Bar Area</option>
                        <option value="2">Lounge</option>
                        <option value="3">VIP</option>
                    </select>
                </div>
            </div>
            <div class="form-row mt-2">
                <div class="col-8 pl-0">
                    <input type="text" class="form-control" placeholder="Select party size" disabled>
                </div>
                <div class="col-4 px-0">
                    <select name="party_size" id="party_size" class="form-control select-dark">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="more">more...</option>
                    </select>
                </div>
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="text" name="phoneNumber" id="phoneNumber" placeholder="Mobile for confirmation">
            </div>
            <div class="form-row mt-2">
                <p class="text-light" style="font-size: 10px;">
                    A text message will be sent to the nominated mobile number 5 minutes before your table is ready. Please reply with "Y" to confirm and "N" to cancel your waiting request.
                </p>
            </div>
            <div class="form-row mt-3">
                {{-- <button type="submit" class="btn btn-danger col">Confirm</button> --}}
                <a href="#" class="btn btn-danger col">Confirm</a>
            </div>
        </form>
    </div>
</div>
@endsection