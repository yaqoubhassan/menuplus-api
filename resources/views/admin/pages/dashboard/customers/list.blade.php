@extends('layouts.admin.authorized')

@section('title', 'Payment')

@section('content')
  @section('page-title', 'Customers Data')
  <div style="height: auto; text-align: left; padding: 50px 80px;">
    <div style="margin-top: 20px;  overflow: auto; width: 1000px;">
      <div class="row mb-3">
        <div class="col-xl-9 col-md-9 col-lg-9 col-sm-9 col-9">
          <input type="text" class="form-control control-input" placeholder="Search">
          <i class="fa fa-search input-icon"></i>
        </div>
        <div class="col-xl-3 col-md-3 col-lg-3 col-sm-3 col-3">
          <button class="btn btn-danger btn-block"><i class="fa fa-download mr-2"></i>Download Customers Data</button>
        </div>
      </div>
      <div class="row mb-2 table-row">
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">Select</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">Full name</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">Contact Mobile</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">Email Address</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">Total Spent</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">Opt Out</div>
      </div>
      <div class="row mb-2" style="background-color: #2a2f33; padding: 10px 15px;">
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">
          <div class="custom-control custom-checkbox">  
            <input type="checkbox" class="custom-control-input" id="customCheck1">  
            <label class="custom-control-label" for="customCheck1"></label>  
        </div>
        </div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">John Doe</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">123-124-123</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">johndoe@gmail.com</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">$150</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2"><b>No</b></div>
      </div>
      <div class="row mb-2" style="background-color: #2a2f33; padding: 10px 15px;">
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">
          <div class="custom-control custom-checkbox">  
            <input type="checkbox" class="custom-control-input" id="customCheck2">  
            <label class="custom-control-label" for="customCheck2"></label>  
        </div>
        </div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">John Doe</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">123-124-123</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">johndoe@gmail.com</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2">$150</div>
        <div class="col-xl-2 col-md-2 col-lg-2 col-sm-2 col-2"><b>No</b></div>
      </div>
    </div>
  </div>
@stop