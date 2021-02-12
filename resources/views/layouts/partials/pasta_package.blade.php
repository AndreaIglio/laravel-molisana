<div class="flex-center" style="flex-wrap:wrap">

    @foreach($pasta_list as $pasta)

    <div class="flex-center column">

    <h2>{{ $pasta['titolo'] }}</h2>
    <img src="{{ $pasta['src-p'] }}" style="width: 500px" alt="">

    </div>
    @endforeach

</div>