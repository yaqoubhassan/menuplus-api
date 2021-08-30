<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To MenuPlus</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body{
            background:url('/image/background_img_2x.png') 40% 30% no-repeat padding-box;
            opacity: 1;
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
        }
        .logo{
            top: 82px;
            left: 86px;
            width: 204px;
            height: 209px;
            background: transparent url('/image/MenuPlus_logo.png') 0% 0% no-repeat padding-box;
            opacity: 1;
        }
        .welcome_text{
            top: 342px;
            left: 97px;
            /* width: 182px; */
            height: 61px;
            color: #FFFFFF;
            text-align: center;
            letter-spacing: -0.48px;
            color: #FFFFFF;
            opacity: 1;
        }
        .thin-welcome{font: normal normal 100 30px/31px Helvetica Now Display;}
        .bold-welcome{font: normal normal bold 30px/31px Helvetica Now Display;}
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="logo">
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="welcome_text">
                <span class="thin-welcome">Welcome</span>
                <br>
                <span class="thin-welcome">to the</span>
                <span class="bold-welcome">MenuPlus</span>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center m-2  px-3">
            <a class="btn btn-danger w-100 d-md-none py-2" href="/dinner/signup"><small>COVID SAFE Sign-in to view our menus</small></a>
            <a class="btn btn-danger w-50 d-none d-md-inline-block py-2" href="/dinner/signup"><small>COVID SAFE Sign-in to view our menus</small></a>
        </div>
        <hr class="bg-secondary">
        <div class="row justify-content-center mt-5">
            <span class="text-light">Existing Customers</span>
        </div>
        <div class="row justify-content-center m-2 mb-5 px-3">
            <a class="btn btn-light w-100 d-md-none py-2 text-danger" style="font-weight: bold" href="/dinner/login">Login</a>
            <a class="btn btn-light w-50 d-none d-md-inline-block py-2 text-danger" style="font-weight: bold" href="/dinner/login">Login</a>
        </div>
        <br><br>
    </div>
</body>
</html>