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
    <div class="row pl-5 mt-3 mx-0">
        <a href="javascript:history.back()" class="text-light"><i class="fa fa-chevron-left"></i></a>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            {{-- Restaurant Logo Goes Here --}}
            @yield('restaurant_logo')
        </div>
        @yield('after_logo')
        <div class="row justify-content-center">
            <div class="col-10">
                <hr class="bg-secondary">
            </div>
        </div>
        @yield('content')
        <br><br>
    </div>
</body>
</html>