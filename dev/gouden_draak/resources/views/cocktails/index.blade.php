<x-home-layout>
    <div id="cocktails">
        <div class="flex flex-row p-4 space-x-8">
            <cocktail-search :text="'{{__('search')}}'" @search="updateSearchQuery"></cocktail-search>
            <category-filter :categories="categories" :text="'{{ __('category-all') }}'" @category-selected="updateCategory"></category-filter>
        </div>
        <div v-if="hasResults" class="grid grid-cols-4 gap-3">
            <div v-for="cocktail in filteredItems" class="border border-gray-700 rounded-lg m-4 p-4 bg-white shadow-md hover:shadow-lg transition-shadow duration-300">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">@{{ cocktail.strDrink }}</h3>
                <img :src="cocktail.strDrinkThumb" alt="cocktail.strDrink" class="w-full h-48 object-cover rounded-md mb-3">
                <p class="text-gray-600 text-sm">{{__('ingredient')}} @{{ cocktail.strIngredient1 }}, @{{ cocktail.strIngredient2 }}, @{{ cocktail.strIngredient3 }}</p>
            </div>
        </div>
        <div v-else class="flex h-full items-center justify-center p-10 text-2xl w-full">
            <p>{{__('no-results')}}</p>
        </div>
    </div>
    <script> window.items = @json($cocktails) </script>
    <script src="{{ asset('js/vue/cocktails.js') }}" defer></script>
</x-home-layout>