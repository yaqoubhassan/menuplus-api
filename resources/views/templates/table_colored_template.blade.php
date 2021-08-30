<div class="tables-display {{$table[3]}} p-4 m-2">
    {{-- <a href="/waiter/orders/{{$table[0]}}"> --}}
        <div class="row justify-content-center">
            {{-- Display Table Number Here --}}
            <span class="h5 text-light">Table {{$table[0]}}</span>
        </div>
        <div class="row justify-content-center mt-3">
            {{-- Display the Open Table Image Here --}}
                <img src="{{asset('/image/icons/table_opened.svg')}}" class="img img-fluid" width="80px">
        </div>
        <div class="row justify-content-center mt-3">
            {{-- Display Payment State Here --}}
            @if ($table[3] == 'billed')
                <span style="color: #ffed4a; font-size: 16px;">Billed</span>
            @else
                @if ($table[3] == 'paid')
                    <span style="color: rgb(32, 185, 32); font-size: 16px;">Payed</span>
                @else
                    <span style="color: whitesmoke; font-size: 16px;">Not-Billed</span>
                @endif
            @endif
            
        </div>
    {{-- </a> --}}
</div>