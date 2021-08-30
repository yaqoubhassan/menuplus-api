@extends('layouts.superadmin.page-details')

@section('title', 'Manage Accounts')

@section('content')
      @section('page-title', 'Manage Accounts')
      <div class="mt-5 flex justify-between items-center space-x-10">
        <div class="mr-5 text-2xl">Customers</div>
        <div class="flex-1 search-field">
          <div class="flex justify-between items-center space-x-5">
            <input type="text" class="w-11/12 search-field-input" placeholder="Search Name">
            <div class="w-1/12 text-center"><i class="fa fa-search"></i></div>
          </div>
        </div>
        <div class="w-2/12 search-field">
          <div class="select bg-darkAsh-200 text-darkAsh-100">
            <select id="standard-select h-full">
              <option value="Option 1">All</option>
            </select>
            <span class="focus"></span>
          </div>
        </div>
      </div>
      <div class="rounded-sm mt-5 mb-1 px-5 py-3 bg-darkAsh-300">
        <div class="text-darkAsh-50">
          <div class="grid grid-cols-5 gap-4 text-xs">
            <div>User Name</div>
            <div>Restaurant</div>
            <div>Phone</div>
            <div>Email</div>
          </div>
        </div>
      </div>
      <div class="rounded-sm px-5 mb-3 py-3 cursor-pointer bg-darkAsh-300" onclick="location.href='{{route('superadmin.products.customers.view', ['id' => '1'])}}'">
        <div class="text-darkAsh-50">
          <div class="grid grid-cols-5 gap-4">
            <div>Joseph</div>
            <div>Americano</div>
            <div>2358-754-12</div>
            <div>Josep@menuplus.com</div>
          </div>
        </div>
      </div>
@stop