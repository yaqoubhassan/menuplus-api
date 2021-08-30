@if ($table[1] == "opened")
    <div class="tables-display {{$table[1]}} p-4 m-2">
        <a href="/waiter/orders/{{$table[0]}}">
            <div class="row justify-content-center">
                {{-- Display Table Number Here --}}
                <span class="h5 text-light">Table {{$table[0]}}</span>
            </div>
            <div class="row justify-content-center mt-3">
                {{-- Display the Open Table Image Here --}}
                    <img src="{{asset('/image/icons/table_opened.svg')}}" class="img img-fluid" width="80px">
            </div>
            <div class="row justify-content-center mt-3">
                {{-- Display How Many People The Table Can Take Here --}}
                <span class="text-secondary"><i class="fas fa-users"></i>&nbsp;&nbsp;{{$table[2]}} people</span>
            </div>
        </a>
    </div>
@else
    <div class="tables-display {{$table[1]}} p-4 m-2">
        @if ($table[1] == "reserved")
            <a href="#">
        @endif
        <div class="row justify-content-center">
            {{-- Display Table Number Here --}}
            <span class="h5 text-light">Table {{$table[0]}}</span>
        </div>
        <div class="row justify-content-center mt-3">
            {{-- Display the Table State Image Here --}}
            @if ($table[1] == "reserved")
                <img src="{{asset('/image/icons/table_reserved.svg')}}" class="img img-fluid" width="80px">
            @else
                <img src="{{asset('/image/icons/table_vacant.svg')}}" class="img img-fluid" width="80px">
            @endif
        </div>
        <div class="row justify-content-center mt-3">
            {{-- Display How Many People The Table Can Take Here --}}
            <span class="text-secondary"><i class="fas fa-users"></i>&nbsp;&nbsp;{{$table[2]}} people</span>
        </div>
        @if ($table[1] == "reserved")
        </a>
        @endif
    </div>
@endif