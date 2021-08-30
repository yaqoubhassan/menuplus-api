<div class="bg-darkAsh-200 text-gray-400 flex justify-between block md:hidden">
      <i class="mobile-menu-button fa fa-bars fa-2x block p-4 font-bold hover:bg-gray-700"></i>
      <a href="" class="block p-4 font-bold">Profile</a>
</div>
{{-- mobile menu bar --}}
<div class="sidebar bg-darkAsh-200 text-blue-100 w-64 space-y-6 absolute md:relative md:translate-x-0 py-7 
       inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out">
      <div class="text-right mr-3 md:hidden">
            <i class="fa fa-times fa-2x mobile-menu-button"></i>
      </div>
      <a href="#">
            <img src="{{asset('image/MenuPlus_logo.png')}}" alt="Logo" srcset="" class="restaurant-logo mx-auto">
      </a>
      <nav>
            <a href="{{route('dashboard.home')}}" class="text-white block hover:bg-darkAsh-400 hover:text-white transition duration-200 flex hover:no-underline @yield('dashboard-nav-active')">
                  @php
                        $toggleRedBar = View::hasSection('dashboard-nav-redbar') ? 'redbar-active' : 'redbar-inactive'
                  @endphp
                  <div class="active border-l-4 border-red-600 py-3 no-underline {{$toggleRedBar}}"></div>
                  <div class="px-4 py-3">Dashboard</div>
            </a>
            <a href="{{route('payments.home')}}" class="text-white block hover:bg-darkAsh-400 hover:text-white transition duration-200 flex hover:no-underline @yield('payments-nav-active')">
                  @php
                        $toggleRedBar = View::hasSection('payments-nav-redbar') ? 'redbar-active' : 'redbar-inactive'
                  @endphp
                  <div class="active border-l-4 border-red-600 py-3 no-underline {{$toggleRedBar}}"></div>
                  <div class="px-4 py-3">Payment</div>
            </a>
            <a href="{{route('accountinfo.home')}}" class="text-white block hover:bg-darkAsh-400 hover:text-white transition duration-200 flex hover:no-underline @yield('accountinfo-nav-active')">
                  @php
                        $toggleRedBar = View::hasSection('accountinfo-nav-redbar') ? 'redbar-active' : 'redbar-inactive'
                  @endphp
                  <div class="active border-l-4 border-red-600 py-3 no-underline {{$toggleRedBar}}"></div>
                  <div class="px-4 py-3">Account Info</div>
            </a>
      </nav>
</div>