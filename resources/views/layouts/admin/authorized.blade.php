@extends('layouts.admin.app')

@section('main')
      @php
            $routeActive = explode('.', Route::currentRouteName())[0];
      @endphp
      <div class="relative min-h-screen md:flex">
            @section($routeActive . '-nav-active', 'active')
            @section($routeActive . '-nav-redbar', 'redbar-active')
            @include('layouts.admin.sidebar')
            <div class="p-10 flex-1">
                  <img src="{{asset('image/MenuPlus_logo.png')}}" alt="Logo" srcset="" class="restaurant-logo mx-auto">
                  <div class="text-2xl text-center mt-5 font-bold"><b>Café Americano</b></div>
                  <div class="text-xl text-center mt-5">
                        <b>@yield('page-title')</b>
                  </div>
                  <div class="mt-100">
                        @yield('content')
                  </div>
            </div>
      </div>
@stop