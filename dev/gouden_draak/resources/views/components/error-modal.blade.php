
<div id="{{ $attributes->get('id') }}" class="modal">
    <div class="flex items-center justify-between modal-content">
        <p id="modalMessage"> {{ $slot }}</p>
        <span class="close">&times;</span>
    </div>
</div>