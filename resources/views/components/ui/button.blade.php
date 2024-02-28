@props(['style' => 'primary', 'icon', 'sideover'])

@php
	$wireTarget = $attributes->get('wire:click');
	$buttonClasses = match($style) {
		'mute' => 'text-gray-500 border-gray-400 dark:text-gray-300 dark:border-gray-600',
		'outline' => 'text-primary disabled:border-gray-400 disabled:text-gray-500',
		'primary' => 'text-white border-primary bg-primary disabled:bg-gray-200 disabled:text-gray-500 disabled:border-gray-200',
		'secondary' => 'text-white border-secondary bg-secondary disabled:bg-gray-200 disabled:text-gray-500 disabled:border-gray-200',
		default => 'text-white border-primary bg-primary disabled:bg-gray-200 disabled:text-gray-500',
	}
@endphp


<button @isset($sideover) data-drawer-target="{{ $sideover }}" data-drawer-show="{{ $sideover }}" data-drawer-placement="right" @endisset type="button" {{ $attributes->merge([
	"class" => "flex-none font-medium border flex items-center justify-center gap-3 rounded-lg text-sm px-3 md:px-4 py-2.5 disabled:cursor-not-allowed focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center gap-3 disabled:cursor-not-allowed $buttonClasses",
	"type" => "button"
]) }} wire:loading.attr="disabled" wire:target="{{ $wireTarget }}">
	@isset($icon) <x-ui.icon class="!w-3.5" :name="$icon" wire:loading.remove wire:target="{{ $wireTarget }}"/> @endisset
	<x-ui.icon class="!w-3.5 animate-spin" name="arrow-path" wire:loading wire:target="{{ $wireTarget }}"/>
	{{ $slot }}
</button>