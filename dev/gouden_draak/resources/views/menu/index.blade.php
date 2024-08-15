<x-checkout-layout>
    @if(session()->has('success'))
        <div>
            <x-flash-message class="bg-green-400 dark:bg-green-800">{{ session('success') }}</x-flash-message>
        <div>
    @endif
   <div class="pt-4 flex justify-end">
    @role('admin')
        <x-primary-button>
            <a href="{{ route('menu.create') }}">
               {{__('dishes-add')}}
            </a>
        </x-primary-button>
    @endrole
   </div>
   <div class="pt-2">
   <table class=" menu-table min-w-full divide-y divide-gray-200">
    <thead class="menu-table-header">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('dishes-item')}}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('name')}}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('category')}}</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('price')}}</th>
            @role('admin')
                <th colspan="2" scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">{{__('dishes-actions')}}</th>
            @endrole
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($items as $item)
            <tr>
                <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->addition}}{{$item->item_number}}</td>
                <td class="max-w-lg px-6 py-4 text-sm text-gray-500"><b>{{ $item->name }}</b><i> {{ $item->description }}</i></td>
                <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->dish }}</td>
                <td class="max-w-xs px-6 py-4 whitespace-nowrap text-sm text-gray-500">€ {{ $item->price }}</td>
                @role('admin')
                    <td>
                        <a href="{{ route('menu.edit', $item->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{__('dishes-edit')}}</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('menu.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>{{__('dishes-delete')}}</x-danger-button>
                        </form>
                    </td>
                @endrole
            </tr>
        @endforeach
    </tbody>
    </table>
    <div class="py-4 px-3">
        {{ $items->links() }}
    </div>
   </div>
</x-checkout-layout>