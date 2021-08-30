<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_styles.css') }}">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-10 box-div p-5">
                <div class="row justify-content-center">
                    <div class="circle-confirm">
                        <span class="text-success"><i class="fas fa-check fa-5x"></i></span>
                    </div>
                </div>
                <div class="row justify-content-center mt-4">
                    <p class="h5 text-light">
                        Order has been 
                        Confirmed
                    </p>
                </div>
            </div>
        </div>
        <footer style="position: fixed; bottom: 0px; left: 20px;">
            <div class="my-1">
                <span class="text-secondary"><strong>Copyright 2021 | Powered By Menuplus</strong></span>
            </div>
        </footer>
    </div>
</body>
</html>