<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu - {{$menuItem}}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_styles.css') }}">
</head>
<body>
    <div class="row pl-4 mt-3 mx-0">
        <a href="javascript:history.back()" class="text-light"><i class="fa fa-chevron-left"></i></a>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-between ml-4">
            <div class="">
                <span class="text-light" style="font-size: 18px"><i class="far fa-thumbs-up"></i></span>
                <br>
                <span class="text-secondary" style="font-size: 10px"><i class="far fa-dot-circle"></i></span>
                <div class="vl"></div>
                <span class="text-secondary" style="font-size: 10px"><i class="far fa-dot-circle"></i></span>
            </div>
            <div class="menuItem-img" style="background: transparent url('/image/thumbnails/Pizzas.png') no-repeat; background-size: cover;"></div>
        </div>
        <div class="row justify-content-start mx-4">
            <span class="text-light h5">{{$menuItem}}</span>
        </div>
        <div class="row justify-content-between mx-4">
            <div class="col-10 p-0">
                <span class="text-secondary">Fresh Australian Tiger Prawns, Avocados, Shredded Iceberg, with Classical Mayonnaise</span>
            </div>
            <div class="col-1">
                <span class="text-danger" style="font-size: 20px"><i class="far fa-heart"></i></span>
            </div>
        </div>
        <div class="row ml-4 mt-4">
            <div class="col-3 p-0">
                <div class="container">
                    <div class="row justify-content-between px-2 mt-1">
                        <span class="text-light" style="font-size: 15px; font-weight: bold">$ 20.99</span>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-2 offset-md-1 p-0">
                <div class="container">
                <div class="row justify-content-between px-2">
                    <button class="btn btn-dark btn-sm"><i class="fas fa-plus"></i></button>
                    <span class="text-light mt-1"> 0 </span>
                    <button class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                </div>
                </div>
            </div>
            <div class="col-3 offset-md-2 p-0">
                <div class="container">
                    <div class="row justify-content-between px-2">
                        <select class="form-control sm select-grey" name="state" id="state">
                            <option value="0">Large</option>
                            <option value="1">Medium rear</option>
                            <option value="2">Small</option>
                        </select>
                    </div>
                </div>
            </div>
        </div><br>
        <hr class="bg-dark">
        <div class="row  ml-4 ">
            <span class="text-secondary">Select Spices and Sauces</span>
        </div>
        <div class="row ml-4">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="salt" name="salt">
                    <label class="form-check-label text-secondary" for="salt"> Salt </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="salt" name="salt">
                    <label class="form-check-label text-secondary" for="salt"> Pepper </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="salt" name="salt">
                    <label class="form-check-label text-secondary" for="salt"> Soy Sauce </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="salt" name="salt">
                    <label class="form-check-label text-secondary" for="salt"> Chilli Sauce </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="salt" name="salt">
                    <label class="form-check-label text-secondary" for="salt"> Green Sauce </label>
                </div>
            </div>
        </div><br>
        <hr class="bg-dark">
        <div class="row  ml-4 ">
            <span class="text-secondary">Select Side Dishes</span>
        </div>
        <div class="ml-3 side-dish-slider mr-1 py-3">
                @for ($i = 0; $i < 5; $i++)
                    @include('templates.side_dish_item_template')
                @endfor
        </div><br>
        <hr class="bg-dark">
        <div class="row ml-4 ">
            <span class="text-secondary">Special Request</span>
        </div>
        <div class="ml-4 mr-4">
            <textarea name="special_req" id="special_req" cols="10" rows="3" class="form-control bg-dark"></textarea>
        </div>
        <div class="row mx-4 mt-4 justify-content-center">
            <a href="/dinner/view/orders" class="btn btn-danger w-100 d-md-none"><strong>Add to Order</strong></a>
            <a href="/dinner/view/orders" class="btn btn-danger w-50 d-none d-md-inline-block "><strong>Add to Order</strong></a>
        </div>
        <br>
    </div>
</body>
</html>