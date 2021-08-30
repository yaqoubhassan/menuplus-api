@extends('layouts.account_access')

@section('title')
    Waiter Login
@endsection

@section('content')
<div class="row justify-content-center">
    <p class="h5 text-light">Add Your Information</p>
</div><br>
<div class="row justify-content-center">
    <div class="col-md-8 col-10">
        <form class="form" action="/waiter/home" method="POST">
            @csrf
            <div class="form-row">
                <input class="form-control" type="text" name="fullname" id="fullname" placeholder="Full name">
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="text" name="loginPin" id="loginPin" placeholder="Login Pin">
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="text" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number">
            </div>
            <div class="form-row mt-2">
                <label for="covid_symp" class="text-secondary ml-1"><small>Covid Symptoms</small></label>
                <select class="form-control select-dark" name="covid_symp" id="covid_symp" onchange="covidSignIn(this.id)">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-row mt-2">
                <input class="form-control" type="text" name="bodyTemp" id="bodyTemp" placeholder="Body Temperature">
            </div>
            <div class="form-row mt-4">
                <button id="confirm" type="submit" class="btn btn-danger col" disabled>Confirm</button>
                {{-- <a id="confirm" href="/waiter/home" class="btn btn-danger col">Confirm</a> --}}
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function covidSignIn(element){
        value = document.getElementById(element).value;
        var button = document.getElementById('confirm');
        if (value == 'No') {
            button.disabled = false;
        }else if (value == 'Yes'){
            button.disabled = true;
            alert('IMPORTANT NOTE - Please see your manager for Advice Immediately.');
        }else{
            button.disabled = true;
        }
    }
</script>
@endsection