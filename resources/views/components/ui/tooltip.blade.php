@props(['id'])

<div id="{{ $id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
    {{ $slot }}
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>
