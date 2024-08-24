<x-home-layout>
    <div class="font-bold p-10 text-center">
        <h2 class="mb-4">{{__('introduction')}}</h2>
        <h1 class="underline text-lg mb-2">{{__('deals-special-title')}}</h1> 
        <h1 class="underline text-2xl">{{$deal->dish->name}}
        </h1>
        <p>{{__('valid')}} {{date('d-m-Y', strtotime($deal->start_date))}} {{__('till')}} {{date('d-m-Y', strtotime($deal->expire_date))}}.<br>
        {{__('price_before')}} € {{number_format($deal->dish->price, 2, ',', '.')}} {{__('price_after')}} <b>€ {{ number_format($deal->price, 2, ',', '.') }}</b>
        </p>
    </div>

</x-home-layout>