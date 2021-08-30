@extends('layouts.superadmin.page-details')

@section('title', 'Cities & Territories')

@section('content')
      @section('page-title', 'Cities & Territories')
      <div class="mt-5 flex justify-between block space-x-10">
        <div class="w-8/12 search-field">
          <div class="flex justify-between items-center space-x-5">
            <input type="text" class="w-11/12 search-field-input" placeholder="Suburb name or post code">
            <div class="w-1/12 text-center"><i class="fa fa-search"></i></div>
          </div>
        </div>
        <div class="w-4/12 text-darkAsh-50 border-2 border-darkAsh-200 px-5 py-3 bg-darkAsh-200 text-right rounded-lg">NSW Sydney - 2000</div>
      </div>
      <div class="rounded-lg mt-3 p-4 bg-darkAsh-200 grid grid-cols-1">
        <div class="text-darkAsh-50 mb-4">
          <div class="grid grid-cols-12 gap-4">
            <div class="col-span-4 text-center">Business Type</div>
            <div class="col-span-8 grid gap-4 grid-cols-4 place-items-center">
              <div>Activate</div>
              <div>Inactive</div>
              <div>Menuplus</div>
              <div>Mis-en Plus</div>
            </div>
          </div>
        </div>
        <div class="mb-2">
          <div class="grid grid-cols-12 gap-4">
            <div class="col-span-4">
              <div class="flex justify-center">
                <div class="w-10/12 place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">Cafes & Takeaway</div>
              </div>
            </div>
            <div class="col-span-8 grid gap-4 grid-cols-4 place-items-center">
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">80</div>
              </div>
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">70</div>
              </div>
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">60</div>
              </div>
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">50</div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-2">
          <div class="grid grid-cols-12 gap-4">
            <div class="col-span-4">
              <div class="flex justify-center">
                <div class="w-10/12 place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">Cafes & Takeaway</div>
              </div>
            </div>
            <div class="col-span-8 grid gap-4 grid-cols-4 place-items-center">
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">80</div>
              </div>
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">70</div>
              </div>
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">60</div>
              </div>
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">50</div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-2">
          <div class="grid grid-cols-12 gap-4">
            <div class="col-span-4">
              <div class="flex justify-center">
                <div class="w-10/12 place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">Cafes & Takeaway</div>
              </div>
            </div>
            <div class="col-span-8 grid gap-4 grid-cols-4 place-items-center">
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">80</div>
              </div>
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">70</div>
              </div>
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">60</div>
              </div>
              <div class="flex justify-center">
                <div class="place-items-center border-darkAsh-400 rounded-lg py-2 px-3 bg-darkAsh-400 
                border-2 text-darkAsh-50">50</div>
              </div>
            </div>
          </div>
        </div>
      </div>
@stop