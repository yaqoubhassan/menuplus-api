@extends('layouts.dinner_menus_template')

@section('title')
    Menu
@endsection

@section('restaurant_logo')
    <img src="{{asset('/image/res_logos/americano_logo_example.png')}}" class="img img-fluid"  width="200px">
@endsection

@section('after_logo')
    <div class="row justify-content-center mt-4">
        <span class="text-secondary">Chef Cuisine</span>
    </div>
    <div class="row justify-content-center mb-4">
        {{-- Name of Chef Goes Here --}}
        <span class="h5 text-light" style="font-weight: bold;">George Givanni</span>
    </div>
@endsection

@section('content')
    <div class="row justify-content-center mt-2">
        @foreach ($menus as $menu)
            <div class="menu-item-display m-2" style="background: url('/image/thumbnails/{{$menu}}.png') no-repeat;background-size: contain;"">
                <a href="/dinner/{{$menu}}/submenus">
                    <div class="menu-item-display px-2" style="background: transparent linear-gradient(180deg, #00000000 0%, #0F1213 100%) 0% 0% no-repeat padding-box;">
                        <span class="text-light h5" style="text-align: center;">
                            {{$menu}}
                        </span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection