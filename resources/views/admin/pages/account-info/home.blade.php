@extends('layouts.admin.authorized')

@section('title', 'Dashboard')

@section('content')
      @section('page-title', 'Account Info')
      <div class="mt-20">
            @foreach($accountInfoNav as $nav)
                  <div class="flex justify-center space-x-7">
                        @foreach($nav as $item)
                              <i class="{{$item['icon']}} fa-3x block -mt-5 relative card-icon"></i>
                              <div class="cursor-pointer mb-20 bg-darkAsh-200 text-center py-5 rounded-lg w-1/4 space-between" onclick="window.location='{{route($item['link'])}}'">
                                    <span class="block">{!! $item['title'] !!}</span>
                              </div>
                        @endforeach
                  </div>
            @endforeach
      </div>
@stop