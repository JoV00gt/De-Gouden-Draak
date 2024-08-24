<x-home-layout>
    <div id="cocktails">
        <div class="flex flex-row">
            <cocktail-search :text="'{{__('search')}}'" @search="updateSearchQuery"></cocktail-search>
            <category-filter :categories="categories" :text="'{{ __('category-all') }}'" @category-selected="updateCategory"></category-filter>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div v-for='cocktail in filteredItems' class="border rounded-xl m-2 p-5">
                <h1>@{{ cocktail.strDrink }}</h1>
                <img :src="cocktail.strDrinkThumb" alt="cocktail.strDrink">
                <p>@{{ cocktail.strInstructions }}</p>
            </div>
        </div>
    </div>


    <script> window.items = @json($cocktails) </script>

    <script src="{{ asset('js/vue/cocktails.js') }}" defer></script>
</x-home-layout>