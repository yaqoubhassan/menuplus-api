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
    <div class="container mt-5 mb-4">
        <div class="row justify-content-center pt-5">
            <div class="box-div col-md-6 col-11 mb-4">
                <div class="shift-up">
                    <div class="row justify-content-center">
                        <img class="img img-fluid" src="{{ asset('/image/MenuPlus_logo.png')}}" width="104px" height="107px">
                    </div><br>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @yield('scripts')
</body>
</html>