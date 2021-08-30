@extends('layouts.superadmin.visitor')

@section('title', 'Login')

@section('content')
  <div class="flex justify-center">
    <img src="{{asset('image/MenuPlus_logo.png')}}" alt="Logo" srcset="" class="restaurant-logo mt-5">
  </div>
  <div class="mt-3 text-2xl">Welcome to the <b>MenuPlus</b></div>
  <div class="mx-auto mt-5 flex justify-center mb-5">
    <div class="bg-darkAsh-300 md:w-1/3 w-full px-4 py-5 rounded-lg">
      <form action="{{route('superadmin.dashboard.home')}}" method="GET">
        <input type="text" placeholder="Email Or Phone Number" class="input-field">
        <input type="text" placeholder="Password" class="input-field">
        <input type="text" placeholder="Email Or Phone Number" class="input-field">
        <button class="text-white bg-red-600 w-full mt-4 py-2 rounded-lg">Login</button>
      </form>
    </div>
  </div>
@stop