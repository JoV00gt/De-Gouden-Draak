<x-checkout-layout>
    <div id="menuroot">
        @if(session()->has('success'))
            <div>
                <x-flash-message class="bg-green-400 dark:bg-green-800">{{ session('success') }}</x-flash-message>
            </div>
        @endif
        <div class="pt-4 flex justify-between">
            <div class="flex space-x-8">
                <search-bar :text="'{{__('search')}}'" @search="updateSearchQuery"></search-bar>
                <category-filter :categories="categories" :text="'{{ __('category-all') }}'" @category-selected="updateCategory"></category-filter>
            </div>
            @role('admin')
                <x-primary-button>
                    <a href="{{ route('menu.create') }}"> {{__('dishes-add')}}</a>
                </x-primary-button>
            @endrole
        </div>
        <div class="pt-2">
   <table v-if="hasResults" class=" menu-table min-w-full divide-y divide-gray-200">
    <thead class="menu-table-header">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('dishes-item')}}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('name')}}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('category')}}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('price')}}</th>
            <th scope="col" colspan="2" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('deals')}}</th> 
            @role('admin')
                <th colspan="2" scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"></th>
            @endrole
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="item in filteredItems" :key="item.id">
                    <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        @{{ item.addition }}@{{ item.item_number }}
                    </td>
                    <td class="max-w-lg px-6 py-4 text-sm text-gray-500">
                        <b>@{{ item.name }}</b><i> @{{ item.description }}</i>
                    </td>
                    <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        @{{ item.dish }}
                    </td>
                    <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        € @{{ formatPrice(item.price) }}
                    </td>
                    <td colspan="2" class="max-w-lg px-6 py-4 whitespace-nowrap text-sm text-gray-500" v-if="item.final_price && item.final_price != item.price">
                        € @{{ formatPrice(item.final_price) }} <i>(@{{ item.deal_start_date }} to @{{ item.deal_expire_date }})</i> 
                    </td>
                    @role('admin')
                        <td class="max-w-lg px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a :href="'/menu/edit/' + item.id" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{__('dishes-edit')}}</a>
                        </td>
                        <td class="max-w-lg px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <form :action="'/menu/destroy/' + item.id" method="post">
                                @csrf
                                @method('DELETE')
                                <x-danger-button>{{__('dishes-delete')}}</x-danger-button>
                            </form>
                        </td>
                    @endrole
                </tr>
            </tbody>
    </table>
    <div v-else class="flex h-full items-center justify-center text-4xl w-full">
        <p>No results found</p>
    </div>
   </div>
    </div>
    <script> window.items = @json($items) </script>
    <script src="{{ asset('js/vue/search-bar.js') }}" defer></script>
</x-checkout-layout>