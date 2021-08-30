@extends('layouts.waiter_template')

@section('title','Tables')

@section('User_Avatar')
    <a href="/waiter/home"><img src="{{ asset('/image/profile/example.jpg')}}" class="img img-fluid rounded-circle circular-border p-0" style="border: 1px solid white; height: 40px; width: 40px;"/></a>
@endsection

@section('content')
@include('templates.area_tables_template')
<div class="row justify-content-center">
    {{-- Page Title --}}
    <span class="text-light" style="font-size: 24px;">Tables</span>
</div>
<br>
<div class="row justify-content-center">
    <span class="text-danger h6"><i class="fas fa-circle"></i> Reserved</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span class="text-success h6"><i class="fas fa-circle"></i> Open</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <span class="text-light h6"><i class="fas fa-circle"></i> Vacant</span>
</div>
<div class="row justify-content-center my-4">
    @foreach ($tables as $table)
        @include('templates.table_template')
    @endforeach
</div>
@endsection