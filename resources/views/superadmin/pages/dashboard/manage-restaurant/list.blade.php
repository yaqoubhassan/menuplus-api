@extends('layouts.superadmin.page-details')

@section('title', 'Cities & Territories')

@section('content')
      @section('page-title', 'Manage Restaurants')
      <div class="mt-5 flex justify-between space-x-10">
        <div class="w-3/12 btn btn-red">
          <a href="{{route('superadmin.dashboard.restaurants.create')}}" class="no-underline hover:no-underline hover:text-white">Add New Restaurant</a>
        </div>
        <div class="w-7/12 search-field">
          <div class="flex justify-between items-center space-x-5">
            <input type="text" class="w-11/12 search-field-input" placeholder="Search Restaurant">
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
          <div class="grid grid-cols-5 gap-4">
            <div>Restaurant Name</div>
            <div>Location</div>
            <div>Phone</div>
            <div>Email</div>
            <div></div>
          </div>
        </div>
      </div>
      <div class="rounded-sm px-5 mb-3 py-3 bg-darkAsh-300 cursor-pointer">
        <div class="text-darkAsh-50">
          <div class="grid grid-cols-5 gap-4">
            <div onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1'])}}'">Americano</div>
            <div onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1'])}}'">Sydney</div>
            <div onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1'])}}'">2358-754-12</div>
            <div onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1'])}}'">Josep@menuplus.com</div>
            <div class="text-right flex space-x-8 justify-center">
              <span onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1111'])}}'">Edit</span>
              <span><i class="fa fa-trash text-red-500"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="rounded-sm px-5 mb-3 py-3 bg-darkAsh-300 cursor-pointer" onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1'])}}'">
        <div class="text-darkAsh-50">
          <div class="grid grid-cols-5 gap-4">
            <div>Americano</div>
            <div>Sydney</div>
            <div>2358-754-12</div>
            <div>Josep@menuplus.com</div>
            <div class="text-right flex space-x-8 justify-center">
              <span>Edit</span>
              <span><i class="fa fa-trash text-red-500"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="rounded-sm px-5 mb-3 py-3 bg-darkAsh-300 cursor-pointer" onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1'])}}'">
        <div class="text-darkAsh-50">
          <div class="grid grid-cols-5 gap-4">
            <div>Americano</div>
            <div>Sydney</div>
            <div>2358-754-12</div>
            <div>Josep@menuplus.com</div>
            <div class="text-right flex space-x-8 justify-center">
              <span>Edit</span>
              <span><i class="fa fa-trash text-red-500"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="rounded-sm px-5 mb-3 py-3 bg-darkAsh-300 cursor-pointer" onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1'])}}'">
        <div class="text-darkAsh-50">
          <div class="grid grid-cols-5 gap-4">
            <div>Americano</div>
            <div>Sydney</div>
            <div>2358-754-12</div>
            <div>Josep@menuplus.com</div>
            <div class="text-right flex space-x-8 justify-center">
              <span>Edit</span>
              <span><i class="fa fa-trash text-red-500"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="rounded-sm px-5 mb-3 py-3 bg-darkAsh-300 cursor-pointer" onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1'])}}'">
        <div class="text-darkAsh-50">
          <div class="grid grid-cols-5 gap-4">
            <div>Americano</div>
            <div>Sydney</div>
            <div>2358-754-12</div>
            <div>Josep@menuplus.com</div>
            <div class="text-right flex space-x-8 justify-center">
              <span>Edit</span>
              <span><i class="fa fa-trash text-red-500"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="rounded-sm px-5 mb-3 py-3 bg-darkAsh-300 cursor-pointer" onclick="location.href='{{route('superadmin.dashboard.restaurants.view', ['id' => '1'])}}'">
        <div class="text-darkAsh-50">
          <div class="grid grid-cols-5 gap-4">
            <div>Americano</div>
            <div>Sydney</div>
            <div>2358-754-12</div>
            <div>Josep@menuplus.com</div>
            <div class="text-right flex space-x-8 justify-center">
              <span>Edit</span>
              <span><i class="fa fa-trash text-red-500"></i></span>
            </div>
          </div>
        </div>
      </div>
@stop