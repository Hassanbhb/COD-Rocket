@props(['id', 'title', 'type' => 'info'])

@php
	$classes = match($type) {
		'info' => 'border-blue-300 bg-blue-50 text-blue-800',
		'success' => '',
		'danger' => '',
		'warning' => '' 
	}
@endphp
<div id="{{ $id }}" {{ $attributes->merge(["class" => "p-4 border rounded-lg relative " .  $classes]) }} role="alert">
	<div class="flex items-center">
		<svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
			<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
		</svg>
		<h3 class="text-lg font-medium">{{ __($title) }}</h3>
	</div>

	@isset($slot)
		<div class="mt-2 text-sm text-sm opacity-60 w-full lg:w-4/5">{{ $slot }}</div>
	@endisset

	<button type="button" data-dismiss-target="#{{ $id }}" aria-label="Close" @class([
		"ms-auto absolute top-4 right-4 -mx-1.5 -my-1.5 rounded-lg inline-flex items-center justify-center h-8 w-8", $classes
	])>
		<span class="sr-only">Close</span>
		<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
		  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
		</svg>
	</button>
</div>