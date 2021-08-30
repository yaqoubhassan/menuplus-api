@extends('layouts.admin.authorized')

@section('title', 'Manage Tables')

@section('content')
      @section('page-title', 'Manage Table')
      <div class="mt-20">
            @foreach($menusNav as $nav)
                  <div class="flex justify-center space-x-7 flex-wrap">
                        @foreach($nav as $item)
                              <div class="cursor-pointer mb-10 bg-darkAsh-200 text-center py-4 rounded-lg w-1/4 space-between" onclick="window.location='{{route($item['link'])}}'">
                                    <span class="block">{{$item['title']}}</span>
                              </div>
                        @endforeach
                  </div>
            @endforeach
            <div class="title-w900"></div>
            <div class="flex justify-center space-x-7 flex-wrap mt-10">
                  <div class="cursor-pointer mb-10 bg-darkAsh-200 text-center py-4 rounded-lg w-1/4 space-between" onclick="window.location='{{route('dashboard.menus.create')}}'">
                        <span class="block">Create New Menu</span>
                  </div>
                  <div class="cursor-pointer mb-10 bg-darkAsh-200 text-center py-4 rounded-lg w-1/4 space-between" onclick="window.location='{{route($item['link'])}}'">
                        <span class="block">View & Edit Menu</span>
                  </div>
            </div>
      </div>
@stop