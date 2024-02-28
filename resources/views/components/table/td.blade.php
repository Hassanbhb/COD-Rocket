@php $tdWireTarget = $attributes->get('wire:target') @endphp

<td {{ $attributes->merge(["class" => "px-6 py-4 whitespace-nowrap"]) }}>
	<div wire:target="{{ $tdWireTarget }}" wire:loading class="h-2 bg-gray-200 rounded-full w-full mb-2.5"></div>
	<div wire:target="{{ $tdWireTarget }}" wire:loading.remove class="dark:text-gray-100">{{ $slot }}</div>
</td>