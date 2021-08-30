<div class="order-item py-4 my-2 col-12">
    <a href="#" class="order-close text-light"><i class="far fa-trash-alt" style="font-size: 10px;"></i></a>
    <div class="row justify-content-center">
        <div class="col-5">
            {{-- Enter Menu Item here --}}
            <a href="#" class="h6 text-light">{{$order_item}}</a>
        </div>
        <div class="col-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <select name="serve_as" id="serve_as" class="form-control select-grey">
                        <option value="entree">Entree</option>
                        <option value="main">Main</option>
                        <option value="dessert">Dessert</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row justify-content-center">
                <div class="col-12">
                    <select name="pos" id="pos" class="form-control select-grey">
                        <option value="1">#1</option>
                        <option value="2">#2</option>
                        <option value="3">#3</option>
                        <option value="4">#4</option>
                        <option value="5">#5</option>
                        <option value="6">#6</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>