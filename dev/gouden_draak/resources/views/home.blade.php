<x-home-layout>
    <div class="font-bold p-10 text-center">
        <p class="mb-4">{{__('introduction')}}</p>
        <h2 class="underline text-lg mb-2">{{__('deals-special-title')}}</h2>
        @if($deal)
            <h2 class="underline text-2xl">{{$deal->dish->name}}</h2>
            <p>{{__('valid')}} {{date('d-m-Y', strtotime($deal->start_date))}} {{__('till')}} {{date('d-m-Y', strtotime($deal->expire_date))}}.<br>
                {{__('price_before')}} € {{number_format($deal->dish->price, 2, ',', '.')}} {{__('price_after')}} <b>€ {{ number_format($deal->price, 2, ',', '.') }}</b>
            </p>
        @else 
            <p>{{__('no-results')}}</p>
        @endif
    </div>

</x-home-layout>