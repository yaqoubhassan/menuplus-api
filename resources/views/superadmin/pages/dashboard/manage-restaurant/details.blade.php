@extends('layouts.superadmin.page-details')

@section('title', 'Products & Services')

@section('content')
  @section('page-title', 'Restaurant Details')
  <div class="mt-5">
    <div class="flex justify-between">
      <div class="rounded-sm px-5 py-4 bg-darkAsh-300">
        <div class="flex items-center">
          <div class="bg-darkAsh-50 h-10 w-10 rounded-full flex  items-center justify-center">
            <i class="fa fa-dollar"></i>
          </div>
          <div class="ml-4">
            <div class="text-2xl"><b>226K</b></div>
            <div class="text-darkAsh-50">Total Revenue</div>
            <div class="text-darkAsh-50">10% (30 Days)</div>
          </div>
        </div>
      </div>
      <div class="rounded-sm px-5 py-4 bg-darkAsh-300">
        <div class="flex items-center">
          <div class="bg-darkAsh-50 h-10 w-10 rounded-full flex  items-center justify-center">
            <i class="fa fa-dollar"></i>
          </div>
          <div class="ml-4">
            <div class="text-2xl"><b>755</b></div>
            <div class="text-darkAsh-50">Total Orders</div>
            <div class="text-darkAsh-50">10% (30 Days)</div>
          </div>
        </div>
      </div>
      <div class="rounded-sm px-5 py-4 bg-darkAsh-300">
        <div class="flex items-center">
          <div class="bg-darkAsh-50 h-10 w-10 rounded-full flex  items-center justify-center">
            <i class="fa fa-users"></i>
          </div>
          <div class="ml-4">
            <div class="text-2xl"><b>71</b></div>
            <div class="text-darkAsh-50">Total Clients</div>
            <div class="text-darkAsh-50">10% (30 Days)</div>
          </div>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-12 gap-4 mt-4">
      <div class="col-span-6 rounded-sm px-5 py-4 bg-darkAsh-300">
        <div class="flex justify-between space-x-5">
          <div>
            <label for="" class="text-xs text-darkAsh-50 font-light">
              Restaurant Name
            </label>
            <input type="text" placeholder="Restaurant Name" value="Americano" class="input-field">
          </div>
          <div>
            <label for="" class="text-xs text-darkAsh-50 font-light">
              Contact Person Name
            </label>
            <input type="text" placeholder="Restaurant Name" value="Joseph" class="input-field">
          </div>
        </div>
        <div class="flex justify-between space-x-5">
          <div class="flex-1"> 
            <label for="" class="text-xs text-darkAsh-50 font-light">
              Address
            </label>
            <input type="text" placeholder="Restaurant Name" value="Sydney Austrailia" class="input-field">
          </div>
        </div>
        <div class="flex justify-between space-x-5">
          <div class="flex-1"> 
            <label for="" class="text-xs text-darkAsh-50 font-light">
              Phone No
            </label>
            <input type="text" placeholder="Phone No" value="123-12321-12" class="input-field">
          </div>
        </div>
        <div class="flex justify-between space-x-5">
          <div class="flex-1"> 
            <label for="" class="text-xs text-darkAsh-50 font-light">
              Email
            </label>
            <input type="text" placeholder="Email" value="americano@menuplus.com" class="input-field">
          </div>
        </div>
        <div class="flex justify-between space-x-5">
          <div>
            <label for="" class="text-xs text-darkAsh-50 font-light">
              Capacity
            </label>
            <input type="text" placeholder="Capacity" value="400" class="input-field">
          </div>
          <div>
            <label for="" class="text-xs text-darkAsh-50 font-light">
              Service Type
            </label>
            <input type="text" placeholder="Service Type" value="" class="input-field">
          </div>
        </div>
        <div class="flex justify-between space-x-5">
          <div>
            <label for="" class="text-xs text-darkAsh-50 font-light">
              Date
            </label>
            <input type="text" placeholder="Date" value="" class="input-field">
          </div>
          <div class="w-1/2">
            <label for="" class="text-xs text-darkAsh-50 font-light">
              Plan
            </label>
            <div class="select input-field">
              <select id="standard-select h-full">
                <option value="Option 1">Annually</option>
              </select>
              <span class="focus"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-6 rounded-sm px-3 py-4 bg-darkAsh-300">
        <div class="flex justify-between items-center">
          <div>Sales Report</div>
          <div class="text-green-700">Export as CSV</div>
          <div>
            <div class="select input-field w-12/12">
              <select id="standard-select h-full">
                <option value="Option 1">30 Days</option>
              </select>
              <span class="focus"></span>
            </div>
          </div>
        </div>
        <div class="mt-5 px-2 flex justify-between text-darkAsh-50 font-light">
          <div>Sales Report</div>
          <div>QTY sold</div>
          <div>Revenue</div>
        </div>
        <div class="mt-3 py-3 px-2 text-xs rounded-lg bg-darkAsh-200 border-darkAsh-500 flex justify-between text-white font-light">
          <div class="flex justify-center">
            <div>Pizza</div>
          </div>
          <div>10</div>
          <div>$150</div>
        </div>
        <div class="mt-3 py-3 px-2 text-xs rounded-lg bg-darkAsh-200 border-darkAsh-500 flex justify-between text-white font-light">
          <div class="flex justify-center">
            <div>Pizza</div>
          </div>
          <div>10</div>
          <div>$150</div>
        </div>
        <div class="mt-3 py-3 px-2 text-xs rounded-lg bg-darkAsh-200 border-darkAsh-500 flex justify-between text-white font-light">
          <div class="flex justify-center">
            <div>Pizza</div>
          </div>
          <div>10</div>
          <div>$150</div>
        </div>
        <div class="mt-3 py-3 px-2 text-xs rounded-lg bg-darkAsh-200 border-darkAsh-500 flex justify-between text-white font-light">
          <div class="flex justify-center">
            <div>Pizza</div>
          </div>
          <div>10</div>
          <div>$150</div>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-12 gap-4 mt-4">
      <div class="col-span-6 rounded-sm px-5 py-4 bg-darkAsh-300">
        <div class="flex justify-between items-center">
          <div>
            Favourite Dish
          </div>
          <div>
            <div class="select input-field w-12/12">
              <select id="standard-select h-full">
                <option value="Option 1">Weekly</option>
              </select>
              <span class="focus"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-6 rounded-sm px-3 py-4 bg-darkAsh-300">
        <div class="flex justify-between items-center">
          <div>Dishes</div>
        </div>
        <div class="grid grid-row2-2 grid-cols-3 flex-wrap mt-4 gap-3 font-light">
          <div class="bg-darkAsh-400 text-center py-3">Liked<br>Dishes</div>
          <div class="bg-darkAsh-400 text-center py-3">Disliked<br>Dishes</div>
          <div class="bg-darkAsh-400 text-center py-3">Best Sold<br>Dishes</div>
          <div class="bg-darkAsh-400 text-center py-3">Least Sold<br>Dishes</div>
          <div class="bg-darkAsh-400 text-center py-3">Shared On<br> Social Media<br>Dishes</div>
        </div>
      </div>
    </div>
  </div>
@stop