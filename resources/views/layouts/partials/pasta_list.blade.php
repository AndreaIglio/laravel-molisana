<div class="pasta">

<h2 style="text-align:center">LE LUNGHE</h2>
<div class="pasta_list flex">

    @foreach($pasta_list as $key=> $pasta)

        @if($pasta['tipo'] == 'lunga') 
           
        <div class="pasta_card">
            <div class="overlay_pasta_card">
                    <img class="overlay_icon" src="{{ asset('img/hover_icon.svg') }}" alt="">
                    <h4>{{ $pasta['titolo'] }}</h4>
                    <img src="{{ $pasta['src'] }}" alt="">
            </div>
        </div>
        @endif

    @endforeach

</div>

<h2 style="text-align:center">LE CORTE</h2>
<div class="pasta_list flex">

    @foreach($pasta_list as $pasta)

        @if($pasta['tipo'] == 'corta')
               
        <div class="pasta_card">
            <div class="overlay_pasta_card">
                    <img class="overlay_icon" src="{{ asset('img/hover_icon.svg') }}" alt="">
                    <h4>{{ $pasta['titolo'] }}</h4>
                    <img src="{{ $pasta['src'] }}" alt="">
            </div>
        </div>
        @endif

    @endforeach

</div>

<h2 style="text-align:center">LE CORTISSIME</h2>
<div class="pasta_list flex">

    @foreach($pasta_list as $pasta)

        @if($pasta['tipo'] == 'cortissima')
               
        <div class="pasta_card">
            <div class="overlay_pasta_card">
                    <img class="overlay_icon" src="{{ asset('img/hover_icon.svg') }}" alt="">
                    <h4>{{ $pasta['titolo'] }}</h4>
                    <img src="{{ $pasta['src'] }}" alt="">
            </div>
        </div>
        @endif

    @endforeach

</div>
</div>