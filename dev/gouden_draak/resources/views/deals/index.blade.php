<x-checkout-layout>
    <div>
        @if(session()->has('success'))
            <div>
                <x-flash-message class="bg-green-400 dark:bg-green-800">{{ session('success') }}</x-flash-message>
            <div>
        @endif
        <div class="pt-4 flex justify-end">
            <x-primary-button>
                <a href="{{ route('deals.create') }}">{{__('deals-add')}}</a> 
            </x-primary-button>
        </div>
        <div class="pt-2">
   <table class="menu-table min-w-full divide-y divide-gray-200">
    <thead class="menu-table-header">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('dishes-item')}}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('name')}}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('new-price')}}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('validity')}}</th>
            <th colspan="2" scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider"></th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
            @foreach($deals as $deal)
                <tr v-for="item in filteredItems" :key="item.id">
                    <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $deal->dish->addition }}{{$deal->dish->item_number }}
                    </td>
                    <td class="max-w-lg px-6 py-4 text-sm text-gray-500">
                        {{ $deal->dish->name }}
                    </td>
                    <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        € {{ number_format($deal->price, 2, ',', '.') }}
                    </td>
                    <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ date('d-m-Y', strtotime($deal->start_date)) }} - {{ date('d-m-Y', strtotime($deal->expire_date)) }}
                    </td>
                        <td>
                            <a href="{{ route('deals.edit', $deal->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{__('deals-edit')}}</a>
                        </td>
                        <td>
                            <form action="{{ route('deals.destroy', $deal->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <x-danger-button>{{__('deals-delete')}}</x-danger-button>
                            </form>
                        </td>
                </tr>
            @endforeach
            </tbody>
    </table>
   </div>
    </div>
</x-checkout-layout>
