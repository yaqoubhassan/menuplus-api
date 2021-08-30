@extends('layouts.dinner_menus_template')

@section('title')
    Sub Menu - {{$menu}}
@endsection

@section('restaurant_logo')
    <img src="{{asset('/image/res_logos/americano_logo_example.png')}}" class="img img-fluid"  width="200px">
@endsection

@section('after_logo')
    <div class="row justify-content-center mb-4 mt-5">
        {{-- Sub Menu Goes Here --}}
        <span class="h4 text-light" style="font-weight: bold;">{{$menu}}</span>
    </div>
@endsection

@section('content')
    <div class="row justify-content-center mt-2">
        @foreach ($submenus as $submenu)
            <div class="submenu-item-display m-2" style="background: url('/image/thumbnails/{{$submenu}}.png') no-repeat;background-size: contain;"">
                <a href="/dinner/list/{{$submenu}}">
                    <div class="submenu-item-display px-2" style="background: transparent linear-gradient(180deg, #00000000 0%, #0F1213 100%) 0% 0% no-repeat padding-box;">
                        <span class="text-light" style="text-align: center;">
                            {{$submenu}}
                        </span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection