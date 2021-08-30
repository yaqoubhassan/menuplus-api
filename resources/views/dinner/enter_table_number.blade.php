@extends('layouts.account_access')

@section('title')
    Table Number
@endsection

@section('content')
<div class="row justify-content-center">
    <p class="h5 text-light">Enter your table number</p>
</div><br>
<div class="row justify-content-center mt-4">
    <div class="col-md-8 col-10">
        <form class="form" action="" method="POST">
            @csrf
            <div class="form-row">
                <input class="form-control" type="text" name="table_number" id="table_number" placeholder="Table Number">
            </div>
            <div class="form-row mt-4">
                {{-- <button type="submit" class="btn btn-danger col">Confirm</button> --}}
                <a href="/dinner/menu" class="btn btn-danger col">View Menu</a>
            </div>
        </form>
    </div>
</div>
@endsection