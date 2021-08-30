@extends('layouts.superadmin.app')

@section('main')
      @php
            $routeActive = explode('.', Route::currentRouteName())[1];
      @endphp
      <div class="relative min-h-screen md:flex">
            @section($routeActive . '-nav-active', 'active')
            @section($routeActive . '-nav-redbar', 'redbar-active')
            @include('layouts.superadmin.sidebar')
            <div class="flex-1 p-10 mt-3 px-28">
                  <div class="flex justify-end mb-5">
                        <div class="flex space-x-10 items-center ">
                              <i class="fa fa-bell-o"></i>
                              <i class="fa fa-comment-o"></i>
                              <i class="fa fa-gift"></i>
                              <i class="fa fa-life-ring"></i>
                              <div class="flex">
                                    <div class="py-3 px-5 rounded-lg bg-darkAsh-200">
                                          Hello, Joseph
                                    </div>
                                    <div class="border-2 border-gray-900 -mx-8 rounded-full w-16 h-16">
                                          <img class="rounded-full w-16 h-16" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwt3oUUFPyoJ2S1OpCJ0GU-gI2pNXfeF7Uxw&usqp=CAU">
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="flex justify-center mb-28">
                    <a href="{{route('superadmin.dashboard.home')}}">
                      <img src="{{asset('image/MenuPlus_logo.png')}}" alt="Logo" srcset="" class="h-32 w-32">
                    </a>
                  </div>
                  @yield('content')
            </div>
      </div>
@stop