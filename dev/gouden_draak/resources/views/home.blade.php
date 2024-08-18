<x-home-layout>
    <div class="font-bold p-10 text-center">
        <h2 class="mb-4">{{__('introduction')}}</h2>
        <h1 class="underline text-lg mb-2">Speciale aanbieding</h1> <!-- TODO: translation -->
        <h1 class="underline text-2xl">{{$deal->dish->name}}
        </h1>
        <p>Geldig van {{date('d-m-Y', strtotime($deal->start_date))}} tot {{date('d-m-Y', strtotime($deal->expire_date))}}.<br>
            Prijs was: € {{number_format($deal->dish->price, 2, ',', '.')}} is nu: <b>€ {{ number_format($deal->price, 2, ',', '.') }}</b>
        </p>
    </div>

</x-home-layout>