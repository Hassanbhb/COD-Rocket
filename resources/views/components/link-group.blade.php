@props(['name', 'expend'])

<div x-data="{ open: @js(isset($expend)) }">
	@isset($name)
		<h3 x-on:click="open = !open" class="mb-3 flex items-center gap-3 text-xs uppercase text-gray-500 font-medium">
			<span>{{ __($name) }}</span>
			<x-ui.icon name="chevron-down" x-bind:class="open && 'rotate-180'" class="!w-4 ml-auto transition-transform"/>
		</h3>
	@endisset

	<ul @isset($name) x-cloak x-show="open" @endisset class="text-sm font-medium space-y-2">
		{{ $slot }}
	</ul>
</div>