@extends('layouts.account_access')

@section('title')
    Dinner SignUp
@endsection

@section('content')
<div class="row justify-content-center">
    <p class="h5 text-light">Add Your Information</p>
</div><br>
<div class="row justify-content-center">
    <div class="col-md-8 col-10">
        <form class="form" action="" method="POST">
            @csrf
            <div class="form-row">
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Firstname">
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Lastname">
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="text" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number">
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="email" name="email" id="email" placeholder="Email Address">
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="number" name="independents" id="independents" placeholder="Number of Independents">
            </div>
            <div class="form-row mt-3">
                {{-- <button type="submit" class="btn btn-danger col">Confirm</button> --}}
                <a href="/dinner/table-no" class="btn btn-danger col">Confirm</a>
            </div>
        </form>
    </div>
</div>
@endsection