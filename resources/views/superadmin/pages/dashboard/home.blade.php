@extends('layouts.superadmin.authorized')

@section('title', 'Dashboard')

@section('content')
      @section('page-title', 'Dashboard')
      <div class="mt-10">
            @foreach($navs as $nav)
                  <div class="flex justify-center space-x-7">
                        @foreach($nav as $item)
                              <i class="{{$item['icon']}} fa-3x block -mt-5 relative card-icon"></i>
                              <a href="{{route($item['link'])}}" class="hover:no-underline hover:text-white cursor-pointer mb-20 bg-darkAsh-200 text-center py-5 rounded-lg w-1/4 space-between">
                                    <span class="block">{{$item['title']}}</span>
                              </a>
                        @endforeach
                  </div>
            @endforeach
      </div>
@stop