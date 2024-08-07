<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'De Gouden Draak') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{ asset('css/component.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/ordering.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/general.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/sales.css') }}" rel="stylesheet"/>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/vue@2" defer></script>
        <script src="{{ asset('js/ordering.js') }}" defer></script>
        <script src="{{ asset('js/salesModal.js') }}" defer></script>
        <script src="{{ asset('js/orderModal.js') }}" defer></script>
        <script src="{{ asset('js/flash.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="flex justify-between border-b-blue-600 border-b-[3px] p-2">
            <div>
                <img class="h-20" src="{{url('images/goodpay.png')}}"/>
            </div>
            <div> 
                <x-checkout-button>
                    <a href="{{ route('order') }}">
                        {{ __('Kassa') }}
                    </a>
                </x-checkout-button>
                <x-checkout-button>
                    <a href="{{ route('menu') }}">
                        {{ __('Gerechten') }}
                    </a>
                </x-checkout-button>
                <x-checkout-button>
                    <a href="{{ route('sales') }}">
                        {{ __('Verkoop Overzicht') }}
                    </a>
                </x-checkout-button>    
                <form method="POST" class="inline-block" action="{{ route('logout') }}">
                    @csrf
                    <x-checkout-button class="ml-12">
                        {{ __('Log Uit') }}
                    </x-checkout-button>
                </form>
            </div>
            <div></div>
        </div>
        <div class="flex flex-col justify-start items-center">
            <div class="w-full px-4 py-2 shadow-md overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
