<x-home-layout>
    <div id="cocktails" class="grid grid-cols-3 gap-4">
        <div v-for='cocktail in cocktails' class="border rounded-xl m-2 p-5">
            <h1>@{{ cocktail.strDrink }}</h1>
            <img :src="cocktail.strDrinkThumb" alt="cocktail.strDrink">
            <p>@{{ cocktail.strInstructions }}</p>
        </div>
    </div>

    <script> window.items = @json($cocktails) </script>

    <script src="{{ asset('js/vue/cocktails.js') }}" defer></script>
</x-home-layout>