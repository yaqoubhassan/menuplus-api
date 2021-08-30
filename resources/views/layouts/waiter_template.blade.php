<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_styles.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark py-3">
        <div class="container-fluid">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    {{-- change this to the left arrow caret symbol --}}
                    <a href="javascript:history.back()" class="nav-link text-light"><i class="fa fa-chevron-left"></i></a>
                </li>
            </ul>&emsp;&emsp;&emsp;
            <div class="mx-auto order-0">
                {{-- The Logo of the restaurant goes here --}}
                <a href="#" class="navbar-brand mx-auto"><img src="{{ asset('/image/res_logos/americano_logo_example.png')}}" class="img img-fluid" width="80px"></a>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    {{-- This link logs out the Waiter User --}}
                    <a href="#" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-between mt-3 mr-2">
            {{-- Show Login Time or Start Shift Time --}}
            <div class="col-4">
                @yield('User_Avatar')
            </div>
            <div class="col-xs-6 col-4">
                <div class="row justify-content-end">
                    <img src="{{ asset('/image/icons/Group 116.svg')}}" class="img img-fluid">&nbsp;
                    <span class="h5 text-light mt-2">&nbsp;00:21</span>
                </div>
            </div>
        </div>
        <br>
        @yield('content')
        <footer>
            <div class="row justify-content-center my-1">
                <span class="text-secondary"><strong>Copyright 2021 | Powered By Menuplus</strong></span>
            </div>
        </footer>
    </div>
</body>
</html>