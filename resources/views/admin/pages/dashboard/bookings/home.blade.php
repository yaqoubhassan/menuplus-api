@extends('layouts.admin.authorized')

@section('title', 'Manage Tables')

@section('content')
      @section('page-title', 'Manage Bookings')
      <div class="row justify-content-center bookings">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 text-left">
                  <input id="datepicker" width="276" />
                  <script>
                        document.getElementById('datepicker').datepicker();
                  </script>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                  <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-6 text-left">
                              <div class="bookings-text">Current Bookings</div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 text-right">
                              <div class="select-div">
                                    <select class="select-custom">
                                          <option value="lunch" selected="selected">Lunch</option>
                                    </select>
                              </div>
                        </div>
                  </div>
                  <div class="row bookings-cards">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                              <div class="bookings-card">
                                    <div class="row">
                                          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 col-6 bookings-text">John Doe</div>
                                          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 col-6 text-right bookings-text">4 guests</div>
                                    </div>
                                    <div class="row">
                                          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 col-6" style="color: #FFFFFFE6">
                                                <i class="fa fa-clock-o mr-1"></i> 7:30
                                          </div>
                                          <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 col-6 text-right">Lunch</div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
@stop