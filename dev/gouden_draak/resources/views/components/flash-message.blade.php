<div id="flash" class="mx-auto sm:px-6 py-6">
    <div {{ $attributes->merge(['class' => 'overflow-hidden shadow-sm sm:rounded-lg']) }}>
        <div class="p-4 text-gray-900 dark:text-gray-100">
            {{ $slot }}
        </div>
    </div>
</div>