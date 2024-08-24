<x-checkout-layout>
<div class="container w-3/4 py-3 mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">{{__('dishes-create-title')}}</h1>
    <form action="{{ route('menu.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">{{__('name')}}</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">{{__('category')}}</label>
            <select id="category" name="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="" selected>{{__('dishes-select-default-option')}}</option>
                @foreach($categories as $category)
                    <option value="{{ $category->name }}" {{ old('category') == $category->name ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div id="new-category-field" class="mb-4 hidden">
            <label for="new_category" class="block text-gray-700 text-sm font-bold mb-2">{{__('dishes-new-category')}}</label>
            <input type="text" id="new_category" name="new_category" value="{{ old('new_category') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('new_category')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">{{__('price')}}</label>
            <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('price')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">{{__('description')}}</label>
            <textarea id="description" name="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description') }}</textarea>
            @error('description')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex items-center justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{__('dishes-add')}}</button>
        </div>
    </form>
</div>
</x-checkout-layout>