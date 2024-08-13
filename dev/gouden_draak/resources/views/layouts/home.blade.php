<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'De Gouden Draak') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/home.css') }}" rel="stylesheet"/>
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#8B0B00]">
    <!-- scrolling bar with text -->
    <div class="m-5 ml-10 mr-10 bg-[#FF1D00]">
        <div class="flex flex-row font-chinese justify-between pb-1 text-3xl text-[#ffff00]">
            <div class="flex flex-row items-center ml-14">
                <img src="{{ asset('images/dragon-small.png') }}" alt="logo" class="h-14 max-w-xs w-14">
                <h1>{{__('title')}}</h1>
                <img src="{{ asset('images/dragon-small-flipped.png') }}" alt="logo" class="h-14 max-w-xs w-14">
            </div>
            <div class="content-center flex">
                <marquee behavior="scroll" direction="left" class="m-1 mr-2">
                    <a class="font-sans text-sm font-bold" href="/">{{ __('checkout-deals') }}</a>
                </marquee>
                <div class="flex">
                    <x-nav-link dusk="lang-gb" :href="route('locale.setting', 'en')"><span class="fi fi-gb"></span></x-nav-link>
                    <x-nav-link dusk="lang-nl" :href="route('locale.setting', 'nl')"><span class="fi fi-nl"></span></x-nav-link>
                </div>
            </div>
            <div class="flex flex-row items-center mr-14">
                <img src="{{ asset('images/dragon-small.png') }}" alt="logo" class="h-14 max-w-xs w-14">
                <h1>{{__('title')}}</h1>
                <img src="{{ asset('images/dragon-small-flipped.png') }}" alt="logo" class="h-14 max-w-xs w-14">
            </div>
        </div>
        <div class="bg-background-borders">
            <div>
            <div class="flex flex-row justify-between m-24 font-sans">
                <img src="{{ asset('images/dragon-small.png') }}" alt="logo" class="w-52 h-52">
                <div class="text-center text-4xl font-bold text-[#ffff00]">
                    <h1 class="m-2">{{__('subtitle')}}</h1>
                    <h1 class="m-2">{{__('title')}}</h1>
                    <div class="inline-flex flex-wrap border border-black text-sm text-white">
                        <a class="m-1 pl-10 pr-10 pt-2 pb-2 shadow-sm bg-img bg-backgroundbutton" href="{{route('customer.index')}}">{{__('nav-menu')}}</a>
                        <a class="m-1 pl-10 pr-10 pt-2 pb-2 shadow-sm bg-img bg-backgroundbutton" href="{{route('news')}}">{{__('nav-news')}}</a>
                        <a class="m-1 pl-10 pr-10 pt-2 pb-2 shadow-sm bg-img bg-backgroundbutton" href="{{route('contact')}}">{{__('nav-contact')}}</a>
                    </div>
                </div>
                <img src="{{ asset('images/dragon-small-flipped.png') }}" alt="logo" class="w-52 h-52">
            </div>
            <div class="ml-40 mr-40 mb-6 bg-white border border-black">
                {{ $slot }}
            </div>
            <div class="flex flex-row justify-center mb-10">
                <a href="/contact" class="text-sm text-[#ffff00]">{{__('contact-link')}}</a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>