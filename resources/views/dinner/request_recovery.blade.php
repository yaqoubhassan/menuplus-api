@extends('layouts.account_access')

@section('title')
    Request Password Recovery
@endsection

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8 col-10">
        <form class="form" action="" method="POST">
            @csrf
            <div class="form-row">
                <input class="form-control" type="text" name="phone_number" id="phone_number" placeholder="Enter your mobile Number">
            </div>
            <div class="form-row mt-4">
                {{-- <button type="submit" class="btn btn-danger col">Confirm</button> --}}
                <a href="/dinner/reset/password" class="btn btn-danger col">Send Code</a>
            </div>
        </form>
    </div>
</div>
@endsection