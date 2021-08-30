@extends('layouts.account_access')

@section('title')
    Dinner Login
@endsection

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-8 col-10">
        <form class="form" action="" method="POST">
            @csrf
            <div class="form-row">
                <input class="form-control" type="text" name="email_username" id="email_username" placeholder="Email">
            </div>
            <div class="form-row mt-3">
                <input class="form-control" type="text" name="mobile_number" id="mobile_number" placeholder="Mobile Number">
            </div>
            <div class="form-row mt-4">
                {{-- <button type="submit" class="btn btn-danger col">Confirm</button> --}}
                <a href="/dinner/home" class="btn btn-danger col">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection