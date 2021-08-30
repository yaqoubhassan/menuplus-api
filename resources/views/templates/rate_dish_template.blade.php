<div class="box-div-order my-4 p-3">
    <div class="row">
        <div class="col-3 p-0">
            <div class="order-image">
                {{-- Display the image of the Dish here --}}
                <img src="{{asset('/image/thumbnails/Pizzas.png')}}" class="img img-fluid order-image-with-dashborder">
            </div>
        </div>
        <div class="col-7 pl-1">
            <div class="row">
                {{-- Enter the name of the Dish here --}}
                <span class="text-light h4">Sirloin-Steak</span>
            </div>
            <div class="row">
                {{-- Enter the discription of the dish here --}}
                <span class="text-secondary" style="font-size: 8px;">Fresh Australian Tiger Prawns, Avocados, Shredded Iceberg, with Classical Mayonnaise</span>
            </div>
            <br>
            <div class="row justify-content-between my-0 py-0">
                <span class="text-secondary" style="font-size: 10px;">Share with your friends on social media</span>
            </div>
            <div class="row justify-content-between my-0 py-0">
                {{-- Allow dinners to share the dish through social media --}}
                <a href="#"><img src="{{asset('/image/icons/whatsapp.png')}}" class="img img-fluid"></a>
                <a href="#"><img src="{{asset('/image/icons/facebook.png')}}" class="img img-fluid"></a>
                <a href="#"><img src="{{asset('/image/icons/instagram.png')}}" class="img img-fluid"></a>
                <a href="#"><img src="{{asset('/image/icons/twitter.png')}}" class="img img-fluid"></a>
            </div>
        </div>
        <div class="col-2  p-0">
            <span class="text-danger" style="font-size: 20px;"><i class="fas fa-heart"></i></span>
        </div>
    </div>
</div>