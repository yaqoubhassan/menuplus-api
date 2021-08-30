@extends('layouts.waiter_template')

@section('title', 'Service')

@section('User_Avatar')
    <a href="/waiter/home"><img src="{{ asset('/image/profile/example.jpg')}}" class="img img-fluid rounded-circle circular-border p-0" style="border: 1px solid white; height: 40px; width: 40px;"/></a>
@endsection

@section('content')
@include('templates.area_tables_template')
<div class="row justify-content-center">
    {{-- Page Title --}}
    <span class="text-light" style="font-size: 24px;">Service</span>
</div>
<br>
<div class="row justify-content-center">
    <span class="text-warning h6"><i class="fas fa-circle"></i> Not-Served</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span class="text-success h6"><i class="fas fa-circle"></i> Served</span>
</div>
<br>
<div class="row justify-content-start ml-1">
    <span class="text-light"><strong>Open Tables</strong></span>
</div>
<div class="row justify-content-start ml-1">
    <span class="text-secondary">Serving {{count($open_tables)}} tables</span>
</div>
<div class="row justify-content-start my-4">
    @foreach ($open_tables as $table)
        @include('templates.table_colored_template')
    @endforeach
</div>
<br>
@endsection