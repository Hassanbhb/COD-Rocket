@props(['icon', 'disabled' => false])

@php
	$itemWireTarget = $attributes->get('wire:click');
	$disabledClasses = isset($disabled) && $disabled ? 'pointer-events-none opacity-40 cursor-not-allowed' : 'cursor-pointer'
@endphp

<li {{ $attributes->merge(["class" => "flex items-center gap-3 px-3 py-2 hover:bg-gray-100 text-xs rounded-md dark:hover:bg-gray-700 $disabledClasses"]) }}>
	@isset($icon) <x-ui.icon class="!w-4" :name="$icon" wire:loading.remove wire:target="{{ $itemWireTarget }}"/> @endisset
	<x-ui.icon class="!w-4 animate-spin" name="arrow-path" wire:loading wire:target="{{ $itemWireTarget }}"/>
	{{ $slot }}
</li>