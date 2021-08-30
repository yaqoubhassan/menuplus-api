@extends('layouts.dinner_page_template')

@section('title')
    {{$submenu}}
@endsection

@section('content')
<div class="row mb-5 mt-3">
    @foreach ($menuItems as $menuItem)
        @include('templates.menu_item_card_template')
    @endforeach
</div>
@endsection