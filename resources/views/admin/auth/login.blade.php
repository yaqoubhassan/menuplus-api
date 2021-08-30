@extends('layouts.admin.visitor')

@section('title', 'Login')

@section('content')
  <img src="{{asset('image/MenuPlus_logo.png')}}" alt="Logo" srcset="" class="restaurant-logo mt-5">
  <div class="h1">Welcome to the <b>MenuPlus</b></div>
  <div class="login-card">
    <div class="login-inputs text-white">
      <form action="{{route('dashboard.home')}}" method="GET">
        <input type="text" placeholder="Email Or Phone Number" class="form-control login-input">
        <input type="text" placeholder="Password" class="form-control login-input">
        <input type="text" placeholder="Verification Code" class="form-control login-input">
        <button type="submit" class="btn btn-danger btn-block login-button">Login</button>
      </form>
    </div>
  </div>
@stop