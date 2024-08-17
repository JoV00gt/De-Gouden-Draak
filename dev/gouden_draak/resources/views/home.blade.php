<x-homelayout>
    <div class="text-bold  text-center">
        <p class="mb-4">Al jaren is De Gouden Draak een begrip als het gaat om de beste afhaalgerechten in 's-Hertogenbosch.
            Graag trakteren we u op authentieke gerechten uit de Cantonese keuken.</p>
        <h1 class="underline text-lg mb-2">Speciale aanbieding</h1> <!-- TODO: translation -->
        <h1 class="underline text-2xl">{{$deal->dish->name}}
        </h1>
        <p>Geldig van {{date('d-m-Y', strtotime($deal->start_date))}} tot {{date('d-m-Y', strtotime($deal->expire_date))}}.<br>
            Prijs was: € {{number_format($deal->dish->price, 2, ',', '.')}} is nu: <b>€ {{ number_format($deal->price, 2, ',', '.') }}</b>
        </p>
        <h1 class="text-2xl"></h1>
    </div>

</x-homelayout>