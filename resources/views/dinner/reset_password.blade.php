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
                <input class="form-control" type="password" name="new_password" id="new_password" placeholder="Enter a New Password">
            </div>
            <div class="form-row mt-3">
                <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
            </div>
            <div class="form-row mt-4">
                {{-- <button type="submit" class="btn btn-danger col">Confirm</button> --}}
                <a href="/dinner/reset/successful" class="btn btn-danger col">Change Password</a>
            </div>
        </form>
    </div>
</div>
@endsection