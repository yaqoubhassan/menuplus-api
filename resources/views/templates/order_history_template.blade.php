<div class="col-12 mt-3">
    <div class="box-div w-100 p-4">
        <div class="row justify-content-between px-3">
            {{-- Enter the Name of the Restaurant Here --}}
            <span class="text-light" style="font-size: 16px;">{{$order[0]}}</span>
            <a href="#" class="text-light"><small>View Details</small></a>
        </div>
        <div class="row px-3">
            {{-- Enter the Time of Order Here --}}
            <span class="text-secondary"><small>{{$order[1]}}</small></span>
        </div>
        <div class="row justify-content-center my-4">
            <div class="col-6">
                <button class="btn btn-danger w-100 py-2">Reorder</button>
            </div>
        </div>
    </div>
</div>