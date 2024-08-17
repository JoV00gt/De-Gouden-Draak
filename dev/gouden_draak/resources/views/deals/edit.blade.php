<x-checkout-layout>
<div class="container w-3/4 py-3 mx-auto px-4">
    <h2 class="text-2xl font-bold mb-4">Wijzig aanbieding</h2> <!-- TODO: Translation -->
    <form action="{{ route('deals.update', $deal->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Begindatum</label><!-- TODO: Translation -->
            <input type="date" name="start_date" class="w-full" value="{{ $deal->start_date }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('start_date')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">Einddatum</label><!-- TODO: Translation -->
            <input type="date" name="end_date"class="w-full" value="{{ $deal->expire_date }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('end_date')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="dish" class="block text-gray-700 text-sm font-bold mb-2">Gerecht</label><!-- TODO: Translation -->
            <select id="dish" name="dish" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="" selected>Selecteer een gerecht</option><!-- TODO: Translation -->
                @foreach($items as $item)
                    <option value="{{ $item->id }}"  {{ $deal->menu_id == $item->id ? 'selected' : '' }}>
                    {{ $item->addition }}{{ $item->item_number }} {{ $item->name }}
                    </option>
                @endforeach
            </select>
            @error('dish')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Nieuwe prijs</label><!-- TODO: Translation -->
            <input type="number" step="0.01" id="price" name="price" value="{{ $deal->price }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('price')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Wijzig aanbieding</button><!-- TODO: Translation -->
        </div>
    </form>
</div>
</x-checkout-layout>