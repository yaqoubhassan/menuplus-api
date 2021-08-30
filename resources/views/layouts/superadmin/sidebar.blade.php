{{-- mobile menu bar --}}
<div class="bg-darkAsh-200 text-gray-400 flex justify-between block md:hidden">
      <i class="mobile-menu-button fa fa-bars fa-2x block p-4 font-bold hover:bg-gray-700"></i>
      <a href="" class="block p-4 font-bold">Profile</a>
</div>
<div class="absolute top-0 sidebar bg-darkAsh-200 text-blue-100 w-64 space-y-6 md:relative md:translate-x-0 py-7 
       inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out">
      <div class="text-right mr-3 md:hidden">
            <i class="fa fa-times fa-2x mobile-menu-button"></i>
      </div>
      <a href="#">
            <img src="{{asset('image/MenuPlus_logo.png')}}" alt="Logo" srcset="" class="restaurant-logo mx-auto">
      </a>
      <nav>
            <a href="{{route('superadmin.dashboard.home')}}" class="text-white block hover:bg-darkAsh-400 hover:text-white transition duration-200 flex hover:no-underline @yield('dashboard-nav-active')">
                  @php
                        $toggleRedBar = View::hasSection('dashboard-nav-redbar') ? 'redbar-active' : 'redbar-inactive'
                  @endphp
                  <div class="active border-l-4 border-red-600 py-3 no-underline {{$toggleRedBar}}"></div>
                  <div class="px-4 py-3">Dashboard</div>
            </a>
            <a href="{{route('superadmin.products.home')}}" class="text-white block hover:bg-darkAsh-400 hover:text-white transition duration-200 flex hover:no-underline @yield('products-nav-active')">
                  @php
                        $toggleRedBar = View::hasSection('products-nav-redbar') ? 'redbar-active' : 'redbar-inactive'
                  @endphp
                  <div class="active border-l-4 border-red-600 py-3 no-underline {{$toggleRedBar}}"></div>
                  <div class="px-4 py-3">Products & Services</div>
            </a>
            <a href="{{route('superadmin.statistics.home')}}" class="text-white block hover:bg-darkAsh-400 hover:text-white transition duration-200 flex hover:no-underline @yield('statistics-nav-active')">
                  @php
                        $toggleRedBar = View::hasSection('statistics-nav-redbar') ? 'redbar-active' : 'redbar-inactive'
                  @endphp
                  <div class="active border-l-4 border-red-600 py-3 no-underline {{$toggleRedBar}}"></div>
                  <div class="px-4 py-3">Statistics & Analysis</div>
            </a>
            <a href="{{route('superadmin.account.list')}}" class="text-white hover:bg-darkAsh-400 hover:text-white transition duration-200 flex hover:no-underline @yield('account-nav-active')">
                  @php
                        $toggleRedBar = View::hasSection('account-nav-redbar') ? 'redbar-active' : 'redbar-inactive'
                  @endphp
                  <div class="active border-l-4 border-red-600 py-3 no-underline {{$toggleRedBar}}"></div>
                  <div class="px-4 py-3">Account</div>
            </a>
      </nav>
</div>