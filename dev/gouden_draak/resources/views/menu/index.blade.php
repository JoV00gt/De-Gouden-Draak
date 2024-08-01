<x-checkout-layout>
   <div class="pt-4">
   <table class=" menu-table min-w-full divide-y divide-gray-200">
    <thead class="menu-table-header">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Item</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white tracking-wider">Name</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Description</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Categorie</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Price</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">Actions</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($items as $type => $dishes)
            @foreach($dishes as $dish)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $dish->id}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $dish->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $dish->description }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $type }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $dish->price }}</td>
            </tr>
            @endforeach
        @endforeach
    </tbody>
    </table>
    <div class="py-4 px-3">
        {{ $items->links() }}
    </div>
   </div>
</x-checkout-layout>