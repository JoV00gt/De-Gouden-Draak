<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#8B0B00]">
    <!-- scrolling bar with text -->
    <div class="m-5 ml-10 mr-10 bg-[#FF1D00]">
        <div class="flex flex-row justify-between font-chinese text-[#ffff00] text-3xl">
            <div class="flex flex-row items-center ml-14">
                <img src="{{ asset('images/dragon-small.png') }}" alt="logo" class="w-12 h-12 max-w-xs">
                <h1>De Gouden Draak</h1>
                <img src="{{ asset('images/dragon-small-flipped.png') }}" alt="logo" class="w-12 h-12">
            </div>
            <div class="content-center">
                <marquee behavior="scroll" direction="left" class="">
                    <a class="font-sans text-sm font-bold" href="/">Welkom bij de gouden draak. Klik op deze tekst om onze aanbiedingen te zien!</a>
                </marquee>
            </div>
            <div class="flex flex-row items-center mr-14">
                <img src="{{ asset('images/dragon-small.png') }}" alt="logo" class="w-12 h-12 max-w-xs">
                <h1>De Gouden Draak</h1>
                <img src="{{ asset('images/dragon-small-flipped.png') }}" alt="logo" class="w-12 h-12">
            </div>
        </div>
        <div class="bg-img bg-backgroundborders bg-cover p-16">
            <div class="flex flex-row justify-between m-24 font-sans">
                <img src="{{ asset('images/dragon-small.png') }}" alt="logo" class="w-52 h-52">
                <div class="text-center text-4xl font-bold text-[#ffff00]">
                    <h1 class="m-2">Chinees Indische Specialiteiten</h1>
                    <h1 class="m-2">De Gouden Draak</h1>
                    <div class="flex flex-row justify-center text-white font-bold text-sm p-1 border border-black">
                        <a class="m-1 pl-10 pr-10 pt-2 pb-2 shadow-sm bg-img bg-backgroundbutton" href="/">Menukaart</a>
                        <a class="m-1 pl-10 pr-10 pt-2 pb-2 shadow-sm bg-img bg-backgroundbutton" href="/">Nieuws</a>
                        <a class="m-1 pl-10 pr-10 pt-2 pb-2 shadow-sm bg-img bg-backgroundbutton" href="/">Contact</a>
                    </div>
                </div>
                <img src="{{ asset('images/dragon-small-flipped.png') }}" alt="logo" class="w-52 h-52">
            </div>
            <div class="ml-48 mr-48 mb-6 bg-white border border-black p-10">
                {{ $slot }}
            </div>
            <div class="flex flex-row justify-center mb-10">
                <a href="/contact" class="text-sm text-[#ffff00]">Naar contact</a>
            </div>
        </div>

    </div>
</body>

</html>