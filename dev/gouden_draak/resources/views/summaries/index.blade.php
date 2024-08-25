<x-checkout-layout>
<div class="container w-3/4 py-3 mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">{{__('summary-title')}}</h1>
    <ul>
        @foreach ($files as $file)
            <li>
                <a href="{{ Storage::url($file) }}" download>
                    {{ basename($file) }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
</x-checkout-layout>