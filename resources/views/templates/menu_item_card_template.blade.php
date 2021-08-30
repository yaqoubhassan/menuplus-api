<div class="menu-cards ml-3 mr-2 my-3">
    <div class="container">
        <a href="/dinner/{{$menuItem[1]}}">
            <div class="menu-card-image" style="background: transparent url('/image/thumbnails/Pizzas.png') no-repeat; background-size: cover;"></div>
        </a>
        <div class="p-0 row menu-card-content pl-3">
            <div class="row w-100 mb-1"><a href="#"><span class="text-danger">
                @if ($menuItem[0] == 0)
                    <i class="far fa-heart"></i>
                @else
                    <i class="fas fa-heart"></i>
                @endif
            </span></a></div>
            <div class="row w-100"><a href="/dinner/{{$menuItem[1]}}"><span class="h6 text-light">{{$menuItem[1]}}</span></a></div>
            <div class="row w-100 mb-1"><span class="text-secondary" style="font-size: 10px">{{$menuItem[2]}}</span></div>
            <div class="row justify-content-between w-100">
                <span class="text-light">{{$menuItem[3]}}</span>
                <a href="#"><div class="menu-card-add bg-danger"><span class="text-light"><i class="fas fa-plus"></i></span></div></a>
            </div>
        </div>
    </div>
</div>