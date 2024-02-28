@props(['path', 'icon'])

@php
	$isActive = isMatchingRoute($path);
	$hasChildren = isset($children);
@endphp

<li x-data="{ open: @js($isActive) }" class="group select-none">
	<span @class(['flex items-center px-3 py-1.5 rounded-lg', 'bg-primary/5 !py-3 text-primary dark:bg-white/5 dark:text-white' => !$hasChildren && $isActive])>
		<a class="flex gap-3 flex-1 text-xs items-center" href="{{ $hasChildren ? '#' : route($path) }}" wire:navigate>
			<x-ui.icon class="{{!$hasChildren && $isActive ? 'text-primary dark:text-white' : 'text-gray-400' }}" :type="$isActive ? 's' : 'o'" :name="$icon"/>
			<span>{{ $slot }}</span>
		</a>

		@isset($children)
			<span x-on:click="open = !open" class="inline-block flex-1">
				<x-ui.icon name="chevron-down" x-bind:class="open && 'rotate-180'" class="!w-4 ml-auto transition-transform"/>
			</span>
		@endisset
	</span>

	@isset($children)
		<ul x-cloak x-show="open" class="ml-6 space-y-2 mt-2">
			{{ $children }}
		</ul>
	@endisset
</li>